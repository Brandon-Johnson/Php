<?php
session_start();
if (isset($_SESSION["Taken"] == true))
{
   header("Location: Results.php"); 
}

function getData($line)
{
  $array = array();
  $data = explode('|', $line);

  foreach ($data as $i)
  {
    $i = explode(" : ", $i);
    $array[$i[0]] = $i[1];
  }
  return $array;
}

function getString($array)
{
  $items = array();
  foreach ($array as $key => $data)
  {
    $items[] = "$key:$data";
  }
  return implode( '|', $items);
}

if (isset($_POST['Submit']))
{
  $file = fopen("Results.txt", "r+");

  $Super-Power = getData(fgets($file));
  $OperatingSystem = getData(fgets($file));
  $PizzaTopping = getData(fgets($file));
  $Major = getData(fgets($file));
  
  if (key_exists($_POST['Super-Power'], $Super-Power))
  {
    $Super-Power[$_POST['Super-Power']]++;
  }

  if (key_exists($_POST['OperatingSystem'], $OperatingSystem))
  {
    $OperatingSystem[$_POST['OperatingSystem']]++;
  }

  if (key_exists($_POST['PizzaTopping'], $PizzaTopping))
  {
    $PizzaTopping[$_POST['PizzaTopping']]++;
  }

  if (key_exists($_POST['Major'], $Major))
  {
    $Major[$_POST['Major']]++;
  }

  file_put_contents("Results.txt", "")
  $output =  getString($Super-Power);
  $output = .getString($OperatingSystem);
  $output = .getString($PizzaTopping);
  $output = .getString($Major);

  fwrite($file, $output);

  fclose($file);

  $_SESSION['Taken'] = true;

   header("Location: Results.php");
   die();  

}




$title = 'Survey';

$body = <<<HTML
  
    <link rel="stylesheet" type="text/css" href="/css/survey.css"/>

     <form id="Survey" method="POST"  action="">
     <fieldset>
       <legend>What Super Power Would You Want:</legend>
       <input type="radio" name="Super-Power" value="Invisibility">Invisibility<br/>
       <input type="radio" name="Super-Power" value="Flying">Flying<br/>
       <input type="radio" name="Super-Power" value="SuperStrength">Super Strength<br/>
      </fieldset>

      <fieldset>
       <legend>What Operating System:</legend>
       <input type="radio" name="OperatingSystem" value="Windows">Windows<br/>
       <input type="radio" name="OperatingSystem" value="Linux">Linux<br/>
       <input type="radio" name="OperatingSystem" value="Mac">Mac<br/>
      </fieldset>

      <fieldset>
       <legend>Pizza Topping</legend>
       <input type="radio" name="PizzaTopping" value="Pepparoni">Pepparoni<br/>
       <input type="radio" name="PizzaTopping" value="Bacon">Bacon<br/>
       <input type="radio" name="PizzaTopping" value="Sausage">Sausage<br/>
       </fieldset>

      <fieldset>
       <legend>Major</legend>
       <input type="radio" name="Major" value="Computer Science">Computer Science<br/>
       <input type="radio" name="Major" value="Web Design">Web Design<br/>
       <input type="radio" name="Major" value="CIT">CIT<br/>
      </fieldset>

       <input type="submit" value="Submit form" name="Submit"/>
       <a href="Results.php">See Results</a>
     </form>
HTML;
 include 'modules/navigation.php';
 ?>