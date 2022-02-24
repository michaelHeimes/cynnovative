jQuery( document ).ready(function($) {
		
// 	Home Typing Banner
	if($('.typing-title').length ) {
		

        var cursor = true;
        var speed = 750;
        setInterval(() => {
          if(cursor) {
            document.getElementById('type-cursor').style.opacity = 0;
            cursor = false;
          }else {
            document.getElementById('type-cursor').style.opacity = 1;
            cursor = true;
          }
        }, speed);


		
// 		var $wrap = $('.typing-title h1.title');
	
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
		
		 const splitSliderLeft = {
		   slidesToShow: 1,
		   slidesToScroll: 1,
		   arrows: false,
		   //autoplay: true,
		   autoplaySpeed: 5000,
		   asNavFor: '.split-slider',
		   dots: true,
		   fade: true,
		   infinite: true,
		   fade: true,
		   rows: 0,
		   dots: false,
		   pauseOnHover: false
/*
		   		nextArrow: '<button class="slick-next"><img src="/wp-content/themes/cynnovative/assets/images/slide-next.png"/></button>',
		prevArrow: '<button class="slick-prev"><img src="/wp-content/themes/cynnovative/assets/images/slide-prev.png"/></button>',
*/
		 };
		 const splitSliderRight = {
		   slidesToShow: 1,
		   arrows: false,
		   centerMode: true,
		   //autoplay: true,
		   autoplaySpeed: 7000,
		   slidesToScroll: 1,
		   asNavFor: '.split-slider',
		   speed: 500,
		   focusOnSelect:true,
		   infinite: true,
		   fade: true,
		   rows: 0,
		   dots: false,
		   pauseOnHover: false
		 };

		$('.split-slider-left').slick(splitSliderLeft);
		 
		$('.split-slider-right').slick(splitSliderRight);

		$('.slick-prev').click(function(){ 
			$('.split-slider-left').slick('slickPrev');
		} );
		 
		$('.slick-next').click(function(){ 
			$('.split-slider-left').slick('slickNext');
		} );
		
/*
	$('.pss-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		nextArrow: '<button class="slick-next"><img src="/wp-content/themes/cynnovative/assets/images/slide-next.png"/></button>',
		prevArrow: '<button class="slick-prev"><img src="/wp-content/themes/cynnovative/assets/images/slide-prev.png"/></button>',
	});
*/
		
	
	}
	
	
// 	Grid Rows
	if ( $('.grid-rows').length ) {
		

		
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
	
});


