<div class="audio__reviews-body">
        <div class="audio__reviews-block-text">
            <p class="audio__reviews-block-text-title">Отзывы</p>
            <h2 class="audio__reviews-block-text-subtitle">Что говорят о наших навесах клиенты</h2>
        </div>
        <div class="audio__reviews-slider ">
         <?php foreach ($card as $cards) {?>
           <div class="audio__reviews-column">
             <div class="audio__reviews-items">
                <div class="audio__reviews-items-top">
                    <p class="audio__reviews-items-top-title">Цитата из отзыва</p>
                    <p class="audio__reviews-items-top-blockquote"><?php echo $cards['blockquote'];?></p>

                </div>
                <div class="audio__reviews-items-center">
                    
                    <div class="audio__reviews-items-center-title">Аудио-отзыв</div>
                    <audio id="player" controls><source src="audio/<?php echo $cards['track'];?>" type="audio/mp3" /></audio>
                    <button class='audio__reviews-items-center-btn _modal-open' data-modal-open="<?php echo $cards['data-modal-open'];?>" >Читать отзыв</button>
                </div>
                

            </div>
            <div class="audio__reviews-items-footer">
                <div class="audio__reviews-items-footer-row row-footer">
                  <div class="row-footer-icon"></div>
                  <div class="row-footer-text">
                    <p class="row-footer-text-title">Клиент</p>
                    <p class="row-footer-text-name"><?php echo $cards['name'];?></p>
                    <d class="row-footer-text-adress"><?php echo $cards['city'];?></d>
                  </div>
                </div>
            
           </div>
        </div>
                  <?php 
                }
                
                ?>
      
       
</div>
