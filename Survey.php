<!DOCTYPE html>

<html>
  <head>
    <title>Survey</title>
  
    <link rel="stylesheet" type="text/css" href="/css/homepage.css"/>
  </head>

  <body>
     <?php include 'modules/navigation.php' ?>


     <form id="Survey" method="POST"  action="Results.php">
       What Super Power Would You Want:
       <input type="radio" name="Super-Power" value="Invisibility">Invisibility<br/>
       <input type="radio" name="Super-Power" value="Flying">Flying<br/>
       <input type="radio" name="Super-Power" value="SuperStrength">Super Strength<br/>
       

       What Operating System:
       <input type="radio" name="OperatingSystem" value="Windows">Windows<br/>
       <input type="radio" name="OperatingSystem" value="Linux">Linux<br/>
       <input type="radio" name="OperatingSystem" value="Mac">Mac<br/>


       Pizza Topping
       <input type="radio" name="PizzaTopping" value="Pepparoni">Pepparoni<br/>
       <input type="radio" name="PizzaTopping" value="Bacon">Bacon<br/>
       <input type="radio" name="PizzaTopping" value="Sausage">Sausage<br/>

       Major
       <input type="radio" name="Major" value="Computer Science">Computer Science<br/>
       <input type="radio" name="Major" value="Web Design">Web Design<br/>
       <input type="radio" name="Major" value="CIT">CIT<br/>

       <input type="submit" value="Submit form" />
     </form>

  </body>
</html>