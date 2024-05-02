<?php 
include_once "adminka/polikarbonat-catalog-img.php";
 include_once "adminka/metallocherepiza-catalog-img.php";
 include_once "adminka/audio-otzyv.php";
 include_once "adminka/video-block.php";
 include_once "top-cache.php";
require_once "keyses.php";
     require_once "reviews.php";
     include_once (__DIR__ . "/includes_prices/typical_prices.php");
     include_once (__DIR__ . "/includes_prices/metall_typical_prices.php");
     




 ?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>


   
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <meta name="description"  content="⭐️⭐️⭐️⭐️⭐️И️зготовление Навесов и козырьков для авто и дома. Свой цех. Идеальное сочетание цена-качество" />
    <meta name="keywords"  content="навесы в краснодаре, навесы краснодар, навесы из поликарбоната в краснодаре, изготовление навесов из поликарбоната в краснодаре, навесы из поликарбоната, изготовление навесов, навес под ключ, навес для авто, навес к дому" />   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
   
   <link rel="stylesheet" href="css/style.css">
   <script src = "js/jquery.min.js"></script>
   
   <link rel="stylesheet" href="css/baguetteBox.min.css">
   <link rel="stylesheet" href="css/plyr.css">
   <link rel="stylesheet" href="css/slick-slick.css">


   

 
    
  
   
  
<?php  include_once "metrika.php";?>

 <title>Навесы на заказ. Идеальное сочетание цена-качество</title>
</head>

<body>

