<?php

$con = mysqli_connect('localhost','root','','registration');
$id = $_GET['doc_id'];
$reg= "delete from doctors where doc_id = '$id' ";
$query = mysqli_query($con,$reg);
header('location:admin_doctor.php');
   
?>