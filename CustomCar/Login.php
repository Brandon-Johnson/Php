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
       <form action="validate.php" method="POST">
        <p>
       	<label class="Label" for="userName">UserName: </label>
        <input class="Input" type="text" name="userName" id="userName"/><br/>
       	</p>

        <p>
        <label class="Label" for="password">Password: </label>
        <input class="Input" type="password" name="password" id="password"/><br/>
       	</p>
        <input type="submit" value="Login"/>
       </form>
       <a class="Register" href="Register.php">Register</a>
    </div>  

    <div class="error">
      <?php
        if($_COOKIE['sp'])
          echo "Passwords entered did not match! <br/>";
        if($_COOKIE['taken'])
          echo "Username has already been taken! <br/>";
      ?>
    </div>
     <?php include 'Modules/Template.php' ?>
  </body>

</html>