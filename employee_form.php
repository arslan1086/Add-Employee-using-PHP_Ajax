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
  <h1 style="background-color:#CCD5E6; text-align:center;" class="my-5">Add Employee</h1><hr>

  <div class="container">
  <form>
  <div class="mb-3 form-group my-5">
    <label class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" autocomplete="off" >
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" autocomplete="off" >
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Mobile number</label>
    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter your Mobile Number" autocomplete="off" >
  </div>
  <div class="mb-3 form-group">
    <label class="form-label">Company</label>
    <input type="text" name="company" id="company" class="form-control" placeholder="Enter your Company Name" autocomplete="off" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    // // Load Table Records
    // function loadTable(){
    //   $.ajax({
    //     url : "ajax-load.php",
    //     type : "POST",
    //     success : function(data){
    //       $("#table-data").html(data);
    //     }
    //   });
    // }
    // loadTable(); // Load Table Records on Page Load

    // Insert New Records
    $('#loginform').submit(function(e) {
        e.preventDefault();

      var fname = $("#name").val();
      var femail = $("#email").val();
      var fmobile = $("#mobile").val();
      var fcompany = $("#company").val();
      console.log('Ahtisham');
      console.log(fname);

        $.ajax({
            type: "POST",
            url: 'create_employee.php',
            // data: $(this).serialize(),
            data : {name: fname, email: email, mobile: fmobile, company: fcompany},
            success: function(response)
            {
              console.log('Success');
            console.log(data);
           }
       });
     }); -->


     <script>
      $(function () {
        $('form').bind('submit', function () {
          var fname = $("#name").val();
          var femail = $("#email").val();
          var fmobile = $("#mobile").val();
          var fcompany = $("#company").val();
          $.ajax({
            type: 'post',
            url: 'insert_employee.php',
            data : {name: fname, email: femail, mobile: fmobile, company: fcompany},
            success: function () {
              swal({
                  title: "Great Job!",
                  text: "Your form is Submitted!",
                  type: "success"
              }).then(function() {
                  window.location = "display.php";
              });
            }
          });
          return false;
        });
      });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

  </div>
</body>
</html>