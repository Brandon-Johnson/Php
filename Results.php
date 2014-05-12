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
    <div id="results">
      <?php
      echo "<div style=\"position:relative; height:$windowP%;\"class=\"blue\"> $windows </div>";
      echo "<div class=\"red\"> $mac </div>";
      echo "<div class=\"green\"> $linux</div>";

      echo "<div class=\"blue\">$comedy </div>";
      echo "<div class=\"red\">$action </div>";
      echo "<div class=\"green\">$horror </div>";

      echo "<div class=\"blue\">$pep </div>";
      echo "<div class=\"red\">$bacon </div>";
      echo "<div class=\"green\">$ham </div>";

      echo "<div class=\"blue\">$cs </div>";
      echo "<div class=\"red\">$cit <div>";
      echo "<div class=\"green\">$we </div>";

      ?>
    </div>
  </body>
</html>