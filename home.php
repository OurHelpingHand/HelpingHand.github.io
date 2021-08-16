<?php
session_start();
?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <?php include "style.css" ?>
  
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




  <?php
if(isset($_SESSION['username']))
{
  ?>
  <div class="container">
  
  <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> You are logged in.
    </div>
  </div>  
  <?php
  }
 
  
 if(isset($_SESSION['no']))
{
  ?>
  <div class="container">
  
  <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Oops!</strong> Wrong username or password.
    </div>
  </div>  
  <?php
  }
 
  ?>
  <?php
  if(isset($_SESSION['regname']))
{
  ?>
  <div class="container">
  
  <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> You are successfully registered.
    </div>
  </div>  
  <?php
 
     unset($_SESSION['regname']);

  }
  
?>  

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
        <?php
        if(isset($_SESSION['username']))
          {
        ?>

        <li class="nav-item">
      <div class="container">
      <a class="btn btn-success" href="logout.php" role="button">Log Out</a> 
      </div>
      </li>
        
<?php
}
else
{
?>
<li class="nav-item">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Log In
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal"  >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content col-sm-9 modal_form ">
     
        
      <div class="container">
<div class="row">

<div class="login_form">
<img src="images/cc19.png" class ="logo img-fluid" >
<form action="login1.php" method="post" class="needs-validation" novalidate>
  
  <div class="form-group py-3">
    <label for="uname" class="label_text"><i class="fa fa-user" style="color:blue"></i> User Name :</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter User Name" name="uname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group ">
    <label for="pwd" class="label_text"><i class="fa fa-expeditedssl" style="color:blue"></i> Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
 <div class="py-3"> <button type="submit" class="form_btn btn btn-success ">Log In</button><div>

 <p><br>New User ?<a href="reg_form.php" > Sign Up</a> Here</p>

</form>
</div>
</div>





</div>
</div>
</div>
</div>
</div>
</div>
</li>
      <?php
}
?>

    </ul>
  </div>  

  

</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cd1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cd2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cd3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<footer>

<p class="p-3 bg-dark text-white text-center">@SudiptaSarkarManagement</p>

</footer>

</body>
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
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</html>