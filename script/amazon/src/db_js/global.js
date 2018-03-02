/* Version 5.0.43 from 29 July, 2016 */

var isiPad = navigator.userAgent.match(/iPad/i);
function showMaxChars() {};



Prototype.Browser.IE6 = Prototype.Browser.IE && parseInt(navigator.userAgent.substring(navigator.userAgent.indexOf("MSIE")+5), 10) == 6;
Prototype.Browser.IE7 = Prototype.Browser.IE && parseInt(navigator.userAgent.substring(navigator.userAgent.indexOf("MSIE")+5), 10) == 7;
Prototype.Browser.IE8 = Prototype.Browser.IE && !Prototype.Browser.IE6 && !Prototype.Browser.IE7;
Prototype.Browser.IE11 = !!(navigator.userAgent.match(/Trident\/7\./)||navigator.userAgent.match(/Trident\/8\./));

/* Get the language of the document */
var language = $$("html").first().readAttribute('lang');
var REPLACE_TOKEN = /\{0\}/;

/* Start global functions */
Event.observe(window, 'load', function() {

	$$('body')[0].addClassName('js');

	if (Prototype.Browser.IE11) {
		$$('body')[0].addClassName('isIE11');
	}

	heightBalancing();
	cookieRepair();
	toggleContent();
	collapseTable();
	validateLogin();
	displayCompletedSteps();
	hoverButtons();
	setBackgroundImage();
	setWidth();
	toggleTooltip();
	observeEnterKey();
	addHeadline();
	setFontsize();
	printPage();
	OPrA_SB_equalSectionHeight();
	AKK_enhanceLayout();
	postboxUnreadMessages();
	enhanceLayout();
	handleRollContainerWidth(); /* Must be called after function enhanceLayout(); */
	setOPRAPortalTeaserContainer();
	addTANKeypad();
	toggleSepaDetails();
});

function stopEvent(e) {
    if (e != null) {
        // prevent default behaviour and stop propagation both for standard browsers and old IE versions
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;
        e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
        if (e.stopImmediatePropagation) {
            e.stopImmediatePropagation();
        }
    }
    return false;
}

function toggleSepaDetails() {
	if ($$('body')[0].getAttribute('id') == 'DisplayTransactions') {
		var $hasSEPADetails = $$('tr.hasSEPADetails');
		if ($hasSEPADetails.length) {
			var toggleText = {
				"de": ["Alle Details anzeigen", "Alle Details verbergen"],
				"en": ["Expand all details", "Hide all details"]
			};
			var $table = $hasSEPADetails.each(function($tr, idx) {
				var $firstDate = $tr.firstDescendant();
				$firstDate.update('<span>'+$firstDate.innerHTML+'<\/span>');
			}).first().up('table');
			$table.select('tr.headline th h2').first().insert('<span id="toggleAllSEPADetails" class="button">'+toggleText[language][0]+'<\/span>');
			var $toggleAll = $("toggleAllSEPADetails"), isOpenClassName = 'isOpen';
			$$('tr.hasSEPADetails .date, tr.hasSEPADetails .purpose')
				.invoke('observe', 'mouseenter', function() {
					this.up().addClassName('hover');
				}).invoke('observe', 'mouseleave', function() {
					this.up().removeClassName('hover');
				}).invoke('observe', 'click', function(event) {
					this.up().toggleClassName(isOpenClassName);
					$table.toggleClassName('ieBugfix');
				});
			Event.observe($toggleAll, 'click', function() {
				if ($toggleAll.hasClassName(isOpenClassName)) {
					$hasSEPADetails.invoke('removeClassName', isOpenClassName);
					$toggleAll.update(toggleText[language][0]).removeClassName(isOpenClassName);
				} else {
					$hasSEPADetails.invoke('addClassName', isOpenClassName);
					$toggleAll.update(toggleText[language][1]).addClassName(isOpenClassName);
				}
				$table.toggleClassName('ieBugfix');
			});
		}
	}
}

//for development use only: simple wrapper for console.log
function debug(string) {
	if (typeof(console) != 'undefined') {
		console.log(string);
	// } else {
		//alert(string);
	}
}

