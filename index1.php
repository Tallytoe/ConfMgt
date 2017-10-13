<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: admin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: admin.php");
	}
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
a {color:WHITE; font-family:VERDANA;}
body {
        background-image: url(" html-color-codes-color-tutorials-hero-00e10b1f.jpg");

}
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style> 
<body><div class="topnav" id="myTopnav"> <a href="index1.php?logout='1'" style="color: red;">LOGOUT</a> </div>

<center>
<?php  if (isset($_SESSION['username'])) : ?>
			<h2><p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p></h2>
			
		<?php endif ?>
		<center><h3 style = "color:white; font-family:Calibri;background-color:black; border-style:solid; border-color:black;"
align=center>
VIEW PAPER
</h3></center>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
      
      
<h4></h4><br>

	  <input type="file" name="image" />
               
      
   <br><br>
   <center><h3 style = "color:white; font-family:Calibri;background-color:black; border-style:solid; border-color:black;"
align=center>
UPDATE RESULT
</h3></center>
  
   <br>
   <form method="post" name="input" action="pop.php" >
Name:<br>
<input name="user" type="text"/><br><br>
Selected/Rejected:<br/>
<input name="userpassword" type="text"/><br><br>
<input type="submit" name="Submit" value="UPDATE"  style="background:black;color:white;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = 'white';" " onBlur="this.style.color = '#000000';"/>
</form>
 

	<div class="header">
		
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		
			
		<?php endif ?>
		<?php
echo "Today is " . date("Y/m/d") . "<br>";

echo "Today is " . date("l");
?>
	</div>
	
</center>	
</body>
</html>