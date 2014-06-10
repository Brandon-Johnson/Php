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

echo "<div class=\"itemContainer\">\n";
foreach ($db->query("SELECT id, itemName, price, description FROM items") as $row)
{
  echo "\t<div class=\"item\">\n";
  echo "\t\t<a href=\"Item.php?itemId=" . $row['id'] . "\">\n\t\t\t";
  echo $row['itemName'];
  echo "\t\t</a>\n";

  echo "\t</div>\n";
}
echo "</div>";

 ?>
  </div>

  </body>
</html>