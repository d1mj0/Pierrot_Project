<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../src/PHPMailer/src/Exception.php';
require '../src/PHPMailer/src/PHPMailer.php';
require '../src/PHPMailer/src/SMTP.php';
$mail= new PHPMailer(true);
$e= new Exception();

$name = (isset($_POST['name']))?$_POST['name']:null;
$email = (isset($_POST['email']))?$_POST['email']:null;
$msg = (isset($_POST['message']))?$_POST['message']:null;

try {
    //Server settings
    $mail = new PHPMailer;
    $mail->CharSet    = 'UTF-8';
    $mail->Encoding   = 'base64';                   //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ssl10.ovh.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'piandja@protonmail.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('info@deleevrsion.org', 'info');     //Add a recipient
    $mail->addReplyTo($email, $name);


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Message de deleversion.org';
    $mail->Body    = $name.' vous a adressé un message: '.$msg;
    

    $mail->send();
    echo 'le message a été envoyé';
} catch (Exception $e) {
    echo "le message n\'a pas été envoyé. Mailer Error: {$mail->ErrorInfo}";
}
?>