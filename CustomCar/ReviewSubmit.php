<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
	echo $_POST["theReview"] . "<br/>";
    echo $_COOKIE["itemId"] . "<br/>";
   

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
	$review = $_POST["theReview"];
	$itemId = $_COOKIE["itemId"];
	$userId = 1;
	$db->query("INSERT INTO `review` (review, itemId, userId) Values ('$review', '$itemId', '$userId')");
	echo "INSERT INTO `review` (review, itemId, userId) Values ('$review', '$itemId', '$userId')";
    header("location:Item.php?itemId=" . $_COOKIE['itemId']); 
    die();
?>

</body>
</html>