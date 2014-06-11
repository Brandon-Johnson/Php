<!DOCTYPE html>

<html>
  <head>
    <title>CustomCars</title>
  
    <link rel="stylesheet" type="text/css" href="/CustomCar/css/Item.css"
  </head>

<body>


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


foreach ($db->query("SELECT itemName, price, picture, description FROM items WHERE id=" . $_GET['itemId']) as $row)
{
  echo "<div class=\"item\">";

  echo "<div class=\"itemHeader\">";
  echo $row['itemName'];
  echo "</div>";
  
  

  echo "<div id=\"left\">";
  echo "<div class=\"itemImage\">";
  echo "<img src=\"" . $row['picture'] . "\"/>";
  echo "</div>";

  echo "<div class=\"itemPrice\">";
  echo "<h3> Price: $" . $row['price'] . "</h3>";
  echo "</div>";

  echo "<div class=\"itemDescription\">";
  echo "<h3>Description</h3>";
  echo $row['description'];
  echo "</div>";

  echo "<br />";
  echo "</div>";

  echo "<div id=\"reviewContainer\">";
  foreach ($db->query("SELECT review , userId FROM review WHERE itemId=" . $_GET['itemId']) as $table)
  {
    echo "<div class=\"reviews\">";
    foreach ($db->query("SELECT username FROM user WHERE id=" . $table['userId']) as $user)
    {
      echo $user['username'];
    }
    echo "<br/>";
    echo $table['review'];
    echo "<br/><br/>";
    echo "</div>";
  }
  echo "</div>";
  echo "</div>";
}


 ?>
</div>


<?php include 'Modules/Template.php' ?>
  </body>
</html>