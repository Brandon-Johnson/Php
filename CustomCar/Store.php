<!DOCTYPE html>

<html>
  <head>
    <title>CustomCars</title>
  
    <link rel="stylesheet" type="text/css" href="/CustomCar/css/Store.css"/>
  </head>

<body>
<?php include 'Modules/Template.php' ?>

<div class="mainBodyContent">
<?php

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

echo "<div class=\"itemContainer\">";
foreach ($db->query("SELECT itemName, price, picture, description FROM items") as $row)
{
  echo "<div class=\"item\">";
  
  echo $row['itemName'];

  echo "</div>";
}
echo "</div>";

 ?>
  </div>

  </body>
</html>