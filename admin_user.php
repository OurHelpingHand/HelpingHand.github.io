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
      	
             <h1 class= "py-5"> List of all user  </h1>
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
                           	<th>Name</th>
                           	<th>Password</th>
                           	<th colspan=2>Operation</th>
                           </tr>

                       </thead>
                       <tbody id="myTable">
<?php

$con = mysqli_connect('localhost','root','','registration');

$selectquery = " select * from user_reg ";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query))
{
?>
                         <tr>
                            <td><?php echo $res['uid']; ?></td>
                            <td><?php echo $res['uname']; ?></td>
                            <td><?php echo $res['pwd']; ?></td>
                            <td><a href="admin_user_update.php?uid=<?php echo $res['uid']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class='fas fa-edit' style='color:green'></i></a></td>
                            <td><a href="admin_user_delete.php?uid=<?php echo $res['uid']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class='fas fa-trash-alt' style='color:red'></i></td>
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