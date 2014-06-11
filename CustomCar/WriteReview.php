<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

 <div class="mainBodyContent">
   <form method="POST" action="ReviewSubmit.php">
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
   		<br/>
   		<textarea rows="20" cols="100" name="theReview">Write Review Here</textarea>
   		</br>
   		<input type="submit" value="Submit Review"/>
   	</form>
 </div>
     <?php include 'Modules/Template.php' ?>
  </body>

</html>