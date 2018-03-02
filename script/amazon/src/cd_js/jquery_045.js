!function($){$.fn.openPopup=function(type,conf,actionValue,formId,everyNthTime,eventType){function shouldPreventChangeViewEvents(e){var n=!1;return"undefined"!=typeof e.preventChangeViewEvents&&(n=e.preventChangeViewEvents),n}function getFramesetProto(){try{return top.location.protocol}catch(e){return"http:"===location.protocol?"https:":"http:"}}function openWindow(where,width,height,toolbar,scrollbars,referenzname,winlook){var proto=getFramesetProto(),posx=screen.width/2-width/2,posy=screen.height/2-height/2,xyPos="top="+posy+",left="+posx+",screenX="+posx+",screenY="+posy,wl01="width="+width+",height="+height+",toolbar="+toolbar+",location=0,menubar=0,status=0,scrollbars="+scrollbars+",resizable=0,"+xyPos,wl02="toolbar=yes,location=yes,menubar=yes,status=yes,scrollbars=yes,resizable=yes",wl03="width="+width+",height="+height+"toolbar="+toolbar+",location=0,menubar=yes,status=0,scrollbars="+scrollbars+",resizable=0"+xyPos,wl04="width="+width+",height="+height+",toolbar="+toolbar+",location=0,menubar=0,status=0,scrollbars="+scrollbars+",resizable=yes,"+xyPos,whereProto=where.indexOf("https:")>-1?"https:":where.indexOf("http:")>-1?"http:":"unknown";if(proto!=whereProto||proto!=location.protocol){var newWindow;return newWindow=window.open(where,referenzname+"z",eval(winlook)),void(newWindow&&newWindow.focus())}if(top.wins&&top.wins.length>0)for(var a=0;a<=top.wins.length;a++)if(top.wins[a]&&1!=top.wins[a].closed&&top.wins[a].name==referenzname)return window.setTimeout('openWindow("'+where+'",'+width+","+height+","+toolbar+","+scrollbars+',"'+referenzname+'","'+winlook+'")',800),void top.wins[a].close();if("undefined"==top.wins)return newWindow=window.open(where,referenzname,eval(winlook)),void(newWindow&&newWindow.focus());try{var numOfWins=top.wins.length;top.wins[numOfWins]=window.open(where,referenzname,eval(winlook)),top.wins[numOfWins].name=referenzname,top.wins[numOfWins].focus()}catch(e){return newWindow=window.open(where,referenzname,eval(winlook)),void(newWindow&&newWindow.focus())}}function checkDomain(e){return e.match("^(/[^/])|^((http[s]?:)?//[a-zA-Z0-9-]*.comdirect.(de|com)/)")}function getParentForm(e){if(e.form)e=e.form;else for(e=e.parentNode;e&&"form"!==e.nodeName.toLowerCase();)e=e.parentNode;return e}function openSelector(e){var n=!0,o="string"==typeof e||"number"==typeof e?document.forms[e]||document.getElementById(e):e;if(o&&"string"==typeof o.nodeName&&"form"===o.nodeName.toLowerCase()){openWindow("about:blank",conf&&conf.width||"794",conf&&conf.height||"600","0","0","selectorWin","wl01"),o.target="selectorWinz";var r;r=o.elements.action,r&&r.form===o&&(r.value="update"),r=o.elements.actionValue,r&&r.form===o&&(r.value=actionValue),o.submit(),o.elements.action.value="",o.target="",n=!1}return n}function getPopupOrNot(e,n,o){var r=function(e){return Math.floor(100*Math.random())+1<=e},t=!0;return o&&r(n)&&(openWindow(e.where,e.width||"426",e.height||"610",e.toolbar||"0",e.scrollbars||"0","newWin","wl01"),t=!1),t}var ccf_s2_version="$Id: jquery.s2.openPopup.js 340 2011-08-10 14:56:38Z ext2713 $";return conf=jQuery.extend({topic:"",where:"",width:"",height:"",toolbar:0,scrollbars:1,referenzname:"",winlook:"",closeMe:"",gerateUrlFrom:""},conf),everyNthTime=jQuery.extend({frequency:10,activityStatus:"on"},everyNthTime),this.each(function(){switch(type){case"reload":$(this).click(function(){location.reload()});break;case"print":$(this).click(function(){return window.print&&window.print(),!1});break;case"everyNthTime":conf.where=conf.where?conf.where:this.href;var e=parseFloat(everyNthTime.frequency);e=isNaN(e)?10:e,e=Math.round(100/(e>=1?e:1));var n="on"==everyNthTime.activityStatus;$(this).click(function(){var o=getPopupOrNot(conf,e,n);return o?-1===$(this).attr("href").indexOf("&showPopup=false")&&$(this).attr("href",$(this).attr("href")+"&showPopup=false"):-1!==$(this).attr("href").indexOf("&showPopup=false")&&$(this).attr("href",$(this).attr("href").replace("&showPopup=false","")),o});break;case"openSelector":var o=formId?formId:getParentForm(this);$(this).click(function(){return openSelector(o)});break;case"info":$(this).click(function(){var e;return e="/cms/help/"+conf.topic+".html",openWindow(e,580,471,0,0,"newInfo","wl01"),!1});break;case"openBrowser":$(this).click(function(){var e,n,o,r;return openWindow(conf.where,e,n,o,r,"newBrowser","wl02"),!1});break;case"openWin":var r=function(){return shouldPreventChangeViewEvents(this)||openWindow(conf.where,conf.width,conf.height,conf.toolbar,conf.scrollbars,conf.referenzname?conf.referenzname:"newWin","wl01"),!1};$(this).click(r),this.originalClickHandler=r;break;case"quickInfoWKN":$(this).click(function(){var e=conf.topic;("undefined"==typeof e||null==e||""===e)&&(e=document.forms.inlandsorder.wpkennung.value);var n="/inf/html/detail/popup/main.html?wpkennung="+e;return openWindow(n,590,510,0,1,"newInfo","wl01"),!1});break;case"openPdfWin":$(this).click(function(){var e=conf.where,n="redirected="+Math.floor(1e10*Math.random());return e=-1===e.indexOf("?")?e+"?"+n:e+"&"+n,openWindow(e,conf.width,conf.height,conf.toolbar,conf.scrollbars,"pdfWin","wl01"),!1});break;case"openInfoFromPopup":$(this).click(function(){var e="/cms/help/"+conf.topic+".html";return openWindow(e,290,471,0,0,"newInfo","wl01"),!1});break;case"openInfoBig":$(this).click(function(){var e;return e="/cms/help/"+conf.topic+".html",openWindow(e,580,550,0,0,"newInfo","wl01"),!1});break;case"openLexikon":$(this).click(function(){var e;return e="/pbl/exchangelexicon/FramesetVP.do?selectedPage="+conf.topic,openWindow(e,540,391,0,0,"lexiconWin","wl01"),!1});break;case"printer":$(this).click(function(){return openWindow(conf.where,700,600,1,"yes","newPrint","wl03"),!1});break;case"openPrintDialog":$(this).click(function(){var e="/noprinter.html";return window.print?window.print():(openWin(e,310,232),openWindow(conf.where,"310","232",toolbar,scrollbars,"newWin","wl01")),!1});break;case"closeMe":$(this).click(function(){close()});break;case"openInOpener":$(this).click(function(){return openInOpener(conf.where,conf.closeMe),!1});break;case"withoutClick":return openWindow(conf.where,conf.width,conf.height,conf.toolbar,conf.scrollbars,conf.referenzname,conf.winlook),!1;case"generateURL":$(this).click(function(){var e=conf.where+$(conf.gerateUrlFrom).val();return openWindow(e,conf.width,conf.height,conf.toolbar,conf.scrollbars,conf.referenzname,conf.winlook),!1});break;case"videoportal":$(this).click(function(){return openWindow(conf.where,1024,747,1,"no","newPrint","wl03"),!1});break;case"geldautomatensucheTeaser":$(this).on(eventType,function(e){if("13"==e.keyCode||"0"==e.keyCode||void 0==e.keyCode){e.preventDefault();var n=new Array;n[0]="Search",n[1]="Partner",n[2]="SecurityID",n[3]="View",n[4]="QT",n[5]="Radius",n[6]="BC",n[7]="Country",n[8]="Zip",n[9]="Town",n[10]="Street",n[11]="ZipTown";var o=new Array;o[0]=$("#hidden1").val(),o[1]=$("#hidden2").val(),o[2]=$("#hidden3").val(),o[3]=$("#hidden4").val(),o[4]=$("#hidden5").val(),o[5]=$("#hidden6").val(),o[6]=$("#hidden7").val(),o[7]=$("#hidden8").val(),o[8]=$("#plz").val(),o[9]=$("#ort").val(),o[10]=$("#strasse").val(),o[11]=$("#zipTown").val();for(var r=!0,t="http://www.yellowmap.de/Filialfinder/HTML/Poi.aspx",i=0;i<n.length;i++)o[i]&&(r?(t+="?",r=!1):t+="&",t=t+n[i]+"="+o[i]);try{var a=window.open(t,"gWin","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=690,height=572");a.focus()}catch(e){}}})}})}}(jQuery),$.ccfregistry.pluginReady("openPopup");