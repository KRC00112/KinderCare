(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 
	
	/* Preloader Effect */
	$window.on( "load", function() {
	   $(".preloader").fadeOut(600);
    });
	
	/* slick nav */
	$('#main-menu').slicknav({prependTo:'#responsive-menu',label:'', closeOnClick:true});
	
	/* Stickey Header */
	window.onscroll = function() {myFunction()};
	var navbar = document.getElementById("main-navbar");
	var sticky = navbar.offsetTop;
	function myFunction(){
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky-header")
		} else {
			navbar.classList.remove("sticky-header");
		}
	}
	
	/* Top Menu */
	$(document).on('click','.navbar-nav li a, #responsive-menu ul li a',function(){
		if($(this).hasClass("has-popup")) return false;
		var id = $(this).attr('href');
		if($(id).length) {
			var h = parseFloat($(id).offset().top);
			$('body,html').stop().animate({
				scrollTop: h - 70
			}, 800);
			return false;
		}
		
	});
	
	/* Pop up page*/
	var $haspopup = $(".gallery"); 
	if($haspopup.length){
		$haspopup.magnificPopup({
			 delegate: 'a',
			type: 'image',
			gallery:{
				enabled:true
			},
			zoom:{
					enabled: true,
					duration: 300,
					easing: 'ease-in-out',
					opener: function(openerElement) {
						return openerElement.is('img') ? openerElement : openerElement.find('img');
					}
				}
			});	
	}
	
	/* Testimonial slider */
	var swiper = new Swiper('.testimonial-slider',{
		loop: true,
		slidesPerView: 1,
		spaceBetween: 0,
		pagination: {
			el: '.testimonial-pagination',
			type: 'bullets',
			clickable: true,
		}
    });
	
	/* Event slider */
	var swiper = new Swiper('.event-slider',{
		loop: true,
		slidesPerView: 3,
		spaceBetween: 0,
		pagination: {
			el: '.event-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: {
			991: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			768: {
				slidesPerView: 1,
				spaceBetween: 0
			}
		}
    });
	
	/* Popup video */
	var $popupvideo = $(".popup-video"); 
	if($popupvideo.length){
		$popupvideo.magnificPopup({
			type: 'iframe',
			preloader: true,
		});
	}
	
	/* Animate with wow js */
    new WOW({mobile:false}).init(); 
	
	/* Animated Header Slider Start */
	var swiperAnimation = new SwiperAnimation();
	var mySwiper = new Swiper('.swiper-container.banner-slider', {
		effect: 'fade',
		speed: 2000,
		autoplay: {
			delay: 6000
		},
		navigation: {
			nextEl: '.banner-button-next',
			prevEl: '.banner-button-prev',
		},
		on: {
			init: function() {
				swiperAnimation.init(this).animate();
			},
			slideChange: function() {
				swiperAnimation.init(this).animate();
			}
		}
	});
	console.log(mySwiper);
	
})(jQuery);