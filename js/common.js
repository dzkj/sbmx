//收藏本站
function addToFavorite() {
	var url = window.location.href;
	var title = window.document.title;
	try {
		window.external.addFavorite(url, title);
	} catch (e) {
		try {
			window.sidebar.addPanel(title, url, "");
		} catch (e) {
			alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
		}
	}
}
/**
 * post请求获取HTML信息
 * 
 * @param url
 * @param data
 * @returns
 */
function getAjaxHtml(url,data,type){
	return $.ajax({
		url:url,
		data:data,
		async: false,
		type:type?type:'post',
		dataType:'html'
	}).responseText;
}
/**
 * 替换HTML标签
 * 
 * @param url
 * @param data
 * @param el
 * @returns
 */
function replaceTag(url,data,el){
	$(el).html(getAjaxHtml(url,data));
}
/**
 * 跳转到登陆页面
 */
function login(){
	location.href = getPath()+'/auth/login';
}
/**
 * 退出登陆
 */
function logout(){
	location.href = getPath()+'/logout?redirectUrl='+escape(encodeURI(location.href));
}

String.prototype.endWith = function(s) {
	if (s == null || s == "" || this.length == 0 || s.length > this.length){
		return false;
	}
	if (this.substring(this.length - s.length) == s){
		return true;
	}
	return false;
}
String.prototype.startWith = function(s) {
	if (s == null || s == "" || this.length == 0 || s.length > this.length){
		return false;
	}
	if (this.substr(0, s.length) == s){
		return true;
	}
	return false;
}