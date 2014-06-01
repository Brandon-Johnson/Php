<!DOCTYPE html>

<html>
  <head>
    <title>My Home Page</title>
  
    <link rel="stylesheet" type="text/css" href="/css/homepage.css"/>
    <link rel="stylesheet" type="text/css" href="/css/SqlHome.css"/>
  </head>

<body>
  <?php include 'modules/navigation.php' ?>

 <?php

echo "<div id=\"main\">";
try
{
  $user = "php";
  $password = "php";
  $db = new PDO("mysql:host=127.13.4.130;dbname=php", $user, $password);
}
catch (PDOException $ex)
{
  echo "Error!: " . $ex->getMessage();
  die();
}

foreach ($db->query("SELECT username, password FROM user") as $row)
{
  echo "user: " . $row['username'];
  echo " password: " . $row['password'];
  echo "<br />";
}
echo "</div>";

 ?>

  

  </body>
</html>