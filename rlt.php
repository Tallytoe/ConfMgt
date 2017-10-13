<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
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
        background-image: url("orange_abstract-HD.jpg");

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
.boxed {
  border: 10px solid black ;
}
.boxed{
	width:350px;
	height:300px;
}
.red{
	background-image: url("html-color-codes-color-tutorials-hero-00e10b1f.jpg");
}
</style> 
<body>
<center>
<h2>




</h2>
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
			<h1><p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p></h1>
			<div class="topnav" id="myTopnav"><a href="index.php">HOME</a>
			<a href="index.php?logout='1'" style="color: red;">LOGOUT</a> 
			</div>
		<?php endif ?>

	</div>
	<br><br><br>
	<font color="white">
	<div class="boxed red ">


	<br><br><h2><u>WINNERS</u></h2><br>
	<h3>
	1.CVA.O<br><br>
	2.RAY.J<br><br>
	3.MAMTHA.E<br><br>
	</h3>
	</font>
</div>
	
</center>	
</body>
</html>