<?php 
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie("URL_user", $url);
   
    $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ПОД КЛЮЧ <br>Любой сложности с гарантией до 30 лет !';
    $url = urldecode($url);
   
    if (preg_match('/краснодар/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ В КРАСНОДАРЕ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/навес_на_заказ/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ НА ЗАКАЗ <br>Любой сложности с гарантией до 30 лет !';
    }
    //if (preg_match('/козырек/', $url)) { 
    //    $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ КОЗЫРЬКОВ ПОД КЛЮЧ <br>Любой сложности с гарантией до 30 лет !'; 
    //}
    //if (preg_match('/козырьков/', $url)) {
    //    $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ КОЗЫРЬКОВ ПОД КЛЮЧ <br>Любой сложности с гарантией до 30 лет !';
    //}
    if (preg_match('/теневой/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ ТЕНЕВЫХ НАВЕСОВ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/теневых/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ ТЕНЕВЫХ НАВЕСОВ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/крыльцо/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ НАД КРЫЛЬЦОМ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/крыльцом/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ НАД КРЫЛЬЦОМ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/дому/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ К ДОМУ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/дом/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ К ДОМУ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/авто/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ДЛЯ АВТО <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/машины/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ДЛЯ АВТО <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/бассейн/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ДЛЯ БАССЕЙНА <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/беседки/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ БЕСЕДОК И НАВЕСОВ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/беседок/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ БЕСЕДОК И НАВЕСОВ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/ковка/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ С КОВКОЙ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/кованые/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ С КОВКОЙ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/ковкой/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ С КОВКОЙ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/поликарбонат/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПОЛИКАРБОНАТА <br>Любой сложности с гарантией до 30 лет !';
    }
	if (preg_match('/поликарбоната/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПОЛИКАРБОНАТА <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/металлопрофиль/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОПРОФИЛЯ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/металлопрофиля/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОПРОФИЛЯ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/металлочерепица/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОЧЕРЕПИЦЫ <br>Любой сложности с гарантией до 30 лет !';
    }
	if (preg_match('/металлочерепицы/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ МЕТАЛЛОЧЕРЕПИЦЫ <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/профнастил/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПРОФНАСТИЛА <br>Любой сложности с гарантией до 30 лет !';
    }
    if (preg_match('/профнастила/', $url)) {
        $title_site = 'ИЗГОТОВЛЕНИЕ И МОНТАЖ НАВЕСОВ ИЗ ПРОФНАСТИЛА <br>Любой сложности с гарантией до 30 лет !';
    }

    
    $rg = 0;
    foreach($keyses as $keysesI){
        if($keysesI['category_obsh'] == 'Общая категория'){
            $kkf[] = $keyses[$rg];
        }
        $rg++;
    }
    
    $revs = array_slice($reviews, 0, 5);
?> 
 
 
    <?php include_once "header.php";?>
    
   <main>
	
   <?php include_once 'block-quiz.php';?>

    <section class="preview ">
        <div class="shape_preview"></div>
        <div class="preview_content">
            <h1 class="preview_content_utp"><?php echo $title_site;?><br>Замер 0₽- в любой удобный день!</h1>
			
			
<p style ='font-size: x-large; color: #ffd002; font-family: Arial;'><b>🎁ПОДАРОК: Скидка при заказе до

<script >
	var dt = new Date();
    var date = dt.getDate();
    if( date <= 7) dt.setDate(7)
    else if( date <= 15) dt.setDate(15) 
     else if( date <= 23) dt.setDate(23) 
     else if( date <= 30) dt.setDate(30) 
     else dt.setDate(31); 

     
  var day = dt.getDate();

   document.write(day);

</script>

 <script >
   var d = new Date();

    var month=new Array("янв","Фев","Мар","Апр","Мая","Июня",
    "Июля","Авг","Сент","Окт","Нояб","Дек");

     document.write( month[d.getMonth()]
    );
</script>
Успевайте!</b>📌🍃</p>


<div class="bottom_content_preview ">
                <div class="left_block_bcp">
                    <div class="left_block_bcp_params">
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-1.png)no-repeat center; background-size:100% auto"></div>
                            <div class="item_lbbp_text">Расчет на нагрузки по ГОСТ и СНиП</div>
                        </div>
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-2.png)no-repeat center; background-size:contain"></div>
                            <div class="item_lbbp_text">Срок изготовления<br>от 7 дней</div>
                        </div>
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-3.png)no-repeat center; background-size:contain"></div>
                            <div class="item_lbbp_text">Сварщики 5го разряда</div>
                        </div>
                        <div class="item_lbbp">
                            <div class="item_lbbp_icon" style="background:url(/img/params/params-4.png)no-repeat center; background-size:contain"></div>
                            <div class="item_lbbp_text">Гарантии и цены<br>зафиксированы в Договоре</div>
                        </div>
                    </div>
                    <div class="left_block_bcp_prices">
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-1.png)no-repeat center; background-color: #f7f7f7; background-size:cover "></div>
                            <div class="item_lbb_prices_text">Для авто от&nbsp;3&nbsp;980&nbsp;₽/м2</div>
                        </div>
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-2.png)no-repeat center; background-color: #f7f7f7; background-size: cover"></div>
                            <div class="item_lbb_prices_text">К дому от&nbsp;38&nbsp;370&nbsp;₽</div>
                        </div>
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-3.png)no-repeat center; background-color: #f7f7f7; background-size:cover"></div>
                            <div class="item_lbb_prices_text">Террасы от&nbsp;67&nbsp;570&nbsp;шт</div>
                        </div>
                        <div class="item_lbb_prices">
                            <div class="item_lbb_prices_icon" style="background:url(/img/photo/bul-4.png)no-repeat center; background-color: #f7f7f7; background-size:cover"></div>
                            <div class="item_lbb_prices_text">Для беседки от&nbsp;69&nbsp;280&nbsp;₽</div>
                        </div>
                    </div>
                </div>
                <div class="right_block_bcp">
                    <div class="right_block_bcp_title">РАССЧИТАТЬ СТОИМОСТЬ</div>
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
                        <input type="tel" class="input_rbbf" name="phone" placeholder="+7 (___) ___-__-__">
                        <div class="btn_block_bcp_form blick_btn"  onclick="SendForm('rbdmmf1')"><span></span>РАССЧИТАТЬ СТОИМОСТЬ</div>
                        <div class="info_block_bcp_form">БЕСПЛАТНЫЙ детальный расчет и 3D макет. БЕСПЛАТНЫЙ выезд инженера.</div>
                        <span><br>Оставляя заявку вы принимаете условия Политики конфиденциальности</span>
						
                    </form>
                </div>
