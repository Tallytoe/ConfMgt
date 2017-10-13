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
<title>Conference Details</title>
</head>
<style>
body {
        background-image: url(" maxresdefault.jpg");

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
<center>
<h1 style = "color:white; font-family:Calibri;background-color:black; border-style:solid; border-color:black;"
align=center>
CONFERENCE DETAILS</h1>
<body>
<div class="topnav" id="myTopnav">
<a href="index.php">HOME</a>
<a href="rlt.php">RESULT</a>
<a href="res.php">SELECTED PAPER</a>
<a href="index.php?logout='1'" style="color: red;">LOGOUT</a>
		
</div>

<br>
<br><br><br><br>
<font face=cambria size=4 pt color=black>
<table>
<tr><td><b><h3>Conference date:30/10/2017</h3></b></tr></td>
<tr><td><b><h3>Conference venue:Chennai trade centre , nandambakkam,chennai-600125</h3></b></tr></td>
<tr><td><b><h3>Conference time:11:00 AM</h3></b></tr></td>
<tr><td><b><h3>For more details call:+91 979 031 9567/+91 044 229 4920</h3></b></tr></td>

</table>
<br><br><br><br><br>

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
			<p>WELCOME <strong><?php echo $_SESSION['username']; ?></strong></p>
	
		
		<?php endif ?>

	</div>
</center>
</body>
</html>



 
