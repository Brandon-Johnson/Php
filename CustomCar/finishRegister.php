<?php
  session_start();
  if (!isset($_SESSION['userId']))
  {
    header("Location:Login.php");
    die();
  }
  

$userName = $_POST['userName'];
$pass = $_POST['password'];

if ($_POST['password'] != $_POST['password2'])
{
setcookie('sp', true);
header("Location:Register.php");
die();
}

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

foreach ($db->query("SELECT id FROM user WHERE username = '$userName'") as $row)
	$row['id'];

if (isset($row['id']))
{
	setcookie('taken', true);
	header("Location:Register.php");
	die();
}
else
{
	unset($_COOKIE['sp']);
	unset($_COOKIE['taken']);

	$db->query("INSERT INTO `user` (username, password) Values ('$userName', '$pass')");
	setcookie('CoolBeans', true);
	header("Location:Login.php");
	die();
}
?>