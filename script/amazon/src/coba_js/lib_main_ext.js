/*!*
 * project: digitalstrategie / pk-projekt
 * version: 4.44.0
 *
 * changelog
 * - datepicker - removed button trigger
 * - datepicker - added updated plugin de-region
 * - datepicker - added date format
 * - datepicker - added iso date format for mobile browsers
 * - tab ie8 fix
 * - mrm.ui.infoBox.js
 */
 ( function( $ ) {
	$.widget( 'mrm.infoBox', {

		options: {
			my: 'left top',
			at: 'left bottom',
			collision: 'flip'
		},

		_isOpen: false,

		_create: function() {
			var that = this;
			this.$trigger = this.options.trigger ? this.element.find( this.options.trigger ) : this.element;
			this.$target = this.options.target ? this.element.find( this.options.target ) : $( this.element.attr( 'href' ) );

			// touchend event handler allows closing of flyout
			// when tapping on button while flyout is opened
			this.$trigger.on( 'click touchend', $.proxy( this._toggleMenu, this ) );

			// this.$target.append('<span class="close">x</close>');
			this.$target.find( '.close' ).on( 'click', function() {
				that.close();
			} );
		},

		_toggleMenu: function( event ) {
			if( event ) {
				event.stopPropagation();
				event.preventDefault();
			}

			if( this._isOpen ) {
				this.close();
			} else {
				this.open();
			}
		},

		open: function() {

			// close all open info boxes (#542)
			$('body > .info-box-msg').addClass('oldBox');
			$('.oldBox .close').trigger('click');

			this.$targetClone = this.$target.clone().removeAttr( 'id' ).appendTo( 'body' );

			// do not close flyout, when clicking on flyout itself
			this.$targetClone.find( '> div' ).on( 'click touchend', function( event ) {
				event.stopPropagation();
			} );

			this._setPosition();

			this.$targetClone.fadeIn( function() {

				/* IMPORTANT: class "open" (or at least any class) must be added to trigger reflow in IE */
				$( this ).focus().addClass( 'open' );
			} );
			this.$trigger.addClass( 'ui-state-opened' );

			this._isOpen = true;
			this._trigger( 'open' );
		},

		close: function() {

			if( this._isOpen ) {
				this.$trigger.removeClass( 'ui-state-opened' );
				this.$targetClone.fadeOut( 'fast', function() {
					$( this ).remove();
				} );

				this._isOpen = false;
				this._trigger( 'close' );
			}
		},

		update: function() {
			if( !this._isOpen ) {
				return;
			}

			this._setPosition();
		},

		_setPosition: function() {

			this.$targetClone.position( {
				my: this.options.my,
				at: this.options.at,
				of: this.$trigger,
				collision: this.options.collision,
				using: function( coords, feedback ) {
					$( this )
						.css( {
							left: coords.left + 'px',
							top: coords.top + 'px'
						} )
						.removeClass( function( index, css ) {
							return( css.match( /\btt-p-\w+/g ) || [] ).join( ' ' );
						} )
						.addClass( 'tt-p-' + feedback.vertical )
						.addClass( 'tt-p-' + feedback.horizontal );
				}
			} );
		}
	} );
} )( jQuery );

/* German initialisation for the jQuery UI date picker plugin. */
/* Written by Milian Wolff (mail@milianw.de). */
(function($) {
	$.datepicker.regional['de'] = {
		renderer: $.datepicker.defaultRenderer,
		monthNames: ['Januar','Februar','März','April','Mai','Juni',
		'Juli','August','September','Oktober','November','Dezember'],
		monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
		'Jul','Aug','Sep','Okt','Nov','Dez'],
		dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
		dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
		dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
		dateFormat: 'dd.mm.yy',
		firstDay: 1,
		prevText: '&#x3c;zurück', prevStatus: '',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
		nextText: 'Vor&#x3e;', nextStatus: '',
		nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
		currentText: 'heute', currentStatus: '',
		todayText: 'heute', todayStatus: '',
		clearText: '-', clearStatus: '',
		closeText: 'schließen', closeStatus: '',
		yearStatus: '', monthStatus: '',
		weekText: 'Wo', weekStatus: '',
		dayStatus: 'DD d MM',
		defaultStatus: '',
		isRTL: false
	};
	$.extend($.datepicker.defaults, $.datepicker.regional['de']);
})(jQuery);


/*  #################### Extension for lib_main  ####################  */
( function( $ ) {
	$.fn.jScrollPane.defaults = {
		showArrows					: false,
		maintainPosition			: true,
		stickToBottom				: false,
		stickToRight				: false,
		clickOnTrack				: true,
		autoReinitialise			: false,
		autoReinitialiseDelay		: 500,
		verticalDragMinHeight		: 0,
		verticalDragMaxHeight		: 99999,
		horizontalDragMinWidth		: 0,
		horizontalDragMaxWidth		: 99999,
		contentWidth				: undefined,
		animateScroll				: false,
		animateDuration				: 300,
		animateEase					: 'linear',
		hijackInternalLinks			: false,
		verticalGutter				: 4,
		horizontalGutter			: 4,
		mouseWheelSpeed				: 40,
		arrowButtonSpeed			: 0,
		arrowRepeatFreq				: 50,
		arrowScrollOnHover			: false,
		trackClickSpeed				: 0,
		trackClickRepeatFreq		: 70,
		verticalArrowPositions		: 'split',
		horizontalArrowPositions	: 'split',
		enableKeyboardNavigation	: true,
		hideFocus					: false,
		keyboardSpeed				: 0,
		initialDelay                : 300,        // Delay before starting repeating
		speed						: 40,		// Default speed when others falsey
		scrollPagePercent			: .8		// Percent of visible area scrolled when pageUp/Down or track area pressed
	};
} )( jQuery );

/*
 * Helper Method for sending tracking information
 */
function inlinePageTrack(suffix){
	if((typeof(wt) != "undefined") && suffix){
		if(wt && suffix){
             if(suffix.length>0) suffix = "-" + suffix;
             wt.sendinfo({contentId: wt.contentId + suffix, contentGroup: wt.contentGroup});
		}
	}
}

function inlineLinkTrack(suffix){
	if(typeof(webtrekkV3) == "function"){
		if((typeof(wt) != "undefined") && suffix){
             if(suffix.length>0) suffix = "-" + suffix;
             wt.sendinfo({linkId: wt.contentId + suffix });
		}
	}
}

/* SPRINT 38 */

( function( $ ) {

	mrm.mod.DcrmFormat15 = mrm.mod.AbstractMod.extend( {

		dialogWidth : 0,
		dialogHeight : 0,
		dialogRatio: 21/9,
		deviceOrientation : "portrait",
		windowWidthMq: '',

		prepare: function( callback ) {

			// mark element for ajaxRemove
			this.identifyAjaxRemove();

			// trigger dialog modal
			this.setDeviceOrientation();
			this.triggerDialog();
			this.setBgImage();

			// window width
			this.getWindowWidth();

			callback();
		},

		// add attribute to handle showing/closing behaviour.
		// needed for ajax call to remove teaser
		identifyAjaxRemove: function() {

			var $element 	= this.$ctx;
			var $parent 	= $element.closest('.ajaxContainer');
			var _id 		= $parent.attr('id');

			$element.attr('data-ajax-id', _id);
		},

		// do not show teaser again for current session
		ajaxRemove: function() {

			var _id 	= this.$ctx.attr('data-ajax-id');
			var _url 	= '/banking/rest/dcrm/removeteaser/' + _id;

			$.ajax({
				type 	: "post",
				url 	: _url,
				success : function(data) {
					//
				},
				error 	: function(data) {
					console.log('error dcrm15: ' + _id);
				}
			});

		},

		getWindowWidth: function() {

			// window.innerWidth value is equivalent to css mediaQuery
			// supported in modern browsers and ie9+
			if (window.innerWidth) {
				this.windowWidthMq = window.innerWidth;
			} else {
				this.windowWidthMq = $(window).width();
			}

		},

		setDeviceOrientation: function() {

			if ($(window).width() > $(window).height()) {
				this.deviceOrientation = "landscape";
			} else {
				this.deviceOrientation = "portrait";
			}

		},

		triggerDialog: function() {

			var self = this;
			var windowWidth = $(window).width();

			self.dialogWidth = $( "section.content" ).width();
			self.dialogHeight = (( self.dialogWidth ) / 21) * 9;

			// change modal ratio for portait mode on smaller screens
			if ($(window).width() < 800 && self.deviceOrientation == "portrait" ) {
				self.dialogWidth = $(window).width() / 100 * 70;
				self.dialogHeight = (self.dialogWidth / 2 * 3);
			}

			// change modal ratio for portait mode on small screens
			if ($(window).width() < 600 && self.deviceOrientation == "portrait" ) {
				self.dialogWidth = $(window).width() - 32;
				self.dialogHeight = (self.dialogWidth / 2 * 3);
			}

			// change modal ratio for landscape mode on small screens
			if ($(window).width() < 600 && self.deviceOrientation == "landscape" ) {
				self.dialogWidth = self.dialogWidth - 32;
				self.dialogHeight = (( self.dialogWidth ) / 21) * 9;
			}

			// initiate dialog
			$( "#dcrm-f15-dialog" ).dialog({
				modal: true,
				width: self.dialogWidth,
				height: self.dialogHeight,
				closeText: "",
				show: { effect: "fadeIn", duration: 600 },
				hide: { effect: "fadeOut", duration: 300 },
				dialogClass: "dcrmFormat15-dialog",
				resizeable : false,
				draggable: false,
				focus: function(event, ui) {
					$( ".ui-dialog a.btn" ).blur();
				},
				open : function() {
					self.setDialogPaddings();
					// add event listener on close button for ajaxRemove
					self.ajaxRemove();
				},
			});
		},

		setDialogPaddings : function() {

			var dialogContentHeight = $( ".mod-DcrmFormat15" ).height();
			var contentHeight = $( ".mod-DcrmFormat15 .content" ).height();

			// center content horizontally for landscape dialog
			var paddingTop = (dialogContentHeight - contentHeight) / 2;

			// if calculated padding is smaller 0 set 0
			if (paddingTop < 0) {
  				paddingTop = 0;
  			}

			//check if dialog is displayed on a small screen in portrait format
			if ($(window).width() < 800 && this.deviceOrientation == "portrait" ) {

			    // calculate padding for bottom content or set to "0" if top content
				if ($( ".dcrmFormat15-dialog .content" ).hasClass("content-bottom")) {
	      			paddingTop = $( ".dcrmFormat15-dialog" ).height() / 2;
				} else {
					paddingTop = 0;
				}

			}

  			// add css value
  			$( ".dcrmFormat15-dialog .content" ).css( "padding-top", paddingTop);

		},

		setBgImage: function() {

			var $mod = this.$ctx;
			var imageUrl = $mod.attr("data-bgLandscape");

			// set image according to viewport
			if ($(window).width() < 800 && this.deviceOrientation == "portrait") {
				var imageUrl = $mod.attr("data-bgPortrait");
			}

			$('.dcrmFormat15-dialog').css('background-image', 'url(' + imageUrl + ')');

		},

		onBroadcastWindowResize: function() {

			if ( $(".dcrmFormat15-dialog").is(":visible")) {
				// reinit dialog
				this.setDeviceOrientation();
				this.triggerDialog();
				this.setBgImage();

				this.setDialogPaddings();
			};
	    }
	} );
} )( jQuery );

