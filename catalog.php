
<?php 
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie("URL_user", $url);
    require_once "keyses.php";
    require_once "reviews.php";
    $kkf = array_slice($keyses, 0, 8);
    $revs = array_slice($reviews, 0, 5);
    include_once (__DIR__ . "/includes_prices/typical_prices.php");
    include_once (__DIR__ . "/includes_prices/metall_typical_prices.php");
    include_once (__DIR__ . "/includes_prices/table_prices.php");
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    
    <title>Каталог</title>
    
    <meta charset="UTF-8">
    <meta name="description"  content="⭐️⭐️⭐️⭐️⭐️И️зготовление Навесов и козырьков для авто и дома. Свой цех. Идеальное сочетание цена-качество" />
    <meta name="keywords"  content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src = "js/jquery.min.js"></script>
    
    <?php  include_once "metrika.php";?>  
</head>

<body>
    
    <?php include_once "header.php";?>
    <main>
	
    <?php include_once 'block-quiz.php';?>

    <div style="padding-top: 70px;"></div>
    <section class="examples" id="prices">
        <div class="examples_content">
            <h1 id="policarp" class="examples_content_title">ПОСМОТРИТЕ НА ПРИМЕРЫ СТОИМОСТИ ТИПОВЫХ НАВЕСОВ</h1>
            <div class="examples_content_items">
                <?php foreach($typical_prices as $itemTypical):?>
                <div class="examples_content_item_box">
                    <div class="ecib_title"><?php echo $itemTypical['title'];?></div>
                    <div class="ecib_photo" style="background:url(/img/primers/<?php echo $itemTypical['photo'];?>)no-repeat center; background-size:contain"></div>
                  
                    <div class="ecib_prices">Ваш размер от <?php echo $itemMetallTypical['price_ot'];?> р/м2</div>
                    <div class="ecib_btn blick_btn" onclick="OpenModal('modal_form', 'Узнать стоимость: <?php echo $itemMetallTypical['title'];?>', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="examples_content_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">
                <div class="btn_icon"></div>
                <div class="examples_content_btn_text">ПОЛУЧИТЬ РАСЧЕТ И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
                <div class="btn_icon"></div>
            </div>
        </div>
    </section>
  
    <section class="covering">
        <div class="covering_content">
            <h2 class="covering_title">У НАС ТАК ЖЕ ЧАСТО ЗАКАЗЫВАЮТ</h2>
            <div class="covering_items">
                <div class="covering_item">
                    <div class="covering_item_title">БОКОВАЯ ОБШИВКА</div>
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_bok.jpg)no-repeat center; background-size:100% auto"></div>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Цвета: 18 видов</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина: 4, 6, 8, 10, 16&nbsp;мм</div>
                        <div class="covering_item_in_box_items">⭐️ Доп.:Защита от UV</div>
                    </div>
                    <div class="covering_item_prices">От: 4 850 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога работ', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">КОВАНЫЕ ЭЛЕМЕНТЫ</div>
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_kov.jpg)no-repeat center; background-size:100% auto"></div>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Вензеля</div>
                        <div class="covering_item_in_box_items">⭐️ Панели</div>
                        <div class="covering_item_in_box_items">⭐️ Декор. Элем.</div>
                    </div>
                    <div class="covering_item_prices">От: 2 900 ₽/м2</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога работ', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">БУТИРОВАНИЕ СТОЛБОВ</div>
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_but.jpg)no-repeat center; background-size:100% auto"></div>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Якорение</div>
                        <div class="covering_item_in_box_items">⭐️ Бурение отверстия</div>
                        <div class="covering_item_in_box_items">⭐️ Дренажная подушка</div>
                    </div>
                    <div class="covering_item_prices">От: 1 500 ₽/шт</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога работ', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">ВИНТОВЫЕ СВАИ</div>
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_vint.jpg)no-repeat center; background-size:100% auto"></div>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ Глуб. от 1 500 мм</div>
                        <div class="covering_item_in_box_items">⭐️ Диам. от 56 мм</div>
                        <div class="covering_item_in_box_items">⭐️ Толщина от 3 мм</div>
                    </div>
                    <div class="covering_item_prices">От: 2 400 ₽/шт</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога работ', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
                <div class="covering_item">
                    <div class="covering_item_title">БЕТОННЫЕ РАБОТЫ</div>
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_bet.jpg)no-repeat center; background-size:100% auto"></div>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ М 200, М 250, М 300</div>
                        <div class="covering_item_in_box_items">⭐️ Прочность от 196 кг/см2</div>
                        <div class="covering_item_in_box_items">⭐️ Срок службы от 50 лет</div>
                    </div>
                    <div class="covering_item_prices">От: 13 500 ₽/м3</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога работ', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
            </div>
        </div>
    </section>
    

