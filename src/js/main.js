jQuery(function () {
	console.log('main.js works');
	wow = new WOW(
		{
			animateClass: 'animate__animated',
			offset: 0,
			callback: function (box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		}
	);
	wow.init();

	var swiper = new Swiper(".mySwiper", {
		// slideToClickedSlide: true,
		loop: true,
		// initialSlide: 3,
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		spaceBetween: 50,
		slidesPerView: "auto",
		coverflowEffect: {
			rotate: 20,
			stretch: 1,
			depth: 100,
			modifier: 1,
			slideShadows: false
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 0
			},
			// when window width is >= 700px
			700: {
				slidesPerView: 2,
				spaceBetween: 40
			},
			// when window width is >= 991px
			991: {
				slidesPerView: 3,
				spaceBetween: 40
			}
		},
	});

	// Прокрутка с промо экрана по кнопке
	jQuery('.toNextBlock').on('click', function () {
		var scrollElem = jQuery('section.program');

		jQuery('html, body').animate({
			scrollTop: jQuery(scrollElem).offset().top
		}, {
			duration: 700,   // по умолчанию «400» 
			easing: "linear" // по умолчанию «swing» 
		});

		return false;
	})

	// пропадание и появление плейсхолдера при фокусировке и расфокусировке на инпуте
	jQuery('.field').on('focus', function (e) {
		jQuery(this).attr('placeholder', '');
	})


	jQuery('.field').on('blur', function (e) {
		jQuery(this).attr('placeholder', jQuery(this).data('placeholder'));
	})

	// Телефон в форме
	jQuery("#js-phone-field").mask("+7 (999) 999-99-99");
});