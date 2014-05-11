<?php
function getData($line)
{
  $array = array();
  $data = explode(" | ", $line);

  foreach ($data as $i)
  {
    $i = explode(" : ", $i);
    $array[$i[0]] = $i[1];
  }
  return $array
}


function getSurvey($title, $array)
{
  $results = '<h2>'.$title.'</h2>';
  $total = 0;

  foreach ($array as $value)
    $total += $value

  foreach ($array as $key => $value)
  {
    $percent = round($value * 100 / $total);
    $results .=" <div style=\"position:relative; margin-top: 10px;\"><div style=\"width: $percent%; height: 40px; background: lavender;\"><p style=\"position: absolute; left: 10px; top: 0px;\"><b>$key</b> ($value votes or $percent%)</p></div></div>";
  }
  return $results;
}

$file = fopen('Results.txt', 'r+');

$Super-Power = getData(fgets($file));
$OperatingSystem = getData(fgets($file));
$PizzaTopping = getData(fgets($file));
$Major = getData(fgets($file));

fclose($file);

$results = getQuestion('Super-Power', $Super-Power);
$results = getQuestion('OperatingSystem', $OperatingSystem);
$results = getQuestion('PizzaTopping', $PizzaTopping);
$results = getQuestion('Major', $Major);

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Results</title>
  
    
  </head>

  <body>
    <?php include 'modules/navigation.php' ?>

    


  </body>
</html>