/* only include this script on login pages in native app that support fingerprint login */

 // <![CDATA[
 // UI for PhotoTransfer
 // does not know application logic and native integration - uses segregated DOM to separate DOM handling from application logic
 // using JQuery
 var FingerprintLoginUI = {
     showAppIntegration: function (processFunction) {
         FingerprintLoginUI.enableFingerprintSupport();
         processFunction();
     },
     enableFingerprintSupport: function () {
         $("#updateFingerprintToken").val(true);
     },
     fillForm: function (credentials) {
         $("#branch").val(credentials.branch);
         $("#account").val(credentials.account);
         $("#subaccount").val(credentials.subaccount);
         $("#updateFingerprintToken").val(true);
     },
     fillFormAndSubmit: function (credentials) {
    	 $("#branch").val(credentials.branch);
         $("#account").val(credentials.account);
         $("#subaccount").val(credentials.subaccount);
         $("#fingerprintToken").val(credentials.fingerprintToken);
         $("#fingerprintTokenVersion").val(credentials.fingerprintTokenVersion);
         $("#updateFingerprintToken").val(true); 
         $("#loginForm").submit();
     },
     submitForm: function () {
         $("#loginForm").submit();
     },
     clearForm: function () {
         $("#branch").val("");
         $("#account").val("");
         $("#subaccount").val("00");
         $("#fingerprintToken").val("");
         $("#fingerprintTokenVersion").val("");
         $("#updateFingerprintToken").val(true);
     }
 };