/*
- adds hover to teaser columns
- wraps teaser image with additional link
*/
function setOPRAPortalTeaserContainer() {

	//apply on each item
	$$('#OPRA_portal_teaserContainer .OPRA_portal_teaserCol').each(function($item) {

		if ($item.up('.OPRA_portal_singleTeaser')) return;

		var $content = $item.select('.OPRA_portal_teaserContent').first();
		//add additional <div class="OPRA_portal_teaserColInner"> inside each OPRA_portal_teaserCol
		//this div adds as a hook for :hover
		if ($content) {
			var $headline = $item.select('.OPRA_portal_teaserHeadline').first();
			var $wrap = new Element('div', {'class': 'OPRA_portal_teaserColInner'});
			$wrap.insert({top: $headline});
			Element.wrap($content, $wrap);

			//preserve height
			$item.setStyle({'height': $item.getHeight() + 'px'});
		}

		var $img = $item.select('.OPRA_portal_teaserImage img').first();
		var href = $item.select('.OPRA_portal_teaserAction ul li a').last().getAttribute('href');
		//wrap teaser-image with link
		//href of link comes from last link in the ul-list
		if ($img && href)
			Element.wrap($img, new Element('a', {'href': href}));

	});

}

function enhanceLayout() {

	var $headerContainer = $("headerContainer");
	if ($headerContainer != undefined) {
		var $lastLogin = $("lastLogin");
		if ($lastLogin != undefined)
			$headerContainer.insert({top: $lastLogin});
	}

	var $topicContainer = $("topicContainer");
	if ($topicContainer) {
		var $sessionTAN = $$("div#sessionTAN")[0];
		if ($sessionTAN) {
			$topicContainer.insert({top: $sessionTAN});
		}

		var $iTANStatus = $("iTANStatus");
		if ($iTANStatus) {
			$topicContainer.insert({top: $iTANStatus});
		}

		var $mobileTANStatus = $("mobileTANStatus");
		if ($mobileTANStatus) {
			$topicContainer.insert({top: $mobileTANStatus});
		}

		var $photoTANStatus = $("photoTANStatus");
		if ($photoTANStatus) {
			$topicContainer.insert({top: $photoTANStatus});
		}

		var $websignStatus = $("websignStatus");
		if ($websignStatus) {
			$topicContainer.insert({top: $websignStatus});
		}
	}
	var sortableColumns = $$("span.sortable");
	if (sortableColumns.length) {
		sortableColumns.invoke("up", "table").invoke("addClassName", "styledWrapper");
		sortableColumns.invoke("up", "th").each(function($th){
			$th.addClassName('styledWrapperHeader').update("<div class=\"styledWrapperInner \">" + $th.innerHTML + "</div>");
		});
	}

	// Stripe tables
	$$('table.summary tr:nth-child(odd)').invoke('addClassName','odd');

	// Style links at the bottom of advices, warning, and error messages.
	$$('.advice ul:last-child, .backendError ul:last-child').invoke('addClassName','lastChild');
}

function handleRollContainerWidth() {

	if ($$('body#DirectTrade').length) return;

	if ((Prototype.Browser.IE7) || (Prototype.Browser.IE8)) {
		var contentContainerWidth = $('contentContainer').getWidth();
		var largestTableWidth = 0;
		/*
		 * >= IE9: largestTableWidth =
		 * $$('#contentContainertable').reduce(function(prev, $table) { return
		 * Math.max(prev,$table.getWidth()); }, 0);
		 */
		$$('#contentContainer table').each(function($table){
			largestTableWidth = Math.max(largestTableWidth, $table.getWidth());
		});
		if (largestTableWidth > contentContainerWidth) {
			var curFontSizeWithUnit = $$('body')[0].getStyle('font-size');
			var curFontSize = parseInt(curFontSizeWithUnit, 10);
			if (curFontSizeWithUnit.indexOf('%')>0)
				curFontSize = 16 / 100 * curFontSize;
			var CalcDiffEM = (largestTableWidth - contentContainerWidth) / curFontSize;
			var CurRollContainerMaxWidth = parseInt($('rollContainer').getStyle('max-width'), 10);

			var finalRollContainerMaxWidth = CurRollContainerMaxWidth + CalcDiffEM + 4 + 'em';
			$('rollContainer').setStyle({
				maxWidth: finalRollContainerMaxWidth,
				width: finalRollContainerMaxWidth
			});
		}
	}
}

