<!DOCTYPE html>
<html lang="ru-RU">
<head>
    
    <title>Контакты</title>
    
    <meta charset="UTF-8">
    <meta name="description"  content="⭐️⭐️⭐️⭐️⭐️И️зготовление Навесов и козырьков для авто и дома. Свой цех. Идеальное сочетание цена-качество" />
    <meta name="keywords"  content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet"  href="css/style.css"/>
    <script src = "js/jquery.min.js"></script>
    
    <?php  include_once "metrika.php";?>   
</head>

<body>
    
    <?php include_once "header.php";?>
    <main>
    <div style="padding-top: 15px;"></div>
 <div class="map" id="map_href">
        <div class="map_background" id="wrapMap">
            <iframe loading='lazy' style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aee8efea5193fc2bf1b0cbafbd9ceb56d76368742baca6d6c24d3d430777fce45&amp;width=100%25&amp;source=constructor" width="100%" height="420" frameborder="0"></iframe>
		</div>
	
        <div class="content_map">
            <div class="contacts_map">
                <div class="title_map">Адрес производства:</div>
				<div class="vall_map">пер. Дорожный, 11 (Главный)</div>  
				<div class="vall_map">ул. Московская, 105  </div>				             
                <div class="title_map">Телефон:</div>
                <div class="vall_map">+7 (861) 217-61-03</div>
                
                <div class="title_map">Электронная почта:</div>
                <div class="vall_map">info@navesy-v-krasnodare.ru</div>
                <div class="btn_map" onclick="OpenModal('modal_form', 'Оставить заявку на изготовление навеса', 'ОСТАВИТЬ ЗАЯВКУ')">ОСТАВИТЬ ЗАЯВКУ</div>
            </div>
        </div>
</div>
    
<section class="serteficats">
        <div class="content_serteficats">
            <h2 class="title_serteficats">Сертификаты на нашу продукцию</h2>
            <div class="items_serteficats">
                <div class="item_serteficats" style="background:url(/img/sert/sert1.jpg)no-repeat center; background-size:contain" onclick="OpenBigPhoto('/img/serteficats_img/sert1.jpg')"></div>
                <div class="item_serteficats" style="background:url(/img/sert/sert2.jpg)no-repeat center; background-size:contain" onclick="OpenBigPhoto('/img/serteficats_img/sert2.jpg')"></div>
                <div class="item_serteficats" style="background:url(/img/sert/sert3.jpg)no-repeat center; background-size:contain" onclick="OpenBigPhoto('/img/serteficats_img/sert3.jpg')"></div>
            </div>
        </div>
</section>
    
<section class="we_produce">
        <div class="we_produce_content">
            <h2 class="we_produce_content_title">КСТАТИ, МЫ ЕЩЕ ПРОИЗВОДИМ</h2>
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
</section>
    
    <?php include_once "modular-windows.php";?>
    <?php include_once "scroll-top.php";?>
</main>
    <?php include_once "footer.php";?>
	<script src="js/onclicks.js"></script>

<script>
    var _emv = _emv || [];
    _emv['campaign'] = '206bde0d66915a72b1e539fe';
    
    (function() {
        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
    })();


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
</script>

</body>
</html>