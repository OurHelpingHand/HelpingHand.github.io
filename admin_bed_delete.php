<?php

$con = mysqli_connect('localhost','root','','registration');
$id = $_GET['bed_id'];
$reg= "delete from beds where bed_id = '$id' ";
$query = mysqli_query($con,$reg);
header('location:admin_bed.php');
   
?>