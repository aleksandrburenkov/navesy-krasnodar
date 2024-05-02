
<?php 
    require_once "reviews.php";
    $revs = array_slice($reviews, 0, 30);
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    
    <title>Отзывы</title>
    
    <meta charset="UTF-8">
    <meta name="description"  content="⭐️⭐️⭐️⭐️⭐️И️зготовление Навесов и козырьков для авто и дома. Свой цех. Идеальное сочетание цена-качество" />
    <meta name="keywords"  content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" href="css/style.css"/>
    <script src = "js/jquery.min.js"></script>
   
    <?php  include_once "metrika.php";?>  
</head>

<body>
    
    <?php include_once "header.php";?>
    <main>
	
    <?php include_once 'block-quiz.php';?>
	
	
	<div style="padding-top: 80px"></div>

    <section class="reviews">
        <div class="reviews_content">
            <h2 class="reviews_title">ЛЮДИ ПИШУТ ОТЗЫВЫ О НАС</h2>
            <div class="reviews_items">
                <?php $i_rs = 0; foreach($revs as $rs):?>
                <div class="item_reviews" style="background:url(/img/reviews/<?php echo $rs['photo_name'];?>.jpg)no-repeat center; background-size:contain"></div>
                <?php $i_rs++;?>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    
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
    
    
    
    
    <section class="sravnenie">
     <?php include_once 'section-sravnenie.php'; ?>
</section>
    
    <section class="quiz_box_block">
    <?php include_once 'quiz-block.php'; ?>
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
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '854659962099164');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=854659962099164&ev=PageView&noscript=1"
/></noscript>

<script>
    var _emv = _emv || [];
    _emv['campaign'] = '206bde0d66915ae1b7ef0c61';
    
    (function() {
        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
    })();
</script>

</body>
</html>