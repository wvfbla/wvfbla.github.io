<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    $from = 'From: wvfbla.github.io'; 
    $to = 'k.nerurkar.98@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
    if ($_POST['submit']) {
        mail ($to, $subject, $body, $from);
        
    }

?>
