<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$which_Country_You_Are_Interested_In = $_POST['current'];
$text = $_POST['message'];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'iamanmolsingh.1@gmail.com';                     //SMTP username
    $mail->Password   = 'ardu1455du';                                 //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom($email, 'Mailer');
    $mail->addAddress("info@yashimmiglobal.com");     //Add a recipient
    $mail->AddAddress('pradeep@newvisiondigital.co');     //Add a recipient
    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Free assesment';
    $mail->Body    = " From: .$name. \n Name: .$name. \n Email: .$email. \n Phone: .$phone. \n Which Country You Are Interested In: .$which_Country_You_Are_Interested_In. \n Message: .$text.";;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        echo'<script>window.location.href="https://yashimmiglobal.sg/immigration-lawyers-in-australia/thankyou.php"; </script>';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
