/*--------------------------------------------------------------------------
--
--   @(#) Datei   : winxpCompatibilityExpiryLayer
--   @(#) Version : [version]
--   @(#) Status  : [state]
--   @(#) Datum   : [modtime]
--   @(#) Pfad    : [viewpath]
--   @(#) Package : [package]
--
----------------------------------------------------------------------------
--
--   Aenderungen:
--
--   LNR  Datum       Name/Firma                    SCR/Beschreibung
--
--   000  26.09.2014  Epplee/SinnerSchrader      Initiale Version
--   001  30.09.2014  Grapentin/SinnerSchrader   Changed overlayDiv to overlayHelp Layer
--
--------------------------------------------------------------------------*/
/**
 * <p>
 * Dies ist kein jQuery-Plugin, sondern ein kleines Skript, das nach dem Laden der Seite prüft, ob der User Windows XP verwendet
 * und wenn dies der Fall ist ein Overlay anzeigt.
 * </p>
 *
 * @author <a href="sinnerschrader.com">SinnerSchrader</a>
 * @function
 */
(function($) {
    var settings = {
        overlayTargetId: 'layerTargetHelp',
        cookieName: 'winxpCompatibilityExpiryLayerShown',
        overlayURL: '/cms/help/winxp_compatibility_expiry_help.html',
    };
    $(document).ready(function() {
        var isXP = /(Windows NT 5.1)|(Windows XP)/.test(navigator.userAgent);
        var MSIEversion;
        var FirefoxVersion;
        var SafariVersion;
        if (/MSIE[\/\s](\d+\.\d+)/.test(navigator.userAgent)) { //test for MSIE/x.x or MSIE x.x (ignoring remaining digits);
            MSIEversion = new Number(RegExp.$1) // capture x.x portion and store as a number
        }
        if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) { //test for Firefox/x.x(ignoring remaining digits);
            FirefoxVersion = new Number(RegExp.$1) // capture x.x portion and store as a number
        }
        if (navigator.userAgent.indexOf("Safari")!=-1)  { //test for Safari;
            if (/Version[\/\s](\d+\.\d+)/.test(navigator.userAgent))  { //test for Version/x.x(ignoring remaining digits);
                SafariVersion = new Number(RegExp.$1) // capture x.x portion and store as a number
            } 
        } 
        if ((isXP || MSIEversion <= 10 || FirefoxVersion <=40 || SafariVersion <=8) && !wasOverlayShown()) {
            setOverlayShown(true);
            showOverlay();
        }
        function showOverlay() {
                $('<div id="' + settings.overlayTargetId + '" class="contentOverlay" style="background-color:#fdf2ab;position: fixed; z-index: 9999; top: 175.05px; left: 131.5px;"><a class="overlayCloseButton js_closeOverlay"></a></div>')
                .appendTo('body')
                .overlay({
                    target: '#' + settings.overlayTargetId,
                    ajaxURL: settings.overlayURL,
                    effect: 'defaultAjax',
                    load: true // don't wait for a click event, show the overlay directly after loading
                });
        }
        function setOverlayShown(overlayShown) {
            var exdate = new Date();
            exdate = new Date(exdate.setHours(exdate.getHours()+24));
            document.cookie = settings.cookieName + '=' + overlayShown.toString() + ';expires=' + exdate.toGMTString() + ';path=/;domain=.comdirect.de';
        }
        function wasOverlayShown() {
            var allCookies = document.cookie.split(';');
            for (var i = 0; i < allCookies.length; i++) {
                if (allCookies[i].indexOf(settings.cookieName + '=') != -1) {
                    var cookieVal = allCookies[i].substr(allCookies[i].indexOf(settings.cookieName) + settings.cookieName.length + 1);
                    return (cookieVal === 'true');
                }
            }
            // No cookie with settings.cookieName found
            return false;
        }
    });
})(jQuery);