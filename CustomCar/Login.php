<?php
  session_start();
  if (isset($_SESSION['userId']))
  {
    header("Location:Home.php");
    die();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

    <div class="mainBodyContent">
       <form action="validate.php" method="POST">
       	<label for="userName">UserName: </label>
       	<input type="text" name="userName" id="userName"/><br/>
       	<label for="password">Password: </label>
       	<input type="password" name="password" id="password"/><br/>
       	<input type="submit" value="Login"/>
       </form>
    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>