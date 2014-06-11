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
    <link rel="stylesheet" type="text/css" href="/CustomCar/css/Login.css"/>   
  </head>

  <body>
   

    <div class="mainBodyContent">
       <form action="finishRegister.php" method="POST">
        <p>
       	<label class="Label" for="userName">UserName: </label>
        <input class="Input" type="text" name="userName" id="userName"/><br/>
       	</p>

        <p>
        <label class="Label" for="password">Password: </label>
        <input class="Input" type="password" name="password" id="password"/><br/>
       	</p>

       	<p>
        <label class="Label" for="password">Confirm Password: </label>
        <input class="Input" type="password" name="password2" id="password2"/><br/>
       	</p>
        <input type="submit" value="Register"/>
       </form>
    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>