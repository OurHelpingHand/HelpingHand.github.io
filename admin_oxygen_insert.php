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
  <h2 class= "py-5">Oxygen Information Insert</h2>
  <p class= "py-1">Insert your information</p>
 
  <form method="post" class="needs-validation" novalidate>
    <div class="form-group">

    <?php


$con = mysqli_connect('localhost','root','','registration');

if(isset($_POST['submit']))
{

$name = $_POST['hospital'];
$cylinder = $_POST['cylinder_no'];
$rate = $_POST['rate'];     




$reg= "insert into oxygen(hospital,cylinder_no,rate) values('$name','$cylinder','$rate')";
mysqli_query($con,$reg);
header('location:admin_oxygen.php') ;
   
}
?>

      <label for="hospital">hospital Name :</label>
      <input type="text" class="form-control" id="hospital" placeholder="Enter hospital Name" name="hospital"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    
     <div class="form-group">
      <label for="cylinder_no">Cylinder No :</label>
      <input type="text" class="form-control" id="cylinder_no" placeholder="Enter Open TIme" name="cylinder_no"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group">
      <label for="rate">Rate :</label>
      <input type="text" class="form-control" id="rate" placeholder="Enter Close TIme" name="rate" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <button type = "submit" class = "btnregister , btn btn-success" name = "submit"> INSERT </button>
     
     
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