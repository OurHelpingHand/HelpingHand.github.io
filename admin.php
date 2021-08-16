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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 <?php include "admin_style.css" ?>

</head>
<body>

<!-- Vertical navbar -->
<div class="vertical-nav bg-dark" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-dark">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="images/cc21.png" alt="..." width="60" height="60" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0 text-light">ADMIN</h4>
        <p class="font-weight-normal text-light mb-0 py-2">Helping Hand</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-dark mb-0">
    <li class="nav-item">
      <a href="admin.php" class="nav-link text-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
    </li>
    <li class="nav-item">
      <a href="about.php" class="nav-link text-light">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                About Us
            </a>
    </li>
    <li class="nav-item">
      <a href="services.php" class="nav-link text-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Services
            </a>
    </li>
    <li class="nav-item">
      <a href="logout.php" class="nav-link text-light">
                <i class="fa fa-user mr-3 text-primary fa-fw"  ></i>
                Log Out
            </a>
    </li>
  </ul>

 
</div>
<!-- End vertical navbar -->




<div class = "page-content">
<div class ="py-5">
<div class="container">
<div class="responsive">
  <div class="gallery">
    <a href="admin_user.php">
      <img src="images/cc15.jpg" alt="Forest" width="400" height="400">
    </a>
    <div class="desc"><a href="admin_user.php" class="btn btn-primary" role="button">User</a></div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="admin_bed.php">
      <img src="images/cc16.jpg" alt="Forest" width="400" height="400">
    </a>
    <div class="desc"><a href="admin_bed.php" class="btn btn-primary" role="button">Bed</a></div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="admin_oxygen.php">
      <img src="images/cc17.jpg" alt="Forest" width="400" height="400">
    </a>
    <div class="desc"><a href="admin_oxygen.php" class="btn btn-primary" role="button">Oxygen</a></div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="#">
      <img src="images/cc20.jpg" alt="Forest" width="400" height="400">
    </a>
    <div class="desc"><a href="#" class="btn btn-primary" role="button">Tests</a></div>
    
  </div>
</div>


<div class="responsive py-5">
  <div class="gallery">
    <a href="#">
      <img src="images/cc19.jpg" alt="Forest" width="400" height="400">
    </a>
    <div class="desc"><a href="#" class="btn btn-primary" role="button">Reports</a></div>
    
  </div>
</div>


<div class="responsive py-5">
  <div class="gallery">
    <a href="admin_doctor.php">
      <img src="images/cc18.jpg" alt="Forest" width="400" height="400">
    </a>
    <div class="desc"><a href="admin_doctor.php" class="btn btn-primary" role="button">Doctors</a></div>
    
  </div>
</div>

    
  </div>
</div>

  </div>

</body>

<script>
$(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>

</html>
