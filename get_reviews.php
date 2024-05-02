<?php

    require_once "reviews.php";
    $kkf = array_slice($reviews, $_POST['rev_nm'], 5);
    
    
    $result = '';
    foreach($kkf as $k){
        
        $result .= '<div class="item_reviews" style="background:url(/img/reviews/'.$k['photo_name'].'.jpg)no-repeat center; background-size:contain"></div>';
        
    }
    
    echo json_encode($result);


?>