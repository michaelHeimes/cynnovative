(function($) {
		
// 	Home Hero Slider
	$('.hero-slider').slick({
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		prevArrow:"<button class='a-left control-c prev slick-prev'><img src='/wp-content/themes/Intyllus/assets/images/down-arrow.svg'></button>",
		nextArrow:"<button class='a-right control-c next slick-next'><img src='/wp-content/themes/Intyllus/assets/images/down-arrow.svg'></button>"
	});

		
	$(document).on('click', 'a.mobile-toggle', function(){
		$('header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header').removeClass('off-canvas-content is-open-right has-transition-push');
		console.log("loaded");
	});		
		
	
})( jQuery );


