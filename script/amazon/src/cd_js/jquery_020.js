!function(t){!function(t,n,e){t.fn.preventFirstTap=function(){return"ontouchstart"in n||navigator.msMaxTouchPoints||navigator.userAgent.toLowerCase().match(/windows phone os 7/i)?(e.curItem=!1,this.each(function(){t(this).on("click",function(n){var i=t(this);i[0]!=e.curItem[0]&&(n.preventDefault(),e.curItem=i)}),t(e).on("click touchstart MSPointerDown",function(t){e.curItem&&e.curItem[0]!=t.target&&(e.curItem=!1)})}),this):!1}}(jQuery,window,document),t.fn.doubleTapNavigation=function(n){var e={navigationElements:".hasSubMenu > a"},i=jQuery.extend(e,n);return this.each(function(){t(this).find(i.navigationElements).preventFirstTap()})}}(jQuery),$.ccfregistry.pluginReady("doubleTapNavigation");