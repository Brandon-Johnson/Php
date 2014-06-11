<?php
  session_start();
  if (!isset($_SESSION['userId']))
  {
    header("Location:Login.php");
    die();
  }
  setcookie("sp", "", time()-3600);
  setcookie("taken", "", time()-3600);
  setcookie("CoolBeans", "", time()-3600);
  setcookie("invalid", "", time()-3600);
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
    <div class="mainBodyContent">
    <?php

    ?>
    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>