<?php
echo $_POST['userName'];
echo $_POST['password'];
$userName = $_POST['userName'];
$pass = $_POST['password'];

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

echo $userName;
echo $pass;
echo "<br/>";
echo "SELECT id FROM user WHERE username = '$userName' AND password = 'pass'";
$userId = $db->query("SELECT id FROM user WHERE username = '$userName' AND password = 'pass'");
echo $userId;
?>