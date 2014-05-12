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
      <span class="blue"><?php echo "$windows" ?></span>
      <span class="red"><?php echo"$mac" ?></span>
      <span class="green"><?php echo "$linux" ?></span>

      <span class="blue"><?php echo "$comedy" ?></span>
      <span class="red"><?php echo"$action" ?></span>
      <span class="green"><?php echo "$horror" ?></span>

      <span class="blue"><?php echo "$pep" ?></span>
      <span class="red"><?php echo"$bacon" ?></span>
      <span class="green"><?php echo "$ham" ?></span>

      <span class="blue"><?php echo "$cs" ?></span>
      <span class="red"><?php echo"$cit" ?></span>
      <span class="green"><?php echo "$we" ?></span>
    </div>
  </body>
</html>