<?php 
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   setcookie("URL_user", $url);


    require_once "keyses.php";
    require_once "reviews.php";
    $kkf = array_slice($keyses, 0, 8);
    $revs = array_slice($reviews, 0, 5);
?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    
    <title>Спасибо за доверие</title>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> -->
    <meta name="description"  content="" />
    <meta name="keywords"  content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" href="css/style.css"/>
    <script src = "js/jquery.min.js"></script>
    
   

     <?php  include_once "metrika.php";?>
	
<!-- Facebook Pixel Code -->
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
fbq('track', 'Lead');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=854659962099164&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->  
<!-- Google Tag Manager 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5KX43ZJ');
gtag('config', 'AW-335321176');
</script>-->
<!-- End Google Tag Manager -->

</head>

<body>
    
    <?php include_once "header.php";?>
    <main>
    <div class="thanks_block">
        <div class="content_thanks_block">
            <div class="title_thanks_block"><h2>Спасибо за доверие!</h2></div>
            <div class="text_thanks_block">Пожалуйста, проверьте введенные Вами данные: <br><span style="background:#ffd002; padding: 5px 5px 1px;">
            <?php echo $_GET['phone'];?>
			</span><br>
            Для нас дорог каждый клиент!
			<br>
            Мы обязательно скоро свяжемся с Вами</div>
			<span style='font-size:37px; color:red'>ПОЖАЛУЙСТА, НЕ ОСТАВЛЯЙТЕ ПОВТОРНУЮ ЗАЯВКУ, ЕСЛИ НОМЕР ВЕРНЫЙ !</span>
        </div>
    </div>
    <section class="reviews">
    <?php include_once 'section-reviews.php'; ?>
    </section>
   
    
    <section class="we_produce">
        <div class="we_produce_content">
            <h2 class="we_produce_content_title">ЧТО ЕЩЕ МЫ ПРОИЗВОДИМ?</h2>
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
    </section>
    
    
    <section class="any_questions">
        <div class="content_any_questions">
            <div class="left_content_any_questions">
                <div class="title_left_any_questions"> <h2>ОСТАЛИСЬ ВОПРОСЫ?</h2></div>
                <div class="text_left_any_questions">Сколько времени Вы уже потратили на поиск подрядчика? Неделю или месяц? Просто оставьте заявку или позвоните нам и за 5 минут разговора Вы поймёте, что не зря потратили время.</div>
            </div>
            <div class="right_form_any_questions">
             <form action="" class="" id="question_form">
                <input type="text" class="input_antibot" name="antb">
                <input type="hidden" name="title_form" value="У человека остались вопросы">
                <input type="text" name="name" placeholder="Имя">
                <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                <input type="hidden" name="utm_source" id='utm_source' value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
                <div class="btn_right_form_any_questions blick_btn" onclick="SendForm('question_form')"><span></span>ОСТАВИТЬ ЗАЯВКУ</div>
                <a href="policy.php" class="policy_right_form_any_questions">Оставляя заявку вы принимаете условия Политики конфиденциальности</a>
             </form>
                <div class="right_form_any_questions_whatsapp">
     
                 <a target='_blank' href="https://api.whatsapp.com/send/?phone=79965948815" class='right_form_any_questions_whatsapp_button_link'>
                 <img src="../img/WhatsApp.svg" alt="whatsapp-link">
                  </a>

              </div>
            </div>
           
        </div>
    </section>
    <?php include_once "modular-windows.php";?>
    <?php include_once "scroll-top.php";?>
    </main>
<!-- Google Tag Manager (noscript) --
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KX43ZJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->   
<!-- Event snippet for Заявка с сайта conversion page 
<script>
  gtag('event', 'conversion', {'send_to': 'AW-335321176/JymfCMGgsdoCENiw8p8B'});
</script>-->
<!-- Event snippet for Заявка с сайта conversion page -->
    <?php include_once "footer.php";?>
    <script src="js/onclicks.js"></script>
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
</body>
</html>