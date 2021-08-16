<?php

session_start();

$con = mysqli_connect('localhost','root','','registration');

$name = $_POST['uname'];

$pass = $_POST['pwd'];

$no = 'no';

$s = "select * from user_reg where uname = '$name' && pwd = '$pass' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
 

    header('location:reg_form.php');

}

else
{
  $reg= "insert into user_reg(uname,pwd) values('$name','$pass')";

$_SESSION['regname'] = $name ;

mysqli_query($con,$reg);

header('location:home.php') ;
}

/*
switch($_POST['action'])
{
    case 'registration' :
                          $name = $_POST['uname'];
                          $pass = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                          $reg= "insert into user_reg(uname,pwd) values('$name','$pass')";
                          $sql=mysqli_query($con,$reg);
                          if($sql)
                          {
                            $_SESSION['regname'] = $name ;
                            header('location:home.php') ;
                          }
                          break;
    case 'login'        :
                          $name = $_POST['uname'];
                          $pass = $_POST['pwd']; 
                          $s = "select * from user_reg where uname = '$name' "; 
                          $result = mysqli_query($con,$s);
                          if( mysqli_num_rows($result)>0)
                          {
                              while($row=mysqli_fetch_assoc($result))
                              {
                                  if(password_verify($pass,$row['pwd']))
                                  {
                                      $_SESSION['username'] = $name;
                                      header('location:home.php') ;
                                  }
                                  else
                                  {
                                    echo 0;
                                  }
                              }
                          } 
                          else
                          {
                            header('location:home.php') ;
                          }                   

}
*/


?>