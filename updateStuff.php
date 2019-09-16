<!--?php session_start();

if(!isset($_SESSION["username"]))
{
	header('Location:Sign-In.php');
}
?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/viewstuff.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php
	$con = mysqli_connect("localhost","root","","tecknel");
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
		$sql ="SELECT * FROM `item` WHERE `ItemId`='".$_GET["id"]."'";	
					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
	{
			$row = mysqli_fetch_assoc($result);
			
?>
<table width="835" height="265" border="0" align="center">
  
  <tr>
    <td height="215" colspan="2"><form action="update.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data">
      
      <table width="383" border="0" align="center">
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><div align="center"><img src="icon/edit1.png" width="198" height="195" /></div>
          <h1>Edit Stuff</h1></td>
        </tr>
      <tr>
        <td width="146">Name</td>
        <td width="227"><input type="text" name="txtName" id="txtName" value="<?php echo $row["Name"];?>" /></td>
      </tr>
      <tr>
        <td>Images</td>
        <td><input type="file" name="img" id="img" value="<?php echo $row["Path"];?>" /></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><input type="text" name="txtDesc" id="txtDesc" value="<?php echo $row["Description"];?>" /></td>
      </tr>
      <tr>
        <td height="43">Category</td>
        <td><select name="tech">
    <option value="Gaming Desktop"  <?php if($row["Category"]=="Gaming Desktop"){$val="Gaming Desktop";}?>>Gaming Desktop</option>
    <option value="Laptop"  <?php if($row["Category"]=="Laptop"){$val="Laptop";}?>>Laptop</option>
    <option value="Processor"  <?php if($row["Category"]=="Processor"){$val="Processor";}?>>Processor</option>
    <option value="Motherboard"  <?php if($row["Category"]=="Motherboard"){$val="Motherboard";}?>>Motherboard</option>
    <option value="Memory"  <?php if($row["Category"]=="Memory"){$val="Memory";}?>>Memory</option>
    <option value="Graphics Card"  <?php if($row["Category"]=="Graphics Card"){$val="Graphics Card";}?>>Graphics Card</option>
    <option value="Storage"  <?php if($row["Category"]=="Storage"){$val="Storage";}?>>Storage</option>
    <option value="Power Supply"  <?php if($row["Category"]=="Power Supply"){$val="Power Supply";}?>>Power Supply</option>
    <option value="Monitor"  <?php if($row["Category"]=="Monitor"){$val="Monitor";}?>>Monitor</option>
    <option value="Casing"  <?php if($row["Category"]=="Casing"){$val="Casing";}?>>Casing</option>
    <option value="Speaker/Headphone"  <?php if($row["Category"]=="Speaker/Headphone"){$val="Speaker/Headphone";}?>>Speaker/Headphone</option>
  </select></td>
      </tr>
      
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now"   />
            <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
         
        </blockquote></td>
        </tr>
    </table>
    <?php
	}
	mysqli_close($con);
	?>
    </form>
    </td>
  </tr>
</table>
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

</body>
</html>
