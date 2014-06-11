<?php
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

foreach ($db->query("SELECT id FROM user WHERE username = '$userName' AND password = '$pass'") as $row)
	$row['id'];

if (isset($row['id']))
{
	echo "Valid";
	$_SESSION['userId'] = $row['id'];
	header("Home.php");
	die();
}
else
{
	$_COOKIE["invalid"] = true;
	header("Login.php");
	die();
}
?>