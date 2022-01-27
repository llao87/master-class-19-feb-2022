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


	$(document).mouseup( function(e){ // событие клика по веб-документу
		var div = $( "#popup" ); // тут указываем ID элемента
		if ( !div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
			div.hide(); // скрываем его
		}
	});


	// пропадание и появление плейсхолдера при фокусировке и расфокусировке на инпуте
	jQuery('.field').focus(function(e) {
		jQuery(this).attr('placeholder', '');
	})


	jQuery('.field').blur(function(e) {
		jQuery(this).attr('placeholder', jQuery(this).data('placeholder'));
	})
});