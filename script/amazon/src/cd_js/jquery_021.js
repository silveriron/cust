!function(e){jQuery.fn.doublereqprotector=function(t){var i={event:"click"},n=jQuery.extend(i,t);return this.each(function(){e(this).bind(n.event,function(){var t=e(this).parent(),i=e(this).text(),n=e(this).attr("class"),s=e(this).attr("id");e(this).remove(),t.append('<span id= "'+s+'" class="'+n+'"><span>'+i+"</span></span>"),t.prepend('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>'),t.addClass("active")})})}}(jQuery),$.ccfregistry.pluginReady("doublereqprotector");