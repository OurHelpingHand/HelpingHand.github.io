<?php

$con = mysqli_connect('localhost','root','','registration');
$id = $_GET['oxy_id'];
$reg= "delete from oxygen where oxy_id = '$id' ";
$query = mysqli_query($con,$reg);
header('location:admin_oxygen.php');
   
?>