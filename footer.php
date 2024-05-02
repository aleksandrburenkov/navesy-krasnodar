
    <footer class="footer">
    <div class="footer_body">
        <div class="content_footer">
            <div class="logo_a_btns_footer">
                <div class="logo_footer" style="background:url(/img/logo.png)no-repeat center; background-size:contain"></div>
                <div class="btn_footer blick_btn" style="background: url(/img/metr_img.png)no-repeat left;background-position: 12px;background-size: auto 54%;background-color: #ffd002 ;" onclick="OpenModal('modal_form', 'Оставить заявку на приезд замерщика', 'ВЫЗВАТЬ ЗАМЕРЩИКА')"><span></span>ВЫЗВАТЬ ЗАМЕРЩИКА</div>
                <div class="btn_footer blick_btn" style="background: url(/img/phone_img.png)no-repeat left;background-position: 15px;background-size: auto 47%;background-color: #ffd002 ;"onclick="OpenModal('modal_form', 'Заказать обратный звонок', 'ОСТАВИТЬ ЗАЯВКУ')"><span></span>ЗАКАЗАТЬ ЗВОНОК</div>
            </div>
            <ul class="items_menu_footer">
      
				 <div style="clear: both;"></div>
                 <li><a href="/" class="item_footer">как сделать навес</a>  </li>
                 <li> <a href="/" class="item_footer">крыльцо для частного дома с навесом</a>  </li>
                 <li><a href="/" class="item_footer">крыльцо с навесом</a>  </li>
                 <li><a href="/" class="item_footer">крыльцо с навесом для частного</a>   </li>
                 <li><a href="/" class="item_footer">купить навес</a>  </li>
                 <li> <a href="/" class="item_footer">купить навес красноярск</a>  </li>
                 <li><a href="/" class="item_footer">металлический навес</a>   </li>
                 <li> <a href="/" class="item_footer">навес</a>   </li>
                 <li> <a href="/" class="item_footer">навес для бассейна</a>   </li>
                 <li> <a href="/" class="item_footer">навес для машины</a>  </li>
                 <li> <a href="/" class="item_footer">навес из поликарбоната</a>   </li>
                 <li> <a href="/" class="item_footer">навес из профильной трубы</a>   </li>
                 <li> <a href="/" class="item_footer">навес к дому</a>   </li>
                 <li> <a href="/" class="item_footer">навес беседка</a>   </li>
                 <li> <a href="/" class="item_footer">навес над крыльцом</a>   </li>
                 <li> <a href="/" class="item_footer">навесы в красноярске</a>   </li>
                 <li> <a href="/" class="item_footer">навесы для автомобилей</a>   </li>
                 <li> <a href="/" class="item_footer">навесы для дачи</a>   </li>
                 <li> <a href="/" class="item_footer">навесы фото</a>   </li>
                 <li> <a href="/" class="item_footer">односкатный навес</a>   </li>
                 <li> <a href="/" class="item_footer">профильный навес</a>   </li>
                 <li> <a href="/" class="item_footer">теневой навес</a>   </li>
                 <div style="clear: both;"></div>
                 <li><a href="catalog.php<?php echo $utm ?>" class="item_footer">Каталог</a></li>
                 <li><a href="prices.php<?php echo $utm ?>"  class="item_footer">Наши цены</a></li>
                 <li><a href="portfolio.php<?php echo $utm ?>"  class="item_footer">Наши работы</a></li>
                 <li><a href="reviews_page.php<?php echo $utm ?>"  class="item_footer">Отзывы</a></li>
                 <li> <a href="contacts.php<?php echo $utm ?>"  class="item_footer">Контакты</a></li>
                 </ul>
                
                
                
                
               
               
                
              
                
               
                
           
        </div>             
    </div>
    <div class="bottom_mini_footer">
        <div class="content_bottom_mini_footer">
            Внимание! Данный сайт носит информационный характер и ни при каких условиях не является публичной офертой, которая определяется положениями статьи 437 (2) гражданского кодекса рф. для получения подробной информации о наличии и стоимости указанных товаров и (или) услуг, пожалуйста, обращайтесь к нашим менеджерам.<br>
			<br>© ВСЕ РАЗДЕЛЫ САЙТА НОТАРИАЛЬНО ЗАВЕРЕНЫ
			<br>Копирование любой части сайта без письменного согласия автора преследуется по закону.
			<br>© Copyright 2024. Все права защищены.<br>
			<a href="policy.php<?php echo $utm ?>" style="color: white">Политика конфиденциальности</a>
        	<br>ИНН 230809904300 , ОГРН 304230819800268
		</div>
    </div>
    
    </footer>



    <script>
        
        
        $(document).ready(function(){
            $("body").on('click', '[href*="#"]', function(){
               
                if (screen.width <= '670') {
                    $('.close_mobile_menu').css("display", "none");
                    $('.burger_mobile_menu').css("display", "block");
                    $('.mobile_menu_block').css("display", "none");
                    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 71 }, 250);
                    e.preventDefault();
                }else{
                    
                    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 70 }, 250);
                    e.preventDefault();
                }
                
            });
        });
     
        
        var scrolled;
        window.onscroll = function() {
                scrolled = window.pageYOffset || document.documentElement.scrollTop;
                if(scrolled >200){
                    $(".header").addClass('hf_active')
                }
                if(200 > scrolled){
                    $(".header").removeClass('hf_active')         
            }
        }
    
        function ActiveGallery(number_block, val_photo){
            
            $("#big_photo_gallery_item_portfolio"+number_block).attr("style", "background: url(/img/case_photo/"+val_photo+".jpg)no-repeat center;background-size: cover;");
            
        }
     
    
    </script>