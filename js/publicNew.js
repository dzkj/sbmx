/*
 * jQuery publicNew v0.5
 * Copyright (c) 2014-09-26 11:20 Jensen
 * 说明：全站通用JS
 */

/*! jQuery v1.7.2 jquery.com | jquery.org/license */
(function(a,b){function cy(a){return f.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}function cu(a){if(!cj[a]){var b=c.body,d=f("<"+a+">").appendTo(b),e=d.css("display");d.remove();if(e==="none"||e===""){ck||(ck=c.createElement("iframe"),ck.frameBorder=ck.width=ck.height=0),b.appendChild(ck);if(!cl||!ck.createElement)cl=(ck.contentWindow||ck.contentDocument).document,cl.write((f.support.boxModel?"<!doctype html>":"")+"<html><body>"),cl.close();d=cl.createElement(a),cl.body.appendChild(d),e=f.css(d,"display"),b.removeChild(ck)}cj[a]=e}return cj[a]}function ct(a,b){var c={};f.each(cp.concat.apply([],cp.slice(0,b)),function(){c[this]=a});return c}function cs(){cq=b}function cr(){setTimeout(cs,0);return cq=f.now()}function ci(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function ch(){try{return new a.XMLHttpRequest}catch(b){}}function cb(a,c){a.dataFilter&&(c=a.dataFilter(c,a.dataType));var d=a.dataTypes,e={},g,h,i=d.length,j,k=d[0],l,m,n,o,p;for(g=1;g<i;g++){if(g===1)for(h in a.converters)typeof h=="string"&&(e[h.toLowerCase()]=a.converters[h]);l=k,k=d[g];if(k==="*")k=l;else if(l!=="*"&&l!==k){m=l+" "+k,n=e[m]||e["* "+k];if(!n){p=b;for(o in e){j=o.split(" ");if(j[0]===l||j[0]==="*"){p=e[j[1]+" "+k];if(p){o=e[o],o===!0?n=p:p===!0&&(n=o);break}}}}!n&&!p&&f.error("No conversion from "+m.replace(" "," to ")),n!==!0&&(c=n?n(c):p(o(c)))}}return c}function ca(a,c,d){var e=a.contents,f=a.dataTypes,g=a.responseFields,h,i,j,k;for(i in g)i in d&&(c[g[i]]=d[i]);while(f[0]==="*")f.shift(),h===b&&(h=a.mimeType||c.getResponseHeader("content-type"));if(h)for(i in e)if(e[i]&&e[i].test(h)){f.unshift(i);break}if(f[0]in d)j=f[0];else{for(i in d){if(!f[0]||a.converters[i+" "+f[0]]){j=i;break}k||(k=i)}j=j||k}if(j){j!==f[0]&&f.unshift(j);return d[j]}}function b_(a,b,c,d){if(f.isArray(b))f.each(b,function(b,e){c||bD.test(a)?d(a,e):b_(a+"["+(typeof e=="object"?b:"")+"]",e,c,d)});else if(!c&&f.type(b)==="object")for(var e in b)b_(a+"["+e+"]",b[e],c,d);else d(a,b)}function b$(a,c){var d,e,g=f.ajaxSettings.flatOptions||{};for(d in c)c[d]!==b&&((g[d]?a:e||(e={}))[d]=c[d]);e&&f.extend(!0,a,e)}function bZ(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h=a[f],i=0,j=h?h.length:0,k=a===bS,l;for(;i<j&&(k||!l);i++)l=h[i](c,d,e),typeof l=="string"&&(!k||g[l]?l=b:(c.dataTypes.unshift(l),l=bZ(a,c,d,e,l,g)));(k||!l)&&!g["*"]&&(l=bZ(a,c,d,e,"*",g));return l}function bY(a){return function(b,c){typeof b!="string"&&(c=b,b="*");if(f.isFunction(c)){var d=b.toLowerCase().split(bO),e=0,g=d.length,h,i,j;for(;e<g;e++)h=d[e],j=/^\+/.test(h),j&&(h=h.substr(1)||"*"),i=a[h]=a[h]||[],i[j?"unshift":"push"](c)}}}function bB(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=b==="width"?1:0,g=4;if(d>0){if(c!=="border")for(;e<g;e+=2)c||(d-=parseFloat(f.css(a,"padding"+bx[e]))||0),c==="margin"?d+=parseFloat(f.css(a,c+bx[e]))||0:d-=parseFloat(f.css(a,"border"+bx[e]+"Width"))||0;return d+"px"}d=by(a,b);if(d<0||d==null)d=a.style[b];if(bt.test(d))return d;d=parseFloat(d)||0;if(c)for(;e<g;e+=2)d+=parseFloat(f.css(a,"padding"+bx[e]))||0,c!=="padding"&&(d+=parseFloat(f.css(a,"border"+bx[e]+"Width"))||0),c==="margin"&&(d+=parseFloat(f.css(a,c+bx[e]))||0);return d+"px"}function bo(a){var b=c.createElement("div");bh.appendChild(b),b.innerHTML=a.outerHTML;return b.firstChild}function bn(a){var b=(a.nodeName||"").toLowerCase();b==="input"?bm(a):b!=="script"&&typeof a.getElementsByTagName!="undefined"&&f.grep(a.getElementsByTagName("input"),bm)}function bm(a){if(a.type==="checkbox"||a.type==="radio")a.defaultChecked=a.checked}function bl(a){return typeof a.getElementsByTagName!="undefined"?a.getElementsByTagName("*"):typeof a.querySelectorAll!="undefined"?a.querySelectorAll("*"):[]}function bk(a,b){var c;b.nodeType===1&&(b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase(),c==="object"?b.outerHTML=a.outerHTML:c!=="input"||a.type!=="checkbox"&&a.type!=="radio"?c==="option"?b.selected=a.defaultSelected:c==="input"||c==="textarea"?b.defaultValue=a.defaultValue:c==="script"&&b.text!==a.text&&(b.text=a.text):(a.checked&&(b.defaultChecked=b.checked=a.checked),b.value!==a.value&&(b.value=a.value)),b.removeAttribute(f.expando),b.removeAttribute("_submit_attached"),b.removeAttribute("_change_attached"))}function bj(a,b){if(b.nodeType===1&&!!f.hasData(a)){var c,d,e,g=f._data(a),h=f._data(b,g),i=g.events;if(i){delete h.handle,h.events={};for(c in i)for(d=0,e=i[c].length;d<e;d++)f.event.add(b,c,i[c][d])}h.data&&(h.data=f.extend({},h.data))}}function bi(a,b){return f.nodeName(a,"table")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function U(a){var b=V.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}function T(a,b,c){b=b||0;if(f.isFunction(b))return f.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c});if(b.nodeType)return f.grep(a,function(a,d){return a===b===c});if(typeof b=="string"){var d=f.grep(a,function(a){return a.nodeType===1});if(O.test(b))return f.filter(b,d,!c);b=f.filter(b,d)}return f.grep(a,function(a,d){return f.inArray(a,b)>=0===c})}function S(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function K(){return!0}function J(){return!1}function n(a,b,c){var d=b+"defer",e=b+"queue",g=b+"mark",h=f._data(a,d);h&&(c==="queue"||!f._data(a,e))&&(c==="mark"||!f._data(a,g))&&setTimeout(function(){!f._data(a,e)&&!f._data(a,g)&&(f.removeData(a,d,!0),h.fire())},0)}function m(a){for(var b in a){if(b==="data"&&f.isEmptyObject(a[b]))continue;if(b!=="toJSON")return!1}return!0}function l(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(k,"-$1").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:f.isNumeric(d)?+d:j.test(d)?f.parseJSON(d):d}catch(g){}f.data(a,c,d)}else d=b}return d}function h(a){var b=g[a]={},c,d;a=a.split(/\s+/);for(c=0,d=a.length;c<d;c++)b[a[c]]=!0;return b}var c=a.document,d=a.navigator,e=a.location,f=function(){function J(){if(!e.isReady){try{c.documentElement.doScroll("left")}catch(a){setTimeout(J,1);return}e.ready()}}var e=function(a,b){return new e.fn.init(a,b,h)},f=a.jQuery,g=a.$,h,i=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,j=/\S/,k=/^\s+/,l=/\s+$/,m=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,n=/^[\],:{}\s]*$/,o=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,p=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,q=/(?:^|:|,)(?:\s*\[)+/g,r=/(webkit)[ \/]([\w.]+)/,s=/(opera)(?:.*version)?[ \/]([\w.]+)/,t=/(msie) ([\w.]+)/,u=/(mozilla)(?:.*? rv:([\w.]+))?/,v=/-([a-z]|[0-9])/ig,w=/^-ms-/,x=function(a,b){return(b+"").toUpperCase()},y=d.userAgent,z,A,B,C=Object.prototype.toString,D=Object.prototype.hasOwnProperty,E=Array.prototype.push,F=Array.prototype.slice,G=String.prototype.trim,H=Array.prototype.indexOf,I={};e.fn=e.prototype={constructor:e,init:function(a,d,f){var g,h,j,k;if(!a)return this;if(a.nodeType){this.context=this[0]=a,this.length=1;return this}if(a==="body"&&!d&&c.body){this.context=c,this[0]=c.body,this.selector=a,this.length=1;return this}if(typeof a=="string"){a.charAt(0)!=="<"||a.charAt(a.length-1)!==">"||a.length<3?g=i.exec(a):g=[null,a,null];if(g&&(g[1]||!d)){if(g[1]){d=d instanceof e?d[0]:d,k=d?d.ownerDocument||d:c,j=m.exec(a),j?e.isPlainObject(d)?(a=[c.createElement(j[1])],e.fn.attr.call(a,d,!0)):a=[k.createElement(j[1])]:(j=e.buildFragment([g[1]],[k]),a=(j.cacheable?e.clone(j.fragment):j.fragment).childNodes);return e.merge(this,a)}h=c.getElementById(g[2]);if(h&&h.parentNode){if(h.id!==g[2])return f.find(a);this.length=1,this[0]=h}this.context=c,this.selector=a;return this}return!d||d.jquery?(d||f).find(a):this.constructor(d).find(a)}if(e.isFunction(a))return f.ready(a);a.selector!==b&&(this.selector=a.selector,this.context=a.context);return e.makeArray(a,this)},selector:"",jquery:"1.7.2",length:0,size:function(){return this.length},toArray:function(){return F.call(this,0)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=this.constructor();e.isArray(a)?E.apply(d,a):e.merge(d,a),d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")");return d},each:function(a,b){return e.each(this,a,b)},ready:function(a){e.bindReady(),A.add(a);return this},eq:function(a){a=+a;return a===-1?this.slice(a):this.slice(a,a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(F.apply(this,arguments),"slice",F.call(arguments).join(","))},map:function(a){return this.pushStack(e.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:E,sort:[].sort,splice:[].splice},e.fn.init.prototype=e.fn,e.extend=e.fn.extend=function(){var a,c,d,f,g,h,i=arguments[0]||{},j=1,k=arguments.length,l=!1;typeof i=="boolean"&&(l=i,i=arguments[1]||{},j=2),typeof i!="object"&&!e.isFunction(i)&&(i={}),k===j&&(i=this,--j);for(;j<k;j++)if((a=arguments[j])!=null)for(c in a){d=i[c],f=a[c];if(i===f)continue;l&&f&&(e.isPlainObject(f)||(g=e.isArray(f)))?(g?(g=!1,h=d&&e.isArray(d)?d:[]):h=d&&e.isPlainObject(d)?d:{},i[c]=e.extend(l,h,f)):f!==b&&(i[c]=f)}return i},e.extend({noConflict:function(b){a.$===e&&(a.$=g),b&&a.jQuery===e&&(a.jQuery=f);return e},isReady:!1,readyWait:1,holdReady:function(a){a?e.readyWait++:e.ready(!0)},ready:function(a){if(a===!0&&!--e.readyWait||a!==!0&&!e.isReady){if(!c.body)return setTimeout(e.ready,1);e.isReady=!0;if(a!==!0&&--e.readyWait>0)return;A.fireWith(c,[e]),e.fn.trigger&&e(c).trigger("ready").off("ready")}},bindReady:function(){if(!A){A=e.Callbacks("once memory");if(c.readyState==="complete")return setTimeout(e.ready,1);if(c.addEventListener)c.addEventListener("DOMContentLoaded",B,!1),a.addEventListener("load",e.ready,!1);else if(c.attachEvent){c.attachEvent("onreadystatechange",B),a.attachEvent("onload",e.ready);var b=!1;try{b=a.frameElement==null}catch(d){}c.documentElement.doScroll&&b&&J()}}},isFunction:function(a){return e.type(a)==="function"},isArray:Array.isArray||function(a){return e.type(a)==="array"},isWindow:function(a){return a!=null&&a==a.window},isNumeric:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},type:function(a){return a==null?String(a):I[C.call(a)]||"object"},isPlainObject:function(a){if(!a||e.type(a)!=="object"||a.nodeType||e.isWindow(a))return!1;try{if(a.constructor&&!D.call(a,"constructor")&&!D.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}var d;for(d in a);return d===b||D.call(a,d)},isEmptyObject:function(a){for(var b in a)return!1;return!0},error:function(a){throw new Error(a)},parseJSON:function(b){if(typeof b!="string"||!b)return null;b=e.trim(b);if(a.JSON&&a.JSON.parse)return a.JSON.parse(b);if(n.test(b.replace(o,"@").replace(p,"]").replace(q,"")))return(new Function("return "+b))();e.error("Invalid JSON: "+b)},parseXML:function(c){if(typeof c!="string"||!c)return null;var d,f;try{a.DOMParser?(f=new DOMParser,d=f.parseFromString(c,"text/xml")):(d=new ActiveXObject("Microsoft.XMLDOM"),d.async="false",d.loadXML(c))}catch(g){d=b}(!d||!d.documentElement||d.getElementsByTagName("parsererror").length)&&e.error("Invalid XML: "+c);return d},noop:function(){},globalEval:function(b){b&&j.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(w,"ms-").replace(v,x)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var f,g=0,h=a.length,i=h===b||e.isFunction(a);if(d){if(i){for(f in a)if(c.apply(a[f],d)===!1)break}else for(;g<h;)if(c.apply(a[g++],d)===!1)break}else if(i){for(f in a)if(c.call(a[f],f,a[f])===!1)break}else for(;g<h;)if(c.call(a[g],g,a[g++])===!1)break;return a},trim:G?function(a){return a==null?"":G.call(a)}:function(a){return a==null?"":(a+"").replace(k,"").replace(l,"")},makeArray:function(a,b){var c=b||[];if(a!=null){var d=e.type(a);a.length==null||d==="string"||d==="function"||d==="regexp"||e.isWindow(a)?E.call(c,a):e.merge(c,a)}return c},inArray:function(a,b,c){var d;if(b){if(H)return H.call(b,a,c);d=b.length,c=c?c<0?Math.max(0,d+c):c:0;for(;c<d;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,c){var d=a.length,e=0;if(typeof c.length=="number")for(var f=c.length;e<f;e++)a[d++]=c[e];else while(c[e]!==b)a[d++]=c[e++];a.length=d;return a},grep:function(a,b,c){var d=[],e;c=!!c;for(var f=0,g=a.length;f<g;f++)e=!!b(a[f],f),c!==e&&d.push(a[f]);return d},map:function(a,c,d){var f,g,h=[],i=0,j=a.length,k=a instanceof e||j!==b&&typeof j=="number"&&(j>0&&a[0]&&a[j-1]||j===0||e.isArray(a));if(k)for(;i<j;i++)f=c(a[i],i,d),f!=null&&(h[h.length]=f);else for(g in a)f=c(a[g],g,d),f!=null&&(h[h.length]=f);return h.concat.apply([],h)},guid:1,proxy:function(a,c){if(typeof c=="string"){var d=a[c];c=a,a=d}if(!e.isFunction(a))return b;var f=F.call(arguments,2),g=function(){return a.apply(c,f.concat(F.call(arguments)))};g.guid=a.guid=a.guid||g.guid||e.guid++;return g},access:function(a,c,d,f,g,h,i){var j,k=d==null,l=0,m=a.length;if(d&&typeof d=="object"){for(l in d)e.access(a,c,l,d[l],1,h,f);g=1}else if(f!==b){j=i===b&&e.isFunction(f),k&&(j?(j=c,c=function(a,b,c){return j.call(e(a),c)}):(c.call(a,f),c=null));if(c)for(;l<m;l++)c(a[l],d,j?f.call(a[l],l,c(a[l],d)):f,i);g=1}return g?a:k?c.call(a):m?c(a[0],d):h},now:function(){return(new Date).getTime()},uaMatch:function(a){a=a.toLowerCase();var b=r.exec(a)||s.exec(a)||t.exec(a)||a.indexOf("compatible")<0&&u.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},sub:function(){function a(b,c){return new a.fn.init(b,c)}e.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function(d,f){f&&f instanceof e&&!(f instanceof a)&&(f=a(f));return e.fn.init.call(this,d,f,b)},a.fn.init.prototype=a.fn;var b=a(c);return a},browser:{}}),e.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){I["[object "+b+"]"]=b.toLowerCase()}),z=e.uaMatch(y),z.browser&&(e.browser[z.browser]=!0,e.browser.version=z.version),e.browser.webkit&&(e.browser.safari=!0),j.test(" ")&&(k=/^[\s\xA0]+/,l=/[\s\xA0]+$/),h=e(c),c.addEventListener?B=function(){c.removeEventListener("DOMContentLoaded",B,!1),e.ready()}:c.attachEvent&&(B=function(){c.readyState==="complete"&&(c.detachEvent("onreadystatechange",B),e.ready())});return e}(),g={};f.Callbacks=function(a){a=a?g[a]||h(a):{};var c=[],d=[],e,i,j,k,l,m,n=function(b){var d,e,g,h,i;for(d=0,e=b.length;d<e;d++)g=b[d],h=f.type(g),h==="array"?n(g):h==="function"&&(!a.unique||!p.has(g))&&c.push(g)},o=function(b,f){f=f||[],e=!a.memory||[b,f],i=!0,j=!0,m=k||0,k=0,l=c.length;for(;c&&m<l;m++)if(c[m].apply(b,f)===!1&&a.stopOnFalse){e=!0;break}j=!1,c&&(a.once?e===!0?p.disable():c=[]:d&&d.length&&(e=d.shift(),p.fireWith(e[0],e[1])))},p={add:function(){if(c){var a=c.length;n(arguments),j?l=c.length:e&&e!==!0&&(k=a,o(e[0],e[1]))}return this},remove:function(){if(c){var b=arguments,d=0,e=b.length;for(;d<e;d++)for(var f=0;f<c.length;f++)if(b[d]===c[f]){j&&f<=l&&(l--,f<=m&&m--),c.splice(f--,1);if(a.unique)break}}return this},has:function(a){if(c){var b=0,d=c.length;for(;b<d;b++)if(a===c[b])return!0}return!1},empty:function(){c=[];return this},disable:function(){c=d=e=b;return this},disabled:function(){return!c},lock:function(){d=b,(!e||e===!0)&&p.disable();return this},locked:function(){return!d},fireWith:function(b,c){d&&(j?a.once||d.push([b,c]):(!a.once||!e)&&o(b,c));return this},fire:function(){p.fireWith(this,arguments);return this},fired:function(){return!!i}};return p};var i=[].slice;f.extend({Deferred:function(a){var b=f.Callbacks("once memory"),c=f.Callbacks("once memory"),d=f.Callbacks("memory"),e="pending",g={resolve:b,reject:c,notify:d},h={done:b.add,fail:c.add,progress:d.add,state:function(){return e},isResolved:b.fired,isRejected:c.fired,then:function(a,b,c){i.done(a).fail(b).progress(c);return this},always:function(){i.done.apply(i,arguments).fail.apply(i,arguments);return this},pipe:function(a,b,c){return f.Deferred(function(d){f.each({done:[a,"resolve"],fail:[b,"reject"],progress:[c,"notify"]},function(a,b){var c=b[0],e=b[1],g;f.isFunction(c)?i[a](function(){g=c.apply(this,arguments),g&&f.isFunction(g.promise)?g.promise().then(d.resolve,d.reject,d.notify):d[e+"With"](this===i?d:this,[g])}):i[a](d[e])})}).promise()},promise:function(a){if(a==null)a=h;else for(var b in h)a[b]=h[b];return a}},i=h.promise({}),j;for(j in g)i[j]=g[j].fire,i[j+"With"]=g[j].fireWith;i.done(function(){e="resolved"},c.disable,d.lock).fail(function(){e="rejected"},b.disable,d.lock),a&&a.call(i,i);return i},when:function(a){function m(a){return function(b){e[a]=arguments.length>1?i.call(arguments,0):b,j.notifyWith(k,e)}}function l(a){return function(c){b[a]=arguments.length>1?i.call(arguments,0):c,--g||j.resolveWith(j,b)}}var b=i.call(arguments,0),c=0,d=b.length,e=Array(d),g=d,h=d,j=d<=1&&a&&f.isFunction(a.promise)?a:f.Deferred(),k=j.promise();if(d>1){for(;c<d;c++)b[c]&&b[c].promise&&f.isFunction(b[c].promise)?b[c].promise().then(l(c),j.reject,m(c)):--g;g||j.resolveWith(j,b)}else j!==a&&j.resolveWith(j,d?[a]:[]);return k}}),f.support=function(){var b,d,e,g,h,i,j,k,l,m,n,o,p=c.createElement("div"),q=c.documentElement;p.setAttribute("className","t"),p.innerHTML="   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>",d=p.getElementsByTagName("*"),e=p.getElementsByTagName("a")[0];if(!d||!d.length||!e)return{};g=c.createElement("select"),h=g.appendChild(c.createElement("option")),i=p.getElementsByTagName("input")[0],b={leadingWhitespace:p.firstChild.nodeType===3,tbody:!p.getElementsByTagName("tbody").length,htmlSerialize:!!p.getElementsByTagName("link").length,style:/top/.test(e.getAttribute("style")),hrefNormalized:e.getAttribute("href")==="/a",opacity:/^0.55/.test(e.style.opacity),cssFloat:!!e.style.cssFloat,checkOn:i.value==="on",optSelected:h.selected,getSetAttribute:p.className!=="t",enctype:!!c.createElement("form").enctype,html5Clone:c.createElement("nav").cloneNode(!0).outerHTML!=="<:nav></:nav>",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0,pixelMargin:!0},f.boxModel=b.boxModel=c.compatMode==="CSS1Compat",i.checked=!0,b.noCloneChecked=i.cloneNode(!0).checked,g.disabled=!0,b.optDisabled=!h.disabled;try{delete p.test}catch(r){b.deleteExpando=!1}!p.addEventListener&&p.attachEvent&&p.fireEvent&&(p.attachEvent("onclick",function(){b.noCloneEvent=!1}),p.cloneNode(!0).fireEvent("onclick")),i=c.createElement("input"),i.value="t",i.setAttribute("type","radio"),b.radioValue=i.value==="t",i.setAttribute("checked","checked"),i.setAttribute("name","t"),p.appendChild(i),j=c.createDocumentFragment(),j.appendChild(p.lastChild),b.checkClone=j.cloneNode(!0).cloneNode(!0).lastChild.checked,b.appendChecked=i.checked,j.removeChild(i),j.appendChild(p);if(p.attachEvent)for(n in{submit:1,change:1,focusin:1})m="on"+n,o=m in p,o||(p.setAttribute(m,"return;"),o=typeof p[m]=="function"),b[n+"Bubbles"]=o;j.removeChild(p),j=g=h=p=i=null,f(function(){var d,e,g,h,i,j,l,m,n,q,r,s,t,u=c.getElementsByTagName("body")[0];!u||(m=1,t="padding:0;margin:0;border:",r="position:absolute;top:0;left:0;width:1px;height:1px;",s=t+"0;visibility:hidden;",n="style='"+r+t+"5px solid #000;",q="<div "+n+"display:block;'><div style='"+t+"0;display:block;overflow:hidden;'></div></div>"+"<table "+n+"' cellpadding='0' cellspacing='0'>"+"<tr><td></td></tr></table>",d=c.createElement("div"),d.style.cssText=s+"width:0;height:0;position:static;top:0;margin-top:"+m+"px",u.insertBefore(d,u.firstChild),p=c.createElement("div"),d.appendChild(p),p.innerHTML="<table><tr><td style='"+t+"0;display:none'></td><td>t</td></tr></table>",k=p.getElementsByTagName("td"),o=k[0].offsetHeight===0,k[0].style.display="",k[1].style.display="none",b.reliableHiddenOffsets=o&&k[0].offsetHeight===0,a.getComputedStyle&&(p.innerHTML="",l=c.createElement("div"),l.style.width="0",l.style.marginRight="0",p.style.width="2px",p.appendChild(l),b.reliableMarginRight=(parseInt((a.getComputedStyle(l,null)||{marginRight:0}).marginRight,10)||0)===0),typeof p.style.zoom!="undefined"&&(p.innerHTML="",p.style.width=p.style.padding="1px",p.style.border=0,p.style.overflow="hidden",p.style.display="inline",p.style.zoom=1,b.inlineBlockNeedsLayout=p.offsetWidth===3,p.style.display="block",p.style.overflow="visible",p.innerHTML="<div style='width:5px;'></div>",b.shrinkWrapBlocks=p.offsetWidth!==3),p.style.cssText=r+s,p.innerHTML=q,e=p.firstChild,g=e.firstChild,i=e.nextSibling.firstChild.firstChild,j={doesNotAddBorder:g.offsetTop!==5,doesAddBorderForTableAndCells:i.offsetTop===5},g.style.position="fixed",g.style.top="20px",j.fixedPosition=g.offsetTop===20||g.offsetTop===15,g.style.position=g.style.top="",e.style.overflow="hidden",e.style.position="relative",j.subtractsBorderForOverflowNotVisible=g.offsetTop===-5,j.doesNotIncludeMarginInBodyOffset=u.offsetTop!==m,a.getComputedStyle&&(p.style.marginTop="1%",b.pixelMargin=(a.getComputedStyle(p,null)||{marginTop:0}).marginTop!=="1%"),typeof d.style.zoom!="undefined"&&(d.style.zoom=1),u.removeChild(d),l=p=d=null,f.extend(b,j))});return b}();var j=/^(?:\{.*\}|\[.*\])$/,k=/([A-Z])/g;f.extend({cache:{},uuid:0,expando:"jQuery"+(f.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){a=a.nodeType?f.cache[a[f.expando]]:a[f.expando];return!!a&&!m(a)},data:function(a,c,d,e){if(!!f.acceptData(a)){var g,h,i,j=f.expando,k=typeof c=="string",l=a.nodeType,m=l?f.cache:a,n=l?a[j]:a[j]&&j,o=c==="events";if((!n||!m[n]||!o&&!e&&!m[n].data)&&k&&d===b)return;n||(l?a[j]=n=++f.uuid:n=j),m[n]||(m[n]={},l||(m[n].toJSON=f.noop));if(typeof c=="object"||typeof c=="function")e?m[n]=f.extend(m[n],c):m[n].data=f.extend(m[n].data,c);g=h=m[n],e||(h.data||(h.data={}),h=h.data),d!==b&&(h[f.camelCase(c)]=d);if(o&&!h[c])return g.events;k?(i=h[c],i==null&&(i=h[f.camelCase(c)])):i=h;return i}},removeData:function(a,b,c){if(!!f.acceptData(a)){var d,e,g,h=f.expando,i=a.nodeType,j=i?f.cache:a,k=i?a[h]:h;if(!j[k])return;if(b){d=c?j[k]:j[k].data;if(d){f.isArray(b)||(b in d?b=[b]:(b=f.camelCase(b),b in d?b=[b]:b=b.split(" ")));for(e=0,g=b.length;e<g;e++)delete d[b[e]];if(!(c?m:f.isEmptyObject)(d))return}}if(!c){delete j[k].data;if(!m(j[k]))return}f.support.deleteExpando||!j.setInterval?delete j[k]:j[k]=null,i&&(f.support.deleteExpando?delete a[h]:a.removeAttribute?a.removeAttribute(h):a[h]=null)}},_data:function(a,b,c){return f.data(a,b,c,!0)},acceptData:function(a){if(a.nodeName){var b=f.noData[a.nodeName.toLowerCase()];if(b)return b!==!0&&a.getAttribute("classid")===b}return!0}}),f.fn.extend({data:function(a,c){var d,e,g,h,i,j=this[0],k=0,m=null;if(a===b){if(this.length){m=f.data(j);if(j.nodeType===1&&!f._data(j,"parsedAttrs")){g=j.attributes;for(i=g.length;k<i;k++)h=g[k].name,h.indexOf("data-")===0&&(h=f.camelCase(h.substring(5)),l(j,h,m[h]));f._data(j,"parsedAttrs",!0)}}return m}if(typeof a=="object")return this.each(function(){f.data(this,a)});d=a.split(".",2),d[1]=d[1]?"."+d[1]:"",e=d[1]+"!";return f.access(this,function(c){if(c===b){m=this.triggerHandler("getData"+e,[d[0]]),m===b&&j&&(m=f.data(j,a),m=l(j,a,m));return m===b&&d[1]?this.data(d[0]):m}d[1]=c,this.each(function(){var b=f(this);b.triggerHandler("setData"+e,d),f.data(this,a,c),b.triggerHandler("changeData"+e,d)})},null,c,arguments.length>1,null,!1)},removeData:function(a){return this.each(function(){f.removeData(this,a)})}}),f.extend({_mark:function(a,b){a&&(b=(b||"fx")+"mark",f._data(a,b,(f._data(a,b)||0)+1))},_unmark:function(a,b,c){a!==!0&&(c=b,b=a,a=!1);if(b){c=c||"fx";var d=c+"mark",e=a?0:(f._data(b,d)||1)-1;e?f._data(b,d,e):(f.removeData(b,d,!0),n(b,c,"mark"))}},queue:function(a,b,c){var d;if(a){b=(b||"fx")+"queue",d=f._data(a,b),c&&(!d||f.isArray(c)?d=f._data(a,b,f.makeArray(c)):d.push(c));return d||[]}},dequeue:function(a,b){b=b||"fx";var c=f.queue(a,b),d=c.shift(),e={};d==="inprogress"&&(d=c.shift()),d&&(b==="fx"&&c.unshift("inprogress"),f._data(a,b+".run",e),d.call(a,function(){f.dequeue(a,b)},e)),c.length||(f.removeData(a,b+"queue "+b+".run",!0),n(a,b,"queue"))}}),f.fn.extend({queue:function(a,c){var d=2;typeof a!="string"&&(c=a,a="fx",d--);if(arguments.length<d)return f.queue(this[0],a);return c===b?this:this.each(function(){var b=f.queue(this,a,c);a==="fx"&&b[0]!=="inprogress"&&f.dequeue(this,a)})},dequeue:function(a){return this.each(function(){f.dequeue(this,a)})},delay:function(a,b){a=f.fx?f.fx.speeds[a]||a:a,b=b||"fx";return this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){function m(){--h||d.resolveWith(e,[e])}typeof a!="string"&&(c=a,a=b),a=a||"fx";var d=f.Deferred(),e=this,g=e.length,h=1,i=a+"defer",j=a+"queue",k=a+"mark",l;while(g--)if(l=f.data(e[g],i,b,!0)||(f.data(e[g],j,b,!0)||f.data(e[g],k,b,!0))&&f.data(e[g],i,f.Callbacks("once memory"),!0))h++,l.add(m);m();return d.promise(c)}});var o=/[\n\t\r]/g,p=/\s+/,q=/\r/g,r=/^(?:button|input)$/i,s=/^(?:button|input|object|select|textarea)$/i,t=/^a(?:rea)?$/i,u=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,v=f.support.getSetAttribute,w,x,y;f.fn.extend({attr:function(a,b){return f.access(this,f.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){f.removeAttr(this,a)})},prop:function(a,b){return f.access(this,f.prop,a,b,arguments.length>1)},removeProp:function(a){a=f.propFix[a]||a;return this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,g,h,i;if(f.isFunction(a))return this.each(function(b){f(this).addClass(a.call(this,b,this.className))});if(a&&typeof a=="string"){b=a.split(p);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1)if(!e.className&&b.length===1)e.className=a;else{g=" "+e.className+" ";for(h=0,i=b.length;h<i;h++)~g.indexOf(" "+b[h]+" ")||(g+=b[h]+" ");e.className=f.trim(g)}}}return this},removeClass:function(a){var c,d,e,g,h,i,j;if(f.isFunction(a))return this.each(function(b){f(this).removeClass(a.call(this,b,this.className))});if(a&&typeof a=="string"||a===b){c=(a||"").split(p);for(d=0,e=this.length;d<e;d++){g=this[d];if(g.nodeType===1&&g.className)if(a){h=(" "+g.className+" ").replace(o," ");for(i=0,j=c.length;i<j;i++)h=h.replace(" "+c[i]+" "," ");g.className=f.trim(h)}else g.className=""}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";if(f.isFunction(a))return this.each(function(c){f(this).toggleClass(a.call(this,c,this.className,b),b)});return this.each(function(){if(c==="string"){var e,g=0,h=f(this),i=b,j=a.split(p);while(e=j[g++])i=d?i:!h.hasClass(e),h[i?"addClass":"removeClass"](e)}else if(c==="undefined"||c==="boolean")this.className&&f._data(this,"__className__",this.className),this.className=this.className||a===!1?"":f._data(this,"__className__")||""})},hasClass:function(a){var b=" "+a+" ",c=0,d=this.length;for(;c<d;c++)if(this[c].nodeType===1&&(" "+this[c].className+" ").replace(o," ").indexOf(b)>-1)return!0;return!1},val:function(a){var c,d,e,g=this[0];{if(!!arguments.length){e=f.isFunction(a);return this.each(function(d){var g=f(this),h;if(this.nodeType===1){e?h=a.call(this,d,g.val()):h=a,h==null?h="":typeof h=="number"?h+="":f.isArray(h)&&(h=f.map(h,function(a){return a==null?"":a+""})),c=f.valHooks[this.type]||f.valHooks[this.nodeName.toLowerCase()];if(!c||!("set"in c)||c.set(this,h,"value")===b)this.value=h}})}if(g){c=f.valHooks[g.type]||f.valHooks[g.nodeName.toLowerCase()];if(c&&"get"in c&&(d=c.get(g,"value"))!==b)return d;d=g.value;return typeof d=="string"?d.replace(q,""):d==null?"":d}}}}),f.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,c,d,e,g=a.selectedIndex,h=[],i=a.options,j=a.type==="select-one";if(g<0)return null;c=j?g:0,d=j?g+1:i.length;for(;c<d;c++){e=i[c];if(e.selected&&(f.support.optDisabled?!e.disabled:e.getAttribute("disabled")===null)&&(!e.parentNode.disabled||!f.nodeName(e.parentNode,"optgroup"))){b=f(e).val();if(j)return b;h.push(b)}}if(j&&!h.length&&i.length)return f(i[g]).val();return h},set:function(a,b){var c=f.makeArray(b);f(a).find("option").each(function(){this.selected=f.inArray(f(this).val(),c)>=0}),c.length||(a.selectedIndex=-1);return c}}},attrFn:{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0},attr:function(a,c,d,e){var g,h,i,j=a.nodeType;if(!!a&&j!==3&&j!==8&&j!==2){if(e&&c in f.attrFn)return f(a)[c](d);if(typeof a.getAttribute=="undefined")return f.prop(a,c,d);i=j!==1||!f.isXMLDoc(a),i&&(c=c.toLowerCase(),h=f.attrHooks[c]||(u.test(c)?x:w));if(d!==b){if(d===null){f.removeAttr(a,c);return}if(h&&"set"in h&&i&&(g=h.set(a,d,c))!==b)return g;a.setAttribute(c,""+d);return d}if(h&&"get"in h&&i&&(g=h.get(a,c))!==null)return g;g=a.getAttribute(c);return g===null?b:g}},removeAttr:function(a,b){var c,d,e,g,h,i=0;if(b&&a.nodeType===1){d=b.toLowerCase().split(p),g=d.length;for(;i<g;i++)e=d[i],e&&(c=f.propFix[e]||e,h=u.test(e),h||f.attr(a,e,""),a.removeAttribute(v?e:c),h&&c in a&&(a[c]=!1))}},attrHooks:{type:{set:function(a,b){if(r.test(a.nodeName)&&a.parentNode)f.error("type property can't be changed");else if(!f.support.radioValue&&b==="radio"&&f.nodeName(a,"input")){var c=a.value;a.setAttribute("type",b),c&&(a.value=c);return b}}},value:{get:function(a,b){if(w&&f.nodeName(a,"button"))return w.get(a,b);return b in a?a.value:null},set:function(a,b,c){if(w&&f.nodeName(a,"button"))return w.set(a,b,c);a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e,g,h,i=a.nodeType;if(!!a&&i!==3&&i!==8&&i!==2){h=i!==1||!f.isXMLDoc(a),h&&(c=f.propFix[c]||c,g=f.propHooks[c]);return d!==b?g&&"set"in g&&(e=g.set(a,d,c))!==b?e:a[c]=d:g&&"get"in g&&(e=g.get(a,c))!==null?e:a[c]}},propHooks:{tabIndex:{get:function(a){var c=a.getAttributeNode("tabindex");return c&&c.specified?parseInt(c.value,10):s.test(a.nodeName)||t.test(a.nodeName)&&a.href?0:b}}}}),f.attrHooks.tabindex=f.propHooks.tabIndex,x={get:function(a,c){var d,e=f.prop(a,c);return e===!0||typeof e!="boolean"&&(d=a.getAttributeNode(c))&&d.nodeValue!==!1?c.toLowerCase():b},set:function(a,b,c){var d;b===!1?f.removeAttr(a,c):(d=f.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase()));return c}},v||(y={name:!0,id:!0,coords:!0},w=f.valHooks.button={get:function(a,c){var d;d=a.getAttributeNode(c);return d&&(y[c]?d.nodeValue!=="":d.specified)?d.nodeValue:b},set:function(a,b,d){var e=a.getAttributeNode(d);e||(e=c.createAttribute(d),a.setAttributeNode(e));return e.nodeValue=b+""}},f.attrHooks.tabindex.set=w.set,f.each(["width","height"],function(a,b){f.attrHooks[b]=f.extend(f.attrHooks[b],{set:function(a,c){if(c===""){a.setAttribute(b,"auto");return c}}})}),f.attrHooks.contenteditable={get:w.get,set:function(a,b,c){b===""&&(b="false"),w.set(a,b,c)}}),f.support.hrefNormalized||f.each(["href","src","width","height"],function(a,c){f.attrHooks[c]=f.extend(f.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),f.support.style||(f.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),f.support.optSelected||(f.propHooks.selected=f.extend(f.propHooks.selected,{get:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex);return null}})),f.support.enctype||(f.propFix.enctype="encoding"),f.support.checkOn||f.each(["radio","checkbox"],function(){f.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),f.each(["radio","checkbox"],function(){f.valHooks[this]=f.extend(f.valHooks[this],{set:function(a,b){if(f.isArray(b))return a.checked=f.inArray(f(a).val(),b)>=0}})});var z=/^(?:textarea|input|select)$/i,A=/^([^\.]*)?(?:\.(.+))?$/,B=/(?:^|\s)hover(\.\S+)?\b/,C=/^key/,D=/^(?:mouse|contextmenu)|click/,E=/^(?:focusinfocus|focusoutblur)$/,F=/^(\w*)(?:#([\w\-]+))?(?:\.([\w\-]+))?$/,G=function(
a){var b=F.exec(a);b&&(b[1]=(b[1]||"").toLowerCase(),b[3]=b[3]&&new RegExp("(?:^|\\s)"+b[3]+"(?:\\s|$)"));return b},H=function(a,b){var c=a.attributes||{};return(!b[1]||a.nodeName.toLowerCase()===b[1])&&(!b[2]||(c.id||{}).value===b[2])&&(!b[3]||b[3].test((c["class"]||{}).value))},I=function(a){return f.event.special.hover?a:a.replace(B,"mouseenter$1 mouseleave$1")};f.event={add:function(a,c,d,e,g){var h,i,j,k,l,m,n,o,p,q,r,s;if(!(a.nodeType===3||a.nodeType===8||!c||!d||!(h=f._data(a)))){d.handler&&(p=d,d=p.handler,g=p.selector),d.guid||(d.guid=f.guid++),j=h.events,j||(h.events=j={}),i=h.handle,i||(h.handle=i=function(a){return typeof f!="undefined"&&(!a||f.event.triggered!==a.type)?f.event.dispatch.apply(i.elem,arguments):b},i.elem=a),c=f.trim(I(c)).split(" ");for(k=0;k<c.length;k++){l=A.exec(c[k])||[],m=l[1],n=(l[2]||"").split(".").sort(),s=f.event.special[m]||{},m=(g?s.delegateType:s.bindType)||m,s=f.event.special[m]||{},o=f.extend({type:m,origType:l[1],data:e,handler:d,guid:d.guid,selector:g,quick:g&&G(g),namespace:n.join(".")},p),r=j[m];if(!r){r=j[m]=[],r.delegateCount=0;if(!s.setup||s.setup.call(a,e,n,i)===!1)a.addEventListener?a.addEventListener(m,i,!1):a.attachEvent&&a.attachEvent("on"+m,i)}s.add&&(s.add.call(a,o),o.handler.guid||(o.handler.guid=d.guid)),g?r.splice(r.delegateCount++,0,o):r.push(o),f.event.global[m]=!0}a=null}},global:{},remove:function(a,b,c,d,e){var g=f.hasData(a)&&f._data(a),h,i,j,k,l,m,n,o,p,q,r,s;if(!!g&&!!(o=g.events)){b=f.trim(I(b||"")).split(" ");for(h=0;h<b.length;h++){i=A.exec(b[h])||[],j=k=i[1],l=i[2];if(!j){for(j in o)f.event.remove(a,j+b[h],c,d,!0);continue}p=f.event.special[j]||{},j=(d?p.delegateType:p.bindType)||j,r=o[j]||[],m=r.length,l=l?new RegExp("(^|\\.)"+l.split(".").sort().join("\\.(?:.*\\.)?")+"(\\.|$)"):null;for(n=0;n<r.length;n++)s=r[n],(e||k===s.origType)&&(!c||c.guid===s.guid)&&(!l||l.test(s.namespace))&&(!d||d===s.selector||d==="**"&&s.selector)&&(r.splice(n--,1),s.selector&&r.delegateCount--,p.remove&&p.remove.call(a,s));r.length===0&&m!==r.length&&((!p.teardown||p.teardown.call(a,l)===!1)&&f.removeEvent(a,j,g.handle),delete o[j])}f.isEmptyObject(o)&&(q=g.handle,q&&(q.elem=null),f.removeData(a,["events","handle"],!0))}},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,e,g){if(!e||e.nodeType!==3&&e.nodeType!==8){var h=c.type||c,i=[],j,k,l,m,n,o,p,q,r,s;if(E.test(h+f.event.triggered))return;h.indexOf("!")>=0&&(h=h.slice(0,-1),k=!0),h.indexOf(".")>=0&&(i=h.split("."),h=i.shift(),i.sort());if((!e||f.event.customEvent[h])&&!f.event.global[h])return;c=typeof c=="object"?c[f.expando]?c:new f.Event(h,c):new f.Event(h),c.type=h,c.isTrigger=!0,c.exclusive=k,c.namespace=i.join("."),c.namespace_re=c.namespace?new RegExp("(^|\\.)"+i.join("\\.(?:.*\\.)?")+"(\\.|$)"):null,o=h.indexOf(":")<0?"on"+h:"";if(!e){j=f.cache;for(l in j)j[l].events&&j[l].events[h]&&f.event.trigger(c,d,j[l].handle.elem,!0);return}c.result=b,c.target||(c.target=e),d=d!=null?f.makeArray(d):[],d.unshift(c),p=f.event.special[h]||{};if(p.trigger&&p.trigger.apply(e,d)===!1)return;r=[[e,p.bindType||h]];if(!g&&!p.noBubble&&!f.isWindow(e)){s=p.delegateType||h,m=E.test(s+h)?e:e.parentNode,n=null;for(;m;m=m.parentNode)r.push([m,s]),n=m;n&&n===e.ownerDocument&&r.push([n.defaultView||n.parentWindow||a,s])}for(l=0;l<r.length&&!c.isPropagationStopped();l++)m=r[l][0],c.type=r[l][1],q=(f._data(m,"events")||{})[c.type]&&f._data(m,"handle"),q&&q.apply(m,d),q=o&&m[o],q&&f.acceptData(m)&&q.apply(m,d)===!1&&c.preventDefault();c.type=h,!g&&!c.isDefaultPrevented()&&(!p._default||p._default.apply(e.ownerDocument,d)===!1)&&(h!=="click"||!f.nodeName(e,"a"))&&f.acceptData(e)&&o&&e[h]&&(h!=="focus"&&h!=="blur"||c.target.offsetWidth!==0)&&!f.isWindow(e)&&(n=e[o],n&&(e[o]=null),f.event.triggered=h,e[h](),f.event.triggered=b,n&&(e[o]=n));return c.result}},dispatch:function(c){c=f.event.fix(c||a.event);var d=(f._data(this,"events")||{})[c.type]||[],e=d.delegateCount,g=[].slice.call(arguments,0),h=!c.exclusive&&!c.namespace,i=f.event.special[c.type]||{},j=[],k,l,m,n,o,p,q,r,s,t,u;g[0]=c,c.delegateTarget=this;if(!i.preDispatch||i.preDispatch.call(this,c)!==!1){if(e&&(!c.button||c.type!=="click")){n=f(this),n.context=this.ownerDocument||this;for(m=c.target;m!=this;m=m.parentNode||this)if(m.disabled!==!0){p={},r=[],n[0]=m;for(k=0;k<e;k++)s=d[k],t=s.selector,p[t]===b&&(p[t]=s.quick?H(m,s.quick):n.is(t)),p[t]&&r.push(s);r.length&&j.push({elem:m,matches:r})}}d.length>e&&j.push({elem:this,matches:d.slice(e)});for(k=0;k<j.length&&!c.isPropagationStopped();k++){q=j[k],c.currentTarget=q.elem;for(l=0;l<q.matches.length&&!c.isImmediatePropagationStopped();l++){s=q.matches[l];if(h||!c.namespace&&!s.namespace||c.namespace_re&&c.namespace_re.test(s.namespace))c.data=s.data,c.handleObj=s,o=((f.event.special[s.origType]||{}).handle||s.handler).apply(q.elem,g),o!==b&&(c.result=o,o===!1&&(c.preventDefault(),c.stopPropagation()))}}i.postDispatch&&i.postDispatch.call(this,c);return c.result}},props:"attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){a.which==null&&(a.which=b.charCode!=null?b.charCode:b.keyCode);return a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,d){var e,f,g,h=d.button,i=d.fromElement;a.pageX==null&&d.clientX!=null&&(e=a.target.ownerDocument||c,f=e.documentElement,g=e.body,a.pageX=d.clientX+(f&&f.scrollLeft||g&&g.scrollLeft||0)-(f&&f.clientLeft||g&&g.clientLeft||0),a.pageY=d.clientY+(f&&f.scrollTop||g&&g.scrollTop||0)-(f&&f.clientTop||g&&g.clientTop||0)),!a.relatedTarget&&i&&(a.relatedTarget=i===a.target?d.toElement:i),!a.which&&h!==b&&(a.which=h&1?1:h&2?3:h&4?2:0);return a}},fix:function(a){if(a[f.expando])return a;var d,e,g=a,h=f.event.fixHooks[a.type]||{},i=h.props?this.props.concat(h.props):this.props;a=f.Event(g);for(d=i.length;d;)e=i[--d],a[e]=g[e];a.target||(a.target=g.srcElement||c),a.target.nodeType===3&&(a.target=a.target.parentNode),a.metaKey===b&&(a.metaKey=a.ctrlKey);return h.filter?h.filter(a,g):a},special:{ready:{setup:f.bindReady},load:{noBubble:!0},focus:{delegateType:"focusin"},blur:{delegateType:"focusout"},beforeunload:{setup:function(a,b,c){f.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}},simulate:function(a,b,c,d){var e=f.extend(new f.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?f.event.trigger(e,null,b):f.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},f.event.handle=f.event.dispatch,f.removeEvent=c.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){a.detachEvent&&a.detachEvent("on"+b,c)},f.Event=function(a,b){if(!(this instanceof f.Event))return new f.Event(a,b);a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?K:J):this.type=a,b&&f.extend(this,b),this.timeStamp=a&&a.timeStamp||f.now(),this[f.expando]=!0},f.Event.prototype={preventDefault:function(){this.isDefaultPrevented=K;var a=this.originalEvent;!a||(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=K;var a=this.originalEvent;!a||(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=K,this.stopPropagation()},isDefaultPrevented:J,isPropagationStopped:J,isImmediatePropagationStopped:J},f.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){f.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c=this,d=a.relatedTarget,e=a.handleObj,g=e.selector,h;if(!d||d!==c&&!f.contains(c,d))a.type=e.origType,h=e.handler.apply(this,arguments),a.type=b;return h}}}),f.support.submitBubbles||(f.event.special.submit={setup:function(){if(f.nodeName(this,"form"))return!1;f.event.add(this,"click._submit keypress._submit",function(a){var c=a.target,d=f.nodeName(c,"input")||f.nodeName(c,"button")?c.form:b;d&&!d._submit_attached&&(f.event.add(d,"submit._submit",function(a){a._submit_bubble=!0}),d._submit_attached=!0)})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&f.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){if(f.nodeName(this,"form"))return!1;f.event.remove(this,"._submit")}}),f.support.changeBubbles||(f.event.special.change={setup:function(){if(z.test(this.nodeName)){if(this.type==="checkbox"||this.type==="radio")f.event.add(this,"propertychange._change",function(a){a.originalEvent.propertyName==="checked"&&(this._just_changed=!0)}),f.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1,f.event.simulate("change",this,a,!0))});return!1}f.event.add(this,"beforeactivate._change",function(a){var b=a.target;z.test(b.nodeName)&&!b._change_attached&&(f.event.add(b,"change._change",function(a){this.parentNode&&!a.isSimulated&&!a.isTrigger&&f.event.simulate("change",this.parentNode,a,!0)}),b._change_attached=!0)})},handle:function(a){var b=a.target;if(this!==b||a.isSimulated||a.isTrigger||b.type!=="radio"&&b.type!=="checkbox")return a.handleObj.handler.apply(this,arguments)},teardown:function(){f.event.remove(this,"._change");return z.test(this.nodeName)}}),f.support.focusinBubbles||f.each({focus:"focusin",blur:"focusout"},function(a,b){var d=0,e=function(a){f.event.simulate(b,a.target,f.event.fix(a),!0)};f.event.special[b]={setup:function(){d++===0&&c.addEventListener(a,e,!0)},teardown:function(){--d===0&&c.removeEventListener(a,e,!0)}}}),f.fn.extend({on:function(a,c,d,e,g){var h,i;if(typeof a=="object"){typeof c!="string"&&(d=d||c,c=b);for(i in a)this.on(i,c,d,a[i],g);return this}d==null&&e==null?(e=c,d=c=b):e==null&&(typeof c=="string"?(e=d,d=b):(e=d,d=c,c=b));if(e===!1)e=J;else if(!e)return this;g===1&&(h=e,e=function(a){f().off(a);return h.apply(this,arguments)},e.guid=h.guid||(h.guid=f.guid++));return this.each(function(){f.event.add(this,a,e,d,c)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,c,d){if(a&&a.preventDefault&&a.handleObj){var e=a.handleObj;f(a.delegateTarget).off(e.namespace?e.origType+"."+e.namespace:e.origType,e.selector,e.handler);return this}if(typeof a=="object"){for(var g in a)this.off(g,c,a[g]);return this}if(c===!1||typeof c=="function")d=c,c=b;d===!1&&(d=J);return this.each(function(){f.event.remove(this,a,d,c)})},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},live:function(a,b,c){f(this.context).on(a,this.selector,b,c);return this},die:function(a,b){f(this.context).off(a,this.selector||"**",b);return this},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return arguments.length==1?this.off(a,"**"):this.off(b,a,c)},trigger:function(a,b){return this.each(function(){f.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0])return f.event.trigger(a,b,this[0],!0)},toggle:function(a){var b=arguments,c=a.guid||f.guid++,d=0,e=function(c){var e=(f._data(this,"lastToggle"+a.guid)||0)%d;f._data(this,"lastToggle"+a.guid,e+1),c.preventDefault();return b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length)b[d++].guid=c;return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}}),f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){f.fn[b]=function(a,c){c==null&&(c=a,a=null);return arguments.length>0?this.on(b,null,a,c):this.trigger(b)},f.attrFn&&(f.attrFn[b]=!0),C.test(b)&&(f.event.fixHooks[b]=f.event.keyHooks),D.test(b)&&(f.event.fixHooks[b]=f.event.mouseHooks)}),function(){function x(a,b,c,e,f,g){for(var h=0,i=e.length;h<i;h++){var j=e[h];if(j){var k=!1;j=j[a];while(j){if(j[d]===c){k=e[j.sizset];break}if(j.nodeType===1){g||(j[d]=c,j.sizset=h);if(typeof b!="string"){if(j===b){k=!0;break}}else if(m.filter(b,[j]).length>0){k=j;break}}j=j[a]}e[h]=k}}}function w(a,b,c,e,f,g){for(var h=0,i=e.length;h<i;h++){var j=e[h];if(j){var k=!1;j=j[a];while(j){if(j[d]===c){k=e[j.sizset];break}j.nodeType===1&&!g&&(j[d]=c,j.sizset=h);if(j.nodeName.toLowerCase()===b){k=j;break}j=j[a]}e[h]=k}}}var a=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,d="sizcache"+(Math.random()+"").replace(".",""),e=0,g=Object.prototype.toString,h=!1,i=!0,j=/\\/g,k=/\r\n/g,l=/\W/;[0,0].sort(function(){i=!1;return 0});var m=function(b,d,e,f){e=e||[],d=d||c;var h=d;if(d.nodeType!==1&&d.nodeType!==9)return[];if(!b||typeof b!="string")return e;var i,j,k,l,n,q,r,t,u=!0,v=m.isXML(d),w=[],x=b;do{a.exec(""),i=a.exec(x);if(i){x=i[3],w.push(i[1]);if(i[2]){l=i[3];break}}}while(i);if(w.length>1&&p.exec(b))if(w.length===2&&o.relative[w[0]])j=y(w[0]+w[1],d,f);else{j=o.relative[w[0]]?[d]:m(w.shift(),d);while(w.length)b=w.shift(),o.relative[b]&&(b+=w.shift()),j=y(b,j,f)}else{!f&&w.length>1&&d.nodeType===9&&!v&&o.match.ID.test(w[0])&&!o.match.ID.test(w[w.length-1])&&(n=m.find(w.shift(),d,v),d=n.expr?m.filter(n.expr,n.set)[0]:n.set[0]);if(d){n=f?{expr:w.pop(),set:s(f)}:m.find(w.pop(),w.length===1&&(w[0]==="~"||w[0]==="+")&&d.parentNode?d.parentNode:d,v),j=n.expr?m.filter(n.expr,n.set):n.set,w.length>0?k=s(j):u=!1;while(w.length)q=w.pop(),r=q,o.relative[q]?r=w.pop():q="",r==null&&(r=d),o.relative[q](k,r,v)}else k=w=[]}k||(k=j),k||m.error(q||b);if(g.call(k)==="[object Array]")if(!u)e.push.apply(e,k);else if(d&&d.nodeType===1)for(t=0;k[t]!=null;t++)k[t]&&(k[t]===!0||k[t].nodeType===1&&m.contains(d,k[t]))&&e.push(j[t]);else for(t=0;k[t]!=null;t++)k[t]&&k[t].nodeType===1&&e.push(j[t]);else s(k,e);l&&(m(l,h,e,f),m.uniqueSort(e));return e};m.uniqueSort=function(a){if(u){h=i,a.sort(u);if(h)for(var b=1;b<a.length;b++)a[b]===a[b-1]&&a.splice(b--,1)}return a},m.matches=function(a,b){return m(a,null,null,b)},m.matchesSelector=function(a,b){return m(b,null,null,[a]).length>0},m.find=function(a,b,c){var d,e,f,g,h,i;if(!a)return[];for(e=0,f=o.order.length;e<f;e++){h=o.order[e];if(g=o.leftMatch[h].exec(a)){i=g[1],g.splice(1,1);if(i.substr(i.length-1)!=="\\"){g[1]=(g[1]||"").replace(j,""),d=o.find[h](g,b,c);if(d!=null){a=a.replace(o.match[h],"");break}}}}d||(d=typeof b.getElementsByTagName!="undefined"?b.getElementsByTagName("*"):[]);return{set:d,expr:a}},m.filter=function(a,c,d,e){var f,g,h,i,j,k,l,n,p,q=a,r=[],s=c,t=c&&c[0]&&m.isXML(c[0]);while(a&&c.length){for(h in o.filter)if((f=o.leftMatch[h].exec(a))!=null&&f[2]){k=o.filter[h],l=f[1],g=!1,f.splice(1,1);if(l.substr(l.length-1)==="\\")continue;s===r&&(r=[]);if(o.preFilter[h]){f=o.preFilter[h](f,s,d,r,e,t);if(!f)g=i=!0;else if(f===!0)continue}if(f)for(n=0;(j=s[n])!=null;n++)j&&(i=k(j,f,n,s),p=e^i,d&&i!=null?p?g=!0:s[n]=!1:p&&(r.push(j),g=!0));if(i!==b){d||(s=r),a=a.replace(o.match[h],"");if(!g)return[];break}}if(a===q)if(g==null)m.error(a);else break;q=a}return s},m.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)};var n=m.getText=function(a){var b,c,d=a.nodeType,e="";if(d){if(d===1||d===9||d===11){if(typeof a.textContent=="string")return a.textContent;if(typeof a.innerText=="string")return a.innerText.replace(k,"");for(a=a.firstChild;a;a=a.nextSibling)e+=n(a)}else if(d===3||d===4)return a.nodeValue}else for(b=0;c=a[b];b++)c.nodeType!==8&&(e+=n(c));return e},o=m.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,CLASS:/\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{"class":"className","for":"htmlFor"},attrHandle:{href:function(a){return a.getAttribute("href")},type:function(a){return a.getAttribute("type")}},relative:{"+":function(a,b){var c=typeof b=="string",d=c&&!l.test(b),e=c&&!d;d&&(b=b.toLowerCase());for(var f=0,g=a.length,h;f<g;f++)if(h=a[f]){while((h=h.previousSibling)&&h.nodeType!==1);a[f]=e||h&&h.nodeName.toLowerCase()===b?h||!1:h===b}e&&m.filter(b,a,!0)},">":function(a,b){var c,d=typeof b=="string",e=0,f=a.length;if(d&&!l.test(b)){b=b.toLowerCase();for(;e<f;e++){c=a[e];if(c){var g=c.parentNode;a[e]=g.nodeName.toLowerCase()===b?g:!1}}}else{for(;e<f;e++)c=a[e],c&&(a[e]=d?c.parentNode:c.parentNode===b);d&&m.filter(b,a,!0)}},"":function(a,b,c){var d,f=e++,g=x;typeof b=="string"&&!l.test(b)&&(b=b.toLowerCase(),d=b,g=w),g("parentNode",b,f,a,d,c)},"~":function(a,b,c){var d,f=e++,g=x;typeof b=="string"&&!l.test(b)&&(b=b.toLowerCase(),d=b,g=w),g("previousSibling",b,f,a,d,c)}},find:{ID:function(a,b,c){if(typeof b.getElementById!="undefined"&&!c){var d=b.getElementById(a[1]);return d&&d.parentNode?[d]:[]}},NAME:function(a,b){if(typeof b.getElementsByName!="undefined"){var c=[],d=b.getElementsByName(a[1]);for(var e=0,f=d.length;e<f;e++)d[e].getAttribute("name")===a[1]&&c.push(d[e]);return c.length===0?null:c}},TAG:function(a,b){if(typeof b.getElementsByTagName!="undefined")return b.getElementsByTagName(a[1])}},preFilter:{CLASS:function(a,b,c,d,e,f){a=" "+a[1].replace(j,"")+" ";if(f)return a;for(var g=0,h;(h=b[g])!=null;g++)h&&(e^(h.className&&(" "+h.className+" ").replace(/[\t\n\r]/g," ").indexOf(a)>=0)?c||d.push(h):c&&(b[g]=!1));return!1},ID:function(a){return a[1].replace(j,"")},TAG:function(a,b){return a[1].replace(j,"").toLowerCase()},CHILD:function(a){if(a[1]==="nth"){a[2]||m.error(a[0]),a[2]=a[2].replace(/^\+|\s*/g,"");var b=/(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2]==="even"&&"2n"||a[2]==="odd"&&"2n+1"||!/\D/.test(a[2])&&"0n+"+a[2]||a[2]);a[2]=b[1]+(b[2]||1)-0,a[3]=b[3]-0}else a[2]&&m.error(a[0]);a[0]=e++;return a},ATTR:function(a,b,c,d,e,f){var g=a[1]=a[1].replace(j,"");!f&&o.attrMap[g]&&(a[1]=o.attrMap[g]),a[4]=(a[4]||a[5]||"").replace(j,""),a[2]==="~="&&(a[4]=" "+a[4]+" ");return a},PSEUDO:function(b,c,d,e,f){if(b[1]==="not")if((a.exec(b[3])||"").length>1||/^\w/.test(b[3]))b[3]=m(b[3],null,null,c);else{var g=m.filter(b[3],c,d,!0^f);d||e.push.apply(e,g);return!1}else if(o.match.POS.test(b[0])||o.match.CHILD.test(b[0]))return!0;return b},POS:function(a){a.unshift(!0);return a}},filters:{enabled:function(a){return a.disabled===!1&&a.type!=="hidden"},disabled:function(a){return a.disabled===!0},checked:function(a){return a.checked===!0},selected:function(a){a.parentNode&&a.parentNode.selectedIndex;return a.selected===!0},parent:function(a){return!!a.firstChild},empty:function(a){return!a.firstChild},has:function(a,b,c){return!!m(c[3],a).length},header:function(a){return/h\d/i.test(a.nodeName)},text:function(a){var b=a.getAttribute("type"),c=a.type;return a.nodeName.toLowerCase()==="input"&&"text"===c&&(b===c||b===null)},radio:function(a){return a.nodeName.toLowerCase()==="input"&&"radio"===a.type},checkbox:function(a){return a.nodeName.toLowerCase()==="input"&&"checkbox"===a.type},file:function(a){return a.nodeName.toLowerCase()==="input"&&"file"===a.type},password:function(a){return a.nodeName.toLowerCase()==="input"&&"password"===a.type},submit:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"submit"===a.type},image:function(a){return a.nodeName.toLowerCase()==="input"&&"image"===a.type},reset:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"reset"===a.type},button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&"button"===a.type||b==="button"},input:function(a){return/input|select|textarea|button/i.test(a.nodeName)},focus:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b){return b===0},last:function(a,b,c,d){return b===d.length-1},even:function(a,b){return b%2===0},odd:function(a,b){return b%2===1},lt:function(a,b,c){return b<c[3]-0},gt:function(a,b,c){return b>c[3]-0},nth:function(a,b,c){return c[3]-0===b},eq:function(a,b,c){return c[3]-0===b}},filter:{PSEUDO:function(a,b,c,d){var e=b[1],f=o.filters[e];if(f)return f(a,c,b,d);if(e==="contains")return(a.textContent||a.innerText||n([a])||"").indexOf(b[3])>=0;if(e==="not"){var g=b[3];for(var h=0,i=g.length;h<i;h++)if(g[h]===a)return!1;return!0}m.error(e)},CHILD:function(a,b){var c,e,f,g,h,i,j,k=b[1],l=a;switch(k){case"only":case"first":while(l=l.previousSibling)if(l.nodeType===1)return!1;if(k==="first")return!0;l=a;case"last":while(l=l.nextSibling)if(l.nodeType===1)return!1;return!0;case"nth":c=b[2],e=b[3];if(c===1&&e===0)return!0;f=b[0],g=a.parentNode;if(g&&(g[d]!==f||!a.nodeIndex)){i=0;for(l=g.firstChild;l;l=l.nextSibling)l.nodeType===1&&(l.nodeIndex=++i);g[d]=f}j=a.nodeIndex-e;return c===0?j===0:j%c===0&&j/c>=0}},ID:function(a,b){return a.nodeType===1&&a.getAttribute("id")===b},TAG:function(a,b){return b==="*"&&a.nodeType===1||!!a.nodeName&&a.nodeName.toLowerCase()===b},CLASS:function(a,b){return(" "+(a.className||a.getAttribute("class"))+" ").indexOf(b)>-1},ATTR:function(a,b){var c=b[1],d=m.attr?m.attr(a,c):o.attrHandle[c]?o.attrHandle[c](a):a[c]!=null?a[c]:a.getAttribute(c),e=d+"",f=b[2],g=b[4];return d==null?f==="!=":!f&&m.attr?d!=null:f==="="?e===g:f==="*="?e.indexOf(g)>=0:f==="~="?(" "+e+" ").indexOf(g)>=0:g?f==="!="?e!==g:f==="^="?e.indexOf(g)===0:f==="$="?e.substr(e.length-g.length)===g:f==="|="?e===g||e.substr(0,g.length+1)===g+"-":!1:e&&d!==!1},POS:function(a,b,c,d){var e=b[2],f=o.setFilters[e];if(f)return f(a,c,b,d)}}},p=o.match.POS,q=function(a,b){return"\\"+(b-0+1)};for(var r in o.match)o.match[r]=new RegExp(o.match[r].source+/(?![^\[]*\])(?![^\(]*\))/.source),o.leftMatch[r]=new RegExp(/(^(?:.|\r|\n)*?)/.source+o.match[r].source.replace(/\\(\d+)/g,q));o.match.globalPOS=p;var s=function(a,b){a=Array.prototype.slice.call(a,0);if(b){b.push.apply(b,a);return b}return a};try{Array.prototype.slice.call(c.documentElement.childNodes,0)[0].nodeType}catch(t){s=function(a,b){var c=0,d=b||[];if(g.call(a)==="[object Array]")Array.prototype.push.apply(d,a);else if(typeof a.length=="number")for(var e=a.length;c<e;c++)d.push(a[c]);else for(;a[c];c++)d.push(a[c]);return d}}var u,v;c.documentElement.compareDocumentPosition?u=function(a,b){if(a===b){h=!0;return 0}if(!a.compareDocumentPosition||!b.compareDocumentPosition)return a.compareDocumentPosition?-1:1;return a.compareDocumentPosition(b)&4?-1:1}:(u=function(a,b){if(a===b){h=!0;return 0}if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;var c,d,e=[],f=[],g=a.parentNode,i=b.parentNode,j=g;if(g===i)return v(a,b);if(!g)return-1;if(!i)return 1;while(j)e.unshift(j),j=j.parentNode;j=i;while(j)f.unshift(j),j=j.parentNode;c=e.length,d=f.length;for(var k=0;k<c&&k<d;k++)if(e[k]!==f[k])return v(e[k],f[k]);return k===c?v(a,f[k],-1):v(e[k],b,1)},v=function(a,b,c){if(a===b)return c;var d=a.nextSibling;while(d){if(d===b)return-1;d=d.nextSibling}return 1}),function(){var a=c.createElement("div"),d="script"+(new Date).getTime(),e=c.documentElement;a.innerHTML="<a name='"+d+"'/>",e.insertBefore(a,e.firstChild),c.getElementById(d)&&(o.find.ID=function(a,c,d){if(typeof c.getElementById!="undefined"&&!d){var e=c.getElementById(a[1]);return e?e.id===a[1]||typeof e.getAttributeNode!="undefined"&&e.getAttributeNode("id").nodeValue===a[1]?[e]:b:[]}},o.filter.ID=function(a,b){var c=typeof a.getAttributeNode!="undefined"&&a.getAttributeNode("id");return a.nodeType===1&&c&&c.nodeValue===b}),e.removeChild(a),e=a=null}(),function(){var a=c.createElement("div");a.appendChild(c.createComment("")),a.getElementsByTagName("*").length>0&&(o.find.TAG=function(a,b){var c=b.getElementsByTagName(a[1]);if(a[1]==="*"){var d=[];for(var e=0;c[e];e++)c[e].nodeType===1&&d.push(c[e]);c=d}return c}),a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!="undefined"&&a.firstChild.getAttribute("href")!=="#"&&(o.attrHandle.href=function(a){return a.getAttribute("href",2)}),a=null}(),c.querySelectorAll&&function(){var a=m,b=c.createElement("div"),d="__sizzle__";b.innerHTML="<p class='TEST'></p>";if(!b.querySelectorAll||b.querySelectorAll(".TEST").length!==0){m=function(b,e,f,g){e=e||c;if(!g&&!m.isXML(e)){var h=/^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b);if(h&&(e.nodeType===1||e.nodeType===9)){if(h[1])return s(e.getElementsByTagName(b),f);if(h[2]&&o.find.CLASS&&e.getElementsByClassName)return s(e.getElementsByClassName(h[2]),f)}if(e.nodeType===9){if(b==="body"&&e.body)return s([e.body],f);if(h&&h[3]){var i=e.getElementById(h[3]);if(!i||!i.parentNode)return s([],f);if(i.id===h[3])return s([i],f)}try{return s(e.querySelectorAll(b),f)}catch(j){}}else if(e.nodeType===1&&e.nodeName.toLowerCase()!=="object"){var k=e,l=e.getAttribute("id"),n=l||d,p=e.parentNode,q=/^\s*[+~]/.test(b);l?n=n.replace(/'/g,"\\$&"):e.setAttribute("id",n),q&&p&&(e=e.parentNode);try{if(!q||p)return s(e.querySelectorAll("[id='"+n+"'] "+b),f)}catch(r){}finally{l||k.removeAttribute("id")}}}return a(b,e,f,g)};for(var e in a)m[e]=a[e];b=null}}(),function(){var a=c.documentElement,b=a.matchesSelector||a.mozMatchesSelector||a.webkitMatchesSelector||a.msMatchesSelector;if(b){var d=!b.call(c.createElement("div"),"div"),e=!1;try{b.call(c.documentElement,"[test!='']:sizzle")}catch(f){e=!0}m.matchesSelector=function(a,c){c=c.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']");if(!m.isXML(a))try{if(e||!o.match.PSEUDO.test(c)&&!/!=/.test(c)){var f=b.call(a,c);if(f||!d||a.document&&a.document.nodeType!==11)return f}}catch(g){}return m(c,null,null,[a]).length>0}}}(),function(){var a=c.createElement("div");a.innerHTML="<div class='test e'></div><div class='test'></div>";if(!!a.getElementsByClassName&&a.getElementsByClassName("e").length!==0){a.lastChild.className="e";if(a.getElementsByClassName("e").length===1)return;o.order.splice(1,0,"CLASS"),o.find.CLASS=function(a,b,c){if(typeof b.getElementsByClassName!="undefined"&&!c)return b.getElementsByClassName(a[1])},a=null}}(),c.documentElement.contains?m.contains=function(a,b){return a!==b&&(a.contains?a.contains(b):!0)}:c.documentElement.compareDocumentPosition?m.contains=function(a,b){return!!(a.compareDocumentPosition(b)&16)}:m.contains=function(){return!1},m.isXML=function(a){var b=(a?a.ownerDocument||a:0).documentElement;return b?b.nodeName!=="HTML":!1};var y=function(a,b,c){var d,e=[],f="",g=b.nodeType?[b]:b;while(d=o.match.PSEUDO.exec(a))f+=d[0],a=a.replace(o.match.PSEUDO,"");a=o.relative[a]?a+"*":a;for(var h=0,i=g.length;h<i;h++)m(a,g[h],e,c);return m.filter(f,e)};m.attr=f.attr,m.selectors.attrMap={},f.find=m,f.expr=m.selectors,f.expr[":"]=f.expr.filters,f.unique=m.uniqueSort,f.text=m.getText,f.isXMLDoc=m.isXML,f.contains=m.contains}();var L=/Until$/,M=/^(?:parents|prevUntil|prevAll)/,N=/,/,O=/^.[^:#\[\.,]*$/,P=Array.prototype.slice,Q=f.expr.match.globalPOS,R={children:!0,contents:!0,next:!0,prev:!0};f.fn.extend({find:function(a){var b=this,c,d;if(typeof a!="string")return f(a).filter(function(){for(c=0,d=b.length;c<d;c++)if(f.contains(b[c],this))return!0});var e=this.pushStack("","find",a),g,h,i;for(c=0,d=this.length;c<d;c++){g=e.length,f.find(a,this[c],e);if(c>0)for(h=g;h<e.length;h++)for(i=0;i<g;i++)if(e[i]===e[h]){e.splice(h--,1);break}}return e},has:function(a){var b=f(a);return this.filter(function(){for(var a=0,c=b.length;a<c;a++)if(f.contains(this,b[a]))return!0})},not:function(a){return this.pushStack(T(this,a,!1),"not",a)},filter:function(a){return this.pushStack(T(this,a,!0),"filter",a)},is:function(a){return!!a&&(typeof a=="string"?Q.test(a)?f(a,this.context).index(this[0])>=0:f.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c=[],d,e,g=this[0];if(f.isArray(a)){var h=1;while(g&&g.ownerDocument&&g!==b){for(d=0;d<a.length;d++)f(g).is(a[d])&&c.push({selector:a[d],elem:g,level:h});g=g.parentNode,h++}return c}var i=Q.test(a)||typeof a!="string"?f(a,b||this.context):0;for(d=0,e=this.length;d<e;d++){g=this[d];while(g){if(i?i.index(g)>-1:f.find.matchesSelector(g,a)){c.push(g);break}g=g.parentNode;if(!g||!g.ownerDocument||g===b||g.nodeType===11)break}}c=c.length>1?f.unique(c):c;return this.pushStack(c,"closest",a)},index:function(a){if(!a)return this[0]&&this[0].parentNode?this.prevAll().length:-1;if(typeof a=="string")return f.inArray(this[0],f(a));return f.inArray(a.jquery?a[0]:a,this)},add:function(a,b){var c=typeof a=="string"?f(a,b):f.makeArray(a&&a.nodeType?[a]:a),d=f.merge(this.get(),c);return this.pushStack(S(c[0])||S(d[0])?d:f.unique(d))},andSelf:function(){return this.add(this.prevObject)}}),f.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return f.dir(a,"parentNode")},parentsUntil:function(a,b,c){return f.dir(a,"parentNode",c)},next:function(a){return f.nth(a,2,"nextSibling")},prev:function(a){return f.nth(a,2,"previousSibling")},nextAll:function(a){return f.dir(a,"nextSibling")},prevAll:function(a){return f.dir(a,"previousSibling")},nextUntil:function(a,b,c){return f.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return f.dir(a,"previousSibling",c)},siblings:function(a){return f.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return f.sibling(a.firstChild)},contents:function(a){return f.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:f.makeArray(a.childNodes)}},function(a,b){f.fn[a]=function(c,d){var e=f.map(this,b,c);L.test(a)||(d=c),d&&typeof d=="string"&&(e=f.filter(d,e)),e=this.length>1&&!R[a]?f.unique(e):e,(this.length>1||N.test(d))&&M.test(a)&&(e=e.reverse());return this.pushStack(e,a,P.call(arguments).join(","))}}),f.extend({filter:function(a,b,c){c&&(a=":not("+a+")");return b.length===1?f.find.matchesSelector(b[0],a)?[b[0]]:[]:f.find.matches(a,b)},dir:function(a,c,d){var e=[],g=a[c];while(g&&g.nodeType!==9&&(d===b||g.nodeType!==1||!f(g).is(d)))g.nodeType===1&&e.push(g),g=g[c];return e},nth:function(a,b,c,d){b=b||1;var e=0;for(;a;a=a[c])if(a.nodeType===1&&++e===b)break;return a},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling)a.nodeType===1&&a!==b&&c.push(a);return c}});var V="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",W=/ jQuery\d+="(?:\d+|null)"/g,X=/^\s+/,Y=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,Z=/<([\w:]+)/,$=/<tbody/i,_=/<|&#?\w+;/,ba=/<(?:script|style)/i,bb=/<(?:script|object|embed|option|style)/i,bc=new RegExp("<(?:"+V+")[\\s/>]","i"),bd=/checked\s*(?:[^=]|=\s*.checked.)/i,be=/\/(java|ecma)script/i,bf=/^\s*<!(?:\[CDATA\[|\-\-)/,bg={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]},bh=U(c);bg.optgroup=bg.option,bg.tbody=bg.tfoot=bg.colgroup=bg.caption=bg.thead,bg.th=bg.td,f.support.htmlSerialize||(bg._default=[1,"div<div>","</div>"]),f.fn.extend({text:function(a){return f.access(this,function(a){return a===b?f.text(this):this.empty().append((this[0]&&this[0].ownerDocument||c).createTextNode(a))},null,a,arguments.length)},wrapAll:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapAll(a.call(this,b))});if(this[0]){var b=f(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapInner(a.call(this,b))});return this.each(function(){var b=f(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=f.isFunction(a);return this.each(function(c){f(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){f.nodeName(this,"body")||f(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=f
.clean(arguments);a.push.apply(a,this.toArray());return this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=this.pushStack(this,"after",arguments);a.push.apply(a,f.clean(arguments));return a}},remove:function(a,b){for(var c=0,d;(d=this[c])!=null;c++)if(!a||f.filter(a,[d]).length)!b&&d.nodeType===1&&(f.cleanData(d.getElementsByTagName("*")),f.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d);return this},empty:function(){for(var a=0,b;(b=this[a])!=null;a++){b.nodeType===1&&f.cleanData(b.getElementsByTagName("*"));while(b.firstChild)b.removeChild(b.firstChild)}return this},clone:function(a,b){a=a==null?!1:a,b=b==null?a:b;return this.map(function(){return f.clone(this,a,b)})},html:function(a){return f.access(this,function(a){var c=this[0]||{},d=0,e=this.length;if(a===b)return c.nodeType===1?c.innerHTML.replace(W,""):null;if(typeof a=="string"&&!ba.test(a)&&(f.support.leadingWhitespace||!X.test(a))&&!bg[(Z.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(Y,"<$1></$2>");try{for(;d<e;d++)c=this[d]||{},c.nodeType===1&&(f.cleanData(c.getElementsByTagName("*")),c.innerHTML=a);c=0}catch(g){}}c&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(a){if(this[0]&&this[0].parentNode){if(f.isFunction(a))return this.each(function(b){var c=f(this),d=c.html();c.replaceWith(a.call(this,b,d))});typeof a!="string"&&(a=f(a).detach());return this.each(function(){var b=this.nextSibling,c=this.parentNode;f(this).remove(),b?f(b).before(a):f(c).append(a)})}return this.length?this.pushStack(f(f.isFunction(a)?a():a),"replaceWith",a):this},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){var e,g,h,i,j=a[0],k=[];if(!f.support.checkClone&&arguments.length===3&&typeof j=="string"&&bd.test(j))return this.each(function(){f(this).domManip(a,c,d,!0)});if(f.isFunction(j))return this.each(function(e){var g=f(this);a[0]=j.call(this,e,c?g.html():b),g.domManip(a,c,d)});if(this[0]){i=j&&j.parentNode,f.support.parentNode&&i&&i.nodeType===11&&i.childNodes.length===this.length?e={fragment:i}:e=f.buildFragment(a,this,k),h=e.fragment,h.childNodes.length===1?g=h=h.firstChild:g=h.firstChild;if(g){c=c&&f.nodeName(g,"tr");for(var l=0,m=this.length,n=m-1;l<m;l++)d.call(c?bi(this[l],g):this[l],e.cacheable||m>1&&l<n?f.clone(h,!0,!0):h)}k.length&&f.each(k,function(a,b){b.src?f.ajax({type:"GET",global:!1,url:b.src,async:!1,dataType:"script"}):f.globalEval((b.text||b.textContent||b.innerHTML||"").replace(bf,"/*$0*/")),b.parentNode&&b.parentNode.removeChild(b)})}return this}}),f.buildFragment=function(a,b,d){var e,g,h,i,j=a[0];b&&b[0]&&(i=b[0].ownerDocument||b[0]),i.createDocumentFragment||(i=c),a.length===1&&typeof j=="string"&&j.length<512&&i===c&&j.charAt(0)==="<"&&!bb.test(j)&&(f.support.checkClone||!bd.test(j))&&(f.support.html5Clone||!bc.test(j))&&(g=!0,h=f.fragments[j],h&&h!==1&&(e=h)),e||(e=i.createDocumentFragment(),f.clean(a,i,e,d)),g&&(f.fragments[j]=h?e:1);return{fragment:e,cacheable:g}},f.fragments={},f.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){f.fn[a]=function(c){var d=[],e=f(c),g=this.length===1&&this[0].parentNode;if(g&&g.nodeType===11&&g.childNodes.length===1&&e.length===1){e[b](this[0]);return this}for(var h=0,i=e.length;h<i;h++){var j=(h>0?this.clone(!0):this).get();f(e[h])[b](j),d=d.concat(j)}return this.pushStack(d,a,e.selector)}}),f.extend({clone:function(a,b,c){var d,e,g,h=f.support.html5Clone||f.isXMLDoc(a)||!bc.test("<"+a.nodeName+">")?a.cloneNode(!0):bo(a);if((!f.support.noCloneEvent||!f.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!f.isXMLDoc(a)){bk(a,h),d=bl(a),e=bl(h);for(g=0;d[g];++g)e[g]&&bk(d[g],e[g])}if(b){bj(a,h);if(c){d=bl(a),e=bl(h);for(g=0;d[g];++g)bj(d[g],e[g])}}d=e=null;return h},clean:function(a,b,d,e){var g,h,i,j=[];b=b||c,typeof b.createElement=="undefined"&&(b=b.ownerDocument||b[0]&&b[0].ownerDocument||c);for(var k=0,l;(l=a[k])!=null;k++){typeof l=="number"&&(l+="");if(!l)continue;if(typeof l=="string")if(!_.test(l))l=b.createTextNode(l);else{l=l.replace(Y,"<$1></$2>");var m=(Z.exec(l)||["",""])[1].toLowerCase(),n=bg[m]||bg._default,o=n[0],p=b.createElement("div"),q=bh.childNodes,r;b===c?bh.appendChild(p):U(b).appendChild(p),p.innerHTML=n[1]+l+n[2];while(o--)p=p.lastChild;if(!f.support.tbody){var s=$.test(l),t=m==="table"&&!s?p.firstChild&&p.firstChild.childNodes:n[1]==="<table>"&&!s?p.childNodes:[];for(i=t.length-1;i>=0;--i)f.nodeName(t[i],"tbody")&&!t[i].childNodes.length&&t[i].parentNode.removeChild(t[i])}!f.support.leadingWhitespace&&X.test(l)&&p.insertBefore(b.createTextNode(X.exec(l)[0]),p.firstChild),l=p.childNodes,p&&(p.parentNode.removeChild(p),q.length>0&&(r=q[q.length-1],r&&r.parentNode&&r.parentNode.removeChild(r)))}var u;if(!f.support.appendChecked)if(l[0]&&typeof (u=l.length)=="number")for(i=0;i<u;i++)bn(l[i]);else bn(l);l.nodeType?j.push(l):j=f.merge(j,l)}if(d){g=function(a){return!a.type||be.test(a.type)};for(k=0;j[k];k++){h=j[k];if(e&&f.nodeName(h,"script")&&(!h.type||be.test(h.type)))e.push(h.parentNode?h.parentNode.removeChild(h):h);else{if(h.nodeType===1){var v=f.grep(h.getElementsByTagName("script"),g);j.splice.apply(j,[k+1,0].concat(v))}d.appendChild(h)}}}return j},cleanData:function(a){var b,c,d=f.cache,e=f.event.special,g=f.support.deleteExpando;for(var h=0,i;(i=a[h])!=null;h++){if(i.nodeName&&f.noData[i.nodeName.toLowerCase()])continue;c=i[f.expando];if(c){b=d[c];if(b&&b.events){for(var j in b.events)e[j]?f.event.remove(i,j):f.removeEvent(i,j,b.handle);b.handle&&(b.handle.elem=null)}g?delete i[f.expando]:i.removeAttribute&&i.removeAttribute(f.expando),delete d[c]}}}});var bp=/alpha\([^)]*\)/i,bq=/opacity=([^)]*)/,br=/([A-Z]|^ms)/g,bs=/^[\-+]?(?:\d*\.)?\d+$/i,bt=/^-?(?:\d*\.)?\d+(?!px)[^\d\s]+$/i,bu=/^([\-+])=([\-+.\de]+)/,bv=/^margin/,bw={position:"absolute",visibility:"hidden",display:"block"},bx=["Top","Right","Bottom","Left"],by,bz,bA;f.fn.css=function(a,c){return f.access(this,function(a,c,d){return d!==b?f.style(a,c,d):f.css(a,c)},a,c,arguments.length>1)},f.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=by(a,"opacity");return c===""?"1":c}return a.style.opacity}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":f.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!!a&&a.nodeType!==3&&a.nodeType!==8&&!!a.style){var g,h,i=f.camelCase(c),j=a.style,k=f.cssHooks[i];c=f.cssProps[i]||i;if(d===b){if(k&&"get"in k&&(g=k.get(a,!1,e))!==b)return g;return j[c]}h=typeof d,h==="string"&&(g=bu.exec(d))&&(d=+(g[1]+1)*+g[2]+parseFloat(f.css(a,c)),h="number");if(d==null||h==="number"&&isNaN(d))return;h==="number"&&!f.cssNumber[i]&&(d+="px");if(!k||!("set"in k)||(d=k.set(a,d))!==b)try{j[c]=d}catch(l){}}},css:function(a,c,d){var e,g;c=f.camelCase(c),g=f.cssHooks[c],c=f.cssProps[c]||c,c==="cssFloat"&&(c="float");if(g&&"get"in g&&(e=g.get(a,!0,d))!==b)return e;if(by)return by(a,c)},swap:function(a,b,c){var d={},e,f;for(f in b)d[f]=a.style[f],a.style[f]=b[f];e=c.call(a);for(f in b)a.style[f]=d[f];return e}}),f.curCSS=f.css,c.defaultView&&c.defaultView.getComputedStyle&&(bz=function(a,b){var c,d,e,g,h=a.style;b=b.replace(br,"-$1").toLowerCase(),(d=a.ownerDocument.defaultView)&&(e=d.getComputedStyle(a,null))&&(c=e.getPropertyValue(b),c===""&&!f.contains(a.ownerDocument.documentElement,a)&&(c=f.style(a,b))),!f.support.pixelMargin&&e&&bv.test(b)&&bt.test(c)&&(g=h.width,h.width=c,c=e.width,h.width=g);return c}),c.documentElement.currentStyle&&(bA=function(a,b){var c,d,e,f=a.currentStyle&&a.currentStyle[b],g=a.style;f==null&&g&&(e=g[b])&&(f=e),bt.test(f)&&(c=g.left,d=a.runtimeStyle&&a.runtimeStyle.left,d&&(a.runtimeStyle.left=a.currentStyle.left),g.left=b==="fontSize"?"1em":f,f=g.pixelLeft+"px",g.left=c,d&&(a.runtimeStyle.left=d));return f===""?"auto":f}),by=bz||bA,f.each(["height","width"],function(a,b){f.cssHooks[b]={get:function(a,c,d){if(c)return a.offsetWidth!==0?bB(a,b,d):f.swap(a,bw,function(){return bB(a,b,d)})},set:function(a,b){return bs.test(b)?b+"px":b}}}),f.support.opacity||(f.cssHooks.opacity={get:function(a,b){return bq.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?parseFloat(RegExp.$1)/100+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=f.isNumeric(b)?"alpha(opacity="+b*100+")":"",g=d&&d.filter||c.filter||"";c.zoom=1;if(b>=1&&f.trim(g.replace(bp,""))===""){c.removeAttribute("filter");if(d&&!d.filter)return}c.filter=bp.test(g)?g.replace(bp,e):g+" "+e}}),f(function(){f.support.reliableMarginRight||(f.cssHooks.marginRight={get:function(a,b){return f.swap(a,{display:"inline-block"},function(){return b?by(a,"margin-right"):a.style.marginRight})}})}),f.expr&&f.expr.filters&&(f.expr.filters.hidden=function(a){var b=a.offsetWidth,c=a.offsetHeight;return b===0&&c===0||!f.support.reliableHiddenOffsets&&(a.style&&a.style.display||f.css(a,"display"))==="none"},f.expr.filters.visible=function(a){return!f.expr.filters.hidden(a)}),f.each({margin:"",padding:"",border:"Width"},function(a,b){f.cssHooks[a+b]={expand:function(c){var d,e=typeof c=="string"?c.split(" "):[c],f={};for(d=0;d<4;d++)f[a+bx[d]+b]=e[d]||e[d-2]||e[0];return f}}});var bC=/%20/g,bD=/\[\]$/,bE=/\r?\n/g,bF=/#.*$/,bG=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,bH=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,bI=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,bJ=/^(?:GET|HEAD)$/,bK=/^\/\//,bL=/\?/,bM=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,bN=/^(?:select|textarea)/i,bO=/\s+/,bP=/([?&])_=[^&]*/,bQ=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,bR=f.fn.load,bS={},bT={},bU,bV,bW=["*/"]+["*"];try{bU=e.href}catch(bX){bU=c.createElement("a"),bU.href="",bU=bU.href}bV=bQ.exec(bU.toLowerCase())||[],f.fn.extend({load:function(a,c,d){if(typeof a!="string"&&bR)return bR.apply(this,arguments);if(!this.length)return this;var e=a.indexOf(" ");if(e>=0){var g=a.slice(e,a.length);a=a.slice(0,e)}var h="GET";c&&(f.isFunction(c)?(d=c,c=b):typeof c=="object"&&(c=f.param(c,f.ajaxSettings.traditional),h="POST"));var i=this;f.ajax({url:a,type:h,dataType:"html",data:c,complete:function(a,b,c){c=a.responseText,a.isResolved()&&(a.done(function(a){c=a}),i.html(g?f("<div>").append(c.replace(bM,"")).find(g):c)),d&&i.each(d,[c,b,a])}});return this},serialize:function(){return f.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?f.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||bN.test(this.nodeName)||bH.test(this.type))}).map(function(a,b){var c=f(this).val();return c==null?null:f.isArray(c)?f.map(c,function(a,c){return{name:b.name,value:a.replace(bE,"\r\n")}}):{name:b.name,value:c.replace(bE,"\r\n")}}).get()}}),f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){f.fn[b]=function(a){return this.on(b,a)}}),f.each(["get","post"],function(a,c){f[c]=function(a,d,e,g){f.isFunction(d)&&(g=g||e,e=d,d=b);return f.ajax({type:c,url:a,data:d,success:e,dataType:g})}}),f.extend({getScript:function(a,c){return f.get(a,b,c,"script")},getJSON:function(a,b,c){return f.get(a,b,c,"json")},ajaxSetup:function(a,b){b?b$(a,f.ajaxSettings):(b=a,a=f.ajaxSettings),b$(a,b);return a},ajaxSettings:{url:bU,isLocal:bI.test(bV[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded; charset=UTF-8",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":bW},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":f.parseJSON,"text xml":f.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:bY(bS),ajaxTransport:bY(bT),ajax:function(a,c){function w(a,c,l,m){if(s!==2){s=2,q&&clearTimeout(q),p=b,n=m||"",v.readyState=a>0?4:0;var o,r,u,w=c,x=l?ca(d,v,l):b,y,z;if(a>=200&&a<300||a===304){if(d.ifModified){if(y=v.getResponseHeader("Last-Modified"))f.lastModified[k]=y;if(z=v.getResponseHeader("Etag"))f.etag[k]=z}if(a===304)w="notmodified",o=!0;else try{r=cb(d,x),w="success",o=!0}catch(A){w="parsererror",u=A}}else{u=w;if(!w||a)w="error",a<0&&(a=0)}v.status=a,v.statusText=""+(c||w),o?h.resolveWith(e,[r,w,v]):h.rejectWith(e,[v,w,u]),v.statusCode(j),j=b,t&&g.trigger("ajax"+(o?"Success":"Error"),[v,d,o?r:u]),i.fireWith(e,[v,w]),t&&(g.trigger("ajaxComplete",[v,d]),--f.active||f.event.trigger("ajaxStop"))}}typeof a=="object"&&(c=a,a=b),c=c||{};var d=f.ajaxSetup({},c),e=d.context||d,g=e!==d&&(e.nodeType||e instanceof f)?f(e):f.event,h=f.Deferred(),i=f.Callbacks("once memory"),j=d.statusCode||{},k,l={},m={},n,o,p,q,r,s=0,t,u,v={readyState:0,setRequestHeader:function(a,b){if(!s){var c=a.toLowerCase();a=m[c]=m[c]||a,l[a]=b}return this},getAllResponseHeaders:function(){return s===2?n:null},getResponseHeader:function(a){var c;if(s===2){if(!o){o={};while(c=bG.exec(n))o[c[1].toLowerCase()]=c[2]}c=o[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){s||(d.mimeType=a);return this},abort:function(a){a=a||"abort",p&&p.abort(a),w(0,a);return this}};h.promise(v),v.success=v.done,v.error=v.fail,v.complete=i.add,v.statusCode=function(a){if(a){var b;if(s<2)for(b in a)j[b]=[j[b],a[b]];else b=a[v.status],v.then(b,b)}return this},d.url=((a||d.url)+"").replace(bF,"").replace(bK,bV[1]+"//"),d.dataTypes=f.trim(d.dataType||"*").toLowerCase().split(bO),d.crossDomain==null&&(r=bQ.exec(d.url.toLowerCase()),d.crossDomain=!(!r||r[1]==bV[1]&&r[2]==bV[2]&&(r[3]||(r[1]==="http:"?80:443))==(bV[3]||(bV[1]==="http:"?80:443)))),d.data&&d.processData&&typeof d.data!="string"&&(d.data=f.param(d.data,d.traditional)),bZ(bS,d,c,v);if(s===2)return!1;t=d.global,d.type=d.type.toUpperCase(),d.hasContent=!bJ.test(d.type),t&&f.active++===0&&f.event.trigger("ajaxStart");if(!d.hasContent){d.data&&(d.url+=(bL.test(d.url)?"&":"?")+d.data,delete d.data),k=d.url;if(d.cache===!1){var x=f.now(),y=d.url.replace(bP,"$1_="+x);d.url=y+(y===d.url?(bL.test(d.url)?"&":"?")+"_="+x:"")}}(d.data&&d.hasContent&&d.contentType!==!1||c.contentType)&&v.setRequestHeader("Content-Type",d.contentType),d.ifModified&&(k=k||d.url,f.lastModified[k]&&v.setRequestHeader("If-Modified-Since",f.lastModified[k]),f.etag[k]&&v.setRequestHeader("If-None-Match",f.etag[k])),v.setRequestHeader("Accept",d.dataTypes[0]&&d.accepts[d.dataTypes[0]]?d.accepts[d.dataTypes[0]]+(d.dataTypes[0]!=="*"?", "+bW+"; q=0.01":""):d.accepts["*"]);for(u in d.headers)v.setRequestHeader(u,d.headers[u]);if(d.beforeSend&&(d.beforeSend.call(e,v,d)===!1||s===2)){v.abort();return!1}for(u in{success:1,error:1,complete:1})v[u](d[u]);p=bZ(bT,d,c,v);if(!p)w(-1,"No Transport");else{v.readyState=1,t&&g.trigger("ajaxSend",[v,d]),d.async&&d.timeout>0&&(q=setTimeout(function(){v.abort("timeout")},d.timeout));try{s=1,p.send(l,w)}catch(z){if(s<2)w(-1,z);else throw z}}return v},param:function(a,c){var d=[],e=function(a,b){b=f.isFunction(b)?b():b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=f.ajaxSettings.traditional);if(f.isArray(a)||a.jquery&&!f.isPlainObject(a))f.each(a,function(){e(this.name,this.value)});else for(var g in a)b_(g,a[g],c,e);return d.join("&").replace(bC,"+")}}),f.extend({active:0,lastModified:{},etag:{}});var cc=f.now(),cd=/(\=)\?(&|$)|\?\?/i;f.ajaxSetup({jsonp:"callback",jsonpCallback:function(){return f.expando+"_"+cc++}}),f.ajaxPrefilter("json jsonp",function(b,c,d){var e=typeof b.data=="string"&&/^application\/x\-www\-form\-urlencoded/.test(b.contentType);if(b.dataTypes[0]==="jsonp"||b.jsonp!==!1&&(cd.test(b.url)||e&&cd.test(b.data))){var g,h=b.jsonpCallback=f.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,i=a[h],j=b.url,k=b.data,l="$1"+h+"$2";b.jsonp!==!1&&(j=j.replace(cd,l),b.url===j&&(e&&(k=k.replace(cd,l)),b.data===k&&(j+=(/\?/.test(j)?"&":"?")+b.jsonp+"="+h))),b.url=j,b.data=k,a[h]=function(a){g=[a]},d.always(function(){a[h]=i,g&&f.isFunction(i)&&a[h](g[0])}),b.converters["script json"]=function(){g||f.error(h+" was not called");return g[0]},b.dataTypes[0]="json";return"script"}}),f.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){f.globalEval(a);return a}}}),f.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),f.ajaxTransport("script",function(a){if(a.crossDomain){var d,e=c.head||c.getElementsByTagName("head")[0]||c.documentElement;return{send:function(f,g){d=c.createElement("script"),d.async="async",a.scriptCharset&&(d.charset=a.scriptCharset),d.src=a.url,d.onload=d.onreadystatechange=function(a,c){if(c||!d.readyState||/loaded|complete/.test(d.readyState))d.onload=d.onreadystatechange=null,e&&d.parentNode&&e.removeChild(d),d=b,c||g(200,"success")},e.insertBefore(d,e.firstChild)},abort:function(){d&&d.onload(0,1)}}}});var ce=a.ActiveXObject?function(){for(var a in cg)cg[a](0,1)}:!1,cf=0,cg;f.ajaxSettings.xhr=a.ActiveXObject?function(){return!this.isLocal&&ch()||ci()}:ch,function(a){f.extend(f.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})}(f.ajaxSettings.xhr()),f.support.ajax&&f.ajaxTransport(function(c){if(!c.crossDomain||f.support.cors){var d;return{send:function(e,g){var h=c.xhr(),i,j;c.username?h.open(c.type,c.url,c.async,c.username,c.password):h.open(c.type,c.url,c.async);if(c.xhrFields)for(j in c.xhrFields)h[j]=c.xhrFields[j];c.mimeType&&h.overrideMimeType&&h.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(j in e)h.setRequestHeader(j,e[j])}catch(k){}h.send(c.hasContent&&c.data||null),d=function(a,e){var j,k,l,m,n;try{if(d&&(e||h.readyState===4)){d=b,i&&(h.onreadystatechange=f.noop,ce&&delete cg[i]);if(e)h.readyState!==4&&h.abort();else{j=h.status,l=h.getAllResponseHeaders(),m={},n=h.responseXML,n&&n.documentElement&&(m.xml=n);try{m.text=h.responseText}catch(a){}try{k=h.statusText}catch(o){k=""}!j&&c.isLocal&&!c.crossDomain?j=m.text?200:404:j===1223&&(j=204)}}}catch(p){e||g(-1,p)}m&&g(j,k,m,l)},!c.async||h.readyState===4?d():(i=++cf,ce&&(cg||(cg={},f(a).unload(ce)),cg[i]=d),h.onreadystatechange=d)},abort:function(){d&&d(0,1)}}}});var cj={},ck,cl,cm=/^(?:toggle|show|hide)$/,cn=/^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,co,cp=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]],cq;f.fn.extend({show:function(a,b,c){var d,e;if(a||a===0)return this.animate(ct("show",3),a,b,c);for(var g=0,h=this.length;g<h;g++)d=this[g],d.style&&(e=d.style.display,!f._data(d,"olddisplay")&&e==="none"&&(e=d.style.display=""),(e===""&&f.css(d,"display")==="none"||!f.contains(d.ownerDocument.documentElement,d))&&f._data(d,"olddisplay",cu(d.nodeName)));for(g=0;g<h;g++){d=this[g];if(d.style){e=d.style.display;if(e===""||e==="none")d.style.display=f._data(d,"olddisplay")||""}}return this},hide:function(a,b,c){if(a||a===0)return this.animate(ct("hide",3),a,b,c);var d,e,g=0,h=this.length;for(;g<h;g++)d=this[g],d.style&&(e=f.css(d,"display"),e!=="none"&&!f._data(d,"olddisplay")&&f._data(d,"olddisplay",e));for(g=0;g<h;g++)this[g].style&&(this[g].style.display="none");return this},_toggle:f.fn.toggle,toggle:function(a,b,c){var d=typeof a=="boolean";f.isFunction(a)&&f.isFunction(b)?this._toggle.apply(this,arguments):a==null||d?this.each(function(){var b=d?a:f(this).is(":hidden");f(this)[b?"show":"hide"]()}):this.animate(ct("toggle",3),a,b,c);return this},fadeTo:function(a,b,c,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){function g(){e.queue===!1&&f._mark(this);var b=f.extend({},e),c=this.nodeType===1,d=c&&f(this).is(":hidden"),g,h,i,j,k,l,m,n,o,p,q;b.animatedProperties={};for(i in a){g=f.camelCase(i),i!==g&&(a[g]=a[i],delete a[i]);if((k=f.cssHooks[g])&&"expand"in k){l=k.expand(a[g]),delete a[g];for(i in l)i in a||(a[i]=l[i])}}for(g in a){h=a[g],f.isArray(h)?(b.animatedProperties[g]=h[1],h=a[g]=h[0]):b.animatedProperties[g]=b.specialEasing&&b.specialEasing[g]||b.easing||"swing";if(h==="hide"&&d||h==="show"&&!d)return b.complete.call(this);c&&(g==="height"||g==="width")&&(b.overflow=[this.style.overflow,this.style.overflowX,this.style.overflowY],f.css(this,"display")==="inline"&&f.css(this,"float")==="none"&&(!f.support.inlineBlockNeedsLayout||cu(this.nodeName)==="inline"?this.style.display="inline-block":this.style.zoom=1))}b.overflow!=null&&(this.style.overflow="hidden");for(i in a)j=new f.fx(this,b,i),h=a[i],cm.test(h)?(q=f._data(this,"toggle"+i)||(h==="toggle"?d?"show":"hide":0),q?(f._data(this,"toggle"+i,q==="show"?"hide":"show"),j[q]()):j[h]()):(m=cn.exec(h),n=j.cur(),m?(o=parseFloat(m[2]),p=m[3]||(f.cssNumber[i]?"":"px"),p!=="px"&&(f.style(this,i,(o||1)+p),n=(o||1)/j.cur()*n,f.style(this,i,n+p)),m[1]&&(o=(m[1]==="-="?-1:1)*o+n),j.custom(n,o,p)):j.custom(n,h,""));return!0}var e=f.speed(b,c,d);if(f.isEmptyObject(a))return this.each(e.complete,[!1]);a=f.extend({},a);return e.queue===!1?this.each(g):this.queue(e.queue,g)},stop:function(a,c,d){typeof a!="string"&&(d=c,c=a,a=b),c&&a!==!1&&this.queue(a||"fx",[]);return this.each(function(){function h(a,b,c){var e=b[c];f.removeData(a,c,!0),e.stop(d)}var b,c=!1,e=f.timers,g=f._data(this);d||f._unmark(!0,this);if(a==null)for(b in g)g[b]&&g[b].stop&&b.indexOf(".run")===b.length-4&&h(this,g,b);else g[b=a+".run"]&&g[b].stop&&h(this,g,b);for(b=e.length;b--;)e[b].elem===this&&(a==null||e[b].queue===a)&&(d?e[b](!0):e[b].saveState(),c=!0,e.splice(b,1));(!d||!c)&&f.dequeue(this,a)})}}),f.each({slideDown:ct("show",1),slideUp:ct("hide",1),slideToggle:ct("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){f.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),f.extend({speed:function(a,b,c){var d=a&&typeof a=="object"?f.extend({},a):{complete:c||!c&&b||f.isFunction(a)&&a,duration:a,easing:c&&b||b&&!f.isFunction(b)&&b};d.duration=f.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in f.fx.speeds?f.fx.speeds[d.duration]:f.fx.speeds._default;if(d.queue==null||d.queue===!0)d.queue="fx";d.old=d.complete,d.complete=function(a){f.isFunction(d.old)&&d.old.call(this),d.queue?f.dequeue(this,d.queue):a!==!1&&f._unmark(this)};return d},easing:{linear:function(a){return a},swing:function(a){return-Math.cos(a*Math.PI)/2+.5}},timers:[],fx:function(a,b,c){this.options=b,this.elem=a,this.prop=c,b.orig=b.orig||{}}}),f.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this),(f.fx.step[this.prop]||f.fx.step._default)(this)},cur:function(){if(this.elem[this.prop]!=null&&(!this.elem.style||this.elem.style[this.prop]==null))return this.elem[this.prop];var a,b=f.css(this.elem,this.prop);return isNaN(a=parseFloat(b))?!b||b==="auto"?0:b:a},custom:function(a,c,d){function h(a){return e.step(a)}var e=this,g=f.fx;this.startTime=cq||cr(),this.end=c,this.now=this.start=a,this.pos=this.state=0,this.unit=d||this.unit||(f.cssNumber[this.prop]?"":"px"),h.queue=this.options.queue,h.elem=this.elem,h.saveState=function(){f._data(e.elem,"fxshow"+e.prop)===b&&(e.options.hide?f._data(e.elem,"fxshow"+e.prop,e.start):e.options.show&&f._data(e.elem,"fxshow"+e.prop,e.end))},h()&&f.timers.push(h)&&!co&&(co=setInterval(g.tick,g.interval))},show:function(){var a=f._data(this.elem,"fxshow"+this.prop);this.options.orig[this.prop]=a||f.style(this.elem,this.prop),this.options.show=!0,a!==b?this.custom(this.cur(),a):this.custom(this.prop==="width"||this.prop==="height"?1:0,this.cur()),f(this.elem).show()},hide:function(){this.options.orig[this.prop]=f._data(this.elem,"fxshow"+this.prop)||f.style(this.elem,this.prop),this.options.hide=!0,this.custom(this.cur(),0)},step:function(a){var b,c,d,e=cq||cr(),g=!0,h=this.elem,i=this.options;if(a||e>=i.duration+this.startTime){this.now=this.end,this.pos=this.state=1,this.update(),i.animatedProperties[this.prop]=!0;for(b in i.animatedProperties)i.animatedProperties[b]!==!0&&(g=!1);if(g){i.overflow!=null&&!f.support.shrinkWrapBlocks&&f.each(["","X","Y"],function(a,b){h.style["overflow"+b]=i.overflow[a]}),i.hide&&f(h).hide();if(i.hide||i.show)for(b in i.animatedProperties)f.style(h,b,i.orig[b]),f.removeData(h,"fxshow"+b,!0),f.removeData(h,"toggle"+b,!0);d=i.complete,d&&(i.complete=!1,d.call(h))}return!1}i.duration==Infinity?this.now=e:(c=e-this.startTime,this.state=c/i.duration,this.pos=f.easing[i.animatedProperties[this.prop]](this.state,c,0,1,i.duration),this.now=this.start+(this.end-this.start)*this.pos),this.update();return!0}},f.extend(f.fx,{tick:function(){var a,b=f.timers,c=0;for(;c<b.length;c++)a=b[c],!a()&&b[c]===a&&b.splice(c--,1);b.length||f.fx.stop()},interval:13,stop:function(){clearInterval(co),co=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){f.style(a.elem,"opacity",a.now)},_default:function(a){a.elem.style&&a.elem.style[a.prop]!=null?a.elem.style[a.prop]=a.now+a.unit:a.elem[a.prop]=a.now}}}),f.each(cp.concat.apply([],cp),function(a,b){b.indexOf("margin")&&(f.fx.step[b]=function(a){f.style(a.elem,b,Math.max(0,a.now)+a.unit)})}),f.expr&&f.expr.filters&&(f.expr.filters.animated=function(a){return f.grep(f.timers,function(b){return a===b.elem}).length});var cv,cw=/^t(?:able|d|h)$/i,cx=/^(?:body|html)$/i;"getBoundingClientRect"in c.documentElement?cv=function(a,b,c,d){try{d=a.getBoundingClientRect()}catch(e){}if(!d||!f.contains(c,a))return d?{top:d.top,left:d.left}:{top:0,left:0};var g=b.body,h=cy(b),i=c.clientTop||g.clientTop||0,j=c.clientLeft||g.clientLeft||0,k=h.pageYOffset||f.support.boxModel&&c.scrollTop||g.scrollTop,l=h.pageXOffset||f.support.boxModel&&c.scrollLeft||g.scrollLeft,m=d.top+k-i,n=d.left+l-j;return{top:m,left:n}}:cv=function(a,b,c){var d,e=a.offsetParent,g=a,h=b.body,i=b.defaultView,j=i?i.getComputedStyle(a,null):a.currentStyle,k=a.offsetTop,l=a.offsetLeft;while((a=a.parentNode)&&a!==h&&a!==c){if(f.support.fixedPosition&&j.position==="fixed")break;d=i?i.getComputedStyle(a,null):a.currentStyle,k-=a.scrollTop,l-=a.scrollLeft,a===e&&(k+=a.offsetTop,l+=a.offsetLeft,f.support.doesNotAddBorder&&(!f.support.doesAddBorderForTableAndCells||!cw.test(a.nodeName))&&(k+=parseFloat(d.borderTopWidth)||0,l+=parseFloat(d.borderLeftWidth)||0),g=e,e=a.offsetParent),f.support.subtractsBorderForOverflowNotVisible&&d.overflow!=="visible"&&(k+=parseFloat(d.borderTopWidth)||0,l+=parseFloat(d.borderLeftWidth)||0),j=d}if(j.position==="relative"||j.position==="static")k+=h.offsetTop,l+=h.offsetLeft;f.support.fixedPosition&&j.position==="fixed"&&(k+=Math.max(c.scrollTop,h.scrollTop),l+=Math.max(c.scrollLeft,h.scrollLeft));return{top:k,left:l}},f.fn.offset=function(a){if(arguments.length)return a===b?this:this.each(function(b){f.offset.setOffset(this,a,b)});var c=this[0],d=c&&c.ownerDocument;if(!d)return null;if(c===d.body)return f.offset.bodyOffset(c);return cv(c,d,d.documentElement)},f.offset={bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;f.support.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(f.css(a,"marginTop"))||0,c+=parseFloat(f.css(a,"marginLeft"))||0);return{top:b,left:c}},setOffset:function(a,b,c){var d=f.css(a,"position");d==="static"&&(a.style.position="relative");var e=f(a),g=e.offset(),h=f.css(a,"top"),i=f.css(a,"left"),j=(d==="absolute"||d==="fixed")&&f.inArray("auto",[h,i])>-1,k={},l={},m,n;j?(l=e.position(),m=l.top,n=l.left):(m=parseFloat(h)||0,n=parseFloat(i)||0),f.isFunction(b)&&(b=b.call(a,c,g)),b.top!=null&&(k.top=b.top-g.top+m),b.left!=null&&(k.left=b.left-g.left+n),"using"in b?b.using.call(a,k):e.css(k)}},f.fn.extend({position:function(){if(!this[0])return null;var a=this[0],b=this.offsetParent(),c=this.offset(),d=cx.test(b[0].nodeName)?{top:0,left:0}:b.offset();c.top-=parseFloat(f.css(a,"marginTop"))||0,c.left-=parseFloat(f.css(a,"marginLeft"))||0,d.top+=parseFloat(f.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(f.css(b[0],"borderLeftWidth"))||0;return{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||c.body;while(a&&!cx.test(a.nodeName)&&f.css(a,"position")==="static")a=a.offsetParent;return a})}}),f.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,c){var d=/Y/.test(c);f.fn[a]=function(e){return f.access(this,function(a,e,g){var h=cy(a);if(g===b)return h?c in h?h[c]:f.support.boxModel&&h.document.documentElement[e]||h.document.body[e]:a[e];h?h.scrollTo(d?f(h).scrollLeft():g,d?g:f(h).scrollTop()):a[e]=g},a,e,arguments.length,null)}}),f.each({Height:"height",Width:"width"},function(a,c){var d="client"+a,e="scroll"+a,g="offset"+a;f.fn["inner"+a]=function(){var a=this[0];return a?a.style?parseFloat(f.css(a,c,"padding")):this[c]():null},f.fn["outer"+a]=function(a){var b=this[0];return b?b.style?parseFloat(f.css(b,c,a?"margin":"border")):this[c]():null},f.fn[c]=function(a){return f.access(this,function(a,c,h){var i,j,k,l;if(f.isWindow(a)){i=a.document,j=i.documentElement[d];return f.support.boxModel&&j||i.body&&i.body[d]||j}if(a.nodeType===9){i=a.documentElement;if(i[d]>=i[e])return i[d];return Math.max(a.body[e],i[e],a.body[g],i[g])}if(h===b){k=f.css(a,c),l=parseFloat(k);return f.isNumeric(l)?l:k}f(a).css(c,h)},c,a,arguments.length,null)}}),a.jQuery=a.$=f,typeof define=="function"&&define.amd&&define.amd.jQuery&&define("jquery",[],function(){return f})})(window);

var ie  = $.browser.msie;
var ie6 = $.browser.msie && $.browser.version < 7;
var ie7 = $.browser.msie && $.browser.version == 7;
var ie8 = $.browser.msie && $.browser.version == 8;
if(ie6) document.execCommand("BackgroundImageCache", false, true); 

/* 'Hello, {0} ! '.format('world');  */
String.prototype.format = function(){ 
   var s = this, length = arguments.length; 
   while (--length >= 0)  s = s.replace(new RegExp('\\{' + length + '\\}', 'g'), arguments[length]);
   return s; 
};

//阻止冒泡事件
function stopEvent(e){    
	e = e || window.event;
	if(e.stopPropagation){
		e.stopPropagation(); 
	}else{
		e.cancelBubble = true;  
	}
	if(e.preventDefault){
		e.preventDefault();
	}else{
		e.returnValue = false;  //阻止Event返回值
	}
};

//去除左右边空格
function Trim(s){   
	return s.replace(/(^\s*)|(\s*$)/g,"");
}

//数组是否包含某个字符串
var contains = function(a,b){
	if(a.length != undefined){
		for(var i = 0,k = a.length; i < k; i++){	//k放前面计算长度，js效率
			if(a[i] == b) return true;
		}
	}
	return false;
};

//通用tab选项卡  -----------需要删除，调用accordion------------------
var tabChanges = function(params){
	var opts = $.extend({
		parentId: params.parentId,                     //选项卡parent id或class
		childId: params.childId,                       //内容展示child id或class
		chooseClass: params.chooseClass || 'select'    // 选中的CLASS  	child class
	},params);
	$(opts.parentId).children().siblings().click(function(){
		var num = $(this).index();   //取得点击节点的下标数
		$(opts.parentId).children().siblings().removeClass().eq(num).addClass(opts.chooseClass);
		$(opts.childId).hide().eq(num).show();
	});
};

//通用tab选项卡1    选项卡li里面包含a里面选中样式的时候   -----------需要删除，调用accordion------------------
var tabChanges1 = function(params){
	var opts = $.extend({
		parentId: params.parentId,                     //选项卡parent id或class
		childId: params.childId,                       //内容展示child id或class
		chooseClass: params.chooseClass || 'select'    // 选中的CLASS  	child class
	},params);
	$(opts.parentId).children().siblings().click(function(){
		var num = $(this).index();   //取得点击节点的下标数
		$(opts.parentId).children().siblings().find('a').removeClass().eq(num).addClass(opts.chooseClass);
		$(opts.childId).hide().eq(num).show();
	});
};

/** 时间计时通用函数 */
function timeRun(func,delay){
    var timeId = window.setInterval(function(){
		if(!func()){
			window.clearInterval(timeId);
		};
	},delay);
}

/*Number.prototype.toFixed = function(pos){
   var p = pos || 2; //必须是数字或浮点数，默认精确2位  
   return Math.round(Number(this)*Math.pow(10,p))/Math.pow(10,p);  
}*/   

/*
 * 节点滑过下拉显示效果  
 * @param 滑动的class节点
 * @param 显示的节点
 * 调用方法： slideShow({
				   hoveNode: '.tpbx',
				   showNode: '#htbxBox1'
			  });
 */ 
var slideShow = function(params){    //-----------需要删除，调用minbox0.8.6------------------
	opts = $.extend({
		hoveNode: params.hoveNode,
		showNode: params.showNode
	},params);
	var sd = opts.showNode;
	$(sd).css({position:'absolute'});
	$(opts.hoveNode).hover(function(){
		var fonsSizes = parseInt($(this).css('fontSize').replace('px','')),
		    offsets = $(this).offset(),     
		    lookOffsetLeft = offsets.left + parseInt($(this).css('padding-left').replace('px','')),
		    lookOffsetTop = offsets.top + fonsSizes + 8;    //加上字的行高
		$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
		$(sd).show();
	},function(){
		$(sd).hide();
	});
	$(opts.showNode).mouseleave(function(){
		$(sd).hide();
	});
};

var clickShow = function(params){    //-----------需要删除，调用minbox0.8.6------------------
	opts = $.extend({
		hoveNode: params.hoveNode,
		showNode: params.showNode
	},params);
	var sd = opts.showNode;
	$(sd).css({position:'absolute'});
	$(opts.hoveNode).click(function(){
		var fonsSizes = parseInt($(this).css('fontSize').replace('px','')),
		    offsets = $(this).offset(),     
		    lookOffsetLeft = offsets.left + parseInt($(this).css('padding-left').replace('px','')),
		    lookOffsetTop = offsets.top + fonsSizes + 8;    //加上字的行高
		$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
		$(sd).show();
	});
	//$(opts.showNode).mouseleave(function(){
		//$(sd).hide();
	//});
};

var setShow = function(params){    //-----------需要删除，调用minbox0.8.6------------------
	opts = $.extend({
		hoveNode: params.hoveNode,
		showNode: params.showNode
	},params);
	var sd = opts.showNode;
	$(sd).css({position:'absolute'});
	var fonsSizes = parseInt($(opts.hoveNode).css('fontSize').replace('px','')),
	    offsets = $(opts.hoveNode).offset(),     
	    lookOffsetLeft = offsets.left,
	    lookOffsetTop = offsets.top + fonsSizes + 10;    //加上字的行高
	$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
	$(sd).show();
};

//下面显示的父节点的有paddding属性时候去掉
var setShowNew = function(params){    //-----------需要删除，调用minbox0.8.6------------------
	opts = $.extend({
		hoveNode: params.hoveNode,
		showNode: params.showNode,
		topHeight: params.topHeight,
		leftWidht: params.leftWidht
	},params);
	var sd = opts.showNode;
	$(sd).css({position:'absolute'});
	var fonsSizes = parseInt($(opts.hoveNode).css('fontSize').replace('px','')),
	    offsets = $(opts.hoveNode).offset(),     
	    lookOffsetTop = opts.topHeight + fonsSizes + 5;    //加上字的行高
	if(opts.leftWidht){
		var lookOffsetLeft = opts.leftWidht + parseInt($(opts.hoveNode).css('padding-left').replace('px',''));
	}else{
		var lookOffsetLeft = offsets.left + parseInt($(opts.hoveNode).css('padding-left').replace('px',''));
	}
	$(sd).css({left:lookOffsetLeft,top:lookOffsetTop});
	$(sd).show();
};

$(function() {
    
	//原理是判断鼠标的坐标，超出下拉的区域的高度的时候，点击了隐藏
	var listDownX = 0;    //登陆注册下拉的高度+ 顶部导航条的高度
	listDownY = $('#panel').height() + 37;
	$('body').click(function(e){
		var pointY = e.pageY;
		if(pointY > listDownY){
			$("#panel").slideUp(200);
		}
	});
	
	//判断城市首页是否有该ID，城市首页的分类自动展示
	if(!$('#JcityOnly')[0]){
		 $('#sort .list').hover(function(){
	    	$(".list .item").removeClass().addClass('item');
	    },function(){
	    	if(ie6){$('#sort .outbox').hide();};
	        $('.list').hide();
	    });
		 
		//导航弹出
	    $("#sort .sort-title").hover(function() {
	        $(".list").fadeIn("fast");
	        $(".list .item").removeClass().addClass('item');
	        if(ie6){$('#sort .outbox').hide();} 
	    });   
	    
	    //往上移动关闭导航
	    $('.header-w,.nav-w').hover(function(){
	    	$('.city-lists').hide();
	    });
	}else{
		$('.city-lists').show();
	};
   
    
    $(".list .item").live({
	   mouseenter:
	   function(){
		   $(".list .item").removeClass("menu-item-onhover");
		   if(ie6) $('#sort .outbox').hide();
		   $(this).addClass("menu-item-onhover");
		   if(ie6) $(this).find('.outbox').show();
	   },
	   mouseleave:
	   function(){
		   $(this).removeClass("menu-item-onhover");
		   if(ie6) $('#sort .outbox').hide();
	   }
	});
    
    
	//切换城市
	$(".index_city").hover(function() {
		$(this).children("ul").show();
		$(".change-city").addClass("change-city-hover");
		},
	function() {
		$(this).children("ul").hide();
		$(".change-city").removeClass("change-city-hover");

	});
	
	
	//ie6下的input文本框的样式统一修复
	if(ie6){
		$('input[type=text]').css({'border':'1px solid #dfdfdf'});
		$('input[type=password]').css({'border':'1px solid #dfdfdf'});
		$('input[type=text]').each(function(){
			if($(this).hasClass('noborder')){
				$(this).css('border','0 none');
			}
		});
	};
	
	//锚点滑动
    $.fn.mailTo = function(){
		return this.each(function(){
			$(this).click(function(){
				$("html,body").animate({
					scrollTop: 0
				},{
					duration: 100,    //动画时长
					easing: "swing"    //擦除效果
				});
				return false;
			});
		});
	};
	
	//通用ajax列表选项卡
    AjaxtabChanges = function(params,fun){
		var opts = $.extend({
			parentId: params.parentId,                     //选项卡parent id或class
			childId: params.childId,                       //内容展示child id或class
			chooseClass: params.chooseClass || 'select',   //选中的CLASS  	child class
			event  : params.event || 'click',			   //绑定的事件
			url    : params.url,		   				   //请求地址
			//请求参数
			param  : $.trim(params.param)!=''?$.param(params.param): "d="+$.now
		},params);
		$(opts.parentId).children().siblings().bind(opts.event,function(){
			var num = $(this).index();   //取得点击节点的下标数
			var $refresh = $(this).attr("refresh"); //用来判断是否已经刷新过（防止每次点击刷新列表）
			$.ajax({
	            type: "GET",
	            url: opts.url,
	            data: {
	                url: "?" + $.param(opts.param)
	            },
	            success: function(obj) {
	            	fun(obj);
	            },
	            dataType: "json",
	            statusCode: {
	                404 : function() {
	                    alert("没有找到该页面.");
	                },
	                500 : function() {
	                    alert("服务器错误.");
	                }
	            }
	        });
			$(opts.parentId).children().siblings().removeClass().eq(num).addClass(opts.chooseClass);
			$(opts.childId).hide().eq(num).show();
		});
	};
    
});
	
/* 字符串模板处理 */
var result;
function $template(html, start, end){
	try{
		if (typeof start != "string") start = "<#";
	    if (typeof end != "string") end = "#>";
	    var jsStart = String.fromCharCode(12);
	    var jsOut = jsStart + "=";
	    var startRegExp = new RegExp(start, "g");
	    var splitRegExp = new RegExp(start+"|"+end, "g");
		var template = html.replace(startRegExp, start + jsStart);
		var lines = template.split(splitRegExp);
	    var js = "var out = new Array();";
	    for (var lineNumber = 0; lineNumber < lines.length; lineNumber++) {
	      var line = lines[lineNumber];
	      if (line.indexOf(jsOut) == 0) {
	        line = line.substr(2);
	        js += " out.push(" + line + " ); \n";
	      } else if (line.indexOf(jsStart) == 0) {
	        line = line.substr(1);
	        js += "\n" + line + "\n";
	      } else {
	        line = line.replace(/'/g, "\\'").replace(/\r|\n/g, " ");
	        js += " out.push('" + line + "'); \n";
	      }
	    }
	    js += " out.join(''); ";
	    return eval(js);
	}catch(e){}
}

/*
 * jQuery.minAccord  v0.5.2
 * Copyright (c) 2014-09-01 15:50 Jensen
 * 功能：简易的选项卡切换效果
 * 注意：选项卡下面的内容的位置顺序不能变
 * 
 */

jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(x,t,b,c,d){return jQuery.easing[jQuery.easing.def](x,t,b,c,d)},easeInQuad:function(x,t,b,c,d){return c*(t/=d)*t+b},easeOutQuad:function(x,t,b,c,d){return-c*(t/=d)*(t-2)+b},easeInOutQuad:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t+b;return-c/2*((--t)*(t-2)-1)+b},easeInCubic:function(x,t,b,c,d){return c*(t/=d)*t*t+b},easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b},easeInOutCubic:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t+b;return c/2*((t-=2)*t*t+2)+b},easeInQuart:function(x,t,b,c,d){return c*(t/=d)*t*t*t+b},easeOutQuart:function(x,t,b,c,d){return-c*((t=t/d-1)*t*t*t-1)+b},easeInOutQuart:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t+b;return-c/2*((t-=2)*t*t*t-2)+b},easeInQuint:function(x,t,b,c,d){return c*(t/=d)*t*t*t*t+b},easeOutQuint:function(x,t,b,c,d){return c*((t=t/d-1)*t*t*t*t+1)+b},easeInOutQuint:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t*t+b;return c/2*((t-=2)*t*t*t*t+2)+b},easeInSine:function(x,t,b,c,d){return-c*Math.cos(t/d*(Math.PI/2))+c+b},easeOutSine:function(x,t,b,c,d){return c*Math.sin(t/d*(Math.PI/2))+b},easeInOutSine:function(x,t,b,c,d){return-c/2*(Math.cos(Math.PI*t/d)-1)+b},easeInExpo:function(x,t,b,c,d){return(t==0)?b:c*Math.pow(2,10*(t/d-1))+b},easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b},easeInOutExpo:function(x,t,b,c,d){if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b;return c/2*(-Math.pow(2,-10*--t)+2)+b},easeInCirc:function(x,t,b,c,d){return-c*(Math.sqrt(1-(t/=d)*t)-1)+b},easeOutCirc:function(x,t,b,c,d){return c*Math.sqrt(1-(t=t/d-1)*t)+b},easeInOutCirc:function(x,t,b,c,d){if((t/=d/2)<1)return-c/2*(Math.sqrt(1-t*t)-1)+b;return c/2*(Math.sqrt(1-(t-=2)*t)+1)+b},easeInElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b},easeOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b},easeInOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b},easeInBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b},easeOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},easeInOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b},easeInBounce:function(x,t,b,c,d){return c-jQuery.easing.easeOutBounce(x,d-t,0,c,d)+b},easeOutBounce:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b}},easeInOutBounce:function(x,t,b,c,d){if(t<d/2)return jQuery.easing.easeInBounce(x,t*2,0,c,d)*.5+b;return jQuery.easing.easeOutBounce(x,t*2-d,0,c,d)*.5+c*.5+b}});

