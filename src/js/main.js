$(document).ready(function(){
	console.log('main.js works');
	wow = new WOW(
	{
		animateClass: 'animate__animated',
		offset: 0,
		callback: function(box) {
			console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	}
	);
	wow.init();


	jQuery('.toNextBlock').click(function(){
		var scrollElem = jQuery('section.program');

		jQuery('html, body').animate({
			scrollTop: jQuery(scrollElem).offset().top
		}, {
			duration: 700,   // по умолчанию «400» 
			easing: "linear" // по умолчанию «swing» 
		});

		return false;
	})
});