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
   		foreach ($db->query("SELECT itemName FROM items WHERE id=" . $_GET['itemId']) as $row)
   			echo $row['itemName'];
   		?>
   		<br/>
   		<textarea rows="20" cols="100" name="theReview">Write Review Here</textarea>
   		</br>
   		<input type="submit" value="submitReview"/>
   	</form>
 </div>
     <?php include 'Modules/Template.php' ?>
  </body>

</html>