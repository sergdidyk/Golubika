<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["callback_name"]));
        $name = str_replace(array("\r","\n"),array(" "," "), $name);
        $phone = filter_var(trim($_POST["callback_phone"]), FILTER_SANITIZE_NUMBER_INT);
        $recipient = "info@golubika-bags.com";
        $subject = "Поступил запрос обратного звонка на Golubika Website";
        
        if ( empty($name) OR empty($phone)){
            header("HTTP/1.1 400 Bad Request");
            exit;
        }

        $message = "Имя: $name\n";
        $message .= "Номер телефона: $phone\n\n";
        $headers = "Golubika Website";
       
        if (mail($recipient, $subject, $message, $headers)){
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.0 500 Internal Server Error");
        }

    }else {
        header("HTTP/1.1 403 Forbidden");
    }

   