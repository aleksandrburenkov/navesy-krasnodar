<?php

    require_once "keyses.php";
    $kkf = array_slice($keyses, 0, 80);
   
    
    $result = '';
    $gg = 0;
    foreach($kkf as $k){
        if($k['category_three'] == $_POST['category']){
        $result .= '
        
                <div class="item_portfolio" c_i="'.$gg.'">
                    <div class="gallery_box_item_portfolio">
                        <div class="box_mini_photo_gallery_item_portfolio">';
                            $gallery_item = explode(",", $k['gallery']);
                            $iii = 0; 
                            foreach($gallery_item as $gi){
                                $result .= '<div class="mini_photo_gallery_item_portfolio" mini_p="'.$iii.'" style="background: url(/img/case_photo/'.$gi.'.jpg)no-repeat center;background-size: cover;" onclick="ActiveGallery(\''.$gg.'\', \''.$gi.'\', \''.$iii.'\')"></div>';
                                $iii++;
                            }
            $result .= '</div>
                        <div class="big_photo_gallery_item_portfolio" style="background: url(/img/case_photo/'.$gallery_item[0].'.jpg)no-repeat center;background-size: cover;" id="big_photo_gallery_item_portfolio'.$gg.'">
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
                            <div class="left_arrow" onclick="left_arrow('.$gg.')"></div>
                            <div class="rigth_arrow" onclick="rigth_arrow('.$gg.')"></div>
                        </div>
                    </div>
                    <div class="info_box_item_portfolio">
                        <div class="title_keys_bbbllsk">'.$k['name_keys'].'</div>
                        <div class="mini_params_box_item_portfolio">
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Ширина</div>
                                <div class="vall_param_info_box_item_portfolio">'.$k['width'].' м</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Длина</div>
                                <div class="vall_param_info_box_item_portfolio">'.$k['long'].' м</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Столбы</div>
                                <div class="vall_param_info_box_item_portfolio">'.$k['stolbs'].'</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Фермы</div>
                                <div class="vall_param_info_box_item_portfolio">'.$k['ferms'].'</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Балки</div>
                                <div class="vall_param_info_box_item_portfolio">'.$k['balks'].'</div>
                            </div>
                            <div class="item_mini_params_box_item_portfolio">
                                <div class="title_param_info_box_item_portfolio">Обрешетки</div>
                                <div class="vall_param_info_box_item_portfolio">'.$k['obreshetks'].'</div>
                            </div>
                        </div>
                        <div class="box_param_info_box_item_portfolio">
                            <div class="title_param_info_box_item_portfolio">Покрытие</div>
                            <div class="vall_param_info_box_item_portfolio">'.$k['pokrytie'].'</div>
                        </div>
                        <div class="box_param_info_box_item_portfolio">
                            <div class="title_param_info_box_item_portfolio">Монтаж</div>
                            <div class="vall_param_info_box_item_portfolio">'.$k['montaj'].'</div>
                        </div>
                        <div class="three_box_info_box_item_portfolio">
                            <div class="three_info_box_item_portfolio">
                                <div class="icon_three_info_box_item_portfolio"></div>
                                <div class="titl_and_text_three_info_box_item_portfolio">
                                    <div class="title_three_info_box_item_portfolio">Материалы:</div>
                                    <div class="text_three_info_box_item_portfolio">'.$k['materials'].' ₽</div>
                                </div>
                            </div>
                            <div class="three_info_box_item_portfolio">
                                <div class="icon_three_info_box_item_portfolio portf2"></div>
                                <div class="titl_and_text_three_info_box_item_portfolio">
                                    <div class="title_three_info_box_item_portfolio">Работа:</div>
                                    <div class="text_three_info_box_item_portfolio">'.$k['work'].' ₽</div>
                                </div>
                            </div>
                            <div class="three_info_box_item_portfolio">
                                <div class="icon_three_info_box_item_portfolio portf3"></div>
                                <div class="titl_and_text_three_info_box_item_portfolio">
                                    <div class="title_three_info_box_item_portfolio">Итого:</div>
                                    <div class="text_three_info_box_item_portfolio">'.$k['price'].' ₽</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_info_box_item_portfolio_box blick_btn" onclick="OpenModal(\'modal_form\', \'Хочу заказать похожий навес\', \'ОСТАВИТЬ ЗАЯВКУ\')">
                            <span></span>
                            <div class="btn_info_box_item_portfolio_icon"></div>
                            <div class="btn_info_box_item_portfolio">РАССЧИТАТЬ ТАКОЙ ЖЕ</div>
                        </div>
                    </div>
                </div>
    ';
        $gg++;
    }
    
    }
    echo json_encode($result);


?>