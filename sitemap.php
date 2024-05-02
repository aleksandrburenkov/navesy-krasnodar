
<?php 
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie("URL_user", $url);
    
    $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ПОД КЛЮЧ Любой сложности с гарантией до 30 лет !';
    $url = urldecode($url);
    
    if (preg_match('/краснодар/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ В КРАСНОДАРЕ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/навес_на_заказ/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ НА ЗАКАЗ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/козырек/', $url)) { 
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ КОЗЫРЬКОВ ПОД КЛЮЧ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/козырьков/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ КОЗЫРЬКОВ ПОД КЛЮЧ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/теневой/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ ТЕНЕВЫХ НАВЕСОВ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/теневых/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ ТЕНЕВЫХ НАВЕСОВ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/крыльцо/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ НАД КРЫЛЬЦОМ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/крыльцом/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ НАД КРЫЛЬЦОМ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/дом/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ К ДОМУ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/дом/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ К ДОМУ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/авто/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ДЛЯ АВТО Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/машины/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ДЛЯ АВТО Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/бассейн/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ДЛЯ БАССЕЙНА Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/беседки/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ БЕСЕДОК И НАВЕСОВ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/беседок/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ БЕСЕДОК И НАВЕСОВ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/ковка/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ С КОВКОЙ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/кованые/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ С КОВКОЙ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/ковкой/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ С КОВКОЙ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/поликарбонат/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПОЛИКАРБОНАТА Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/металлопрофиль/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОПРОФИЛЯ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/металлопрофиля/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОПРОФИЛЯ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/металлопрофиля/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОПРОФИЛЯ Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/профнастил/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПРОФНАСТИЛА Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/профнастила/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПРОФНАСТИЛА Любой сложности с гарантией до 30 лет !';
    }
    print_r($_COOKIE['kozirk']);
    require_once "keyses.php";
    require_once "reviews.php";
    /*$kkf = array_slice($keyses, 0, 8);*/
    
    $rg = 0;
    foreach($keyses as $keysesI){
        if($keysesI['category_obsh'] == 'Общая категория'){
            $kkf[] = $keyses[$rg];
        }
        $rg++;
    }
    
    $revs = array_slice($reviews, 0, 5);
?>
<html>
<head>
    
    <title>Навесы на заказ. Идеальное сочетание цена-качество</title>
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description"  content="⭐️⭐️⭐️⭐️⭐️И️зготовление Навесов и козырьков для авто и дома. Свой цех. Идеальное сочетание цена-качество" />
    <meta name="keywords"  content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=787"/>
    
    <script src = "/js/jquery.min.js"></script>
    <script src="/js/onclicks.js?v=777"></script>
    <script>
        $(document).ready(function(){
            if (decodeURIComponent(window.location.href).indexOf("козырек") > -1){
                OpenCategoryPortfolio('Козырьки');
            }else if(decodeURIComponent(window.location.href).indexOf("козырьков") > -1){
                OpenCategoryPortfolio('Козырьки');
            }
        });
    </script>
</head>

<body>
    
    <div class="header">
        <div class="header_content">
            <a href="/" class="header_content_logo_box">
                <div class="item_hclb_icon" style="background:url(/img/logo.png)no-repeat center; background-size:contain"></div>
                <div class="item_hclb_text">Изготовление и монтаж Навесов и козырьков всех видов ПО&nbsp;ВСЕЙ ОБЛАСТИ С 2007г.</div>
            </a>
            <div class="header_content_btns_menu">
                <div class="item_hcbm_btns_box">
                    <div class="item_hcbm_btn" onclick="OpenModal('modal_form', 'Оставить заявку на приезд замерщика', 'ВЫЗВАТЬ ЗАМЕРЩИКА')">
                        <div class="item_hcbm_btn_icon metr_img"></div>
                        <div class="item_hcbm_btn_text">ВЫЗВАТЬ ЗАМЕРЩИКА</div>
                    </div>
                    <div class="item_hcbm_btn" onclick="OpenModal('modal_form', 'Заказать обратный звонок', 'ОСТАВИТЬ ЗАЯВКУ')">
                        <div class="item_hcbm_btn_icon phone_img"></div>
                        <div class="item_hcbm_btn_text">ЗАКАЗАТЬ ЗВОНОК</div>
                    </div>
                </div>
                
                <div class="item_hcbm_menu_box">
                    <a href="/catalog.php" class="item_hcbm_menu">КАТАЛОГ</a>
                    <a href="/prices.php" class="item_hcbm_menu">НАШИ ЦЕНЫ</a>
                    <a href="/portfolio.php" class="item_hcbm_menu">НАШИ РАБОТЫ</a>
                    <a href="/reviews_page.php" class="item_hcbm_menu">ОТЗЫВЫ</a>
                    <a href="/contacts.php" class="item_hcbm_menu">КОНТАКТЫ</a>
                </div>
            </div>
            <div class="header_content_phone_time">
                <div class="item_hcpt_phone">+7 (391) 989-79-03</div>
                <div class="item_hcpt_time">
                    <div class="item_hcpt_time_icon"></div>
                    <div class="item_hcpt_time_text">Мы работаем: Пн-Вс 9:00 - 21:00</div>
                </div>
            </div>
            <a href="tel:+78312351870" class="btn_phone_mobil_menu">ПОЗВОНИТЬ</a>
            <div class="burger_mobile_menu" onclick="OpenMobileMenu()"></div>
            <div class="close_mobile_menu" onclick="CloseMobileMenu()"></div>
            
        </div>
    </div>
    
    <div class="mobile_menu_block">
        <div class="header_mobile_menu_block">
            <div class="content_header_mobile_menu_block">
                <div class="header_content_logo_box">
                    <div class="item_hclb_icon" style="background:url(/img/logo.png)no-repeat center; background-size:contain"></div>
                    <div class="item_hclb_text">Изготовление и монтаж Навесов и козырьков всех видов ПО ВСЕЙ ОБЛАСТИ С 2007г.</div>
                </div>
                <div class="close_mobile_menu" style="display: block;" onclick="CloseMobileMenu()"></div>
            </div>
        </div>
        <div class="content_mobile_menu">
            <a href="/catalog.php" class="item_hcbm_menu_m">КАТАЛОГ</a>
            <a href="/prices.php" class="item_hcbm_menu_m">НАШИ ЦЕНЫ</a>
            <a href="/portfolio.php" class="item_hcbm_menu_m">НАШИ РАБОТЫ</a>
            <a href="/reviews_page.php" class="item_hcbm_menu_m">ОТЗЫВЫ</a>
            <a href="/contacts.php" class="item_hcbm_menu_m">КОНТАКТЫ</a>
        </div>
    </div>
    
	<!--БЛОК КВИЗ-->
    <div class="quiz_btn_onli_desctop" onclick="OpenQuizForm()">РАССЧИТАТЬ НАВЕС</div><!--Чтобы скрыть блок полностью с сайта к quiz_btn_onli_desctop добавить display_none Чтобы скрыть блок только на мобильных, к quiz_btn_onli_desctop добавить display_none_onli_mobile-->
    <div class="modal_form_quiz">
        <div class="content_and_title_modal_form_quiz">
            <div class="close_quiz_form" onclick="CloseQuizForm()"></div>
            <div class="title_form_quiz">ПОСЧИТАТЬ <font style="color: red">СТОИМОСТЬ ЗА 3 МИНУТЫ?</font></div>
            <div class="content_form_quiz">
                <script src="https://yastatic.net/q/forms-frontend-ext/_/embed.js"></script>
         	    <iframe src="https://forms.yandex.ru/u/5f5a171ac534704c29b5868e/?iframe=1" frameborder="0" name="ya-form-5f5a171ac534704c29b5868e"  width="100%"></iframe>
			</div>
        </div>
    </div>
	<!--БЛОК КВИЗ-->
    <div class="preview">
        <div class="shape_preview"></div>
        <div class="preview_content">
            <div class="preview_content_utp"><?php echo $title_site;?></div>
            <div class="bottom_content_preview">
                <div class="left_block_bcp">
                    <div class="left_block_bcp_params">
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-1.png)no-repeat center; background-size:100% auto"></div>
                            <div class="item_lbbp_text">Расчет на нагрузки</div>
                        </div>
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-2.png)no-repeat center; background-size:contain"></div>
                            <div class="item_lbbp_text">Срок изготовления<br>от 7 дней</div>
                        </div>
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-3.png)no-repeat center; background-size:contain"></div>
                            <div class="item_lbbp_text">Профессиональный монтаж</div>
                        </div>
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-4.png)no-repeat center; background-size:contain"></div>
                            <div class="item_lbbp_text">Гарантия<br>по договору</div>
                        </div>
                    </div>
                    <div class="left_block_bcp_prices">
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-1.png)no-repeat center; background-color: #f7f7f7; background-size:cover "></div>
                            <div class="item_lbb_prices_text">Для авто от&nbsp;2900&nbsp;₽/м2</div>
                        </div>
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-2.png)no-repeat center; background-color: #f7f7f7; background-size: cover"></div>
                            <div class="item_lbb_prices_text">К дому от&nbsp;29&nbsp;370&nbsp;₽</div>
                        </div>
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-3.png)no-repeat center; background-color: #f7f7f7; background-size:cover"></div>
                            <div class="item_lbb_prices_text">Козырьки от&nbsp;15&nbsp;760&nbsp;₽/м2</div>
                        </div>
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-4.png)no-repeat center; background-color: #f7f7f7; background-size:cover"></div>
                            <div class="item_lbb_prices_text">Беседки от&nbsp;31&nbsp;280&nbsp;₽</div>
                        </div>
                    </div>
                </div>
                <div class="right_block_bcp">
                    <div class="right_block_bcp_title">РАСЧИТАТЬ СТОИМОСТЬ</div>
                    <div class="right_block_bcp_minititle">перезвоним в течении 40 минут</div>
                    <form action="" class="right_block_bcp_form" id="rbdmmf1">
                        <input type="text" class="input_antibot" name="antb">
                        <input type="hidden" name="title_form" value="Заявка на расчет стоимости навеса">
                        <input type="text" class="mini_input_rbbf" name="long" placeholder="Длина">
                        <input type="text" class="mini_input_rbbf" name="width" placeholder="Ширина">
                        <input type="text" class="mini_input_rbbf" name="height" placeholder="Высота">
                        <select name="materials" class="select_rbbf" id="">
                            <option value="">Материал</option>
                            <option value="Поликарбонат">Поликарбонат</option>
                            <option value="Монолитный поликарбонат">Монолитный поликарбонат</option>
                            <option value="Металлопрофиль">Металлопрофиль</option>
                            <option value="Металлочерепица">Металлочерепица</option>
                            <option value="Мягкая кровля">Мягкая кровля</option>
                        </select>
                        <input type="text" class="input_rbbf" name="name" placeholder="Имя">
                        <input type="text" class="input_rbbf" name="phone" placeholder="+7 (___) ___-__-__">
                        <div class="btn_block_bcp_form"  onclick="SendForm('rbdmmf1')">РАССЧИТАТЬ СТОИМОСТЬ</div>
                        <div class="info_block_bcp_form">БЕСПЛАТНЫЙ детальный расчет и 3D макет. БЕСПЛАТНЫЙ выезд инженера.</div>
                        <a href="/policy.php" class="check_box_block_bcp_form">Оставляя заявку вы принимаете политику конфиденциальности</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="blue_line"> 
        <div class="content_blue_line">
            <div class="item_blue_line">
                <div class="icon_item_blue_line"></div>
                <div class="text_item_blue_line">14 лет успешной работы!</div>
            </div>
            <div class="item_blue_line ">
                <div class="icon_item_blue_line unico_img"></div>
                <div class="text_item_blue_line ">Производство без посредников!</div>
            </div>
            <div class="item_blue_line">
                <div class="icon_item_blue_line guarantee_img"></div>
                <div class="text_item_blue_line">Гарантия качества!</div>
            </div>
        </div>
    </div>
        <div class="target" id="catalog">
        <div class="target_content">
            <div class="target_content_title">СОДЕРЖАНИЕ <span style="color:red"></span></div>
			
