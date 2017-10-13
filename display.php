
<!DOCTYPE html>
<html>
<head>
<title>WELCOME ADMIN</title>
<style>
a {color:WHITE; font-family:VERDANA;}
</style>
</head>
<style>
body {
        background-image: url("Blue Space HD Wallpaper  1080p HD Wallpapers.jpg");

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
div.background {
  background: url(Background-4.jpg) repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
</style> 

<body bgcolor=black text=beige>

<!--Here Inline CSS is used-->


<h1 style = "color:white; font-family:Calibri;background-color:black; border-style:solid; border-color:black;"
align=center>
STATUS
</h1>
<!--Here Inline CSS is used-->
<div class="topnav" id="myTopnav">
<a href="res.php">BACK</a>

</div>

<br>

<br>
<br>
<div class="background">
 <h1>
    <center><p><?php

$db = mysqli_connect('localhost', 'root', '', 'result');

$name = $_POST['name'];
$query = "SELECT * from pop where name = '$name'";

$result = mysqli_query($db, $query);

while ($line = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo $line['name'];echo '&nbsp';echo '&nbsp';echo '&nbsp';
	echo $line['paper'];
}
?></p></center></h1>
  </div>
</div>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style = "color:white" >COMS © 2017. All Rights Reserved.</p>
</body>
</html>
