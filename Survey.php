<?php
  session_start();
  if(isset($_SESSION['submitted']))
  {
    header('Location: Results.php');
    die();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Survey</title>
    <link rel="stylesheet" type="text/css" href="/css/survey.css"/>
  </head>

  <body>
    <?php include 'modules/navigation.php' ?>

    <div id="Survey">
      <h1>Survey</h1>
      <form action="Results.php" method="post">
        <label for="os"><h2>Favorite Operating System</h2></lable>
        <input type="radio" name="os" value="windows">Windows</input><br/>
        <input type="radio" name="os" value="mac">Mac OSx</input><br/>
        <input type="radio" name="os" value="linux">Linux</input><br/>

        <label for="movie"><h2>Favorite Movie Genre</h2></label>
        <input type="radio" name="movie" value="comedy">Comedy</input><br/>
        <input type="radio" name="movie" value="action">Action</input><br/>
        <input type="radio" name="movie" value="horror">Horror</input><br/>

        <label for="movie"><h2>Favorite Pizza Topping</h2></label>
        <input type="radio" name="pizza" value="pep">Pepparoni</input><br/>
        <input type="radio" name="pizza" value="bacon">Bacon</input><br/>
        <input type="radio" name="pizza" value="ham">Ham</input><br/>

        <label for="movie"><h2>Major</h2></label>
        <input type="radio" name="major" value="cs">Computer Science</input><br/>
        <input type="radio" name="major" value="cit">CIT</input><br/>
        <input type="radio" name="major" value="we">Web Engineering</input><br/>

        <input type="submit" value="submit" name="submit">
      </form>
      <br/>
      <a href="Results.php">View Results</a>
    </div>
  </body>

</html>