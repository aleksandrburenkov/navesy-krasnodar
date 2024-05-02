<?php
require_once "geolocation.php";

    $phone = $_POST['phone'];
    
    
    $phone = str_replace(' ', '', $phone);
    $phone = str_replace('-', '', $phone);
    $phone = str_replace('(', '', $phone);
    $phone = str_replace(')', '', $phone);
    $phone = str_replace('_', '', $phone);
    $phone = str_replace('+', '', $phone);
    $countph = mb_strlen($phone);
    $material = $_POST['material'];
    $materials = $_POST['materials'];
    $long = $_POST['long'];
    $width = $_POST['width'];
    $height = $_POST['height'];
   

    
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
            
            if($_POST['title_form'] != ''){
                $title_form = $_POST['title_form'];
                $utm_source = $_POST['utm_source'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Заголовок формы:</div> ".$title_form;
                $text_mail .= "<div style='display: inline; font-weight: 600;'>4.Метка:</div> " .$utm_source;
                
                $text_mail .= "<div style='display: inline; font-weight: 600;'>5.Город:</div> " .$res['city'] ;
                $text_mail .= "<div style='display: inline; font-weight: 600;'>6.Область:</div> " .$res['regionName'] ;
                $text_mail .= "<br>";
            }else{
                $title_form = "Заявка на расчет стоимости навеса";
                $utm_source = $_POST['utm_source'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Заголовок формы:</div> ".$title_form;
                $text_mail .= "<div style='display: inline; font-weight: 600;'>4.Метка:</div> " . $utm_source;
                $text_mail .= "<div style='display: inline; font-weight: 600;'>5.Город:</div> " .$res['city'] ;
                $text_mail .= "<div style='display: inline; font-weight: 600;'>6.Область:</div> " .$res['regionName'] ;
                $text_mail .= "<br>";
            }
            
            if($_POST['title_form'] == 'Блок калькулятор'){
                
                
                if($_POST['ferm_type'] != ''){
                    $ferm_type = $_POST['ferm_type'];
                    $text_mail .= "<div style='display: inline; font-weight: 600;'>Тип ферм:</div> ".$ferm_type;
                    $text_mail .= "<br>";
                }
                
                if($_POST['material'] != ''){
                    $text_mail .= "<div style='display: inline; font-weight: 600;'>Материал:</div> ".$material;
                    $text_mail .= "<br>";
                }
                if($_POST['long'] != ''){
                    $text_mail .= "<div style='display: inline; font-weight: 600;'>Длина:</div> ".$long;
                    $text_mail .= "<br>";
                }
                if($_POST['width'] != ''){
                    $text_mail .= "<div style='display: inline; font-weight: 600;'>Ширина:</div> ".$width;
                    $text_mail .= "<br>";
                }
                if($_POST['height'] != ''){
                    $text_mail .= "<div style='display: inline; font-weight: 600;'>Высота:</div> ".$height;
                    $text_mail .= "<br>";
                }
                
                
            }
            
            
            if($_POST['city'] != ''){
                $city = $_POST['city'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Город:</div> ".$city;
               
                $text_mail .= "<br>";
            }
            
            if($_POST['name'] != ''){
                $name = $_POST['name'];
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Имя:</div> ".$name;
               
                $text_mail .= "<br>";
            }else{
                $name = "Имя не заполнено";
                $text_mail .= "<div style='display: inline; font-weight: 600;'>Имя:</div> ".$name;
               
                $text_mail .= "<br>";
            }
            
            
            $text_mail .= "<div style='display: inline; font-weight: 600;'>Телефон:</div> ".$phone;
            if($_POST['title_form'] == 'Заявка на расчет стоимости навеса'){
            $text_mail .= "<br>";
			$text_mail .= "<div style='display: inline; font-weight: 600;'>Материал:</div> ".$materials;
			$text_mail .= "<br>";
			$text_mail .= "<div style='display: inline; font-weight: 600;'>1.Длина:</div> ".$long;
			$text_mail .= "<br>";
			$text_mail .= "<div style='display: inline; font-weight: 600;'>2.Ширина:</div> ".$width;
			$text_mail .= "<br>";
			$text_mail .= "<div style='display: inline; font-weight: 600;'>3.Высота:</div> ".$height;
			
            }
			
               
            $to = "zayavki2022@yandex.ru, Navesy_KRD@mail.ru"; /*- ТОЛЬКО МОЙ*/
			/*$to = "Navesy_KRD@mail.ru, tofan.oleg378@mail.ru";     /*- НА ОЛЕГА И МЕНЯ*/
			/*$to = "manyahinig@yandex.ru"; */
			/*$to = "zayavki2022@yandex.ru";*/ 
			$tema = "ХОСТ_Навесы КРАСНОДАР Заявка | ".$phone; 
            $headers  = 'MIME-Version: 1.0' . "\r\n"; 
            /*$from = "info@navesy-v-krasnodare.ru";*/
			$from = "info@NavesyKRD.ru";
            $headers .= "From: $from\r\nReply-to: $from\r\nContent-type:text/html; charset=utf-8\r\n";
            
            mail($to, $tema, $text_mail, $headers, 'info@NavesyKRD.ru');
            
            
            echo json_encode($_POST['phone']);
            
        }
    }
?>