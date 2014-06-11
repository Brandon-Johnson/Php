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

$userId = $db->prepare("SELECT id FROM users WHERE username = '$userName' AND password = 'pass'");
echo $userId;
?>