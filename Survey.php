<?php
  session_start();
  if($_SESSION['submitted'] == true)
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

    <h1>Survey</h1>
    <div id="Survey">
      <form action="Results.php" method="POST">
        <label for="os">Favorite Operating System</lable><br/>
        <input type="radio" name="os" value="windows">Windows</input><br/>
        <input type="radio" name="os" value="mac">Mac OSx</input><br/>
        <input type="radio" name="os" value="linux">Linux</input><br/>

        <label for="movie">Favorite Movie Genre</label></br>
        <input type="radio" name="movie" value="comedy">Comedy</input><br/>
        <input type="radio" name="movie" value="action">Action</input><br/>
        <input type="radio" name="movie" value="horror">Horror</input><br/>

        <label for="movie">Favorite Pizza Topping</label></br>
        <input type="radio" name="pizza" value="pep">Pepparoni</input><br/>
        <input type="radio" name="pizza" value="bacon">Bacon</input><br/>
        <input type="radio" name="pizza" value="ham">Ham</input><br/>

        <label for="movie">Major</label></br>
        <input type="radio" name="major" value="cs">Computer Science</input><br/>
        <input type="radio" name="major" value="cit">CIT</input><br/>
        <input type="radio" name="major" value="we">Web Engineering</input><br/>

        <input type="submit" value="submit" name="submit">
      </form>
      <a href="Results.php">View Results</a>
    </div>
  </body>

</html>