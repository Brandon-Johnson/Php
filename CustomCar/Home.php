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
     <link rel="stylesheet" type="text/css" href="/CustomCar/css/Login.css"/> 
  </head>

  <body>
    <div class="mainBodyContent">
      <div class="message">Welcome to Custom Cars</div>
    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>