/* Add a standard headline */

function addHeadline() {
	if ($$('h1').length == 0)
		$$('#contentContainer .pageFunctions').invoke('insert', {
			after : new Element('h1').update('&nbsp;')
		});
}

/* Display the tooltip */

function toggleTooltip() {
	var BR = /\|\|/g;
	$$("a.tooltip").each(function($tooltip){
		var tooltipTEXT = $tooltip.readAttribute("title").replace(BR, "<br />");
		var $container = new Element('span', {'class' : 'tooltipContainer'}).update(tooltipTEXT);
		$tooltip.writeAttribute("title", null).insert({
			top : $container
		}).observe('mouseenter', function() {
			$container.addClassName('showTT');
		}).observe('mouseleave', function() {
			$container.removeClassName('showTT');
		});
	});
}

/* Add hover class to buttons */

function hoverButtons() {
	$$('input[type=button], input[type=reset], input[type=submit]').each(function($button) {
		$button.observe('mouseenter', function() {
			toggleButtonClassName(this, 'add');
		}).observe('focus', function() {
			toggleButtonClassName(this, 'add');
		}).observe('mouseleave', function() {
			toggleButtonClassName(this, 'remove');
		}).observe('blur', function() {
			toggleButtonClassName(this, 'remove');
		});
	});
}


var TOGGLE_BUTTON_CLASSES = [ 'button', 'nextStep', 'search', 'previousStep', 'confirm', 'sell', 'buy', 'toDirectTrade', 'pushContract' ];
var TOGGLE_BUTTON_HOVER = new RegExp('Hover$'); // ends with 'Hover'
function toggleButtonClassName($button, action) {
	if (action == 'add') {
		$w($button.className).each(function(btnClass) {
			TOGGLE_BUTTON_CLASSES.each(function(classname) {
				if (btnClass == classname) {
					$button.addClassName(classname + 'Hover');
					throw $break;
				}
			});
		});
	} else {
		$w($button.className).each(function(btnClass) {
			if (TOGGLE_BUTTON_HOVER.test(btnClass))
				$button.removeClassName(btnClass);
		});
	}
}


/* Collapsible tables */
var COLLAPSE_TABLE_NEW_TITLE = {
		"de": {"show": "%DCbersicht Ihrer {0} %F6ffnen", "hide": "%DCbersicht Ihrer {0} schlie%DFen"},
		"en": {"show": "Open the overview of your {0}", "hide": "Close the overview of your {0}"}
};
function collapseTable() {
	var allTables = $$("table.collapsible"), $firstTable = allTables.first();
	allTables.each(function($table){
		$table.select("td.creditLine").each(function($td) {
			$td.up('tr').previous('.subsequent').addClassName('creditLine');
		});
		$table.select("a.showContent, a.hideContent").invoke("observe", "click", function(event){
			var $thisRow = this.up("tr");
			var $nextRows = $thisRow.nextSiblings();
			if ($nextRows.length == 0) {
				$nextRows = $table.select("tbody tr");
			} else {
				for (var i = 0, $nextRow; $nextRow = $nextRows[i]; i++){
					if ($nextRow.hasClassName("subsequent")){
						$nextRows = $nextRows.slice(0, i);
						break;
					}
				}
			}
			$nextRows.invoke("toggleClassName", "hidden");
			this.toggleClassName('hideContent').toggleClassName('showContent');
			if ($thisRow.hasClassName("currencyAccount")) {
				$table.select("thead th.currencyAccount").invoke("toggleClassName", "hideCurrencyAccount");
				$firstTable.select("th").first().toggleClassName("firstTableHeadline");
				$firstTable.select("th.currencyAccount").last().toggleClassName("lastTableHeadline");
				if ($firstTable.select("th.creditLine").invoke('hasClassName', "hideCreditLine").first())
					$firstTable.select("tr").first().toggleClassName("hideAllTableHeadlines");
			} else if ($thisRow.hasClassName("creditLine")) {
				$table.select("thead th.creditLine").invoke("toggleClassName", "hideCreditLine");
				if ($firstTable.select("th.currencyAccount").invoke('hasClassName', "hideCurrencyAccount").last())
					$firstTable.select("tr").first().toggleClassName("hideAllTableHeadlines");
			}
			var newTitle = COLLAPSE_TABLE_NEW_TITLE[language][this.hasClassName("showContent") ? "show" : "hide"];
			this.writeAttribute("title", unescape(newTitle.replace(REPLACE_TOKEN, this.innerHTML)));
			Event.stop(event);
		});
	});
}

