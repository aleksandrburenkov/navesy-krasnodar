

<div class="modal_form" id="modal_form">
        <div class="content_modal_form">
            <form action="" class="modal_window_form"  id="form_modal_form">
                <input type="text" class="input_antibot" name="antb">
                <div class="close_modal_form" onclick="CloseModal('modal_form')"></div>
                <div class="title_modal_form">Оставить заявку на расчет стоимости лестницы</div>
                <div class="mini_title_modal_form">Оставьте заявку и наш менеджер свяжется с&nbsp;Вами в ближайшее время</div>
                <input type="hidden" name="title_form" value="" id="title_modal_form_hidden">
                
                <input type="hidden" name="utm_source" id='utm_source' value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
                
                
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" id="input_modal_phone" placeholder="+7 (___) ___-__-__">
                <div class="btn_modal_form blick_btn" onclick="SendForm('form_modal_form')"><span></span>ОСТАВИТЬ ЗАЯВКУ</div>
                <a href="policy.php" class="policy_modal_form">Оставляя заявку вы принимаете условия политики конфиденциальности</a>
            </form>
        </div>
    </div>
   
    
    
  