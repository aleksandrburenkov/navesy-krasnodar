<div class="content_portfolio">
            <h2 class="title_portfolio">Посмотрите на навесы, которые мы уже установили в <span style="color: red">КРАСНОДАРЕ</span>, АДЫГЕЙСКЕ, <span style="color: red">ЭНЕМЕ</span>, ЯБЛОНОВСКОМ, <span style="color: red">ст. НОВОТИТАРОВСКОЙ</span>, ст. ВАСЮРИНСКОЙ, <span style="color: red">ст. СЕВЕРСКОЙ</span>, ст. ЕЛИЗАВЕТИНСКОЙ, <span style="color: red">ПРИКУБАНСКОМ ОКРУГЕ</span>, пос. ЮЖНОМ, <span style="color: red">хут. ЛЕНИНА</span>, ГОРЯЧЕМ КЛЮЧЕ, <span style="color: red">ст. НОВОМЫШАТОВСКОЙ и много где ещё:</span>
			<br><br>НАЖМИТЕ НА КНОПКУ И<span style="color: blue"> ВЫБЕРИТЕ ТИП НАВЕСОВ:</span></h2>
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
                        <div class="btn_info_box_item_portfolio_box blick_btn" onclick="OpenModal('modal_form', 'Хочу заказать похожий навес', 'ОСТАВИТЬ ЗАЯВКУ')">
                            <span></span>
                            <div class="btn_info_box_item_portfolio_icon"></div>
                            <div class="btn_info_box_item_portfolio">РАССЧИТАТЬ ПО МОИМ РАЗМЕРАМ</div>
                        </div>
                    </div>
                </div>
                <?php $gg++;?>
                <?php endforeach;?>
               
            </div>
			<!----КНОПКА 8 ПРИМЕРОВ---->
            <!---div class="btn_display_block_item_portfolio blick_btn" id="btn_drop_keyses" onclick="OpenAllPortfolio(<?php echo $gg;?>)"><span></span>ОТКРЫТЬ ЕЩЕ 8 ПРИМЕРОВ  РАБОТ</div--->
            
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