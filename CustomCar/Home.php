<?php
  if (!isset($_SESSION['userId']))
  {
    header("Location:Login.php");
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

    <div class="mainBodyContent">

    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>