/* Toggle content */
var TOGGLE_CONTENT_NEW_TITLE = {
		"de": "Neues Fenster: {0}",
		"en": "New window: {0}"
};
function toggleContent() {
	$$('a.toggleContent').each(function($item) {
		var $list = $item.up('ul');
		$item.writeAttribute("title", null).onclick = function(evt) {
			$list.toggleClassName('toggleLinkOpen').next().toggleClassName('visible');
			return stopEvent(evt);
		};
		$list.next().select('a').each(function($link) {
			$link.writeAttribute("rel", "designates").writeAttribute("title",
					TOGGLE_CONTENT_NEW_TITLE[language].replace(REPLACE_TOKEN, $link.innerHTML));
		});
	});
}

/* Change class of completed steps in DIV#orientationContainer */

function displayCompletedSteps() {
	var listItems = $$('#orientationContainer li');
	for (var i = 0, $item; $item = listItems[i]; i++) {
		if ($item.hasClassName('currentStep') && $item.next())
			return;
		$item.addClassName('completedStep');
	}
}

/* Add a specific background to doublespaced table headers */

function setBackgroundImage() {
	$$('th[rowspan="2"]').each(function(tablehead) {
		tablehead.up('tr').next('tr').addClassName('dividing');
	});
}

/* Print page */

function printPage() {
	$$('li.print a').invoke('observe', 'click', function(Event) {
		window.print();
		Event.stop(event);
	});
}

/* Calculate and set equal height of each section within #OPRA_SB_portal */

function OPrA_SB_equalSectionHeight(){
	if ($("OPRA_SB_portal")) {
		// Some android devices (for example samsung galaxy tab) will be detected as portrait while they are landscape and viceversa: http://stackoverflow.com/questions/8985805/orientation-change-in-android-using-javascript
		var itemsInRow = document.viewport.getWidth() > document.viewport.getHeight() ? 3 : 2;

		var sections = $$('#OPRA_SB_portal .OPRA_SB_overview > .OPRA_SB_section');
		sections.inGroupsOf(itemsInRow, new Element('div')).each(function(group, j) {
			var rowHeight = 0;
			group.each(function(item, i) {
				item.addClassName('autoHeight');
				item.style.height = 'auto';
				rowHeight = Math.max(rowHeight, item.getHeight());
			});
			group.each(function(item, i) {
				if ((i + 1) < itemsInRow)
					item.removeClassName('OPRA_SB_section_lastChild');
				else
					item.addClassName('OPRA_SB_section_lastChild');
					item.style.height = rowHeight + "px";
			});
		});
	}
}

/* Validate login form */

function validateLogin() {
	if ($$('#phishing').length && $$('#branch').length) {
		if ($('branch').readAttribute('disabled') != 'disabled')
			$('branch').focus();
		if (($('branch').value!='') && ($('account').value!='') && ($('subAccount').value!=''))
			$('pin').focus();
		if ($$('.errorMsg').length) {
			var target = $$('div.errorMsg label')[0].readAttribute('for');
			if ((target!="")&&($$('#'+target).length)) {
				$(target).focus();
			}
		}
	}
}

/* Set focus */

function setFocus(e) {
	if ($(e) && $(e).readAttribute('disabled') != 'disabled') $(e).focus();
}

/* Set the width of the application to fit a 1024px screen resolution, calculated in em */

function setWidth() {
	if (!isiPad && ($$('#securityTrading').length || $$('#realTimeQuotes').length)) {
		$('rollContainer').setStyle({	width: (99.4) +"em" });
	};
}

/* Open page in a popup window */

