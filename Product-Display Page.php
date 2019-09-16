<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products Display | Tecknel</title>
<link rel="stylesheet" href="CSS/product-display page.css"  />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  />

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
                <li class="menu-item"><a href="Contact-Us.html" class="menu-link">Contact Us</a></li>
                <li class="menu-item">
                    <div class="dropdown1">
                        <a href="" class="menu-link"><img src="icon\login1.png" class="menu-logo"/></a>
                        <div class="dropdown1-content">
                            <a href="Sign-In.html" class="dropdown-link"><img src="icon\login.png" class="SM-logo"/></a>
                            <a href="Sign-Up.html" class="dropdown-link"><img src="icon\signUp.png" class="SM-logo"/></a>
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

	<div class="container">
    	<h2> New Arrivals </h2>
    	<div class="row">
        	<div class="col-md-3">
            	<div class="product-top">
                	<img class="new-products" src="Source/falcon tlx red.jpg" />
                    <div class="overlay">
                    	<button type="button" class="btn btn-secondary" title="Quick Shop" >   
                        	<i class="fa fa-eye"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist" >   
                        	<i class="fa fa-heart-o"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Cart" >   
                        	<i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
                
                <div class="product-bottom text-center">
                	<i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star-half-o" > </i>
                    
                    <h3> Falcon TLX </h3>
                    <h5> 2700$ </h5>
                    
                </div>
                    
            </div>
            
                    	<div class="col-md-3">
            	<div class="product-top">
                	<img class="new-products" src="Source/MSI GL63.jpg" />
                    <div class="overlay">
                    	<button type="button" class="btn btn-secondary" title="Quick Shop" >   
                        	<i class="fa fa-eye"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist" >   
                        	<i class="fa fa-heart-o"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Cart" >   
                        	<i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
                
                <div class="product-bottom text-center">
                	<i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star-half-o" > </i>
                    
                    <h3> MSI GL63 </h3>
                    <h5> 1000$ </h5>
                    
                </div>
                    
            </div>
            
                    	<div class="col-md-3">
            	<div class="product-top">
                	<img src="Source/MSI Trident X plus.jpg" />
                    <div class="overlay">
                    	<button type="button" class="btn btn-secondary" title="Quick Shop" >   
                        	<i class="fa fa-eye"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist" >   
                        	<i class="fa fa-heart-o"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Cart" >   
                        	<i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
                
                <div class="product-bottom text-center">
                	<i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    
                    <h3> MSI Trident X plus </h3>
                    <h5> 1200$ </h5>
                    
                </div>
                    
            </div>
            
                    	<div class="col-md-3">
            	<div class="product-top">
                	<img class="new-products" src="Source/beats.jpg" />
                    <div class="overlay">
                    	<button type="button" class="btn btn-secondary" title="Quick Shop" >   
                        	<i class="fa fa-eye"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist" >   
                        	<i class="fa fa-heart-o"></i>
                        </button>
                        
                        <button type="button" class="btn btn-secondary" title="Add to Cart" >   
                        	<i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
                
                <div class="product-bottom text-center">
                	<i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    <i class="fa fa-star" > </i>
                    
                    
                    <h3> Beats SP </h3>
                    <h5>600$ </h5>
                    
                </div>
                    
            </div>
            
            
        </div>
    </div> 



</body>
</html>
