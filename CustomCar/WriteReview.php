<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>  
    <link rel="stylesheet" type="text/css" href="/CustomCar/css/WriteReview.css" 
  </head>

  <body>
   

 <div class="mainBodyContent">
   <form method="POST" action="ReviewSubmit.php">
   	<div id="reviewHeader">
   		Write Review For 
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
   		foreach ($db->query("SELECT itemName FROM items WHERE id=" . $_COOKIE['itemId']) as $row)
   			echo $row['itemName'];
   		?>
   	</div>
   		<br/>
   		<textarea id="theReviewField" rows="20" cols="100" name="theReview">Write Review Here</textarea>
   		</br>
   		<input type="submit" value="Submit Review"/>
   	</form>
 </div>
     <?php include 'Modules/Template.php' ?>
  </body>

</html>