jQuery.fn.keepalive=function(e){function r(e,r,n){function t(){function n(){if("stop"==e.onError?clearInterval(a[r]):!0,"stopAll"==e.onError)for(var n=0;n<a.length;n++)clearInterval(a[n])}if(e.ajaxRequest)jQuery.ajax({url:e.url,cache:!1,error:n});else{var t=new Image;t.src=e.url+"?_="+(new Date).getTime(),t.onerror=n}}var r,e=e;return function(){e.initial&&t(),""===e.events?a[r]=setInterval(t,1e3*e.interval):n.bind(e.events,function(){var r=new Date;r.getTime()-l.getTime()>1e3*e.interval&&(t(),l=new Date)})}}var t={url:"",initial:!1,interval:600,onError:"continue",ajaxRequest:!0,events:""},a=[],i=[],l=new Date;i=e.multi?e.multi:[e];for(var o=0;o<i.length;o++){var u={},v=jQuery.extend(t,i[o]);for(n in v)u[n]=v[n];i[o]=u}return this.each(function(){for(var e=0;e<i.length;e++){var n=r(i[e],e,$(this));n()}})},$.ccfregistry.pluginReady("keepalive");