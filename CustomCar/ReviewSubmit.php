<?php
	
	$user = "php";
	$password = "php";
	$db = new mysqli_connect("localhost", $user, $passwpord, "php");
	
 	if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($db, "INSERT INTO review (review, itemId, userId) VALUES ($_POST['theReview'], $_COOKIE['itemId', 1);");

    mysqli_close($db);

    header("location:Item.php?" . $_COOKIE['itemId']);
    die();
?>