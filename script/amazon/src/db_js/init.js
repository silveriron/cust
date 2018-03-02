/* Version 5.0.4 from 27 July, 2016 */

/*
A fix for the iOS orientationchange zoom bug.
Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.
https://github.com/scottjehl/iOS-Orientationchange-Fix
*/
(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this);

$(function() {
	$('html').removeClass("no-js").addClass("js");
	makeLabelsClickable();
	toggleContents();
	toggleCredentialsInfo();
	togglePhotoTANAppInfo();
	// toggleInfos(); // We'll keep this for a later version.
	fixOPRAFirstBookedTransactionsTable();
	setTeaserEffect();
	enhancePostbox();
    toggleAnnotation();
});

function toggleAnnotation() {
    var hasAnnotation = $(".hasAnnotation");
    if (hasAnnotation.length) {
        hasAnnotation.children('label:not(.access)').after('<span class="toggleAnnotationTrigger" />');
        $('.toggleAnnotationTrigger, .annotationContainer').on('click', function(){
            $(this).closest(hasAnnotation).toggleClass('isVisible');
        }); 
    }
}

function toggleCredentialsInfo() {
	$('#fldSaveCredentials').append('<span id="credentialsInfoTrigger" />');
	$('#credentialsInfoContent').hide();
	$('#credentialsInfoTrigger').on('click', function(){
		$('#credentialsInfoContent').toggle();
		$('#credentialsInfoTrigger').toggleClass('isVisible');
	});
}

function togglePhotoTANAppInfo() {
	//$('#fldSaveCredentials').append('<span id="credentialsInfoTrigger" />')
	$('#photoTANInvokeAppHelpContent').hide();
	$('#photoTANInvokeAppHelpTrigger').on('click', function(){
		$('#photoTANInvokeAppHelpContent').toggle();
		$('#photoTANInvokeAppHelpTrigger').toggleClass('isVisible');
	});
}

function toggleInfos() {
	$('.infoTrigger').wrapInner('<span/>').append('<span class="infoTriggerIcon" />');
	$('.infoContent').hide();
	$('.infoTriggerIcon').on('click', function(){
		$(this).toggleClass('isVisible');
		$(this).parent().nextAll('.infoContent').first().toggle();
	});
}

//fix table inside #OPRA_div-first_bookedtransactionstable_transactions so that each row only contains two cells
function fixOPRAFirstBookedTransactionsTable() {

  $('#OPRA_div-first_bookedtransactionstable_transactions').each(function(){

    var $header = $(this).prev();
    var $tbody = $(this).find('tbody');
    var $row1 = $($(this).find('tr').get(0)).find('td');
    var $row2 = $($(this).find('tr').get(1)).find('td');

    $tbody
    .before($('<thead />')
    .append('<th colspan="2">' +  $header.text() + '</th>'));

    $row1.each(function(i) {
        if (!$row1[i]) return;
        if (!$row2[i]) return;

        $tbody.append(
          $('<tr />').append($row1[i]).append($row2[i])
        );

    });

    $header.remove();

  });


}

function makeLabelsClickable() {
	$('label').on('click', function(e){
		void(0);
	});
}

function toggleContents() {
    // hide content on page load
    $('.toggleDetails').hide();

    $('.toggleContainer').on('click', '.toggleTrigger:not(.disabled)', function() {
        $(this).parent().toggleClass('toggleVisible');
    });
}

function efaFontsize() {
	/* Just a blank function in order to prevent a JS error in the OPrA pages. */
}

function setTeaserEffect() {
	if ($('#contentContainer').prev('.akkContainer').length) {
		$('body').addClass("hasFixedTeaser");
	}
}

function enhancePostbox() {
    $('#DisplayNachrichtenboxUebersicht .nachrichtenboxDeaktiviertHinweis').html('<div class="advice" style="margin-bottom: 1em;"><h3>Wichtiger Hinweis</h3><p>Ihr pers&ouml;nliches Postfach ist aktuell deaktiviert. Rufen Sie Ihre pers&ouml;nliche Bankpost bequem im Online Banking ab, dazu m&uuml;ssen Sie Ihr Postfach im Online Banking mit Ihrem PC oder Tablet aktivieren.</p></div>');
    $('.box-inbox .action-more').text('Alle anzeigen');
    $('.modal').wrapInner('<div class="modal-inner" />');
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
            ||
            element.className.toLowerCase().indexOf("action-icon-download") != -1
            || element.title.toLowerCase().indexOf("pdf") != -1
            || element.rel != "" || element.target == "rueckrufpopup")
            && element.getAttribute("class") != "toggleContent") {
            openWinWithEvent(e, element.href, "_blank");
        } else if (element.target == "_system") {
            openWinWithEvent(e, element.href, "_system");
        }
    }
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
