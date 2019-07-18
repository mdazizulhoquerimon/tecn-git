
$(window).on("load",function() {
	/* start fixed top header on scroll*/
	$(window).scroll(function() {
	    var scroll = $(window).scrollTop();

	    if (scroll > 80) { 
	        $(".header-area-bottom").addClass("fixed-top animated fadeInDown");
	    } else {
	        $(".header-area-bottom").removeClass("fixed-top animated fadeInDown");
	    }
	});
	/* end fixed top header on scroll*/




	jQuery(".loading").fadeOut();
    jQuery(".loading-in").delay(2000).fadeOut("slow");

	//$('.loading').addClass('fadeOut');

	/* start home page slider */
	var target_flexslider = $('.flexslider');
       target_flexslider.flexslider({
           animation: "slide",  
           slideshow: false,
           controlsContainer: ".slider",

           start: function(slider) {
               target_flexslider.removeClass('loading');
           }
	});

	/*$('.flexslider').flexslider({
		animation: "slide"
	});*/
	/* end home page slider */

	/* start department*/
  	$(".owl-carousel").owlCarousel({
	    items:4,
	    lazyLoad:true,
	    loop:true,
	    margin:50,
	    dots: false,
	    nav:true,
	    navText: ['<i class="fas fa-angle-left fa-3x"></i>','<i class="fas fa-angle-right fa-3x"></i>'],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        400:{
	            items:2,
	            nav:true,
	    		marginleft:20,
	    		marginRight:20
	        },
	        768:{
	            items:3,
	            nav:true,
	    		marginleft:20,
	    		marginRight:20
	        },
	        1200:{
	            items:4,
	            nav:true,
	    		marginleft:20,
	    		marginRight:20
	        }
	    }
	});
	/* end department*/


	/* page notice-board */
	$(document).ready(function() {
		$('#notice-card-right-body-table').DataTable( {
	        select: true
	    } );
	} );
	
	/* end page notice-board */
});