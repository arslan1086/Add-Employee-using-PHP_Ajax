<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $website = $_POST['website'];
    // Querry select:
    $sql="insert into `company` (name,email,image,website) 
    values('$name','$email','$image','$website')";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data Inserted Successfully";
        header('location:display_company.php');
    }else{
        die(mysqli_error($con));
    }
}
?>








<?php 
// if(isset($_POST['submit']) && isset($_FILE['image'])){
//   echo "<pre>";
//   print_r($_FILE['image']);
//   echo "</pre>";
//   $img_name = $_FILE['image']['name'];
//   $img_size = $_FILE['image']['size'];
//   $tmp_name = $_FILE['image']['tmp_name'];
//   $error = $_FILE['image']['error'];

//   if($error === 0){
//     if($img_size > 125000){
//       $em = "Sorry! Your file is too large.......";
//       header("Location:company.php?error=$em");
//     }else{
//       echo "Not more than 1 MB";
//     }
//   }else{
//     $em = "Unknown error Occured!";
//     header("Location:company.php?error=$em");
//   }

// }else{
//   header("Location:company.php");
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Company Table</title>
</head>
<body>

<h1 style="background-color:#CCD5E6; text-align:center;" class="my-5">Add Company</h1>
<div class="container">
  <form method="POST" enctype="multipart/form-data">
  <div class="mb-3 form-group my-5">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Upload your Logo</label><br>
    <input type="file" id="image" name="image">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Website</label>
    <input type="text" name="website" class="form-control" placeholder="Enter your Website URL or Name" autocomplete="off" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   

    </div>
</body>
</html>