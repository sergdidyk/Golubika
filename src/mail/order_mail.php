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

      $message = "Название: $product\n";
      $message .= "Описание: $description\n";
      $message .= "Цена: $price\n\n";
      $message .= "Имя покупателя: $name\n";
      $message .= "Номер телефона покупателя: $phone\n";
      $message .= "Email покупателя: $email\n\n";
      $message .= "Комментарий покупателя: $comment\n\n";

      $headers = "Golubika Website";
     
      if (mail($recipient, $subject, $message, $headers)){
          header("HTTP/1.1 200 OK");
      } else {
          header("HTTP/1.0 500 Internal Server Error");
      }

  }else {
      header("HTTP/1.1 403 Forbidden");
  }