function openWin(url, name, oW_width, oW_height, oW_menubar, oW_toolbar, oW_location, oW_status, oW_scrollbars, oW_resizable) {
    // deprecated function
    openWinWithEvent(null, url, name, oW_width, oW_height, oW_menubar, oW_toolbar, oW_location, oW_status, oW_scrollbars, oW_resizable);
}

/* Open page in a popup window */

function openWin(url, name, oW_width, oW_height, oW_menubar, oW_toolbar, oW_location, oW_status, oW_scrollbars, oW_resizable) {
    // deprecated function
    openWinWithEvent(null, url, name, oW_width, oW_height, oW_menubar, oW_toolbar, oW_location, oW_status, oW_scrollbars, oW_resizable);
}

/* Open page in a popup window and stop further propagation of the event

 TODO:
 replace occurences of
 openWin(url, parameters); return false;
 with
 openWinWithEvent(event, url, parameters);

 usage for native apps:
 name:
 _blank: opens page in second window inside the app
 _system: opens page in system browser; if not running inside a native app the target is converted to _blank

 */

function openWinWithEvent(e, url, name, oW_width, oW_height, oW_menubar, oW_toolbar, oW_location, oW_status, oW_scrollbars, oW_resizable) {
    if (e != null) {
        // prevent default behaviour and stop propagation both for standard browsers and old IE versions
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;
        e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
        if (e.stopImmediatePropagation) {
            e.stopImmediatePropagation();
        }
    }

    // convert target from _system to _blank outside native apps
    if (typeof window.cordova == "undefined" && name == "_system") {
        name = "_blank";
    }
    var popup = null;
    if (typeof oW_width == "undefined") {
        popup = window.open(url, name);
    } else {
        // only build values string when width argument is given
        var values = 'width=' + oW_width + ',height=' + oW_height + ',menubar=' + oW_menubar + ',toolbar=' + oW_toolbar + ',location=' + oW_location + ',status=' + oW_status + ',scrollbars=' + oW_scrollbars + ',resizable=' + oW_resizable;
        popup = window.open(url, name, values);
    }
    if (typeof popup == "object" && popup != null) {
        if (popup.focus) {
            popup.focus();
        }
    }
}

/* Event handler for processing links in native apps */
function nativeLinkHandler(e) {
    // only process events in native apps
    if (typeof window.cordova != "undefined") {
        e = e || window.event;
        var element = e.target || e.srcElement;

        // check for parent elements ...
        element = findRelevantAnchor(element);

        if (element === null) {
            return;
        }

        if ((element.target == "blank"
            || element.target == "_blank"
            || element.className.toLowerCase().indexOf("action-icon-download") != -1
            || element.title.toLowerCase().indexOf("pdf") != -1
            || ( element.rel != "" && element.rel != "contents" )
            || element.target == "rueckrufpopup")
            && element.getAttribute("class") != "toggleContent") {
            openWinWithEvent(e, element.href, "_blank");
        } else if (element.target == "_system") {
            openWinWithEvent(e, element.href, "_system");
        }
    }
}

function openWinFromIframe(url, name) {
	openWinWithEvent(null, url, name);
}

function findRelevantAnchor(element){
    if(element.tagName.toLowerCase() == "a"){
        // found anchor - return it
        return element;
    }
    if(!element.parentElement){
        // no ancestor left - return null
        return null;
    }
    // anchor not found yet - recurse on parent element
    return findRelevantAnchor(element.parentElement);
}


/* Display help, author and copyright information */
document.onclick = function(e) {
    if (!e)
        e = window.event;
    if ((e.which || e.button) < 2) {
        // primary button only
        var target = e.target || e.srcElement;
        while (target && !/^(a|body)$/i.test(target.nodeName))
            target = target.parentNode;
        var rel = target.rel;
        if (target && rel) {
            switch (rel) {
                case 'help':
                case 'author':
                case 'copyright':
                    openWinWithEvent(e, target.href, rel, 620, 530, 0, 0, 0, 1, 1, 1);
                    break;
                case 'glossary':
                    openWinWithEvent(e, target.href, rel, 770, 530, 0, 0, 0, 1, 1, 1);
                    break;
                case 'feedback':
                    openWinWithEvent(e, target.href, rel, 650, 380, 0, 0, 0, 0, 0, 0);
                    break;
                case 'designates':
                    openWinWithEvent(e, target.href, rel, 800, 600, 0, 0, 0, 1, 1, 1);
                    break;
                default:
                    break;
            }
        }
    }
};