</div>
</section>
    </div>
    <section class="blue_line "> 
        <div class="content_blue_line">
            <div class="item_blue_line">
                <div class="icon_item_blue_line"></div>
             
				<div class="text_item_blue_line"> <span>P</span>аботаем без предоплаты</div>
            </div>
            <div class="item_blue_line ">
                <div class="icon_item_blue_line unico_img"></div>
                <div class="text_item_blue_line "> <span>П</span>роизводство в&nbspКраснодаре БЕЗ&nbspПОСРЕДНИКОВ!</div>
            </div>
            <div class="item_blue_line">
                <div class="icon_item_blue_line guarantee_img"></div>
                <div class="text_item_blue_line"><span>16</span> лет успешной работы!</div>
               
            </div>
        </div>
    </section>
    
    <section class="target " id="catalog">
        <div class="target_content">
            <h2 class="target_content_title" >МЫ ИЗГОТОВИЛИ БОЛЕЕ 1140 <span style="color:red">НАВЕСОВ ПОД КЛЮЧ</span></h2>
            <div class="target_content_block_items">
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo"  style="background:url(/img/photo_target/t-avto.jpg)no-repeat center; background-size:100% auto; ">
                        <div class="item_tcb_photo_text">Навесы для авто</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 49 240 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для авто', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-dom.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы к дому</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 38 370 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов к дому', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-bes.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Беседки</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 69 280 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость беседок', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-koz.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Крыльцо и козырьки</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 15 760 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов на крыльцо и козырьков', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
            <div class="target_content_block_items">
                
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-bass.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Для бассейна</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 39 680 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для бассейна', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-mang.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Для мангала и барбекю</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 44 280 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для мангала и барбекю', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-terr.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Терассы</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 67 570 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для терассы', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_tcb">
                    <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-park.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы д/парковок</div>
                    </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 99 280 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для парковок', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    	
    <section class="three_maket ">
        <div class="maket_three_maket" style="background:url(/img/photo/3D_maket.png)no-repeat center; background-size:contain";></div>
        <div class="three_maket_shape"></div>
        <h2 class="content_three_maket_title">МАКЕТ НАВЕСА</h2>
        <div class="content_three_maket">
            <div class="left_content_three_maket">
                <div class="text_left_content_three_maket">Посмотрите как будет смотреться ваш навес на участке</div>
                <div class="bottom_title_left_content_three_maket">В подарок до 
									
	<script language="javascript" type="text/javascript">
	var dt = new Date();
    var date = dt.getDate();
    if( date <= 7) dt.setDate(7) 
    else if( date <= 5) dt.setDate(5) 
	else if( date <= 10) dt.setDate(10)
    else if( date <= 15) dt.setDate(15)		
    else if( date <= 20) dt.setDate(20) 
	else if( date <= 25) dt.setDate(25)	
    else dt.setDate(30);


var day = dt.getDate();

document.write(day );

</script>

<script language="javascript" type="text/javascript">
var d = new Date();

var month=new Array("Января","Февраля","Марта","Апреля","Мая","Июня",
"Июля","Августа","Сентября","Октября","Ноября","Декабря");

document.write( month[d.getMonth()]
);
</script>
				
				</div>
            </div>
            <form action=""  class="right_form_three_maket" id="right_form_three_maket_frm">
                <input type="text" class="input_antibot" name="antb">
                <div class="title_right_form_three_maket">Заявка на 3D макет вашего навеса</div>
                <div class="mini_title_right_form_three_maket">С расчетом параметров и сметы</div>
                <input type="hidden" name="title_form" value="Форма для заявки на 3D макет(рисунок) будущеего навеса после замера">
                <input type="tel" name="phone" placeholder="+7 (___) ___-__-__">
                <div class="btn_right_form_three_maket blick_btn" onclick="SendForm('right_form_three_maket_frm')"><span></span>ПОЛУЧИТЬ ПРОЕКТ И РАСЧЕТ</div>
                <a href="/policy.php" class="policy_right_form_three_maket">Оставляя заявку вы принимаете условия Политики конфиденциальности</a>
            </form>
        </div>
