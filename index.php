<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    //Configurar el PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'daniel.eco18@gmail.com';
    $mail->Password = '43276762.98121818043.2365508.deco.';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('daniel.eco18@gmail.com'); // el mismo del username
    $mail->addAddress('decardona34@misena.edu.co');
    $mail->Subject = 'Prueba de correo con PHP';
    $mail->Body = 'Mensaje enviado pais, casi que no hpta jajaja';

    $mail->send();
?>
