<?php
session_start();
include("mysql_connect.inc");
include("../include/PHPExcel.php");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
	if (isset($_GET['status'])) {
			if($_GET['status']==1){
				$_GET['status'] = "";
			}
			if($_GET['status']==2){
				$_GET['status']="等待付款";
			}
			if($_GET['status']==3){
				$_GET['status']="已支付";
			}
			if($_GET['status']==4){
				$_GET['status']="已取消";
			}
			if($_GET['status']==5){
				$_GET['status']="已付款";
			}
			$where = "where order_status like '%" . $_GET['status'] . "%'";
	}else {
			$where = "";
	}
//导出excel
    $xlsName  = "订单信息";//表名
        $xlsCell  = array(
            array('order_id','订单号'),
            array('receiving_name','收货人'),
			array('receiving_tel','电话'),
            array('goods_name','票名'),
            array('order_amount','总价'),
            array('shipping_type','配送方式'),
            array('payment_type','支付方式'),
			array('receiving_info','收货地址'),
            array('order_time','下单时间'),
			array('order_status','状态')
        );
        $sql="select order_id,receiving_name,receiving_tel,goods_name,order_amount,shipping_type,payment_type,receiving_info,order_time,order_status from orders ".$where." group by order_id order by order_time desc";
		$result=mysql_query($sql);
		;
		while($row=mysql_fetch_array($result)){
			$xlsData[]=$row;
		}
        exportExcel($xlsName,$xlsCell,$xlsData);
		header("location:order.php");
		
		function exportExcel($expTitle,$expCellName,$expTableData){
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName ="订单信息".date('YmdHis');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);
        $objPHPExcel = new \PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(60);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(18);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(55); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(22); 
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15); 
        //$objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
         //$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'1', $expCellName[$i][1]);//修改参数1是行号
        }
		
        // Miscellaneous glyphs, UTF-8
        for($i=0;$i<$dataNum;$i++){
            for($j=0;$j<$cellNum;$j++){
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+2), $expTableData[$i][$expCellName[$j][0]]);
            }
       }

        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=".$fileName.".xls");//attachment新窗口打印inline本窗口打印
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }	
		
		
		
?>