<div class="reviews_content">
            <h2 class="reviews_title">ЛЮДИ ПИШУТ ОТЗЫВЫ О НАС</h2>
            <div class="reviews_items">
                <?php $i_rs = 0; foreach($revs as $rs):?>
              <div class="item_reviews" style="background:url(/img/reviews/<?php echo $rs['photo_name'];?>.jpg)no-repeat center; background-size:contain"></div>
             
                <?php $i_rs++;?>
                <?php endforeach;?>
            </div>
            <div class="reviews_btn blick_btn" id="reviews_btn" onclick="getReviews(<?php echo $i_rs;?>)"><span></span>ОТКРЫТЬ БОЛЬШЕ ОТЗЫВОВ</div>
        </div>