( function( $ ) {

    mrm.mod.NavMeta = mrm.mod.AbstractMod.extend( {

        prepare: function( callback ) {

            // init url changes
            this.changeUrl();

            // set marginRight
            this.setMargin();

            // set width for elements in .wrapper-meta
            this.setWidth();

            callback();
        },

        _timeoutID: 0,

        setWidth: function() {

            var _navMetaWidth   = 0;
            var _sectionWidth   = $('section.content').innerWidth();
            var _searchWidth    = 0;
            var _navUserWidth   = 0;
            var _loginWidth     = 0;
            var _logoutWidth    = 0;
            var _widthLinks     = 0;
            var _maxWidth       = 0;
            var _submitWidth    = 0;
            var _navMetaSpace   = 0;
            var _largeInput     = false;
            var $navmeta        = this.$ctx;

            // if search exists
            if ($('.mod-Suche').length) {

                // get width of searchfield incl. margins
                _searchWidth = $('.mod-Suche').outerWidth(true);
            }

            // if search exists
            if ($('.mod-NavUser').length) {

                // get width of navUser element
                _navUserWidth = $('.mod-NavUser').outerWidth(true);
            }

            _widthLinks = 0;
            _maxWidth = 0;

            // get width of navMeta elements
            $navmeta.find('li').each( function(i, obj) {
                _navMetaSpace = _navMetaSpace + parseInt($(obj).outerWidth());
            });

            // reset classes
            $('.mod-HeaderLogin').removeClass('smallInputs');
            $('.mod-HeaderLogin').removeClass('hiddenInputs');

            // display for width calculation
            // $('.headerlogin-input-wrapper').show();

            // if login exists (inputs/button)
            if ($('.mod-HeaderLogin').length) {

                // get width of navUser element
                _loginWidth = $('.mod-HeaderLogin').outerWidth(true) + parseInt($('.mod-HeaderLogin').css('marginRight'));

                _submitWidth = $('#headerLoginSubmit').outerWidth(true);

                if ($('#teilnehmer').outerWidth() > 150) {
                    _largeInput = true;
                } else {
                    _largeInput = false;
                }
            }

            // hide after width calculation
            // $('.headerlogin-input-wrapper').hide();

            // if logout button exists
            if ($('.wrapper-meta > a.btn').length) {

                // get width of logout button
                _logoutWidth = $('.wrapper-meta > a.btn').outerWidth(true);
            }

            // if search exists
            if ($('.mod-Suche').length) {

                // get width of searchfield incl. margins
                _searchWidth = $('.mod-Suche').outerWidth(true) + parseInt($('.mod-Suche').css('marginRight'));
            }

            // if navUser exists
            if ($('.mod-NavUser').length) {

                // get width of navUser element
                _navUserWidth = $('.mod-NavUser').outerWidth(true) + parseInt($('.mod-NavUser').css('marginRight'));
            }

            // if navMeta exists
            if ($('.mod-NavMeta').length) {

                // get width of searchfield incl. margins
                _navMetaWidth = $('.mod-NavMeta').outerWidth(true);
            }

            // calculate max. possible width for teilnehmer/pin
            _maxWidth = _sectionWidth - _searchWidth - _navUserWidth - _navMetaWidth - _loginWidth - _logoutWidth;

            // calculate max. possible width for navmeta
            _widthLinks = _sectionWidth - _searchWidth - _navUserWidth - _logoutWidth - 120;

            if (_maxWidth > 58) {
                $navmeta.removeClass('multiRow');
                $navmeta.css({
                    'width': 'auto'
                });
            }

            // variant 2
            if (_maxWidth < 0 && !$('.mod-HeaderLogin').length) {

                // calculate max. possible width for teilnehmer/pin
                _maxWidth = _sectionWidth - _searchWidth -_navUserWidth - _navMetaWidth - _loginWidth - _logoutWidth;

                // calculate max. possible width for navmeta
                _widthLinks = _sectionWidth - _searchWidth - _navUserWidth - _submitWidth - _logoutWidth - 100;

                if (_navMetaSpace > _widthLinks) {

                    $navmeta.addClass('multiRow');

                    $navmeta.css({
                        'width': _widthLinks + 'px'
                    });
                }
            }

            // variant 1
            if (_maxWidth > -185 && _maxWidth < 0 && _largeInput === true && $('.mod-HeaderLogin').length) {

                if ($('.mod-HeaderLogin').length) {

                    // reset classes
                    $('.mod-HeaderLogin').removeClass('smallInputs');
                    $('.mod-HeaderLogin').removeClass('hiddenInputs');

                    // add class
                    $('.mod-HeaderLogin').addClass('smallInputs');

                    // get new width of login element
                    _loginWidth = $('.mod-HeaderLogin').outerWidth(true) + parseInt($('.mod-HeaderLogin').css('marginRight'));
                }
            }

            // variant 2
            if ((_maxWidth < 0 && _largeInput === false && $('.mod-HeaderLogin').length) || (_maxWidth < -185 && _largeInput === true && $('.mod-HeaderLogin').length)) {

                if ($('.mod-HeaderLogin').length) {

                    // reset classes
                    $('.mod-HeaderLogin').removeClass('smallInputs');
                    $('.mod-HeaderLogin').removeClass('hiddenInputs');

                    // add class
                    $('.mod-HeaderLogin').addClass('hiddenInputs');

                    // get new width of login element
                    _loginWidth = $('.mod-HeaderLogin').outerWidth(true) + parseInt($('.mod-HeaderLogin').css('marginRight'));
                }

                // calculate max. possible width for teilnehmer/pin
                _maxWidth = _sectionWidth - _searchWidth -_navUserWidth - _navMetaWidth - _loginWidth - _logoutWidth;

                // calculate max. possible width for navmeta
                _widthLinks = _sectionWidth - _searchWidth - _navUserWidth - _submitWidth - _logoutWidth - 100;

                if (_navMetaSpace > _widthLinks) {

                    $navmeta.addClass('multiRow');

                    $navmeta.css({
                        'width': _widthLinks + 'px'
                    });
                }
            }
        },

        changeUrl: function() {

            if ($('script#navMetaLanguages').length) {
                var $elements   = this.$ctx.find('a[data-language]');
                var _data       = JSON.parse(document.getElementById('navMetaLanguages').innerHTML);

                $elements.each( function(i, obj) {
                    var _language   = $(this).attr('data-language');
                    var _url        = _data['language-switch'][_language]['href'];

                    $(this).attr('href', _url);
                });
            }
        },

        setMargin: function() {

            var $element        = this.$ctx;
            var _containerWidth = parseInt($('section.content').css('width'));
            var _value          = parseInt(_containerWidth / 100) * 6;

            $element.css('marginRight', + _value + 'px');
        },

        onBroadcastWindowResize: function() {

            var self = this;

            // set marginRight
            this.setMargin();

            // set width for elements in .wrapper-meta
            // reset timeout
            clearTimeout(this._timeoutID);

            // calc max width
            this._timeoutID = setTimeout(function() {

                // calculate max. possible width
                self.setWidth();
            }, 400);
        }
    } );
} )( jQuery );

/* SPRINT 39 */
( function( $ ) {

	mrm.mod.Table = mrm.mod.AbstractMod.extend( {

		events: {
			'click .tb-toggle': 'toggle'
		},

		tableAddons: false,

		prepare: function( callback ) {
			this.winWidth = $(window).width();
			this.winHeight = $(window).height();

			this.sandbox.subscribe( 'broadcast', this );

			this.$tableAddons = this.$( '.prod-addon' ).hide();

			// custom scrollbar if table is wider/higher than parent container
			this.initScroller();

			//is done in AbstractMod but here again, because we can not deliver AbstractMod
			if( $.browser.msie && parseInt( $.browser.version, 10 ) < 9 ) {
				var $tables = this.$( 'table.tb-a-01, table.tb-a-02, table.tb-a-02-i'  );
				if( $tables.length ) {
					$tables.find( 'tr:even' ).addClass( 'odd' );
					$tables.find( 'tr:odd' ).addClass( 'even' );
				}
			}

			callback();
		},

		initScroller: function() {
			var checkOpen 		= false;
			var hasTab			= false;
			var hasAccordion	= false;
			var $element 		= this.$ctx;
			var $table 			= $element.children('.table-wrapper');
			var $container 		= $element.closest('.resp-tab-content:not(.resp-tab-content-active)');
			var $allContainer 	= $('.resp-tab-content');

			// check if table is in accordion
			if ($element.closest('details').length) {
				hasAccordion = true;

				// store open/close info of details element
				if ($element.closest('details').prop('open')) {
					checkOpen = true;
				}
			}

			// check if table is in tab
			if ($container.length) {
				hasTab = true;
			}

			// show hidden container to get height/width for tableScroller
			// if accordion
			if (hasAccordion) {
				// check browser support for details/summary
				if($.fn.details.support) {
					// show hidden container to get height
					$element.closest('details').prop('open', true);
				} else {
					// show hidden container to get height
					$element.closest('.ak-content').css('display', 'block');
				}
			}

			// if tab
			if (hasTab) {
				$container.show();
			}

			if (!this.scroller) {

				// create custom scrollbar
				var $item 		= $table.find('table');
				var $width 		= $item.css('width');
				var $parentW 	= $item.parent().css('width');
				var $parentH 	= $item.parent().css('height');
				var $height 	= parseInt( $item.css('height'), 10);

				// init custom scrollbar if necessary
				if(parseInt($width) > parseInt($parentW) || parseInt($height) > parseInt($parentH)) {
					// init custom scrollbar
					this.scroller = $table.jScrollPane({
						horizontalOffset: 2
					});
				}

				// recalculate the jspContainer height to fit the scrollbar below
				this.calculatejspContainerHeight();

			} else {
				// update custom scrollbar
				this.scroller.data('jsp').reinitialise();

				// recalculate the jspContainer height to fit the scrollbar below
				this.calculatejspContainerHeight();

			}

			// hide container shown for height calculation
			// but only if details property is not 'open'
			if (!checkOpen) {
				// check if accordion
				if (hasAccordion) {
					// check browser support for details/summary
					if ($.fn.details.support) {
						// hide container
						$element.closest('details').prop('open', false);
					} else {
						// hide container
						$element.closest('.ak-content').css('display', 'none');
					}
				}

				// if tab
				if (hasTab) {
					// hide all non-active tabs container
					$container.css('display', 'none');
				}
			}

		},

		calculatejspContainerHeight: function() {

			var $element = this.$ctx;

			// get height of custom scrollbar components
			$tableHeight 		   = $element.find("table").height();
			$scrollContainer 	   = $element.find(".jspContainer")
			$scrollContainerHeight = $scrollContainer.height();
			$scrollBarHeight	   = $element.find(".jspHorizontalBar").height();

			// calculate new height
			$newScrollContainerHeight	= $tableHeight + $scrollBarHeight + 2;
			// set new height
			$scrollContainer.height($newScrollContainerHeight);

		},

		onBroadcastWindowResize: function() {
			this.initScroller();
		},

		toggle: function( event ) {

			event.preventDefault();

			var $target 	= $( event.currentTarget );
			var $sibTable 	= $target.siblings( '.table-wrapper' ).find( 'table' );
			var $scroll 	= $sibTable.closest( '.jspContainer' );

			if( $target.is( '.ui-state-opened' ) ) {

				// hide content

				this.$tableAddons.hide( 0, function() {

					// recalculate height
					var $height 	= parseInt( $sibTable.css( 'height' ), 10 );
					var $newHeight 	= $height + 30;

					$scroll.css( 'height', $newHeight + 'px' );
				} );
			} else {

				// show content
				this.$tableAddons.show( 0, function() {

					// recalculate height
					var $height 	= parseInt( $sibTable.css( 'height' ), 10 );
					var $newHeight 	= $height + 30;

					$scroll.css( 'height', $newHeight + 'px' );
				} );
			}


			// toggle class
			$target.toggleClass( 'ui-state-opened' );
		}

	} );
} )( jQuery );

( function( $ ) {

	mrm.mod.DcrmFormat04 = mrm.mod.AbstractMod.extend( {

		events: {
	      'click .slider-trigger-hide': 'triggerHideTeaser',
	      'click .slider-trigger-show': 'triggerShowTeaser',
	      'click .slider-trigger-show-img': 'triggerShowTeaser',
	      'click .f04-close-button': 'triggerCloseTeaser'
	    },

		prepare: function( callback ) {

			// viewport check
			this.viewportCheck();

			//this.removeOnclick();

			callback();
		},

		viewportCheck: function() {

			var $mod 		= this.$ctx;
			var _modWidth 	= parseInt($mod.css('width'));

			if ( $(window).width() > 599 ) {

				// remove height style definition
				$mod.css('height', '');

				if (!$('body > .overflow-wrapper').length) {
					// clone element
					this.cloneTeaser();
				} else {
					$('body > .overflow-wrapper').show();
				}

				// prepare closing function
				//this.triggerCloseTeaser();

				if ( ! $( $mod ).hasClass('closed') ) {
					// prepare initial teaser animation
					this.triggerInitialAnimation();
				}

			} else {

				// phone: restore default values
				this.restoreValues();

				// set height
				$mod.css('height', _modWidth / 1.96585 + 'px');

			}
		},

		restoreValues: function() {

			var $elem = this.$ctx;
			var $overflowWrapper = $('body').find('.overflow-wrapper');

			$overflowWrapper.hide();

			$( ".mod-DcrmFormat04" ).removeClass('closed');
			$( ".overflow-wrapper" ).removeClass('closing sliding');

		},

		cloneTeaser: function() {

			var $elem = this.$ctx;

			// create new element
			$('<div class="overflow-wrapper">').prependTo('body');

			if ( $($elem).hasClass('closed')) {
				$( 'body > .overflow-wrapper' ).addClass( 'sliding' );
			};

			$elem.clone(true).prependTo( 'body > .overflow-wrapper' );
		},

		triggerCloseTeaser: function( event ) {

			// prevent browser from following link when triggers are clicked
			event.preventDefault();

			// close teaser
			$('.mod-DcrmFormat04').animate({
				'right': "-415px",
				'height': '124px'
				}, 200, function() {
			    	$( ".overflow-wrapper" ).fadeOut('slow');
				}
			);

		},

		triggerInitialAnimation: function() {

			var self = this;
			var $mod 	= this.$ctx;
			var $time = $( $mod ).data('timeout');

			/* Minify page according to timout */
			setTimeout(function(){
				self.triggerHideTeaser();
			}, $time);

		},

		triggerShowTeaser: function( event) {

			// prevent browser from following link when triggers are clicked
			event.preventDefault();

			// check if teaser is minified if true show teaser
			if ( $( ".mod-DcrmFormat04" ).hasClass('closed') ) {
				$( ".mod-DcrmFormat04" ).removeClass('closed');
				$( ".overflow-wrapper" ).removeClass('sliding');
				$( ".mod-DcrmFormat04 .slider-trigger-show" ).fadeOut( 100);
				$( ".mod-DcrmFormat04 .slider-trigger-hide" ).fadeIn( 100);
			};

		},

		triggerHideTeaser: function( event ) {

    		if (event) {
				// prevent browser from following link when triggers are clicked
				event.preventDefault();
			};

			// minfy teaser
			$( ".mod-DcrmFormat04" ).addClass('closed');
			$( ".overflow-wrapper" ).addClass('sliding');
			$( ".mod-DcrmFormat04 .slider-trigger-hide" ).fadeOut( 100);
			$( ".mod-DcrmFormat04 .slider-trigger-show" ).fadeIn( 100);

		},

		onBroadcastWindowResize: function() {
			// viewport check
			this.viewportCheck();
		},

		removeOnclick: function() {
			// check if teaser link has an inline onclick and remove it
			if ($('.mod-DcrmFormat04 > a').attr( "onclick" ) != undefined) {
				//get onclick value
				//var onclickValue = $('.mod-DcrmFormat04 > a').attr( "onclick" );
				//console.log(onclickValue);

				$('.mod-DcrmFormat04 > a').removeAttr( "onclick" ).click(function(){
					window.open("http://www.w3schools.com");
				});

			}

		}

	} );
} )( jQuery );

