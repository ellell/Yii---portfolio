$(document).ready(function() {
  // Handler for .ready() called.
  $(".gTh").hide();
  
  
  function randsort(c) {
	var o = new Array();
	for (var i = 0; i < c; i++) {
		var n = Math.floor(Math.random()*c);
		if( jQuery.inArray(n, o) > 0 ) --i;
		else o.push(n);
	}
	return o;
}

var e = $(".gTh");
var c = e.size()+1;
var r = randsort(c);

$(".gTh").each(function(i) {
	var e = $(this);
	e.fadeTo(0, 0);
		//e.css('position', 'relative');
		//e.css('left', '-2000px');
		setTimeout(function(){
			//e.fadeTo(250, 1000);
			e.animate({
			//left: 0,
			opacity: 1,
			}
			, 1000)
		}, (r[i])*300);

});



});