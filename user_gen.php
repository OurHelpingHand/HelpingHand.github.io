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
 <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<?php include"style.css" ?>

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
  <div class="main-div">
      	
        <h1 class= "py-5"> List of all General Physician  </h1>

        


        <div class = "center-div" style="overflow-x:auto;">
           <div class="table-responsive">
           <table id="customers" class="table table-bordered">
               
                  <thead>
                    
                      <tr>
                      
                        <th>Hospital</th>
                        <th>Doctor</th>
                        <th>Degree</th>
                        <th>Appointment</th>
                       
                      </tr>

                  </thead>
                  <tbody id="mytable">
<?php

$con = mysqli_connect('localhost','root','','registration');

$selectquery = " select * from doctors where department = 'general'";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query))
{
?>
                        
                         <tr>
                           
                            <td><?php echo $res['hospital']; ?></td>
                            <td><?php echo $res['doctor']; ?></td>
                            <td><?php echo $res['degree']; ?></td>
                            <td><?php echo $res['appoint']; ?></td>
                            
                        </tr>
<?php

}
?>
                       	
                       </tbody> 
                	</table>

                </div>
              

             </div>


      </div>

</div>

  </body>

 

</html>