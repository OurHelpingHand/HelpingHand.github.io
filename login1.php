<?php

session_start();

$con = mysqli_connect('localhost','root','','registration');

$admin = 'Sudipta Sarkar';
$admin_pass = 'deep';
$name = $_POST['uname'];
$pass = $_POST['pwd'];
$no = 'no';


$s = "select * from user_reg where uname = '$name' && pwd = '$pass' ";

$result = mysqli_query($con,$s);



$num = mysqli_num_rows($result);



if(($name==$admin)&&($pass==$admin_pass))
{
    
    header('location:admin.php');

   
}

else if($num==1)
{
    $_SESSION['username'] = $name;
    header('location:home.php');

}

else
{
    $_SESSION['no'] = $no;
    header('location:home.php');
   
}
?> 