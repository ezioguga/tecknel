<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tecknel | Computer shop</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="CSS/contact-us.css" />
<script type="text/javascript" language="javascript">
 // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="myBtn"><i class="fa fa-arrow-up"></i></button>
<!--header-->
<div class="header">
	<div class="header-contents">
		<div class="logo">
			<a href="Home.html"><p class="logo-name"><img src="icon/logo1.png" class="Mlogo"  /></p> </a>
		</div>
		<div class="menu-list">
            <ul class="menu">
                <li class="menu-item">
                    <div class="dropdown">
                        <a href="" class="menu-link">Product</a>
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-link">Gaming Desktop</a>
                            <a href="#" class="dropdown-link">Laptop</a>
                            <a href="#" class="dropdown-link">Processor</a>
                            <a href="#" class="dropdown-link">Motherboard</a>
                            <a href="#" class="dropdown-link">Memory</a>
                            <a href="#" class="dropdown-link">Graphics Card</a>
                            <a href="#" class="dropdown-link">Storage</a>
                            <a href="#" class="dropdown-link">Power supply</a>
                            <a href="#" class="dropdown-link">Monitor</a>
                            <a href="#" class="dropdown-link">Casing</a>
                            <a href="#" class="dropdown-link">Speaker/Headphone</a>
                        </div>
                    </div>
                </li>
                <li class="menu-item"><a href="About-Us.html" class="menu-link">About Us</a></li>
                <li class="menu-item"><a href="Contact-Us.php" class="menu-link">Contact Us</a></li>
                 <li class="menu-item">
                    <div class="dropdown1">
                        <a href="" class="menu-link"><img src="icon\login1.png" class="menu-logo"/></a>
                        <div class="dropdown1-content">
                            <a href="Sign-In.php" class="dropdown-link"><img src="icon\login.png" class="SM-logo"/></a>
                            <a href="Sign-Up.php" class="dropdown-link"><img src="icon\signUp.png" class="SM-logo"/></a>
                            <a href="#" class="dropdown-link1"><img src="icon\logout.png" class="SM-logo"/></a>
                         </div>
                    </div>
                </li>
                <li class="menu-item">
                <div class="dropdown2">
                    <a href="" class="menu-link"><img src="icon\search.png" class="menu-logo"/></a>
                    <div class="dropdown2-content">
						<a href="#" class="dropdown-link">
                        <div class="textField">
                            <form id="form" class="form">
                                <input type="text" id="txt"	class="txt" placeholder="Search Here..."/>
                            </form>
                            <button class="btn"><i class="fa fa-search"></i></button>
                        </div>
                       </a>
                     </div>
                    </div>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link"><img src="icon\cart.png" class="menu-logo"/></a>
                </li>                    
            </ul>
        </div>
	</div>
</div>      
<!--contactus part-->
<div class="contactUs">
	<div class="CU-Photo">
    	<img src="Source/Contact-us.jpg" class="CU-img" />
    </div>
    <div class="CU-contect">
    	<div class="detail">
        	<form id="CU-info" class="CU-info">
            	<table class="CU-table" border="0" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td><p class="CU-para">First Name</p></td>
                        <td><input type="text" id="CU-FN" class="CU-F" size="45" required/></td>
                    </tr>
                    <tr>
                        <td><p class="CU-para">Last Name</p></td>
                        <td><input type="text" id="CU-LN" class="CU-F" size="45" required/></td>
                    </tr>
                    <tr>
                    	<td><p class="CU-para">E-Mail</p></td>
                        <td colspan="4"><input type="text" id="CU-email" class="CU-F" size="45" required/></td>
                    </tr>
                    <tr>
                    	<td><p class="CU-para">Company Name</p></td>
                        <td><input type="text" id="CU-CN" class="CU-F" size="45" required/></td>
                    </tr>
                    <tr>
                    	<td><p class="CU-para">Tell me something</p></td>
                        <td><textarea rows="4" cols="42" name="CU-disc" class="CU-F" id="CU-disc" form="CU-info" required></textarea></td>
                    </tr>  
                    <tr><td></td>
                    	<td colspan="4" align="center"><input name="send" type="submit" class="CU-btn" id="CU-btn" value="send" /></td>
                              	
                </table>
            </form>
        </div>
    	<div class="map">
        	<iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d747.054361400958!2d80.2005519874195!3d9.799449766364152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3aff02317938b61d%3A0x57161261d8a1a73c!2s64-24+Kodikakam+Rd%2C+Point+Pedro!5e0!3m2!1sen!2slk!4v1552311441448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br />
            <p class="CU-para1">Main Street Nelliady, Jaffna.</p><BR />
            <p class="CU-para1">0771234567</p>
        </div>
        
    </div>




</div>  

<!--footer-->   
<div class="footer">
    <div class="footer-contents">
        <div class="footer-items">
            <p class="footer-heading">Contact Us</p>
            <div class="footer-links">
                <div class="FL">
                    <div class="FI">
                        <img src="icon\call.png" class="FIcon" />
                    </div>
                    <div class="FD">
                        <p class="footer-link">+94771234567</p>
                    </div>
                </div>
                <div class="FL">
                    <div class="FI">
                        <img src="icon\location.png" class="FIcon" />
                    </div>
                    <div class="FD">
                        <p class="footer-link">Main Street Nelliady, Jaffna.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-items">
            <p class="footer-heading">About</p>
            <div class="footer-links">
              <p class="footer-link">The Company</p>
              <p class="footer-link">Terms &amp; Conditions</p>
            </div>
        </div>

        <div class="footer-items">
            <p class="footer-heading">Quick Links</p>
            <div class="footer-links">
                <a href="home.html" class="f-link"><p class="footer-link">Home</p></a>
                <p class="footer-link">FAQ</p>
            </div>
        </div>
        <div class="footer-items">
            <p class="footer-heading">Follow Us</p>
            <div class="footer-links">
                <div class="FL">
                    <div class="FI">
                        <img src="icon\fb.png" class="FIcon" />
                    </div>
                    <div class="FD">
                        <p class="footer-link">Facebook</p>
                    </div>
                </div>
                <div class="FL">
                    <div class="FI">
                        <img src="icon\insta.png" class="FIcon" />
                    </div>
                    <div class="FD">
                        <p class="footer-link">Instagram</p>
                    </div>
                </div>
                <div class="FL">
                    <div class="FI">
                        <img src="icon\twitter.png" class="FIcon" />
                    </div>
                    <div class="FD">
                        <p class="footer-link">Twitter</p>
                    </div>
                </div>
                <div class="FL">
                    <div class="FI">
                        <img src="icon\YT.png" class="FIcon" />
                    </div>
                    <div class="FD">
                        <p class="footer-link">YouTube	</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
