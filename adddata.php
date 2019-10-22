<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
include'connection.php';
$sql="INSERT INTO names(name,phone)VALUES('$name','$phone')";
$result=mysqli_query($conn,$sql);

?>