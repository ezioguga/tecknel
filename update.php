<?php
  session_start();  
  $itemid = $_GET["id"]; 
  $name=$_POST["txtName"];
  $image = "uploads/".basename($_FILES["img"]["name"]);
  move_uploaded_file($_FILES["img"]["tmp_name"],$image);
	   
$description=$_POST["txtDesc"];
$val = $_POST['tech']; 
$price=$_POST["txtPrice"];


		   
		   $con = mysqli_connect("localhost","root","","it18200584");
			if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}
			   
			   $sql="UPDATE `item` SET `Name`='".$name."',`Description`='".$description."',`Category`='".$val."',`Price`='".$price."',`Path`='".$image."' WHERE`item`.`ItemId` = ".$itemid.";";

               $sql="UPDATE `item` SET `Name`='".$name."',`Description`='".$description."',`Category`='".$val."',`Price`='".$price."',`Path`='".$image."' WHERE `item`.`ItemId` = ".$ItemId."; ";
			   
			   	if(  mysqli_query($con,$sql))
				{
						echo "File uploaded Successfully";
				}
				else
				{
					echo "Opps something is wrong, Please select the file again";
				}
			   
		   header('Location:admin.php');
		   
		   ?>