<a href="https://navesy-v-krasnodare.ru/1-kak-sdelat-naves.php" class="item_footer">как сделать навес</a>  
<a href="https://navesy-v-krasnodare.ru/1-krylczo-dlya-chastnogo-doma-s-navesom.php" class="item_footer">крыльцо для частного дома с навесом</a> 
<a href="https://navesy-v-krasnodare.ru/1-krylczo-s-navesom.php" class="item_footer">крыльцо с навесом</a> 
<a href="https://navesy-v-krasnodare.ru/1-krylczo-s-navesom-dlya-chastnogo.php" class="item_footer">крыльцо с навесом для частного</a> 
<a href="https://navesy-v-krasnodare.ru/1-kupit-naves.php" class="item_footer">купить навес</a> 
<a href="https://navesy-v-krasnodare.ru/1-kupit-naves-krasnodar.php" class="item_footer">купить навес красноярск</a> 
<a href="https://navesy-v-krasnodare.ru/1-metallicheskij-naves.php" class="item_footer">металлический навес</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves.php" class="item_footer">навес</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-dlya-bassejna.php" class="item_footer">навес для бассейна</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-dlya-mashiny.php" class="item_footer">навес для машины</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-iz-polikarbonata.php" class="item_footer">навес из поликарбоната</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-iz-profilnoj-truby.php" class="item_footer">навес из профильной трубы</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-k-domu.php" class="item_footer">навес к дому</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-besedka.php" class="item_footer">навес беседка</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-nad-krylczom.php" class="item_footer">навес над крыльцом</a> 
<a href="https://navesy-v-krasnodare.ru/1-navesy-v-krasnodare.php" class="item_footer">навесы в красноярске</a>
<a href="https://navesy-v-krasnodare.ru/1-navesy-dlya-avtomobilej.php" class="item_footer">навесы для автомобилей</a>
<a href="https://navesy-v-krasnodare.ru/1-navesy-dlya-dachi.php" class="item_footer">навесы для дачи</a>
<a href="https://navesy-v-krasnodare.ru/1-navesy-foto.php" class="item_footer">навесы фото</a>
<a href="https://navesy-v-krasnodare.ru/1-odnoskatnyj-naves.php" class="item_footer">односкатный навес</a>
<a href="https://navesy-v-krasnodare.ru/1-profilnyj-naves.php" class="item_footer">профильный навес</a>
<a href="https://navesy-v-krasnodare.ru/1-tenevoj-naves.php" class="item_footer">теневой навес</a>

            <!---div class="target_content_block_items">
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-avto.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы для авто</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 52 200 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для авто', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-dom.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы к дому</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 29 370 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов к дому', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-bes.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Беседки</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 32 280 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость беседок', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="reviews_tcb">
                    <div class="reviews_tcb_b" style="background:url(/img/reviews/otz_main_1.jpg)no-repeat center; background-size:cover"></div>
                    <div class="item_tcb_prices_reviews">ВАШИ ОТЗЫВЫ</div>
                </div>
            </div>
            <div class="target_content_block_items">
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-koz.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Крыльцо и козырьки</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 15 760 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов на крыльцо и козырьков', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-bass.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Для бассейна</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 59 680 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для бассейна', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-mang.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Для мангала и барбекю</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 19 280 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для мангала и барбекю', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="reviews_tcb">
                    <div class="reviews_tcb_b" style="background:url(/img/reviews/otz_main_2.jpg)no-repeat center; background-size:cover"></div>
                    <div class="item_tcb_prices_reviews">ВАШИ ОТЗЫВЫ</div>
                </div>
            </div>
            <div class="target_content_block_items">
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-terr.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Терассы</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 31 370 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для терассы', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-dah.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы для дачи</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 25 680 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для дачи', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-park.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы д/парковок</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 92 280 ₽</div>
                        <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для парковок', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="reviews_tcb">
                    <div class="reviews_tcb_b" style="background:url(/img/reviews/otz_main_3.jpg)no-repeat center; background-size:cover"></div>
                    <div class="item_tcb_prices_reviews">ВАШИ ОТЗЫВЫ</div>
                </div>
            </div--->
        </div>
    </div>
    
    <div class="guarantee" style="background:url(/img/bg-1.jpg)no-repeat center; background-size:cover"> 
        <div class="content_guarantee">
            <div class="items_guarantee">
                <div class="item_guarantee">
                    <div class="title_item_guarantee">100%<br>гарантия</div>
                    <div class="blue_line_guarantee"></div>
                    <div class="text_item_guarantee">что швы наших металлоконструкций проварены полностью и соответствуют стандартам</div>
                </div>
                <div class="item_guarantee">
                    <div class="title_item_guarantee">100%<br>гарантия</div>
                    <div class="blue_line_guarantee"></div>
                    <div class="text_item_guarantee">что мы используем только качественную древесину. Скрипа не будет!</div>
                </div>
                <div class="item_guarantee">
                    <div class="title_item_guarantee">100%<br>гарантия</div>
                    <div class="blue_line_guarantee"></div>
                    <div class="text_item_guarantee">что у нас качественная покраска&nbsp;лестниц</div>
                </div>
            </div>
            <div class="btn_guarantee" onclick="OpenModal('modal_form', 'Консультация и расчет за 3 минуты', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ И РАСЧЕТ ЗА 3 МИНУТЫ</div>
        </div>
    </div>    
        
    <!---div class="target">
            <div class="target_content">
                <div class="target_content_block_items">
                    <div class="item_tcb">
                        <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-tenev.jpg)no-repeat center; background-size:100% auto">
                            <div class="item_tcb_photo_text">Навесы для дет. садов</div>
                        </a>
                        <div class="item_tcb_prices_btn">
                            <div class="item_tcb_prices">От 96 350 ₽</div>
                            <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для дет. садов', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                        </div>
                    </div>
                    <div class="item_tcb">
                        <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-der.jpg)no-repeat center; background-size:100% auto">
                            <div class="item_tcb_photo_text">Деревянные навесы</div>
                        </a>
                        <div class="item_tcb_prices_btn">
                            <div class="item_tcb_prices">От 74 680 ₽</div>
                            <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость деревянных навесов', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                        </div>
                    </div>
                    <div class="item_tcb">
                        <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-kov.jpg)no-repeat center; background-size:100% auto">
                            <div class="item_tcb_photo_text">Кованые навесы</div>
                        </a>
                        <div class="item_tcb_prices_btn">
                            <div class="item_tcb_prices">От 85 280 ₽</div>
                            <div class="item_tcb_btn" onclick="OpenModal('modal_form', 'Узнать стоимость кованых навесов', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                        </div>
                    </div>
                    <div class="reviews_tcb">
                        <div class="reviews_tcb_b" style="background:url(/img/reviews/otz_main_4.jpg)no-repeat center; background-size:cover"></div>
                        <div class="item_tcb_prices_reviews">ВАШИ ОТЗЫВЫ</div>
                    </div>
                </div>
            </div>
        </div--->
    
    <div class="gager_background" style="background:url(/img/main_preview.jpg)no-repeat center; background-size:cover">
        <div class="gager">
            <div class="gager_content">
                <div class="gager_content_left" style="background:url(/img/manager/Menedger-IVAN.jpg)no-repeat center; background-size:cover"></div>
                <div class="gager_content_right">
                    <div class="gager_content_right_title" >ВЫЗВАТЬ ЗАМЕРЩИКА ТЕХНОЛОГА</div>
                    <div class="gager_content_right_items">
                        <div class="item_gcri_box">
                            <div class="item_gcri_box_icon" style="background:url(/img/star.png)no-repeat center; background-size:cover"></div>
                            <div class="item_gcri_box_text">Перезвоним в удобное время</div>
                        </div>
                        <div class="item_gcri_box">
                            <div class="item_gcri_box_icon" style="background:url(/img/star.png)no-repeat center; background-size:cover"></div>
                            <div class="item_gcri_box_text">Бесплатно отправим замерщика</div>
                        </div>
                        <div class="item_gcri_box">
                            <div class="item_gcri_box_icon" style="background:url(/img/star.png)no-repeat center; background-size:cover"></div>
                            <div class="item_gcri_box_text">Покажем образцы. Составим смету. Сделаем эскизы</div>
                        </div>
                    </div>
                    <div class="gager_content_right_btn" onclick="OpenModal('modal_form', 'Заявка на выезд замерщика технолога', 'ЗАКАЗАТЬ ЗАМЕР')">ЗАКАЗАТЬ ЗАМЕР</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="covering">
        <div class="covering_content">
            <div class="covering_title">КАКИЕ <span style="color:red">МАТЕРИАЛЫ</span> МЫ ИСПОЛЬЗУЕМ <span style="color:red">ДЛЯ КРОВЛИ</span> НАВЕСА</div>
            <div class="covering_items">
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ ПОЛИКАРБОНАТА</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-polik.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Цвета: 18 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>4, 6, 8, 10, 16&nbsp;мм</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.:Защита от UV</div>
                    </div>
                    <div class="covering_item_prices">От: 3 280 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">ИЗ&nbsp;МОНОЛИТНОГО ПОЛИКАРБОНАТА</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-mono.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Цвета: 18 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>от 2 до 12&nbsp;мм</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.: Сверх прочный</div>
                    </div>
                    <div class="covering_item_prices">От: 3 410 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ МЕТАЛЛОПРОФИЛЯ</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-profil.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Цвета: 46 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>0,35; 0,45; 0,55; 0,7; 0,8</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.: Сверх прочный</div>
                    </div>
                    <div class="covering_item_prices">От: 3 480 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ МЕТАЛЛОЧЕРЕПИЦЫ</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-meth.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Цвета: 52 вида</div>
                        <div class="covering_item_in_box_items">⭐️ Волны: 17 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>0,35; 0,45; 0,55; 0,65</div>
                    </div>
                    <div class="covering_item_prices">От: 3 490 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ МЯГКОЙ КРОВЛИ</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-magk.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Цвета: 30 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Форма: 7 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Гарантия: до 50 лет</div>
                    </div>
                    <div class="covering_item_prices">От: 4850 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
            </div>
        </div>
    </div>

    <div class="attract">
        <div class="attract_content">
            <div class="attract_content_title">
                <div class="attract_content_title_text">ПОСМОТРИТЕ НА <span style="color:red">НАВЕСЫ, КОТОРЫЕ ПОСТРОИЛИ МЫ</span></div>
                <div class="attract_content_title_icon" style="background:url(/img/photo/Strelka.png)no-repeat center; background-size:cover"></div>
            </div>
            <div class="attract_content_box">
                <div class="attract_content_box_ingener" style="background:url(/img/ingener.jpg)no-repeat center; background-size:100% auto; background-position:top center"></div>
                <div class="attract_content_box_text">
                    <div class="acbt_item1">Инженер-проектировщик Михаил&nbsp;Верхов:</div>
                    <div class="acbt_item2">При проектировании навеса мы учитываем прежде всего снеговые и ветровые нагрузки</div>
                    <div class="acbt_item3">РАССКАЖЕМ <span style="color:red">КАК НЕ НАДО</span> СТРОИТЬ НАВЕСЫ</div>
                </div>
                <div class="attract_content_box_break" style="background:url(/img/photo/break.jpg)no-repeat center; background-size:cover"></div>
            </div>
            <div class="attract_content_btn" onclick="OpenModal('modal_form', 'Расскажем как правильно строить навесы', 'ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ')">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ ИНЖЕНЕРА БЕСПЛАТНО</div>
        </div>
    </div>
    
    <div class="portfolio" id="portfolio_href">
        <div class="content_portfolio">
            <div class="title_portfolio">Посмотрите на навесы, которые мы уже установили в <font style="color: red">КРАСНОДАРЕ</font>, ТАХТАМУКАЕ, <font style="color: red">АФИПСКОМ</font>, АДЫГЕЙСКЕ, <font style="color: red">СЕВЕРСКОЙ</font>, КРАСНОГВАРДЕЙСКОМ, <font style="color: red">КАЛИНИНСКОЙ</font>, УСТЬЕ, <font style="color: red">КОРЕНОВСКЕ</font>, ТИМАШЕВСКЕ, <font style="color: red">АБИНСКЕ</font>, ПОЛТАВСКОЙ, <font style="color: red">СЛАВЯНСКЕ</font>, БЕЛОРЕЧЕНСКЕ, <font style="color: red">КРЫМСКЕ</font>, ВЫСЕЛКАХ, <font style="color: red">БРЮХОВЕЦКОЙ</font>, АПШЕРОНСКЕ, <font style="color: red">ШОВГЕНОВСКОМ</font>, НОВОРОССИЙСКЕИСТОКЕ:</div>
            <div class="portfolio_btns ">
                <div class="portfolio_btn portfolio_btn_active" onclick="OpenAllCategory()">ОБЩИЙ СПИСОК</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Навесы для авто')">НАВЕСЫ ДЛЯ АВТО</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Навесы к дому')">НАВЕСЫ К ДОМУ</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Навесы для бассейна')">ДЛЯ БАССЕЙНА</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Козырьки')">КОЗЫРЬКИ</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Беседки и террасы')">БЕСЕДКИ И ТЕРАССЫ</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryTwo('Из поликарбоната')">ИЗ ПОЛИКАРБОНАТА</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryTwo('Из металлопрофиля')">ИЗ МЕТАЛЛОПРОФИЛЯ</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryThree('Однокатные навесы')">ОДНОСКАТНЫЕ НАВЕСЫ</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryThree('Двускатные навесы')">ДВУСКАТНЫЕ НАВЕСЫ</div>
            </div>
            <div class="items_portfolio">
                
                <?php $gg = 0; foreach($kkf as $k): ?>
                
                <div class="item_portfolio" c_i="<?php echo $gg ;?>">
                    <div class="gallery_box_item_portfolio">
                        <div class="box_mini_photo_gallery_item_portfolio">
                            <?php $gallery_item = explode(",", $k['gallery']);?>
                            <?php $iii = 0;foreach($gallery_item as $gi):?>
                            <div class="mini_photo_gallery_item_portfolio" mini_p="<?php echo $iii ;?>" style="background: url(/img/case_photo/<?php echo $gi;?>.jpg)no-repeat center;background-size: cover;" onclick="ActiveGallery('<?php echo $gg;?>', '<?php echo $gi;?>', <?php echo $iii;?>)"></div>
                            <?php $iii++;?>
                            <?php endforeach;?>
                        </div>
                        <div class="big_photo_gallery_item_portfolio" act-big="0" style="background: url(/img/case_photo/<?php echo $gallery_item[0];?>.jpg)no-repeat center;background-size: cover;" id="big_photo_gallery_item_portfolio<?php echo $gg;?>">
                            <div class="estimate_client">
                                <div class="title_estimate_client">Оценка клиента:</div>
                                <div class="box_estimste_stars">
                                    <div class="item_estimate_star"></div>
                                    <div class="item_estimate_star"></div>
                                    <div class="item_estimate_star"></div>
                                    <div class="item_estimate_star"></div>
                                    <div class="item_estimate_star"></div>
                                </div>
                            </div>
                            <div class="left_arrow" onclick="left_arrow(<?php echo $gg ;?>)"></div>
                            <div class="rigth_arrow" onclick="rigth_arrow(<?php echo $gg ;?>)"></div>
                        </div>
                    </div>
                    <div class="info_box_item_portfolio">
                        <div class="title_keys_bbbllsk"><?php echo $k['name_keys'];?></div>
                        <div class="mini_params_box_item_portfolio">
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Ширина</div>
                                <div class="vall_param_info_box_item_portfolio"><?php echo $k['width'];?> м</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Длина</div>
                                <div class="vall_param_info_box_item_portfolio"><?php echo $k['long'];?> м</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Столбы</div>
                                <div class="vall_param_info_box_item_portfolio"><?php echo $k['stolbs'];?></div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Фермы</div>
                                <div class="vall_param_info_box_item_portfolio"><?php echo $k['ferms'];?></div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Балки</div>
                                <div class="vall_param_info_box_item_portfolio"><?php echo $k['balks'];?></div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Обрешетки</div>
                                <div class="vall_param_info_box_item_portfolio"><?php echo $k['obreshetks'];?></div>
                            </div>
                        </div>
                        <div class="box_param_info_box_item_portfolio">
                            <div class="title_param_info_box_item_portfolio">Покрытие</div>
                            <div class="vall_param_info_box_item_portfolio"><?php echo $k['pokrytie'];?></div>
                        </div>
                        <div class="box_param_info_box_item_portfolio">
                            <div class="title_param_info_box_item_portfolio">Монтаж</div>
                            <div class="vall_param_info_box_item_portfolio"><?php echo $k['montaj'];?></div>
                        </div>
                        <div class="three_box_info_box_item_portfolio">
                            <div class="three_info_box_item_portfolio">
                                <div class="icon_three_info_box_item_portfolio"></div>
                                <div class="titl_and_text_three_info_box_item_portfolio">
                                    <div class="title_three_info_box_item_portfolio">Материалы:</div>
                                    <div class="text_three_info_box_item_portfolio"><?php echo $k['materials'];?> ₽</div>
                                </div>
                            </div>
                            <div class="three_info_box_item_portfolio">
                                <div class="icon_three_info_box_item_portfolio portf2"></div>
                                <div class="titl_and_text_three_info_box_item_portfolio">
                                    <div class="title_three_info_box_item_portfolio">Работа:</div>
                                    <div class="text_three_info_box_item_portfolio"><?php echo $k['work'];?> ₽</div>
                                </div>
                            </div>
                            <div class="three_info_box_item_portfolio">
                                <div class="icon_three_info_box_item_portfolio portf3"></div>
                                <div class="titl_and_text_three_info_box_item_portfolio">
                                    <div class="title_three_info_box_item_portfolio">Итого:</div>
                                    <div class="text_three_info_box_item_portfolio"><?php echo $k['price'];?> ₽</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_info_box_item_portfolio_box" onclick="OpenModal('modal_form', 'Хочу заказать похожий навес', 'ОСТАВИТЬ ЗАЯВКУ')">
                            <div class="btn_info_box_item_portfolio_icon"></div>
                            <div class="btn_info_box_item_portfolio">РАССЧИТАТЬ ТАКОЙ ЖЕ</div>
                        </div>
                    </div>
                </div>
                <?php $gg++;?>
                <?php endforeach;?>
            </div>
            <div class="btn_display_block_item_portfolio" id="btn_drop_keyses" onclick="OpenAllPortfolio(<?php echo $gg;?>)">ОТКРЫТЬ ЕЩЕ 8 ПРИМЕРОВ  РАБОТ</div>
            <div class="portfolio_btns ">
                <div class="portfolio_btn portfolio_btn_active" onclick="OpenAllCategory()">ОБЩИЙ СПИСОК</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Навесы для авто')">НАВЕСЫ ДЛЯ АВТО</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Навесы к дому')">НАВЕСЫ К ДОМУ</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Навесы для бассейна')">ДЛЯ БАССЕЙНА</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Козырьки')">КОЗЫРЬКИ</div>
                <div class="portfolio_btn" onclick="OpenCategoryPortfolio('Беседки и террасы')">БЕСЕДКИ И ТЕРАССЫ</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryTwo('Из поликарбоната')">ИЗ ПОЛИКАРБОНАТА</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryTwo('Из металлопрофиля')">ИЗ МЕТАЛЛОПРОФИЛЯ</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryThree('Однокатные навесы')">ОДНОСКАТНЫЕ НАВЕСЫ</div>
                <div class="portfolio_btn" onclick="getAllKeysesCategoryThree('Двускатные навесы')">ДВУСКАТНЫЕ НАВЕСЫ</div>
            </div>
        </div>
    </div>
    <div class="quiz_box_block">
        <div class="content_quiz_box_block">
            <div class="title_form_quiz">ПОСЧИТАТЬ <font style="color: red">СТОИМОСТЬ ЗА 3 МИНУТЫ?</font></div>
            <script src="https://yastatic.net/q/forms-frontend-ext/_/embed.js"></script>
     	    <iframe src="https://forms.yandex.ru/u/5f5a171ac534704c29b5868e/?iframe=1" frameborder="0" name="ya-form-5f5a171ac534704c29b5868e"  width="100%"></iframe>
        </div>
    </div>
    <div class="three_maket">
        <div class="maket_three_maket" style="background:url(/img/photo/3D_maket.png)no-repeat center; background-size:contain";></div>
        <div class="three_maket_shape"></div>
        <div class="content_three_maket_title">МАКЕТ НАВЕСА</div>
        <div class="content_three_maket">
            <div class="left_content_three_maket">
                <div class="text_left_content_three_maket">Посмотрите как будет смотреться ваш навес на участке</div>
                <div class="bottom_title_left_content_three_maket">В подарок до 
									<!--СМЕНА ДАТ-->
	<script language="javascript" type="text/javascript">
	var dt = new Date();
    var date = dt.getDate();
    if( date <= 7) dt.setDate(7) // до 15-го числа будет 15-е
    else if( date <= 5) dt.setDate(5) 
	else if( date <= 10) dt.setDate(10)
    else if( date <= 15) dt.setDate(15)		
    else if( date <= 20) dt.setDate(20) 
	else if( date <= 25) dt.setDate(25)	
    else dt.setDate(30); // после 25-го – 30-е