(function($){
	
$.ui = $.ui || {};
$.ui.version = '0.5.2';

$.fn.extend({
	accordion: function(options,data){
		var args = Array.prototype.slice.call(arguments, 1);
		return this.each(function(){
			if(typeof options == 'string'){
				var accordion = $.data(this,'ui-tab');
				accordion[options].apply(accordion,args);
			}else if(!$(this).is('.ui-tab')){
			    $.data(this,'ui-tab',new $.ui.accordion(this,options));
			};
		});
	}
});
 
$.ui.accordion = function(container,options){
	var $this = $(container);
	var _this = this;
	$this.addClass('ui-tab');
	_this.options = options = $.extend({},options);
	
	var opts = $.extend({
		childId: options.childId,                       //横方向内容展示父节点id, @可缺省
		zHeadClass: options.zHeadClass,                 //只用为纵方向选项卡参数
		zContClass: options.zContClass,                 //只用为纵方向选项卡参数
		chooseClass: options.chooseClass || 'on',       //选项卡被选中样式
		linkA: false,                                   //父节点下面的选中样式是否在a标签上
		events: options.events || 'click',              //事件,默认点击事件
		easings: options.easings,                       //效果种类
		index: options.index || 1,                      //默认显示第几个标签
		autoPlay: options.autoPlay || false,            //是否自动播放
 		speed: options.speed || 3                       //播放速度/秒
	},options);
	
		var parentChilds;  //父节点下面所有子节点
		var childsAll;     //内容所有子节点
		var s = -1;        //初始化标签的序号
	 	var _scrollObj;    //定时对象
	 	var styleBoolean = (opts.zHeadClass == undefined); //判断是否纵向选项卡 - 横
	 	var easingBoolen = (opts.easings == undefined);    //判断是否有动态效果 - 无效果
	 	var contHeight = 0;    //纵向内容高度
	 	s += opts.index;   //加上默认第几个显示的数量
	 	opts.speed = opts.speed * 1000;
	 	
		//检验数据合法性
		if(opts.index > len){
			alert('index数值过大');
			return;
		}else if(opts.index <=0 ){
			alert('index数值过小');
			return;
		};
		
		//通过zHeadClass判断是否横向和竖向选项卡
		if(styleBoolean){    //横向
		    parentChilds = $this.children().siblings();
		    if(opts.childId == undefined){
		    	childsAll  = $this.next().children().siblings();
		    }else{
		    	childsAll = $(opts.childId);
		    }
	 		//var childNewId = opts.childId == undefined ? $this.next() : opts.childId;    //判断子切换节点为空或自己定义其他名字
		    
	    }else{   //纵向
	 		parentChilds = $this.find(opts.zHeadClass);
	 		childsAll = $this.find(opts.zContClass);
	 		parentChilds.each(function(i){
		    	$(this).attr('rel',i);
		    });
	 	};
	 	
		var len = parentChilds.length;    //标签的数量
		if(len == 0){
			$this.children().addClass(opts.chooseClass);
			$this.next().children().show();
			return;
		}
		
		//初始化纵向内容框高度
		if(!styleBoolean){
			 contHeight = $this.height() - parentChilds.eq(0).outerHeight() * len;     //+边框的高度
			 childsAll.css('height',contHeight);
		};
		
		//标签和下面内容对应显示
		function showCont(n){
			if(easingBoolen){
				childsAll.hide().eq(n).show();
			};
			if(styleBoolean){    //-横向
			    var parentNewChild = opts.linkA ? $this.find('a') : parentChilds;
				parentNewChild.removeClass(opts.chooseClass).eq(n).addClass(opts.chooseClass);
				if(!easingBoolen){    //显示效果
				    childsAll.slideUp().eq(n).slideDown({duration:200,easing:opts.easings});
				};
			}else{     //-纵向
				parentChilds.removeClass(opts.chooseClass).eq(n).addClass(opts.chooseClass);
				parentChilds.find('s').removeClass('on').eq(n).addClass('on');    //纵选项卡右侧小点图标切换
				if(!easingBoolen){    //显示效果
					if(n == 0){    //判断第一个显示效果
						childsAll.hide().eq(0).show({'height':contHeight},{duration:200,easing:opts.easings});
					}else{
				        childsAll.hide({'height':0},{duration:200,easing:opts.easings});
				        childsAll.eq(n).show({'height':contHeight},{duration:200,easing:opts.easings});
					};
				};
			};
		};
		
		//默认选中显示的标签
		showCont(opts.index - 1);
		
		//标签效果切换
		parentChilds.bind(opts.events,function(){
			//传参控制效果是否有效
			var options = $.data(container,'ui-tab').options; 
			if(!options.disabled && options.disabled != undefined)    //非字符引用会显示undefined
		        return false;
			
			//防止重复点击
			var t = 0;
			parentChilds.each(function(i){
				if($(this).hasClass(opts.chooseClass)){
					t = $(this).attr('rel');
					if(t == undefined) t = $(this).index();
				};
				if($(this).find('a').hasClass(opts.chooseClass)){
					t = $(this).index();
				};
			});
	
			if(styleBoolean){
				s = $(this).index();    //点击后改变s的值
			}else{
				s = parseInt($(this).attr('rel'));
			};
			if(t == s) return false;
			showCont(s);
		});
		
		if(len == 1){
			childsAll.show();
        	return;
		}
		
		//播放控制
	 	var autoControl = {
	 		init:function(){
	 			_this = this;
	 			_this.play();
	 			_this.binds();
	 		},
	 		slide: function(j){
	 			s += j;
		 		s = s >= len ? 0 : s;
		 		showCont(s);
	 		},
	 		play: function(){
	 			_scrollObj = setInterval(function(){
		 			_this.slide(1);
		 		},opts.speed);
	 		},
	 		stop: function(){
	 			clearInterval(_scrollObj);
	 		},
	 		binds: function(){
	 			$this.bind('mouseover',function(){_this.stop();});
			 	$this.bind('mouseout',function(){_this.play();});
	 	   }
	 	};
	 	
	 	//判断是否自动播放
		if(opts.autoPlay){     
	 		autoControl.init();
	 	};
	 	
};

//控制选项卡操作，起效与无效等
$.ui.accordion.prototype = {
	enable: function(){
		this.options.disabled = true;
	},
	disable: function(){
		this.options.disabled = false;
	} 
};

})(jQuery);