</section>
   
        
    <section class="target">
            <div class="target_content">
                <div class="target_content_block_items">
                    <div class="item_tcb">
                        <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-tenev.jpg)no-repeat center; background-size:100% auto">
                            <div class="item_tcb_photo_text">Навесы для дет. садов</div>
                        </a>
                        <div class="item_tcb_prices_btn">
                            <div class="item_tcb_prices">От 86 350 ₽</div>
                            <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для дет. садов', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                        </div>
                    </div>
                    <div class="item_tcb">
                        <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-der.jpg)no-repeat center; background-size:100% auto">
                            <div class="item_tcb_photo_text">Навесы для отдыха</div>
                        </a>
                        <div class="item_tcb_prices_btn">
                            <div class="item_tcb_prices">От 64 680 ₽</div>
                            <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость деревянных навесов', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                        </div>
                    </div>
                    <div class="item_tcb">
                        <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-kov.jpg)no-repeat center; background-size:100% auto">
                            <div class="item_tcb_photo_text">Кованые навесы</div>
                        </a>
                        <div class="item_tcb_prices_btn">
                            <div class="item_tcb_prices">От 95 280 ₽</div>
                            <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость кованых навесов', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                        </div>
                    </div>
                    <div class="item_tcb">
                      <a href="#portfolio_href" class="item_tcb_photo" style="background:url(/img/photo_target/t-dah.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_tcb_photo_text">Навесы для дачи</div>
                      </a>
                    <div class="item_tcb_prices_btn">
                        <div class="item_tcb_prices">От 59 680 ₽</div>
                        <div class="item_tcb_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость навесов для дачи', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gager_background" style="background:url(/img/main_preview.jpg)no-repeat center; background-size:cover">
        <div class="gager">
            <div class="gager_content">
                <div class="gager_content_left" style="background:url(/img/manager/Menedger-IVAN.jpg)no-repeat center; background-size:cover"></div>
                <div class="gager_content_right">
                    <h2 class="gager_content_right_title" >БЕСПЛАТО ВЫЗВАТЬ ИНЖЕНЕРА НА ЗАМЕР</h2>
                    <h3 class="gager_content_right_subtitle" >Опыт инженера > 700 проектов</h3>
                    <div class="gager_content_right_items">
                        <div class="item_gcri_box">
                           
                            <div class="item_gcri_box_text">✔️Согласуем удобное для Вас время!</div>
                        </div>
                        <div class="item_gcri_box">
                           
                            <div class="item_gcri_box_text">✔️Покажем образцы. Поможем выбрать форму!</div>
                        </div>
                        <div class="item_gcri_box">
                          
                            <div class="item_gcri_box_text">✔️Составим смету. Сделаем эскизы. </div>
                        </div>
                    </div>
                    <div class="gager_content_right_btn blick_btn" onclick="OpenModal('modal_form', 'Заявка на выезд замерщика технолога', 'ЗАКАЗАТЬ ЗАМЕР')"><span></span>ЗАКАЗАТЬ ЗАМЕР</div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="covering ">
     <div class="covering_content">
            <h2 class="covering_title">КАКИЕ <span style="color:red">МАТЕРИАЛЫ</span> МЫ ИСПОЛЬЗУЕМ <span style="color:red">ДЛЯ КРОВЛИ</span> НАВЕСА</h2>
            <div class="covering_items">
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ ПОЛИКАРБОНАТА</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-polik.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️<span style="color:red">Цвета:</span> 18 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>4, 6, 8, 10, 16&nbsp;мм</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.:Защита от UV</div>
                    </div>
                    <div class="covering_item_prices">От: 3 980 ₽/м2</div>
                    <div class="covering_item_btn blick_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')"><span></span>ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">ИЗ&nbsp;МОНОЛИТНОГО ПОЛИКАРБОНАТА</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-mono.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ <span style="color:red">Цвета:</span> 17 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>от 2 до 12&nbsp;мм</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.: Сверх прочный</div>
                    </div>
                    <div class="covering_item_prices">От: 6 410 ₽/м2</div>
                    <div class="covering_item_btn blick_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')"><span></span>ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ МЕТАЛЛОПРОФИЛЯ</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-profil.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ <span style="color:red">Цвета:</span> 46 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>0,45; 0,55; 0,7; 0,8</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.: Сверх прочный</div>
                    </div>
                    <div class="covering_item_prices">От: 3 980 ₽/м2</div>
                    <div class="covering_item_btn blick_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')"><span></span>ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ МЕТАЛЛОЧЕРЕПИЦЫ</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-meth.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ <span style="color:red">Цвета:</span> 52 вида</div>
                        <div class="covering_item_in_box_items">⭐️ Волны: 17 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: <br>0,45; 0,55; 0,65</div>
                    </div>
                    <div class="covering_item_prices">От: 4 260 ₽/м2</div>
                    <div class="covering_item_btn blick_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')"><span></span>ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">НАВЕСЫ ИЗ МЯГКОЙ КРОВЛИ</div>
                    <a href="#portfolio_href" class="covering_item_photo" style="background:url(/img/photo_target/t-magk.jpg)no-repeat center; background-size:100% auto"></a>
                    <div class="covering_item_box_items">
					    <div class="covering_item_in_box_items">⭐️ <span style="color:red">Цвета:</span> 30 видов</div>
                        <!---div class="covering_item_in_box_items">⭐️ Цвета: 30 видов</div--->
                        <div class="covering_item_in_box_items">⭐️ Форма: 7 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Гарантия: до 50 лет</div>
                    </div>
                    <div class="covering_item_prices">От: 5 890 ₽/м2</div>
                    <div class="covering_item_btn blick_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога материалов', 'ПОЛУЧИТЬ КАТАЛОГ')"><span></span>ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
            </div>
 </div>
    </section>
			
            <div class="examples_content_btn blick_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <span></span>
                <div class="btn_icon"></div>
				<div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
				<div class="btn_icon"></div>
            </div>
			<div class="covering_title"><br></div>
			
    <section class="examples" id="prices">
        <div class="examples_content">
            <h2 id="golicarb" class="examples_content_title">ПОСМОТРИТЕ НА ПРИМЕРЫ СТОИМОСТИ ТИПОВЫХ НАВЕСОВ</h2>
            <div class="examples_content_items">
                <?php foreach($typical_prices as $itemTypical):?>
                <div class="examples_content_item_box">
                    <div class="ecib_title"><?php echo $itemTypical['title'];?></div>
                    <div class="ecib_photo" style="background:url(/img/primers/<?php echo $itemTypical['photo'];?>)no-repeat center; background-size:contain"></div>
                  
                    <div class="ecib_prices">Ваш размер от <?php echo $itemTypical['price_ot'];?> р/м2</div>
                    <div class="ecib_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость: <?php echo $itemTypical['title'];?>', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <?php endforeach;?>
            </div>
     	
            <h2 id="metal" class="examples_content_title">НАВECЫ ИЗ МЕТАЛЛОПРОФИЛЯ</h2>
            <div class="examples_content_items">
                <?php foreach($metall_typical_prices as $itemMetallTypical):?>
                <div class="examples_content_item_box">
                    <div class="ecib_title"><?php echo $itemMetallTypical['title'];?></div>
                    <div class="ecib_photo" style="background:url(/img/primers/<?php echo $itemMetallTypical['photo'];?>)no-repeat center; background-size:contain"></div>
             
                    <div class="ecib_prices">Ваш размер от <?php echo $itemMetallTypical['price_ot'];?> р/м2</div>
                    <div class="ecib_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость: <?php echo $itemMetallTypical['title'];?>', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <?php endforeach;?>
            </div>
			
            <div class="examples_content_btn blick_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <span></span>
                <div class="btn_icon"></div>
				<div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
				<div class="btn_icon"></div>
            </div>
			
        </div>
    </section>	
	
    <section class="attract ">
        <div class="attract_content">
            <div class="attract_content_title">
                <h2 class="attract_content_title_text">ПОСМОТРИТЕ НА <span style="color:red">НАВЕСЫ, КОТОРЫЕ ПОСТРОИЛИ МЫ</span></h2>
                <div class="attract_content_title_icon" style="background:url(/img/photo/Strelka.png)no-repeat center; background-size:cover"></div>
            </div>
            <div class="attract_content_box">
                <div class="attract_content_box_ingener" >
                    <img src="../img/ingener.jpg" alt="ingener">
                </div>
              
                <div class="attract_content_box_text">
                    <div class="acbt_item1">Инженер-проектировщик Михаил&nbsp;Верхов:</div>
                    <div class="acbt_item2">При проектировании навеса мы учитываем прежде всего снеговые и ветровые нагрузки</div>
                    <div class="acbt_item3">РАССКАЖЕМ <span style="color:red">КАК НЕ НАДО</span> СТРОИТЬ НАВЕСЫ</div>
                </div>
                <div class="attract_content_box_break">
                    <img src="../img/photo/break.jpg" alt="break">
                </div>
               
            </div>
            <div class="attract_content_btn blick_btn" onclick="OpenModal('modal_form', 'Расскажем как правильно строить навесы', 'ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ')"><span></span>ХОЧУ КОНСУЛЬТАЦИЮ ИНЖЕНЕРА</div>
        </div>
    </section>
  
    <section class="portfolio" id="portfolio_href">
    <?php include_once "content-portfolio-slider.php";?>
    </section>




    <section class='policarbonate__awnings'>
       <?php include_once 'section-policarbonat.php'; ?>


    </section>


     <section class='profnastil__awnings'>
        <div class="profnastil__awnings-body">
            <div class="profnastil__awnings-body-title">
                <h2>Посмотрите на последние наши работы:<br><span style='color: red'>Навесы из профнастила/металлочерепицы</span></h2>
            </div>
            <ul class="profnastil__awnings-row row-slider">
            <?php foreach ($metallocherepiza as $metall) {?>
                    <li class="profnastil__awnings-column">
                    <div class="profnastil__awnings-items">
                        <a href="img/metallocherepiza/<?php echo $metall['photo_name'];?>.jpg">
                        <img loading="lazy"  src="../img/metallocherepiza/<?php echo $metall['photo_name'];?>.jpg" alt="navesy">
                        </a>
                   
                    </div>
                    
                </li>
                  <?php 
                }
                
                ?>
       
             
             
            </ul>
            <div class="profnastil__awnings-button button-block">
                <button class='button-block-btn btn-button-block blick_btn '>показать ещё примеры</button>
            </div>
            
        </div>


    </section>

