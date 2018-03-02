/*  ####################  Functionality to append marketdata by results of ajax call  ####################  */

/*  ####################  Functionality to load news from commerzbank.de via ajax call  ####################  */
function printNews( jsUrl , elmClass ) {
	/* AJAX OPTIONS */
	var options = {
		type : 'GET', 
		url : jsUrl + "?jscb=news",
		crossDomain : true,
		dataType : 'jsonp', 
		/* data : {get_param : "news"}, */
		jsonp: "jscb", 
		jsonpCallback: "cobanews", 
		cache: false,
		timeout: 30000,
		/*error : function(xhr, textStatus, errorThrown) { alert( "Es ist ein Fehler aufgetreten: " + errorThrown + " - " + xhr ); },*/
		error : function(xhr, textStatus, errorThrown) { /*alert( "Es ist ein Fehler aufgetreten: " + errorThrown + " - " + xhr );*/ },
		success : function(json){
			if ( json.news ) {
				/* init array */
				var items = [];
				/* push items */
				$.each( json.news, function( k, v ) {
					var item = json.news[k];
					//items.push( "<div class='mod mod-News'><a href='" + item.link + "'><div class='content'><h4>" + item.teaser + "</h4><p class='p-03'>" + item.text + "</p></div></a></div>" );
					items.push( "<li><a href=\"" + item.link + "\" class=\"l-s-03 news show-tooltip\" style=\"font-weight: normal;\" title=\"" + item.text + "\" target=\"_blank\">" + item.teaser + "</a></li>" );
				});
				/* print contents */
				$( "." + elmClass ).append( items.join( "" ) );
				mrm.util.ui.setEqualHeightPerRow($( "." + elmClass ).closest('.row'));
			 }
		}
	};
	/* do ajax request */
	$.ajax(options);
}

( function( $ ) {

	mrm.mod.Kontaktbox = mrm.mod.AbstractMod.extend( {

		events: {
			'click .hotline':  'callNumber'
		},

		prepare: function( callback ) {

			var $element 	= this.$ctx;
			var $parentTab = $element.closest( ".mod-Reiterset .resp-tab-content" );

			//check if "Kontaktbox" is nested in a "Reiterset"
			if( $element.closest( ".mod-Reiterset" ).length && !$parentTab.hasClass( "resp-tab-content-active" )) {

				// Set "div.tab-content" visible
				$parentTab.css({ 'display' : 'block'	});
				// calculate height of "div.tab-content"
				this.$tabs = this.$( '.tabs-set' ).tabs( {
					heightStyle: 'auto'
				} );
				// set "div.tab-content" invisible again
				$parentTab.css({ 'display'	: 'none' });

			} else {

				this.$tabs = this.$( '.tabs-set' ).tabs( {
					heightStyle: 'auto'
				} );
			}

			// check height of tile <ul>
			this.checkTileUlHeight();

			// change data-large-tile attribute
			this.largeTile();

			callback();
		},

		largeTile: function() {

			var $element = this.$ctx.find('.hotline').closest('.no-mobile');

			if ($('body').attr('data-viewport') === "smallViewport") {

				$element.each( function(i, obj) {

					$(obj).closest('ul').attr('data-tile-large', 'false');
				});

			} else {

				$element.each( function(i, obj) {

					$(obj).closest('ul').attr('data-tile-large', 'true');
				});
			}
		},

		checkTileUlHeight: function() {

			// var $element = $('.kbTiles');

			// $element.each( function(i, obj) {

			// 	if ($(obj).height() > 99) {

			// 		// add class on parent mod-Kontaktbox
			// 		$(obj).closest('.kb-04').addClass('altPad');

			// 	} else {

			// 		// remove class on parent mod-Kontaktbox
			// 		$(obj).closest('.kb-04').removeClass('altPad');
			// 	}
			// });
		},

		callNumber: function(e) {

			var $element 	= $(e.currentTarget);
			var _number 	= $element.data('tel');
			var _href 		= $element.attr('href');

			// prepend tel uri
			_number = 'tel:' + _number;

			// check if mobile device
			if (navigator.userAgent.match(/Mobi/) && !navigator.userAgent.match(/iPad/i)) {
				$element.attr('href', _number);
			} else {
				e.preventDefault();

				// window.location = _href;
			}
		},

		onBroadcastWindowResize: function() {
			this.update();

			// check height of tile <ul>
			this.checkTileUlHeight();

			// change data-large-tile attribute
			this.largeTile();
		},

		update: function() {

			var $element 	= this.$ctx;
			var $parentTab = $element.closest( ".mod-Reiterset .resp-tab-content" );

			//check if "Kontaktbox" is nested in a "Reiterset"
			if( $element.closest( ".mod-Reiterset" ).length && !$parentTab.hasClass( "resp-tab-content-active" )) {

				// Set "div.tab-content" visible
				$parentTab.css({ 'display' : 'block'	});
				// recalculate height of "div.tab-content"
				this.$tabs.tabs( 'refresh' );
				// set "div.tab-content" invisible again
				$parentTab.css({ 'display'	: 'none' });

			} else {

				this.$tabs.tabs( 'refresh' );

			}


		}

	} );
} )( jQuery );