/*
 * jQuery minBox v0.8.6
 * Copyright (c) 2014-08-26 10:50 Jensen
 * 说明：遮罩层-不带滚动条效果
 * 需要增加的功能    type: ['dialog', 'page', 'iframe', 'loading', 'tips']
 * 
 * 0.8.6更新说明：
 *    1，优化层上层的功能并且实现弹出层基类的new方法，2个层之间相互不影响
 *    2，修复了动态添加层右上角关闭功能
 *    3，修复$.ui.minTips的层级6000
 */

(function($){
    
    var ie  = $.browser.msie;
    var ie6 = $.browser.msie && $.browser.version < 7;
    var ie7 = $.browser.msie && $.browser.version < 8;
    var win = $(window);
    var doc = $(document);
    var hml = $('html');
    
    if(ie6)  document.execCommand("BackgroundImageCache", false, true); 
    
    $.ui = $.ui || {};
    $.ui.version = '0.8.6';
    
    //皮肤颜色开发中...
    //var colors = ['#4084b6'];  //蓝色
    //var colors = ['#B6D805'];  //绿色
    //var colors = ['#cc0001'];  //红色

    $.fn.extend({
        minBox: function(options){    //基础弹出框方法
            return this.each(function(){
                //alert(options.drag);
                minBoxer(this,options);
            });
        },
        minLoadBox: function(options){    //往指定盒子添加动态加载图标
            return this.each(function(){
                //防止重复锁定窗口
                if(!$(this).is('.msgBox'))
                    $.ui.minLoadBox(this,options);
            });
        },
        minDrag: function(options){    //拖动窗口函数
            return this.each(function(){
                $.ui.minDrag.init(this,options);
            });
        },
        minTips: function(options){    //Tips信息提示
            return this.each(function(){
                $.ui.minTips(this,options);
            });
        },
        slideShow: function(options){    //Tips信息提示
            return this.each(function(){
                $.ui.slideShow(this,options);
            });
        }
    });
    
    /*
     * 遮罩层效果--指定页面ID弹出框的调用
     * 调用方法: $("#bb").minBox({opacity: 70,background: '#666'});  //参数：键值对
     *         $('#waitBox').minBox('nobg');  //参数：字符
     *         $('#waitBox').minBox();  //参数：空
     */
    
//    $.ui.closeBox = function(){
//    	$.ui.minBox.close();
//    };

    function minBoxer(container,options){
    	//单点登录跳转
        if($(container).attr('id') === 'jump-login'){
        	location.href = getPath()+'/auth/login?redirectUrl='+escape(location.href);
        	return false;
        };
        var defaults = {
            layClick    : false,    //控制遮罩层背景点击是否关闭层
            opacity     : 30,       //遮罩层背景透明度 -可缺省
            background  : "#333",   //遮罩层背景颜色 -可缺省
            zIndex      : 5000,     //遮罩层层级 -可缺省
            showOverlays: true,     //遮罩层是否显示 -可缺省
            drag        : false,    //判断是否可以拖动
            direc       : 'mm',     //判断窗口定位位置
            bodyScroll  : false,    //判断是否有滚动条
            dirOnly     : false     //专门判断是否定位右下角而select不隐藏
        };
        var minBox = {
            r: {},
            //初始化参数和设置
            init: function(container,options){
                options = options || {};
                var s = this;
                //if(!container) return false;
                s.r.box = $(container);
                //判断传参是否字符串
                if(typeof options == 'string'){
                    if(options == 'nolay')    //传参nobg字符，取消遮罩层
                         options={showOverlays: false};
                }
                //接收参数
                s.o = $.extend({},defaults,options);
                //alert(defaults.drag);
                //窗口定位
                s.boxSize();
                //创造遮罩层
                s.creates();
                //兼容IE
                s.fixIE();
                //显示遮罩层和弹出框
                s.open();
                //绑定事件
                s.bindEvents();
                //关闭按钮关闭
                s.r.box.find('.box-closes').click(function(){
                    s.close();
                })
                //页面大小变化时弹框位置和背景大小改变
                win.resize(function(){
                    s.update();
                });
            },
            //计算设置定位
            boxSize: function(){
                var s = this;
                winW     = win.width();
                winH     = win.height();
                docH     = doc.height();
                winW     = winW +17;
                boxWidth = s.r.box.outerWidth();
                boxheig  = s.r.box.outerHeight();
                leftWid  = parseInt((winW - boxWidth)/2 + 8);    //8(弹出框定位修复)
                topHeig  = parseInt((winH - boxheig)/2);
                if(s.o.bodyScroll && !ie7)  winW = win.width();
                //弹出框的页面各种定位
                switch(s.o.direc){
                    case 'lt':  //左上
                        leftWid = 0; topHeig = 0;
                        break;
                    case 'mt':  //中上
                        topHeig = 2;  //2为弹出提示框的宽度
                        break;
                    case 'rt':  //右上
                        leftWid = parseInt(winW - boxWidth); topHeig = 0;
                        break;
                    case 'lm':  //左中
                        leftWid = 0;
                        break;
                    case 'rm':  //右中
                        leftWid = parseInt(winW - boxWidth);
                        break;
                    case 'lb':  //左下
                        leftWid = 0; topHeig=parseInt(winH - boxheig);
                        break;
                    case 'mb':  //中下
                        topHeig = parseInt(winH - boxheig - 2);  //2为弹出提示框的宽度
                        break;
                    case 'rb':  //右下
                        leftWid = parseInt(winW - boxWidth); topHeig=parseInt(winH - boxheig);
                        break;
                    default:    //中中 - 正居中
                }
            },
            //创造添加box到body
            creates: function(){
                var s = this;
                winW = ie6 ? winW : '100%';
                s.r.box.css({position:'fixed','z-index':s.o.zIndex+10,left:leftWid,top:topHeig});
                s.o.bodyScroll ? hml.css({overflow:'auto'}) : hml.css({overflow:'hidden'});
                 //遮罩层设置
                if(s.o.showOverlays){
                    var layHtml =
                        '<div id="pageOverlays-'+s.o.zIndex+'" class="pageOverlays" style="position:absolute;display:none;top:0;left:0;background-color:'+ s.o.background+';' +
                        'z-index:'+s.o.zIndex+';width:'+winW+';height:'+docH+'px;' +
                        'filter:alpha(opacity='+s.o.opacity+');opacity:'+s.o.opacity/100+';overflow:hidden;"></div>';
                    $('body').append(layHtml);
                    var lay = '#pageOverlays-' + s.o.zIndex;
                    s.r.overlay = $(lay);
                }
            },
            //兼容ie
            fixIE: function(){
                var s = this;
                 if(ie6){
                    topHeig += doc.scrollTop();    //+滚动条滚动的高度
                    s.r.box.css({position:'absolute',top:topHeig});
                    $('html').css({'overflow-x':'hidden'});
                    win.scroll(function(){
                        s.r.box.css({top:topHeig + doc.scrollTop()});
                    });
                }
                //select和视频的处理
                if(ie && !s.o.dirOnly){
                    $('embed').attr('wmode','opaque');
                    $('embed, object, select').css({'visibility':'hidden'});
                    s.r.box.find('embed, object, select').css({'visibility':'visible'});
                    $('iframe').css({'visibility':'hidden'});
                }
            },
            bindEvents: function(){
                var s = this;
                s.r.minClose = s.r.box.find('.minClose');
                //关闭按钮绑定关闭事件
                s.r.minClose.bind('click.minBox',function(){
                    s.close();
                });
                //判断遮罩层是否可以点击关闭
                if(s.o.layClick && s.r.overlay){
                    s.r.overlay.bind('click.minBox',function(){
                        s.close();
                    });
                }
            },
            unbindEvents: function(){
                var s = this;
                s.r.minClose.unbind('click.minBox');
                s.r.overlay && s.r.overlay.unbind('click.minBox');
            },
            //窗口改变大小时候重新计算定位
            update: function(){
                var s = this;
                s.boxSize();
                if(ie6)  topHeig += doc.scrollTop();
                s.r.overlay && s.r.overlay.css({width:winW,height:docH});
                leftWid -= 17;
                s.r.box.css({left:leftWid,top:topHeig});
            },
            //打开遮罩层和弹出框
            open: function(){
                var s = this;
                s.r.overlay && s.r.overlay.show();
                s.o.drag ? s.r.box.show().minDrag() : s.r.box.show();  //弹出层设置是否可以拖动
            },
            //关闭取消遮罩层和弹出框
            close: function(){
                var s = this;
                s.r.overlay && s.r.overlay.remove();
                !$('.pageOverlays')[0] && scrollFun();  //判断是否多个遮罩层，待最后一个遮罩层清除的时候显示滚动条
                s.r.box.hide();
                s.unbindEvents();
            },
            //单独去掉遮罩层
            closeOverlay: function(){
                var s = this;
                if(ie){
                    $('embed, object, select').css({'visibility':'visible'});
                }
                s.r.overlay && s.r.overlay.remove();
                scrollFun();
            }
        };
        return minBox.init(container,options);
    }

    //实现层上层的第二层的覆盖
    $.fn.minBox1 = function(options){
        return this.each(function(){
            options = options || {};
            $(this).minBox({
                zIndex: 5100,
                showOverlays: options.showOverlays || true,
                drag: options.drag || false
            });
        });
    }

    //显示滚动条
    scrollFun = function(){
    	$('body').css({height:'auto',overflow:'auto'});
        $('html').css({overflow:'auto'});
        if(ie6){    //ie6bug修复
            $('body').css({width:'100%'});
        }
        if(ie){
		 	$('embed, object, select').css({'visibility':'visible'});
		 	$('iframe').css({'visibility':'visible'});
		}
    };
    
    /*
     * 遮罩层效果--往指定BOX里面添加加载中弹出框
     * 调用方法: $('.test1').minLoadBox(); //锁定指定窗口
     *         minLoadClose();           //解锁加载弹出框 
     */
    $.ui.minLoadBox = function(container,options){
        options   = options || {};
        var $this = $(container);
        var _this = this;
        $this.addClass('msgBox');
        var opts = $.extend({
            opacity     : options.opacity      || 10,                   //遮罩层背景透明度 -可缺省
            background  : options.background   || "#ccc",               //遮罩层背景颜色 -可缺省
            zIndex      : options.zIndex       || 5000,                 //遮罩层层级 -可缺省
            showOverlays: options.showOverlays || true                  //遮罩层是否显示 -可缺省
        },options);
        waitOverWidth   = $this.width(); 
        waitOverHeig    = $this.height();
        var waitBoxHtml = '<div id="waitMinBox" class="waitBox2"><img src="../../resources/images/loading.gif"></div>';
        $this.html('').append(waitBoxHtml);
        var $waitBox  = $this.find('.waitBox2');
        var _waitLeft = (waitOverWidth - $waitBox.width())/2;
        var _waitTop  = (waitOverHeig - $waitBox.height())/2; 
        $waitBox.css({'position':'absolute','z-index':'5110','left':_waitLeft,'top':_waitTop});
        $this.css({'position':'relative'});
        //给弹出框定位显示
        $this.find('.waitBox').show();
    };
    
    //类似加载框的关闭
    minLoadClose = function(){
        $('#waitMinBox').remove();
    };
    
    
     /*
     * minMsgBox调用函数，提取公用
     * @param obj 对象
     * @param String 方位
     */
    timeHander = function(container,pos){
        var _pos = pos;
        var _hideHeig = 0;
        var _this = container;
        _this.minBox({
            'direc': _pos,
            'showOverlays': false,
            'bodyScroll': true
        });
        if(pos == "mb") _hideHeig = $(window).height();
        if(pos == "mt") _hideHeig = -_this.height();
        setTimeout(function(){
            _this.animate({'top':_hideHeig},300,function(){
                _this.remove();
                $("#pageOverlays-5000").remove();
                scrollFun();
            });
        },3000);
    };

    /*
     * 加载中弹出框 - 类似加载中-有无图片或只有问题mini框 -body 全局
     * @param msg {String} 文字说明
     * @param img {String} 图片类型名称 -可缺省  'sure','error','le','ku'
     * @param overlay {String} 是否有遮罩层 -可缺省 'nobg'
     * @param pos {String}  位置定位
     * 调用方法  minMsgBox('大家好！我来了...','sure','nobg')
     *           minMsgBox('大家好！我来了...','sure')
     *           minMsgBox('大家好！我来了...')
     */

    minMsgBox = function(msg,img,overlay,pos){
        var _msg = msg;
        var imgHtml = img != undefined ? '<s class=wait-'+img+'></s>' : '';
        var speed = 1000;
        var loadBoolean =  msg == undefined && img == undefined && overlay == undefined;
        //参数为空时候，默认为加载中样式
        if(loadBoolean){
            imgHtml = '<img src=../../resources/images/loading.gif>';
            _msg = '正在加载中，请稍后...';
        }
        var waitBoxHtml =
            '<div id="waitBox" class="waitBox">' +
                '<div class="waitBox-main">'+imgHtml+'<span>'+_msg+'</span></div>' +
                '<div class="waitBox-bg"></div>' +
            '</div>';
        $('body').append(waitBoxHtml);
        var $waitBox = $('#waitBox');
        if(img === undefined){
            $waitBox.find('span').css({'text-align':'center','float':'none','padding-left':'0'});
        }
        var _overlay = overlay != undefined ? overlay : '' ; 
        //给弹出框定位显示
        switch(pos){
            case 'mb':
                timeHander($waitBox,'mb');
                break;
            case 'mt':
                timeHander($waitBox,'mt');
                break;
            default:
                $waitBox.minBox(_overlay);
        }
        //播放控制
        var _scrollObj = function(){
            setTimeout(function(){
                //minMsgClose();
                //minMsgBox('天气好，心情就好...','le','nobg');
            },speed);
        };
        //判断非加载框，自动关闭
        if(!loadBoolean && pos == undefined){     
            _scrollObj();
        }
    };
    
    //类似加载框的关闭
    minMsgClose = function () {
        $('#waitBox,#pageOverlays-5000').remove();
        scrollFun();
    };
    
    /*
     * 遮罩层效果 --动态插入弹出框
     * 提示：通用弹出框的传参调用
     * 调用方法：
     * mixBox({
     *    boxStyle: 'confirm',  //msg: "感叹号"提醒图片;error: "叉"提醒图片;success: "勾"提醒图片
     *    msgHead: '提示信息',       
     *    msgInfo: '图标后标题',     
     *    msgConts: '图标下提示文字' 
     * });
     */
    funcNone = function(){};
    mixBox = function(options){
        options = options || {};
        var opts = $.extend({
            boxStyle: options.boxStyle || 'defaults',       //弹出框类型
            msgHead : options.msgHead  || '提示信息',         //弹出框名称
            msgInfo : options.msgInfo  || '操作成功',         //弹出框大图标后的提示文字
            msgConts: options.msgConts || '恭喜您，操作成功！', //大图标下面的文字
            overFunc: options.overFunc || 'funcNone',       //点击确定按钮后的回调函数
            drag    : options.drag     || false,            //判断是否可以拖动
            msgClass: 'remind'
        },options);
        if(opts.boxStyle == 'error') opts.msgClass = 'fail';
        if(opts.boxStyle == 'success' || opts.boxStyle == 'defaults' ) opts.msgClass = 'ok';
        var mixHtml =
            '<div class="box-pop" id="box-pop" style="display:none">' +
                '<ul class="boxHeader">' +
                    '<li class="fl">'+opts.msgHead+'</li>' +
                    '<li class="fr"><a class="closeBox" onclick="closemixBox()"> </a></li>' +
                '</ul>' +
                '<div class="c2">' +
                    '<table style="margin:0 auto;text-align:center"><tr><td><span class='+opts.msgClass+'> </span></td><td>'+opts.msgInfo+'</td></tr></table>' +
                '</div>' +
                '<p>'+opts.msgConts+'</p>' +
                '<div class="box-pop-but clearfloat"><a class="queding" onclick="javascript:closemixBox();'+opts.overFunc+'()"></a></div>' +
            '</div>';
        $('body').append(mixHtml);
        $('#box-pop').minBox(options);
    };

    closemixBox = function(){
        $("#pageOverlays-5000,#box-pop").remove();
        scrollFun();
    };

    //简写-操作成功
    mixOk = function(){
        mixBox();
    };
    //简写-操作失败
    mixError = function(m,n){
        mixBox({
            boxStyle: 'error',
            msgInfo: n || '操作失败',
            msgConts: m ||  '对不起，操作失败！'
         });
    };
    //简写-操作出现问题
    mixQue = function(m,n){
        mixBox({
            boxStyle: 'msg',
            msgInfo: n || '操作有误',
            msgConts: m ||  '对不起，操作有误，请检查！'
        });
    };
    
    /*
     * 窗口拖动
     * 调用方法: $("#bb").minDrag();  
     */
    
    $.ui.destroyDrag = function(){
    	$.ui.minDrag.destroy();
    };

    $.ui.minDrag = {
    	r: {},
    	init: function(container,options){
    		options = options || {};
    		//var s = this;
    		var f = $.ui.minDrag;
	        f.r.obj = $(container);
	        f.r.head = f.r.obj.find('.boxHeader');
	        f.r.head.bind('mousedown.minDrag',f.start);
	        doc.bind('mouseup.minDrag', f.end);
    	},
    	//头部点击开始拖动
    	start: function(e){
    		e = e || window.event;
    		//var t = this;   //这里的this为 s.r.head的头部的HTML对象;
    		var f = $.ui.minDrag;
    		f.r._x = 0;
	        f.r._y = 0;
    		f.r.head.css('cursor','move');
			f.r._x = e.pageX - f.r.obj.offset().left;
            f.r._y = e.pageY - f.r.obj.offset().top + doc.scrollTop();
            f.r.oWidth = parseInt(win.width() - f.r.obj.outerWidth());
            f.r.oHeight = parseInt(win.height() - f.r.obj.outerHeight());
    		f.removeBlue();
    		doc.bind('mousemove.minDrag',f.move);
    	},
    	//头部点击拖动显示
    	move: function(e){
    		e = e || window.event;
    		//var t = this;
    		var f = $.ui.minDrag;
    		//var oWidth = 0;
	        //var oHeight = 0;
			var now_x = e.pageX - f.r._x;
            var now_y = e.pageY - f.r._y;
            //控制拖动在浏览器可见范围内
            if(now_x <= 0) now_x = 0;
            if(now_y <= 0) now_y = 0;
            if (now_x >= f.r.oWidth)  now_x = f.r.oWidth; 
            if (now_y >= f.r.oHeight) now_y = f.r.oHeight; 
            //拖动实时定位
            f.r.obj.css({left:now_x,top:now_y});
    	},
    	//拖动鼠标按钮抬起停止拖动
    	end: function(){
    		var f = $.ui.minDrag;
    		doc.unbind('mousemove.minDrag');
    		f.showBlue();
    	},
    	//去掉文字选中背景蓝色
    	removeBlue: function(){
    		if(typeof userSelect === "string"){
                 return document.documentElement.style[userSelect] = "none";
            }
            document.unselectable  = "on";
            document.onselectstart = function(){
               return false;
            };
    	},
    	//文字选中背景蓝色
    	showBlue: function(){
    		//可以选中背景蓝色
            if(typeof userSelect === "string"){
                return document.documentElement.style[userSelect] = "text";
            }
            document.unselectable  = "off";
            document.onselectstart = null;
    	},
    	//销毁所有的绑定事件
    	destroy: function(){
    		var f = $.ui.minDrag;
    		doc.unbind('mousemove.minDrag');
	        doc.unbind('mouseup.minDrag');
    		f.r.head.unbind('mousedown.minDrag');
    		f.showBlue();
    	}
    };

    /*
     * Tips信息提示
     * 提示：通用弹出框的传参调用
     * 调用方法：
     * $('#btnBox11').minTips({
     *	  tipStyle: 't',
     *	  tipWidth: 120,
     *	  tipHeight: 54,
     *	  tipConts: '这里显示的内容很精彩,内容很精彩的内容很精彩！',
     *	  events : 'click'
     * });
     */
    $.ui.tipdefault = {
        tipStyle :  't',    //弹出框类型
        tipConts :  '',     //大图标下面的文字
        tipWidth :  'auto',
        tipHeight:  'auto',
        events   :  'hover',//判断是否可以拖动
        bgColor  :  ''      //yellow, red, blue, green
    };

    $.ui.minTips = function(container,options){
        var tipHtml, classNames, _sets, $tips, bgcolor;
        options = options || {};
        var s = $(container);
        if($("#tips")[0]) return false;
        //接收参数
        var opts = $.extend({},$.ui.tipdefault,options);
        switch(opts.bgColor){
            case 'red':
                bgcolor = '#cc0001';
                classNames = opts.tipStyle + '1';
                break;
            case 'blue':
                bgcolor = '#0090ff';
                classNames = opts.tipStyle + '2';
                break;
            case 'green':
                bgcolor = '#a4c302';
                classNames = opts.tipStyle + '3';
                break;
            default:
                bgcolor = '#ff9900';
                classNames = opts.tipStyle;
        }
        //Tips显示框模板
        var tipHtml =
            '<div class="tips" id="tips" style=background-color:'+bgcolor +'>' +
                '<div class="tips-cont">' +
                    '<p>'+opts.tipConts+'</p>' +
                    '<s class='+classNames+'></s>' +
                 '</div>' +
            '</div>';
        //生成设置提示信息框
        function tipCreate(){
            if($("#tips")[0]) return false;
            $('body').append(tipHtml);
            $tips = $("#tips");
            var lf = s.offset().left;
            var tp = s.offset().top;
            var _posx = 0;
            var _posy = 0;
            switch(opts.tipStyle){
                case 't':  //上方显示
                    _posx = lf; _posy = tp - opts.tipHeight - 22;
                    break;
                case 'r':  //右侧显示
                    _posx = lf + s.outerWidth() + 10; _posy = tp;
                    break;
                case 'b':  //下方显示
                    _posx = lf; _posy = tp + s.outerHeight() + 10;
                    break;
                case 'l':  //左侧显示
                    _posx = lf - $tips.outerWidth() - 10; _posy = tp;
                    break;
            }
            if(opts.tipWidth != 'auto' && opts.tipStyle == 'l'){
                _posx = lf - opts.tipWidth - 30;
            }
            $tips.css({'width':opts.tipWidth,'height':opts.tipHeight,'position':'absolute','left':_posx,'top':_posy,'z-index':'6000'}).show();
        }
        //定时器开启
        var timeControl = function(){
            _sets = setTimeout(function(){
                $("#tips").remove();
            },3000);
        };
        //定时器关闭
        var clears = function(){
            clearInterval(_sets);
        };
        if(opts.events == 'click'){    //点击事件
            s.click(function(){
                tipCreate();
                timeControl();
            });
        }else{
            s.hover(function(){    //滑动事件
                tipCreate();
            },function(){
                closeMinTips();
            });
        }
        //关闭
        var closeMinTips = function () {
            $("#tips").remove();
        };
    };

    /*
     * 字体节点滑过下拉显示效果
     * 调用方法：
     * $('#dd').slideShow({
     *    showNode: '#htbxBox1'
     * });
     */
    $.ui.slideShow = function(container,options){
        options = options || {};
        var _left,_top;
        var opts = $.extend({
            showNode: options.showNode,           //显示BOX
            events  : options.events  || 'hover'  //触发的事件
        },options);
        var f = $(container);      //指向的节点
        var n = $(opts.showNode);  //显示的节点
        var fh = f.outerHeight();
        var fw = f.outerWidth();
        var nh = n.outerHeight();
        var nw = n.outerWidth();
        //显示提示框
        var creatBox = function(){
            if(f.css('display') == 'inline'){  //判断滑上去的非块状box
                var _fontH = parseInt(f.css('fontSize').replace('px',''));
                _left = f.offset().left + parseInt(f.css('padding-left').replace('px',''));
                _top  = f.offset().top + _fontH + 5;    //加上字的行高
            }else{  //块block
                _left = f.offset().left;
                _top  = f.offset().top + fh + 5;
            }
            //修复底部多出时候
            if(doc.scrollTop() != 0){  //判断滚动条未往下滚动在顶部时候
                 var bomSize = win.height() - (f.offset().top - doc.scrollTop()) - fh;
                _top = bomSize < nh ? f.offset().top - nh - 5 : _top ;
            }
            //修复右侧多出时候
            var rigSize = win.width() - f.offset().left;
            _left = rigSize < nw ? f.offset().left - nw + fw : _left ;
            n.css({'position':'absolute','left':_left,'top':_top}).show();
        };
        //判断触发事件
        if(opts.events == 'click'){
            f.click(function(){
                creatBox();
            });
            //右上角关闭
            n.find('.msgs-close').click(function(){
                n.hide();
            });
        }else if(opts.events == 'hover'){
            f.hover(function(){
                creatBox();
            },function(){
                n.hide();
            });
        }else{
            creatBox();
        }
    };
    //简单调用方法
    slideShow = function(m,n,k){
        $(m).slideShow({
            showNode: n,
            events: k
        });
    };
    
})(jQuery);

