<?php
include 'connect.php';
$id=$_GET['updateid'];
$name=$_GET['updatename'];
$email=$_GET['updateemail'];
$image=$_GET['updateimage'];
$website=$_GET['updatewebsite'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $image=$_POST['image'];
    $website=$_POST['website'];

    // Querry select:
    $sql="update `company` set id='$id', name='$name', email='$email', image='$image', website='$website'
    where id = $id";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data Inserted Successfully";
        header('location:display_company.php');
    }else{
        die(mysqli_error($con));
    }


}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Table</title>
</head>
<body>
    <div class="container">
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Company Table</title>
  </head>
  <body>




  <form method="POST" enctype="multipart/form-data">
  <div class="mb-3 form-group my-5">
    <label class="form-label">Name</label>
    <input type="text" value="<?php echo"$name"?>" name="name" class="form-control" placeholder="Enter your name" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Email</label>
    <input type="email" value="<?php echo"$email"?>" name="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Upload your Logo</label><br>
    <input type="file" value="<?php echo"$image"?>" id="image" name="image">
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Website</label>
    <input type="text" value="<?php echo"$website"?>" name="website" class="form-control" placeholder="Enter your Website URL or Name" autocomplete="off" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   

    </div>
</body>
</html>