<section class="action">
    <?php include_once 'section-action.php'; ?>
    </section>

    
<section class="sravnenie">
         <div class="sravnenie_content">
            <h2 class="sravnenie_content_title">СРАВНЕНИЕ НАС С ДРУГИМИ</h2>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-1.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sg-1.jpg" alt="sravnenie">
                       </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Отсутствие/неправильный выбор типа ферм</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Фермы с дополнительными ребрами жесткости</div>
                    </div>
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Использование минимальных размеров труб</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Профиль металла выбирается с запасом</div>
                    </div>
                  
                </div>
            </div>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-2.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                      <img loading="lazy"src="img/sravnenie/sg-2.jpg" alt="sravnenie">
                     </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Отсутствие расчете на нагрузки</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Расчет нагрузки по ГОСТ И СНиП</div>
                    </div>
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Неправильный выбор ферм</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Усиленные фермы прочнее ГОСТ на 32%</div>
                    </div>
                  
                </div>
            </div>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-3.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                      <img loading="lazy"src="img/sravnenie/sg-3.jpg" alt="sravnenie">
                     </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Использование тонкостенного металла</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Толщина металла от 2 до 5 мм</div>
                    </div>
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Неправильный выбор ферм</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Увеличенные размеры труб</div>
                    </div>
               
                </div>
            </div>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-4.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                      <img loading="lazy"src="img/sravnenie/sg-4.jpg" alt="sravnenie">
                     </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Некачественная сварка, не зачищенные швы</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Швы зачищаются</div>
                    </div>
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Не дипломированные сварщики</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>У нас работают дипломированные 
                 сварщики 4-5 разряда
              </div>
                    </div>
               
                </div>
            </div>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-5.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                      <img loading="lazy"src="img/sravnenie/sg-5.jpg" alt="sravnenie">
                     </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Краска облазит со временем  вследствие нарушения технологии</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Срок службы ЛКП покрытия – от 20 лет</div>
                    </div>
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Не соблюдение технологии покраски</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Строго соблюдаем технологию покраски
              </div>
                    </div>
               
                </div>
            </div>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-6.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                      <img loading="lazy"src="img/sravnenie/sg-6.jpg" alt="sravnenie">
                     </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Нарушение технологии монтажа </div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Мы используем в работе термошайбы, стыковочные и торцевые профили</div>
                    </div>
                  
               
                </div>
            </div>
            <div class="sravnenie_content_back">
                <div class="sravnenie_content_photos">
                 
                    <div class="photo_sravnenie">
                        <div class="photo_sravnenie-image">
                        <img loading="lazy"src="img/sravnenie/sb-7.jpg" alt="sravnenie">
                        </div>
                        
                        <p  style="color:red" class="mini_title_sravn">Как делают плохие навесы</p>
                    </div>
                    <div class="photo_sravnenie">
                     <div class="photo_sravnenie-image">
                      <img loading="lazy"src="img/sravnenie/sg-7.jpg" alt="sravnenie">
                     </div>
                        <p style="color:green" class="mini_title_sravn">Как делаем мы</p>
                    </div>
                </div>
            
                <div class="sravnenie_content_box">
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>Отсутствие договора и гарантий </div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>Заключаем договор и фиксируем: * цену- останется неизменной в процессе работ,* сроки изготовления
               </div>
                    </div>
                    <div class="sravnenie_content_box_line">
                        <div class="item_scbl"><span class="item_scbl_bad"></span>70-100% предоплата</div>
                        <div class="item_scbl"><span class="item_scbl_ok"></span>* Гарантии,* поэтапная оплата

                    </div>
                    </div>
               
                </div>
            </div>
            
        </div>
