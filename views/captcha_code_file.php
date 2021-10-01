<?php

if(isset($_POST['submit']))
{
  if(empty($_SESSION['6_letters_code'] ) ||
    strcmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
  {
      //Note: the captcha code is compared case insensitively.
      //if you want case sensitive match, update the check above to
      // ()
    $errors .= "\n The captcha code does not match!";
  }

$image_width = 120;
$image_height = 40;
$characters_on_image = 6;
$font = './monofont.ttf';

//The characters that can be used in the CAPTCHA code.
//avoid confusing characters (l 1 and i for example)
$possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
$random_dots = 0;
$random_lines = 20;
$captcha_text_color="0x142864";
$captcha_noise_color = "0x142864";

  if(empty($errors))
  {
    //send the email
    $to = $your_email;
    $subject="New form submission";
    $from = $your_email;
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    
    $body = "$name $lastName vous a envoé un message:\n".
    "Nom: $name\n".
    "Prénom: $lastName\n".
    "Email: $visitor_email \n".
    "Message: \n ".
    "$user_message\n".
    "IP: $ip\n";  
    
    $headers = "De: $from \r\n";
    $headers .= "Répondre à: $visitor_email \r\n";
    
    mail($to, $subject, $body,$headers);
    
    header('Location: contact.php');
  }
}


?>