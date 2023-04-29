<?php
require 'vendor/autoload.php';

function SendMail($subject,$body)
{
    require 'vendor/autoload.php';
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mail@gmail.com';                   
        $mail->Password   = 'secret';                              
        $mail->SMTPSecure = 'tls';          
        $mail->Port       = 587;                                    

        $mail->setFrom('mail@gmail.com', 'CartAce');
        $mail->addAddress('mail@gmail.com');   

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $body;
        

        $mail->send();
        echo 'Message has been sent';
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

function Forget($subject,$body,$receipent)
{
    require 'vendor/autoload.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();                                     
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mail@gmail.com';                   
        $mail->Password   = 'secret';                              
        $mail->SMTPSecure = 'tls';          
        $mail->Port       = 587;                                    

        $mail->setFrom('mail@gmail.com', 'CartAce');
        $mail->addAddress($receipent);    

        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $body;
        

        $mail->send();
        echo 'Message has been sent';
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

function Register($subject,$body,$receipent)
{
    require 'vendor/autoload.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mail@gmail.com';                   
        $mail->Password   = 'secret';                              
        $mail->SMTPSecure = 'tls';          
        $mail->Port       = 587;                                    

        $mail->setFrom('mail@gmail.com', 'CartAce');
        $mail->addAddress($receipent);    

        $mail->isHTML(true);                                 
        $mail->Subject = $subject;
        $mail->Body    = $body;
        

        $mail->send();
        echo 'Message has been sent';
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

function MsgSend($subject,$body,$receipent)
{
    require 'vendor/autoload.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mail@gmail.com';                   
        $mail->Password   = 'secret';                              
        $mail->SMTPSecure = 'tls';          
        $mail->Port       = 587;                                    

        $mail->setFrom('mail@gmail.com', 'CartAce');
        $mail->addAddress($receipent);    

        $mail->isHTML(true);                                 
        $mail->Subject = $subject;
        $mail->Body    = $body;
        

        $mail->send();
        echo 'Message has been sent';
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}