<?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	$name = strip_tags(trim($_POST["custom_name"]));
    $name = str_replace(array("\r","\n"),array(" "," "), $name);
    $phone = filter_var(trim($_POST["custom_phone"]), FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var(trim($_POST["custom_email"]), FILTER_SANITIZE_EMAIL);
    $comment = trim($_POST["custom_comment"]);

    $recipient = "info@golubika-bags.com";
    $subject = "Индивидуальный заказ на Golubika Website";
    
    if ( empty($name) OR empty($phone) OR empty($email) OR empty($comment)){
        header("HTTP/1.1 400 Bad Request");
        exit;
    }

    $message = "<strong>Имя: </strong> $name <br>";
    $message .= "<strong>Номер телефона: </strong> $phone <br>";
    $message .= "<strong>Email: </strong> $email <br><hr>";
    $message .= "<strong>Комментарий к индивидуальному заказу:</strong><br> $comment <br>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <info@golubika-bags.com>' . "\r\n";
   
    if (mail($recipient, $subject, $message, $headers)){
        header("HTTP/1.1 200 OK");
    } else {
        header("HTTP/1.0 500 Internal Server Error");
    }

  }else {
      header("HTTP/1.1 403 Forbidden");
  }