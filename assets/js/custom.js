$(document).ready(function(){
	/* New Product Owl Carousel */
	var owl = $('.new-product-owl');
	owl.owlCarousel({
		loop:true,
		nav:false,
		margin:30,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:2
			}
		}
	});
	/* New Product Owl Carousel */

	/* Timeline Owl Carousel */
	var owl = $('.timeline-owl');
	owl.owlCarousel({
		loop:false,
		nav:false,
		margin:0,
		responsive:{
			0:{
				items:1,
		        startPosition: 1
			},
			600:{
				items:2,
				startPosition: 1
			},
			1000:{
				items:4,
				startPosition: 0
			}
		}
	});
	/* /Timeline Owl Carousel */

	/* Owl Carousel Mouse Whell */
	/*owl.on('mousewheel', '.owl-stage', function (e) {
	    if (e.deltaY>0) {
	        owl.trigger('next.owl');
	    } else {
	        owl.trigger('prev.owl');
	    }
	    e.preventDefault();
	});*/
	/* /Owl Carousel Mouse Whell */

	/* Mobile Menu */
	$("#sidebar").mCustomScrollbar({
		theme: "minimal"
	});

	$('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		$('.overlay').removeClass('active');
	});

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').addClass('active');
		$('.overlay').addClass('active');
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');
	});
	/* /Mobile Menu */

	/* Bootstrap Carousel Swipe Slide */
	$(".carousel").swipe({

		swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

			if (direction == 'left') $(this).carousel('next');
			if (direction == 'right') $(this).carousel('prev');

		},
		allowPageScroll:"vertical"

	}); 
	/* /Bootstrap Carousel Swipe Slide */

	/* Wow Js Init */
	new WOW().init();
	/* /Wow Js Init */

	/* Tooltip Active */
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	/* /Tooltip Active */
})	