/* SPRINT 40 */
( function( $ ) {

	mrm.mod.NavFooter = mrm.mod.AbstractMod.extend( {

		prepare: function( callback ) {

			this.setDynamicLink();

			callback();
		},

		setDynamicLink: function() {

			var $element 	= this.$ctx;
			var $root 		= $element.closest('body');
			var $activeLink = $root.find('.mod-NavSparten li.active a');

			if ($activeLink.length) {

				var text 			= $.trim($activeLink.text());
				var $sitemapLink 	= $element.find('li a[href*="sitemap=true"]');
				var href 			= '';

				text = text.toLowerCase();

				text = text.replace(/\u00e4/g, "ae").replace(/\u00FC/g, "ue")
						.replace(/\u00F6/g, "oe").replace(/\u00DF/g, "ss")
						.replace(/[^a-z0-9]/gi, "_");

				if ($sitemapLink.length) {

					href = $sitemapLink.attr('href');

					$sitemapLink.attr('href', href + '#' + text);
				}
			}
		}
	} );
} )( jQuery );

/* SPRINT r2 hf */
/* ( function( $ ) {

	mrm.mod.NavHaupt = mrm.mod.AbstractMod.extend( {

		events: {
			'click': function( event ) {
				event.stopPropagation();
			},
			'touchend': function( event ) {
				event.stopPropagation();
			},
			'click .hn-02 > a': 'toggle',
			'click .hn-01 > a': 'toggle',
			'click .btn-nav-prev.active': 'slidePrev',
			'click .btn-nav-next.active': 'slideNext',
			'click .inner .menubar a': 'showMobileNavLevel'
		},

		windowWidthMq 		: '',
		noMobileNav 		: true,
		isMobile 			: false,
		clonedNavMeta 		: false,
		navTop 				: null,
		isPopup 			: false,
		isOpen 				: false,
		$menu 				: null,
		$btnPrev 			: null,
		$btnNext 			: null,
		_timeoutID 			: 0,
		$mobileHeader 		: '',

		init: function( $ctx, sandbox, modId ) {

			// call base constructor
			this._super( $ctx, sandbox, modId );

			// get viewport width
			this.getWindowWidth();

			// toggle burger nav icon
			$("#mobileHeader button, #mobileHeader i").on("click", this.toggleBurgerNavIcon);

			// toggle mobile navigation
			$("#mobileHeader button, #mobileHeader i").on("click", $.proxy(this.toggleMobileNav, this));

			// mobile navSparten event listener
			if ($('.mod-NavSparten').length || $('.mod-NavMeta').length) {
				$("body").on("click", ".triggerNavSparten", this.toggleMobileNavSparten);
			} else {
				$('.triggerNavSparten i').hide();
			}

			// back button mobile navigation
			$(".mobileNavBack").on("click", $.proxy(this.goBackMobile, this));

			// add class on all <li> with child <ul>
			this.$ctx.find('.menubar ul').each( function(i, obj) {
				$(obj).closest('li').addClass('containsList');
			});
		},

		prepare: function( callback ) {

			this.sandbox.subscribe( 'globalMenu', this );
			this.sandbox.subscribe( 'broadcast', this );
			this.sandbox.subscribe( 'teaserStatus', this );

			this.$ctx
				.append( '<div class="inner"><div class="menubar-wrapper"></div></div>' )
				.append( '<a class="btn-nav-prev"></a><a class="btn-nav-next active"></a>' );

			this.isPopup 	= $( 'body' ).hasClass( 'popup' );
			this.$menu 		= this.$ctx.find( '.menubar-wrapper' );
			this.$menu.append( this.$ctx.find( '.menubar' ) );
			this.$btnPrev 	= this.$ctx.find( '.btn-nav-prev' );
			this.$btnNext 	= this.$ctx.find( '.btn-nav-next' );

			// sticky mobile nav
			this.mobileHeaderSticky();

			// set mobile/desktop nav
			this.setNavigation();

			callback();
		},

		smartBannerCloseClicked: function() {

			// remove marginTop
			$('body').removeClass('smartBannerIsVisible');

			// remove body-click event listener
			$('body').off('click.smartBannerClose');
		},

		// get viewport width
		getWindowWidth: function() {

			// check viewport with matchMedia Function
			if (window.matchMedia !== undefined && window.matchMedia('all and (min-width: 1px)').matches) {

				//check viewport with matchMedia Function
				if (window.matchMedia("(min-width: 768px)").matches) {

					this.noMobileNav = true;

				} else {

					this.noMobileNav = false;

					this.isMobile = true;
				}

			} else {

				// window.innerWidth value is equivalent to css mediaQuery
				if (window.innerWidth) {

					// needed for ie9
					this.windowWidthMq = window.innerWidth;

				} else {

					// needed for ie8
					this.windowWidthMq = $(window).width();
				}

				// define viewport value for displaying mobile navigation
				if (this.windowWidthMq > 767 ) {

					this.noMobileNav = true;

				} else {

					this.noMobileNav = false;

					this.isMobile = true;
				}
			}

			if ($('body').attr('data-fixed-width') === 'true' ) {

				this.noMobileNav = true;

			}
		},

		setNavigation: function() {

			// var 'this.mobileNav' set in 'getWindowWidth' function
			if (this.noMobileNav === true) {

				// set scrollTop value to fix navigation
				this.initStickyNavigation();

				if (!this.isPopup) {
					// set megadropdown width
					this.setMegadropdownWidth();
				}

				// set megadropdown height
				this.initScroller();

				// remove mobile navigation
				this.deactivateMobileNav();

			} else {

				// prepare mobile nav
				this.initMobileNav();
			}
		},

		mobileHeaderSticky: function() {

			var $element		= $('#mobileHeader');
			var $wrapper 		= '<div class="wrapperMobileHeader"></div>';
			var $popupHeadline 	= $('.popup .wrapper-sparten > h3');

			$element.wrap($wrapper);

			this.$mobileHeader = $('.wrapperMobileHeader');

			//set headline for popup mobile header
			$popupHeadline.clone().appendTo($element);

		},

		initMobileNav: function() {

			var $header 			= $( "body > header, .body-inner > header" );
			var $navButton 			= $("#mobileHeader button");
			var $mobileNavContainer = $( ".mobileNavHeader, .mobileNavFooter" );
			var $navMetaList 		= $( ".mod-NavMeta > ul" );
			var $activePage 		= this.$ctx.find('.activePage');
			var $nextToActivePage	= $activePage.prev('li, h2');

			if (this.noMobileNav === false) {

				// if smartappbanner is visible:
				// add body-click event listener on smartappbanner close button
				$('body').on('click.smartBannerClose', '#smartbanner .sb-close', this.smartBannerCloseClicked);

	            // reset timeout
	            clearTimeout(this._timeoutID);

	            this._timeoutID = setTimeout(function() {

	            	// check if smartbanner for android is visible
	                if ($('#smartbanner').is(':visible')) {
						$('body').addClass('smartBannerIsVisible');
					}
	            }, 1);

				// add mobile class to header
				$header.addClass("mobileNav hidden");

				// remove inline styles from <header>
				$header.attr('style', '');

				// remove fixed header
				if ($('[data-fixed-header]').length) {

					$('body').attr('data-fixed-header', false);
				}

				// set burger nav icon 'inActive'
				$navButton.removeClass("isActive");

				// reinsert #mobileHeader
				this.$mobileHeader.insertBefore('body > div.main, .body-inner > div.main');
				$('#mobileHeader').show();

				// add mobile header markup
				$mobileNavContainer.show();

				// clone navMeta
				if (this.clonedNavMeta === false ) {
					$navMetaList.clone().appendTo( ".wrapper-sparten" ).addClass('navMetaList');

					this.clonedNavMeta = true;
				}

				// show mobile NavMeta
				$('.navMetaList').show();

				// asign class 'isMobile' to '.mod-NavHaupt'
				this.$ctx.addClass('isMobile');

				// change border color of next element
				if ($nextToActivePage.length < 1) {
					$nextToActivePage = $activePage.parent().prev('li, h2');

					// only get the first <a> of all children
					$nextToActivePage.find('> li:last a, > h2:last a').addClass('afterActivePage');
				} else {
					$nextToActivePage.children('a').addClass('afterActivePage');
				}

				// remove inline styles
				this.$ctx.find('.menubar-wrapper').css({
					'height': '',
					'width': '',
					'left': ''
				});

				// rearrange list with no <a> or <h2>.
				// these are lists separated for styling reasons to
				// show the links in next coloumn
				this.$ctx.find('.menubar ul').each(function() {

					// look for all <li> with <ul> as first child
					if ($(this).is(':first-child')) {

						// mark parent
						$(this).parent().addClass('hasLostLinks');

						// mark children
						$(this).children().addClass('lostLink');

						// mark destination list
						$(this).parent().prevAll().find('.containsList').first().addClass('lostLinksDestination');

						// clone items
						$(this).children().clone().appendTo($(this).parent().prevAll('.containsList').first().find('ul:last-child'));

						// remove parent class
						// todo: ccbf should not set hasSubNav on these <li>
						$(this).parent().removeClass('containsList');
					}
				});

				this.$ctx.removeClass( 'scrollmode' );

			};
		},
*/
		deactivateMobileNav: function() {

			// remove mobile class from header
			$( "body > header, .body-inner > header" ).removeClass("mobileNav hidden");

			// remove sticky mobile container
			$('#mobileHeader button').removeClass('isActive');
			$('#mobileHeader').hide();
			this.$mobileHeader.detach();

			// hide mobile header
			$( ".mobileNavHeader, .mobileNavFooter" ).hide();

			// remove class 'isMobile' from '.mod-NavHaupt'
			this.$ctx.removeClass('isMobile');

			// reinit sticky nav
			this.initStickyNavigation();

			// hide mobile NavMeta
			$('.navMetaList').hide();

			// mobile nav is inactive
			this.isMobileNavActive = false;

			// remove overlay element
			$('.siteOverlayMobileNav').remove();

			// reset overflow definition of body
			$('body').css('position', '');

			// remove visible class on all child <ul>
			this.$ctx.find('ul').removeClass('mobileVisible');

			// remove navBastardItems
			$('.lostLinksDestination .lostLink').remove();

			// enable fixed header
			if ($('[data-fixed-header]').length) {

				$('body').attr('data-fixed-header', true);

				// dcrm format10 and smartbanner rule
				if ($('.mod-DcrmFormat10').length) {

					if ($('.mod-DcrmFormat10').css('display') !== 'none') {

						$('body').attr('data-fixed-header', false);
					}
				}

				// dcrm format10 and smartbanner rule
				if ($('#smartbanner').length) {

					if ($('#smartbanner').css('display') !== 'none') {

						$('body').attr('data-fixed-header', false);
					}
				}
			}

			// close dropdown
			// otherwise reinitialization of some components necessary
			this.close();
		},

		toggleMobileNav: function(event) {
			event.preventDefault();

			var $activePage 	= this.$ctx.find('.activePage');
			var $activeList 	= $activePage.closest('ul');
			var $parentLists 	= $activePage.parents('ul');
			var $standardList 	= this.$ctx.find('.menubar');
			var $allMenus		= this.$ctx.find('.menubar-wrapper');
			var $body 			= $('body');
			var $siteOverlay 	= $('<div class="siteOverlayMobileNav"></div>');

			// show/hide mobile navigation
			$( 'header.mobileNav' ).toggleClass( 'hidden' );

			// hide nav sparten
			$( ".wrapper-sparten" ).removeClass( "visible" );
			$( ".triggerNavSparten i").removeClass( "open" );

			// reset all nav levels from 2nd level
			this.$ctx.find('ul ul').css({
			   'right' : '-100%',
			   'width' : '100%'
			});

			// remove visible class on all nav levels
			this.$ctx.find('ul').removeClass('mobileVisible');

			// create site overlay and prevent page scrolling
			if (!$('.siteOverlayMobileNav').length) {

				// create overlay element
				$body.append($siteOverlay);

				// prevent scrolling page below navigation
				$body.css('position', 'fixed');

			} else {

				// remove overlay element
				$('.siteOverlayMobileNav').remove();

				// reset overflow definition of body
				$body.css('position', '');
			}

			// check nav level
			if ($activePage.length) {

				// show navigation (parent <ul>) of active page
				$activeList.addClass('mobileVisible');

				if (!$('header.mobileNav').hasClass('hidden')) {
					// show grandparent of active page
					$parentLists.css('right', '0');
					$parentLists.show();
				}

				// modify mobileNavHeader
				this.modifyMobileNavHeader($activePage.closest('ul').parent('li').children().first());

			} else {

				$standardList.addClass('mobileVisible');

				// modify mobileNavHeader
				this.modifyMobileNavHeader();
			}

			// set mobile nav height
			this.setMobileNavHeight();
		},

		setMobileNavHeight: function(event) {

			var $element 			= $('.mobileVisible');
			var _footer 			= $('.mobileNavFooter');
			var _footerHeight 		= 0;
			var _height 			= 0;

			if (_footer.length) {
				_footerHeight 		= parseInt(_footer.height()) - 52;
			}

			console.log(_footerHeight);

			$element.children(':not(ul)').each( function(i, obj) {
				_height = _height + $(obj).height();
			});

			// remove inline style for height on all ul
			this.$ctx.find('ul').css('height', '');

			// set height of visible navigation list.
			// additional pixel needed for list gradient
			this.$menu.height(_height + _footerHeight + 'px');

			// also set visible list to same height
			$element.height(_height + _footerHeight + 'px');
		},

		showMobileNavLevel: function(event) {

			// check if mobile navigation is applied
			if (this.noMobileNav === false) {

				var $element 		= $(event.currentTarget);
				var $childList 		= $element.closest('li').children('ul');
				var $toggleSparten 	= $('a.triggerNavSparten');
				var $backButton 	= $('a.mobileNavBack');

				// check if clicked element is <h2>
				// and parent <li> contains more than one <ul>
				if ($element.closest('h2').length && $element.closest('li').children('ul').length) {
					$childList = $element.closest('h2').next('ul');
				}

				// only preventDefault if menu has submenus
				// otherwise follow href destination
				if ($childList.length) {

					event.preventDefault();

					// remove visible class on all child <ul>
					this.$ctx.find('ul').removeClass('mobileVisible');

					// slide in child <ul>
					$childList.addClass('mobileVisible');
					$childList.animate({right: "0%"}, 500);
					$childList.show();

					// scroll to top of navigation list
					this.$ctx.animate({
						scrollTop: this.$ctx.offset().top - 99999
					});

					// modify mobileNavHeader
					this.modifyMobileNavHeader($element);

				}

				// set mobile nav height
				this.setMobileNavHeight();
			}
		},

		goBackMobile: function(event) {
			event.preventDefault();

			var $element 		= $(event.currentTarget);
			var $activeList 	= this.$ctx.find('.mobileVisible');
			var $parentList 	= $activeList.closest('li').closest('ul');
			var $parentLink 	= $parentList.closest('li').children().first();
			var $toggleSparten 	= $('a.triggerNavSparten');
			var $backButton 	= $('a.mobileNavBack');

			// hide active slide
			$activeList.animate({right: "-100%"}, 500);
			$activeList.removeClass('mobileVisible');

			$parentList.addClass('mobileVisible');

			// modify mobileNavHeader
			this.modifyMobileNavHeader($parentLink);

			// set mobile nav height
			this.setMobileNavHeight();
		},

		modifyMobileNavHeader: function(event) {

			var $element 		= $(event);
			var _href 			= $element.attr('href');
			var $activeList 	= this.$ctx.find('.mobileVisible');
			var $descriptor 	= $('.levelDescriptor');
			var $toggleSparten 	= $('a.triggerNavSparten');
			var $backButton 	= $('a.mobileNavBack');
			var $activeSparte 	= $( ".mod-NavSparten" ).find( "li.active a" );
			var _popupHeadline 	= $('.popup .wrapper-sparten > h3').text();

			// check nav level
			if ($activeList.closest('ul').hasClass('menubar') || $activeList.hasClass('menubar')) {

				// hide back button
				$backButton.hide();

				// show sparten toggle
				$toggleSparten.show();

				// mark descriptor link
				$descriptor.addClass('removeMe');

				// clone sparte
				if (!$activeSparte.length) {
					$('<span class="levelDescriptor">' + _popupHeadline + '</span>').insertAfter('.levelDescriptor');
				} else {
					$activeSparte.clone(true).insertAfter('.levelDescriptor').addClass('levelDescriptor');
				}

				// remove placeholder (marked descriptor link)
				$('.mobileNavHeader .removeMe').remove();

			} else {

				// hide sparten toggle
				$toggleSparten.hide();

				// show back button
				// show() added display:inline on element
				$backButton.css('display', 'inline-block');

				// mark descriptor link
				$descriptor.addClass('removeMe');

				// clone clicked link and show in mobileNavHeader
				$element.clone(true).insertAfter('.levelDescriptor').addClass('levelDescriptor');

				// add destination link for level 1 nav items
				if ($element.attr('data-nav-href')) {
					$('.levelDescriptor').attr('href', $element.attr('data-nav-href'));
				}

				// check for noSecureIcon class
				if ($element.closest('h2, li').hasClass('noSecureIcon')) {
					$('.levelDescriptor').find('i').hide();
				}

				// remove placeholder (marked descriptor link)
				$('.mobileNavHeader .removeMe').remove();
			}
		},

		toggleBurgerNavIcon: function(event) {
			event.preventDefault();

			var $element = $('#mobileHeader button');

			if ($element.hasClass("isActive")) {
				$element.removeClass("isActive");
			} else {
				$element.addClass("isActive");
			};
		},

		toggleMobileNavSparten: function(e) {

			e.preventDefault();

			$( ".wrapper-sparten" ).toggleClass( "visible" );
			$( ".triggerNavSparten i").toggleClass( "open" );
		},

		toggle: function( event ) {

			if (this.noMobileNav === true) {
				// only preventDefault if menu has submenus
				if ($(event.currentTarget).next('ul').length) {
					event.preventDefault();
				}

				var self = this;
				var $target = $( event.currentTarget );
				var $li = $target.closest( 'li' );
				var $row = $target.next( 'ul.row' );

				// check if clicked element is tiles naviagtion
				$isTilesNavi =  false;

				if ($(event.currentTarget).closest('li').hasClass('iconTiles')) {
					$isTilesNavi = true;
				}

				this.checkPosition( $li );

				this.$menu.filter( ':animated' ).promise().done( function() { // wait for any menu sliding animation to be done before showing megadropdown
					// clone active ul
					self.$( '.inner > .row' ).remove();

					if ( $isTilesNavi === true) {
						$row.clone().addClass('iconTiles').appendTo( self.$ctx.find( '.inner' ) ); // kontaktreiter
					} else {
						$row.clone().appendTo( self.$ctx.find( '.inner' ) );
					}

					if( $li.hasClass( 'open' ) ) {
						self.close( $li );
					} else {
						self.open( $li, $row ); // kontaktreiter
					}

					// height of dropdown content
					self.setMegadropdownHeight();
				} );
			}
		},


		setMegadropdownHeight: function() {

			if( !this.isPopup ) {
				var $element = $( '.inner > .row' );
				var $dropdownHeight = $element.height();
				var $viewportHeight = $( window ).height() - 200;

				if( $viewportHeight <= $dropdownHeight ) {
					$element.css( {
						'height': $viewportHeight + 'px'
					} );

					this.initScrollbar();
				}
			}
		},

		initScrollbar: function() {
			var $element 	= this.$( '.inner > .row' );
			var $newHeight 	= $element.height() + 51;

			if ( !$( '.inner > .row' ).hasClass('iconTiles') ) {
				// init scroller
				this.scrollbar = $( '.inner > .row' ).jScrollPane( {
					verticalOffset: 16
				} );
			};


			// update css
			$element.css({
				'height': $newHeight + 'px',
				'padding-top': '21px',
				'padding-left': '16px'
			});
		},

		update: function() {
			this.scrollbar.data( 'jsp' ).reinitialise();
		},

		open: function( $li, $row ) {
			this.closeAll();

			$li.addClass( 'open' );

			this.fire( 'globalMenuOpen', [ 'globalMenu' ] );

			// show cloned megadropdown only
			$li.find( '.menu' ).hide();

			this.$( '.inner > .row' ).show();

			if( this.isPopup || $isTilesNavi) {
				if( $isTilesNavi ) {
					// initialize tiles naviagtion
					this.initTilesNavigation();
				}

				if (this.noMobileNav === true) {
					// set megadropdown pos
					this.setMegadropdownPos( $li );
				}
			}

			this.isOpen = true;
		},

		close: function() {
			this.isOpen = false;
			this.closeAll();

			if (this.noMobileNav === true) {
				this.$menu.css( 'height', 'auto' );
			}

			// remove cloned element
			this.$( '.inner > .row' ).remove();
		},

		closeAll: function() {
			this.$( '.open' ).removeClass( 'open' );
		},

		onBroadcastBodyClick: function( event ) {
			this.close();
		},

		onGlobalMenuOpen: function() {
			this.close();
		},

		onBroadcastWindowResize: function() {

			// check viewport size
			this.getWindowWidth();

			if (this.noMobileNav === true) {

				this.initScroller();

				var openDropdown = this.$ctx.find( 'li.open' );

				if( !this.isPopup ) {
					// set megadropdown width
					this.setMegadropdownWidth();
				}

				if( this.isOpen && this.isPopup ) {
					// set megadropdown pos
					this.setMegadropdownPos( openDropdown );
				}

				if ($( openDropdown ).hasClass('iconTiles')) {
					this.setMegadropdownPos(openDropdown)
				};

				// remove mobile navigation
				this.deactivateMobileNav();

			} else {

				// prepare mobile nav
				if (!$('header').hasClass('mobileNav')) {
					this.initMobileNav();
				}
			}
		},

		onBroadcastOrientationChange: function() {

			// check viewport size
			this.getWindowWidth();

			if (this.noMobileNav === true) {

				this.close();

				// remove mobile navigation
				this.deactivateMobileNav();

			} else {

				// prepare mobile nav
				if (!$('header').hasClass('mobileNav')) {
					this.initMobileNav();
				}
			}
		},

		// communicates with other elements to determine
		// at which scroll position to fixate navigation
		//
		// modes:
		// - standard
		// - dcrmFormat10
		// - smartAppBanner
		initStickyNavigation: function(x) {

			var self 				= this;
			var $element 			= this.$ctx;
			var $header 			= this.$ctx.closest( 'header' );
			var $meta 				= $header.find('.wrapper-meta');
			var $sparten 			= $header.find('.wrapper-sparten');
			var _height 			= 0;
			var _format10Height		= 0;
			var _smartbannerHeight 	= 0;

			// set initial height for dcrm10
			if ($('.mod-DcrmFormat10').length) {

				_format10Height = $('.mod-DcrmFormat10').outerHeight();

				if ($('.mod-DcrmFormat10').css('display') === 'none') {
					_format10Height = 0;
				}
			}

			// set initial height for smartbanner
			if ($('#smartbanner').length) {

				_smartbannerHeight = parseInt($('#smartbanner').outerHeight()) - 6;

				if ($('#smartbanner').css('display') === 'none') {
					_smartbannerHeight = 0;
				}
			}

			// set dcrm10/smartbanner height to zero if closed
			if (x) {

				if (isNaN(x)) {

					if (x === 'smartBannerClosed' || $('#smartbanner').css('display') === 'none') {
						_smartbannerHeight = 0;
					}

					if (x === 'closed' || $('.mod-DcrmFormat10').css('display') === 'none') {
						_format10Height = 0;
					}

				} else {

					// if x is number
					_format10Height = x;

					if ($('#smartbanner').css('display') === 'none') {
						_smartbannerHeight = 0;
					}
				}
			}

			if (!$('[data-fixed-header]').length) {

				// calculate header height
				_height = $element.height() + $meta.height() + $sparten.height();

				// set height
				$header.height( _height );
			}

			// set sticky position
			this.navTop = $meta.height() + $sparten.height() + _smartbannerHeight + _format10Height;
		},

		// event listener for:
		// - dcrmFormat10
		// - smartbanner
		onFixedNavPos: function(x) {

			this.initStickyNavigation(x.teaserState);
		},

		onBroadcastWindowScroll: function() {

			if ( (this.noMobileNav === true && $('body').attr('data-fixed-header') !== 'true') || ($('body').attr('data-fixed-header') === 'true' && this.isMobile === true)) {
				if( $( document ).scrollTop() > this.navTop ) {
					this.$ctx.addClass( 'sticky' );

					// dashboard changes
					if ($('.mod-DashboardHeader').length) {
						$('.mod-DashboardHeader').addClass( 'sticky' );
					}
				} else {
					this.$ctx.removeClass( 'sticky' );

					// dashboard changes
					if ($('.mod-DashboardHeader').length) {
						$('.mod-DashboardHeader').removeClass( 'sticky' );
					}
				}
			}
		},

		initScroller: function() {
			var scrollWidth 	= 0;
			var _dWidth 		= parseInt(this.$('.inner').width()) - parseInt($('.mod-DashboardHeader').innerWidth()) - 140;
			var openDropdown 	= this.$ctx.find( 'li.open' );

			this.resetScroller();

			// dashboard changes
			if ($('.mod-DashboardHeader').length) {
				this.$menu.css('width', _dWidth + 'px');
			}

			// hide tile navigation if scroller is initialized
			if( $( openDropdown ).hasClass('iconTiles' ) ) {
				$( '.inner > .iconTiles' ).hide();
			}

			// calculate real navigation width
			this.$menu.find( '.menubar > li' ).each( function() {
				scrollWidth = scrollWidth + $( this ).outerWidth( true );
			} );

			// check if scroller is needed
			if( this.$menu.width() < scrollWidth ) {
				var $inner 			= this.$('.inner');
				var $innerMargin 	= parseInt($inner.offset().left);

				// dashboard changes
				if ($('.mod-DashboardHeader').length) {
					var $innerWidth = _dWidth;
				} else {
					var $innerWidth = $inner.width();
				}

				// var $innerWidth 	= $inner.width();
				var $innerPadding 	= parseInt($inner.css('paddingLeft'));
				var $innerRight 	= $innerWidth + $innerMargin + $innerPadding;
				var $innerLeft 		= $innerMargin + $innerPadding;
				var $prevWidth 		= parseInt(this.$btnPrev.css('width'));
				var $pos 			= $innerMargin + $innerPadding - $prevWidth;
				var $windowWidth	= parseInt($(window).width());

				this.$ctx.addClass( 'scrollmode' );

				// set horizontal of position "previous" & "next" buttons
				this.$menu.css('left', parseInt(this.$btnPrev.css('width')) + 'px');
				this.$menu.css('width', $innerWidth - parseInt(this.$btnPrev.css('width')) + 'px');
				this.$btnPrev.css( 'left', $innerLeft);
				this.$btnNext.css( 'left',$innerRight - $prevWidth );
				if ($('.mod-DashboardHeader').length) {
					this.$menu.css('width', _dWidth);
					this.$btnNext.css( 'left',$innerRight);
				}

				// old code
				// if( !this.isPopup ) {

				// 	if ($(window).width() >= 1080) {
				// 		this.$btnPrev.css( 'left', $innerLeft - $prevWidth + 1 );
				// 		this.$btnNext.css( 'left', $innerRight -1 );
				// 		this.$menu.css('left', 'auto'); // reset position on resize
				// 		this.$menu.css('width','auto'); // reset width on resize
				// 		if ($('.mod-DashboardHeader').length) {
				// 			this.$menu.css('width', _dWidth);
				// 		}
				// 	} else {
				// 		this.$menu.css('left', parseInt(this.$btnPrev.css('width')) + 'px');
				// 		this.$menu.css('width', $innerWidth - parseInt(this.$btnPrev.css('width')) + 'px');
				// 		this.$btnPrev.css( 'left', $innerLeft);
				// 		this.$btnNext.css( 'left',$innerRight - $prevWidth );
				// 		if ($('.mod-DashboardHeader').length) {
				// 			this.$menu.css('width', _dWidth);
				// 			this.$btnNext.css( 'left',$innerRight);
				// 		}
				// 	}
				// }

			} else {
				this.$ctx.removeClass( 'scrollmode' );
			}
		},

		resetScroller: function() {
			this.$menu.scrollLeft( 0 );
			this.$btnPrev.removeClass( 'active' );
			this.$btnNext.addClass( 'active' );

			// reset menu position
			this.$menu.css('left', 'auto');
			this.$menu.css('width','auto');
		},

		setMegadropdownWidth: function() {
			var $megadropdown 	= $( '.inner .menu' );
			var contentWidth 	= $( 'section.content' ).outerWidth();

			$( $megadropdown ).each( function(){
				if ( ! $( this ).closest('li').hasClass('iconTiles') && ! $( this ).hasClass('iconTiles') ) {
					$( this ).css( 'width', contentWidth );
				}
			});
		},

		setMegadropdownPos: function( $navItem ) {

			var $megadropdown = this.$( '.inner > .row' );

			// check type of dropdown an reposition according to it
			if ( $($megadropdown).hasClass('iconTiles') ) {

				$megadropdown.position( {
					my: 'right top',
					at: 'right bottom',
					of: $( '.menubar > li.iconTiles' ),
					collision: 'none'
				} );
			} else {

				$megadropdown.position( {
					my: 'left top',
					at: 'left bottom',
					of: $navItem,
					collision: 'flip'
				} );
			};


		},

		slidePrev: function( event ) {

			if( event !== undefined ) {
				event.preventDefault();
			}

			var self = this;
			var $navItem = this.getNavItem( 'left' );

			// hide megadropdown
			this.$( '.inner > .row' ).hide();

			self.closeAll();

			this.$menu.animate( {
					scrollLeft: $navItem.position().left
				},
				300,
				function() {
					if( self.$menu.scrollLeft() === 0 ) {
						self.$btnPrev.removeClass( 'active' );
					}
					self.$btnNext.addClass( 'active' );
				}
			);
		},

		slideNext: function( event ) {

			if( event !== undefined ) {
				event.preventDefault();
			}

			var self 		= this;
			var $navItem 	= this.getNavItem( 'right' );
			var _marginAuto = (parseInt(this.$ctx.width()) - parseInt(this.$ctx.find('.inner').width())) / 2 - 24;

			if (_marginAuto < 0 ) {
				_marginAuto = 0;
			}

			// hide megadropdown
			this.$( '.inner > .row' ).hide();

			self.closeAll();

			this.$btnPrev.addClass( 'active' );

			// check if $navItem is undefined
			if ( !$navItem ) {
				$navItem = self.$menu.find( '.menubar > li' ).last();
			}

			if( $navItem.is( ':last-child' ) ) {
				this.$btnNext.removeClass( 'active' );
			}

			this.$menu.animate( {
				scrollLeft: Math.abs($navItem.position().left + _marginAuto + $navItem.outerWidth( true ) - this.$btnNext.position().left + self.$menu.position().left)
			}, 300 );
		},

		getNavItem: function( direction ) {
			var self 		= this;
			var found 		= false;
			var _marginAuto = (parseInt(this.$ctx.width()) - parseInt(this.$ctx.find('.inner').width())) / 2 - 65;
			var $navItem;

			if( direction === 'right' ) {

				self.$menu.find( '.menubar > li' ).each( function() {
					if( (self.$btnNext.position().left < $( this ).position().left + _marginAuto + $( this ).outerWidth( true ) - self.$menu.scrollLeft() + self.$menu.position().left - 1) && !found) { // - 1 voodoo firefox
						$navItem = $( this );
						found = true;
						return false; // break
					}
				} );
			} else {
				self.$menu.find( '.menubar > li' ).each( function() {
					if( self.$menu.scrollLeft() <= $( this ).position().left ) {
						return false; // break
					}
					$navItem = $( this );
				} );
			}

			return $navItem;
		},

		checkPosition: function( $navItem ) {

			var leftBoundary = this.$menu.scrollLeft();
			var rightBoundary = this.$menu.width() + this.$menu.scrollLeft();

			if( $navItem.position().left < leftBoundary ) {
				this.slidePrev();
			} else if( $navItem.position().left + $navItem.outerWidth( true ) > rightBoundary ) {
				this.slideNext();
			}
		},

		initTilesNavigation: function () {

			var tilesDropdown = $( '.inner > .menu.iconTiles' );
			var tiles = $( '.inner > .menu.iconTiles > li > h2' );

			// change markup structure
			tiles.unwrap()
			tilesDropdown.replaceWith($( '<div class="menu row iconTiles" style="display:block;">' + tilesDropdown.html() + '</div>' ));
			$( '.inner > .menu.iconTiles > h2.tl-02' ).appendTo( '.inner > .menu.iconTiles' );

			// check for coulms with empty tile spaces
			var countTiles =  $( '.inner > .menu.iconTiles > h2.tl-01' ).length;
			var countMobileTiles =  $( '.inner > .menu.iconTiles > h2.tl-01' ).not( '.no-mobile' ).length;

			if ( $( '.inner > .menu.iconTiles' ).width() > 210 ) {
				if ( (countTiles % 3) == 1 ) {
					$( '.menu.iconTiles h2.tl-01' ).last().css( 'width', '272px' );
				} else if ( (countTiles % 3) == 2 ) {
					$( '.menu.iconTiles h2.tl-01' ).last().css( 'width', '178px' );
				};
			} else {
				if ( (countMobileTiles % 2) == 1 ) {
					$( '.menu.iconTiles h2.tl-01' ).last().css( 'width', '178px' );
				}
			};

		}

	} );
} )( jQuery );

