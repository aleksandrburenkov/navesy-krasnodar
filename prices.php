
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
    
    <title>Наши цены</title>
    
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

    <div style="padding-top: 70px;"></div>
    
    
    <section class="calculator">
        <div class="calculator_content">
            <form class="avvhh_v" id="akkfd_form">
                <input type="text" class="input_antibot" name="antb">
                <input type="hidden" name="title_form" value="Блок калькулятор">
                <h2 class="calculator_title">КАЛЬКУЛЯТОР ПРИМЕРНОЙ СТОИМОСТИ</h2>
                <div class="calculator_block">
                    <div class="calculator_block_photo" style="background: url(/img/photo/CALC.png)no-repeat center; background-size: contain;"></div>
                    <div class="calculator_block_inputs">
                        <div class="calculator_block_input_tip">
                            <div class="item_cbit_text">1. ВЫБЕРИТЕ ТИП ФЕРМ, КОТОРЫЙ ВАС ИНТЕРЕСУЕТ</div>
                            <div class="items_box_checkbox">
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_1" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="1" class="invisible" checked id="item_btic_1">
                                        <div class="checkbox_btic">1</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_2" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="2" class="invisible" id="item_btic_2">
                                        <div class="checkbox_btic">2</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_3" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="3" class="invisible" id="item_btic_3">
                                        <div class="checkbox_btic">3</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_4" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="4" class="invisible" id="item_btic_4">
                                        <div class="checkbox_btic">4</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_5" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="5" class="invisible" id="item_btic_5">
                                        <div class="checkbox_btic">5</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_6" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="6" class="invisible" id="item_btic_6">
                                        <div class="checkbox_btic">6</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_7" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="7" class="invisible" id="item_btic_7">
                                        <div class="checkbox_btic">7</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_8" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="8" class="invisible" id="item_btic_8">
                                        <div class="checkbox_btic">8</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_9" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="9" class="invisible" id="item_btic_9">
                                        <div class="checkbox_btic">9</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_10" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="10" class="invisible" id="item_btic_10">
                                        <div class="checkbox_btic">10</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_11" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="11" class="invisible" id="item_btic_11">
                                        <div class="checkbox_btic">11</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_12" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="12" class="invisible" id="item_btic_12">
                                        <div class="checkbox_btic">12</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_13" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="13" class="invisible" id="item_btic_13">
                                        <div class="checkbox_btic">13</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_14" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="14" class="invisible" id="item_btic_14">
                                        <div class="checkbox_btic">14</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_15" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="15" class="invisible" id="item_btic_15">
                                        <div class="checkbox_btic">15</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_16" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="16" class="invisible" id="item_btic_16">
                                        <div class="checkbox_btic">16</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_17" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="17" class="invisible" id="item_btic_17">
                                        <div class="checkbox_btic">17</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_18" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="18" class="invisible" id="item_btic_18">
                                        <div class="checkbox_btic">18</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_19" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="19" class="invisible" id="item_btic_19">
                                        <div class="checkbox_btic">19</div>
                                    </label>
                                </div>
                                <div class="item_box_time_invest_checkbox">
                                    <label for="item_btic_20" class="lab_time_btic">
                                        <input type="radio" name="ferm_type" value="20" class="invisible" id="item_btic_20">
                                        <div class="checkbox_btic">20</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="calculator_block_input_material">
                            <div class="item_cbit_text">2. ВЫБЕРИТЕ МАТЕРИАЛ КРОВЛИ</div>
                            <select class="item_cbit_select" name="material">
                                <option value="Поликарбонат" selected>Поликарбонат</option>
                                <option value="Монолитный поликарбонат">Монолитный поликарбонат</option>
                                <option value="Металлопрофиль">Металлопрофиль</option>
                                <option value="Металлочерепица">Металлочерепица</option>
                                <option value="Мягкая кровля">Мягкая кровля</option>
                            </select>
                        </div>
                        <div class="calculator_block_input_size">
                            <div class="cbit_title">3. КАКИЕ БУДУТ РАЗМЕРЫ У ВАШЕГО НАВЕСА?</div>
                            <div class="cbit_size">
                                <div class="item_cbit_length">
                                    <div class="item_cbit_texts">Длина</div>
                                    <input type="text" placeholder="Метров" name="long" id="long_gg" value="2" class="item_cbit_inputs" >
                                </div>
                                <div class="item_cbit_width">
                                    <div class="item_cbit_texts">Ширина</div>
                                    <input type="text" placeholder="Метров" name="width" id="width_gg" value="2" class="item_cbit_inputs">
                                </div>
                                <div class="item_cbit_height">
                                    <div class="item_cbit_texts">Высота</div>
                                    <input type="text" placeholder="Метров" name="height" id="height_gg" value="2" class="item_cbit_inputs">
                                </div>
                            </div>
                        </div>
                        <div class="calculator_block_input_btn" onclick="CalcGG()" >РАСЧИТАТЬ СТОИМОСТЬ</div>
                    </div>
                </div>
                <div class="result_calc_gg">
                    <div class="title_result_calc_gg">Предварительный расчет:</div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Опорные столбы</div>
                        <div class="valm_result_calc_gg" id="ggre_1">6 шт.</div>
                    </div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Силовые боковые балки</div>
                        <div class="valm_result_calc_gg" id="ggre_2">2 шт.</div>
                    </div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Стальные фермы</div>
                        <div class="valm_result_calc_gg" id="ggre_3">4 шт.</div>
                    </div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Обрешетка</div>
                        <div class="valm_result_calc_gg" id="ggre_4">5 шт.</div>
                    </div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Сотовый поликарбонат</div>
                        <div class="valm_result_calc_gg" id="ggre_5">1 м<sup>2</sup></div>
                    </div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Соединительные профили</div>
                        <div class="valm_result_calc_gg" id="ggre_6">2 к-т</div>
                    </div>
                    <div class="box_result_calc_gg">
                        <div class="mtit_result_calc_gg">Окрашивание</div>
                        <div class="valm_result_calc_gg" id="ggre_7">1 м<sup>2</sup></div>
                    </div>
                    <div class="title_result_calc_gg" id="lkkf_1">Итого:</div>
                    <div class="big_title_result_calc_gg" id="lkkf_2">Спец. предложение:</div>
                
                    <input type="text" class="input_result_calc" name="phone" placeholder="Номер телефона">
                    <div class="btn_send_calc_res" onclick="SendForm('akkfd_form')">УЗНАТЬ ПОДРОБНЕЕ</div>
                </div>
            </form>
        </div>
    </section>

    <section class="prices_list">
        <div class="content_prices_list">
            <h2 class="title_prices_list">ЦЕНЫ НА НАВЕСЫ:</h2>
            <div class="box_prices_table">
                <div class="obol_prices_table">
                    <div class="prices_table">
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">По типу материала</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        <?php foreach($table_prices['type_material'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">По месту назначения</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        <?php foreach($table_prices['destination'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">Отдельные группы</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        
                        <?php foreach($table_prices['group'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">Козырьки для дверей</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        
                        <?php foreach($table_prices['visors_doors'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="obol_prices_table">
                    <div class="prices_table">
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">По форме</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        
                        <?php foreach($table_prices['form'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                        
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">Навесы для авто</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        
                        <?php foreach($table_prices['carports'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                        
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">Для мангала и барбекю</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        
                        
                        <?php foreach($table_prices['hrill'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                        <div class="title_prices_table">
                            <div class="key_title_prices_table">Беседки из поликарбоната</div>
                            <div class="obz_title_prices_table">Ед.</div>
                            <div class="vall_title_prices_table">Цена</div>
                        </div>
                        
                        <?php foreach($table_prices['polycarbonate'] as $itemTable):?>
                        <div class="item_prices_table">
                            <div class="key_item_prices_table"><?php echo $itemTable['title'];?></div>
                            <div class="obz_item_prices_table"><?php echo $itemTable['unit'];?></div>
                            <div class="vall_item_prices_table"><?php echo $itemTable['price'];?></div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="smeta">
        <div class="smeta_content">
            <h2 class="smeta_content_title">ПРИМЕР СМЕТЫ</h2>
            <div class="smeta_content_mini_title">Навес для авто 4х6</div>
            <div class="smeta_content_items">
                <div class="smeta_content_table">
            <table>
                <tr class="smeta_tr">
                    <th>Наименование<br>работ/материалов</th>
                    <th>Ед. изм.</th>
                    <th>Кол-во</th>
                    <th>Стоимость</th>
                    <th>Итого цена</th>
                </tr>
                <tr>
                    <th>Сварочные работы</th>
                    <th style="text-align:center">м2</th>
                    <th style="text-align:center">24.00</th>
                    <th style="text-align:center">540</th>
                    <th style="text-align:right">12 960</th>
                </tr>
                <tr>
                    <th>Монтажные работы</th>
                    <th style="text-align:center">м2</th>
                    <th style="text-align:center">24.00</th>
                    <th style="text-align:center">445</th>
                    <th style="text-align:right">10 680</th>
                </tr>
                <tr>
                    <th>Лако-красочное покрытие</th>
                    <th style="text-align:center">м2</th>
                    <th style="text-align:center">26.00</th>
                    <th style="text-align:center">300</th>
                    <th style="text-align:right">7 800</th>
                </tr>
                <tr>
                    <th>Электроды</th>
                    <th style="text-align:center">уп</th>
                    <th style="text-align:center">3.00</th>
                    <th style="text-align:center">300</th>
                    <th style="text-align:right">900</th>
                </tr>
                <tr>
                    <th>Метизы</th>
                    <th style="text-align:center">уп</th>
                    <th style="text-align:center">1.00</th>
                    <th style="text-align:center">1000</th>
                    <th style="text-align:right">1000</th>
                </tr>
                <tr>
                    <th>Соеденительные профили</th>
                    <th style="text-align:center">уп</th>
                    <th style="text-align:center">1.00</th>
                    <th style="text-align:center">690</th>
                    <th style="text-align:right">690</th>
                </tr>
                <tr>
                    <th>Термошайбы</th>
                    <th style="text-align:center">уп</th>
                    <th style="text-align:center">2.00</th>
                    <th style="text-align:center">570</th>
                    <th style="text-align:right">1140</th>
                </tr>
                <tr>
                    <th>Доставка</th>
                    <th style="text-align:center">рейс</th>
                    <th style="text-align:center">1.00</th>
                    <th style="text-align:center">2000</th>
                    <th style="text-align:right">2000</th>
                </tr>
                <tr>
                    <th>Фермы труба 40х40х2</th>
                    <th style="text-align:center">м/п</th>
                    <th style="text-align:center">48.00</th>
                    <th style="text-align:center">198</th>
                    <th style="text-align:right">9504</th>
                </tr>
                <tr>
                    <th>Столбы труба 40х80х5</th>
                    <th style="text-align:center">м/п</th>
                    <th style="text-align:center">12.00</th>
                    <th style="text-align:center">512</th>
                    <th style="text-align:right">6144</th>
                </tr>
                <tr>
                    <th>Обрешетка труба 40х20х2</th>
                    <th style="text-align:center">м/п</th>
                    <th style="text-align:center">180.00</th>
                    <th style="text-align:center">127</th>
                    <th style="text-align:right">22860</th>
                </tr>
                <tr>
                    <th>Поликарбонат 8 мм</th>
                    <th style="text-align:center">м2</th>
                    <th style="text-align:center">24.00</th>
                    <th style="text-align:center">505</th>
                    <th style="text-align:right">12120</th>
                </tr>
                <tr class="smeta_rt">
                    <th>ИТОГ:</th>
                    <th colspan="4" style="text-align:right"><b>87 798 ₽</b></th>
                </tr>
            </table>
                </div>
                <div class="smeta_content_right">
                    <div class="smeta_content_right_photo" style="background:url(/img/photo_target/smeta.jpg)no-repeat center; background-size:cover"></div>
                    <div class="smeta_content_right_btn" onclick="OpenModal('modal_form', 'Узнать подробнее о составлении сметы', 'ОСТАВИТЬ ЗАЯВКУ')">ПОДРОБНЕЕ</div>
                    <div class="smeta_content_right_btn" onclick="OpenModal('modal_form', 'Оставить заявку на расчет моих размеров', 'ОСТАВИТЬ ЗАЯВКУ')">РАСЧИТАТЬ МОИ РАЗМЕРЫ</div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="examples" id="prices">
        <div class="examples_content">
            <h2 id="policarp" class="examples_content_title">ПОСМОТРИТЕ НА ПРИМЕРЫ СТОИМОСТИ ТИПОВЫХ НАВЕСОВ</h2>
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
            <div id="metal" class="examples_content_title">НАВECЫ ИЗ МЕТАЛЛОПРОФИЛЯ</div>
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
            <div class="examples_content_btn blick_btn" onclick="OpenModal('modal_form', 'Получить расчет и консультацию бесплатно', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ РАСЧЕТ<span class="btn_icon"></span>И КОНСУЛЬТАЦИЮ БЕСПЛАТНО</div>
        </div>
    </section>
    
    <section class="quiz_box_block">
    <?php include_once 'quiz-block.php'; ?>
    </section>
    <section class="covering">
        <div class="covering_content">
            <h2 class="covering_title">У НАС ТАК ЖЕ ЧАСТО ЗАКАЗЫВАЮТ</h2>
            <div class="covering_items">
                <div class="covering_item">
                    <div class="covering_item_title">БОКОВАЯ ОБШИВКА</div>
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_bok.jpg)no-repeat center; background-size:cover"></div>
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
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_kov.jpg)no-repeat center; background-size:cover"></div>
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
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_but.jpg)no-repeat center; background-size:cover"></div>
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
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_vint.jpg)no-repeat center; background-size:cover"></div>
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
                    <div class="covering_item_photo" style="background:url(/img/photo_target/dop_bet.jpg)no-repeat center; background-size:cover"></div>
                    <div class="covering_item_box_items">
                        <div class="covering_item_in_box_items">⭐️ М 200, М 250, М 300</div>
                        <div class="covering_item_in_box_items">⭐️ Прочность от 196 кг/см2</div>
                        <div class="covering_item_in_box_items">⭐️ Срок службы от 50 лет</div>
                    </div>
                    <div class="covering_item_prices">От: 3 500 ₽/м3</div>
                    <div class="covering_item_btn" onclick="OpenModal('modal_form', 'Заявка на получение каталога работ', 'ОСТАВИТЬ ЗАЯВКУ')">ПОЛУЧИТЬ КАТАЛОГ</div>
                </div>
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
	

<section class="action">
    <?php include_once 'section-action.php'; ?>
    </section>

    
   
    <section class="reviews">
    <?php include_once 'section-reviews.php'; ?>
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