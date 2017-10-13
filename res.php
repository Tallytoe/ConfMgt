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
        background-image: url(" background-7.jpg");

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
<body>
<center>

<div class="topnav" id="myTopnav">
<a href="index.php">HOME</a>
<a href="rlt.php">RESULT</a>
<a href="det.php">CONFERENCE DETAILS</a>
<a href="index.php?logout='1'" style="color: red;">LOGOUT</a>
</div>
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
			<h1><p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p>
			</h1>
		<?php endif ?>

	</div>
<form method="post" name="display" action="display.php" />
ENTER YOUR NAME TO CHECK THE STATUS OF YOUR PAPER:<br>
<br>
<input type="text" name="name" />
<input type="submit" name="Submit" value="CHECK" style="background:black;color:white;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = 'white';" " onBlur="this.style.color = '#000000';"/>
	
</center>	
</body>
</html>