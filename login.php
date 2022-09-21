<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "crudoperation";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if (isset($_POST['submit'])){

//     $mail = $_POST['email'];
//     $pass = $_POST['password'];
//    // "SELECT * FROM `form` WHERE `email`='$email' AND `password`='$pass'";
//     $sql = "SELECT * FROM `form` WHERE `email`='$mail' AND `password`='$pass'";
//     $result=mysql_query($sql);
//     print_r($result);
//     die;
//     $user_info = mysql_fetch_assoc($sql);
//     $result=mysqli_num_rows($user_info);

   
//     // print_r($user_info);
//     // die;

//     if(mysql_num_rows($result)==1){
//         echo "you have login successfully";
//         exit();
//     }
//     else{
//         echo "You enter Incorrect Details";
//         exit();

$mail = $_POST['email'];
$passwords = $_POST['password'];

$sql = "SELECT * FROM loginform where user = '$mail' AND pass = '$passwords' limit 1";

$result=mysqli_query($con, $sql); 


if(mysqli_num_rows($result)==1){
    // echo "You have Login Successfully";
    // exit();
    header("Location: mainpage.php");
    
}else{
    // echo "You have Incorrect Credentials... Go back!";
    header("Location: login.php");
    exit();
}






if(mysqli_query($con, $sql)){
    header("Location: mainpage.php");
}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
<h1 style="background-color:#CCD5E6; text-align:center;" class="my-5">Login Form</h1><hr>
    <div class="container">
       <form action="#" method="POST" class="my-5" style="width:400px;"><br>
         <label class="form-label">Email</label>
         <input type="email" name="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required><br>

         <label class="form-label">Password</label>
         <input type="password" name="password" class="form-control" placeholder="Enter your Password" autocomplete="off" required><br>

         <input type="submit" name="submit" class="btn btn-primary">
       </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>

