<?php
require_once("config.php");
$file = fopen("visits.txt","a");
fwrite($file,getIPAddress()." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n");
header("Location: clients/");
?>