<?php
include 'connect.php';
$id=$_GET['updateid'];
$query = "Select * from `crud` WHERE id='$id'";
$result = mysqli_query($con,$query);

if($result){

  while($row=mysqli_fetch_assoc($result)){
    $data = $row;
 
  }
}
else{
  echo "id are not exist";
}



if(isset($_POST['id'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $company=$_POST['company'];
  
  // Querry select:
  $sql="update `crud` set id='$id', name='$name', email='$email', mobile='$mobile', company='$company'
  where id = $id";
  
  $result=mysqli_query($con,$sql);
  if($result){
      echo "Data Inserted Successfully";
      // header('location:display_employee.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employee Table</title>
</head>
<body>
<div class="container">
  <form method="post">
  <input type="hidden" value="<?php echo $data['id'] ?>" name="e_id" id="e_id" class="form-control" placeholder="Enter your name" autocomplete="off" required>

  <div class="mb-3 form-group my-5">
    <label class="form-label">Name</label>
    <input type="text" value="<?php echo $data['name'] ?>" name="name" id="name" class="form-control" placeholder="Enter your name" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Email</label>
    <input type="email" value="<?php echo $data['email']?>" name="email" id="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Mobile number</label>
    <input type="text" value="<?php echo $data['mobile'] ?>" name="mobile" id="mobile" class="form-control" placeholder="Enter your Mobile Number" autocomplete="off" required>
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Company</label>
    <input type="text" value="<?php echo $data['company']?>" name="company" id="company" class="form-control" placeholder="Enter your Company Name" autocomplete="off" required>
  </div>
  <button type="submit" id="update_form_submit" class="btn btn-primary" name="submit">Update</button>
</form>









<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
 
        jQuery(document).on('click', '#update_form_submit'  , function (e) {
          e.preventDefault();
          var e_id = jQuery("#e_id").val();
          var fname = jQuery("#name").val();
          var femail = jQuery("#email").val();
          var fmobile = jQuery("#mobile").val();
          var fcompany = jQuery("#company").val();
          jQuery.ajax({
            type: 'post',
            url: 'update_employee.php',
            data : {id: e_id,name: fname, email: femail, mobile: fmobile, company: fcompany},
            success: function (response) {
              console.log(response);
              swal({
                  title: "Great Job!",
                  text: "Your form is Submitted!",
                  type: "success"
              })
            }
          });
          return false;
        });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


    </div>

</body>
</html>