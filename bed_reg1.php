<?php

session_start();

$con = mysqli_connect('localhost','root','','registration');



if (isset($_POST['submit'])) {
  $pdf=rand(1000,10000)."-".$_FILES['pdf']['name'];
  $pdf_type=$_FILES['pdf']['type'];
  $pdf_size=$_FILES['pdf']['size'];
  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
  $pdf_store="pdf/".$pdf;

  move_uploaded_file($pdf_tem_loc,$pdf_store);

 $f_name = $_POST['f_name'];
 $l_name = $_POST['l_name'];
 $dob =  $dob = date('Y-m-d', strtotime($_POST['dob']));
 $age = $_POST['age'];     
 $gender =  $_POST['gender'];
 $address = $_POST['address'];
 $police = $_POST['police'];
 $pin = $_POST['pin'];


 $reg= "insert into patient(f_name,l_name,dob,age,gender,address,police,pin,adhar) values('$f_name','$l_name','$dob','$age','$gender','$address','$police','$pin','$pdf')";
 mysqli_query($con,$reg);
 
header('location:bed_reg_success.php');

 
}
?>
   