//<input id="text" type="text" name="pattern" value="" autocomplete="off" size="40" />
//$("#text").suggest("getPath() + /ajax/testSuggest?type=1",{
	//onSelect: function() {
		//alert($(this).val() + '||' + $(this).attr('relid'));
	//}
//});

//2015-01-06 颜学，解决特殊字符搜索问题
function searchHref(url,allkeyword) {
	var keyword = "${keyword}";
	if(keyword == '${keyword}') {
		keyword = allkeyword;
	}
	url += url.lastIndexOf('/') == url.length-1?'':'/';
	if(keyword && allkeyword != 'allkeyword') {
		var suffix = url.substr(url.length-3);
		if(suffix == '/s/'){
			url += keyword+'/';
		}else {
			url = url.substring(0,url.length-1);
			url += '-'+keyword+'/';
		}
	}
	location.href = url;
}
(function($){
$.suggest=function(input,options){
  var $input=$(input).attr("autocomplete","off");
  var $resultAll=$(document.createElement("div"));
  var $results=$(document.createElement("ul"));
  var timeout=false;
  var prevLength=0;
  var cache=[];
  var cacheSize=0;
  var enters=0;
  var result="";
  var city;
  var nubs=0;  //下拉条数目控制
  var path = options.pathURL;
  $resultAll.append($results);
  $resultAll.addClass(options.resultsClass)
  $resultAll.appendTo("body");
  resetPosition();
  $(window).load(resetPosition).resize(resetPosition);
  $input.blur(function(){
    setTimeout(function(){
  	  $resultAll.hide();
    },200);
  });
  try{
    $results.bgiframe();
  }
  catch(e){
  }
  if($.browser.mozilla){
    $input.keypress(processKey2);
  }else {
    $input.keydown(processKey2);
  }
  $input.keyup(processKey);
  function resetPosition(){
    var offset=$input.offset();
    $resultAll.css({top:(offset.top+input.offsetHeight+document.documentElement.scrollTop+document.body.scrollTop+2)+"px",left:offset.left-3+"px"});
  }
  $(window).scroll(function(){
  	$resultAll.hide();
     resetPosition()
  })
  if(!$.browser.msie){
      $(window).scroll(function(){
      	$resultAll.hide();
	       resetPosition()
	    })
	    $("#header-close").click(function(){
	        setTimeout(resetPosition,1000);
	    })
	    setTimeout(resetPosition,6000);
  }
  
  function processKey(e){
    if(/^32$|^9$/.test(e.keyCode)&&getCurrentResult()){
      if(e.preventDefault){
        e.preventDefault();
      }
      if(e.stopPropagation){
        e.stopPropagation();
      }
      e.cancelBubble=true;
      e.returnValue=false;
      selectCurrentResult();
    }else {
      if($input.val().length!=prevLength){
        if(timeout){
          clearTimeout(timeout);
        }
        timeout=setTimeout(suggest,options.delay);
        prevLength=$input.val().length;
      }
    }
  }
  function processKey2(e){
    if(/13$|27$|38$|40$/.test(e.keyCode)&&$results.is(":visible")){
      if(e.preventDefault){e.preventDefault();}
      if(e.stopPropagation){e.stopPropagation();}
      e.cancelBubble=true;
      e.returnValue=false;
      switch(e.keyCode){
      case 13:
      var ss = $results.children("li").hasClass(options.selectClass);
      if(!ss){
      	  $("#sf").submit();
        }	
        if(options.jstype=="html"){
      	  selectCurrentResult();
        }else {
      	  selectCurrentResult1();
        }
        enters = 1;
        break;
      case 38:
        prevResult();
        break ;
      case 40:
        nextResult();
        break ;
      case 27:
        $results.hide();
        break ;
      }
    }else {
      if($input.val().length!=prevLength){
        if(timeout){clearTimeout(timeout);}
        timeout=setTimeout(suggest,options.delay);
        prevLength=$input.val().length;
      }
    }
  }
  function suggest(){
    var q=$.trim($input.val());
    var cityId=$("#search_cityId").val();
    if(q.length>=options.minchars){
      cached=checkCache(q);
      if(cached){
        if(options.jstype=="html"){
          displayItems(cached["items"]);
        }else {
          displayItems1(cached["items"]);
        }
      }else {
        if(enters==1){enters =0;return false;}
        $.post(options.source,{q:q,search_cityId:cityId},function(txt){
      	  $resultAll.hide();
          var items;
          try{
            items=parseTxt(txt,q);
            displayItems(items);
          }catch(e){
            items=parseTxt1(txt,q);
            displayItems1(items);
          }
          addToCache(q,items,txt.length);
        },options.jstype);
      }
    }else {
  	  $resultAll.hide();
    }
  }
  function checkCache(q){
    for(var i=0;i<cache.length;i++){
      if(cache[i]["q"]==q){
        cache.unshift(cache.splice(i,1)[0]);
        return cache[0];
      }
    }
    return false;
  }
  function addToCache(q,items,size){
    while(cache.length&&(cacheSize+size>options.maxCacheSize)){
      var cached=cache.pop();
      cacheSize-=cached["size"];
    }
    cache.push({q:q,size:size,items:items});
    cacheSize+=size;
  }
  function displayItems(items){
    if(!items){
      return ;
    }
    if(!items.length){
  	  $resultAll.hide();
      return ;
    }
    var html="";
    for(var i=0;i<items.length;i++){
      html+="<li>"+items[i]+"</li>";
    }
    $results.html(html).show();
    $resultAll.show();
    $results.children("li").mouseover(function(){
      $results.children("li").removeClass(options.selectClass);
    }).click(function(e){
      e.preventDefault();
      e.stopPropagation();
      selectCurrentResult();
    });
  }
  function displayItems1(items){
  	try{
    if(!items){
      return ;
    }
    if(!items.length){
  	  $resultAll.hide();
      return ;
    }
    var html="";
    $(".totalNub").remove();
    //alert(items.join(","));
    for(var i=0;i<items.length-4;i++){
      html+="<li id="+items[i].ID+" >"+"<span style='float:left;color:#666;width:280px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap'>"+items[i].VAL+"</span>"+"<span style='float:right;padding-right:4px;color:#999'>"+items[items.length-3].toString().split(',')[i]+"</span>"+"</li>";
    }
    $results.html(html).show();
    
    var imgSrc = items[items.length-2];
    var imgLinkUrl = items[items.length-1];
    if(imgSrc != null){
    	  //添加广告位
        var ad = "<a target='_blank' href='"+imgLinkUrl+"'><img src='"+ hstatic + imgSrc+"' width='332' height='56'></a>";
        $results.prepend(ad).show();
    }
    
    var $res = items[items.length-4].split(",");
    var res = "<div class='totalNub' style='height:auto;width:310px;margin:0 auto;border-top:1px solid #ccc;height:32px;color:#666;text-align:right;line-height:32px;background-color:none'><a class='search-result' href='javascript:searchHref(\""+path+"/s/\",\""+$res[0]+"\");'>"+"关于"+'"'+$res[0]+'"'+"共有"+"<span style='color:#ff3377;font-weight:bold'> "+$res[1]+" </span>"+"场演出"+"</a></div>";
    $resultAll.append(res).show();
    $results.children("li").mouseover(function(){
      $results.children("li").removeClass(options.selectClass);
      $(this).addClass(options.selectClass);
    }).click(function(e){
      e.preventDefault();
      e.stopPropagation();
      selectCurrentResult1();
    });
  		}catch(e){}
  }
  function parseTxt(txt,q){
    var items=[];
    var tokens=txt.split(options.delimiter);
    for(var i=0;i<tokens.length;i++){
      var token=$.trim(tokens[i]);
      if(token){
        token=token.replace(new RegExp(q,"ig"),function(q){
          return "<span class=\""+options.matchClass+"\">"+q+"</span>";
        });
        items[items.length]=token;
      }
    }
    try{
    result = txt[txt.length-1].result;
    city = txt[txt.length-1].city.split(',');
    items.push(result);
    items.push(city);
    }catch(e){}
    return items;
  }
  function parseTxt1(txt,q){
    var items=[];
    var tokens=txt;
    for(var i=0;i<tokens.length;i++){
      var token=$.trim(tokens[i].VAL);
      if(token){
        token=token.replace(new RegExp(q,"ig"),function(q){
          return "<span class=\""+options.matchClass+"\">"+q+"</span>";
        });
        items[items.length]=tokens[i];
      }
    }
    try{
    result = txt[txt.length-2].result;
    city = txt[txt.length-2].city.split(',');
    referrals_img = txt[txt.length-1].referrals_img;
    referrals_url = txt[txt.length-1].referrals_url;
    items.push(result);
    items.push(city);
    items.push(referrals_img);
    items.push(referrals_url);
  }catch(e){}
    return items;
    
  }
  function getCurrentResult(){
    if(!$results.is(":visible")){
      return false;
    }
    var $currentResult=$results.children("li."+options.selectClass);
    if(!$currentResult.length){
      $currentResult=false;
    }
    return $currentResult;
  }
  function selectCurrentResult1(){
    $currentResult=getCurrentResult();
    if($currentResult){
      $input.val($currentResult.text());
      $input.attr("relid",$currentResult.attr("id"));
      $resultAll.hide();
      if(options.onSelect){
        options.onSelect.apply($input[0]);
      }
    }
  }
  function selectCurrentResult(){
    $currentResult=getCurrentResult();
    if($currentResult){
      $input.val($currentResult.text());
      $input.attr("relid",$currentResult.attr("id"));
      $resultAll.hide();
      if(options.onSelect){
        options.onSelect.apply($input[0]);
      }
    }
  }
  $currentResult1=getCurrentResult();
  
	$results.children("li").mouseover(function(){
		alert(1);
  	nubs = $(this).prevAll().length +1;
	})
  
	function nextResult(){
    $currentResult=getCurrentResult();
    if($currentResult){
  	if($currentResult.removeClass(options.selectClass).next().html()!=null){
  		$currentResult.removeClass(options.selectClass).next().addClass(options.selectClass);
  	}else{
  		$results.children("li:first-child").addClass(options.selectClass);
  	}
    }else {
        $results.children("li:first-child").addClass(options.selectClass);
    }
  }
  function prevResult(){
    $currentResult=getCurrentResult();
    if($currentResult){
	    if($currentResult.removeClass(options.selectClass).prev().html()!=null){
	    	$currentResult.removeClass(options.selectClass).prev().addClass(options.selectClass);
    	}else{
    		$results.children("li:last-child").addClass(options.selectClass);
    	}
    }else {
      $results.children("li:last-child").addClass(options.selectClass);
    }
  }
};
$.fn.suggest=function(source,options){
  if(!source){
    return ;
  }
  options=options||{};
  options.jstype=options.jstype||"json";
  options.source=source;
  options.delay=options.delay||100;
  options.resultsClass=options.resultsClass||"ac_results";
  options.selectClass=options.selectClass||"ac_over";
  options.matchClass=options.matchClass||"ac_match";
  options.minchars=options.minchars||1;
  options.delimiter=options.delimiter||"\n";
  options.onSelect=options.onSelect||false;
  options.maxCacheSize=options.maxCacheSize||65536;
  this.each(function(){
    new $.suggest(this,options);
  });
  return this;
};
})(jQuery);


