<?php 
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 		$product = trim($_POST["order_product"]);
	 		$price = trim($_POST["order_price"]);
	 		$description = trim($_POST["order_descr"]);
      $name = strip_tags(trim($_POST["order_name"]));
      $name = str_replace(array("\r","\n"),array(" "," "), $name);
      $phone = filter_var(trim($_POST["order_phone"]), FILTER_SANITIZE_NUMBER_INT);
      $email = filter_var(trim($_POST["order_email"]), FILTER_SANITIZE_EMAIL);
      $comment = trim($_POST["order_comment"]);

      $recipient = "info@golubika-bags.com";
      $subject = "Поступил заказ на Golubika Website";
      
      if ( empty($name) OR empty($phone) OR empty($email)){
          header("HTTP/1.1 400 Bad Request");
          exit;
      }

      $message = "<strong>Название товара:</strong> $product <br>";
      $message .= "<strong>Описание товара:</strong> $description <br>";
      $message .= "<strong>Цена на сайте:</strong> $price<br>";
      $message .= "<strong>Имя покупателя:</strong> $name<br>";
      $message .= "<strong>Номер телефона покупателя:</strong> $phone<br>";
      $message .= "<strong>Email покупателя:</strong> $email<br>";
      $message .= "<hr><strong>Комментарий покупателя:</strong> $comment<br>";

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