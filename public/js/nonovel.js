/*
|--------------------------------------------------------------------------
| nonovel.js
|--------------------------------------------------------------------------
|
| nonovel.jp original javascript
| version 0.1 / 2016.04.05 / miz.takagi
|
*/

(function( $ ){
	$.fn.footerMenu = function() {
		$(window).scroll(function() {
	    	if ($(document).scrollTop() > 10) {
	      		$('#footerMenu').addClass("show");
	    	} else {
	      		$('#footerMenu').removeClass("show");
	    	}
	  	});
	};
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
})( jQuery );