/*!
 * jQuery Cookie Plugin v1.4.0
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals.
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			// If we can't parse the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write

		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setTime(+t + days * 864e+5);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) === undefined) {
			return false;
		}

		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));


//用于 三个登录页的 字段：email Cookie 
//登录保存Cookie
function saveData(email){
	//expires : 天数
	email != '' ? $.cookie("email", email, {expires: 365, path: '/', domain : '.228.com.cn'}) : '邮箱地址或手机号';
};

//加载页面读取Cookie
function loadData(){
   if($.cookie("email")){//cookie存在
	   //设置email的值
	   $("form[class='cookieForm']").find('.loginemail').val($.cookie("email"));
	   //显示后面的叉叉样式
	   $("form[class='cookieForm']").find('#loginclose').show();
   }
};

//删除cookie
function delcookie(){
	$.removeCookie("email",{path: '/', domail: '.228.com.cn'});
	$("form[class='cookieForm']").find('.loginemail').attr("value","邮箱地址或手机号");
	$("form[class='cookieForm']").find('#loginclose').hide();
};

var onShowHtml = "<span class='$class$'>$data$</span>";
var onFocusHtml = "<span class='$class$'>$data$</span>";
var onErrorHtml = "<span class='$class$'>$data$</span>";
var onCorrectHtml = "<span class='$class$'>$data$</span>";
var onShowClass = "";
var onFocusClass = "";
var onErrorClass = "";
var onCorrectClass = "";

(function($) {
	$.formValidator = {
			
	//全局配置
	initConfig : function(controlOptions)
	{
		var settings = {};
		$.extend(true, settings, initConfig_setting, controlOptions || {});
		//如果是精简模式，发生错误的时候，第一个错误的控件就不获得焦点
		if(settings.mode == "SingleTip"){settings.errorFocus=false};
		//如果填写了表单和按钮，就注册验证事件
		if(settings.formID!=""){
		    $("#"+settings.formID).submit(function(){
		        if(settings.ajaxForm!=null){
		            $.formValidator.ajaxForm(settings.validatorGroup,settings.ajaxForm);
			        return false;
				}
		        else
				{
					if (settings.ajaxCountValid > 0) {
						settings.onAlert(settings.ajaxPrompt);
						return false;
					}
					return $.formValidator.pageIsValid(settings.validatorGroup);
                }
            });
		}
		$("body").data(settings.validatorGroup, settings);
		if(settings.theme==""){return}
		//读取主题对应的脚本
		var scriptSrcArray = fv_scriptSrc.split('/');
		var jsName = scriptSrcArray[scriptSrcArray.length-1];
    	var themedir = fv_scriptSrc.replace(jsName,'');
    	
		//读取主题对应的样式
		if($.browser.msie)
		{
			var css=document.createElement("link");
			css.rel="stylesheet";
			css.type="text/css";
			css.href=themedir+"themes/"+settings.theme+"/style/style.css";
			document.getElementsByTagName("head")[0].appendChild(css);
		}else{
			var style=document.createElement('style'); 
			style.setAttribute("type", "text/css"); 
			var styCss = "@import url('"+themedir+"themes/"+settings.theme+"/style/style.css');";
			if (style.styleSheet) {style.styleSheet.cssText=styCss} else {style.appendChild(document.createTextNode(styCss))} 
			document.getElementsByTagName("head")[0].appendChild(style); 
		}
	},
	
	//各种校验方式支持的控件类型
	sustainType : function(elem,validateType)
	{
		var srcTag = elem.tagName;
		var stype = elem.type;
		switch(validateType)
		{
			case "formValidator":
				return true;
			case "inputValidator":
				return (srcTag == "INPUT" || srcTag == "TEXTAREA" || srcTag == "SELECT");
			case "compareValidator":
				return ((srcTag == "INPUT" || srcTag == "TEXTAREA") ? (stype != "checkbox" && stype != "radio") : false);
			case "ajaxValidator":
				return (stype == "text" || stype == "textarea" || stype == "file" || stype == "password" || stype == "select-one");
			case "regexValidator":
				return ((srcTag == "INPUT" || srcTag == "TEXTAREA") ? (stype != "checkbox" && stype != "radio") : false);
			case "functionValidator":
			    return true;
			case "passwordValidator":
			    return stype == "password";
		}
	},
    
	//如果validator对象对应的element对象的validator属性追加要进行的校验。
	appendValid : function(id, setting )
	{
		//如果是各种校验不支持的类型，就不追加到。返回-1表示没有追加成功
		var elem = $("#"+id).get(0);   
		var validateType = setting.validateType;
		if(!$.formValidator.sustainType(elem,validateType)){return -1}
		//重新初始化
		if (validateType=="formValidator" || elem.settings == undefined ){elem.settings = new Array()}   
		var len = elem.settings.push( setting );
		elem.settings[len - 1].index = len - 1;
		return len - 1;
	},
	
	//设置显示信息
	setTipState : function(elem,showclass,showmsg)
	{
		var initConfig = $("body").data(elem.validatorGroup);

		if(initConfig.mode == "SingleTip")
		{
			//显示和保存提示信息
			$("#fv_content").html(showmsg);
			elem.Tooltip = showmsg;
			if(showclass!="onError"){tip.hide()}
		}
		else
		{
			var tip = $("#"+elem.settings[0].tipID);
			var html = showclass == "onShow" ? onShowHtml : (showclass == "onFocus" ? onFocusHtml : (showclass == "onCorrect" ? onCorrectHtml : onErrorHtml));
			if(html.length = 0)
			{
				tip.hide()
			}
			else
			{
				if(elem.validatorPasswordIndex > 0 && showclass =="onCorrect"){
					var setting = elem.settings[elem.validatorPasswordIndex];
					var level = $.formValidator.passwordValid(elem);
					showmsg = "";
					if(level==-1 && setting.onErrorContinueChar!=""){
						showmsg=setting.onErrorContinueChar
					}else if(level==-2 && setting.onErrorSameChar!=""){
						showmsg=setting.onErrorSameChar
					}else if(level==-3 && setting.onErrorCompareSame!=""){
						showmsg=setting.onErrorCompareSame
					}
					if(showmsg!="")
					{
						$.formValidator.setTipState(elem,'onError',showmsg);
						return
					}
					showmsg = passwordStrengthText[level<=0?0:level - 1];
				}
				html = html.replace(/\$class\$/g, showclass).replace(/\$data\$/g, showmsg);
				if(showclass!=""){
					tip.html(html).removeClass().addClass(showclass).show();
				}else{
					tip.html(html).show();
				}
			}
			var stype = elem.type;
			if(stype == "password" || stype == "text" || stype == "file")
			{
				jqobj = $(elem);
				if(onShowClass!="" && showclass == "onShow"){jqobj.removeClass().addClass(onShowClass)};
				if(onFocusClass!="" && showclass == "onFocus"){jqobj.removeClass().addClass(onFocusClass)};
				if(onCorrectClass!="" && showclass == "onCorrect"){jqobj.removeClass().addClass(onCorrectClass)};
				if(onErrorClass!="" && showclass == "onError"){jqobj.removeClass().addClass(onErrorClass)};
			}
		}
	},
		
	//把提示层重置成原始提示(如果有defaultPassed,应该设置为onCorrect)
	resetTipState : function(validatorGroup)
	{
		if(validatorGroup == undefined){validatorGroup = "1"};
		var initConfig = $("body").data(validatorGroup);
		$.each(initConfig.validObjects,function(){
			var setting = this.settings[0];
			var passed = setting.defaultPassed;
			$.formValidator.setTipState(this, passed ? "onCorrect" : "onShow", passed ? $.formValidator.getStatusText(this,setting.onCorrect) : setting.onShow );	
		});
	},
	
	//设置错误的显示信息
	setFailState : function(tipID,showmsg)
	{
		$.formValidator.setTipState($("#"+tipID).get(0), "onError", showmsg);
	},

	//根据单个对象,正确:正确提示,错误:错误提示
	showMessage : function(returnObj)
	{
	    var id = returnObj.id;
		var elem = $("#"+id).get(0);
		var isValid = returnObj.isValid;
		var setting = returnObj.setting;//正确:setting[0],错误:对应的setting[i]
		var showmsg = "",showclass = "";
		var intiConfig = $("body").data(elem.validatorGroup);
		if (!isValid)
		{		
			showclass = "onError";
			if(setting.validateType=="ajaxValidator")
			{
				if(setting.lastValid=="")
				{
				    showclass = "onLoad";
				    showmsg = setting.onWait;
				}
				else
				{
				    showmsg = $.formValidator.getStatusText(elem,setting.onError);
				}
			}
			else
			{
				showmsg = (returnObj.errormsg==""? $.formValidator.getStatusText(elem,setting.onError) : returnObj.errormsg);
				
			}
			if(intiConfig.mode == "AlertTip")		
			{
				if(elem.validValueOld!=$(elem).val()){intiConfig.onAlert(showmsg);}   
			}
			else
			{
				$.formValidator.setTipState(elem,showclass,showmsg);
			}
		}
		else
		{		
			//验证成功后,如果没有设置成功提示信息,则给出默认提示,否则给出自定义提示;允许为空,值为空的提示
			showmsg = $.formValidator.isEmpty(id) ? setting.onEmpty : $.formValidator.getStatusText(elem,setting.onCorrect);
			$.formValidator.setTipState(elem,"onCorrect",showmsg);
		}
		return showmsg;
	},

	showAjaxMessage : function(e)
	{
		var elem = $("#"+e.id).get(0);
		var setting = elem.settings[e.ajax];
		var validValueOld = elem.validValueOld;
		var validvalue = $(elem).val();
		e.setting = setting;
		//defaultPassed还未处理
		if(validValueOld!= validvalue || validValueOld == validvalue && elem.onceValided == undefined)
		{
			$.formValidator.ajaxValid(e);
		}
		else
		{
			if(setting.isValid!=undefined && !setting.isValid){
				elem.lastshowclass = "onError"; 
				elem.lastshowmsg = $.formValidator.getStatusText(elem,setting.onError);
			}
			$.formValidator.setTipState(elem,elem.lastshowclass,elem.lastshowmsg);
		}
	},

	//获取指定字符串的长度
    getLength : function(id)
    {
        var srcjo = $("#"+id);
		var elem = srcjo.get(0);
        var sType = elem.type;
        var len = 0;
        switch(sType)
		{
			case "text":
			case "hidden":
			case "password":
			case "textarea":
			case "file":
		        var val = srcjo.val();
				var setting = elem.settings[0];
				//如果有显示提示内容的，要忽略掉
				if(elem.isInputControl && elem.value == setting.onShowText){val=""}
				var initConfig = $("body").data(elem.validatorGroup);
				if (initConfig.wideWord)
				{
					for (var i = 0; i < val.length; i++) 
					{
						len = len + ((val.charCodeAt(i) >= 0x4e00 && val.charCodeAt(i) <= 0x9fa5) ? 2 : 1); 
					}
				}
				else{
					len = val.length;
				}
		        break;
			case "checkbox":
			case "radio": 
				len = $("input[type='"+sType+"'][name='"+srcjo.attr("name")+"']:checked").length;
				break;
		    case "select-one":
		        len = elem.options ? elem.options.selectedIndex : -1;
				break;
			case "select-multiple":
				len = $("select[name="+elem.name+"] option:selected").length;
				break;
	    }
		return len;
    },
    
	//结合empty这个属性，判断仅仅是否为空的校验情况。
    isEmpty : function(id)
    {
        return ($("#"+id).get(0).settings[0].empty && $.formValidator.getLength(id)==0);
    },
    
	//对外调用：判断单个表单元素是否验证通过，不带回调函数
    isOneValid : function(id)
    {
	    return $.formValidator.oneIsValid(id).isValid;
    },
    
	//验证单个是否验证通过,正确返回settings[0],错误返回对应的settings[i]
	oneIsValid : function (id)
	{
		var e = {};
		e.id = id;
		e.dom = $("#"+id).get(0);
		e.initConfig = $("body").data(e.dom.validatorGroup);
		e.ajax = -1;
		e.errormsg = "";       //自定义错误信息
	    e.settings = e.dom.settings;
	    var settingslen = e.settings.length;
		var validateType;
		//只有一个formValidator的时候不检验
		if (settingslen==1){e.settings[0].bind=false;}
		if(!e.settings[0].bind){return null;}
		$.formValidator.resetInputValue(true,e.initConfig,id);
		for ( var i = 0 ; i < settingslen ; i ++ )
		{   
			if(i==0){
				//如果为空，直接返回正确
				if($.formValidator.isEmpty(id)){
					e.isValid = true;
					e.setting = e.settings[0];
					break;
				}
				continue;
			}
			e.setting = e.settings[i];
			validateType = e.settings[i].validateType;
			//根据类型触发校验
			switch(validateType)
			{
				case "inputValidator":
					$.formValidator.inputValid(e);
					break;
				case "compareValidator":
					$.formValidator.compareValid(e);
					break;
				case "regexValidator":
					$.formValidator.regexValid(e);
					break;
				case "functionValidator":
					$.formValidator.functionValid(e);
					break;
				case "ajaxValidator":
					//如果是ajax校验，这里直接取上次的结果值
					e.ajax = i;
					break;
				case "passwordValidator":
					break;
			}
			if(!e.settings[i].isValid) {
				e.isValid = false;
				e.setting = e.settings[i];
				break;
			}else{
				e.isValid = true;
				e.setting = e.settings[0];
				if (e.settings[i].validateType == "ajaxValidator"){break};
			}
		}
		$.formValidator.resetInputValue(false,e.initConfig,id);
		return e;
	},

	//验证所有需要验证的对象，并返回是否验证成功（如果曾经触发过ajaxValidator，提交的时候就不触发校验，直接读取结果）
	pageIsValid : function (validatorGroup)
	{
	    if(validatorGroup == undefined){validatorGroup = "1"};
		var isValid = true,returnObj,firstErrorMessage="",errorMessage;
		var error_tip = "^",thefirstid,name,name_list="^"; 	
		var errorlist = new Array();
		//设置提交状态、ajax是否出错、错误列表
		var initConfig = $("body").data(validatorGroup);
		initConfig.status = "sumbiting";
		initConfig.ajaxCountSubmit = 0;
		//遍历所有要校验的控件,如果存在ajaxValidator就先直接触发
		$.each(initConfig.validObjects,function()
		{
			if($(this).length==0){return true};
			if (this.settings[0].bind && this.validatorAjaxIndex!=undefined && this.onceValided == undefined) {
				returnObj = $.formValidator.oneIsValid(this.id);
				if (returnObj.ajax == this.validatorAjaxIndex) {
					initConfig.status = "sumbitingWithAjax";
					$.formValidator.ajaxValid(returnObj);
				}
			}
		});
		//如果有提交的时候有触发ajaxValidator，所有的处理都放在ajax里处理
		if(initConfig.ajaxCountSubmit > 0){return false}
		//遍历所有要校验的控件
		$.each(initConfig.validObjects,function()
		{
			//只校验绑定的控件
			if($(this).length==0){return true};
			if(this.settings[0].bind){
				name = this.name;
				//相同name只校验一次
				if (name_list.indexOf("^"+name+"^") == -1) {
					onceValided = this.onceValided == undefined ? false : this.onceValided;
					if(name){name_list = name_list + name + "^"};
					returnObj = $.formValidator.oneIsValid(this.id);
					if (returnObj) {
						//校验失败,获取第一个发生错误的信息和ID
						if (!returnObj.isValid) {
							//记录不含ajaxValidator校验函数的校验结果
							isValid = false;
							errorMessage = returnObj.errormsg == "" ? returnObj.setting.onError : returnObj.errormsg;
							errorlist[errorlist.length] = errorMessage;
							if (thefirstid == null) {thefirstid = returnObj.id};
							if(firstErrorMessage==""){firstErrorMessage=errorMessage};
						}
						//为了解决使用同个TIP提示问题:后面的成功或失败都不覆盖前面的失败
						if (initConfig.mode != "AlertTip") {
							var tipID = this.settings[0].tipID;
							if (error_tip.indexOf("^" + tipID + "^") == -1) {
								if (!returnObj.isValid) {error_tip = error_tip + tipID + "^"};
								$.formValidator.showMessage(returnObj);
							}
						}
						//如果是逐个校验的，且当前校验失败，就直接返回
						if(initConfig.oneByOneVerify && !returnObj.isValid){return false}
					}
				}
			}
		});
		
		//成功或失败进行回调函数的处理，以及成功后的灰掉提交按钮的功能
		if(isValid)
		{
            if(!initConfig.onSuccess()){$("input[type='submit'],input[type='button'],input[type='reset']").removeAttr("disabled");return false};
//			if(initConfig.submitOnce){$(":submit,:button,:reset").attr("disabled",true);}
			//if(initConfig.submitOnce){$("input[type='submit'],input[type='button'],input[type='reset']").attr("disabled",true);}
		}
		else
		{
			initConfig.onError(firstErrorMessage, $("#" + thefirstid).get(0), errorlist);
			if (thefirstid && initConfig.errorFocus) {$("#" + thefirstid).focus()};
		}
		initConfig.status="init";
		if(isValid && initConfig.debug){alert("现在正处于调试模式(debug:true)，不能提交");}
		return !initConfig.debug && isValid;
	},
	
	//整个表单
	ajaxForm : function(validatorGroup,option,formid)
	{
		if(validatorGroup == undefined){validatorGroup = "1"};
		var setting = {};
		$.extend(true, setting, ajaxForm_setting, option || {});
		var initConfig = $("body").data(validatorGroup);	
		if(formid==undefined){
			formid = initConfig.formID;
			if(formid==""){alert('表单ID未传入');return false;};
		};
		if(!$.formValidator.pageIsValid(validatorGroup)){return false};
		var ls_url = setting.url;
		var ls_data = setting.data;
		var parm = $.formValidator.serialize('#'+formid);
		if(setting.type=="POST"){
			ls_data = ls_data + (ls_data != "" ? ("&" + parm) : parm)
		}else{
			ls_url = ls_url + (ls_url.indexOf("?") > -1 ? ("&" + parm) : ("?" + parm))
		}
        $.ajax(
		{	
			type : setting.type, 
			url : ls_url, 
			cache : setting.cache,
			data : ls_data, 
			async : setting.async, 
			timeout : setting.timeout, 
			dataType : setting.dataType, 
			beforeSend : function(jqXHR, configs){//再服务器没有返回数据之前，先回调提交按钮
				if(setting.buttons && setting.buttons.length > 0){/*setting.buttons.attr({"disabled":true})*/};
				return setting.beforeSend(jqXHR, configs);
			},
			success : function(data, textStatus, jqXHR){setting.success(data, textStatus, jqXHR);},
			complete : function(jqXHR, textStatus){
				if(setting.buttons && setting.buttons.length > 0){setting.buttons.attr({"disabled":false})};
				setting.complete(jqXHR, textStatus);
			},
			error : function(jqXHR, textStatus, errorThrown){setting.error(jqXHR, textStatus, errorThrown);}
		});
	},
	
	//把编码decodeURIComponent反转之后，再escape
	serialize : function(objs,initConfig)
	{
		if(initConfig!=undefined){$.formValidator.resetInputValue(true,initConfig)};
		var parmString = $(objs).serialize();
		if(initConfig!=undefined){$.formValidator.resetInputValue(false,initConfig)};
		var parmArray = parmString.split("&");
		var parmStringNew="";
		$.each(parmArray,function(index,data){
			var li_pos = data.indexOf("=");	
			if(li_pos >0){
				var name = data.substring(0,li_pos);
				var value = escape(decodeURIComponent(data.substr(li_pos+1)));
				var parm = name+"="+value;
				parmStringNew = parmStringNew=="" ? parm : parmStringNew + '&' + parm;
			}
		});
		return parmStringNew;
	},

	//ajax校验
	ajaxValid : function(e)
	{
		var id = e.id;
	    var srcjo = $("#"+id);
		var elem = srcjo.get(0);
		var initConfig = e.initConfig;
		var settings = elem.settings;
		var setting = settings[e.ajax];
		var ls_url = setting.url;
		var ls_data = setting.data;
		//获取要传递的参数
		var validatorGroup = elem.validatorGroup;
		var initConfig = $("body").data(validatorGroup);
		var parm = $.formValidator.serialize(initConfig.ajaxObjects);
		//添加触发的控件名、随机数、传递的参数
		parm = "clientid=" + id + "&" +(setting.randNumberName ? setting.randNumberName+"="+((new Date().getTime())+Math.round(Math.random() * 10000)) : "") + (parm.length > 0 ? "&" + parm : "");
		if(setting.type=="POST"){
			ls_data = ls_data + (ls_data != "" ? ("&" + parm) : parm)
		}else{
			ls_url = ls_url + (ls_url.indexOf("?") > -1 ? ("&" + parm) : ("?" + parm))
		}
		//发送ajax请求
		$.ajax(
		{	
			type : setting.type, 
			url : ls_url, 
			cache : setting.cache,
			data : ls_data, 
			async : setting.async, 
			timeout : setting.timeout, 
			dataType : setting.dataType, 
			success : function(data, textStatus, jqXHR){
				var lb_ret,ls_status,ls_msg,lb_isValid = false;
				$.formValidator.dealAjaxRequestCount(validatorGroup,-1);
				e.dom.onceValided = true;
				//根据业务判断设置显示信息
				lb_ret = setting.success(data, textStatus, jqXHR);
				if((typeof lb_ret)=="string")
				{
					ls_status = "onError";
					ls_msg = lb_ret;
				}
				else if(lb_ret){
					lb_isValid = true;
					ls_status = "onCorrect";
					ls_msg = settings[0].onCorrect;
				}else{
					ls_status = "onError";
					ls_msg = $.formValidator.getStatusText(elem,setting.onError);
				}
				setting.isValid = lb_isValid;
				$.formValidator.setTipState(elem,ls_status,ls_msg);
				//提交的时候触发了ajax校验，等ajax校验完成，无条件重新校验
				if(e.initConfig.status=="sumbitingWithAjax" && e.initConfig.ajaxCountSubmit == 0)
				{
					if (initConfig.formID != "") {
						$('#' + initConfig.formID).trigger('submit');
					}
				}
			},
			complete : function(jqXHR, textStatus){
				if(setting.buttons && setting.buttons.length > 0){setting.buttons.attr({"disabled":false})};
				setting.complete(jqXHR, textStatus);
			}, 
			beforeSend : function(jqXHR, configs){
				//本控件如果正在校验，就中断上次
				if (this.lastXMLHttpRequest) {this.lastXMLHttpRequest.abort()};
				this.lastXMLHttpRequest = jqXHR;
				//再服务器没有返回数据之前，先回调提交按钮
				if(setting.buttons && setting.buttons.length > 0){/*setting.buttons.attr({"disabled":true})*/};
				var lb_ret = setting.beforeSend(jqXHR,configs);
				var isValid = false;
				//无论是否成功都当做失败处理
				setting.isValid = false;
				if((typeof lb_ret)=="boolean" && lb_ret)
				{
					isValid = true;
					$.formValidator.setTipState(elem,"onLoad",settings[e.ajax].onWait);
				}else
				{
					isValid = false;
					$.formValidator.setTipState(elem,"onError",lb_ret);
				}
				setting.lastValid = "-1";
				if(isValid){$.formValidator.dealAjaxRequestCount(validatorGroup,1);}
				return isValid;
			}, 
			error : function(jqXHR, textStatus, errorThrown){
				$.formValidator.dealAjaxRequestCount(validatorGroup,-1);
			    $.formValidator.setTipState(elem,"onError",$.formValidator.getStatusText(elem,setting.onError));
			    setting.isValid = false;
				e.dom.onceValided = true;
				setting.error(jqXHR, textStatus, errorThrown);
			},
			processData : setting.processData 
		});
	},
	
	//处理ajax的请求个数
	dealAjaxRequestCount : function(validatorGroup,val)
	{
		var initConfig = $("body").data(validatorGroup);
		initConfig.ajaxCountValid = initConfig.ajaxCountValid + val;
		if (initConfig.status == "sumbitingWithAjax") {
			initConfig.ajaxCountSubmit = initConfig.ajaxCountSubmit + val;
		}
	},

	//对正则表达式进行校验（目前只针对input和textarea）
	regexValid : function(returnObj)
	{
		var id = returnObj.id;
		var setting = returnObj.setting;
		var srcTag = $("#"+id).get(0).tagName;
		var elem = $("#"+id).get(0);
		var isValid;
		//如果有输入正则表达式，就进行表达式校验
		if(elem.settings[0].empty && elem.value==""){
			setting.isValid = true;
		}
		else 
		{
			var regexArray = setting.regExp;
			setting.isValid = false;
			if((typeof regexArray)=="string") regexArray = [regexArray];
			$.each(regexArray, function() {
			    var r = this;
			    if(setting.dataType=="enum"){r = eval("regexEnum."+r);}			
			    if(r==undefined || r=="") 
			    {
			        return false;
			    }
			    isValid = (new RegExp(r, setting.param)).test($(elem).val());
			    
			    if(setting.compareType=="||" && isValid)
			    {
			        setting.isValid = true;
			        return false;
			    }
			    if(setting.compareType=="&&" && !isValid) 
			    {
			        return false
			    }
            });
            if(!setting.isValid) setting.isValid = isValid;
		}
	},
	
	//函数校验。返回true/false表示校验是否成功;返回字符串表示错误信息，校验失败;如果没有返回值表示处理函数，校验成功
	functionValid : function(returnObj)
	{
		var id = returnObj.id;
		var setting = returnObj.setting;
	    var srcjo = $("#"+id);
		var lb_ret = setting.fun(srcjo.val(),srcjo.get(0));
		if(lb_ret != undefined) 
		{
			if((typeof lb_ret) === "string"){
				setting.isValid = false;
				returnObj.errormsg = lb_ret;
			}else{
				setting.isValid = lb_ret;
			}
		}else{
		    setting.isValid = true;
		}
	},
	
	//对input和select类型控件进行校验
	inputValid : function(returnObj)
	{
		var id = returnObj.id;
		var setting = returnObj.setting;
		var srcjo = $("#"+id);
		var elem = srcjo.get(0);
		var val = srcjo.val();
		var sType = elem.type;
		var len = $.formValidator.getLength(id);
		var empty = setting.empty,emptyError = false;
		switch(sType)
		{
			case "text":
			case "hidden":
			case "password":
			case "textarea":
			case "file":
				if (setting.type == "size") {
					empty = setting.empty;
					if(!empty.leftEmpty){
						emptyError = (val.replace(/^[ \s]+/, '').length != val.length);
					}
					if(!emptyError && !empty.rightEmpty){
						emptyError = (val.replace(/[ \s]+$/, '').length != val.length);
					}
					if(emptyError && empty.emptyError){returnObj.errormsg= empty.emptyError}
				}
			case "checkbox":
			case "select-one":
			case "select-multiple":
			case "radio":
				var lb_go_on = false;
				if(sType=="select-one" || sType=="select-multiple"){setting.type = "size";}
				var type = setting.type;
				if (type == "size") {		//获得输入的字符长度，并进行校验
					if(!emptyError){lb_go_on = true}
					if(lb_go_on){val = len}
				}
				else if (type =="date" || type =="datetime")
				{
					var isok = false;
					if(type=="date"){lb_go_on = isDate(val)};
					if(type=="datetime"){lb_go_on = isDate(val)};
					if(lb_go_on){val = new Date(val);setting.min=new Date(setting.min);setting.max=new Date(setting.max);};
				}else{
					stype = (typeof setting.min);
					if(stype =="number")
					{
						val = (new Number(val)).valueOf();
						if(!isNaN(val)){lb_go_on = true;}
					}
					if(stype =="string"){lb_go_on = true;}
				}
				setting.isValid = false;
				if(lb_go_on)
				{
					if(val < setting.min || val > setting.max){
						if(val < setting.min && setting.onErrorMin){
							returnObj.errormsg= setting.onErrorMin;
						}
						if(val > setting.min && setting.onErrorMax){
							returnObj.errormsg= setting.onErrorMax;
						}
					}
					else{
						setting.isValid = true;
					}
				}
				break;
		}
	},
	
	//对两个控件进行比较校验
	compareValid : function(returnObj)
	{
		var id = returnObj.id;
		var setting = returnObj.setting;
		var srcjo = $("#"+id);
	    var desjo = $("#"+setting.desID );
		var ls_dataType = setting.dataType;
		
		curvalue = srcjo.val();
		ls_data = desjo.val();
		if(ls_dataType=="number")
        {
            if(!isNaN(curvalue) && !isNaN(ls_data)){
				curvalue = parseFloat(curvalue);
                ls_data = parseFloat(ls_data);
			}
			else{
			    return;
			}
        }
		if(ls_dataType=="date" || ls_dataType=="datetime")
		{
			var isok = false;
			if(ls_dataType=="date"){isok = (isDate(curvalue) && isDate(ls_data))};
			if(ls_dataType=="datetime"){isok = (isDateTime(curvalue) && isDateTime(ls_data))};
			if(isok){
				curvalue = new Date(curvalue);
				ls_data = new Date(ls_data)
			}
			else{
				return;
			}
		}
		
	    switch(setting.operateor)
	    {
	        case "=":
	            setting.isValid = (curvalue == ls_data);
	            break;
	        case "!=":
	            setting.isValid = (curvalue != ls_data);
	            break;
	        case ">":
	            setting.isValid = (curvalue > ls_data);
	            break;
	        case ">=":
	            setting.isValid = (curvalue >= ls_data);
	            break;
	        case "<": 
	            setting.isValid = (curvalue < ls_data);
	            break;
	        case "<=":
	            setting.isValid = (curvalue <= ls_data);
	            break;
			default :
				setting.isValid = false;
				break; 
	    }
	},
	
	//获取密码校验等级
	passwordValid : function(elem)
	{
	    var setting = elem.settings[elem.validatorPasswordIndex];
	    var pwd = elem.value;
	    //是否为连续字符
	    function isContinuousChar(str){
		    var str = str.toLowerCase();
		    var flag = 0;
		    for(var i=0;i<str.length;i++){
			    if(str.charCodeAt(i) != flag+1 && flag!=0)
				    return false;
			    else
				    flag = str.charCodeAt(i);
		    }
		    return true;
	    }
	    //是否字符都相同
	    function isSameChar(str){
		    var str = str.toLowerCase();
		    var flag = 0;
		    for(var i=0;i<str.length;i++){
			    if(str.charCodeAt(i) != flag && flag!=0)
				    return false;
			    else
				    flag = str.charCodeAt(i);
		    }
		    return true;
	    }
	    //获取标记所在的位置，用1表示
	    function getFlag(val,sum,index)
	    {
		    if(sum==undefined){sum=[0,0,0,0]}
		    if(index==undefined){index=-1};
		    index ++;
		    sum[index] = val % 2;
		    val = Math.floor(val / 2);
		    if(val==1 || val==0){sum[index+1] = val;return sum}
		    sum = getFlag(val,sum,index);
		    return sum;
	    }
    	
	    //判断密码各个位置的组成情况
        if(pwd==""){return 0};
	    if(setting.onErrorContinueChar!="" && isContinuousChar(pwd)){return -1};
	    if(setting.onErrorSameChar!="" && isSameChar(pwd)){return -2};
		if(setting.compareID!="" && $("#"+setting.compareID).val()==pwd){return -3};
	    var sum1 = [0, 0, 0, 0];
	    var specicalChars = "!,@,#,$,%,\^,&,*,?,_,~";
	    var len = pwd.length;
	    for (var i=0; i< len; i++) {
		    var c = pwd.charCodeAt(i);
		    if (c >=48 && c <=57){  //数字
			    sum1[0] += 1;
		    }else if (c >=97 && c <=122){ //小写字母
			    sum1[1] += 1;
		    }else if (c >=65 && c <=90){ //大写字母
			    sum1[2] += 1;
		    }else if(specicalChars.indexOf(pwd.substr(i,1))>=0){ //特殊字符
			    sum1[3] += 1; 
		    }
	    }
	    
	    //遍历json变量获取字符串
	    var returnLevel = 0;
	    var hasFind = true;
	    $.each(passwordStrengthRule,function(j,n){
		    var level = n.level;
		    var rules = n.rule;
		    $.each(rules,function(i,rule){
			    var index = 0;
			    //依次编译所有的、有配置(该位置==1)的节点
			    hasFind = true;
			    $.each(getFlag(rule.flag),function(k,value){
				    if(value==1){
					    val = rule.value[index++];
					    var val = val == 0 ? len : (val > len ? len : val);
					    if(sum1[k] < val){hasFind = false;return false;}
				    }
			    });
			    if(hasFind){returnLevel = level;return false;}
		    });
		    if(hasFind){returnLevel = level;}
	    });
	    return returnLevel;
	},
	
	//定位漂浮层
	localTooltip : function(e)
	{
		e = e || window.event;
		var mouseX = e.pageX || (e.clientX ? e.clientX + document.body.scrollLeft : 0);
		var mouseY = e.pageY || (e.clientY ? e.clientY + document.body.scrollTop : 0);
		$("#fvtt").css({"top":(mouseY+2)+"px","left":(mouseX-40)+"px"});
	},
	
	reloadAutoTip : function(validatorGroup)
	{
		if(validatorGroup == undefined) validatorGroup = "1";
		var initConfig = $("body").data(validatorGroup);
		$.each(initConfig.validObjects,function()
		{
			if(initConfig.mode == "AutoTip")
			{
				//获取层的ID、相对定位控件的ID和坐标
				var setting = this.settings[0];
				var relativeID = "#"+setting.relativeID;
				var offset = $(relativeID ).offset();
				var y = offset.top;
				var x = $(relativeID ).width() + offset.left;
				$("#"+setting.tipID).parent().show().css({left: x+"px", top: y+"px"});			
			}
		});
	},
	
	getStatusText : function(elem,obj)
	{
		return ($.isFunction(obj) ? obj($(elem).val()) : obj);
	},
	
	resetInputValue : function(real,initConfig,id)
	{
		var showTextObjects;
		if(id){
			showTextObjects = $("#"+id);
		}else{
			showTextObjects = $(initConfig.showTextObjects);
		}
		showTextObjects.each(function(index,elem){
			if(elem.isInputControl){
				var showText = elem.settings[0].onShowText;
				if(real && showText==elem.value){elem.value = ""};
				if(!real && showText!="" && elem.value == ""){elem.value = showText};
			}
		});
	}
};