( function( $ ) {

	mrm.mod.DcrmFormat10 = mrm.mod.AbstractMod.extend( {

		events: {
			'click .f10-close-button': 'ajaxRemove'
		},


		prepare: function( callback ) {

			this.sandbox.subscribe( 'teaserStatus', this );

			// mark element for ajaxRemove
			this.identifyAjaxRemove();


			// check browser version
			var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);

			if ( isIE11 || $.browser.msie && parseInt( $.browser.version, 10 ) < 11 ) {
				this.initFlyOutTopIE();
				$( 'html' ).addClass( 'msie11' );
				if ( ! $( 'html' ).hasClass( 'msie' ) ) {
					$( 'html' ).addClass( 'msie' );
				};
			} else {
				this.initFlyOutTop();
			}

			callback();
		},

		// add attribute to handle showing/closing behaviour.
		// needed for ajax call to remove teaser
		identifyAjaxRemove: function() {

			var $element 	= this.$ctx;
			var $parent 	= $element.closest('.ajaxContainer');
			var _id 		= $parent.attr('id');

			$element.attr('data-ajax-id', _id);
		},

		// do not show teaser again for current session
		ajaxRemove: function() {

			var _id 	= this.$ctx.attr('data-ajax-id');
			var _url 	= '/banking/rest/dcrm/removeteaser/' + _id;

			$.ajax({
				type 	: "post",
				url 	: _url,
				success : function(data) {
					//
				},
				error 	: function(data) {
					console.log('error dcrm10: ' + _id);
				}
			});

			// enable fixed header
			if ($('[data-fixed-header]').length) {

				// smartbanner rule
				if ($('#smartbanner').length) {

					if ($('#smartbanner').css('display') !== 'none') {

						$('body').attr('data-fixed-header', false);

					} else {

						$('body').attr('data-fixed-header', true);
					}

				} else {

					$('body').attr('data-fixed-header', true);
				}
			}

			// status changed
			this.fire('fixedNavPos', {teaserState: 'closed'}, ['teaserStatus']);

		},

		initFlyOutTop: function() {


			var $self 	= this.$ctx;
			var self 	= this;

			// add module to html body
			if ($('#smartbanner').length) {

				$( "#smartbanner" ).after( $self );

			} else {

				$( "body" ).prepend( $self );
			}

			// check viewport with matchMedia Function
			if (window.matchMedia !== undefined && window.matchMedia('all and (min-width: 1px)').matches) {
				if (window.matchMedia("(min-width:600px)").matches) {
					$self.slideDown(200);
				}

			} else {

				// needed for ie8
				if (!window.innerWidth) {
					if ($(window).width() > 600) {
						$self.slideDown(200);
					}
				}
			}

			$( ".slider-trigger, .f10-content-min" ).click(function(){

				if ($( ".f10-teaser" ).hasClass("min") ) {

					$( ".f10-teaser" ).toggleClass("min"); // remove when animate active
					$( ".mod-Flyout" ).animate({top: "541px"}, 2000, "easeOutExpo");
					$( ".f10-close-button").hide();
					$( ".f10-content-min" ).fadeOut( 1000, function() {

						var tHeight = $(".f10-teaser").height();
						var textHeight = $(".f10-content-max").height();
						if (tHeight > textHeight) {
							$(".f10-content-max").css('padding-top', (tHeight - textHeight) / 2);
						}

						$( ".f10-content-max, .f10-close-button" ).fadeIn(1000);
					});
					$( ".slider-trigger i" ).removeClass("i-997");
					$( ".slider-trigger i" ).addClass("i-998");

					// status changed
					self.fire('fixedNavPos', {teaserState: 250}, ['teaserStatus']);
				} else {

					$( ".f10-teaser" ).toggleClass("min"); // remove when animate active
					$( ".mod-Flyout" ).animate({top: "341px"}, 2000, "easeOutExpo");
					$( ".f10-close-button").hide();
					$( ".f10-content-max" ).fadeOut(1000, function() {
						$( ".f10-content-min, .f10-close-button" ).fadeIn(1000);
					});
					$( ".slider-trigger i" ).removeClass("i-998");
					$( ".slider-trigger i" ).addClass("i-997");

					// status changed
					self.fire('fixedNavPos', {teaserState: 70}, ['teaserStatus']);
				}

			});


			$( ".f10-close-button" ).click(function(){
				$(".f10-container").slideUp(200);
				$( ".mod-Flyout" ).animate({top: "266px"}, 200, "linear");
			});

		},

		initFlyOutTopIE: function() {

			var $self 	= this.$ctx;

			// add module to html body
			$( "body" ).prepend( $self );
			// set visible
			if ($(window).width() >= 600 ) {
				$self.slideDown(100);
			}

			$( ".slider-trigger, .f10-content-min" ).click(function(){

				if ($( ".f10-teaser" ).hasClass("min") ) {
					// --> open teaser
					$( ".f10-teaser" ).toggleClass("min");
					$( '.f10-teaser' ).animate({
   					    'height' : '250px',
					    'backgroundSize' : '1200px',
   						'max-width' : '1200px',
						'background-position-x' : '50%',
						'background-position-y' : '50%'
					}, 1000 );

					$( ".f10-close-button").hide();
					$( ".f10-content-min" ).fadeOut( 1000, function() {
						// center content vertically
						var tHeight = $(".f10-teaser").height();
						var textHeight = $(".f10-content-max").height();
						if (tHeight > textHeight) {
							$(".f10-content-max").css('padding-top', (tHeight - textHeight) / 2);
						}

						$( ".f10-content-max, .f10-close-button" ).fadeIn(1000);
					});
					$( ".slider-trigger i" ).removeClass("i-997");
					$( ".slider-trigger i" ).addClass("i-998");
				} else {
					// --> close teaser
					$( ".f10-teaser" ).toggleClass("min");
					$( '.f10-teaser' ).animate({
					    'height' : '70px',
					    'backgroundSize' : '600px',
						'max-width' : '1048px',
						'background-position-x' : '0%',
						'background-position-y' : '30%'
					}, 1000 );
					$( ".f10-close-button").hide();
					$( ".f10-close-button").hide();
					$( ".f10-content-max" ).fadeOut(1000, function() {
						$( ".f10-content-min, .f10-close-button" ).fadeIn(1000);
					});
					$( ".slider-trigger i" ).removeClass("i-998");
					$( ".slider-trigger i" ).addClass("i-997");
				}

			});

			$( ".f10-close-button" ).click(function(){
				$(".f10-container").slideUp(200);
				$( ".f10-close-button").hide();
			});

		}

	} );
} )( jQuery );

