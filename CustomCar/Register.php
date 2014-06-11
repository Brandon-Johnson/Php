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

     <div class="message">
      <?php
      echo "<div class=\"error\">";
        if(isset($_COOKIE['sp']))
        {
       	  unset($_COOKIE['sp']);
          echo "Passwords entered did not match! <br/>";
      	}
        if(isset($_COOKIE['taken']))
        {
        	unset($_COOKIE['taken']);
        	echo "Username has already been taken! <br/>";
      	}
          setcookie("sp", "", time()-3600);
          setcookie("taken", "", time()-3600);
          setcookie("CoolBeans", "", time()-3600);
          setcookie("invalid", "", time()-3600);
      echo "</div>";
      ?>
  	</div>
  </div>
     <?php include 'Modules/Template.php' ?>
  </body>

</html>