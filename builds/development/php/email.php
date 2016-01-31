<?php

 $headers = "Reply-to: dawid@instalsan.net <dawid@instalsan.net>".PHP_EOL;
 $headers .= "From: dawid@instalsan.net <dawid@instalsan.net>".PHP_EOL;
 $headers .= "MIME-Version: 1.0".PHP_EOL;
 $headers ="Content-type: text/html; charset=utf-8";

if($_POST){
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $message = $_POST['form_message'];

//send email
    mail("dawid@instalsan.net", "Wiadomość od " .$name .' ' .$email, $message, $headers);
}
?>