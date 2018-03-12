<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "fb";
$conn=mysqli_connect($servername,$username,$password) or die('Connection failed:'.mysqli_connect());
mysqli_select_db($conn,$db);
?>