</section>
	
<section class="finishing_materials">
        <div class="content_finishing_materials">
            <h2 class="title_finishing_materials">18 цветов поликарбоната</h2>
            <div class="items_finishing_materials">
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Прозрачный.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Прозрачный</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Опал.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Опал</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Бирюза.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Бирюза</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Янтарь.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Янтарь</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Бронза.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Бронза</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Желтый.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Желтый</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Зеленый.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Зеленый</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Красный.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Красный</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Оранжевый.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Оранжевый</div>
                </div>
                <div class="item_finishing_materials">
                    <div class="photo_item_finishing_materials" style="background:url(/img/photo/Синий.jpg)no-repeat center; background-size:cover"></div>
                    <div class="title_item_finishing_materials">Синий</div>
                </div>
            </div>
            <div class="btn_finishing_materials" onclick="OpenModal('modal_form', 'Получить каталог цветов поликарбоната', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ КАТАЛОГ</div>
        </div>
</section>
    
<section class="finishing_materials">
        <div class="content_finishing_materials">
            <h2 class="title_finishing_materials">220 цветов эмали</h2>
            <div class="items_finishing_materials">
                <div class="item_finishing_materials_bottom">
                    <div class="photo_item_finishing_materials_bottom" style="background:url(/img/photo/13.jpg)no-repeat center; background-size:cover"></div>
                </div>
                <div class="item_finishing_materials_bottom">
                    <div class="photo_item_finishing_materials_bottom" style="background:url(/img/photo/14.jpg)no-repeat center; background-size:cover"></div>
                </div>
                <div class="item_finishing_materials_bottom">
                    <div class="photo_item_finishing_materials_bottom" style="background:url(/img/photo/15.jpg)no-repeat center; background-size:cover"></div>
                </div>
                <div class="item_finishing_materials_bottom">
                    <div class="photo_item_finishing_materials_bottom" style="background:url(/img/photo/16.jpg)no-repeat center; background-size:cover"></div>
                </div>
                <div class="item_finishing_materials_bottom">
                    <div class="photo_item_finishing_materials_bottom" style="background:url(/img/photo/17.jpg)no-repeat center; background-size:cover"></div>
                </div>
                <div class="item_finishing_materials_bottom">
                    <div class="photo_item_finishing_materials_bottom" style="background:url(/img/photo/18.jpg)no-repeat center; background-size:cover"></div>
                </div>
            </div>
            <div class="btn_finishing_materials" onclick="OpenModal('modal_form', 'Получить каталог цветов эмали и лака', 'ПОЛУЧИТЬ КАТАЛОГ')">ПОЛУЧИТЬ ВЕСЬ КАТАЛОГ</div>
        </div>
</section>
    
<section class="we_produce">
        <div class="we_produce_content">
            <h2 class="we_produce_content_title">КСТАТИ, МЫ ЕЩЕ ПРОИЗВОДИМ</h2>
            <h3 class="we_produce_content_mini_title">НИЖЕ ВЫ УВИДИТЕ МНОГО ПРИМЕРОВ И ОТЗЫВОВ О НАВЕСАХ</h3>
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
                        <div class="item_wpci_photo_text">Оранжереи</div>
                    </div>
                    <div class="item_wpci_prices_btn">
                        <div class="item_wpci_prices">От 140 900 ₽</div>
                        <div class="item_wpci_btn" onclick="OpenModal('modal_form', 'Узнать стоимость теплиц', 'ОСТАВИТЬ ЗАЯВКУ')">УЗНАТЬ ЦЕНУ</div>
                    </div>
                </div>
            </div>
        </div>
</section>
    
<section class="reviews">
    <?php include_once 'section-reviews.php'; ?>
    </section>
 <section class="quiz_box_block">
 <?php include_once 'quiz-block.php'; ?>
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
</script>

</body>
</html>