/* SPRINT 44 */
( function( $ ) {
	mrm.mod.Global = mrm.mod.Abstract.extend( {

		events: {
			'click': 'onBodyClick',
			'touchend': 'onBodyClick',
			'click .new-window': 'triggerPopup',
			'click .btn-dialogAlt': 'triggerDialogAlternative',
			'click a[data-tracking-id]': 'trackingId',
			'click a[data-social="shareDelicious"]': 'deliciousShare',
			'click a[data-social="shareEmail"]': 'emailShare',
			'click a[data-social="shareFacebook"]': 'fbShare',
			'click a[data-social="shareGooglePlus"]': 'gplusShare',
			'click a[data-social="shareLinkedIn"]': 'linkedInShare',
			'click a[data-social="shareTwitter"]': 'twitterShare',
			'click a[data-social="shareXing"]': 'xingShare',
			'click a[href^="#"]': 'internalScroll',
			'click input.hasDatepicker': 'adjustTopPosition',
			'click #smartbanner .sb-close': 'fixHeader',
			'click a.btn, span.btn, button.btn': 'blurButtonOnClick',
			'touchend a.btn, span.btn, button.btn': 'blurButtonOnClick'
		},

		_popup 			: false,
		shareURI 		: encodeURIComponent(location.href),
		hasViewport		: "",
		windowWidthMq	: '',
		isTouchDevice 	: 'ontouchstart' in document.documentElement,

		init: function( $ctx, sandbox, modId ) {
			// call base constructor
			this._super( $ctx, sandbox, modId );

			this.sandbox.subscribe( 'globalMenu', this );
			this.sandbox.subscribe( 'broadcast', this );
			this.sandbox.subscribe( 'anchorHash', this );
			this.sandbox.subscribe( 'buehneIsReady', this );
			this.sandbox.subscribe( 'teaserStatus', this );
			this.sandbox.subscribe( 'galleryIsReady', this );

			$.datepicker.setDefaults( $.datepicker.regional.de );
			$( 'input[type="text"].date' ).datepicker( {
				dateFormat: 'dd.mm.yy',
				showButtonPanel: true,
				closeText: '',
				showOtherMonths: true,
				beforeShow: function( input ) {

					// show prev/next
					$('#ui-datepicker-div').removeClass('monthYearSelect');

					// default position
					$.datepicker._pos = $.datepicker._findPos( input );

					// adjust horizontal positioning (286 is width of .ui-datepicker)
					$.datepicker._pos[0] += input.offsetWidth - 286;

					// adjust vertical positioning
					$.datepicker._pos[1] += input.offsetHeight;
				}
			} );

			if (!this.isTouchDevice) {

				var element = $('.sal-dateSelect');

				element.datepicker( {
					dateFormat: 'dd.mm.yy',
					showButtonPanel: true,
					closeText: '',
					showOtherMonths: true,
					changeMonth: true,
					changeYear: true,
					yearRange: "1900:2020",
					beforeShow: function( input ) {

						// OnBlur auf Input-Feld überschreiben, damit durch den Verlust des Fokus durch den Datepicker
						// nicht ein Ajax-Request ausgelöst wird
						// Man könnte die alte Funktion irgendwie zwischenspeichern und beim onClose-Event unten
						// wieder einsetzen nach der Änderung durch die Datepicker-Komponente.
						// Funktioniert aber soweit alles, also lieber keine Experimente machen... :)
						this.onblur = function(){
							var desc = $('#'+this.id+'Desc');
							if(desc) {
								desc.hide(); // Eigentlich überfüssig - in Java ist festgelegt, dass bei Datepicker keine Description angezeigt wird
							}
						};

						// hide prev/next
						$('#ui-datepicker-div').addClass('monthYearSelect');

						// default position
						$.datepicker._pos = $.datepicker._findPos( input );

						// adjust horizontal positioning (286 is width of .ui-datepicker)
						$.datepicker._pos[0] += input.offsetWidth - 286;

						// adjust vertical positioning
						$.datepicker._pos[1] += input.offsetHeight;
					},
					onClose: function(dateText, inst) {
						// Manuell ein onChange-Event auslösen, damit ObserveField mitkriegt, dass sich der Inhalt geändert hat
						// this.focus(); // Feld aktiv machen

						// Event auslösen
						if ("createEvent" in document) {
						    var evt = document.createEvent("HTMLEvents");
						    evt.initEvent("change", false, true);
						    this.dispatchEvent(evt);
						} else {
							this.fireEvent("onchange");
						}
					}
				} );

			} else {

				var $element = $('.sal-dateSelect');
				var isoDate = $element.data('isodate');

				// trigger native date picker
				$element.attr('type', 'date');

				// set iso date format
				$element.val(isoDate);
			}

			$( 'html' ).addClass( $.fn.details.support ? 'details' : 'no-details' );
		},

		prepare: function( callback ) {

			// get viewport
			this.viewportCheck();

			// touch device fix: remove focus from autofocused elements
			if ($('html').hasClass('touch')) {
				document.activeElement.blur();
			}

			if ($.browser.msie && parseInt($.browser.version) <= 8) {
				var throttledWindowResize = _.throttle( $.proxy( this.onWindowResizeIe8, this ), 50 );
			} else {
				var throttledWindowResize = _.throttle( $.proxy( this.onWindowResize, this ), 50 );
			}

			$( window )
				.on( 'resize', throttledWindowResize )
				.on( 'scroll', $.proxy(this.onWindowScroll, this ))
				.on( 'orientationchange', $.proxy(this.onOrientationChange, this ));

			// site container scroll
			if (window.location.hash && window.location.hash.indexOf('/') === -1) {

				// sites with mod-Buehne have to time their function call
				// when Buehne is ready (onBuehneReady)
				if ($('.mod-Buehne').length < 1) {
					this.initSiteContainerScroll();
				}
			}

			// IE8 last-child fix for SC-06
			if ($.browser.msie && parseInt($.browser.version) <= 8) {
				this.ie8LastChildFix();
			}

			// pToken and ajaxContainer
			$.ajaxPrefilter(function (options, originalOptions, jqXHR) {

				// check if pToken is defined
				if (typeof window.ccb_cif !== 'undefined' && options && typeof options.type === 'string' && options.type.toUpperCase() === "POST") {
					jqXHR.setRequestHeader('pToken', window.ccb_cif.pToken);
				}
			});

			if ($('body .ajaxContainer').length) {
				this.ajaxContainer();
			}

			// json update
			if ($('[data-jsonupdate-url]').length) {
				this.jsonUpdate();
			}

			// fixed header
			if ($('[data-fixed-header]').length) {
				this.fixedNavMeta();
			}

			if(this.isTrackingActive()){
				this.teaser = $('section.content').find('[data-teasertracking]');
				this.teaser.each(function(index,object) {
					object.tSeen = false;
					var test = $(object).data('display');
					if ($(object).data('display') != undefined) {
						object.tDisplay = $(object).data('display');
					} else {
						object.tDisplay = true;
					}
				});
			}

			callback();
		},

		after: function() {
			$( window ).trigger( 'resize' );
			this.track();
		},

		// get viewport width
		viewportCheck: function() {

			// check viewport with matchMedia Function
			if (window.matchMedia !== undefined && window.matchMedia('all and (min-width: 1px)').matches) {

				// check large viewport with matchMedia Function
				if (window.matchMedia("(min-width: 800px)").matches) {

					this.hasViewport = "largeViewport";
				}

				// check medium viewport with matchMedia Function
				if (window.matchMedia("(min-width: 600px) and (max-width: 799px)").matches) {

					this.hasViewport = "mediumViewport";
				}

				// check small viewport with matchMedia Function
				if (window.matchMedia("(max-width: 599px)").matches) {

					this.hasViewport = "smallViewport";
				}

			} else {

				// window.innerWidth value is equivalent to css mediaQuery
				if (window.innerWidth) {

					// needed for ie9
					this.windowWidthMq = window.innerWidth;

				} else {

					// needed for ie8
					this.windowWidthMq = $(window).width();
				}

				// define large viewport
				if (this.windowWidthMq > 799 ) {

					this.hasViewport = "largeViewport";
				}

				// define medium viewport
				if (this.windowWidthMq > 599 && this.windowWidthMq < 799) {

					this.hasViewport = "mediumViewport";
				}

				// define small viewport
				if (this.windowWidthMq < 600 ) {

					this.hasViewport = "smallViewport";
				}

			}

			// set viewport info
			$('body').attr('data-viewport', this.hasViewport);
		},

		isTrackingActive: function() {
			if(typeof(webtrekkV3) == 'function' 
				&& (typeof(pageconfig) != 'undefined')
				&& (typeof(wt_tt) != 'undefined')){
				return true;
			}
			return false;
		},

		track: function() {
			if (this.isTrackingActive() && this.teaser != undefined) {
				this.teaser.each(function(index,object) {
					if (!object.tSeen && object.wtTeaser) {
						wt_tt.tt.addClickParameter("", object.wtTeaser.json.ck[521], "", "1", "", "");
						object.tSeen = true;
					}
				});
			}
		},

		blurButtonOnClick: function(e) {

			// remove focus from clicked button
			document.activeElement.blur();
		},

		onTeaserTrack: function() {
			this.track();
		},

		// adjust datepicker top position
		adjustTopPosition: function(e) {

			var $input 				= $(e.currentTarget);
			var $datepicker 		= $('#ui-datepicker-div');
			var _inputTopPos 		= $input.offset().top
			var _datepickerTopPos 	= $datepicker.offset().top

			// remove classes
			$datepicker.removeClass('above below');

			if (_inputTopPos > _datepickerTopPos) {
				$datepicker.addClass('above');
			} else {
				$datepicker.addClass('below');
			}
		},

		// fix header when closing smartbanner
		fixHeader: function() {

			// enable fixed header
			if ($('[data-fixed-header]').length) {

				// dcrm format10 rule
				if ($('.mod-DcrmFormat10').length) {

					if ($('.mod-DcrmFormat10').css('display') !== 'none') {

						$('body').attr('data-fixed-header', false);

					} else {

						$('body').attr('data-fixed-header', true);
					}

				} else {

					$('body').attr('data-fixed-header', true);
				}
			}

			// status changed
			this.fire('fixedNavPos', {teaserState: 'smartBannerClosed'}, ['teaserStatus']);
		},

		// fixed NavMeta
		fixedNavMeta: function() {

			var _headerHeight 	= $('body > header, .body-inner > header').outerHeight();
			var $sparten 		= $('.wrapper-sparten');
			var _spartenHeight 	= $sparten.outerHeight();

			if( $( document ).scrollTop() > _headerHeight ) {

				// hide .wrapper-sparten
				$sparten.hide();

				// add classes on navHaupt and dashboard elements (css shadow)
				if ($('.mod-NavHaupt').length) {

					$('.mod-NavHaupt').addClass('fixedHeader');
				}

				if ($('.mod-DashboardHeader').length) {

					$('.mod-DashboardHeader').addClass('fixedHeader');
				}

			} else {

				// show .wrapper-sparten
				$sparten.show();

				// remove classes on navHaupt and dashboard elements (css shadow)
				if ($('.mod-NavHaupt').length) {

					$('.mod-NavHaupt').removeClass('fixedHeader');
				}

				if ($('.mod-DashboardHeader').length) {

					$('.mod-DashboardHeader').removeClass('fixedHeader');
				}
			}
		},

		onAnchorClick: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var $href 		= $element.attr('href');
			var _hash		= $href.substring(1);

			// scroll to site container with id from ankernavigation
			if ($('#' + _hash).length) {

				// check if not located in dialog
				if (!$element.closest('.ui-dialog').length && $element.hasClass('anchor')) {

					this.fire( 'hashChange', {hash: _hash}, ['anchorHash'] );
				}
			}

			return false;
		},

		onWindowResize: function() {
			this.fire( 'broadcastBeforeWindowResize', [ 'broadcast' ] );
			this.fire( 'broadcastWindowResize', [ 'broadcast' ] );
			this.setEqualHeightPerRow();
			this.fire( 'broadcastAfterWindowResize', [ 'broadcast' ] );
			this.track();

			this.viewportCheck();
		},

		onWindowResizeIe8: function() {

			var winNewWidth 	= $(window).width();
			var winNewHeight 	= $(window).height();

			// compare the new height and width with old one
			if(this.winWidth != winNewWidth || this.winHeight != winNewHeight) {
				this.fire( 'broadcastBeforeWindowResize', [ 'broadcast' ] );
				this.fire( 'broadcastWindowResize', [ 'broadcast' ] );
				this.setEqualHeightPerRow();
				this.fire( 'broadcastAfterWindowResize', [ 'broadcast' ] );
			}

			// update width and height
			this.winWidth = winNewWidth;
			this.winHeight = winNewHeight;
		},

		setEqualHeightPerRow: function() {
			mrm.util.ui.setEqualHeightPerRow( this.$( '.row' ) );
		},

		onBodyClick: function() {
			this.fire( 'broadcastBodyClick', [ 'broadcast' ] );
		},

		onWindowScroll: function() {
			this.fire( 'broadcastWindowScroll', [ 'broadcast' ] );
			this.track();

			if ($('[data-fixed-header]').length) {
				this.fixedNavMeta();
			}
		},

		onOrientationChange: function() {
			this.fire( 'broadcastOrientationChange', [ 'broadcast' ] );
			this.track();
		},

		onGlobalMenuFlyoutOpen: function( data ) {
			$( '.main' ).animate( {
				'left': data.flyoutWidth + 'px'
			}, 300 );
		},

		onGlobalMenuFlyoutClose: function() {
			$( '.main' ).animate( {
				'left': 0
			}, 300 );
		},

		onGlobalMenuMarketplaceOpen: function() {
			var $elements = $( '.main, .body-inner > header, .body-inner > footer, .body-inner > .mod-Login' );
			$elements.css( {
				'left': 'auto',
				'right': '100%'
			} );

			$( '.main' ).one( 'oTransitionEnd transitionEnd webkitTransitionEnd', function() {
				$elements.addClass( 'invisible' );
			} );

			// older browser fallback
			if( $( 'html' ).hasClass( 'no-cssanimations' ) ) {
				$elements.addClass( 'invisible' );
			}
		},

		onGlobalMenuMarketplaceClose: function() {
			var $elements = $( '.main, .body-inner > header, .body-inner > footer, .body-inner > .mod-Login' );
			$elements
				.removeClass( 'invisible' )
				.css( {
					'left': 'auto',
					'right': '0%'
				} );
		},

		// on sites with mod-Buehne scroll when buehne is ready
		onBuehneReady: function() {

			if (window.location.hash && window.location.hash.indexOf('/') === -1) {
				this.initSiteContainerScroll();
			}
		},

		// // fire events from gallery mod
		// onLayerGalleryReady: function(x) {
		// 	console.log('global.js: onLayerGalleryReady');
  //           // this.resizeDialog(x.id, x.element);
		// },

		initSiteContainerScroll: function() {
            var _hash           = escape(window.location.hash.substring(1));
            var $destination    = $('.row[id=' + _hash + ']');

            if ($destination.length) {
            	var $destinationPos = $destination.offset().top - 50;

                // scroll to container
                $('html, body').animate({
                    scrollTop: $destinationPos
                }, 1000);
            } else {
            	this.fire( 'hashChange', {hash: _hash}, ['anchorHash'] );
            }
        },

        internalScroll: function(e) {

        	var $element 		= $(e.currentTarget);
        	var _href 			= $element.attr('href');
        	var _navMetaHeight 	= 0;

        	if (_href.length > 1 && _href.indexOf('/') === -1) {

        		var _hash           = _href.substring(1);
	            var $destination    = $('.row[id=' + _hash + ']');

	            if ($('[data-fixed-header]').length) {
	            	_navMetaHeight = 44;
	            }

	            if ($destination.length) {
	            	var $destinationPos = $destination.offset().top - 50 - _navMetaHeight;

	                // scroll to container
	                $('html, body').animate({
	                    scrollTop: $destinationPos
	                }, 1000);
	            } else {
	            	this.onAnchorClick(e);
	            }
        	}
        },

		ie8LastChildFix: function() {
			if ($('.sc-06').length) {
				var $element = $('.sc-06 .row[class*="ac-"] .col-lg-4:last-child');
				$element.addClass('sc06LastChild');
			}
		},

		triggerDialogAlternative: function( event ) {
			event.preventDefault();

			var self 				= this;
			var $button 			= $(event.currentTarget);
			var _buttonHref 		= $button.attr('href');
			var _buttonTitleAttr 	= $button.data('title_attr');
			var _referenceId 		= '';
			var $dialog 			= '';
			var _width 				= parseInt($('section.content').outerWidth());
			var _height 			= $(window).height() * 0.8;
			var _timeoutID 			= '';
			var modules = [];

			// remove timestamp set on .mn-01 links
			if (_buttonHref.indexOf('?') >= 0) {
				_referenceId = _buttonHref.substr(0, _buttonHref.indexOf('?'));
			} else {
				_referenceId = $button.attr('href');
			}

			$dialog = $(_referenceId);

			if($button.data('layerwidth')) {
				_width = $button.data('layerwidth');
			}
			if($button.data('layerheight')) {
				_height = $button.data('layerheight');
			}

			$dialog.dialog( {
				modal 		: true,
				resizable 	: false,
				draggable 	: false,
				autoOpen 	: false,
				width 		: _width,
				height 		: _height,
				closeText 	: 'X',
				create 		: function( event, ui ) {

					// set maxWidth of dialog
					$(this).closest('.ui-dialog').css('maxWidth', parseInt($('section.content').outerWidth()) + 'px');

					// style title bar
					$(".ui-dialog-title").hide();
					$(".ui-dialog-titlebar").css('margin', 0);

					if ($button.attr('data-dialog_url')) {
						var modules = [];

						$.ajax({
							url 		: $button.attr('data-dialog_url'),
							dataType 	: 'html',
							type 		: 'GET',
							cache 		: true,
							timeout 	: 30000,
							error 		: function(xhr, textStatus, errorThrown) { },
							complete	: function() {

								self.resizeDialog(_referenceId, $dialog);

								$(_referenceId + ' .layerContent').find('img').load( function() {
									   self.resizeDialog(_referenceId, $dialog);
								});

								// center headline and subline
								if ($dialog.find('.mod-Weltkarte').attr('data-lightbox-title-center') == "true") {
									$dialog.find('.mod-Weltkarte[data-lightbox-title-center="true"]').closest('section.content').find('.mod-Headline:first').css('textAlign', 'center');
								}

								// remove tags
								$dialog.find('meta').remove();
								$dialog.find('link').remove();

								// init custom scrollbar
								clearTimeout(_timeoutID);

								_timeoutID = setTimeout(function(){
									self.triggerDialogScrollbar(_referenceId);
								}, 200);
							},
							success 	: function(data){

								if (data) {
									var $data 		= $(data);
									var $content 	= '';

									if ($data.find('section.content').length) {

										$content 	= $data.find('section.content');

										// reduce width of section.content in lightbox
										$content.css('width', $dialog.width() - 32 + 'px');

										// print content
										$dialog.html($content);
									} else {
										var $section = $('<section class="content"></section>');
										$content = $(data);

										// create section
										$dialog.append($section);

										/* print content */
										$dialog.children('section').html($content);
									}

									// register and start the modules in $data
									// otherwise no '.mod-' of ajax content gets initialized
									modules = self.sandbox.addModules($content);

									self.track();
								}
							}
						});
					} else {

						// init custom scrollbar
						clearTimeout(_timeoutID);

						_timeoutID = setTimeout(function(){
							self.triggerDialogScrollbar(_referenceId);
						}, 200);
					}

				},
				open: function() {

					var $closeButton = $dialog.siblings('.ui-dialog-titlebar').find('.ui-dialog-titlebar-close');

					// set title attribute of close button
					$closeButton.attr('title', _buttonTitleAttr);

					// add body-click event listener
					$('body').on('click.dialog', '.ui-widget-overlay', function() {

						// close dialog
						$dialog.dialog('close');

						// remove body-click event listener
						$('body').off('click.dialog');
					});

					// reinit mod-Bildergalerie
					self.fire('layerOpen', { id: $dialog}, ['galleryIsReady']);

					// resize dialog layer
					// added delay to get optimal height
					setTimeout(function() {
						self.resizeDialog(_buttonHref, $dialog);
					}, 100);

				},
				close: function() {

					$dialog.find('.mod-Bildergalerie').removeClass('todoHeight');

					// remove focus from clicked element
					$button.blur();
				}
			} );

			$dialog.dialog('open');
		},

		resizeDialog: function(element, $dialog) {

			var $layerContent = $(element + ' .layerContent');
			if ($layerContent.length) {
				var contentHeight = $layerContent.outerHeight();
				var _height = $(window).height() * 0.8;

				if (contentHeight < _height) {
					$dialog.dialog( "option", "height", contentHeight + 72);
				} else {
					$dialog.dialog( "option", "height", _height);
				}
			}
		},

		triggerDialogScrollbar: function(element) {

			var _dialogContent	= $(element).outerHeight();
			var _viewportHeight = $(window).height() * 0.8;

			// init scroller
			$(element).jScrollPane( {
				verticalOffset: 2,
				contentWidth: '1',
				autoReinitialise: true,
				hijackInternalLinks: false
			} );
		},

		triggerPopup: function( event ) {
			var $trigger = $( event.currentTarget ),
				popupUrl = $trigger.attr( 'href' ),
				popupName = 'popUp', //$trigger.attr("name")
				popupDimensionsArray = [
					'width=750,height=600,',
					'width=500,height=600,',
					'width=825,height=430,'
				],
				popupSize = $trigger.data( 'popup-size' ) || 0,
				popupDimensions = popupDimensionsArray[ popupSize ],
				popupParams = popupDimensions + 'toolbar=no,menubar=no,location=no,scrollbars=yes,';

			event.preventDefault();

			if( !this._popup || this._popup.closed ) {
				this._popup = window.open( popupUrl, popupName, popupParams );
			} else {
				this._popup.close();
				this._popup = null;
				this._popup = window.open( popupUrl, popupName, popupParams );
			}
			this._popup.focus();
		},

		ajaxContainer: function() {
			var self 		= this;
			var $element 	= $('body .ajaxContainer');
			var modules 	= [];
			var restObject 	= {};

            $element.each(function () {
                var element = $(this);

                restObject[element.attr("id")] = element.data("dcrm-parameter");
            });

            $.ajax({
                url: "/banking/rest/dcrm/teasercontents",
                dataType: "xml",
                contentType: "application/json",
                data: JSON.stringify(restObject),
                type: "POST",
                error: function (xhr, textStatus, errorThrown) {
                },
                success: function (data) {
                	var $data = $(data);

                    if (data) {
                        $(data).find("content").each(function () {
                            var element = $(this);
                            $("#" + element.attr("id")).html(element.text());
                        });

						$element.each(function (i, obj) {
			                mrm.update($(obj).children('.mod'));
			            });
                    }
                }
            });
		},

		jsonUpdate: function() {

			// each element with following attribute gets updated via json
			$('[data-jsonupdate-url]').each(function (i, obj) {
				var $element 	= $(this);
				var $parent 	= $element.parent();
				var _size 		= $element.attr('data-jsonupdate-size');
				var _id 		= $element.attr('data-jsonupdate-id');
				var _count 		= $element.attr('data-jsonupdate-count');

				$.ajax({
					url 		: $element.attr('data-jsonupdate-url'),
					dataType 	: 'json',
					type 		: 'GET',
					cache 		: true,
					timeout 	: 30000,
					error 		: function(xhr, textStatus, errorThrown) {},
					success 	: function(data) {

						// linklist
						if ($parent.hasClass('ll')) {

							if (_count === "") {
                                _count = data[_id].editions.length;
                            }

							// append list items
							for ( var i = 0, l = _count; i < l; i++ ) {
								$element.before('<li><a class="l-p-' + _size + '" title="' + data[_id].editions[i].title + '" href="' + data[_id].editions[i].url + '">' + data[_id].editions[i].linktext + '</a>');
							}

							// remove list item initiating jsonupdate
							$element.remove();
						}

						// buttonlink
						if ($element.hasClass('btn')) {

							var _href 		= data[_id].editions[0].url;
							var _linktext 	= data[_id].editions[0].linktext;
							var _title 		= data[_id].editions[0].title;

							// check if element is <a>
							// otherwise search for closest parent <a>
							if ($element.prop('tagName') !== 'a') {
								$element = $element.closest('a');
							}

							// set linktext
							$('[data-jsonupdate-id="' + _id + '"]').html(_linktext);

							// set destination link
							$element.attr('href', _href);

							// set title
							$element.attr('title', _title);
						}
					}
				});
			});
		},

		trackingId: function(e) {

			var dataTrackingId 	= $(e.currentTarget).attr('data-tracking-id');

			// send tracking data
			inlineLinkTrack(dataTrackingId);

		},

		deliciousShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var sharer 		= "http://www.delicious.com/save?v=5&jump=close&url=";

			// open popup
			window.open(sharer+this.shareURI+hash,'','width=480,height=360');
		},

		emailShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var subject 	= $element.data("subject");
			var text 		= $element.data("message");
			var sharer 		= "mailto:?subject=" + subject + "&body=";
			var message 	= this.shareURI + hash;

			// store message
			message = text + message;

			$element.attr('href', sharer + message);

			document.location.href = sharer + message;
		},

		fbShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var sharer 		= "https://www.facebook.com/sharer/sharer.php?u=";

			// open popup
			window.open(sharer+this.shareURI+hash,'','width=626,height=270');
		},

		gplusShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var sharer 		= "https://plus.google.com/share?url=";

			// open popup
			window.open(sharer+this.shareURI+hash,'','width=480,height=342');
		},

		linkedInShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var sharer 		= "http://www.linkedin.com/shareArticle?mini=true&url=";

			// open popup
			window.open(sharer+this.shareURI+hash,'','width=836,height=520');
		},

		twitterShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var sharer 		= "http://twitter.com/share?url=";

			// open popup
			window.open(sharer+this.shareURI+hash,'','width=626,height=256');
		},

		xingShare: function(e) {
			e.preventDefault();

			var $element 	= $(e.currentTarget);
			var hash 		= $element.data("video-id");
			var sharer 		= "https://xing.com/app/user?op=share;url=";

			// open popup
			window.open(sharer+this.shareURI+hash,'','width=480,height=342');
		}
	} );
} )( mrm.$ );