//每个校验控件必须初始化的
$.fn.formValidator = function(cs) 
{
	cs = cs || {};
	var setting = {};

	//获取该校验组的全局配置信息
	if(cs.validatorGroup == undefined){cs.validatorGroup = "1"};
	
	//先合并整个配置(深度拷贝)
	$.extend(true,setting, formValidator_setting);
	
	var initConfig = $("body").data(cs.validatorGroup);
	
	//校验索引号，和总记录数
	initConfig.validCount += 1;
	
	//如果为精简模式，tipCss要重新设置初始值
	if(initConfig.mode == "SingleTip"){setting.tipCss = {left:10,top:1,width:22,height:22,display:"none"}};
	
	//弹出消息提示模式，自动修复错误
	if(initConfig.mode == "AlertTip"){setting.autoModify=true};
	
	//先合并整个配置(深度拷贝)
	$.extend(true,setting, cs || {});
	return this.each(function(e)
	{
		//记录该控件的校验顺序号和校验组号
		this.validatorIndex = initConfig.validCount - 1;
		this.validatorGroup = cs.validatorGroup;
		var jqobj = $(this);
		//自动形成TIP
		var setting_temp = {};
		$.extend(true,setting_temp, setting);
		//判断是否有ID
		var id = jqobj.attr('id');
		if(!id)
		{ 
			id = Math.ceil(Math.random()*50000000); 
			jqobj.attr('id', id);
		}
		var tip = setting_temp.tipID ? setting_temp.tipID : id+"Tip";
        
		if(initConfig.mode == "AutoTip" || initConfig.mode == "FixTip")
		{			
			var tipDiv = $("#"+tip);
			//获取层的ID、相对定位控件的ID和坐标
			if(initConfig.mode == "AutoTip" && tipDiv.length==0)
			{		
				var relativeID = setting_temp.relativeID ? setting_temp.relativeID : id;
				var offset = $("#"+relativeID ).offset();
				setting_temp.tipCss.top = offset.top + setting_temp.tipCss.top;
				setting_temp.tipCss.left = $("#"+relativeID ).width() + offset.left + setting_temp.tipCss.left;
				tipDiv = $("<div style='position:absolute;' id='"+tip+"'></div>").appendTo($("body"));
				tipDiv.css(setting_temp.tipCss);
				setting.relativeID = relativeID ;
			}
			tipDiv.css("margin","0px").css("padding","0px").css("background","transparent");
		}else if(initConfig.mode == "SingleTip"){
			jqobj.showTooltips();
		}
		
		//每个控件都要保存这个配置信息、为了取数方便，冗余一份控件总体配置到控件上
		setting.tipID = tip;
		setting.pwdTipID = setting_temp.pwdTipID ? setting_temp.pwdTipID : setting.tipID;
		setting.fixTipID = setting_temp.fixTipID ? setting_temp.fixTipID : id+"FixTip";
		$.formValidator.appendValid(id,setting);

		//保存控件ID
		var validIndex = $.inArray(jqobj,initConfig.validObjects);
		if(validIndex == -1)
		{
			if (setting_temp.ajax) {initConfig.ajaxObjects.push(this)}
			initConfig.validObjects.push(this);
		}else{
			initConfig.validObjects[validIndex] = this;
		}

		//初始化显示信息
		if(initConfig.mode != "AlertTip"){
			$.formValidator.setTipState(this,"onShow",setting.onShow);
		}

		var srcTag = this.tagName.toLowerCase();
		var stype = this.type;
		var defaultval = setting.defaultValue;
		var isInputControl = stype == "password" || stype == "text" || stype == "textarea";
		this.isInputControl = isInputControl;
		//处理默认值
		if(defaultval){
			jqobj.val(defaultval);
		}
		//固定提示内容
		var fixTip = $("#"+setting.fixTipID);
		var showFixText = setting.onShowFixText;
		if(fixTip.length==1 && onMouseOutFixTextHtml!="" && onMouseOnFixTextHtml!="" && showFixText != "")
		{
			jqobj.hover(
				function () {
					fixTip.html(onMouseOnFixTextHtml.replace(/\$data\$/g, showFixText));
				},
				function () {
					fixTip.html(onMouseOutFixTextHtml.replace(/\$data\$/g, showFixText));
				}
			);
			fixTip.css("padding","0px 0px 0px 0px").css("margin","0px 0px 0px 0px").html(onMouseOutFixTextHtml.replace(/\$data\$/g, setting.onShowFixText)); 
		}
		//获取输入框内的提示内容
        var showText = setting.onShowText;
		if(srcTag == "input" || srcTag=="textarea")
		{
			if (isInputControl) {
				if(showText !="" && jqobj.val() == ""){
					showObjs = initConfig.showTextObjects;
					initConfig.showTextObjects = showObjs + (showObjs != "" ? ",#" : "#") + id;
					jqobj.val(showText);
					jqobj.css("color",setting.onShowTextColor.mouseOutColor);
				}
			}
			//注册获得焦点的事件。改变提示对象的文字和样式，保存原值
			jqobj.focus(function()
			{	
				if (isInputControl) {
					var val = jqobj.val();
					this.validValueOld = val;
					if(showText==val){
						this.value = "";
						jqobj.css("color",setting.onShowTextColor.mouseOnColor);
					}
				};
				if(initConfig.mode != "AlertTip"){
					//保存原来的状态
					var tipjq = $("#"+tip);
					this.lastshowclass = tipjq.attr("class");
					this.lastshowmsg = tipjq.text();
					$.formValidator.setTipState(this,"onFocus",setting.onFocus);
				};
				if(this.validatorPasswordIndex > 0){$("#"+setting.pwdTipID).show();jqobj.trigger('keyup');}
			});
			//按键时候触发校验
		    jqobj.bind("keyup",function(){
		        if(this.validatorPasswordIndex > 0)
		        {
					try{
						var returnObj = $.formValidator.oneIsValid(id);
						var level = $.formValidator.passwordValid(this);
						if(level < 0){level=0};
						if(!returnObj.isValid){level = 0};
						$("#"+setting.pwdTipID).show();
						$("#"+setting.pwdTipID).html(passwordStrengthStatusHtml[level]);
					}catch(e)
					{
						alert("密码强度校验失败,错误原因:变量passwordStrengthStatusHtml语法错误或者为设置)");
					}
	            }
		    });
			//注册失去焦点的事件。进行校验，改变提示对象的文字和样式；出错就提示处理
			jqobj.bind(setting.triggerEvent, function(){
				var settings = this.settings;
				//根据配置截掉左右的空格
				if(settings[0].leftTrim){this.value = this.value.replace(/^\s*/g, "")}
				if(settings[0].rightTrim){this.value = this.value.replace(/\s*$/g, "")}
				//恢复默认值
				if(isInputControl){
					if(this.value == "" && showText != ""){this.value = showText}
					if(this.value == showText){jqobj.css("color",setting.onShowTextColor.mouseOutColor)}
				}
				//进行有效性校验
				var returnObj = $.formValidator.oneIsValid(id);
				if(returnObj==null){return}
				if(returnObj.ajax >= 0) 
				{
					$.formValidator.showAjaxMessage(returnObj);
				}
				else
				{
					var showmsg = $.formValidator.showMessage(returnObj);
					if(!returnObj.isValid)
					{
						//自动修正错误
						var auto = setting.autoModify && isInputControl;
						if(auto)
						{
							$(this).val(this.validValueOld);
							if(initConfig.mode != "AlertTip"){$.formValidator.setTipState(this,"onShow",$.formValidator.getStatusText(this,setting.onCorrect))};
						}
						else
						{
							if(initConfig.forceValid || setting.forceValid){
								intiConfig.onAlert(showmsg);this.focus();
							}
						}
					}
				}
			});
		} 
		else if (srcTag == "select")
		{
			jqobj.bind({
				//获得焦点
				focus: function(){	
					if (initConfig.mode != "AlertTip") {
						$.formValidator.setTipState(this, "onFocus", setting.onFocus)
					};
				},
				//失去焦点
				blur: function(){
					if(this.validValueOld==undefined || this.validValueOld==jqobj.val()){$(this).trigger("change")}
				},
				//选择项目后触发
				change: function(){
					var returnObj = $.formValidator.oneIsValid(id);	
					if(returnObj==null){return;}
					if ( returnObj.ajax >= 0){
						$.formValidator.showAjaxMessage(returnObj);
					}else{
						$.formValidator.showMessage(returnObj); 
					}
				}
			});
		}
	});
}; 

