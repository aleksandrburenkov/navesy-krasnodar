
<?php 
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    setcookie("URL_user", $url);
?>

<html>
<head>

    <title>Расчет стоимости навеса</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Изготовление, отделка и монтаж лестниц всех видов по всей области с 2010 года." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" >
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="stylesheet" type="text/css" href="css/quiz_style.css"/>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

    <script src="js/jquery.min.js"></script>
    <script src="js/onclicks_quiz.js"></script>
    <?php  include_once "metrika.php";?>	  
</head>

<body>
    <div class="background_quiz">
        <div class="background_shape_background_quiz">
            <div class="header_preview_box">
                <div class="logo_and_text_header_preview_box">
                    <div class="logo_header_preview_box"></div>
                    <div class="text_header_preview_box display_onli_desctop">Изготовление надежных навесов<br>и металлоконструкций от производителя<br>В КРАСНОДАРЕ И ОБЛАСТИ с 2010 г.</div>
                </div>
                <div class="phone_and_chart_header_preview_box">
                    <a href="tel:+73439897903"><div class="phone_header_preview_box">+7 (391) 989-79-03</div></a>
                    <div class="chart_header_preview_box display_onli_desctop">
                        <div class="icon_chart_header_preview_box"></div>
                        <div class="text_chart_header_preview_box">Принимаем заявки:</div>
                        <div class="vall_chart_header_preview_box">Пн-Вс 07:00-23:00</div>
                    </div>
                </div>
            </div>
            <div class="content_preview_box ">
                <div class="align_content_preview_box">
                    <div class="left_info_content_preview_box">
                        <div class="title_left_info_content_preview_box">
						Изготовим Навес Под Ключ с гарантией до 15 лет<br>
						<font color="yellow">Пройдите тест из 7 вопросов и узнайте лучшее предложение цена&#8209;качесто всего за 2 минуты</font></div>
                        <div class="mini_title_left_info_content_preview_box">
                            <div class="icon_gift_mini_title_left_info_content_preview_box"></div>
                            <div class="text_mini_title_left_info_content_preview_box">ЗА ПРОХОЖДЕНИЕ ТЕСТА ДАРИМ ПОДАРОК НА ВЫБОР</div>
                        </div>
                        <div class="btn_left_info_content_preview_box" onclick="StartQuiz()"><span>ПРОЙТИ ТЕСТ. ЖМИ</span></div>
                    </div>
                    <div class="right_info_content_preview_box display_onli_desctop">
                        <div class="photo_right_info_content_preview_box"></div>
                        <div class="comment_right_info_content_preview_box">
                            <div class="comment_right_info_content_preview_box_d3"></div>Добрый день! Как ведущий специалист компании сегодня я помогу вам сделать правильный выбор</div>
                    </div>
                </div>
            </div>
            <form action="" id="quiz_form_q">
                        <input type="text" class="input_antibot" name="antb">
            <div class="content_quiz_box display_none">
                <div class="align_content_quiz_box">
                    <div class="quiz_and_manager_content_quiz_box">
                        <div class="quiz_content_quiz_box">
                            <div class="titles_box_title_quiz_content_quiz_box">
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_1">Для чего вам нужен навес?</div>
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_2">Какое покрытие вы рассматриваете для навеса?</div>
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_3">Какую бы вы хотели форму навеса?</div>
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_4">Размеры будущего навеса</div>
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_5">Когда бы Вы хотели видеть готовый навес или козырек?</div>
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_6">Какой бы Вы хотели подарок?</div>
                                <div class="title_quiz_content_quiz_box title_quiz_content_quiz_box_slide_7">Итак, Вы почти у цели!  Оставьте свой номер телефона, нажмите кнопку &#171;Узнать стоимость&#187; и ожидайте. Мы с радостью сделаем расчеты и зафиксируем для Вас подарок</div>
                            </div>
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_1">
                                <label for="rd1">
                                    <div class="item_quiz_content_quiz_box rd1 item_quiz_content_quiz_box_active" onclick="AddActiveClass('rd1', 'items_quiz_content_quiz_box_slide_1')">
                                        <div class="photo_item_quiz_content_quiz_box v1_dlyz_avto">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd1" value="Навес для авто" name="example"  checked/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Навес для авто</div>
                                    </div>
                                </label>
                                <label for="rd2">
                                    <div class="item_quiz_content_quiz_box rd2" onclick="AddActiveClass('rd2', 'items_quiz_content_quiz_box_slide_1')">
                                        <div class="photo_item_quiz_content_quiz_box v1_k_domu">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd2" value="Навес к дому" name="example"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Навес к дому</div>
                                    </div>
                                </label>
                                <label for="rd3">
                                    <div class="item_quiz_content_quiz_box rd3" onclick="AddActiveClass('rd3', 'items_quiz_content_quiz_box_slide_1')">
                                        <div class="photo_item_quiz_content_quiz_box v1_bassein">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd3" value="Навес для бассеина" name="example"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Навес для бассеина</div>
                                    </div>
                                </label>
                                <label for="rd4">
                                    <div class="item_quiz_content_quiz_box rd4" onclick="AddActiveClass('rd4', 'items_quiz_content_quiz_box_slide_1')">
                                        <div class="photo_item_quiz_content_quiz_box v1_kozir">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd4" value="Козырек/ входная группа" name="example"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Козырек/ входная группа</div>
                                    </div>
                                </label>
                                <label for="rd5">
                                    <div class="item_quiz_content_quiz_box rd5" onclick="AddActiveClass('rd5', 'items_quiz_content_quiz_box_slide_1')">
                                        <div class="photo_item_quiz_content_quiz_box v1_besedka">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd5" value="Беседка" name="example"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Беседка</div>
                                    </div>
                                </label>
                                <label for="rd6">
                                    <div class="item_quiz_content_quiz_box rd6" onclick="AddActiveClass('rd6', 'items_quiz_content_quiz_box_slide_1')">
                                        <div class="photo_item_quiz_content_quiz_box v1_dlya_mangala">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd6" value="Другое" name="example"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Другое</div>
                                    </div>
                                </label>
                            </div>
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_2">
                                    <div class="item_quiz_content_quiz_box mini_item_ttr rd7 item_quiz_content_quiz_box_active"  onclick="AddActiveCheck('rd7', 'items_quiz_content_quiz_box_slide_2')">
                                        <div class="photo_item_quiz_content_quiz_box v2_policarbonat">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd7" value="Поликарбонат" name="material_stages[]"  checked/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Поликарбонат</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box mini_item_ttr rd8"  onclick="AddActiveCheck('rd8', 'items_quiz_content_quiz_box_slide_2')">
                                        <div class="photo_item_quiz_content_quiz_box v2_policarbonat_m">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd8" value="Монолитный поликарбонат" name="material_stages[]"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Монолитный поликарбонат</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box mini_item_ttr rd9"  onclick="AddActiveCheck('rd9', 'items_quiz_content_quiz_box_slide_2')">
                                        <div class="photo_item_quiz_content_quiz_box v2_proflist">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd9" value="Профлист" name="material_stages[]"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Профлист</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box mini_item_ttr rd10"  onclick="AddActiveCheck('rd10', 'items_quiz_content_quiz_box_slide_2')">
                                        <div class="photo_item_quiz_content_quiz_box v2_metallocherepica">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd10" value="Металлочерепица" name="material_stages[]"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Металлочерепица</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box mini_item_ttr rd11"  onclick="AddActiveCheck('rd11', 'items_quiz_content_quiz_box_slide_2')">
                                        <div class="photo_item_quiz_content_quiz_box v2_myag_crovl">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd11" value="Мягкая кровля" name="material_stages[]"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Мягкая кровля</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box mini_item_ttr rd12"  onclick="AddActiveCheck('rd12', 'items_quiz_content_quiz_box_slide_2')">
                                        <div class="photo_item_quiz_content_quiz_box v2_drugoe">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd12" value="Другое" name="material_stages[]"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Другое</div>
                                    </div>
                            </div>
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_3">
                                <label for="rd13">
                                    <div class="item_quiz_content_quiz_box rd13 item_quiz_content_quiz_box_active" onclick="AddActiveClass('rd13', 'items_quiz_content_quiz_box_slide_3')">
                                        <div class="photo_item_quiz_content_quiz_box a_odnos">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd13" value="Односкатный арочный" name="shape_lest"  checked/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Односкатный арочный</div>
                                    </div>
                                </label>
                                <label for="rd14">
                                    <div class="item_quiz_content_quiz_box rd14" onclick="AddActiveClass('rd14', 'items_quiz_content_quiz_box_slide_3')">
                                        <div class="photo_item_quiz_content_quiz_box p_odnos">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd14" value="Односкатный прямой" name="shape_lest"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Односкатный прямой</div>
                                    </div>
                                </label>
                                <label for="rd15">
                                    <div class="item_quiz_content_quiz_box rd15" onclick="AddActiveClass('rd15', 'items_quiz_content_quiz_box_slide_3')">
                                        <div class="photo_item_quiz_content_quiz_box a_dvus">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd15" value="Двускатный арочный" name="shape_lest"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Двускатный арочный</div>
                                    </div>
                                </label>
                                <label for="rd16">
                                    <div class="item_quiz_content_quiz_box rd16" onclick="AddActiveClass('rd16', 'items_quiz_content_quiz_box_slide_3')">
                                        <div class="photo_item_quiz_content_quiz_box p_dvus">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd16" value="Двускатный прямой" name="shape_lest"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Двускатный прямой</div>
                                    </div>
                                </label>
                                <label for="rd17">
                                    <div class="item_quiz_content_quiz_box rd17" onclick="AddActiveClass('rd17', 'items_quiz_content_quiz_box_slide_3')">
                                        <div class="photo_item_quiz_content_quiz_box drugaya_form">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd17" value="Сложная/ другая форма" name="shape_lest"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Сложная/ другая форма</div>
                                    </div>
                                </label>
                                <label for="rd18">
                                    <div class="item_quiz_content_quiz_box rd18" onclick="AddActiveClass('rd18', 'items_quiz_content_quiz_box_slide_3')">
                                        <div class="photo_item_quiz_content_quiz_box po_eskizu">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd18" value="По вашему эскизу" name="shape_lest"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">По вашему эскизу</div>
                                    </div>
                                </label>
                            </div>
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_4">
                                <div class="input_text_box_content_quiz_box">
                                    <div class="text_box_content_quiz_box">Длина будущего навеса:</div>
                                    <div class="input_mein_text_content_quiz_box">
                                        <input type="text" placeholder="Например 5 м" name="long_wall" class="input_box_content_quiz_box">
                                        <div class="mini_title__content_quiz_box_bb">Напишите в свободной форме если знаете</div>
                                    </div>
                                </div>
                                <div class="input_text_box_content_quiz_box">
                                    <div class="text_box_content_quiz_box">Ширина будущего навеса:</div>
                                    <div class="input_mein_text_content_quiz_box">
                                        <input type="text" placeholder="Например 3,5 м" name="width_wall" class="input_box_content_quiz_box">
                                        <div class="mini_title__content_quiz_box_bb">Напишите в свободной форме если знаете</div>
                                    </div>
                                </div>
                                <div class="input_text_box_content_quiz_box">
                                    <div class="text_box_content_quiz_box">Предполагаемая высота:</div>
                                    <div class="input_mein_text_content_quiz_box">
                                        <input type="text" placeholder="Например 2 м" name="height_wall" class="input_box_content_quiz_box">
                                        <div class="mini_title__content_quiz_box_bb">Необязательное поле</div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_5">
                                    <div class="item_quiz_content_quiz_box rd24 item_quiz_content_quiz_box_active" onclick="AddActiveCheck('rd24', 'items_quiz_content_quiz_box_slide_9')">
                                        <div class="photo_item_quiz_content_quiz_box kalendar">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd24"  value="Через 14-28 дней" name="when[]" checked/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Через 7-14 дней</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box rd25" onclick="AddActiveCheck('rd25', 'items_quiz_content_quiz_box_slide_9')">
                                        <div class="photo_item_quiz_content_quiz_box kalendar">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd25"  value="Через 1-2 месяца" name="when[]"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Через 1-2 месяца</div>
                                    </div>
                                    <div class="item_quiz_content_quiz_box rd26" onclick="AddActiveCheck('rd26', 'items_quiz_content_quiz_box_slide_9')">
                                        <div class="photo_item_quiz_content_quiz_box kalendar">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="checkbox" class="option-input radio" id="rd26"  value="Больше 2х месяцев" name="when[]"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Больше 2х месяцев </div>
                                    </div>
                            </div>
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_6">
                                <label for="rd27">
                                    <div class="item_quiz_content_quiz_box item_quiz_content_quiz_box_custom rd27 item_quiz_content_quiz_box_active" onclick="AddActiveClass('rd27', 'items_quiz_content_quiz_box_slide_10')">
                                        <div class="photo_item_quiz_content_quiz_box gift_5k">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd27" name="gift" value="Скидка 5000 руб"  checked/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Скидка 3000&nbsp;руб</div>
                                    </div>
                                </label>
                                <label for="rd28">
                                    <div class="item_quiz_content_quiz_box item_quiz_content_quiz_box_custom rd28" onclick="AddActiveClass('rd28', 'items_quiz_content_quiz_box_slide_10')">
                                        <div class="photo_item_quiz_content_quiz_box dostavka">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd28" value="Бесплатная доставка" name="gift"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Бесплатная доставка</div>
                                    </div>
                                </label>
                                <label for="rd29">
                                    <div class="item_quiz_content_quiz_box item_quiz_content_quiz_box_custom rd29" onclick="AddActiveClass('rd29', 'items_quiz_content_quiz_box_slide_10')">
                                        <div class="photo_item_quiz_content_quiz_box yak">
                                            <div class="check_box_item_quiz">
                                                <div class="check_item_quiz_icon">
                                                    <input type="radio" class="option-input radio" id="rd29"  value="Бутылка отличного коньяка в день подписания договора" name="gift"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title_item_quiz_content_quiz_box">Бутылка отличного коньяка в день подписания договора</div>
                                    </div>
                                </label>
                            </div>
                            <div class="items_quiz_content_quiz_box items_quiz_content_quiz_box_slide_7">
                                <div class="mini_title_and_input_items_quiz_content_quiz_box">
                                    <div class="mini_title_items_quiz_content_quiz_box">Укажите населенный пункт:</div>
                                    <input type="text" name="city" placeholder="Населенный пункт">
                                </div>
                                <div class="mini_title_and_input_items_quiz_content_quiz_box">
                                    <div class="mini_title_items_quiz_content_quiz_box">Введите номер телефона:</div>
                                    <input type="text" name="phone" placeholder="+7 (___) ___-__-__">
                                </div>
                                <div class="policy_items_quiz_content_quiz_box">Оставляя заявку вы принимаете условия политики конфиденциальности</div>
                            </div>
                            <div class="checkbar_and_btns_quiz_content_quiz_box">
                                <div class="checkbar_quiz_content_quiz_box">
                                    <div class="title_checkbar_quiz_content_quiz_box">До получения подарка:</div>
                                
                                    <div class="progress_checkbar_quiz_content_quiz_box">
                                        <div class="progres_trr">
                                            <div class="progres_trr_d3"></div>
                                            <div class="vall_progres_trr_d3">10%</div>
                                        </div>
                                        <span style="width: 10%"></span>
                                    </div>
                                </div>
                                <div class="btns_quiz_content_quiz_box">
                                    <div class="prev_btn_btns_quiz_content_quiz_box" onclick="QuizBack('0', '0')">← Назад</div>
                                    <div class="next_btn_btns_quiz_content_quiz_box" onclick="QuizGo('1', '2')"><span>ДАЛЕЕ →</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="manager_content_quiz_box display_onli_desctop">
                            <div class="photo_and_fio_manager_content_quiz_box">
                                <div class="photo_manager_manager_content_quiz_box"></div>
                                <div class="info_manager_manager_content_quiz_box">
                                    <div class="fio_manager_manager_content_quiz_box">Николай Котов</div>
                                    <div class="prof_manager_manager_content_quiz_box">Ведущий специалист</div>
                                </div>
                            </div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_1"><div class="comment_manager_manager_content_quiz_box_d3"></div>Самое главное определиться - для чего навес, какие лучшие материалы и размеры - мы вам подскажем.</div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_2"><div class="comment_manager_manager_content_quiz_box_d3"></div>Поликарбонат бывает от 4 до 16 мм, самый прочный - монолитный. Но самое крепкое покрытие - профлист или металлочерепица.</div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_3"><div class="comment_manager_manager_content_quiz_box_d3"></div>Форма навеса напрямую влияет на цену. Так, односкатные выходят несколько дешевле, чем двускатные.</div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_4"><div class="comment_manager_manager_content_quiz_box_d3"></div>Обычно чем крупнее навес, тем он дороже. Мы можем вам порекомедовать удобные размеры из нашей практики.</div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_5"><div class="comment_manager_manager_content_quiz_box_d3"></div>Срок изготовления навеса зависит от его типа и сложности.</div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_6"><div class="comment_manager_manager_content_quiz_box_d3"></div>Выбирайте что нравится, а мы будем воплащать Ваши мечты и идеи в реальность!</div>
                            <div class="comment_manager_manager_content_quiz_box cmmcqb_slide_7"><div class="comment_manager_manager_content_quiz_box_d3"></div>Итак, остался всего один шаг! Мы посчитаем стоимость и я лично отвечу на все Ваши вопросы.</div>
                        </div>
                    </div>
                    <div class="portfolio_and_advantages_content_quiz_box display_onli_desctop">
                        <div class="portfolio_content_quiz_box">
                            <div class="title_portfolio_content_quiz_box">Примеры наших работ</div>
                            <div class="items_portfolio_content_quiz_box">
                                <div class="item_items_portfolio_content_quiz_box pr_v1  item_items_portfol_1"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v2  item_items_portfol_1"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v3  item_items_portfol_2"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v4  item_items_portfol_2"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v5  item_items_portfol_3"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v8  item_items_portfol_3"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v7  item_items_portfol_4"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v6  item_items_portfol_4"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v9  item_items_portfol_5"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v10 item_items_portfol_5"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v11 item_items_portfol_6"></div>
                                <div class="item_items_portfolio_content_quiz_box pr_v12 item_items_portfol_6"></div>
                            </div>
                        </div>
                        <div class="advantages_content_quiz_box display_onli_desctop">
                            <div class="title_advantages_content_quiz_box">Почему заказчики навесов <font style="color: #ffc135">выбирают именно нас?</font></div>
                            <div class="icon_and_info_advantages_content_quiz_box aiaacq_box_slide_1">
                                <div class="icon_advantages_content_quiz_box"></div>
                                <div class="info_advantages_content_quiz_box">
                                    <div class="title_info_advantages_content_quiz_box">Собственное производство</div>
                                    <div class="text_info_advantages_content_quiz_box">Все работы делаем на собственном производстве. Это позволяет сэкономить на логистике и работе смежников и сократить время выполнения заказа.</div>
                                </div>
                            </div>
                            <div class="icon_and_info_advantages_content_quiz_box aiaacq_box_slide_2">
                                <div class="icon_advantages_content_quiz_box why_we6"></div>
                                <div class="info_advantages_content_quiz_box">
                                    <div class="title_info_advantages_content_quiz_box">Опыт более 10 лет</div>
                                    <div class="text_info_advantages_content_quiz_box">Накопленный опыт помогает при решении самых сложных задач.</div>
                                </div>
                            </div>
                            <div class="icon_and_info_advantages_content_quiz_box aiaacq_box_slide_3">
                                <div class="icon_advantages_content_quiz_box why_we4"></div>
                                <div class="info_advantages_content_quiz_box">
                                    <div class="title_info_advantages_content_quiz_box">Гарантия по договору</div>
                                    <div class="text_info_advantages_content_quiz_box">На все работы и услуги предоставляется фирменная гарантия, прописанная в договоре.</div>
                                </div>
                            </div>
                            <div class="icon_and_info_advantages_content_quiz_box aiaacq_box_slide_4">
                                <div class="icon_advantages_content_quiz_box why_we5"></div>
                                <div class="info_advantages_content_quiz_box">
                                    <div class="title_info_advantages_content_quiz_box">3D проект</div>
                                    <div class="text_info_advantages_content_quiz_box">Составляем подробный 3D проект.</div>
                                </div>
                            </div>
                            <div class="icon_and_info_advantages_content_quiz_box aiaacq_box_slide_5">
                                <div class="icon_advantages_content_quiz_box why_we6"></div>
                                <div class="info_advantages_content_quiz_box">
                                    <div class="title_info_advantages_content_quiz_box">Персональный подход</div>
                                    <div class="text_info_advantages_content_quiz_box">Полностью погружаемся в проект и выполняем его с учетом всех пожеланий заказчика.</div>
                                </div>
                            </div>
                            <div class="icon_and_info_advantages_content_quiz_box aiaacq_box_slide_6">
                                <div class="icon_advantages_content_quiz_box why_we13"></div>
                                <div class="info_advantages_content_quiz_box">
                                    <div class="title_info_advantages_content_quiz_box">Большой выбор моделей</div>
                                    <div class="text_info_advantages_content_quiz_box">Мы делаем почти все виды навесов на заказ, поэтому вы точно найдете у нас то, что ищете!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            
            
        </div>
    </div>
    <div class="bottom_mini_footer">
        <div class="content_bottom_mini_footer">
            <a href="policy.php" target="_blank">Политика конфиденциальности</a>
        </div>
    </div>
    
</body>