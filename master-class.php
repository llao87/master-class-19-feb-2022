<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $code = $APPLICATION->CaptchaGetCode(); ?>


<form class="sign-up-form" method="POST" action="#">
	<div class="form-offer">Записаться на мастер-класс</div>
	<div class="form-title">Количество участников <br>ограничено!</div>
	<div class="input" type="hidden" name="study-type"></div>
	<div class="fields">
		<div class="field-box">
			<input class="field" type="text" placeholder="Ваше имя *" data-placeholder="Ваше имя *">
		</div>

		<div class="field-box">
			<input class="field" id="js-phone-field" type="text" placeholder="Ваш номер телефона *" data-placeholder="Ваш номер телефона *">
		</div>

		<div class="field-box">
			<input class="field" name="captcha_word" type="text" placeholder="Введите символы с картинки *" data-placeholder="Введите символы с картинки *">

			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$code;?>" alt="CAPTCHA" width="200" class="captcha_img" />          
		    <a style="color:#000;" href="#" rel="nofollow" class="update">обновить картинку</a> <br />   <br />  
		    
		    <input type="hidden" name="captcha_sid" value="<?=$code;?>" />
		</div>

		<div class="submit-box">
			<input class="submit" type="submit" value="Записаться">
		</div>
	</div>
	<div class="address"><span>м. Милашенкова, м. Фонвизинская</span><span>Огородный проезд, 20, стр. 4, ЗТЛ &laquo;Синергия&raquo;</span><span class="phone">телефон: 8 (495) 780-60-80</span></div>
</form>

<? CJSCore::Init(array("jquery", "popup")); ?>
<script>
	$(document).ready(function() {
		$('.update').on('click', function(){
			$.ajax({
				url: '/include/send.php',
				type: 'post',
				data: 'get=captcha',
				success: function(data){
					$('.feedback_form .captcha_img').attr('src', '/bitrix/tools/captcha.php?captcha_sid=' + data);
					$('.feedback_form input[name="captcha_sid"]').val(data);
				}
			});

			return false;
		});

		$('.feedback_form').on('submit', function(){
			var name = $('input[name="name"]').val();
			var phone = $('input[name="phone"]').val();
			var captcha_word = $('input[name="captcha_word"]').val();
			var captcha_sid = $('input[name="captcha_sid"]').val();
			$.ajax({
				url: '/include/send.php',
				type: 'post',
				data: 'get=send&name='+name+'&phone='+phone+'&captcha_word='+captcha_word+'&captcha_sid='+captcha_sid,
				success: function(data){
					if (data == "ok") {   

						$('.feedback_form').empty();
						$('.show-hide-popup-div > p').empty();
						$('.feedback_form').append("<span style='color:#0fcf00;'>Спасибо! Мы перезвоним Вам. </span>");

					}
					else {

						$('.feedback_form').append("<br><span style='color:red;'>Проверьте правильность заполненных полей.</span>");
					}

				}

			});
			return false;
		});

	});
</script>

<script>
	$(document).mouseup(function(e) {
		if ($('.show-hide-popup-div').is(':visible')) {
			var container = $(".feedback_form").parent();
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				$('.show-hide-popup-div').hide();
			}
		}
	});
</script>