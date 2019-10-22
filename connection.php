<?php
$host="localhost";
$user="root";
$password="";
$dbname="contact";
$conn=mysqli_connect($host,$user,$password,$dbname);
if($conn){ echo"connection ok";}
else{
die("connection failed".mysqui_connectio_error());}
?>