( function( $ ) {

	mrm.mod.Reiterset = mrm.mod.AbstractMod.extend( {

		events: {
			'click .resp-tab-item': 'onTabClick',
			'click h2.resp-accordion': 'onTabClick'
		},

		initElements: function() {

			// needed for 'fire' function to work properly
			this.sandbox.subscribe( 'globalMenu', this );
			this.sandbox.subscribe( 'anchorHash', this );
		},

		onTabClick: function( event ) {
			event.preventDefault();

			var $activeTab = this.$ctx.find('.resp-tab-content-active');

			if(this.$ctx.hasClass('state-vertical')) {
				// calculate minHeight of resp-tabs-container
				this.setMinHeight();
			}

			//Following code informs sub modules that they are currently displayed
			if (event.target) {
				var target = event.target;
			} else {
				var target = event.srcElement;
			}

			if ($(target).attr('href')) {
				var id = $(target).attr('href');
			} else if ($(target).parent().attr('href')) {
				var id = $(target).parent().attr('href');
			} else {
				var id = $(target).children('a').attr('href');
			}
			var $tab = this.$ctx.find( id );

			// throws error if tabs contain mods
			var updateChild = $tab.find( '.mod' );
			if (updateChild) {
				mrm.visible(updateChild);
			}

			// look in active tab for a gallery and get the sliderIds
			if ($activeTab.find('.mod-Bildergalerie .gallery').length) {
				var $gallery = $activeTab.find('.mod-Bildergalerie .gallery');
				var $galleryNav = $activeTab.find('.mod-Bildergalerie .galleryNav');
				var $galleryLightbox = $activeTab.find('.mod-Bildergalerie .galleryLightbox');
				var _galleryId = $gallery.attr('id');
				var _galleryNavId = $galleryNav.attr('id');
				var _galleryLightboxId = $galleryLightbox.attr('id');

				setTimeout(function() {
					$('#' + _galleryId).flexslider().resize();
					$('#' + _galleryNavId).flexslider().resize();
					$('#' + _galleryLightboxId).flexslider().resize();
				}, 10);
			}

			// video specific
			if (this.$ctx.find('.mod-Video').length) {

				// trigger onUnloadVideo in Video.js

				// todo: javascript error on deeplinked pages with video
				// missing sandbox subscribe
				// this.fire('unloadVideo');
			}

			// update adaptive images
			if( this.$ctx.find( '.adaptive-image' ) ) {
				this.$ctx.find( '.adaptive-image' ).each(function(index, item){
					mrm.util.adaptiveImage.selectImage( $(item).attr('id') );
				});
			}

			this.setEqualHeightPerRow();

			this.fire('teaserTrack');
		},

		prepare: function( callback ) {

			if( this.$ctx.hasClass( 'state-vertical' ) ) {
				this.$ctx.easyResponsiveTabs( {
					type: 'vertical', //Types: default, vertical, accordion
					width: '100%', //auto or any custom width
					fit: false // 100% fits in a container
				} );

				// calculate minHeight of resp-tabs-container
				this.setMinHeight();
			} else {
				this.$ctx.easyResponsiveTabs( {
					type: 'default', //Types: default, vertical, accordion
					width: '100%', //auto or any custom width
					fit: false // 100% fits in a container
				} );
			}

			// deeplinking
			if (window.location.hash && window.location.hash.indexOf('/') === -1) {
				this.fire( 'hashChange', {hash: escape(window.location.hash.substring(1))}, ['anchorHash'] );
			}

			// ie8 gallery fix
			if ($('html').hasClass('msie8')) {
				this.oldIeGalleryFix();
			}

			//this.initSitemapTabs();

			callback();
		},

		oldIeGalleryFix: function() {
			var $elements = this.$ctx.find('.resp-tab-content:not(.resp-tab-content-active)');

			$elements.show();

			setTimeout(function() {
				$elements.hide();
			}, 1);
		},

		onHashChange: function( event ) {

			var hash = event.hash;

			var $tabId 		= this.$ctx.find('.resp-tabs-container#' + hash);
			var $child		= this.$ctx.find('.mod #' + hash);
			var $videoId 	= this.$ctx.find('.videoplayer[data-contentId=' + hash + ']');

			// if deeplinked tab exists
			if (hash == $tabId.attr('id')) {

				var $tabParent 		= $tabId.closest('.mod-Reiterset');
				var $tabIndex 		= $tabParent.find('.resp-tabs-container').index($tabId);
				var $tabLinkIndex 	= $tabParent.find('li.resp-tab-item a[href="#'+hash+'"]');

				// activate deeplinked tab
				$tabLinkIndex.trigger('click');

				// scroll to tab container
				$('html, body').animate({
					scrollTop: $tabParent.offset().top - 50
				}, 1000, function() {

					// show active container
					if( $.browser.msie && parseInt( $.browser.version, 10 ) < 9 ) {
						$tabParent.find('.resp-tab-content-active').show();
					}
				});

			} else if ($child.length > 0) {
				//A child of reiterset is deeplinked
				var $tabContent = $child.parents('.resp-tabs-container');
				$tabContent.each(function(index, object) {
					var $object = $(object);
					if ($object.children('.resp-tab-content-active').length == 0) {
						var contentId = $object.attr('id');

						var $tabParent 		= $object.closest('.mod-Reiterset');
						var $tabLinkIndex 	= $tabParent.find('li.resp-tab-item a[href="#'+contentId+'"]');

						$tabLinkIndex.trigger('click');
					}
				});

			}

			// if deeplinked video in tab exists
			if (hash == $videoId.attr('data-contentId')) {

				var $videoParent 	= $videoId.closest('.resp-tabs-container');
				var $tabParent 		= $videoParent.closest('.mod-Reiterset');
				var $tabIndex 		= $videoParent.index() - 1;
				var $tabLinkIndex 	= $tabParent.find('.resp-tabs-list > .resp-tab-item:eq('+ $tabIndex + ') a');

				// activate deeplinked tab
				$tabLinkIndex.trigger('click');

				// scroll to tab container
				$('html, body').animate({
					scrollTop: $videoId.attr('data-contentId', hash).offset().top - 50
				}, 1000);
			}
		},

		setMinHeight: function() {
			var $tabs 		= this.$ctx.children('.resp-tabs-list');
			var $content 	= this.$ctx.find('.resp-tab-content');
			var $minHeight 	= $tabs.css('height');

			if ($.browser.msie && parseInt($.browser.version) <= 8) {
				var ieHeight = parseInt($minHeight) - 34;

				// apply minHeight only if tabs are not in accordion-mode
				if ($tabs.css('display') !== 'none') {
					$content.css('minHeight', ieHeight + 'px');
				} else {
					$content.css('minHeight', '0');
				}
			} else {
				// apply minHeight only if tabs are not in accordion-mode
				if ($tabs.css('display') !== 'none') {
					$content.css('minHeight', $minHeight);
				} else {
					$content.css('minHeight', '0');
				}
			}
		},

		onBroadcastWindowResize: function() {
			// calculate minHeight of resp-tabs-container
			this.setMinHeight();

			// init tooltips, otherwise tooltip does not work in reiterset
			this.initTooltip();
		},

		initSitemapTabs: function() {

			var $activeBranchName 	= $( '.mod-NavSparten li.active a' ).text();
			var $sitemapTabs		= $( '.mod-TabSitemap .resp-tabs-list > li' );

			$.each( $sitemapTabs, function( key, value ) {

				var tabText = $( value ).find( 'a' ).text();

				if (tabText == $activeBranchName ) {
					// find all tabs and remove active class
					lis = $( 'ul.resp-tabs-list > li' );
					lis.removeClass( 'resp-tab-active' );
					// add active class to matching element
					$(this).addClass( 'resp-tab-active' );

					// hide all tab containers
					$( '.mod-TabSitemap div.resp-tabs-container > div' ).removeClass( 'resp-tab-content-active' ).hide();
					// find matching tab-container and set it active
					var linkName = $(this).find( 'a' ).attr( 'href' );
					$( linkName + ' > div').addClass( 'resp-tab-content-active' ).show();
				};

			});
		}

	} );
} )( jQuery );
