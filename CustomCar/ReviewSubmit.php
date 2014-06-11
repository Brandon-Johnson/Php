<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
	echo $_POST["theReview"] . "<br/>";
    echo $_COOKIE["itemId"] . "<br/>";
    echo "INSERT INTO review (review, itemId, userId) VALUES (" . $_POST["theReview"] . ", " . $_COOKIE["itemId"]  . ", 1);";

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
	$db->query("INSERT INTO review (review, itemId, userId) VALUES (" . $_POST["theReview"] . ", " . $_COOKIE["itemId"]  . ", 1);");

    header("location:Item.php?" . $_COOKIE['itemId']);
    die();
?>

</body>
</html>