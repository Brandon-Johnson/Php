<?php
  #read all numbers in
  $filename = "Results.txt";
  $file = fopen($filename, "r");

  
  $windows = fgets($file);
  $mac     = fgets($file);
  $linux   = fgets($file);

  $comedy  = fgets($file);
  $action  = fgets($file);
  $horror  = fgets($file);

  $pep     = fgets($file);
  $bacon   = fgets($file);
  $ham     = fgets($file);

  $cs      = fgets($file);
  $cit     = fgets($file);
  $we      = fgets($file);

  fclose($file);

  if (isset($_POST["submit"]))
  {
    $file = fopen($filename, "w");

    switch($_POST["os"])
    {
      case 'windows':
        (integer)$windows += 1;
        $windows .= "\n";
        break;
      case 'linux':
        (integer)$linux += 1;
        $linux .= "\n";
        break;
      case 'mac':
        (integer)$mac += 1;
        $mac .= "\n";
        break;
    }

    switch($_POST["movie"])
    {
      case 'comedy':
        (integer)$comedy += 1;
        $comedy .= "\n";
        break;
      case 'action':
        (integer)$action+= 1;
        $action .= "\n";
        break;
      case 'horror':
        (integer)$horror += 1;
        $horror .= "\n";
        break;
    }

    switch($_POST["pizza"])
    {
      case 'pep':
        (integer)$pep += 1;
        $pep .= "\n";
        break;
      case 'bacon':
        (integer)$bacon += 1;
        $bacon .= "\n";
        break;
      case 'ham':
        (integer)$ham += 1;
        $ham .= "\n";
        break;
    }

    switch($_POST["major"])
    {
      case 'cs':
        (integer)$cs += 1;
        $cs .= "\n";
        break;
      case 'cit':
        (integer)$cit += 1;
        $cit .= "\n";
        break;
      case 'we':
        (integer)$we += 1;
        $we .= "\n";
        break;
    }

    fwrite($file, $windows);
    fwrite($file, $mac);
    fwrite($file, $linux);

    fwrite($file, $comedy);
    fwrite($file, $action);
    fwrite($file, $horror);

    fwrite($file, $pep);
    fwrite($file, $bacon);
    fwrite($file, $ham);

    fwrite($file, $cs);
    fwrite($file, $cit);
    fwrite($file, $we);

    fclose($file);
    session_start();
    $_SESSION["submitted"] = true;
  }


  $totalOS = $windows + $mac + $linux;
  $totalPizza = $pep + $bacon + $ham;
  $totalMovie = $comedy + $action + +horror;
  $totalMajor = $cs + $cit + $we;

  $windowP = round($windows * 100 / $totalOS);
  $macP = round($mac * 100 / $totalOS);
  $linuxP = round($linux * 100/ $totalOS);

  $pepP = round($pep * 100 / $totalPizza);
  $baconP = round($bacon * 100 / $totalPizza);
  $hamP = round($ham * 100 / $totalPizza);

  $comedyP = round($comedy * 100 / $totalMovie);
  $horrorP = round($horror * 100 / $totalMovie);
  $actionP = round($action * 100 / $totalMovie);

  $csP = round($cs * 100/ $totalMajor) ;
  $citP = round($cit * 100/ $totalMajor) ;
  $weP = round($we * 100 / $totalMajor) ;
?>


<!DOCTYPE html>
<html>
  <head>
  <title>Results</title>
  <?php include 'modules/navigation.php' ?>

  <link rel="stylesheet" type="text/css" href="/css/results.css"/>
  </head>

  <body>
    <div id="header"><h1>Results</h1></div>
    <div id="Table">
      <?php

      echo "<div id=\"labels\">";
      echo "<br/><br/>\n"
      echo "<div>Windows</div>\n";
      echo "<div>Mac OSx</div>\n";
      echo "<div>Linux</div>\n";

      echo "<br/><br/><br/>\n";
      echo "<div>Comedy</div>\n";
      echo "<div>Action</div>\n";
      echo "<div>Horror</div>\n";

      echo "<br/><br/><br/>\n";
      echo "<div>Pepparoni</div>\n";
      echo "<div>Bacon</div>\n";
      echo "<div>Ham</div>\n";

      echo "<br/><br/><br/>\n";
      echo "<div>Comp Sci</div>\n";
      echo "<div>CIT</div>\n";
      echo "<div>Web Design</div>\n";

      echo "</div>\n";

      echo "<div id=\"data\">\n";

      echo "<h3>Operating System</h3>\n";
      echo "<div style=\"position:relative; width:$windowP%;\" class=\"blue\"> $windowP% </div>\n";
      echo "<div style=\"position:relative; width:$macP%;\" class=\"red\"> $macP% </div>\n";
      echo "<div style=\"position:relative; width:$linuxP%;\" class=\"green\">$linuxP%</div>\n";
      
      echo "<h3>Movie Genre</h3>\n";
      echo "<div style=\"position:relative; width:$comedyP%;\" class=\"blue\"> $comedyP% </div>\n";
      echo "<div style=\"position:relative; width:$actionP%;\" class=\"red\"> $actionP% </div>\n";
      echo "<div style=\"position:relative; width:$horrorP%;\" class=\"green\"> $horrorP% </div>\n";

      echo "<h3>Pizza Topping</h3>\n";
      echo "<div style=\"position:relative; width:$pepP%;\" class=\"blue\"> $pepP% </div>\n";
      echo "<div style=\"position:relative; width:$baconP%;\" class=\"red\"> $baconP% </div>\n";
      echo "<div style=\"position:relative; width:$hamP%;\" class=\"green\">$hamP% </div>\n";

      echo "<h3>Major</h3>";
      echo "<div style=\"position:relative; width:$csP%;\" class=\"blue\">$csP% </div>\n";
      echo "<div style=\"position:relative; width:$citP%;\" class=\"red\">$citP% </div>\n";
      echo "<div style=\"position:relative; width:$weP%;\" class=\"green\">$weP% </div>\n";

      echo "</div>\n";
      ?>
    </div>
  </body>
</html>