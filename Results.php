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

  echo "<div margin-left:200px>$windows";
  echo "$comedy";
  echo "$bacon";
  echo "$cs</div>";
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

  $windowP = round($windows / $totalOS) * 100;
  $macP = round($mac / $totalOS) * 100;
  $linuxP = round($linux / $totalOS) * 100;

  $pepP = round($pep / $totalPizza) * 100;
  $baconP = round($bacon / $totalPizza) * 100;
  $hamP = round($ham / $totalPizza) * 100;

  $comedyP = round($comedy / $totalMovie) * 100;
  $horrorP = round($horror / $totalMovie) * 100;
  $actionP = round($action / $totalMovie) * 100;

  $csP = round($cs / $totalMajor) * 100;
  $citP = round($cit / $totalMajor) * 100;
  $weP = round($we / $totalMajor) * 100;
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
      echo "<p>windowP</p>";
      echo "<p>linuxP</p>";
      echo "<p>macP</p>";



      echo "<span class=\"blue\"> $windows </span>";
      echo "<span class=\"red\"> $mac </span>";
      echo "<span class=\"green\"> $linux></span>";

      echo "<span class=\"blue\">$comedy </span>";
      echo "<span class=\"red\">$action </span>";
      echo "<span class=\"green\">$horror </span>";

      echo "<span class=\"blue\">$pep </span>";
      echo "<span class=\"red\">$bacon </span>";
      echo "<span class=\"green\">$ham </span>";

      echo "<span class=\"blue\">$cs </span>";
      echo "<span class=\"red\">$cit <span>";
      echo "<span class=\"green\">$we </span>";

      >?
    </div>
  </body>
</html>