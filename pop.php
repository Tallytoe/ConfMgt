<?php
$db = mysqli_connect('localhost', 'root', '', 'result');

$user = $_POST['user'];
$password = $_POST['userpassword'];
$query = "INSERT INTO pop(name,paper)VALUES('$user','$password')";
if(mysqli_query($db ,$query)){
echo "INSERTED";}
else{
echo "fail";}
?>
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
        background-image: url("unnamed.jpg");

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
  background: url(1234.jpg) repeat;
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
ADMINISTRATOR
</h1>
<!--Here Inline CSS is used-->
<div class="topnav" id="myTopnav">
<a href="index1.php">BACK</a>

</div>

<br>

<br>
<br>
<div class="background">
  <div class="transbox">
    <center><p>UPDATED SUCCESSFULLY</p></center>
  </div>
</div>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style = "color:white" >COMS © 2017. All Rights Reserved.</p>
</body>
</html>
