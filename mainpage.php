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
    <title>Main Menu</title>
</head>
<body>
<h1 style="background-color:#CCD5E6; text-align:center;" class="my-5">Main Menu</h1><hr>

<div class="container-fluid">
    <div class="container" style="text-align:center;">


      <div class="row lg-6">
        <h1 style="text-align:center">Employees</h1>
        <button class="btn btn-primary my-3"> <a href="display_employee.php" class="text-light">View Employee Table</a></button>
        <button class="btn btn-primary"> <a href="employee_form.php" class="text-light">Add Employee</a></button>
      </div>


      <div class="row lg-6">
        <h1 style="text-align:center" class="my-5">Company</h1>
        <button class="btn btn-primary my-3"> <a href="display_company.php" class="text-light">View Company Table</a></button>
        <button class="btn btn-primary"> <a href="company_form.php" class="text-light">Add Company</a></button>
      </div>


    </div> 
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>