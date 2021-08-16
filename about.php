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

<div class="jumbotron">
  <h1>Helpin Hand</h1>
  <p>We are always at your service</p>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">About Us</h2>
</div>
<div class="container fluid">
<div class ="row">
       <div class="col-lg-6 col-md-6 col-12">
          <img src="images/cc4.jpg" class="img-fluid">
</div>

<div class="col-lg-6 col-md-6 col-12">
<h2 class=display-4>We are Helping Hand.</h2>
<p class="py-3"> Thinking of you as you recover, Jennifer. Just a note to say you're in my thoughts and on my heart.
Feel better, friend! Sending my deepest love, Riley.
It's really icky that you've been sicky. ...
Wishing you a speedy recovery, Mark � in record time!
Sending you cheer and wishing you brighter days ahead, Mya!</p>
<a href="about.php" class="btn btn-success"> check more</a>
</div>
</div>
</section>



<footer>

<p class="p-3 bg-dark text-white text-center">@SudiptaSarkarManagement</p>

</footer>


</body>

</html>