/* TAN keypad */

function addTANKeypad() {
	$$('#iTANContainer, #mobileTANContainer, #photoTANContainer').each(function(item){
		var module = item.readAttribute('id').replace('Container',''),
		keypadCloseTimeout = null,
		text = language == 'de' ? {
			/* german text */
			info_head: "Tipp",
			info_text: {
				iTAN: "Sie können Ihre TAN auch mit der Maus eingeben. Klicken Sie hierzu auf die Schaltfläche neben dem Eingabefeld.",
				mobileTAN: "Sie können Ihre mobileTAN auch mit der Maus eingeben. Klicken Sie hierzu auf die Schaltfläche neben dem Eingabefeld.",
				photoTAN: "Sie können Ihre photoTAN auch mit der Maus eingeben. Klicken Sie hierzu auf die Schaltfläche neben dem Eingabefeld."
			},
			key_trigger_title: "Nummernblock öffnen",
			key_header_title: "Nummernblock zur TAN-Eingabe",
			key_header_close: "Nummernblock schließen",
			key_button_del: "Korrektur"
		} : {
			/* standard english text */
			info_head: "Tip",
			info_text: {
				iTAN: "You may also enter your TAN using your mouse. Please click on the icon next to the input box.",
				mobileTAN: "You may also enter your mobileTAN using your mouse. Please click on the icon next to the input box.",
				photoTAN: "You may also enter your photoTAN using your mouse. Please click on the icon next to the input box."
			},
			key_trigger_title: "Open keypad",
			key_header_title: "Keypad",
			key_header_close: "Close keypad",
			key_button_del: "Clear"
		};

		/* margin help text */
		item.insert({
			before: new Element('div', {'id': 'keypadInfo', 'class': 'additionalInfo'})
				.insert(new Element('h4').update(text.info_head)).insert(new Element('p').update(text.info_text[module]))
		});

		/* the keypad */
		var keypadHeader = new Element('div', {id: 'keypadHeader'}).insert(new Element('div', {'class': 'inner'})
					.insert(new Element('div', {id: 'keypadTitle'}).insert(new Element('h3').update(text.key_header_title)))
					.insert(new Element('div', {id: 'keypadClose', title: text.key_header_close})
					.insert(new Element('div', {'class': 'inner'}))));
		var keypadInner = new Element('div', {'class': 'inner'}).insert(new Element('h4', {'class': 'access'}));
		for (var i=1; i<11; i++) {
			keypadInner.insert(new Element('input', {type: 'button', id: 'keypad0'+(i%10), 'class': 'button'}).setValue(i%10)
				.observe('click', function(event){enterTan(this.getValue(), module);}));
		}
		keypadInner.insert(new Element('input', {type: 'button', id: 'keypad99', 'class': 'button revision'}).setValue(text.key_button_del)
			.observe('click', function(event){enterTan(-1, module);}))
			.insert(new Element('a', {name: 'skipKeypad', id: 'skipKeypad'}));
		var keypad = new Element('div', {id: 'keypadContainer'}).insert(new Element('div', {'class': 'inner'})
				.insert(keypadHeader).insert(new Element('div', {id: 'keypadBody'}).insert(keypadInner)));
		$$('#'+module+'Input>.inner')[0].insert(new Element('div', {'id': 'keypadTrigger', title: text.key_trigger_title})
			.insert(new Element('div', {'class': 'inner'}))).insert(new Element('div', {'id': 'keypadBackdrop'})
			.insert(new Element('div', {'class': 'inner'}))).insert(keypad);
		var toggleItems = item.select('#keypadContainer, #keypadBackdrop');
		$(module+'Input').observe('mouseenter', function(){
			if (toggleItems[0].getStyle('display') != 'none') window.clearTimeout(keypadCloseTimeout);
		}).observe('mouseleave', function(){
			if (toggleItems[0].getStyle('display') != 'none') keypadCloseTimeout = window.setTimeout(function() {
				toggleItems.invoke('setStyle', {display: 'none'});}, 500);
		}).select('#keypadTrigger')[0].observe('click', function() {toggleItems.invoke('setStyle', {display: 'block'});});
		$$('#'+module+'Input #keypadClose')[0].observe('click', function() {
			toggleItems.invoke('setStyle', {display: 'none'});
		});
	});
}
function enterTan(digit, module) {
	var input = $(module);
	if (digit == -1) {
		if (input.value.length > 0) input.value = input.value.substring(0,input.value.length-1);
	} else {
		var maxLength = input.readAttribute('maxlength') || (module == 'photoTAN' ? 7 : 6);
		if (input.value.length < maxLength) input.value+=digit;
	}
}

