<?php

    $phone = $_POST['phone'];
    
    $phone = str_replace(' ', '', $phone);
    $phone = str_replace('-', '', $phone);
    $phone = str_replace('(', '', $phone);
    $phone = str_replace(')', '', $phone);
    $phone = str_replace('_', '', $phone);
    $phone = str_replace('+', '', $phone);
    $countph = mb_strlen($phone);
    
    if($_POST['phone']=='' OR $countph<10){
        $errors['phone'] = "Введите номер телефона";
    }
    
    if($_POST['antb']!=''){
        
        $errors['antb'] = "Мистерс, да вы БОТ";
        echo json_encode("YouBot");
        
    }else{
        if($_POST['phone']=='' OR $countph<10){
            
            echo json_encode("No");
             
        }else{
            
           
            
            $title_form = "Заявка с Квиза";
            $text_mail .= "<div style='display: inline; font-weight: 600;'>Заголовок формы:</div> ".$title_form;
            $text_mail .= "<br>";
            
            
            
            if($_POST['example'] != ''){
                $example = $_POST['example'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Что за навес:</div> ".$example;
                $text_mail .= "<br>";
            }
            
            
            if($_POST['material_stages'][0] != ''){
                $material_stages = $_POST['material_stages'][0];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Из чего будет сделан:</div> ".$material_stages;
            }
            if($_POST['material_stages'][1] != ''){
                $material_stages = $_POST['material_stages'][1];
                $text_mail .= " | ".$material_stages;
            }
            if($_POST['material_stages'][2] != ''){
                $material_stages = $_POST['material_stages'][2];
                $text_mail .= " | ".$material_stages;
            }
            if($_POST['material_stages'][3] != ''){
                $material_stages = $_POST['material_stages'][3];
                $text_mail .= " | ".$material_stages;
            }
            if($_POST['material_stages'][4] != ''){
                $material_stages = $_POST['material_stages'][4];
                $text_mail .= " | ".$material_stages;
            }
            if($_POST['material_stages'][5] != ''){
                $material_stages = $_POST['material_stages'][5];
                $text_mail .= " | ".$material_stages;
            }
            if($_POST['material_stages'][0] != ''){
                $text_mail .= "<br>";
            }
            
            if($_POST['shape_lest'] != ''){
                $shape_lest = $_POST['shape_lest'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Форма навеса:</div> ".$shape_lest;
                $text_mail .= "<br>";
            }
            
            if($_POST['long_wall'] != ''){
                $long_wall = $_POST['long_wall'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Длина будущего навеса:</div> ".$long_wall;
                $text_mail .= "<br>";
            }
            
            if($_POST['width_wall'] != ''){
                $width_wall = $_POST['width_wall'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Ширина будущего навеса:</div> ".$width_wall;
                $text_mail .= "<br>";
            }
            
            if($_POST['height_wall'] != ''){
                $height_wall = $_POST['height_wall'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Высота будущего навеса:</div> ".$height_wall;
                $text_mail .= "<br>";
            }
            
            
            if($_POST['when'][0] != ''){
                $when = $_POST['when'][0];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Когда нужен навес:</div> ".$when;
            }
            if($_POST['when'][1] != ''){
                $when = $_POST['when'][1];
                $text_mail .= " | ".$when;
            }
            if($_POST['when'][2] != ''){
                $when = $_POST['when'][2];
                $text_mail .= " | ".$when;
            }
            if($_POST['when'][0] != ''){
                $text_mail .= "<br>";
            }
            
            if($_POST['gift'] != ''){
                $gift = $_POST['gift'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Какой подарок выбрали:</div> ".$gift;
                $text_mail .= "<br>";
            }
            
            if($_POST['city'] != ''){
                $city = $_POST['city'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Населенный пункт:</div> ".$city;
                $text_mail .= "<br>";
            }
            $text_mail .= "<div style='display: inline; font-weight: 600;'>Телефон:</div> ".$phone;
            $text_mail .= "<br>";
            $text_mail .= "<div style='display: inline; font-weight: 600;'>URL:</div> ".$_COOKIE['URL_user'];
                
                
            /*$to = "Navesy_KRD@mail.ru";*/ 
			$to = "manyahinig@yandex.ru"; 
            $tema = "Заявка | ".$phone; 
            $headers  = 'MIME-Version: 1.0' . "\r\n"; 
            $from = "info@navesy-v-krasnodare.ru";
            $headers .= "From: $from\r\nReply-to: $from\r\nContent-type:text/html; charset=utf-8\r\n";
            
            mail($to, $tema, $text_mail, $headers, '-finfo@navesy-v-krasnodare.ru');
            
            
            
            echo json_encode($_POST['phone']);
            
        }
    }
?>