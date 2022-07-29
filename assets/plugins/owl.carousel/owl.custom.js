jQuery(document).ready(function ($) {
	// carousel
	$('#owl-demo2').owlCarousel({
		margin: 20,
		nav: false,
		autoplay: 2000,
		dots: false,
		autoplayTimeout: 2000,
		loop: true,
		mouseDrag: true,
		TouchDrag: true,
		responsive: {
			0: {
				items: 1
			},
			700: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	})
	$('#owl-demo').owlCarousel({
		margin: 20,
		nav: false,
		autoplay: 2000,
		dots: false,
		autoplayTimeout: 2000,
		loop: true,
		mouseDrag: true,
		TouchDrag: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})
});