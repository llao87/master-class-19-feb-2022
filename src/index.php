<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "Обучение");
$APPLICATION->SetPageProperty("description", "Семинары обучения Perflex");?>

<header class='header_training'>
	<div class='standard_wrapper'>
		<!--<nav class='bread_crumb'>
			<a href='/'>Главная</a> &rarr;
			<a href='/events/'>Мероприятия</a> &rarr;
			Обучение
		</nav>-->
		
		<div class='bread_crumb'>
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href='/' itemprop="item">
						<span itemprop="name">
							Главная
						</span>
						<meta itemprop="position" content="1">
					</a> &rarr; 
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a href='/events/' itemprop="item">
						<span itemprop="name">
							Мероприятия
						</span>
						<meta itemprop="position" content="2">
					</a> &rarr; 
				</li>
				<li>
					Обучение
				</li>
			</ul>
		</div>
		
		<h1 class='page_head'>ОБУЧЕНИЕ</h1>
	</div>
</header>
	
<section class="wrap ">
	<section class="tabs">
		<header>
			<div class="training_nav">
				<label><h2 class="checked" style="margin-right: 25px;"><a href="/events/training/">ОБУЧЕНИЕ</a></h2></label>
				<label><h2 style="margin-left: 25px;"><a href="/events/training/personal/">ИНДИВИДУАЛЬНОЕ ОБУЧЕНИЕ</a></h2></label>
				<label><h2 style="margin-left: 25px;"><a href="/events/training/master-class/">МАСТЕР-КЛАСС МОСКВА</a></h2></label>
				<div class="clear"></div>
			</div>
		</header>
	</section>
	<?/*
	<!--
	<img width="100%" src='/events/training/обучение.png' class="training_img"/>
	
	<section class='seminar_section'>
		<header>
			<h2>ПРОГРАММА МАСТЕР-КЛАССА</h2>
		</header><br>
<p style='text-align:center'><b>«Возможности и преимущества

термопластичных материалов «Perflex»:</b></p>
			<ul><br>
				<li>Требования к восковой конструкции протезов из нейлон:<br>
					<span> - </span><span>расположение кламмеров;</span><br>
					<span> - </span><span>окклюзионные накладки;</span><br>
					<span> - </span><span>границы и толщина базиса.</span><br>
				</li>
				<li>Диаторические или сквозные отверстия? Подготовка искусственных зубов.</li>
				<li>Возможно ли избежать поломок? Разбор основных причин поломок и варианты их решения.</li>
				<li>Перебазировка в 3 действия. Это возможно!</li>
				<li>Формула экономии материалов. Она существует!</li>
				<li>Особенности ухода за протезами из нейлона.</li>
				<li>Довести до блеска или отполировать? Пора определиться.</li>
				<li>Особенности ухода за протезами из нейлона.</li>
				<li>Требования к оборудованию.</li>
				<li>Последовательность применения инструментов для обработки.</li>
				<li>Алгоритм использования материалов для шлифовки и обработки.</li>
				<li>Подготовка искусственных зубов.</li>
				<li>Ключевые этапы инжекции.</li>
			</ul><br />
			ОТВЕТЫ НА ВОПРОСЫ УЧАСТНИКОВ МАСТЕР-КЛАССА.<br /><br /><br />
		</section>
		<section class='seminar_section type_two' style="height:732px;">
			<header>
				<h2>ПРОГРАММА СЕМИНАРA</h2>
			</header><br>
<p style='text-align:center'><b>«Все тонкости изготовления зубных протезов

на примере термопластичных материалов «Perflex»:</b></p>
<br>
				<ul>
					
					<li>Особенности конструкции протезов из материалов «Perflex» (границы протеза, виды конструкций, классификация расположения кламмеров).</li>
					<li>Разбор ошибок при изготовлении из материалов «Perflex» (поломки каркасов и кламмеров, усадка, непопадание в цвет, подготовка искусственных зубов и другое). </li>
					<li>Виды и возможности перебазировки.</li>
					<li>Требование к материалам и инструментам для обработки и полировки.</li>
					<li>Уход за съемными зубными протезами.</li>
					<li>Требования к моделям;</li>
					<li>Требования к восковой моделировке базисов;</li>
					<li>Выбор конструкции. Границы протеза;</li>
					<li>Обработка; Полировка; Перебазировка.</li>
				
			</ul><br /><span style="margin-left:25px;">ОТВЕТЫ НА ВОПРОСЫ УЧАСТНИКОВ СЕМИНАРОВ</span><br /><br /><br />
			<img src="/events/training/material.png" width="100%">
		</section>
	
	<section class="lektor_info">
		<div class="lektor_img">
			<img width="100%" src="/events/training/lector.png">
		</div>
		<div  class="lektor_desc">
			<h2>ЛЕКТОР</h2>
			<div class="lector_descr">
				<p>Ермалкевич Илья Сергеевич</p>
				<em>Обучение проводит лектор<br>
				Международного общественного объединения зубных техников,<br>
				специалист «PERFLEX»<br>
				на территории России и стран СНГ</em>
			</div> 
			<a href="http://education.perflexrussia.ru/" target="blank" >
				<button onclick="yaCounter36760990.reachGoal('push'); return true;">
					Записаться на обучение
				</button>
			</a>
		</div>
	</section>
	

	<?php
          if ($_POST['record'])
            {
                if ($_POST['FIO'] and $_POST['phone'] and $_POST['email'] and $_POST['city'])
                {
                    $success = true;
                }
                $message = 'Имя: ' . $_POST['FIO'] . "\nТелефон: " . $_POST['phone'] . "\nПочта: " . $_POST['email'] . "\nГород: " . $_POST['city'];
                $subject = 'Запись на обучение';
                $mail_to = 'office@perflexrussia.ru';
                sendMail($mail_to, $subject, $message);
            }

            function sendMail($mail_to, $subject, $message) 
            {
                $mail_from = 'webmaster@perflexrussia.ru';
                $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                $headers = "From: $mail_from\r\nReply-to: $mail_from\r\nContent-type: text/plain; charset=utf-8\r\n";
                mail($mail_to, $subject, $message, $headers);
            }
        ?>
       <script>
        $(document).ready(function(){
            $('#zapisatsya').click(function(){
                $('.seminaru_page .modal').fadeIn();
                $('.seminaru_page .modal').css('display','flex');
                $('.seminaru_page .modal .closed').click(function(){
                    $('.seminaru_page .modal').fadeOut();
                })
            })
        })
        </script>
        <section class="wrap seminaru_page">
            <div class="top_goroda">
                <img src="img/Perflex Б4323аннер Обучение 2.png" alt="">
            </div>
            <div class="top_content">
                <div class="item">
                    <img src="img/Perflex logo.png" class='logo_seminaru' alt="">
                    <div class="text">
                        <p>
                            ОБЪЯВЛЯЕТСЯ НАБОР в группы<br>НА семинарЫ
                        </p>
                        <b>
                            «ВСЕ ТОНКОСТИ ИЗГОТОВЛЕНИЯ<br>
                            ЗУБНЫХ ПРОТЕЗОВ НА ПРИМЕРЕ<br>
                            ТЕРМОПЛАСТИЧНЫХ МАТЕРИАЛОВ<br>
                            PERFLEX  »
                        </b>
                    </div>
                </div>
                <div class="item">
                    <img src="img/frame-1.png" alt="">
                </div>
                <div class="clear"></div>
            </div>
            <div class="content_content">
                <div class="top_content_content">
                    <div class="item">
                        <p>
                            Ермалкевич<br>Илья Сергеевич
                        </p>
                        <b>
                            Обучение проводит лектор Международного общественного <br>
                            объединения зубных техников, специалист <span class="prefix">Perflex  </span> на <br>
                            территории России и стран СНГ <br>
                        </b>
                    </div>
                    <div class="item">
                        <img src="img/Ермалкевич.png" alt="">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="content_content_content">
                    <ul>
                        <li>Особенности конструкции протезов из материалов <span class="prefix">Perflex  </span> (границы 
                            протеза, виды конструкций, классификация расположения кламмеров);   
                       </li>
                        <li>Выбор конструкции. Границы протеза;</li>
                        <li>Обработка; Полировка; Перебазировка;</li>
                        <li>Виды и возможности перебазировки;</li>
                        <li>Разбор ошибок при изготовлении протезов из материалов <span class="prefix">Perflex  </span> 
                            (поломки каркасов и кламмеров, усадка, непопадание в цвет,
                            подготовка искусственных зубов и другое);  
                        </li>
                        <li>Требования к моделям;</li>
                        <li>Требования к восковой моделировке базисов;</li>
                        <li>Требование к материалам и инструментам для обработки и полировки;</li>
                        <li>Уход за съемными зубными протезами.</li>
                    </ul>
                </div>
                <div class="content_bottom">
                    <p class="title_bottom_top">
                        По всем интересующим вопросам просьба обращаться по номерам:
                    </p>
                    <b class="phone_bottom">г. Санкт-Петербург:(812) 244-40-58,<br>г. Москва:(985) 245-25-17,<br>8-800-500-36-60 (ЗВОНОК ПО РФ БЕСПЛАТНЫЙ).</b>
                    <p class="title_bottom_bottom">КОЛИЧЕСТВО МЕСТ ОГРАНИЧЕНО!</p>
                </div>
            </div>
            <div class="footer_seminar">
                <p>
                    Фото с прошедших семинаров
                </p>
                <div class="item"><img src="img/pic 1.jpg" alt=""></div>
                <div class="item"><img src="img/pic 2.jpg" alt=""></div>
                <div class="item"><img src="img/pic 3.jpg" alt=""></div>
                <div class="clear"></div>
                <button id="zapisatsya">Записаться на семинар</button>
            </div>
            <div class="modal">
              <span class="closed">×</span>
               <p>Записаться на семинар</p>
                <form action="" method="post">
                    <input required type="text" name="FIO" placeholder="ВАШЕ Ф.И.О*">
                    <input required type="text" name="phone" placeholder="ТЕЛЕФОН*">
                    <input required type="text" name="email" placeholder="E-MAIL*">
                    <input required type="text" name="city" placeholder="ГОРОД*">
                    <input required type="submit" name="record">
                </form>
            </div>
        </section>
        	-->
    */
    ?>
    
    <section class="wrap"><?$APPLICATION->IncludeComponent(
    "bitrix:form",
    "masterClassTemplate",
    Array(
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "CHAIN_ITEM_LINK" => "",
        "CHAIN_ITEM_TEXT" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "EDIT_ADDITIONAL" => "N",
        "EDIT_STATUS" => "Y",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "NOT_SHOW_FILTER" => array(0=>"",1=>"",),
        "NOT_SHOW_TABLE" => array(0=>"",1=>"",),
        "RESULT_ID" => $_REQUEST[RESULT_ID],
        "SEF_MODE" => "N",
        "SHOW_ADDITIONAL" => "N",
        "SHOW_ANSWER_VALUE" => "N",
        "SHOW_EDIT_PAGE" => "Y",
        "SHOW_LIST_PAGE" => "N",
        "SHOW_STATUS" => "Y",
        "SHOW_VIEW_PAGE" => "Y",
        "START_PAGE" => "new",
        "SUCCESS_URL" => "",
        "USE_EXTENDED_ERRORS" => "N",
        "VARIABLE_ALIASES" => array("action"=>"action",),
        "WEB_FORM_ID" => "1"
    )
);?> </section>
    
	<section class="training_timetable" style="clear: both">
		<h2>Расписание предстоящего обучения</h2>
		
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"seminars_table", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "training",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "389",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SEMINAR_DATE",
			1 => "UF_TRAINING_LINK",
			2 => "UF_NABOR",
			3 => "UF_END_DATE",
			4 => "UF_SEMINAR_CITY",
			5 => "UF_SEMINAR_THEME",
			6 => "UF_LECTORU",
			7 => "UF_SEMINAR_TYPE",
			8 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LIST",
		"COMPONENT_TEMPLATE" => "seminars_table"
	),
	false
);?>
	</section>
	<section class="old_trainings">
<h2>Прошедшие семинары</h2>
	<div class="tabs">
            <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list", 
            "new_seminaru", 
            array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "training",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(
                    0 => "ID",
                    1 => "CODE",
                    2 => "XML_ID",
                    3 => "NAME",
                    4 => "SORT",
                    5 => "DESCRIPTION",
                    6 => "PICTURE",
                    7 => "DETAIL_PICTURE",
                    8 => "IBLOCK_TYPE_ID",
                    9 => "IBLOCK_ID",
                    10 => "IBLOCK_CODE",
                    11 => "IBLOCK_EXTERNAL_ID",
                    12 => "DATE_CREATE",
                    13 => "CREATED_BY",
                    14 => "TIMESTAMP_X",
                    15 => "MODIFIED_BY",
                    16 => "",
                ),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "LINE",
                "COMPONENT_TEMPLATE" => "new_seminaru"
            ),
            false
        );?>
    </div>
</section>

<script>
	if ($('.table_fairs_new tr').length < 2){
		($('.table_fairs_new').prev('h2')).hide();
		$('.table_fairs_new tr').hide();
	}(jQuery);

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>