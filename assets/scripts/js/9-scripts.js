(function($) {
		
// 	Home Pinned Scroll Slider

	if($('.typing-title').length ) {
		
	var $wrap = $('.typing-title h1.title');

	typing( 0, $('.typewriter-text').data('text') );
	
	function typing( index, text ) {
	
	var textIndex = 1;
	
	var tmp = setInterval(function() {
	  	if ( textIndex < text[ index ].length + 1 ) {
				$('.typewriter-text').text( text[ index ].substr( 0, textIndex ) );
				textIndex++;
			} else {
			setTimeout(function() { deleting( index, text ) }, 2000);
			clearInterval(tmp);
	  	}
	
	}, 150);
	
	}
	
	function deleting( index, text ) {
	
	var textIndex = text[ index ].length;
	
	var tmp = setInterval(function() {
	
		if ( textIndex + 1 > 0 ) {
	    	$('.typewriter-text').text( text[ index ].substr( 0, textIndex ) );
			textIndex--;
	  	} else {
	    	index++;
	    if ( index == text.length ) { index = 0; }
	    	typing( index, text );
			clearInterval(tmp);
	  }
	
		}, 150)
	
	}
			
			
	}
	
	
	if($('h1.title').length ) {
		window.onload = function() {
		var str = $(".title-banner .title").text();
		str.replace("|", "W3Schools");	
		}
	}
	
	
	if($('.pss-slides').length ) {
		
		var controller = new ScrollMagic.Controller(); 
		
		var $vpHeight = window.innerHeight; 
		var $slideCount = $('.pss-slides .single-slide').length;

		function setPSSHeight() {
			
		if (window.innerHeight > 1100) {
			$('.pss-slides').css('height', '1100px');
		
		} else {
			$('.pss-slides').css('height', '100vh');
		}	
		
		};
		setPSSHeight();
		
		$(window).resize(function() {
			setPSSHeight();
		});

		
		var pinDuration = 400 * $slideCount;
								
		var scene = new ScrollMagic.Scene({
	        triggerElement: ".pss-slides",
	        triggerHook: "onLeave",
	        offset: 0,
	        duration: pinDuration
		})
		.setPin('.pss-slides')
// 		.setClassToggle(this, "active")
		.addTo(controller);
		
		$('.pss-slides .single-slide').first().addClass('active');
		
		$('.pss-slides .single-slide').first().each(function(index, element) {
			
			$heading = $(this).find('h3');
			$text = $(this).find('p');
			
			var $slideNumber = $('.pss-slides .single-slide').index(this);
			
			var tweenOffset = 400 * $slideNumber;
			
// 			console.log(tweenOffset);
		
			new ScrollMagic.Scene({
				triggerElement: ".pss-slides",
		        triggerHook: "onLeave",
		        offset: 400,
		        duration: pinDuration * 2
			})
			.setClassToggle(this, "hide")
			.addTo(controller);
					
		});
		
		
		$('.pss-slides .single-slide:not(:first-child):not(:last-child)').each(function(index, element) {
			
			$heading = $(this).find('h3');
			$text = $(this).find('p');
			
			var $slideNumber = $('.pss-slides .single-slide').index(this);
			
			var tweenOffset = 400 * $slideNumber;
			
// 			console.log(tweenOffset);
		
			new ScrollMagic.Scene({
				triggerElement: ".pss-slides",
		        triggerHook: "onLeave",
		        offset: tweenOffset,
		        duration: 400
			})
			.setClassToggle(this, "active")
			.addTo(controller);
					
		});
		

		$('.pss-slides .single-slide:last-child').each(function(index, element) {
			
			$heading = $(this).find('h3');
			$text = $(this).find('p');
			
			var $slideNumber = $('.pss-slides .single-slide').index(this);
			
			var tweenOffset = 400 * $slideNumber;
					
			new ScrollMagic.Scene({
				triggerElement: ".pss-slides",
		        triggerHook: "onLeave",
		        offset: tweenOffset
			})
			.setClassToggle(this, "active")
			.addTo(controller);
					
		});
		
		
		$(document).on('click', '.chev-down-wrap img', function(e){
			$('html, body').animate({scrollTop: '+=400px'}, 400);
		});
		
	
	}
	
	
// 	Blog Slider
	$('.blog-slider').slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		dots: false,
		nextArrow: '<button class="slick-next"><img src="/wp-content/themes/cynnovative/assets/images/slide-next.png"/></button>',
		prevArrow: '<button class="slick-prev"><img src="/wp-content/themes/cynnovative/assets/images/slide-prev.png"/></button>',
		responsive: [
		    {
		      breakpoint: 640,
		      settings: {
			    infinite: true,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots:false
		      }
		    }
		]
	});	


// 	Contractor Slider
	$('.contractor-slider').on('init', function(event, slick){
		setTimeout(function() {
			$('.contractor-slider-wrap .contractor-slidernav .nav').addClass('slide-1-current');
		}, 1);
	});
		
	$('.contractor-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		nextArrow: '<button class="slick-next"><img src="/wp-content/themes/cynnovative/assets/images/slide-next.png"/></button>',
		prevArrow: '<button class="slick-prev"><img src="/wp-content/themes/cynnovative/assets/images/slide-prev.png"/></button>',
	}).on({
	    beforeChange: function (event, slick, currentSlide, nextSlide) {
		    
	        $('.contractor-slider-wrap .contractor-slidernav .nav').removeClass(slick.$slides.eq(currentSlide).data('slide') + '-current').addClass(slick.$slides.eq(nextSlide).data('slide') + '-current')
   
	    }
		});	

	$('a[data-slide]').click(function(e) {
		e.preventDefault();
		
		var slideno = $(this).data('slide');
/*
		
		var $currentClasses = $('slide-1-current', 'slide-2-current', 'slide-3-current', 'slide-4-current');
	        
	    $('.contractor-slider-wrap .contractor-slidernav .nav').removeClass($currentClasses).addClass( 'slide-' + slideno + '-current');
*/

		$('.contractor-slider').slick('slickGoTo', slideno - 1);
	});	
	
// 	$('.contractor-slider-wrap .contractor-slidernav .nav .nav-link-wrap:first-child').addClass('clicked');
	
})( jQuery );


