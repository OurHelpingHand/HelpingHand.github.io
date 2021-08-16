<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 91vh;
  }

.aboutimg{
 width: 100%;
height: 250px!important;
}
  </style>


</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Helping Hand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>    
    </ul>
  </div> 
</nav>


<div class="container">
  <h2 class= "py-5">Oxygen Update</h2>
  <p class= "py-1">Update your information</p>
 
  <form  method="post" class="needs-validation" novalidate>
    <div class="form-group">

    <?php

$con = mysqli_connect('localhost','root','','registration');

$ids = $_GET['oxy_id'];
$showquery = "select * from oxygen where oxy_id = '$ids'";
$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);


if(isset($_POST['submit']))
{

$idupdate = $_GET['oxy_id'];

$name = $_POST['hospital'];
$cylinder = $_POST['cylinder_no'];
$rate = $_POST['rate'];     





    $reg= "update oxygen set hospital='$name',cylinder_no='$cylinder',rate='$rate'  where oxy_id = '$idupdate' ";
    mysqli_query($con,$reg);
    header('location:admin_oxygen.php');
   

}
?>



      <label for="hospital">Hospital Name :</label>
      <input type="text" class="form-control" id="hospital" placeholder="Enter hospital Name" name="hospital" value="<?php echo $arrdata['hospital']; ?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


     <div class="form-group">
      <label for="cylinder_no">cylinder_no :</label>
      <input type="text" class="form-control" id="cylinder_no" placeholder="Enter cylinder_no" name="cylinder_no" value="<?php echo $arrdata['cylinder_no']; ?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group">
      <label for="rate">rate :</label>
      <input type="text" class="form-control" id="rate" placeholder="Enter close Station" name="rate" value="<?php echo $arrdata['rate']; ?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    

   
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
     <button type = "submit" class = "btnregister , btn btn-success" name = "submit"> UPDATE </button>
     
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
   

<footer class="py-3">

<p class="p-3 bg-dark text-white text-center ">@SudiptaSarkarManagement</p>

</footer>

</body>
</html>