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
  <div class="container">
      <div class="main-div">

     
            
             <h1 class= "py-5"> List of Oxygen  </h1>

             <p>Type any data related you want to find ....</p> 
             <br> 
             <input class="form-control" id="myInput" type="text" placeholder="Search..">
             <br><br>
      	


             <div class = "center-div" style="overflow-x:auto;">
                <div class="table-responsive">
                	<table id="customers" class="table table-bordered">
                		
                       <thead>
                       	
                           <tr>
                        
                           	<th>I'd</th>
                           	<th>Hospital</th>
                           	<th>Cylinder Number</th>
                           	<th>Rate</th>
                           	<th colspan=2>Operation</th>
                           </tr>

                       </thead>
                       <tbody id="myTable">
<?php

$con = mysqli_connect('localhost','root','','registration');

$selectquery = " select * from oxygen ";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query))
{
?>
                         <tr>
                           
                            <td><?php echo $res['oxy_id']; ?></td>
                            <td><?php echo $res['hospital']; ?></td>
                            <td><?php echo $res['cylinder_no']; ?></td>
                            <td><?php echo $res['rate']; ?></td>
                            <td><a href="admin_oxygen_update.php?oxy_id=<?php echo $res['oxy_id']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class='fas fa-edit' style='color:green'></i></a></td>
                            <td><a href="admin_oxygen_delete.php?oxy_id=<?php echo $res['oxy_id']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class='fas fa-trash-alt' style='color:red'></i></td>
                        </tr>
<?php

}
?>
                       	
                       </tbody> 
                	</table>

                </div>
              

             </div>


      </div>
      <div class ="py-5">
      <a href="admin_oxygen_insert.php" class="btn btn-success" role="button">INSERT</a>
</div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


  </body>
  </html>