$.fn.inputValidator = function(controlOptions)
{
	var settings = {};
	$.extend(true, settings, inputValidator_setting, controlOptions || {});
	return this.each(function(){
		$.formValidator.appendValid(this.id,settings);
	});
};

$.fn.compareValidator = function(controlOptions)
{
	var settings = {};
	$.extend(true, settings, compareValidator_setting, controlOptions || {});
	return this.each(function(){
		$.formValidator.appendValid(this.id,settings);
	});
};

$.fn.regexValidator = function(controlOptions)
{
	var settings = {};
	$.extend(true, settings, regexValidator_setting, controlOptions || {});
	return this.each(function(){
		$.formValidator.appendValid(this.id,settings);
	});
};

$.fn.functionValidator = function(controlOptions)
{
	var settings = {};
	$.extend(true, settings, functionValidator_setting, controlOptions || {});
	return this.each(function(){
		$.formValidator.appendValid(this.id,settings);
	});
};

$.fn.ajaxValidator = function(controlOptions)
{
	var settings = {};
	$.extend(true, settings, ajaxValidator_setting, controlOptions || {});
	return this.each(function()
	{
		var initConfig = $("body").data(this.validatorGroup);
		if($.inArray(this,initConfig.ajaxObjects) == -1)
		{
			initConfig.ajaxObjects.push(this);
		}
		this.validatorAjaxIndex = $.formValidator.appendValid(this.id,settings);
	});
};

