/*!*
 * project: digitalstrategie / pk-projekt
 * version: 4.41.0
 */

!function(a){mrm.mod.Bildergalerie=mrm.mod.AbstractMod.extend({_widthDialog:"",_heightDialog:"",_lightboxWidth:"",_lightboxHeight:"",sliderNav:null,galleryCurrentSlide:null,timeoutId:"",events:{"hover .gallery":"onHover","hover .galleryNav":"onHoverNav","hover .galleryLightboxContainer":"onHoverLightbox","click .btn-galleryLightbox":"triggerLightboxDialog","mouseover .galleryNav li":"onGalleryNavHover","mouseout .galleryNav li":"onGalleryNavMouseOut"},initElements:function(){this.sandbox.subscribe("globalMenu",this),a("mod-Akkordeon").length||this.initFlexslider(),this._super()},prepare:function(a){this.fixFlexsliderHeight(),this.navOverlay(),a()},navOverlay:function(){var b=this.$ctx.find(".galleryNav .slides li div"),c=a('<span class="galleryNavOverlay"></span>');c.appendTo(b)},onGalleryNavHover:function(b){var c=a(b.currentTarget).find(".galleryNavOverlay"),d=c.closest(".slides").find("li .galleryNavOverlay");d.removeClass("onMouseOver"),c.addClass("onMouseOver")},onGalleryNavMouseOut:function(b){var c=a(b.currentTarget).find(".galleryNavOverlay"),d=c.closest(".slides").find("li .galleryNavOverlay");d.removeClass("onMouseOver")},initFlexslider:function(){{var b=this.$ctx,c=this.$ctx.find(".gallery"),d=this.$ctx.find(".gallery").attr("id"),e=(this.$ctx.find(".galleryNav"),this.$ctx.find(".galleryNav").attr("id")),f=this.$ctx.find(".galleryLightbox"),g=this.$ctx.find(".galleryLightbox").attr("id"),h=this.$ctx.find(".galleryLightboxContainer"),i=a("section.content").innerWidth(),j=c.find(".imageCounter"),k=f.find(".imageCounter"),l=(j.closest("li").index(this),c.find("li").length),m=!1;b.closest(".resp-tab-content:not(.resp-tab-content-active)")}_widthDialog=i-32,_heightDialog=_widthDialog/16*9,h.css({width:_widthDialog+"px",height:_heightDialog+"px"}),j.append(l),k.append(l);var n={animation:"slide",controlNav:!1,animationLoop:!0,slideshow:!1,itemWidth:164,itemMargin:16,prevText:"",nextText:"",asNavFor:"#"+d},o={animation:"slide",controlNav:!1,animationLoop:!0,slideshow:!1,prevText:"",nextText:"",sync:"#"+e,after:function(){}},p={animation:"slide",animationSpeed:600,controlNav:!1,animationLoop:!0,slideshow:!1,prevText:"",nextText:"",after:function(){}};if(a("#"+e).flexslider(n).data("flexslider"),a("#"+d).flexslider(o).data("flexslider"),a("#"+g).flexslider(p).data("flexslider"),m&&a("html").hasClass("msie8")){var b=this.$ctx,q=b.closest(".resp-tab-content:not(.resp-tab-content-active)"),r=b.find(".gallery"),s=b.find(".galleryNav"),t=b.find(".galleryLightbox"),u=r.attr("id"),v=s.attr("id"),w=t.attr("id");q.show(),a("#"+v).flexslider().resize(),a("#"+u).flexslider().resize(),a("#"+w).flexslider().resize(),setTimeout(function(){q.hide()},100)}},fixFlexsliderHeight:function(){var b=this.$ctx.find(".gallery"),c=b.find(".slides"),d=c.find("figure"),e=c.find("img"),f=b.innerWidth(),g=f/16*9;if(c.css("height",g+"px"),d.css("height",g+"px"),e.css({width:"auto",height:"auto",maxHeight:g+"px"}),this.$ctx.find(".galleryLightboxContainer").length){var h=a(".galleryLightboxContainer .galleryLightbox"),i=h.find(".slides"),j=i.find("figure"),k=i.find("img"),l=a("section.content").innerWidth(),m=a(window).height(),n=l/16*9;n>m?(this._lightboxHeight=m,this._lightboxWidth=this._lightboxHeight/9*16):(this._lightboxHeight=n,this._lightboxWidth=n/9*16),i.css("height",this._lightboxHeight-48+"px"),j.css("height",this._lightboxHeight-48+"px"),j.css("width",this._lightboxWidth-32+"px"),k.css({width:"auto",height:"auto",maxWidth:this._lightboxWidth-32+"px",maxHeight:this._lightboxHeight-48+"px"})}},triggerLightboxDialog:function(b){b.preventDefault();{var c=a(b.currentTarget),d=a(c.attr("data-lightbox"));this._lightboxWidth,this._lightboxHeight}d.dialog({modal:!0,resizable:!1,draggable:!1,width:this._lightboxWidth,height:this._lightboxHeight,closeText:"X",create:function(){a(".galleryLightboxContainer").closest(".ui-dialog").css("maxWidth","100%"),d.find(".btn-close").on("click",function(){d.dialog("close")}),a(".galleryLightboxContainer").css({position:"static"}),a(".mod-Bildergalerie .galleryLightboxContainer").css({position:"absolute"}),a(".ui-dialog-title").hide(),a(".ui-dialog-titlebar").css("margin",0)},open:function(){{var b=c.closest(".gallery"),d=c.attr("data-lightbox"),e=a(d).find(".galleryLightbox").attr("id"),f=b.attr("id"),g=a("#"+f).data("flexslider").currentSlide;a("#"+e).data("flexslider")}a("#"+e).data("flexslider").flexAnimate(g)},close:function(){}})},onHover:function(a){this.$ctx.find(".gallery").toggleClass("active","mouseenter"===a.type)},onHoverLightbox:function(a){this.$ctx.find(".galleryLightbox").toggleClass("active","mouseenter"===a.type)},onHoverNav:function(a){this.$ctx.find(".galleryNav").toggleClass("active","mouseenter"===a.type)},onBroadcastWindowResize:function(){this._super(),this.fixFlexsliderHeight()}})}(jQuery),CobaNewsList=Class.extend({init:function(a,b,c,d){this.newsJson=a,this.typeId=b,this.categoryIds=c,this.count=d},getList:function(){var a=[],b=this;return $.each(this.newsJson,function(c,d){var e=!0;b.typeId&&b.typeId!==d.typeId&&(e=!1),b.categoryIds&&$.inArray(d.categoryId,b.categoryIds)<0&&(e=!1),e&&a.push(d)}),b.count&&(a=a.slice(0,b.count)),a}}),CobaNews=Class.extend({init:function(a,b,c){this.$ctx=a,this.newsObj=b,this.showPicture=c},print:function(){var a='<div class="mod mod-News"><a href="';a+=this.newsObj.pageLink?this.newsObj.pageLink+'">':'#">',this.newsObj.picture&&this.showPicture&&(a+='<figure class="img-caption"><img src="'+this.newsObj.picture+'" ',this.newsObj.alt&&(a+=' alt="'+this.newsObj.alt+'"'),this.newsObj.mouseover&&(a+=' title="'+this.newsObj.mouseover+'"'),a+="/></figure>"),a+='<div class="content"><p class="fu-02 ">'+this.newsObj.validFrom,this.newsObj.category&&(a+=" | "+this.newsObj.category),a+="</p><h4>"+this.newsObj.title+"</h4>",this.newsObj.description&&(a+='<p class="p-03 ">'+this.newsObj.description+"</p>"),a+="</div></a></div>",this.$ctx.append(a)}}),function(){mrm.mod.Direktzugriff=mrm.mod.AbstractMod.extend({})}(jQuery),function(a){mrm.mod.ExternalMod=mrm.mod.AbstractMod.extend({prepare:function(a){this.loadData(),a()},loadData:function(){this.$idmsDivs=this.$ctx.find(".idms-call");var b=this;this.$idmsDivs.each(function(){this.$idmsDiv=a(this);var c=this.$idmsDiv.data("idmsurl");if(c){var d=this;a.ajax({url:c,dataType:"html",cache:!0,timeout:15e3,success:function(c){var e=a(c);e.find(".mod").length>0?(b.replaceContent(e,d.$idmsDiv),d.$idmsDiv.parent().find(".mod-Alert").remove()):(d.$idmsDiv.find(".loading-container").remove(),d.$idmsDiv.parent().find(".mod-Alert").show())},error:function(){d.$idmsDiv.find(".loading-container").remove(),d.$idmsDiv.parent().find(".mod-Alert").show()},complete:function(){b.setEqualHeightPerRow()}})}})},replaceContent:function(b,c){var d=c.data("createmod"),e=c;d&&(e=a("<div/>"),e.addClass(d),c.replaceWith(e)),e.html(b);var f=e.find(".mod");return f&&mrm.update(f),!0}})}(jQuery),function(a){mrm.mod.FinanzloesungBuehne=mrm.mod.AbstractMod.extend({events:{"click .buehneTabs li":"flexTab"},prepare:function(a){this.tabWidth(),a()},tabWidth:function(){var a=this.$(".buehneTabs li"),b=100/a.length;a.css("width",b+"%")},onBuehneUpdateTab:function(a){this.$(".buehneTabs li").removeClass("activeTab"),this.$(".buehneTabs li:eq("+a.tab+")").addClass("activeTab")},flexTab:function(b){b.preventDefault();{var c=a(b.currentTarget),d=c.index();this.$(".flex-control-nav li:eq("+d+")")}this.fire("buehneSlideTo",{slide:d},["buehne"])}})}(jQuery),function(a){mrm.mod.Finanzloesungen=mrm.mod.AbstractMod.extend({onBroadcastBeforeWindowResize:function(){this.$("> ul > li > a").css("height","")},onBroadcastAfterWindowResize:function(){var b=2,c=this.$ctx.height();if(this.$ctx.children(":not(ul)").each(function(b,d){c-=a(d).outerHeight(!0)}),c!==this.$("> ul").height()){var d=this.$("> ul > li > a"),e=d.outerHeight(!0)-d.outerHeight(!1),f=c/(d.length/b);d.css("height",f-e)}}})}(jQuery),function(a){mrm.mod.Kontaktbox=mrm.mod.AbstractMod.extend({events:{"click .hotline":"callNumber"},prepare:function(a){var b=this.$ctx,c=b.closest(".mod-Reiterset .resp-tab-content");b.closest(".mod-Reiterset").length&&!c.hasClass("resp-tab-content-active")?(c.css({display:"block"}),this.$tabs=this.$(".tabs-set").tabs({heightStyle:"auto"}),c.css({display:"none"})):this.$tabs=this.$(".tabs-set").tabs({heightStyle:"auto"}),this.largeTile(),a()},largeTile:function(){var b=this.$ctx.find(".hotline").closest(".no-mobile");b.each("smallViewport"===a("body").attr("data-viewport")?function(b,c){a(c).closest("ul").attr("data-tile-large","false")}:function(b,c){a(c).closest("ul").attr("data-tile-large","true")})},callNumber:function(b){{var c=a(b.currentTarget),d=c.data("tel");c.attr("href")}d="tel:"+d,navigator.userAgent.match(/Mobi/)&&!navigator.userAgent.match(/iPad/i)?c.attr("href",d):b.preventDefault()},onBroadcastWindowResize:function(){this.update(),this.largeTile()},update:function(){var a=this.$ctx,b=a.closest(".mod-Reiterset .resp-tab-content");a.closest(".mod-Reiterset").length&&!b.hasClass("resp-tab-content-active")?(b.css({display:"block"}),this.$tabs.tabs("refresh"),b.css({display:"none"})):this.$tabs.tabs("refresh")}})}(jQuery),function(a){mrm.mod.Marktdaten=mrm.mod.AbstractMod.extend({updateTabs:function(){this.$tabs.tabs("refresh")},updateAccordion:function(){this.$accordion.accordion("refresh")},prepare:function(a){this.$tabs=this.$(".tabs-set"),this.$accordion=this.$(".accordion"),this.loadData(),a()},after:function(){var a=this;this.$accordion.accordion({animate:100,heightStyle:"content",collapsible:!0}),this.$tabs.tabs({heightStyle:"auto"}),this.$accordion.find("img").on("load",function(){a.updateAccordion()}),this.$tabs.find("img").on("load",function(){a.updateTabs()})},loadData:function(){this.$idmsDivs=this.$ctx.find(".idms-call");var b=this;this.$idmsDivs.each(function(){this.$idmsDiv=a(this);var c=this.$idmsDiv.data("idmsurl");if(c){c+=b.bestChoiceChartImg(this.$idmsDiv);var d=this;a.ajax({url:c,dataType:"html",cache:!0,timeout:15e3,success:function(a){var c=b.convertData(a,d.$idmsDiv);b.replaceContent(c,d.$idmsDiv),b.setTitleSize(),d.$idmsDiv.parent().find(".mod-Alert").remove(),b.scroller=null,b.initScroller()},error:function(){d.$idmsDiv.find(".loading-container").remove(),d.$idmsDiv.parent().find(".mod-Alert").show()}})}})},bestChoiceChartImg:function(a){this.$actualSize||this.getChartSize(a);var b=this.$actualSize;return b?"&WIDTH="+b[0]+"&HEIGHT="+b[1]:""},getChartSize:function(a){if(a&&a.data("autosize"))for(var b=[[240,120],[320,160],[500,250],[685,384]],c=this.$ctx.width(),d=0;d<b.length;d++){var e=b[d][0];if(e-10>=c||e+10>=c||3===d){if(this.$actualSize&&this.$actualSize[0]===e)return;return this.$actualSize=b[d],b[d]}}},convertData:function(b,c){var d=a(b);if(c.data("tableclass")&&(d=this.convertTable(d,c)),c.data("tabtitle")){var e=c.data("tabtitle");if(e&&e.length>0)for(var f=d.find(".resp-tabs-list > li"),g=0;g<e.length;g++){var h=a(f[g]);h.attr("title",e[g][1]),h.find("a").text(e[g][0])}}return this.convertUrl(d),d.find(".show-tooltip[data-content]").each(function(){a(this).attr("title",a(this).attr("data-content").replace(/\|/g,"<br>")),a(this).removeAttr("data-content")}),d},convertUrl:function(){},updateTooltip:function(){var b=this.$(".show-tooltip");b.length&&!Modernizr.touch&&b.each(function(){var b=a(this);b.tooltip().off("focusin")})},setTitleSize:function(){var b=this.$ctx.width(),c=0;215>b&&(c=70);var d=this.$ctx.find("div.accordion");if(d.length>0)for(var e=0;e<d.length;e++){for(var f=a(d[e]).find("span.title, span.show-tooltip"),g=a(d[e]).find("h3 .value-trend").outerWidth()+35,h=this.isNewData(d[e]),i=a(d[e]).find("h3"),j=0;j<i.length;j++)c>0?a(i[j]).addClass("min"):a(i[j]).removeClass("min");for(var j=0;j<f.length;j++){var k=b-g+c;h?a(f[j]).css("width",k+"px"):a(f[j]).css("min-width",k+"px")}}else{var l=this.$ctx.find("div.chart");if(l.length)for(var e=0;e<l.length;e++){var f=a(l[e]).find(".show-tooltip"),g=a(l[e]).find("h3 .value-trend").outerWidth()+5;(l.hasClass("resp-tab-content")||0!=l.parents(".resp-tab-content").length||f.length>1)&&(g+=20);var h=this.isNewData(l[e]);if(!l.hasClass("resp-tab-content"))for(var i=a(l[e]).find("h3"),j=0;j<i.length;j++)c>0?a(i[j]).addClass("min"):a(i[j]).removeClass("min");for(var j=0;j<f.length;j++){var k=b-g+c;h?a(f[j]).css("width",k+"px"):a(f[j]).css("max-width",k+"px")}}}},isNewData:function(b){var c=a(b).find("h3");return c.hasClass("acc")},convertTable:function(b,c){var d=c.data("tableclass"),e=c.data("tablewidth"),f=c.data("tableheaderclass"),g=c.data("tablebodyclass"),h=a(b);return h.find("table").each(function(){a(this).addClass(d),e&&a(this).css("width",e+"px")}),h.find("tr").each(function(b){a(this).addClass(0===b?f:g)}),c.data("tooltip")&&h.find("tbody .tb-p-01-01").each(function(){var b=a(this),c=a.trim(b.children("a").text());b.addClass("show-tooltip"),b.attr("title",c)}),h},replaceContent:function(b,c){var d=c.data("createmod"),e=c;d&&(e=a("<div/>"),e.addClass(d),c.replaceWith(e)),e.html(b),this.$tabs=this.$(".tabs-set"),this.$accordion=this.$(".accordion"),this.after(),this.initTooltip(),this.updateTooltip(),mrm.update(this.$ctx);var f=e.find(".mod");return f&&mrm.update(f),!0},visible:function(){var b=this;this.$idmsDivs.each(function(){b.getChartSize(a(this))&&b.loadData()}),this.setTitleSize(),this.updateTabs(),this.updateAccordion();var c=this.$ctx.find(".slider");if(c.length){var d=c.data("flexslider");d.resize()}},initScroller:function(){{var b=!1,c=!1,d=!1,e=this.$ctx,f=e.find(".table-wrapper"),g=e.closest(".resp-tab-content:not(.resp-tab-content-active)");a(".resp-tab-content")}if(e.closest("details").length&&(d=!0,e.closest("details").prop("open")&&(b=!0)),g.length&&(c=!0),d&&(a.fn.details.support?e.closest("details").prop("open",!0):e.closest(".ak-content").css("display","block")),c&&g.show(),this.scroller){this.scroller.data("jsp").reinitialise();var h=f.find("table"),i=h.css("width"),j=h.parent().css("width"),k=parseInt(h.css("height"),10),l=k+30;parseInt(i)>parseInt(j)?setTimeout(function(){h.closest(".jspContainer").css("height",l+"px")},400):setTimeout(function(){h.closest(".jspContainer").css("height",k+"px")},400)}else{var h=f.find("table"),i=h.css("width"),j=h.parent().css("width"),k=parseInt(h.css("height"),10),l=k+30;parseInt(i)>parseInt(j)&&(this.scroller=f.jScrollPane({horizontalOffset:2}),setTimeout(function(){h.closest(".jspContainer").css("height",l+"px")},400))}b||(d&&(a.fn.details.support?e.closest("details").prop("open",!1):e.closest(".ak-content").css("display","none")),c&&g.css("display","none"))},onBroadcastWindowResize:function(){var b=this;this.$idmsDivs.each(function(){b.getChartSize(a(this))&&b.loadData()}),this.setTitleSize(),this.updateTabs(),this.updateAccordion(),this.initScroller()}})}(jQuery),function(){mrm.mod.Multiselektionsteaser=mrm.mod.AbstractMod.extend({prepare:function(a){this.initMst(),a()},initMst:function(){var a=this.$ctx,b=a.children(".flexibleContainer"),c=b.length,d=a.width(),e=parseInt(a.children(".flexibleContainer:eq(1)").css("marginLeft")),f="",g="";8===c&&(f=Math.floor((d-3*e)/4),b.css("width",f+"px").children("a").css("maxWidth",f+"px"),a.children(".flexibleContainer:eq(4)").css("marginLeft",0)),7===c&&(f=Math.floor((d-3*e)/4),g=Math.floor((d-2*e)/3),b.css("width",f+"px").children("a").css("maxWidth",f+"px"),a.children(".flexibleContainer:lt(3)").css("width",g+"px").children("a").css("maxWidth",g+"px"),a.children(".flexibleContainer:eq(3)").css("marginLeft",0)),6===c&&(f=Math.floor((d-2*e)/3),b.css("width",f+"px").children("a").css("maxWidth",f+"px"),a.children(".flexibleContainer:eq(3)").css("marginLeft",0)),5===c&&(f=Math.floor((d-2*e)/3),g=Math.floor((d-e)/2),b.css("width",f+"px").children("a").css("maxWidth",f+"px"),a.children(".flexibleContainer:lt(2)").css("width",g+"px").children("a").css("maxWidth",g+"px"),a.children(".flexibleContainer:eq(2)").css("marginLeft",0)),4===c&&(f=Math.floor((d-e)/2),b.css("width",f+"px").children("a").css("maxWidth",f+"px"),a.children(".flexibleContainer:eq(2)").css("marginLeft",0))},onBroadcastWindowResize:function(){this.initMst()}})}(jQuery),function(a){mrm.mod.News=mrm.mod.AbstractMod.extend({initElements:function(){if(this.initAdaptiveImages(),this.initLinklistDropdown(),this.initInfoBoxes(),this.initBtnFlyout(),this.initTooltip(),this.updateTooltip(),this.initStyledSelect(),a.browser.msie&&parseInt(a.browser.version,10)<9){var b=this.$("table.tb-a-01, table.tb-a-02");b.length&&(b.find("tr:even").addClass("odd"),b.find("tr:odd").addClass("even"))}},updateTooltip:function(){var b=this.$(".show-tooltip");b.length&&!Modernizr.touch&&b.each(function(){var b=a(this);b.tooltip().off("focusin")})}})}(jQuery),function(a){mrm.mod.Newslist=mrm.mod.Abstract.extend({prepare:function(a){this.loadData(),a()},loadData:function(){var b=this.$ctx.data("url"),c=this.$ctx.data("typeId"),d=this.$ctx.data("categoryId"),e=this;a.ajax({url:b,dataType:"json",success:function(b){var f=new CobaNewsList(b,c,d),g=f.getList();e.$ctx.empty(),a.each(g,function(a,b){var c=new CobaNews(e.$ctx,b,!0);c.print()})},error:function(){e.$ctx.find(".loading-container").remove(),e.$ctx.find(".mod-Alert").show()}})}})}(jQuery),function(a){mrm.mod.ResearchWidget=mrm.mod.AbstractMod.extend({prepare:function(b){var c=this.$ctx.closest(".col"),d=this.$ctx.closest(".row"),e=a(window).width();if(e>768&&(c.hasClass("col-lg-4")||d.hasClass("ac-6_6")&&c.hasClass("col-lg-6"))){var f=this.$ctx.find("td[data-date]");f.length&&f.each(function(){var b=a(this);b.html(b.data("date"))})}b()}})}(jQuery),function(a){mrm.mod.ScrollTicker=mrm.mod.AbstractMod.extend({prepare:function(a){var b=this.$(".slides"),c=b.data("url");c?this.loadData(b,c):this.slider(),a()},slider:function(){var a=this.$(".slider"),b=a.data("slideshow")?!0:!1,c=a.data("slideshow-speed")?a.data("slideshow-speed"):"6000",d=a.data("animation-speed")?a.data("animation-speed"):"600";this.slideConfig={animation:"slide",animationLoop:!0,touch:!0,controlNav:!0,slideshow:b,slideshowSpeed:c,animationSpeed:d,useCSS:!1},a.flexslider(this.slideConfig),a.before('<div class="slider_temp" style="display:none;"></div>')},newSlideContent:function(){var a=this.$(".slides");a.insertBefore(this.$(".slides").parent()),this.$(".slider").find(".flex-viewport, .flex-control-nav, .flex-direction-nav").remove();var b=this.$(".slider").html();this.$(".slider_temp").html(b),this.$(".slider").remove(),this.$(".slider_temp").show(),this.$(".slider_temp").flexslider(this.slideConfig),this.$(".slider_temp").attr("class","slider"),this.$(".slider").before('<div class="slider_temp" style="display:none;"></div>')},update:function(){this.newSlideContent()},loadData:function(b,c){var d=b.data("typeId"),e=b.data("categoryId"),f=b.data("pageCount")||3,g=b.data("count"),h=this;a.ajax({url:c,dataType:"json",success:function(c){var i=new CobaNewsList(c,d,e,g),j=i.getList();b.empty();var k=a("<li/>");a.each(j,function(c,d){c%f===0&&c>0&&(b.append(k),k=a("<li/>")),news=new CobaNews(k,d,!1),news.print()}),k.children().length>0&&b.append(k),h.slider()},error:function(){b.find(".loading-container").remove(),b.find(".mod-Alert").show()}})}})}(jQuery),function(){mrm.mod.TextBild=mrm.mod.AbstractMod.extend({})}(jQuery),function(a){mrm.mod.Video=mrm.mod.AbstractMod.extend({seitenId:"",origContentId:"",events:{"click .fp-flyoutSocial":"flyoutSocial","click .flyoutSocial a":"flyoutSocialLinks"},prepare:function(a){this.sandbox.subscribe("anchorHash",this),this.getContentId(),this.configErrorMessages(),this.videoConfig(),window.location.hash&&this.fire("hashChange",{hash:escape(window.location.hash.substring(1))},["anchorHash"]),a()},onUnloadVideo:function(){this.$(".videoplayer").flowplayer().unload()},getContentId:function(){"undefined"!=typeof wt&&(this.seitenId=wt.contentId,this.origContentId=wt.contentId)},onHashChange:function(b){var c=b.hash,d=this.$ctx.find('.videoplayer[data-contentId="'+c+'"]'),e="",f="",g="";d.addClass("scrollMark"),d.closest(".resp-tabs-container").length&&(e=!0,f=!1,g=!1),d.closest("details").length&&(f=!0,e=!1,g=!1),d.closest(".mod-Buehne").length&&(e=!1,f=!1,g=!0),0==e&&0==f&&0==g&&d.hasClass("scrollMark")&&a("html, body").animate({scrollTop:a(".scrollMark").offset().top-50},1e3)},configErrorMessages:function(){var a=this.$ctx.find(".videoplayer"),b=a.attr("data-error1")?a.data("error1"):"Video loading aborted",c=a.attr("data-error2")?a.data("error2"):"Network error",d=a.attr("data-error3")?a.data("error3"):"Video not properly encoded",e=a.attr("data-error4")?a.data("error4"):"heo Video file not found",f=a.attr("data-error5")?a.data("error5"):"Unsupported video",g=a.attr("data-error6")?a.data("error6"):"Skin not found",h=a.attr("data-error7")?a.data("error7"):"SWF file not found",i=a.attr("data-error8")?a.data("error8"):"Subtitles not found",j=a.attr("data-error9")?a.data("error9"):"Invalid RTMP URL",k=a.attr("data-error10")?a.data("error10"):"Unsupported video format. Try installing Adobe Flash.",l=a.attr("data-errorUrl1")?a.data("errorUrl1"):"",m=a.attr("data-errorUrl2")?a.data("errorUrl2"):"",n=a.attr("data-errorUrl3")?a.data("errorUrl3"):"",o=a.attr("data-errorUrl4")?a.data("errorUrl4"):"",p=a.attr("data-errorUrl5")?a.data("errorUrl5"):"",q=a.attr("data-errorUrl6")?a.data("errorUrl6"):"",r=a.attr("data-errorUrl7")?a.data("errorUrl7"):"",s=a.attr("data-errorUrl8")?a.data("errorUrl8"):"",t=a.attr("data-errorUrl9")?a.data("errorUrl9"):"",u=a.attr("data-errorUrl10")?a.data("errorUrl10"):"http://get.adobe.com/flashplayer/";flowplayer.conf.errors=["",b,c,d,e,f,g,h,i,j,k],flowplayer.conf.errorUrls=["",l,m,n,o,p,q,r,s,t,u]},flyoutSocial:function(b){var c=a(b.currentTarget),d=this.$ctx.find(".videoplayer"),e=d.find(".flyoutSocial"),f=d.height()+1;this.$ctx.parents(".mod-Buehne").length?e.css("bottom","21px"):e.css("top",f+"px"),e.toggleClass("is-visible"),e.toggleClass("is-hidden"),c.toggleClass("is-active")},flyoutSocialLinks:function(b){var c=this,d=a(b.currentTarget),e=d.closest(".videoplayer").find("i"),f=this.$ctx.find(".flyoutSocial"),g=this.$ctx.find(".videoplayer").attr("data-contentId"),h=d.data("social");f.toggleClass("is-visible"),f.toggleClass("is-hidden"),e.toggleClass("is-active"),"undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==g?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+g:wt.contentId+"."+g,wt.sendinfo({linkId:c.seitenId+"-"+g+"-"+h,contentGroup:wt.contentGroup}))},videoConfig:function(){var a=this,b=this.$ctx,c=this.$(".videoplayer").attr("data-contentId"),d=c,e="",f="",g=0;this.$(".videoplayer").flowplayer({tooltip:!1,key:"$460090215221623, $424882214056804, $424285514037061, $427269214135774, $508128116810911, $429357814204874, $427866014155517, $430849714254231, $429954614224617, $429954614224617, $428462714175260, $433833414352944, $425479014076546, $429954614224617, $431148114264102, $429357814204874, $430849714254231, $430849714254231, $434131814362816"});var h=this.$(".videoplayer").data("flowplayer");h.bind("load",function(){"undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==c?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+c:wt.contentId+"."+c,wt.sendinfo({linkId:a.seitenId+"-"+c+"-video-viewed",contentGroup:wt.contentGroup})),d=c,"undefined"!=typeof wt&&(wt.contentId=a.origContentId),setTimeout(function(){"Infinity"==h.video.duration&&(b.find(".fp-remaining, .fp-duration").css("visibility","hidden"),b.find(".fp-elapsed").css("visibility","visible"))},300)}),h.bind("unload",function(){""!==d?("undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==c?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+c:wt.contentId+"."+c,wt.sendinfo({linkId:a.seitenId+"-"+c+"-video-stopped",contentGroup:wt.contentGroup})),d=""):d=c,"undefined"!=typeof wt&&(wt.contentId=a.origContentId)}),h.bind("pause",function(){e=h.ready?h.video.time:0,f=h.ready?h.video.duration:0,f-1>=e&&"undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==c?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+c:wt.contentId+"."+c,wt.sendinfo({linkId:a.seitenId+"-"+c+"-video-paused",contentGroup:wt.contentGroup})),"undefined"!=typeof wt&&(wt.contentId=a.origContentId)}),h.bind("resume",function(){e=h.ready?h.video.time:0,f=h.ready?h.video.duration:0,0!==e&&f-1>=e&&"undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==c?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+c:wt.contentId+"."+c,wt.sendinfo({linkId:a.seitenId+"-"+c+"-video-resumed",contentGroup:wt.contentGroup})),e>=f-1&&1!==g&&"undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==c?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+c:wt.contentId+"."+c,wt.sendinfo({linkId:a.seitenId+"-"+c+"-video-viewed",contentGroup:wt.contentGroup})),e>=f-1&&0!==g&&(g=0),d=c,"undefined"!=typeof wt&&(wt.contentId=a.origContentId),setTimeout(function(){"Infinity"==h.video.duration&&b.find(".fp-elapsed").css("visibility","visible")},300)}),h.bind("finish",function(){"undefined"!=typeof wt&&(wt.contentId=wt.contentId.substring(wt.contentId.lastIndexOf(".")+1)==c?wt.contentId.substring(0,wt.contentId.lastIndexOf("."))+"."+c:wt.contentId+"."+c,wt.sendinfo({linkId:a.seitenId+"-"+c+"-video-finished",contentGroup:wt.contentGroup})),g=1,d="","undefined"!=typeof wt&&(wt.contentId=a.origContentId),setTimeout(function(){"Infinity"==h.video.duration&&b.find(".fp-elapsed").css("visibility","hidden")},200)}),h.bind("error",function(){})}})}(jQuery);