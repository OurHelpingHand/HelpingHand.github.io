<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 30px;
      }
    </style>
  </head>
  <body>

    <div class="div1">

      <?php
      session_start();

      $con = mysqli_connect('localhost','root','','registration');

      $sql="select adhar from patient";
      $query=mysqli_query($con,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['adhar'] ; ?>" width="1260" height="600">
    <?php
      }

      ?>

    </div>

  </body>
</html>