$.fn.passwordValidator = function(controlOptions)
{
	//默认配置
	var settings = {};
	$.extend(true, settings, passwordValidator_setting, controlOptions || {});
	return this.each(function()
	{
	    this.validatorPasswordIndex = $.formValidator.appendValid(this.id,settings);
	});
};

//指定控件显示通过或不通过样式
$.fn.defaultPassed = function(onShow)
{
	return this.each(function()
	{
		var settings = this.settings;
		settings[0].defaultPassed = true;
		this.onceValided = true;
		for ( var i = 1 ; i < settings.length ; i ++ )
		{   
			settings[i].isValid = true;
			if(!($("body").data(settings[0].validatorGroup).mode == "AlertTip")){
				this.lastshowclass = onShow ? "onShow" : "onCorrect";
				this.lastshowmsg = onShow ? settings[0].onShow : settings[0].onCorrect;
				$.formValidator.setTipState(this,this.lastshowclass, this.lastshowmsg);
			}
		}
	});
};

//指定控件不参加校验
$.fn.unFormValidator = function(unbind)
{
	return this.each(function()
	{
	    if(this.settings)
	    {
		    this.settings[0].bind = !unbind;
		    if(unbind){
			    $("#"+this.settings[0].tipID).hide();
		    }else{
			    $("#"+this.settings[0].tipID).show();
		    }
		}
	});
};

//显示漂浮显示层
$.fn.showTooltips = function()
{
	if($("body [id=fvtt]").length==0){
		fvtt = $("<div id='fvtt' style='position:absolute;z-index:56002'></div>");
		$("body").append(fvtt);
		fvtt.before("<iframe index=0 src='about:blank' class='fv_iframe' scrolling='no' frameborder='0'></iframe>");
		
	}
	return this.each(function()
	{
		jqobj = $(this);
		s = $("<span class='top' id=fv_content style='display:block'></span>");
		b = $("<b class='bottom' style='display:block' />");
		this.tooltip = $("<span class='fv_tooltip' style='display:block'></span>").append(s).append(b).css({"filter":"alpha(opacity:95)","KHTMLOpacity":"0.95","MozOpacity":"0.95","opacity":"0.95"});
		//注册事件
		jqobj.bind({
			mouseover : function(e){
				$("#fvtt").empty().append(this.tooltip).show();
				$("#fv_content").html(this.Tooltip);
				$.formValidator.localTooltip(e);
			},
			mouseout : function(){
				$("#fvtt").hide();
			},
			mousemove: function(e){
				$.formValidator.localTooltip(e);
			}
		});
	});
}
})(jQuery);

var initConfig_setting = 
{
	theme:"Default",
	validatorGroup : "1",						//分组号
	formID:"",					//表单ID
	submitOnce:false,							//页面是否提交一次，不会停留
	ajaxForm : null,       //如果不为null，表示整个表单ajax提交
	mode : "FixTip",			//显示模式
	errorFocus:true,			//第一个错误的控件获得焦点
	wideWord:true,				//一个汉字当做2个长
	forceValid:false,							//控件输入正确之后，才允许失去焦
	debug:false,								//调试模式点
	inIframe:false,
	onSuccess: function() {return true},		//提交成功后的回调函数
	onError: $.noop,						//提交失败的回调函数度
	onAlert: function() {alert(arguments[0])},
	status:"",					//提交的状态：submited、sumbiting、sumbitingWithAjax
	ajaxPrompt : "当前有数据正在进行服务器端校验，请稍候",	//控件失去焦点后，触发ajax校验，没有返回结果前的错误提示
	validCount:0,			//含ajaxValidator的控件个数
	ajaxCountSubmit:0,		//提交的时候触发的ajax验证个数
	ajaxCountValid:0,		//失去焦点时候触发的ajax验证个数
	validObjects:[],							//参加校验的控件集合
	ajaxObjects:[],							//传到服务器的控件列表
	showTextObjects:"",
	validateType : "initConfig",
	offsetChrome : {left:42,top:0},
	oneByOneVerify : false
};

var formValidator_setting = 
{
	validatorGroup : "1",
	onShowText : "",
	onShowTextColor:{mouseOnColor:"#000000",mouseOutColor:"#999999"},
	onShowFixText:"",
	onShow :"请输入内容",
	onFocus: "请输入内容",
	onCorrect: "输入正确",
	onEmpty: "输入内容为空",
	empty :false,
	autoModify : false,
	defaultValue : null,
	bind : true,
	ajax : false,
	validateType : "formValidator",
	tipCss : 
	{
		left:10,
		top:-4,
		height:20,
		width:280
	},
	triggerEvent:"blur",
	forceValid : false,
	tipID : null,
	pwdTipID : null,
	fixTipID : null,
	relativeID : null,
	index : 0,
	leftTrim : false,
	rightTrim : false
};

var inputValidator_setting = 
{
	isValid : false,
	type : "size",
	min : 0,
	max : 99999,
	onError:"输入错误",
	validateType:"inputValidator",
	empty:{leftEmpty:true,rightEmpty:true,leftEmptyError:null,rightEmptyError:null}
};

var compareValidator_setting = 
{
	isValid : false,
	desID : "",
	operateor :"=",
	onError:"输入错误",
	validateType:"compareValidator"
};

var regexValidator_setting = 
{
	isValid : false,
	regExp : "",
	param : "i",
	dataType : "string",
	compareType : "||",
	onError:"输入的格式不正确",
	validateType:"regexValidator"
};

var ajaxForm_setting = 
{
	type : "GET",
	url : window.location.href,
	dataType : "html",
	timeout : 100000,
	data : null,
	type : "GET",
	async : true,
	cache : false,
	buttons : null,
	beforeSend : function(){return true;},
	success : function(){return true;},
	complete : $.noop,
	processData : true,
	error : $.noop
};

var ajaxValidator_setting = 
{
	isValid : false,
	lastValid : "",
	oneceValid : false,
	randNumberName : "rand",
	onError:"服务器校验没有通过",
	onWait:"正在等待服务器返回数据",
	validateType:"ajaxValidator"
};
$.extend(true,ajaxValidator_setting,ajaxForm_setting);

var functionValidator_setting = 
{
	isValid : true,
	fun : function(){this.isValid = true;},
	validateType:"functionValidator",
	onError:"输入错误"
};

var passwordValidator_setting = {
	isValid : true,
	compareID : "",
	validateType:"passwordValidator",
	onErrorContinueChar:"密码字符为连续字符不被允许",
	onErrorSameChar:"密码字符都相同不被允许",
	onErrorCompareSame:"密码于用户名相同不被允许"
};

var fv_scriptSrc = document.getElementsByTagName('script')[document.getElementsByTagName('script').length - 1].src;

var regexEnum = 
{
	intege:"^-?[1-9]\\d*$",					//整数
	intege1:"^[1-9]\\d*$",					//正整数
	intege2:"^-[1-9]\\d*$",					//负整数
	num:"^([+-]?)\\d*\\.?\\d+$",			//数字
	num1:"^[1-9]\\d*|0$",					//正数（正整数 + 0）
	num2:"^-[1-9]\\d*|0$",					//负数（负整数 + 0）
	decmal:"^([+-]?)\\d*\\.\\d+$",			//浮点数
	decmal1:"^[1-9]\\d*.\\d*|0.\\d*[1-9]\\d*$",                //正浮点数
	decmal2:"^-([1-9]\\d*.\\d*|0.\\d*[1-9]\\d*)$",             //负浮点数
	decmal3:"^-?([1-9]\\d*.\\d*|0.\\d*[1-9]\\d*|0?.0+|0)$",    //浮点数
	decmal4:"^[1-9]\\d*.\\d*|0.\\d*[1-9]\\d*|0?.0+|0$",        //非负浮点数（正浮点数 + 0）
	decmal5:"^(-([1-9]\\d*.\\d*|0.\\d*[1-9]\\d*))|0?.0+|0$",   //非正浮点数（负浮点数 + 0）
	email:"^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$", //邮件
	color:"^[a-fA-F0-9]{6}$",				//颜色
	url:"^http[s]?:\\/\\/([\\w-]+\\.)+[\\w-]+([\\w-./?%&=]*)?$",	//url
	chinese:"^[\\u4E00-\\u9FA5\\uF900-\\uFA2D]+$",					//仅中文
	ascii:"^[\\x00-\\xFF]+$",				//仅ACSII字符
	zipcode:"^\\d{6}$",						//邮编
	mobile:"^[1][3-8]\\d{9}$|^([5|6|9])\\d{7}$|^[0][9]\\d{8}$|^[6]([8|6])\\d{5}$",
	pwdreg:"^(\w){6,18}$",
	ip4:"^(25[0-5]|2[0-4]\\d|[0-1]\\d{2}|[1-9]?\\d)\\.(25[0-5]|2[0-4]\\d|[0-1]\\d{2}|[1-9]?\\d)\\.(25[0-5]|2[0-4]\\d|[0-1]\\d{2}|[1-9]?\\d)\\.(25[0-5]|2[0-4]\\d|[0-1]\\d{2}|[1-9]?\\d)$",	//ip地址
	notempty:"^\\S+$",						//非空
	picture:"(.*)\\.(jpg|bmp|gif|ico|pcx|jpeg|tif|png|raw|tga)$",	//图片
	rar:"(.*)\\.(rar|zip|7zip|tgz)$",								//压缩文件
	date:"^\\d{4}(\\-|\\/|\.)\\d{1,2}\\1\\d{1,2}$",					//日期
	qq:"^[1-9]*[1-9][0-9]*$",				//QQ号码
	tel:"^(([0\\+]\\d{2,3}-)?(0\\d{2,3})-)?(\\d{7,8})(-(\\d{3,}))?$",	//电话号码的函数(包括验证国内区号,国际区号,分机号)
	username:"^\\w+$",						//用来用户注册。匹配由数字、26个英文字母或者下划线组成的字符串
	letter:"^[A-Za-z]+$",					//字母
	letter_u:"^[A-Z]+$",					//大写字母
	letter_l:"^[a-z]+$",					//小写字母
	idcard:"^[1-9]([0-9]{14}|[0-9]{17})$"	//身份证
};

var aCity={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"}; 

function isCardID(sId){ 
	var iSum=0 ;
	var info="" ;
	if(!/^\d{17}(\d|x)$/i.test(sId)) return "你输入的身份证长度或格式错误"; 
	sId=sId.replace(/x$/i,"a"); 
	if(aCity[parseInt(sId.substr(0,2))]==null) return "你的身份证地区非法"; 
	sBirthday=sId.substr(6,4)+"-"+Number(sId.substr(10,2))+"-"+Number(sId.substr(12,2)); 
	var d=new Date(sBirthday.replace(/-/g,"/")) ;
	if(sBirthday!=(d.getFullYear()+"-"+ (d.getMonth()+1) + "-" + d.getDate()))return "身份证上的出生日期非法"; 
	for(var i = 17;i>=0;i --) iSum += (Math.pow(2,i) % 11) * parseInt(sId.charAt(17 - i),11) ;
	if(iSum%11!=1) return "你输入的身份证号非法"; 
	return true;//aCity[parseInt(sId.substr(0,2))]+","+sBirthday+","+(sId.substr(16,1)%2?"男":"女") 
} 

//短时间，形如 (13:04:06)
function isTime(str)
{
	var a = str.match(/^(\d{1,2})(:)?(\d{1,2})\2(\d{1,2})$/);
	if (a == null) {return false}
	if (a[1]>24 || a[3]>60 || a[4]>60)
	{
		return false;
	}
	return true;
}

//短日期，形如 (2003-12-05)
function isDate(str)
{
	var r = str.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); 
	if(r==null)return false; 
	var d= new Date(r[1], r[3]-1, r[4]); 
	return (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]);
}

//长时间，形如 (2003-12-05 13:04:06)
function isDateTime(str)
{
	var reg = /^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2}) (\d{1,2}):(\d{1,2}):(\d{1,2})$/; 
	var r = str.match(reg); 
	if(r==null) return false; 
	var d= new Date(r[1], r[3]-1,r[4],r[5],r[6],r[7]); 
	return (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]&&d.getHours()==r[5]&&d.getMinutes()==r[6]&&d.getSeconds()==r[7]);
}

