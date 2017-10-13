
<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
        background-image: url(" Beautiful-flower-field-wallpaper.jpg");

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
align=center>REGISTER</h1>
<body>
	<div class="header">
		
	</div>
	<div class="topnav" id="myTopnav">
<a href="Home.html">HOME</a>
<a href="login.php">LOGIN</a>
<a href="det.html">CONFERENCE DETAILS</a>
<a href="wwd.html">WHAT WE DO</a>
<a href="about.html">ABOUT US</a>
</div>
	<center>
	
	<form method="post" action="register.php">
	<br><br>
		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<br>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
<br>		<div class="input-group">
			<label>Password</label>
			
			<input type="password" name="password_1">
		</div>
	<br>	<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<br><div class="input-group">
			<button type="submit" class="btn" name="reg_user" style="background:black;color:white;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = 'white';" " onBlur="this.style.color = '#000000';">Register</button>
		</div>
		<p>
		<br>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		</font>
	</form>
	</center>
</body>
</html>