// Display the month, day, and year. getMonth() returns a 0-based number.
var day = dt.getDate();

document.write(day );

</script>
<!--МЕСЯЦ-->
<script language="javascript" type="text/javascript">
var d = new Date();

var month=new Array("Января","Февраля","Марта","Апреля","Мая","Июня",
"Июля","Августа","Сентября","Октября","Ноября","Декабря");

document.write( month[d.getMonth()]
);
</script>
					<!--СМЕНА ДАТ-->
				</div>
            </div>
            <form action=""  class="right_form_three_maket" id="right_form_three_maket_frm">
                <input type="text" class="input_antibot" name="antb">
                <div class="title_right_form_three_maket">Заявка на 3D макет вашего навеса</div>
                <div class="mini_title_right_form_three_maket">С расчетом параметров и сметы</div>
                <input type="hidden" name="title_form" value="Форма для заявки на 3D макет будущей лестницы ">
                <input type="text" name="phone" placeholder="+7 (___) ___-__-__">
                <div class="btn_right_form_three_maket" onclick="SendForm('right_form_three_maket_frm')">ПОЛУЧИТЬ ПРОЕКТ И РАСЧЕТ</div>
                <a href="/policy.php" class="policy_right_form_three_maket">Оставляя заявку вы принимаете условия политики конфиденциальности</a>
            </form>
        </div>
    </div>
    
    <div class="examples" id="prices">
        <div class="examples_content">
            <div id="golicarb" class="examples_content_title">ПОСМОТРИТЕ НА ПРИМЕРЫ СТОИМОСТИ ТИПОВЫХ НАВЕСОВ</div>
            <div class="examples_content_items">
                <div class="examples_content_item_box">
                    <div class="ecib_title">Арочный отдельностоящий</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_1.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">36875 ₽</div>
                            </div> 
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">141600 ₽</div>
                            </div>   
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">44250 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">73750 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">53100 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">147500 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">70800 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">141600 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">106200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">206500 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 2950 р/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость арочного отдельностоящего навеса', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Арочный пристенный</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_2.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">42500 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">163200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">51000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">85000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">61200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">170000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">81600 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">163200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">122400 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">238000 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3400 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость арочного пристенного навеса', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box"><div class="ecib_title">Для 2х машин типа А</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_3.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">48750 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">187200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">58500 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">97500 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">70200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">147500 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">70800 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">187200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">140400 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">273000 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3900 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навеса для 2х машин типа А', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
            </div>
            <div class="examples_content_items">
                <div class="examples_content_item_box">
                    <div class="ecib_title">Для 2х машин типа B</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_4.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">36875 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">141600 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">44250 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">73750 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">53100 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">147500 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">70800 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">141600 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">106200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">206500 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 2950 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навеса для 2х машин типа B', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Для 2х машин типа С</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_5.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">48750 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">187200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">58500 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">97500 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">70200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">195000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">93600 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">187200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">140400 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">273000 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3900 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навеса для 2х машин типа С', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Полуарочный пристенный тип A</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_6.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">40000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">153600 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">48000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">80000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">57600 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">160000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">76800 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">153600 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">115200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">224000 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3200 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость полуарочного пристенного навеса типа А', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
            </div>
            <div class="examples_content_items">
                <div class="examples_content_item_box">
                    <div class="ecib_title">Полуарочный пристенный тип B</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_7.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">42500 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">163200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">51000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">85000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">61200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">170000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">81600 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">163200 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">122400 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">238000 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3400 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость полуарочного пристенного навеса типа B', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Полуарочный для парковок тип A</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_8.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">43500 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">167040 ₽</div>
                            </div>  
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">52200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">87000 ₽</div>
                            </div>  
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">62640 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">174000 ₽</div>
                            </div>  
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">83520 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">167040 ₽</div>
                            </div>  
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">118080 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">243600 ₽</div>
                            </div>  
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3480 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость полуарочного навеса для парковок типа А', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Полуарочный для парковок тип B</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_9.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">41000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">157440 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">492000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">82000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">59040 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">174000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">78720 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">157440 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">118080 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">229600 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3280 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость полуарочного навеса для парковок типа B', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
            </div>
            <div id="metal" class="examples_content_title">НАВECЫ ИЗ МЕТАЛЛОПРОФИЛЯ</div>
            <div class="examples_content_items">
                <div class="examples_content_item_box">
                    <div class="ecib_title">Двускатный</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_10.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">43500 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">167040 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">52200 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">87000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">62640 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">174000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">83520 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">167040 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">125280 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">243600 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3480 р/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость двускатнго навеса', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Односкатный</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_11.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">43000 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">165120 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">51600 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">86000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">61920 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">172000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">82560 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">165120 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">123840 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">240800 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3440 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость односкатного навеса', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <div class="examples_content_item_box">
                    <div class="ecib_title">Полуарочный</div>
                    <div class="ecib_photo" style="background:url(/img/primers/primer_12.jpg)no-repeat center; background-size:contain"></div>
                    <div class="ecib_box">
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">2,5x5</div>
                                <div class="ecib_box_line_prices">40750 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">4x12</div>
                                <div class="ecib_box_line_prices">156480 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x5</div>
                                <div class="ecib_box_line_prices">48900 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x5</div>
                                <div class="ecib_box_line_prices">81500 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">3x6</div>
                                <div class="ecib_box_line_prices">58680 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">5x10</div>
                                <div class="ecib_box_line_prices">163000 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">4x6</div>
                                <div class="ecib_box_line_prices">78240 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">6x8</div>
                                <div class="ecib_box_line_prices">156480 ₽</div>
                            </div>
                        </div>
                        <div class="ecib_box_line">
                            <div class="ecib_box_line_left">
                                <div class="ecib_box_line_number">6x6</div>
                                <div class="ecib_box_line_prices">117360 ₽</div>
                            </div>
                            <div class="ecib_box_line_right">
                                <div class="ecib_box_line_number">7x10</div>
                                <div class="ecib_box_line_prices">228200 ₽</div>
                            </div>
                        </div>
                    </div>
                    <div class="ecib_prices">Ваш размер от 3260 ₽/м2</div>
                    <div class="ecib_btn" onclick="OpenModal('modal_form', 'Узнать стоимость полуарочного навеса', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
            </div>
            <div class="examples_content_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <div class="btn_icon"></div>
                <div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
                <div class="btn_icon"></div>
            </div>
        </div>
    </div>
    
    <div class="action">
        <div class="background_shape_action">
            <div class="action_title">АКЦИЯ</div>
            <div class="content_action">
                <div class="left_content_action">
                    <div class="title_left_content_action"><font style="color: #ffd002 ">Оставьте заявку сегодня и получите скидку:</font><br>Навес 3,61x6,32 для авто за <s>81 700 ₽</s> <span style="color:#ffd002 ;font-weight:700">72 150 ₽</span><br>Навес 5,3x6,32 для двух авто за <s>135 600 ₽</s> <span style="color:#ffd002 ;font-weight:700">121 300 ₽</span></div>
                    <div class="planshet_left_content_action" style="background:url(/img/photo/Akcia.png)no-repeat center; background-size:contain">
                        <div class="timer_left_content_action">
                            <script src="//megatimer.ru/get/d9bfd40d9675f3f24fdd889402226cf3.js"></script>
                        </div>
                        <div class="mobile_timer_left_content_action">
                            <script src="//megatimer.ru/get/7a5705aeac5cf7a2d39f9fbcb0f28915.js"></script>
                        </div>
                    </div>
                </div>
                <form action="" class="right_form_action" id="action_two_form">
                    <input type="text" class="input_antibot" name="antb">
                    <div class="title_right_form_action">Оставьте заявку на навес</div>
                    <div class="mini_title_right_form_action">И через 10 дней получите изделие и скидку в подарок</div>
                    <input type="hidden" name="title_form" value="Форма со скидкой 2000 рублей на лестницу">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="city" placeholder="Город">
                    <input type="text" name="phone" placeholder="+7(___) ___-__-__">
                    <div class="btn_right_form_action" onclick="SendForm('action_two_form')">ЗАФИКСИРОВАТЬ СКИДКУ</div>
                    <a href="/policy.php" class="policy_right_form_action">Оставляя заявку вы принимаете условия политики конфиденциальности</a>
                </form>
            </div>
        </div>    
    </div>
    
    <div class="reviews">
        <div class="reviews_content">
            <div class="reviews_title">ЛЮДИ ПИШУТ ОТЗЫВЫ О НАС</div>
            <div class="reviews_items">
                <?php $i_rs = 0; foreach($revs as $rs):?>
                <div class="item_reviews" style="background:url(/img/reviews/<?php echo $rs['photo_name'];?>.jpg)no-repeat center; background-size:contain"></div>
                <?php $i_rs++;?>
                <?php endforeach;?>
            </div>
            <div class="reviews_btn" id="reviews_btn" onclick="getReviews(<?php echo $i_rs;?>)">ОТКРЫТЬ БОЛЬШЕ ОТЗЫВОВ</div>
        </div>
    </div>
    
    <div class="production">
        <div class="production_content">
            <div class="production_content_title">НАШЕ ПРОИЗВОДСТВО</div>
            <div class="production_content_block">
                <div class="production_content_block_left">
                    <div class="pcbl_title">ЦЕХ</div>
                    <div class="pcbl_photo" style="background:url(/img/photo_target/pr_1.jpg)no-repeat center; background-size:contain"></div>
                    <div class="pcbl_photo" style="background:url(/img/photo_target/pr_2.jpg)no-repeat center; background-size:contain"></div>
                    <div class="pcbl_photo" style="background:url(/img/photo_target/pr_3.jpg)no-repeat center; background-size:contain"></div>
                </div>
                <div class="production_content_block_top">
                    <div class="pcbt_text">Мы существуем на рынке уже более 10 лет. А количиство выполненых заказов скоро приблизится к 1000шт.</div>
                    <div class="pcbt_text">Изготавливаем любые навесы, козырьки, ангары, беседки, мангалы. Из любых материалов и любой сложности.</div>
                    <div class="pcbt_text">Мы занимаемся всеми этапами производства металлоконструкций: от проектирования, до гибки, сварки и покраски, а так же монтаж на месте.</div>
                    <div class="pcbt_text">Даем гарантию на навесы:<br> - от коррозии до 5-ти лет<br> - на поликарбонат до 15-ти лет<br> - от воздействия окружающей среды до 5-ти лет<br> - на целостность конструкции до 5-ти лет<br> - на сварные работы до 10-ти лет</div>
                    <div class="pcbt_text">Разрабатываем 3D макеты навесов.<br>А так же можем изготовить проект любой сложности по вашим пожеланиям</div>
                    <div class="pcbt_text">Кстати вы можете приехать к нам на производство</div>
                    <form action class="pcbt_form" id="proizvodstvo">
                        <input type="text" class="input_antibot" name="antb">
                        <input type="hidden" name="title_form" value="Хочется посетить производство">
                        <input type="text" name="name" placeholder="Имя">
                        <input type="text" name="phone" placeholder="+7 (___)-___-__-__">
                        <div class="pcbt_form_btn "onclick="SendForm('proizvodstvo')">ПОСЕТИТЬ ПРОИЗВОДСТВО</div>
                        <a href="/policy.php" class="pcbt_form_policy">Оставляя заявку вы принимаете условия политики конфиденциальности</a>
                    </form>
                </div>
                <div class="production_content_block_right">
                    <div class="pcbr_title">ПОКРАСОЧНАЯ КАМЕРА</div>
                    <div class="pcbr_photo" style="background:url(/img/photo_target/pr_4.jpg)no-repeat center; background-size:contain"></div>
                    <div class="pcbr_photo" style="background:url(/img/photo_target/pr_5.jpg)no-repeat center; background-size:contain"></div>
                    <div class="pcbr_photo" style="background:url(/img/photo_target/pr_6.jpg)no-repeat center; background-size:contain"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="advantages_background" style="background:url(/img/photo/Fon_cex.jpg)no-repeat center; background-size:cover">
        <div class="advantages">
            <div class="advantages_content">
                <div class="advantages_content_title">МЫ ЛЮБИМ КАЧЕСТВО И РАЗУМНУЮ ЭКОНОМИЮ</div>
                <div class="advantages_content_items">
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/3.jpg)no-repeat center; background-size:60%"></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Собственное производство</div>
                            <div class="item_text_down">Все работы делаем на собственном производстве. Это позволяет сэкономить на логистике и работе смежников и сократить время выполнения заказа.</div>
                        </div>
                    </div>
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/6.jpg)no-repeat center; background-size:contain"></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Опыт более 10 лет</div>
                            <div class="item_text_down">Накопленный опыт помогает при решении самых сложных задач.</div>
                        </div>
                    </div>
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/4.jpg)no-repeat center; background-size:contain"></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Гарантия по договору</div>
                            <div class="item_text_down">На все работы и услуги предоставляется фирменная гарантия до 15 лет.</div>
                        </div>
                    </div>
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/1.jpg)no-repeat center; background-size:contain"></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Персональный подход</div>
                            <div class="item_text_down">Полностью погружаемся в проект и выполняем его с учетом всех пожеланий заказчика.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="scheme_work">
        <div class="content_scheme_work">
            <div class="title_scheme_work">КАК ЗАКАЗАТЬ У НАС НАВЕС?</div>
            <div class="lines_silver_scheme_work">
                <div class="top_line_scheme_work"></div>
                <div class="right_line_scheme_work"></div>
                <div class="bottom_line_scheme_work"></div>
            </div>
            <div class="items_scheme_work">
                <div class="item_scheme_work item_scheme_work1">
                    <div class="photo_item_scheme_work" style="background:url(/img/photo/kak_1.png)no-repeat center; background-size:contain"></div>
                    <div class="title_item_scheme_work">Заявка</div>
                    <div class="text_item_scheme_work">Связываемся с Вами по оставленной заявке, уточняем детали и говорим предварительную цену</div>
                </div>
                <div class="item_scheme_work item_scheme_work2">
                    <div class="photo_item_scheme_work" style="background:url(/img/photo/kak_2.png)no-repeat center; background-size:contain"></div>
                    <div class="title_item_scheme_work">Замер/Посещение цеха</div>
                    <div class="text_item_scheme_work">Приезжаем на замер, помогаем выбрать конфигурацию, поправляем итоговую цену</div>
                </div>
                <div class="item_scheme_work item_scheme_work3">
                    <div class="photo_item_scheme_work" style="background:url(/img/photo/kak_3.png)no-repeat center; background-size:contain"></div>
                    <div class="title_item_scheme_work">Договор</div>
                    <div class="text_item_scheme_work">В договоре прописываем эскизный проект: типы ферм, размеры столбов, цвет поликарбоната и т.д.</div>
                </div>
                <div class="item_scheme_work item_scheme_work6">
                    <div class="photo_item_scheme_work" style="background:url(/img/photo/kak_6.png)no-repeat center; background-size:contain"></div>
                    <div class="title_item_scheme_work">Готовый навес</div>
                    <div class="text_item_scheme_work">Удобство и комфорт для Вас.</div>
                </div>
                <div class="item_scheme_work item_scheme_work5">
                    <div class="photo_item_scheme_work" style="background:url(/img/photo/kak_5.png)no-repeat center; background-size:contain"></div>
                    <div class="title_item_scheme_work">Монтаж навеса</div>
                    <div class="text_item_scheme_work">Профессиональный монтаж без мусора. Оставляем УЮТ, а не хаос!</div>
                </div>
                <div class="item_scheme_work item_scheme_work4">
                    <div class="photo_item_scheme_work" style="background:url(/img/photo/kak_4.png)no-repeat center; background-size:contain"></div>
                    <div class="title_item_scheme_work">Изготовление навеса</div>
                    <div class="text_item_scheme_work">Проводим все работы в цеху, и красим тоже в цеху (никаких малярных работ на объекте)</div>
                </div>
            </div>
            <div class="btn_scheme_work" onclick="OpenModal('modal_form', 'Нужна консультация об этапах изготовления навеса', 'УЗНАТЬ ПОДРОБНЕЕ')">УЗНАТЬ ПОДРОБНЕЕ</div>
        </div>
    </div>
    
    <div class="garanti_box">
        <div class="content_garanti_box">
            <div class="title_garanti_box">НАША <font style="color:red">ТРОЙНАЯ</font> ГАРАНТИЯ</div>
            <div class="mini_title_garanti_box">ИЛИ МЫ ВЕРНЕМ ВАМ ДЕНЬГИ</div>
            <div class="r_a_l_garanti_box">
                <div class="left_content_garanti_box">
                    <div class="item_left_content_garanti_box">
                        <div class="title_item_left_content_garanti_box">1. Гарантия самой выгодной цены</div>
                        <div class="text_item_left_content_garanti_box">Мы сами производим все комплектующие, поэтому даем лучшую цену, а не через «10-е руки», как другие.</div>
                    </div>
                    <div class="item_left_content_garanti_box">
                        <div class="title_item_left_content_garanti_box">2. Гарантия сроков</div>
                        <div class="text_item_left_content_garanti_box">Вы можете быть уверены, что навес будет готов в срок.</div>
                    </div>
                    <div class="item_left_content_garanti_box">
                        <div class="title_item_left_content_garanti_box">3. Гарантия качества</div>
                        <div class="text_item_left_content_garanti_box">Наше производство оснащено необходимым современным оборудованием. В своей работе мы используем итальянское и немецкое оборудование.</div>
                    </div>
                </div>
                <div class="right_icon_content_garanti_box" style="background:url(/img/stampm-1.png)no-repeat center; background-size:contain"></div>
            </div>
        </div>
    </div>
    
    <div class="we_produce">
        <div class="we_produce_content">
            <div class="we_produce_content_title">КСТАТИ, МЫ ЕЩЕ ПРОИЗВОДИМ</div>
            <div class="we_produce_content_mini_title">НИЖЕ ВЫ УВИДИТЕ МНОГО ПРИМЕРОВ И ОТЗЫВОВ О НАВЕСАХ</div>
            <div class="we_produce_content_items">
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop1.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Заборы</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 1800 ₽/мп</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость заборов', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop2.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Ворота</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 35000 ₽/шт</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость ворот', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop3.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Ограждения</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 4500 ₽/мп</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость ограждений', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop4.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Теплицы</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 14900 ₽</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость теплиц', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <div class="our_client">
        <div class="content_our_client">
            <div class="title_our_client">Наши клиенты</div>
            <div class="items_our_client">
                <div class="item_our_client" style="background:url(/img/clients/client-1.png)no-repeat center; background-size:contain"></div>
                <div class="item_our_client" style="background:url(/img/clients/client-2.png)no-repeat center; background-size:contain"></div>
                <div class="item_our_client" style="background:url(/img/clients/client-3.png)no-repeat center; background-size:contain"></div>
                <div class="item_our_client" style="background:url(/img/clients/client-4.png)no-repeat center; background-size:contain"></div>
                <div class="item_our_client" style="background:url(/img/clients/client-5.png)no-repeat center; background-size:contain"></div>
                <div class="item_our_client" style="background:url(/img/clients/client-6.png)no-repeat center; background-size:contain"></div>
            </div>
        </div>
    </div>
    <div class="serteficats">
        <div class="content_serteficats">
            <div class="title_serteficats">Сертификаты на нашу продукцию</div>
            <div class="items_serteficats">
                <div class="item_serteficats" style="background:url(/img/sert/sert1.jpg)no-repeat center; background-size:contain" onclick="OpenBigPhoto('/img/serteficats_img/sert1.jpg')"></div>
                <div class="item_serteficats" style="background:url(/img/sert/sert2.jpg)no-repeat center; background-size:contain" onclick="OpenBigPhoto('/img/serteficats_img/sert2.jpg')"></div>
                <div class="item_serteficats" style="background:url(/img/sert/sert3.jpg)no-repeat center; background-size:contain" onclick="OpenBigPhoto('/img/serteficats_img/sert3.jpg')"></div>
            </div>
        </div>
    </div>
    
    <div class="map" id="map_href">
        <div class="map_background" id="wrapMap">
             <iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A951459498eed497c8a51d6759677926bae9d89a196dc89697ee5b62ad75b7a39&amp;source=constructor" width="100%" height="420" frameborder="0"></iframe>
	    </div>
        <div class="content_map">
            <div class="contacts_map">
                <div class="title_map">Адрес производства:</div>
                <div class="vall_map">г. Верхняя Пышма, п. Зеленый Бор, ПК "Ремесленник" оф.19 </div>
                
                <div class="title_map">Телефон:</div>
                <div class="vall_map">+7 (391) 989-79-03</div>
                
                <div class="title_map">Электронная почта:</div>
                <div class="vall_map">info@etazh-lestnic.ru</div>
                <div class="btn_map" onclick="OpenModal('modal_form', 'Оставить заявку на изготовление навеса', 'ОСТАВИТЬ ЗАЯВКУ')">ОСТАВИТЬ ЗАЯВКУ</div>
            </div>
        </div>
    </div>
    
    <div class="any_questions">
        <div class="content_any_questions">
            <div class="left_content_any_questions">
                <div class="title_left_any_questions">ОСТАЛИСЬ ВОПРОСЫ?</div>
                <div class="text_left_any_questions">Сколько времени Вы уже потратили на поиск подрядчика? Неделю или месяц? Просто оставьте заявку или позвоните нам и за 5 минут разговора Вы поймёте, что не зря потратили время.</div>
            </div>
            <form action="" class="right_form_any_questions" id="question_form">
                <input type="text" class="input_antibot" name="antb">
                <input type="hidden" name="title_form" value="У человека остались вопросы">
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phone" placeholder="+7 (___) ___-__-__">
                <div class="btn_right_form_any_questions" onclick="SendForm('question_form')">ОСТАВИТЬ ЗАЯВКУ</div>
                <a href="/policy.php" class="policy_right_form_any_questions">Оставляя заявку вы принимаете условия политики конфиденциальности</a>
            </form>
        </div>
    </div>
    
    <div class="footer">
        <div class="content_footer">
            <div class="logo_a_btns_footer">
                <div class="logo_footer" style="background:url(/img/logo.png)no-repeat center; background-size:contain"></div>
                <div class="btn_footer" style="background: url(/img/metr_img.png)no-repeat left;background-position: 12px;background-size: auto 54%;background-color: #ffd002 ;" onclick="OpenModal('modal_form', 'Оставить заявку на приезд замерщика', 'ВЫЗВАТЬ ЗАМЕРЩИКА')">ВЫЗВАТЬ ЗАМЕРЩИКА</div>
                <div class="btn_footer" style="background: url(/img/phone_img.png)no-repeat left;background-position: 15px;background-size: auto 47%;background-color: #ffd002 ;"onclick="OpenModal('modal_form', 'Заказать обратный звонок', 'ОСТАВИТЬ ЗАЯВКУ')">ЗАКАЗАТЬ ЗВОНОК</div>
            </div>
            <div class="items_menu_footer">
                <a href="#catalog"  class="item_footer">Общий список</a>
                <a href="#catalog"  class="item_footer">Навесы для авто</a>
                <a href="#catalog"  class="item_footer">Навесы к дому</a>
                <a href="#catalog"  class="item_footer">Для бассейна</a>
                <a href="#catalog"  class="item_footer">Козырьки</a>
                <a href="#catalog"  class="item_footer">Беседки и терассы</a>
                <a href="#metal"  class="item_footer">Из металлопрофиля</a>
                <a href="#golicarb"  class="item_footer">Из поликарбоната</a>
                <a href="#metal"  class="item_footer">Односкатные навесы</a>
                <a href="#metal"  class="item_footer">Двускатные навесы</a>
				 <div style="clear: both;"></div>
