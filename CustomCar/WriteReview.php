<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

    <div class="mainBodyContent">
        mainbody
    </div>  

     <?php
     if (isset($_COOKIE['itemId']))
     	echo $_COOKIE['itemId'];
     ?>
  </body>

</html>