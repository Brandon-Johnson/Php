<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

    <div class="mainBodyContent">
        mainbody
    </div>  
     <?php include 'Modules/Template.php' ?>

     <?php
     if (isset($_POST['itemId']))
     	echo $_POST['itemId'];
     ?>
  </body>

</html>