<?php
  $name = trim(strip_tags($_POST["name"]));
  $sex = trim(strip_tags($_POST["newsletter"]));
  $email = trim(strip_tags($_POST["email"]));
  $country = trim(strip_tags($_POST["country"]));
  $subject = "REGISTRATION https://lavanda217.github.io/pink/index.html";
  $msg = "YOUR INFORMATION:\n" ."NAME: $name\n" ."newsletter: $newsletter\n" ."YOUR email: $email\n" ."COUNTRY: $country";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: Lavander <lavanderwerdi@gmail.com>" . "\r\n";
  $headers .= "Bcc: email". "\r\n";
  if(!empty($name) && !empty($newsletter) && !empty($email) && !empty($country) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($email, $subject, $msg, $headers);
    echo "Thank you, my friend.";
    }
?>