<?php

$con = mysqli_connect('localhost','root','','registration');
$id = $_GET['uid'];
$reg= "delete from user_reg where uid = '$id' ";
$query = mysqli_query($con,$reg);
header('location:admin_user.php');
   
?>