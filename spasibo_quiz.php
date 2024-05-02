<?php 
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie("URL_user", $url);
    require_once "keyses.php";
    require_once "reviews.php";
    $kkf = array_slice($keyses, 0, 8);
    $revs = array_slice($reviews, 0, 5);
?>
<html>
<head>
    
    <title>Главная</title>
    
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description"  content="" />
    <meta name="keywords"  content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/template/img/favicon.ico" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=7771"/>
    <script src = "/js/jquery.min.js"></script>
    <script src="/js/onclicks.js?v=7771"></script>
   
    <script>
      $(document).ready(function(){
            $("body").on('click', '[href*="#"]', function(e){
                if (screen.width <= '670') {
                    $('.close_mobile_menu').css("display", "none");
                    $('.burger_mobile_menu').css("display", "block");
                    $('.mobile_menu_block').css("display", "none");
                    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 0 }, 250);
                    e.preventDefault();
                }else{
                    
                    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 0 }, 250);
                    e.preventDefault();
                } 
            });
        });
        
    </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(86416865, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/86416865" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->    
</head>

<body>
    
   <div class="header">
        <div class="header_content">
            <a href="/" class="header_content_logo_box">
                <div class="item_hclb_icon" style="background:url(/img/logo.png)no-repeat center; background-size:contain"></div>
                <div class="item_hclb_text">Изготовление и монтаж Навесов и козырьков всех видов ПО ВСЕЙ ОБЛАСТИ С 2007г.</div>
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
                    <a href="/#catalog" class="item_hcbm_menu">КАТАЛОГ</a>
                    <a href="/#prices" class="item_hcbm_menu">НАШИ ЦЕНЫ</a>
                    <a href="/" class="item_hcbm_menu">НАШИ РАБОТЫ</a>
                    <a href="/reviews_page.php#reviews_href" class="item_hcbm_menu">ОТЗЫВЫ</a>
                    <a href="/" class="item_hcbm_menu">КОНТАКТЫ</a>
                </div>
            </div>
            <div class="header_content_phone_time">
                <div class="item_hcpt_phone">+7 (391) 989-79-03</div>
                <div class="item_hcpt_time">
                    <div class="item_hcpt_time_icon"></div>
                    <div class="item_hcpt_time_text">Мы работаем: Пн-Вс 9:00 - 21:00</div>
                </div>
            </div>
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
            <a href="#catalog" class="item_hcbm_menu_m">КАТАЛОГ</a>
            <a href="#prices" class="item_hcbm_menu_m">НАШИ ЦЕНЫ</a>
            <a href="" class="item_hcbm_menu_m">НАШИ РАБОТЫ</a>
            <a href="" class="item_hcbm_menu_m">ОТЗЫВЫ</a>
            <a href="" class="item_hcbm_menu_m">КОНТАКТЫ</a>
        </div>
    </div>
    
    <div class="thanks_block">
        <div class="content_thanks_block">
            <div class="title_thanks_block">Спасибо за доверие!</div>
            <div class="text_thanks_block">Пожалуйста, проверьте введенные Вами данные: <br><font style="background:#ffc135; padding: 5px 5px 1px;"><?php echo $_GET['phone'];?></font><br>ПОСМОТРИТЕ НА НАШ САЙТ<br>ВЫ НАЙДЁТЕ ОТВЕТЫ НА ВСЕ СВОИ ВОПРОСЫ <br><a href="https://navesy-v-krasnodare.ru/" class="btn_guarantee" style="text-decoration: none; color: black; margin-top: 20px; display: block;text-shadow: 0 0 black;">ПОСМОТРЕТЬ САЙТ</a></div>
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
    
    <div class="we_produce">
        <div class="we_produce_content">
            <div class="we_produce_content_title">ЧТО ЕЩЕ МЫ ПРОИЗВОДИМ?</div>
            <div class="we_produce_content_items">
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop1.jpg)no-repeat center; background-size:cover">
                        <div class="item_wpci_photo_text">Заборы</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 1800 ₽/мп</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость изготовления забора', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop2.jpg)no-repeat center; background-size:cover">
                        <div class="item_wpci_photo_text">Ворота</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 35000 ₽/шт</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость изготовления ворот', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop3.jpg)no-repeat center; background-size:cover">
                        <div class="item_wpci_photo_text">Ограждения</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 4500 ₽/мп</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость изготовления ограждений', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop4.jpg)no-repeat center; background-size:cover">
                        <div class="item_wpci_photo_text">Теплицы</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 14900 ₽</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость изготовления теплиц', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="any_questions">
        <div class="content_any_questions">
            <div class="left_content_any_questions">
                <div class="title_left_any_questions">ОСТАЛИСЬ ВОПРОСЫ?</div>
                <div class="text_left_any_questions">Сколько времени Вы уже потратили на поиск подрядчика? Неделю или месяц?<br>Просто оставьте заявку или позвоните нам и за 5 минут разговора Вы поймёте, что не зря потратили время.</div>
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
                <div class="btn_footer" style="background: url(/img/metr_img.png)no-repeat left;background-position: 12px;background-size: auto 54%;background-color: #ffce54;" onclick="OpenModal('modal_form', 'Оставить заявку на приезд замерщика', 'ВЫЗВАТЬ ЗАМЕРЩИКА')">ВЫЗВАТЬ ЗАМЕРЩИКА</div>
                <div class="btn_footer" style="background: url(/img/phone_img.png)no-repeat left;background-position: 15px;background-size: auto 47%;background-color: #ffce54;"onclick="OpenModal('modal_form', 'Заказать обратный звонок', 'ОСТАВИТЬ ЗАЯВКУ')">ЗАКАЗАТЬ ЗВОНОК</div>
            </div>
            <div class="items_menu_footer">
                <a href="/#catalog"  class="item_footer">Общий список</a>
                <a href="/#catalog"  class="item_footer">Навесы для авто</a>
                <a href="/#catalog"  class="item_footer">Навесы к дому</a>
                <a href="/#fence"  class="item_footer">Для бассейна</a>
                <a href="/#catalog"  class="item_footer">Козырьки</a>
                <a href="/#catalog"  class="item_footer">Беседки и терассы</a>
                <a href="/#catalog"  class="item_footer">Из металлопрофиля</a>
                <a href="/#catalog"  class="item_footer">Из поликарбоната</a>
                <a href="/#catalog"  class="item_footer">Односкатные навесы</a>
                <a href="/#catalog"  class="item_footer">Двускатные навесы</a>
                <div style="clear: both;"></div>
                <a href="/#catalog" class="item_footer">Каталог</a>
                <a href="/#prices"  class="item_footer">Наши цены</a>
                <a href="/#portfolio_href"  class="item_footer">Наши работы</a>
                <a href="/reviews_page.php#reviews_href"  class="item_footer">Отзывы</a>
                <a href="/#map_href"  class="item_footer">Контакты</a>
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
        $('.accordion').accordion({
        	active: true,
        	collapsible: true,
        	heightStyle: 'content',
        	header: '> .accordion-item > .accordion-header'
        });
    </script>

</body>
</html>