jQuery.cookie=function(e,i,o){if("undefined"==typeof i){var n=null;if(document.cookie&&""!=document.cookie)for(var r=document.cookie.split(";"),t=0;t<r.length;t++){var p=jQuery.trim(r[t]);if(p.substring(0,e.length+1)==e+"="){n=decodeURIComponent(p.substring(e.length+1));break}}return n}o=o||{},null===i&&(i="",o.expires=-1);var u="";if(o.expires&&("number"==typeof o.expires||o.expires.toUTCString)){var c;"number"==typeof o.expires?(c=new Date,c.setTime(c.getTime()+24*o.expires*60*60*1e3)):c=o.expires,u="; expires="+c.toUTCString()}var s=o.path?"; path="+o.path:"",a=o.domain?"; domain="+o.domain:"",m=o.secure?"; secure":"";document.cookie=[e,"=",encodeURIComponent(i),u,s,a,m].join("")},$.ccfregistry.pluginReady("cookie");