<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign-In | Tecknel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="CSS/sign-in.css" />

</head>

<body>

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
                                <input type="text" id="txt"	class="txt" value="Search Here..."/>
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
    
    <div class="form-container">
    <div class="loginbox">
        <img src="Source/avatar.jpg" class="avatar" />
            <h1 class="loginheader"> Login Here </h1>
            <form class="loginform">
                <p> User Name </p>
                <input type="text" name="txtUserName" id="txtUserName" placeholder="Enter User Name" class="login-input"  />
                <p> Password </p>
                <input type="password" name="txtlogin-pass" id="txtlogin-pass" placeholder="Enter Password" class="login-input" />
                
                 <p>
       <?php
	   if(isset($_POST["btnSubmit-login"]))
	   {
	      $userName=$_POST["txtUserName"];
	      $password=$_POST["txtlogin-pass"];
		  $valid=false;
		  
		  $con = mysqli_connect("localhost","root","","tecknel");
		   if(!$con)
			{	
				die("Cannot connect to DB server");		
			}
			
			$sql="SELECT * FROM `user` WHERE `email`='".$userName."' and `password`='".$password."'";
			
			$result = mysqli_query($con,$sql);
		  
		  
		  if(mysqli_num_rows($result) >0)
		{
		  
		  
		 // if(($userName=="test@gmail.com") && ($password=="test@123"))
		 // {
			  $valid=true;
		  }
		  else
		  {
			  $valid=false;
		  }
		  
		  if($valid)
		  {
			  $_SESSION["txtUserName"] =$userName;
			  header('Location:myTotebag.php');
		  }
		  
		  else
		  {
			  echo "Please enter the correct username and password";
		  }
	   }
	   ?>
            </p>
                
                <input type="submit" name="btnSubmit-login" id="btnSubmit-login" value="Login"  />
                <a href="#"> Lost Your Password? </a> <br />
                <a href="#"> Don't Have an Account? </a>
			</form> 
    </div>
    </div>
    
</body>
</html>