function efaFontsize() {
	if (language=="de") {document.write('<a id="fs-small" href="#" title="Normale Schriftgr&ouml;&szlig;e">Normale Schriftgr&ouml;&szlig;e</a><a id="fs-normal" href="#" title="Gro&szlig;e Schriftgr&ouml;&szlig;e">Gro&szlig;e Schriftgr&ouml;&szlig;e</a><a id="fs-large" href="#" title="Sehr gro&szlig;e Schriftgr&ouml;&szlig;e">Sehr gro&szlig;e Schriftgr&ouml;&szlig;e</a>');}
	else {document.write('<a id="fs-small" href="#" title="Normal font size">Normal font size</a><a id="fs-normal" href="#" title="Larger font size">Larger font size</a><a id="fs-large" href="#" title="Largest font size">Largest font size</a>');}
}

function setFontsize() {
	if ($$('#fontSizer').length) {
		Cookie.init({name: 'font-sizer', expires: 90, path: "/"});
		if (Cookie.getData('font-size') == undefined) {
			Cookie.setData('font-size', 'fs-small');
		}
		var curfontsize = Cookie.getData('font-size');
		$$("body").invoke('removeClassName','fs-small').invoke('removeClassName','fs-normal').invoke('removeClassName','fs-large').invoke('addClassName', curfontsize);
		$(curfontsize).addClassName('active');

		$$('#fontSizer a').invoke('observe', 'click', function(elm){
			$$("body").invoke('removeClassName','fs-small').invoke('removeClassName','fs-normal').invoke('removeClassName','fs-large').invoke('addClassName', (this.id));
			$$('#fontSizer a').invoke('removeClassName','active');
			this.addClassName('active');
			Cookie.setData('font-size', this.id);
			handleRollContainerWidth();
			heightBalancing();
			OPrA_SB_equalSectionHeight();
			Event.stop(elm);
		});
	}
}


function observeEnterKey() {
	// extends the trigger fuction in mozilla clients
	if (document.createEvent) {
		// non-IE
		if (!HTMLElement.prototype.click) {
			 	HTMLElement.prototype.click = function() {
				 	var evt = document.createEvent("MouseEvents");
				 	evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
				 	this.dispatchEvent(evt);
				};
		}
	}

	/* observe all input fields of type text*/
	$$('input[type=text], input[type=password], #DisplayReportCenter input[type=checkbox], #DisplayReportCenter select').invoke('observe', 'keydown', function(event){
		/* abort if SuggestOutput is visible*/
		if($$('#templateSuggestOutput').length > 0 && $('templateSuggestOutput').getStyle('visibility') == 'visible') {
			return false;
		}
		/* check the keycode */
		if (event.keyCode == 13) {
			var elmList = $$('body#DisplayCashFlow input[type=submit].refresh, body#DisplayStatementOfAssets input[type=submit].refresh, input[type=submit].nextStep, input[type=submit].confirm, input[type=submit].search');
			if (elmList != undefined && elmList.length > 0) {
				Event.stop(event);
				elmList[0].click();
			}
		}
	});
}

function heightBalancing() {
	if ($$('#topicContainer').length > 0) {
		var topicContainer_height = $('topicContainer').getHeight();
		var contentContainer_height = $('contentContainer').getHeight();
		if (topicContainer_height > contentContainer_height) {
			var topicContainer_offset = $('topicContainer').cumulativeOffset()[1];
			var contentContainer_offset = $('contentContainer').cumulativeOffset()[1];
			var offset_diff =	contentContainer_offset - topicContainer_offset;
			var new_contentContainer_height = ((topicContainer_height - offset_diff) / 12) + 'em';
			if (Prototype.Browser.IE6) {
				$('contentContainer').setStyle({height: new_contentContainer_height});
			}
			else {
				$('contentContainer').setStyle({minHeight: new_contentContainer_height});
			}
		}
	}
}

