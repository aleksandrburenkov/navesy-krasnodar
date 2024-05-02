
  <?php foreach ($card as $cards) {?>
    <div class="_modal" data-modal="<?php echo $cards['data-modal-open'];?>">
        <div class="modal-bg">
          <div class="modal-body">
            <div class="modal-close-wrapper">
              <div class="modal-close close_modal_form"></div>
            </div>
            <div class="modal-content modal-callback">
                 <div class="modal-callback-header">
                <div class="modal-callback-header-user">
        <div class="modal-callback-header-user-avatar"></div>
      <div class="modal-callback-header-user-text text-user">
     <p class="text-user-klient">Клиент</p>
     <p class="text-user-name"><?php echo $cards['name'];?></p>
     <p class="text-user-city"><?php echo $cards['city'];?></p>
    </div>
  </div>
          <div class="modal-callback-header-audio">
            <audio id="player" controls><source src="audio/<?php echo $cards['track'];?>" type="audio/mp3" /></audio>
        </div>
         </div>
          <div class="modal-callback-body">
              <p class="modal-callback-body-title"><?php echo $cards['blockquote'];?></p>
               <p class="modal-callback-body-text"><?php echo $cards['text'];?> </p>
          </div>
              

            
            </div>

          </div>
        </div>
      </div>
                  <?php 
                }
                
                ?>