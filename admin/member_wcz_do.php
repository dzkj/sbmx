<?php
session_start();
include("mysql_connect.inc");
header("Content-Type: text/html;charset=utf-8");
if(empty($_SESSION['admin'])){
	echo "<script>alert('请登录!');</script>";
	echo "<script>location.href='login.html'</script>";
}
if(isset($_POST['csubmit'])){
	$cre_id=$_POST['cre_id'];
	$credits=$_POST['acredits'];
	$backinfo=$_POST['backinfo'];
	if($_POST['backinfo']==""){
		$backinfo="充值成功!";
	}
	
	$creres=mysql_query("select a.credits as acredits,b.id as bid,b.credits as bcredits from memcredits as a,member as b where a.mid=b.id and a.id='$cre_id'");
	$crerow=mysql_fetch_array($creres);
	$bid=$crerow['bid'];
	$jifen1=$credits;
	$jifen2=$crerow['bcredits']*1;
	$jifen=$jifen1+$jifen2;
	
	mysql_query("update memcredits set status='1',credits='$credits',redstatus='0',backinfo='$backinfo' where id='$cre_id'");
	$sql="update member set credits='$jifen' where id='$bid'";
	
	//echo $sql;
	mysql_query($sql);
	if(mysql_affected_rows()>=0){
		echo "<script>alert('充值成功!');</script>";
		echo "<script>location.href='member_wcz.php'</script>";
	}else{
		echo "<script>alert('系统繁忙,请稍后再试!');</script>";
		echo "<script>history.back();</script>";
	}
}else if(isset($_POST['juesubmit'])){
	$cre_id=$_POST['cre_id'];
	$backinfo=$_POST['backinfo'];
	if($_POST['backinfo']==""){
		$backinfo="充值失败!";
	}
	
	$creres=mysql_query("select a.credits as acredits,b.id as bid,b.credits as bcredits from memcredits as a,member as b where a.mid=b.id and a.id='$cre_id'");
	$crerow=mysql_fetch_array($creres);
	$bid=$crerow['bid'];
	
	mysql_query("update memcredits set status='2',redstatus='0',backinfo='$backinfo' where id='$cre_id'");
	if(mysql_affected_rows()>=0){
		echo "<script>alert('提交成功!');</script>";
		echo "<script>location.href='member_wcz.php'</script>";
	}else{
		echo "<script>alert('系统繁忙,请稍后再试!');</script>";
		echo "<script>history.back();</script>";
	}
}else{
	echo "<script>location.href='login.html'</script>";
}

?>