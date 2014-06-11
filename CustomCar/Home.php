<?php
  session_start();
  unset($_COOKIE['sp']);
  unset($_COOKIE['taken']);
  unset($_COOKIE['CoolBeans']);
  if (!isset($_SESSION['userId']))
  {
    header("Location:Login.php");
    die();
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   <?php
    
  

  ?>

    <div class="mainBodyContent">

    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>