<a href="https://navesy-v-krasnodare.ru/1-kak-sdelat-naves.htm" class="item_footer">как сделать навес</a>  
<a href="https://navesy-v-krasnodare.ru/1-krylczo-dlya-chastnogo-doma-s-navesom.htm" class="item_footer">крыльцо для частного дома с навесом</a> 
<a href="https://navesy-v-krasnodare.ru/1-krylczo-s-navesom.htm" class="item_footer">крыльцо с навесом</a> 
<a href="https://navesy-v-krasnodare.ru/1-krylczo-s-navesom-dlya-chastnogo.htm" class="item_footer">крыльцо с навесом для частного</a> 
<a href="https://navesy-v-krasnodare.ru/1-kupit-naves.htm" class="item_footer">купить навес</a> 
<a href="https://navesy-v-krasnodare.ru/1-kupit-naves-krasnodar.htm" class="item_footer">купить навес красноярск</a> 
<a href="https://navesy-v-krasnodare.ru/1-metallicheskij-naves.htm" class="item_footer">металлический навес</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves.htm" class="item_footer">навес</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-dlya-bassejna.htm" class="item_footer">навес для бассейна</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-dlya-mashiny.htm" class="item_footer">навес для машины</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-iz-polikarbonata.htm" class="item_footer">навес из поликарбоната</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-iz-profilnoj-truby.htm" class="item_footer">навес из профильной трубы</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-k-domu.htm" class="item_footer">навес к дому</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-besedka.htm" class="item_footer">навес беседка</a> 
<a href="https://navesy-v-krasnodare.ru/1-naves-nad-krylczom.htm" class="item_footer">навес над крыльцом</a> 
<a href="https://navesy-v-krasnodare.ru/1-navesy-v-krasnodare.htm" class="item_footer">навесы в красноярске</a>
<a href="https://navesy-v-krasnodare.ru/1-navesy-dlya-avtomobilej.htm" class="item_footer">навесы для автомобилей</a>
<a href="https://navesy-v-krasnodare.ru/1-navesy-dlya-dachi.htm" class="item_footer">навесы для дачи</a>
<a href="https://navesy-v-krasnodare.ru/1-navesy-foto.htm" class="item_footer">навесы фото</a>
<a href="https://navesy-v-krasnodare.ru/1-odnoskatnyj-naves.htm" class="item_footer">односкатный навес</a>
<a href="https://navesy-v-krasnodare.ru/1-profilnyj-naves.htm" class="item_footer">профильный навес</a>
<a href="https://navesy-v-krasnodare.ru/1-tenevoj-naves.htm" class="item_footer">теневой навес</a>
				
				
				
                <div style="clear: both;"></div>
                <a href="/catalog.php" class="item_footer">Каталог</a>
                <a href="/prices.php"  class="item_footer">Наши цены</a>
                <a href="/portfolio.php"  class="item_footer">Наши работы</a>
                <a href="/reviews_page.php"  class="item_footer">Отзывы</a>
                <a href="/contacts.php"  class="item_footer">Контакты</a>
            </div>
        </div>             
    </div>
    <div class="bottom_mini_footer">
        <div class="content_bottom_mini_footer">
            Внимание! Данный сайт носит информационный характер и ни при каких условиях не является публичной офертой, которая определяется положениями статьи 437 (2) гражданского кодекса рф. для получения подробной информации о наличии и стоимости указанных товаров и (или) услуг, пожалуйста, обращайтесь к нашим менеджерам.<br>Копирование любой части сайта без письменного согласия автора преследуется по закону.<br>© Copyright 2020. Все права защищены.<br><a href="/policy.html" style="color: white">Политика конфиденциальности</a>
        </div>
    </div>
   
    
    <div class="modal_form" id="modal_form">
        <div class="content_modal_form">
            <form action="" class="modal_window_form"  id="form_modal_form">
                <input type="text" class="input_antibot" name="antb">
                <div class="close_modal_form" onclick="CloseModal('modal_form')"></div>
                <div class="title_modal_form">Оставить заявку на расчет стоимости лестницы</div>
                <div class="mini_title_modal_form">Оставьте заявку и наш менеджер свяжется с&nbsp;Вами в ближайшее время</div>
                <input type="hidden" name="title_form" value="" id="title_modal_form_hidden">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" id="input_modal_phone" placeholder="+7 (___) ___-__-__">
                <div class="btn_modal_form" onclick="SendForm('form_modal_form')">ОСТАВИТЬ ЗАЯВКУ</div>
                <a href="/policy.php" class="policy_modal_form">Оставляя заявку вы принимаете условия политики конфиденциальности</a>
            </form>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <script>
        var mapTitle = document.createElement('div'); mapTitle.className = 'mapTitle';
        mapTitle.textContent = 'Для активации карты нажмите по ней';
        wrapMap.appendChild(mapTitle);
        wrapMap.onclick = function() {
            this.children[0].removeAttribute('style');
            mapTitle.parentElement.removeChild(mapTitle);
        }
        wrapMap.onmousemove = function(event) {
            mapTitle.style.display = 'block';
            if(event.offsetY > 10) mapTitle.style.top = event.offsetY + 20 + 'px';
            if(event.offsetX > 10) mapTitle.style.left = event.offsetX + 20 + 'px';
        }
        wrapMap.onmouseleave = function() {
            mapTitle.style.display = 'none';
        }
        
        $(document).ready(function(){
            $("body").on('click', '[href*="#"]', function(e){
                if (screen.width <= '670') {
                    $('.close_mobile_menu').css("display", "none");
                    $('.burger_mobile_menu').css("display", "block");
                    $('.mobile_menu_block').css("display", "none");
                    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 71 }, 250);
                    e.preventDefault();
                }else{
                    
                    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 70 }, 250);
                    e.preventDefault();
                }
                
            });
        });
        $('.accordion').accordion({
        	active: true,
        	collapsible: true,
        	heightStyle: 'content',
        	header: '> .accordion-item > .accordion-header'
        });
    
    </script>

</body>
</html>