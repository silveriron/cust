!function(){function e(){this._scripts=["/ccf2/modules/js/ccf_core.module.js"]}e.prototype.loadScripts=function(){var e=window.parent.document.getElementsByName("cacheVersionQueryParam"),t="";e.length>0&&(t="?"+e[0].content);for(var c=location.protocol+"//static",n=location.host.split("."),o=(document.getElementsByTagName("body"),1);o<n.length;o++)c=c+"."+n[o];for(var o=0;o<this._scripts.length;o++){var a=document.createElement("script");a.src=c+this._scripts[o]+t,document.head.appendChild(a)}var r=document.createElement("meta");r.name="cacheVersionQueryParam",r.content=t,document.head.appendChild(r)};var t=new e;t.loadScripts()}();