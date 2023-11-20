

















  










  
    
  
  





  
  

















	
	





	
		
	
		
		
		
		
	

var cart_count=1;

var containsExclusiveOutput ="<input type=\"hidden\" id=\"containsExclusive\" name=\"containsExclusive\" value=\"false\"/>";
var output3 ="<input type=\"hidden\" id=\"isPFS\" name=\"isPFS\" value=\"false\"/>";
var output2 ="<input type=\"hidden\" id=\"orderID\" name=\"orderID\" value=\"o1752005452\"/>";
var profileIdOutput = "<input type=\"hidden\" id=\"storeProfileId\" name=\"storeProfileId\" value=\"2454533953\"/>";
var isProfileTransient = "<input type=\"hidden\" id=\"isStoreProfileTransient\" name=\"isStoreProfileTransient\" value=\"false\"/>";
var isProfileInternal = "<input type=\"hidden\" id=\"isStoreProfileInternal\" name=\"isStoreProfileInternal\" value=\"false\"/>";
var output = containsExclusiveOutput+output3+output2+profileIdOutput+isProfileTransient+isProfileInternal+"<h2><a href=\"https://store.usps.com/store/cart/cart.jsp\" tabindex=\"0\" id=\"anchor-cart\" name=\"anchor-cart\">Shopping Cart  (<span id=\"shopping-cart-panel-quantity\">"+cart_count+"</span>)</a></h2>";

var fileref = document.createElement("link");
  fileref.setAttribute("rel", "stylesheet");
  fileref.setAttribute("type", "text/css");
  fileref.setAttribute("href", "https://store.usps.com/media/usps_gh/css/cart.css");

var t = window.setInterval("setCart()",200);
                
function setCart(){
	if(document.getElementById("global-header-cart") != null) {
		document.getElementById("global-header-cart").innerHTML = output;
		document.getElementsByTagName("head")[0].appendChild(fileref);
		clearInterval(t);
	}
}


