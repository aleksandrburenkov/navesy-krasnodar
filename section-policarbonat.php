<div class="policarbonate__awnings-body">
            <div class="policarbonate__awnings-body-title">
                <h2>Посмотрите на последние наши работы:<br><span style='color: red'>Навесы из поликарбоната</span></h2>
            </div>
            <ul class="policarbonate__awnings-row row-slider">
            <?php foreach ($policarbonat as $poli) {?>
                    <li class="policarbonate__awnings-column">
                    <div class="policarbonate__awnings-items">
                        <a href="img/polikarbonat/<?php echo $poli['photo_name'];?>.jpg">
                        <img loading="lazy" src="../img/polikarbonat/<?php echo $poli['photo_name'];?>.jpg" alt="navesy">
                        </a>
                   
                    </div>
                    
                </li>
                  <?php 
                }
                
                ?>
               
                    </ul>
            <div class="policarbonate__awnings-button button-block">
                <button class=' button-block-btn blick_btn'>показать ещё примеры</button>
            </div>
        </div>