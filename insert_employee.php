<?php

include 'connect.php';


$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$company=$_POST['company'];

// Querry select:
$sql="insert into `crud` (name,email,mobile,company) 
values('$name','$email','$mobile','$company')";

$result=mysqli_query($con,$sql);
if($result){
echo "Data Inserted Successfully";
}else{
die(mysqli_error($con));
}

?>
