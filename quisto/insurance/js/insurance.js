
//nav-menu
(function($){
	"use strict";
	$('.navbar .dropdown').hover(function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown(200);
	}, function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp(400);
	});
})(jQuery);

(function($){
	"use strict";
	// --------------------------------------------------
	// Sticky header
	// --------------------------------------------------
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {			
			$('#insurance-header-menu').addClass('insurance-header-sticked');
			$('.insurance-content').css('padding-top', $('#insurance-header-menu').height() + 'px');
		} else {			
			$('#insurance-header-menu').removeClass('insurance-header-sticked');
			$('.insurance-content').css('padding-top', 0);
		}
	});
	
	// --------------------------------------------------
	// nav bars
	// --------------------------------------------------

	$('.tp-navbar .navbar-nav li').hover(function() {
		$(this).find('> ul').stop(true, true).slideDown(200);
	}, function() {
		$(this).find('> ul').stop(true, true).slideUp(200);
	});
	
	$('nav.site-mobile-menu > button').click(function() { $(this).parent().find('> ul').slideToggle(); } );
	$('nav.site-mobile-menu > ul li').each(function() {
		if ($(this).find('> ul').length != 0) {
			$('<i class="fa fa-plus"></i>').prependTo($(this));
		}
	});
	$('nav.site-mobile-menu > ul li i').click(function() {
		$(this).toggleClass('fa-minus').parent().find('> ul').slideToggle();
	});	
})(jQuery);


//client carouset
(function($){
	"use strict";
	// JavaScript Document
	$(document).ready(function() {
		$("#client-demo").owlCarousel({
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
		  stopOnHover : true,
		  items : 4,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3],
		  navigation : false
		});
	});
})(jQuery);


//testimonial
(function($){
	"use strict";
	$(document).ready(function() {
		$("#testimonial").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			stopOnHover : true,
			items : 2,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			navigation : false
		});
	});
})(jQuery);

//slider
(function($){
    "use strict";
	$(document).ready(function() {
		$("#slider").owlCarousel({
			navigation : true, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true,
			navigationText : false, 
			transitionStyle : 'fade',
			autoPlay : true,	
		});
	});
})(jQuery);


//search
(function($){
	"use strict";
	// JavaScript Document
	//show and hide search bar
	$( document ).ready(function() {
	  $(".search").click(function(){
		$(".search-open").slideToggle('1000');
	  });
	});
})(jQuery);


//font size
(function($){
	"use strict";
	$(document).ready(function() { 
		$('#incfont').click(function(){    
			curSize= parseInt($('.font-increase').css('font-size')) + 2;
		if(curSize<=28)
			$('.font-increase').css('font-size', curSize);
			});  
		$('#decfont').click(function(){    
			curSize= parseInt($('.font-increase').css('font-size')) - 2;
		if(curSize>=12)
			$('.font-increase').css('font-size', curSize);
		}); 
	});
})(jQuery);

//produc carouset
(function($){
	"use strict";
	$(document).ready(function() {
	  $("#product").owlCarousel({
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
		  stopOnHover : true,
		  items : 4,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3],
		  navigation : false
		  });
	});
})(jQuery);

//offset
(function($){
  "use strict";
// JavaScript Document
	/* activate sidebar */
	$('#sidebar').affix({
	  offset: {
		top: 530,
	  }
	});

	/* activate scrollspy menu */
	var $body   = $(document.body);
	var navHeight = $('.navbar').outerHeight(true) + 10;

	$body.scrollspy({
		target: '#leftCol',
		offset: navHeight
	});

	/* smooth scrolling sections */
	$(window).load(function(){"use strict";
		/* Page Scroll to id fn call */
		$("ul.nav li a").mPageScroll2id({
			highlightSelector:"ul.nav li a",
			offset: 70,
			scrollSpeed:1000,
			scrollEasing: "easeInOutCubic"
		});						
	});	

	$(window).bind('scroll', function() {
	  "use strict";
		if($(window).scrollTop() >= $('.tp-footer').offset().top - window.innerHeight) {     
			$(".hide-side").hide('fast');
		}else{
			$(".hide-side").show('fast');
		}
	});

	if ($('#back-to-top').length) {
	    var scrollTrigger = 500, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
    }

})(jQuery);