!function(e){jQuery.fn.commandlink=function(t){function r(){for(n in i.extraParams)jQuery(i.form).append('<input class="deleteAfterSubmit" type="hidden" name="'+n+'" value="'+i.extraParams[n]+'"/>');if(i.trackingId&&(window.eCrm&&window.eCrm.log({pageId:i.trackingId}),"undefined"!=typeof window.cdb&&"undefined"!=typeof window.cdb.tracking&&"undefined"!=typeof window.cdb.tracking.TrackingLogger&&(new cdb.tracking.TrackingLogger).actionLogging(i.trackingId,"event2",e(this).attr("href"))),i.target.name&&"popup"==i.extraParams.flowMode){var t=jQuery(i.form).serializeArray(),r=jQuery(i.form).get(0).action;r+=r.indexOf("?")>=0?"&":"?";for(var a=0;a<t.length;a++)r+=t[a].name+"="+t[a].value,r+=a!=t.length-1?"&":"";void 0===i.target.features.width&&(i.target.features.width=window.screen.availWidth-15),void 0===i.target.features.height&&(i.target.features.height=window.screen.availHeight-80),1==i.target.features.center&&(i.target.features.left=screen.width/2-i.target.features.width/2,i.target.features.top=screen.height/2-i.target.features.height/2);var o;parameters="location="+i.target.features.location+",menubar="+i.target.features.menubar+",height="+i.target.features.height+",width="+i.target.features.width+",toolbar="+i.target.features.toolbar+",scrollbars="+i.target.features.scrollbars+",status="+i.target.features.status+",resizable="+i.target.features.resizable+",left="+i.target.features.left+",screenX="+i.target.features.left+",top="+i.target.features.top+",screenY="+i.target.features.top,o=window.open(r,i.target.name,parameters)}else jQuery(i.form).submit(),i.ignoreUnbind||(jQuery(i.form).unbind("submit"),jQuery(i.form).bind("submit",function(){return!1}));return jQuery(i.form).find(".deleteAfterSubmit").remove(),!1}var a={event:"click",onLoad:!1,onPageLoad:!1,form:"",trackingId:void 0,ignoreUnbind:!1,extraParams:{},target:{name:"",features:{height:600,width:600,toolbar:0,scrollbars:0,status:0,resizable:1,left:0,top:0,location:0,menubar:0,center:0}}},i=jQuery.extend(a,t);if("undefined"!=typeof t){var o=jQuery.extend(a.target,t.target);i.target=o}if("undefined"!=typeof t.target){var g=jQuery.extend(a.target.features,t.target.features);i.target.features=g}return this.each(function(){if(jQuery(this).bind(i.event,i,r),i.onLoad){var t=i.event;null!=t&&t.indexOf("click")>=0&&e(this).is("a")&&(e(this).children().click(),t=t.replace("click","")),e(this).trigger(t)}i.onPageLoad&&0==defaultRegistry.getTimesDomChanged()&&jQuery(this).trigger(i.event)})}}(jQuery),$.ccfregistry.pluginReady("commandlink");