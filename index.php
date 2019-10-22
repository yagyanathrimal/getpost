<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">    
<title>Document</title>
</head> <body>
<h1>Contact Information</h1> 
<form action="" method="POST">
Name<input type="text" name="name" value=""required/><br><br>
Phone<input type="number" name="phone" value=""required/> <br><br>
<input type="submit" name="submit" value="Submit"/>
</form>
<hr>
<table>
    <tr>
      <th>Id</th>       <th>Name</th>       <th>Phone</th> 
      <tr>
<?php
include'connection.php';
include'adddata.php';
$sql="SELECT*FROM names";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$name=$row['name'];
$phone=$row['phone'];
?>
<tr>
<td><?php echo $id ?></td> 
<td><?php echo $name ?></td> 
<td><?php echo $phone?></td>
</tr>
<?php
}
}
?> 


</table>
</body></html>
