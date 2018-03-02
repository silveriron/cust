/*
	Last update: 	2014-08-08
	Version:		10.1.4.5
*/

function doNext(el, e){ 
    if (!(e.keyCode==16 || (e.keyCode==9) || (e.keyCode==37) || (e.keyCode==38) || (e.keyCode==39) || (e.keyCode==40)))  // to capture tab key press
    { 
        if (el.value.length < el.getAttribute('maxlength')) return;        
        setFocusNext(el);
    }
}

function setFocusNext(el){
    var f = el.form;
    var els = f.elements;    
    var x, nextEl;
    
    for (var i=0, len=els.length; i<len; i++){
        x = els[i];
        if (el == x && (nextEl = els[i+1])){
        	if(nextEl.getAttribute('id') == 'subaccount' && i < len-1) nextEl = els[i+2];
        	if (nextEl.focus) nextEl.focus();
        }
    }
}