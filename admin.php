<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	
</head>
<style>
a{color:WHITE;}
body {
        background-image: url(" green_background_2-wallpaper-1366x768.jpg");

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
</head>
<body>

<h1><font color="White">
<marquee bgcolor="black">CONFERENCE MANAGEMENT </marquee>
</h1></font>
<font color="White">
<div class="topnav" id="myTopnav">
<a href="Home.html"><b>HOME</b></a>
<a href="wwd.html"><b>WHAT WE DO</b></a>
<a href="about.html"><b>ABOUT US</b></a>
</div>


	
	
	<form method="post" action="admin.php">

		<?php include('errors1.php'); ?>
		<center>
<font color="black">
<center><div class="header">
		<h2>LOGIN</h2></center>
	</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" style="background:black;color:white;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = 'white';" " onBlur="this.style.color = '#000000';" >
		</div>
		<br>
		<br>
		<div class="input-group">
			<label>Password</label></font>
			<input type="password" name="password" style="background:black;color:white;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = 'white';"" onBlur="this.style.color = '#000000';">
		</div>
		<br>
		<br>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" style="background:black;color:white;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = 'white';" " onBlur="this.style.color = '#000000';">LOGIN</button>
		</div>
		
	</form>
</center>

</body>
</html>