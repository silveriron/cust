!function(e){jQuery.fn.topframechecker=function(r){var t={reportTestNoFrame:!1},o=e.extend(t,r);return this.each(function(){window!=top?top.location=self.location:o.reportTestNoFrame&&alert("Not in frame!")})}}(jQuery),$.ccfregistry.pluginReady("topframechecker");