<section class='button__whatsapp'>
    <a class='blick_btn'  target='_blank' href="https://api.whatsapp.com/send/?phone=79965948815">
    <img loading='lazy' src="../img/whatsapp_block.svg" alt="whatsapp">
     </a>

</section >

<section class="sravnenie">
     <?php include_once 'section-sravnenie.php'; ?>
</section>

<section class="quiz_box_block display_only_desktop">
<?php include_once 'quiz-block.php'; ?>
</section>
    			
            <div class="examples_content_btn blick_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <span></span>
                <div class="btn_icon"></div>
				<div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
				<div class="btn_icon"></div>
            </div>
		
    <section class="action">
    <?php include_once 'section-action.php'; ?>
    </section>

   
    <section class="reviews">
    <?php include_once 'section-reviews.php'; ?>
    </section>
    		
<div class="examples_content_btn blick_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <span></span>
                <div class="btn_icon"></div>
				<div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
				<div class="btn_icon"></div>
</div>

<section class="audio__reviews">

   <?php include_once 'section-audio-reviews.php'; ?>
</section>

<section class="video__reviews">
<?php include_once 'section-video-reviews.php'; ?>
</section>



<section class="production">
        <div class="production_content">
            <h2 class="production_content_title">НАШЕ ПРОИЗВОДСТВО</h2>
            <div class="production_content_block">
              
                <div class="production_content_block-slider">
                <ul class="production_content_block_slider slider-production-content-big">
                        <li class="slider-production-content-itembig">
                          <img class='slider-production-content-itemsdig'src="../img/proizvodstvo/slide-1.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-itembig">
                          <img class='slider-production-content-itemsdig'src="../img/proizvodstvo/slide-2.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-itembig">
                          <img class='slider-production-content-itemsdig'src="../img/proizvodstvo/slide-3.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-itembig">
                          <img class='slider-production-content-itemsdig'src="../img/proizvodstvo/slide-4.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-itembig">
                          <img class='slider-production-content-itemsdig'src="../img/proizvodstvo/slide-5.jpg" alt="photo">
                         </li>
                </ul>
                <ul class="production_content_block_slider slider-production-content">
                        <li class="slider-production-content-item">
                          <img class='slider-production-content-items'src="../img/proizvodstvo/slide-1.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-item">
                          <img class='slider-production-content-items'src="../img/proizvodstvo/slide-2.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-item">
                          <img class='slider-production-content-items'src="../img/proizvodstvo/slide-3.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-item">
                          <img class='slider-production-content-items'src="../img/proizvodstvo/slide-4.jpg" alt="photo">
                         </li>
                        <li class="slider-production-content-item">
                          <img class='slider-production-content-items'src="../img/proizvodstvo/slide-5.jpg" alt="photo">
                         </li>
                </ul>
                </div>
              
                <div class="production_content_block_top">
                   
					<div class="pcbt_text">Наш опыт в строительстве навесов в Краснодаре уже более 15 лет.</div>
                    <div class="pcbt_text">Мы занимаемся изготовлением навесов к дому,навесов для авто, козырьков, беседок и террас любой сложности.</div>
                    <div class="pcbt_text">У нас вы можете купить навес из поликарбоната, навес из профнастила, металлочерепицы, мягкой кровли, либо монолитного поликарбоната. Цена навеса будет максимально выгодной, за счет собственного производства. </div>
                    <div class="pcbt_text">Мы занимаемся всеми этапами производства металлоконструкций: от проектирования, до гибки, сварки и покраски, а так же монтаж навесов на месте.</div>
                    <div class="pcbt_text">Даем гарантию на навесы:<br> - от коррозии до 5-ти лет<br> - на поликарбонат до 30-ти лет<br> - от воздействия окружающей среды до 5-ти лет<br> - на целостность конструкции до 5-ти лет<br> - на сварные работы до 5-ти лет</div>
                    <div class="pcbt_text">Разрабатываем 3D макеты, проект навеса и эскизы навесов любой сложности.</div>
                    <div class="pcbt_text">Кстати, вы можете приехать к нам на производство:</div>
                    <form action class="pcbt_form" id="proizvodstvo">
                        <input type="text" class="input_antibot" name="antb">
                        <input type="hidden" name="title_form" value="Хочется посетить производство">
                        <input type="text" name="name" placeholder="Имя">
                        <input type="tel" name="phone" placeholder="+7 (___)-___-__-__">
                        <div class="pcbt_form_btn blick_btn "onclick="SendForm('proizvodstvo')"><span></span>ПОСЕТИТЬ ПРОИЗВОДСТВО</div>
                        <a href="/policy.php" class="pcbt_form_policy">Оставляя заявку вы принимаете условия Политики конфиденциальности</a>
                    </form>
                </div>
            
            </div>
        </div>
