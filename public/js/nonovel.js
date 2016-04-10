/*
|--------------------------------------------------------------------------
| nonovel.js
|--------------------------------------------------------------------------
|
| nonovel.jp original javascript
| version 0.1 / 2016.04.05 / miz.takagi
|
*/

$(function(){
	/* menu */
  $("#title").on("click",function(){
  	location.href="/";
  });

  $(".smenu").on({
	  'click': function() {
	    menuWide($(this), 1);
	    return false;
	  },
	  'mouseleave': function() {
	    menuWide($(this), 2);
	  }
  });

  /* modal */

  $('.modal-button').click(function() {
  	if(!($(this).hasClass('circle'))){
	    var target = $(this).data('target');
	    $('html').addClass('has-modal-open');
	    $(target).addClass('is-active').fadeIn(300);
	  }
  });

  $('.modal-background, .modal-close').click(function() {
    $('html').removeClass('has-modal-open');
    $(this).parent().removeClass('is-active');
  });

  /* footer */

	$.fn.footerMenu = function() {
		$(window).scroll(function() {
	    	if ($(document).scrollTop() > 10) {
	      		$('#footerMenu').addClass("show");
	    	} else {
	      		$('#footerMenu').removeClass("show");
	    	}
	  	});
	};

	/* data */
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	/* functions */
	function menuWide(me,flag){
  	var child = me.children("p");
  	var txt = child.text();
  	var newtxt = me.data("role");
  	var id = me.attr("id");
  	var position = me.position();
		if(flag==2){
			$("p").remove(".long");
		}else{
			if(!($(".long").length)){
				var clone = child.clone(true).appendTo(me);
				clone.removeClass("circle").addClass("long clone").css({"top":position.top+10,"left":position.left}).text(newtxt);
			}
		}
	}
});