/* Layout enhancement for AKK treatments */

function AKK_enhanceLayout(){

	$$('.akkContainer').each(function(container){
		container.insert({
			after: container.down(".akkFooter")
		}).setStyle({marginBottom: "0"});
	});

	var AKK_Pos7RgtColumn = $$('#headerContainer .adContainer td.rgtColumn');
	var AKK_Pos7FormAction = $$('#headerContainer .adContainer div.formAction');
	if (AKK_Pos7RgtColumn.length && AKK_Pos7FormAction.length) {
		AKK_Pos7RgtColumn.first().appendChild(AKK_Pos7FormAction.first());
	}

}

/* Postbox: Display number of unread messages */

function postboxUnreadMessages() {
	var elm = $$('.messageboxCounterContainer');
	if (elm.length) {
		elm.first().insert({top:'<span id="messageboxCounterLeft"></span><span id="messageboxCounterRight"></span>'});
	}
}

// Cookie Manager
// http://jason.pureconcepts.net/articles/javascript_cookie_object
var Cookie = {
	data: {},
	options: {expires: 1, domain: "", path: "", secure: false},

	init: function(options, data) {
		Cookie.options = Object.extend(Cookie.options, options || {});

		var payload = Cookie.retrieve();
		if(payload) {
			Cookie.data = payload.evalJSON();
		} else {
			Cookie.data = data || {};
		}
		Cookie.store();
	},
	getData: function(key) {
		return Cookie.data[key];
	},
	setData: function(key, value) {
		Cookie.data[key] = value;
		Cookie.store();
	},
	removeData: function(key) {
		delete Cookie.data[key];
		Cookie.store();
	},
	retrieve: function() {
		var start = document.cookie.indexOf(Cookie.options.name + "=");

		if(start == -1) {
			return null;
		}
		if(Cookie.options.name != document.cookie.substr(start, Cookie.options.name.length)) {
			return null;
		}

		var len = start + Cookie.options.name.length + 1;
		var end = document.cookie.indexOf(';', len);

		if(end == -1) {
			end = document.cookie.length;
		}
		return unescape(document.cookie.substring(len, end));
	},
	store: function() {
		var expires = '';

		if (Cookie.options.expires) {
			var today = new Date();
			expires = Cookie.options.expires * 86400000;
			expires = ';expires=' + new Date(today.getTime() + expires).toGMTString();
		}
		document.cookie = Cookie.options.name + '=' + escape(Object.toJSON(Cookie.data)) + Cookie.getOptions() + expires+';';
	},
	erase: function() {
		document.cookie = Cookie.options.name + '=' + Cookie.getOptions() + ';expires=Thu, 01-Jan-1970 00:00:01 GMT';
	},
	getOptions: function() {
		return (Cookie.options.path ? ';path=' + Cookie.options.path : '') + (Cookie.options.domain ? ';domain=' + Cookie.options.domain : '') + (Cookie.options.secure ? ';secure' : '');
	}
};

function cookieRepair() {
	var sessionIds = getSessionIds();
	if (sessionIds.length >= 2) {
		var past = new Date();
		past.setTime(1);
		var cookieString = 'JSESSIONID=; expires=' + past.toGMTString() + '; path=/; domain=deutsche-bank.de';
		document.cookie = cookieString;
	}
}

function getSessionIds() {
	var sessionIds = new Array();
	var cookiePairs = document.cookie.split(';');
	var cookie = '';
	var pair = '';
	// walk through each cookie and find session IDs
	var len = cookiePairs.length;
	for (var i=0; i < len; i++) {
		cookie = cookiePairs[i];
		// strip leading whitespace
		while (cookie.charAt(0)==' ') cookie = cookie.substring(1,cookie.length);
		// split name/value pair into an array
		pair = cookie.split('=');
		if (pair[0] == 'JSESSIONID') {
			//Only store JSESSIONID values
			sessionIds.push(pair[1]);
		}
	}
	return sessionIds;
}