</section>
 <section class='advantages'>
    <div class="advantages_background" style="background:url(/img/photo/Fon_cex.jpg)no-repeat center; background-size:cover">
        <div class="advantages_body">
            <div class="advantages_content">
                <div class="advantages_content_title"> <h2>МЫ ЛЮБИМ КАЧЕСТВО И РАЗУМНУЮ ЭКОНОМИЮ</h2></div>
                <div class="advantages_content_items">
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/3-1.webp)no-repeat center;"></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Собственное производство</div>
                            <div class="item_text_down">Работаем без посредников!<br> У нас свои цеха и бригады, поэтому цены ниже!</div>
                        </div>
                    </div>
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/6-1.webp)no-repeat center; "></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Выгодные цены на материалы</div>
                            <div class="item_text_down">Прямые договора с поставщиками.<br> Экономия 10-15% на материале.</div>
                        </div>
                    </div>
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/5-1.webp)no-repeat center;"></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Гарантии прописаны в договоре</div>
                            <div class="item_text_down">В договоре фиксируются все гарантии, <br>сроки и цены. Цена останется неизменной.</div>
                        </div>
                    </div>
                    <div class="item_advantages_content">
                        <div class="item_advantages_content_icon" style="background:url(/img/advantages/1-1.webp)no-repeat center; "></div>
                        <div class="item_advantages_content_text">
                            <div class="item_text_up">Работаем по СП, СНиП и ГОСТ</div>
                            <div class="item_text_down">Соблюдаем все требования.<br> Имеем сертификаты на всю продукцию.</div>
                        </div>
                    </div>
                </div>
                <div class="advantages_content_subtitle">
                    <h3><b>Никаких 100% предоплат</b><br>Окончательный расчет только после приемки всех работ. Берем предоплату только на материал</h3>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="scheme_work">
        <div class="content_scheme_work">
            <div class="title_scheme_work"><h2>КАК ЗАКАЗАТЬ У НАС НАВЕС?</h2></div>
        
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
            <div class="btn_scheme_work blick_btn" onclick="OpenModal('modal_form', 'Нужна консультация об этапах изготовления навеса', 'УЗНАТЬ ПОДРОБНЕЕ')"><span></span>УЗНАТЬ ПОДРОБНЕЕ</div>
        </div>
