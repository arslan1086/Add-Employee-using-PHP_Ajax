<?php
include 'connect.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



  <div class="container">
    <button class="btn btn-primary my-5"> <a href="employee_form.php" class="text-light">Add Employee</a></button>
    <button class="btn btn-primary my-5"> <a href="mainpage.php" class="text-light">Main Menu</a></button>
    <button class="btn btn-primary my-5"> <a href="login.php" class="text-light">Go to Login Page</a></button>
  </div> 

<div class="container">
  <table class="table">
  <thead>
    <tr id="table-data">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Company</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
</div>


  
  <tbody>
  <?php
  $sr_no = 1;

  $sql = "Select * from `crud`";
  $result = mysqli_query($con,$sql);

  if($result){

    while($row=mysqli_fetch_assoc($result)){
    
      $id=$row['id'];
      $name=$row['name'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $company=$row['company'];

      echo '<tr>
      <th scope="row">'.$sr_no++.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$company.'</td>

      <td>
        <button class="btn btn-primary"><a href="update_employee.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn delete-btn btn-danger"><a href="delete_employee.php?deleteid='.$id.'" class="text-light">Delete</a></button>
      </td>

    </tr>';

    

    }
  }
  ?> 
  </tbody>
</table>







<script>
 
        jQuery(document).ready('click', '.delete-btn'  , function (e) {
          e.preventDefault();
          var employee_id = jQuery("this").data("id");
          $.ajax({
            type: 'post',
            url: 'delete_employee.php',
            data : {id: employee_id},
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