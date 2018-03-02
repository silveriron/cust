/* only include this script on login pages in native app that support fingerprint login */

 // <![CDATA[
 // UI for PhotoTransfer
 // does not know application logic and native integration - uses segregated DOM to separate DOM handling from application logic
 // using JQuery
var SmartwatchLoginUI = {
    showAppIntegration: function (processFunction) {
       SmartwatchLoginUI.enableSmartwatchSupport();
    processFunction();
    },
    enableSmartwatchSupport: function() {
    $("#updateSmartwatchToken").val(true);
    }
};