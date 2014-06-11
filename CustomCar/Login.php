<!DOCTYPE html>
<html>
  <head>
    <title>Custom Cars</title>   
  </head>

  <body>
   

    <div class="mainBodyContent">
       <form action="validate.php" method="POST">
       	<label for="userName">UserName: </label>
       	<input type="text" name="userName" id="userName"/>
       	<label for="password">Password: </label>
       	<input type="password" name="password" id="password"/>
       	<input type="submit" value="Login"/>
       </form>
    </div>  
     <?php include 'Modules/Template.php' ?>
  </body>

</html>