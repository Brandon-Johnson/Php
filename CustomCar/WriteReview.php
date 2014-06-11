<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

 <div class="mainBodyContent">
   <form method="POST" action="ReviewSubmit.php">
   		Write Review<br/>
   		<textarea rows="20" cols="100" name="theReview">Write Review Here</textarea>
   		</br>
   		<input type="submit" value="submitReview"/>
   	</form>

     


     <?php
     	echo $_COOKIE["itemId"];
     ?>
 </div>
     <?php include 'Modules/Template.php' ?>
  </body>

</html>