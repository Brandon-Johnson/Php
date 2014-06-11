<?php
  session_start();
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