</section>
    
    
    
    <section class="we_produce">
        <div class="we_produce_content">
            <h2 class="we_produce_content_title">КСТАТИ, МЫ ЕЩЕ ПРОИЗВОДИМ</h2>
            
            <div class="we_produce_content_items">
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop1.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Обшивку потолка и пола</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 3 500 ₽/мп</div>
                        <div class="item_wpci_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость заборов', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop2.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Кованые элементы</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 4 000 ₽/мп</div>
                        <div class="item_wpci_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость ворот', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop3.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Перила</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 4 000 ₽/мп</div>
                        <div class="item_wpci_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость ограждений', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
                <div class="item_wpci">
                    <div class="item_wpci_photo" style="background:url(/img/photo_target/t-dop4.jpg)no-repeat center; background-size:100% auto">
                        <div class="item_wpci_photo_text">Боковая обшивка</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 3 000 ₽/м2</div>
                        <div class="item_wpci_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость теплиц', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    			
            <div class="examples_content_btn blick_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <span></span>
                <div class="btn_icon"></div>
				<div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
				<div class="btn_icon"></div>
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
    
 <div class="map" id="map_href">
        <div class="map_background" id="wrapMap">
             <iframe loading='lazy' style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aee8efea5193fc2bf1b0cbafbd9ceb56d76368742baca6d6c24d3d430777fce45&amp;width=100%25&amp;source=constructor" width="100%" height="420" frameborder="0"></iframe>
	    </div>
	
        <div class="content_map">
            <div class="contacts_map">
                <div class="title_map">Адреса цехов и офисов:</div>
				<div class="vall_map">г. Краснодар</div>
                <div class="vall_map">пер. Дорожный, 11 (Главный)</div>  
				<div class="vall_map">ул. Московская, 105  </div>		             
                <div class="title_map">Телефон:</div>
                <div class="vall_map">+7 (861) 217-61-03</div>
                
                <div class="title_map">Электронная почта:</div>
                <div class="vall_map">info@navesy-v-krasnodare.ru</div>
                <div class="btn_map blick_btn" onclick="OpenModal('modal_form', 'Оставить заявку на изготовление навеса', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>ОСТАВИТЬ ЗАЯВКУ</div>
            </div>
        </div>
</div>
    
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



<script>
    var _emv = _emv || [];
    _emv['campaign'] = '206bde0d66915a72b1e539fe';
    
    (function() {
        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
    })();
</script>

<?php include_once "modular-windows.php";?>
<?php include_once "modal-slider.php";?>
<?php include_once "scroll-top.php";?>
</main>
    <?php include_once "footer.php";?>
   
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/onclicks.js"></script>
    <script src="js/show-more.js"></script>
    
    

    <script src="js/plyr.min.js"></script>
    <script src="js/slick-slider.js"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/audio-modal.js"></script>
    <script src="js/video-reviers.js"></script>
    <script>
    const player = new Plyr('#player');
    const players = Plyr.setup('#player');
  
   
</script>
    <script>
        window.addEventListener('DOMContentLoaded', function (){
        $(document).ready(function(){
            if (decodeURIComponent(window.location.href).indexOf("козырек") > -1){
                OpenCategoryPortfolio('Козырьки');
            }else if(decodeURIComponent(window.location.href).indexOf("козырьков") > -1){
                OpenCategoryPortfolio('Козырьки');
            }
        });


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

      });
    </script>

</body>
</html>
<?php
include_once "bottom-cache.php";
?>