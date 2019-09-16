<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="CSS/sign-up.css">

<script type="text/javascript">

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

function validateFullName()
{
	var fName = document.getElementById("txtFullName").value;
	if(fName== "" || fName==null)
	{
		alert("please enter  the full name");
		return false;
	}
	return true;
}

function validateEmail()
{
	var email = document.getElementById("txtEmail").value;
	var at=email.indexOf("@");
	var dt=email.lastIndexOf(".");
	var len=email.length();
	
	if((at < 2) || (dt - at < 2) || (len - dt < 2))
	{
		alert("Please enter a valid email address");
		return false;
	}
	return true;
}

function validatePassword()
{
	var pwd = document.getElementById("txtPassword").value;
	var cpwd = document.getElementById("txtConfirmPassword").value;
	if((pwd.length < 5) || (pwd != cpwd))
	{
		alert("Please enter a correct password and enter to confirm password");
		return false;
	}
	return true;
}

function validateContact()
{
	var cno = document.getElementById("txtContactNumber").value;
	if((isNaN(cno))||(cno.length!=10))
	{
		alert("please enter the valid contact number")
		return false;
	}
	return true;
}

function validateChkbox()
{
	if((document.getElementById("chkAdmin").checked)||(document.getElementById("chkCustomer").checked))
	{
		return true;
	}
	alert("please select the one option");
	return false;
}

function validate()
{
	if(validateFullName() && validateEmail() && validatePassword()  && validateContact() && validateChkbox())
	{
		alert("account has been created")
	}
	else
	{
		event.preventDefault();
	}
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
                        <a href="" class="menu-link"><img src="icon/login1.png" class="menu-logo"/></a>
                        <div class="dropdown1-content">
                            <a href="Sign-In.php" class="dropdown-link"><img src="icon/login.png" class="SM-logo"/></a>
                            <a href="Sign-Up.php" class="dropdown-link"><img src="icon/signUp.png" class="SM-logo"/></a>
                            <a href="#" class="dropdown-link1"><img src="icon/logout.png" class="SM-logo"/></a>
                         </div>
                    </div>
                </li>
                <li class="menu-item">
                <div class="dropdown2">
                    <a href="" class="menu-link"><img src="icon/search.png" class="menu-logo"/></a>
                    <div class="dropdown2-content">
						<a href="#" class="dropdown-link">
                        <div class="textField">
                            <form id="form" class="form">
                                <input type="text" id="txt"	class="txt" value="Search Here..."/>
                            </form>
                            <button class="btn"><i class="fa fa-search"></i></button>
                        </div>
                       </a>
                     </div>
                    </div>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link"><img src="icon/cart.png" class="menu-logo"/></a>
                </li>                    
            </ul>
        </div>
        </div>
    </div>

  
<div class="container">
  <form action="Sign-Up.php" method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="txtFullName" id="txtFullName"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="txtEmail" id="txtEmail"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" name="txtPassword" id="txtPassword"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Confirm Password" name="txtConfirmPassword" id="txtConfirmPassword"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Contact Number" name="txtContact" id="txtContact"/>
        <div class="input-icon"><i class="fa fa-mobile"></i></div>
      </div>

       <div class="acctype-option">
       <select name="type">
       <option value="admin">admin</option>
       <option value="user">user</option>
       </select> 
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD" name="txtDate" id="txtDate"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM" name="txtMonth" id="txtMonth"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="txtYear" id="txtYear"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group">
        <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>
        <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
        <input type="radio" name="payment-method" value="paypal" id="payment-method-paypal"/>
        <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Card Number"/>
        <div class="input-icon"><i class="fa fa-credit-card"></i></div>
      </div>
      <div class="col-half">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Card CVC"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
      </div>
      <div class="col-half">
        <div class="input-group">
          <select>
            <option>01 Jan</option>
            <option>02 Jan</option>
          </select>
          <select>
            <option>2015</option>
            <option>2016</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
      <input type="submit" name="btnSubmitreq" id="btnSubmitreq" class="btnSubmitreq" value="Register" onclick="validate()" />
    </div>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>

<?php

     if(isset($_POST["btnSubmitreq"]))
	 {
		 $email = $_POST["txtEmail"];
		 $fullName = $_POST["txtFullName"];
		 $contact = $_POST["txtContact"];
		 $password = $_POST["txtPassword"];
		 $type = $_POST['type'];
		 $date = $_POST["txtDate"];
		 $month = $_POST["txtMonth"];
		 $year = $_POST["txtYear"];
		 $gender = $_POST["gender"];
		 
		 
		 $con = mysqli_connect("localhost","root","","tecknel");
					if(!$con)
					{	
					die("Cannot connect to DB server");		
					}
			$sql = "INSERT INTO `login`(`FullName`, `Email`, `Password`, `ContactNo`, `Type`, `Date`, `Month`, `Year`, `Gender`) VALUES ('".$fullName."','".$email."','".$password."','".$contact."','".$type."','".$date."','".$month."','".$year."','".$gender."')";
			
			mysqli_query($con,$sql); 	 
			 
	 }

?>

</html>