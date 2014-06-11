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

    <div class="message">
      <?php
        if(isset($_COOKIE['invalid']))
        {
          echo "<div class=\"error\">";
          echo "Wrong Username / Password Combination! <br/>";
          echo "</div>";

          setcookie("invalid", "", time()-3600);
        }

        if(isset($_COOKIE['CoolBeans']))
        {
          setcookie("CoolBeans", "", time()-3600);
          echo "Account Registered! <br/>";
        }
          setcookie("sp", "", time()-3600);
           setcookie("taken", "", time()-3600);
           setcookie("CoolBeans", "", time()-3600);
           setcookie("invalid", "", time()-3600);
      ?>
    </div>
  </div>

     <?php include 'Modules/Template.php' ?>
  </body>

</html>