<?php

session_start();

if (isset($_SESSION['Taken'])) 
{
    header("Location: Results.php");
}

function getArray($line) 
{
    $arr = array();
    $data = explode('|',$line);
    foreach ($data as $d) 
    {
        $d = explode(':', $d);
        $arr[$d[0]] = $d[1];
    }
    return $arr;
}



function getLine($array) 
{
    $items = array();
    foreach ($array as $key => $item) 
    {
        $items[] = "$key:$item";
    }
    return implode('|',$items);
}



if (isset($_POST['submit'])) 
{
    $file = fopen('Results.txt', 'r+');
    
    $os   = getArray(fgets($file));
    $type = getArray(fgets($file));
    $major = getArray(fgets($file));
    $phone = getArray(fgets($file));
    
    if (key_exists($_POST['os'], $os)) 
    {
        $os[$_POST['os']]++;
    }
    
    if (key_exists($_POST['pizza'], $pizza)) 
    {
        $pizza[$_POST['pizza']]++;
    }
    
    if (key_exists($_POST['major'], $major)) 
    {
        $major[$_POST['major']]++;
    }
    
    if (key_exists($_POST['phone'], $phone)) 
    {
        $phone[$_POST['phone']]++;
    }
    file_put_contents("survey.txt", "");
    $output  = getLine($os);
    $output .= getLine($pizza);
    $output .= getLine($major);
    $output .= getLine($phone);

    
    fwrite($file, $output);
    
    fclose($file);
    
    $_SESSION['Taken'] = true;
    header("Location: Results.php");
    die();
}



$title = 'Survey';

$body = <<<HTML
    <h2>Survey</h2>
    <form method="post" action="">
        
        <fieldset>
            <legend>Operating System:</legend>
            <p>
                <input type="radio" name="os" id="windows" value="Windows" /><label for="win">Windows</label>
                <input type="radio" name="os" id="linux" value="Linux" /><label for="linux">Linux</label>
                <input type="radio" name="os" id="mac" value="Mac OS" /><label for="mac">Mac OS</label>
            </p>
        </fieldset>
        
        <fieldset>
            <legend>Pizza Topping</legend>
            <p>
                <input type="radio" name="pizza" id="Pepparoni" value="Pepparoni" /><label for="Pepparoni">Pepparoni</label>
                <input type="radio" name="pizza" id="Bacon" value="Bacon" /><label for="Bacon">Bacon</label>
                <input type="radio" name="pizza" id="Sausage" value="Sausage" /><label for="Sausage">Sausage</label>
            </p>
        </fieldset>
        
        <fieldset>
            <legend>Major</legend>
            <p>
                <input type="radio" name="major" id="CS" value="CS" /><label for="CS">CS</label>
                <input type="radio" name="major" id="Web" value="Web" /><label for="Web">Web</label>
                <input type="radio" name="major" id="CIT" value="CIT" /><label for="CIT">CIT</label>
            </p>
        </fieldset>
        
        <fieldset>
            <legend>Phone</legend>
                <input type="radio" name="phone" id="iPhone" value="iPhone" /><label for="iPhone">iPhone</label>
                <input type="radio" name="phone" id="Android" value="Android" /><label for="Android">Android</label>
                <input type="radio" name="phone" id="Other" value="Other" /><label for="Other">Other</label>
        </fieldset>
        
        <p><input type="submit" value="submit" name="submit"/></p>
    </form>
    
HTML;


include 'modules/navigation.php';

?>