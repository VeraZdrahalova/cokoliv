<?php

/*
//query string
//var_dump($_SERVER['QUERY_STRING']);	(&_systém.prom['odeslaná_data'])

$months = [
	1 => 'leden',		// klíč => hodnota
	2 => 'únor',
	'm' => 'březen',
	'QUERY_STRING' => 'data',
	'foo' => 'apple',
	'bar' => 'peache',
];



echo '<p>Prvek hodnota ' . $months['foo']  . '.</p>';		//zřetězení
	
foreach ($months as $month) {		//f-ce foreach projde (např.vypíše) celé pole
	echo "<p>$month</p>";
}		

foreach ($_POST as $POS => $key) {
	echo "<p>$key => $POS</p>"; 
}

//var_dump($months);	pomocná f-ce., kt. slouží pouze při ladění prog. - vypíše obsah + typ prom. + velikost na výstup 

//if (isset($_POST['submit']) and $_POST['submit'] == 'Odeslat') 			f-ce, kt. testuje existenci prom. + její naplnění
 * 
 */
///////////////////////////////////////////////////////////

function getSum($x, $y)
{
	//$result = $x + $y;
	//return $result;
	return $x + $y;
}

function getMinus($x, $y)
{
	return $x - $y;
}

function getMultiply($x, $y)
{
	return $x * $y;
}

function getDivide($x, $y)
{
	if ($y != 0) {
		return $x / $y;
	}
	else return 'Chyba: dělitel = 0';
}

if ($_POST['submit'] == 'Odeslat') {
	$a = $_POST['number-a'];
	$b = $_POST['number-b'];
	$value = (int) $_POST['selectsign'];
	
	
	switch ($value) {
		case 1:
			$result = getSum($a, $b);
			//$result = $a + $b;
			break;
		case 2:
			$result = getMinus($a, $b);
			break;
		case 3:
			$result = getMultiply($a, $b);
			break;
		case 4:
			$result = getDivide($a, $b);
			break;
	}
	
	/*
	if ($value === 1) {
		$result = $a + $b;
	} elseif ($value === 2) {
		$result = $a - $b;
	} elseif ($value === 3) {
		$result = $a * $b;
	} elseif ($value === 4) {
		$result = $a / $b;
	}
	 */
	
	
	
}


//} 

/*
var_dump($a);
var_dump($b);
var_dump($value);
var_dump($_SERVER['QUERY_STRING']);
*/

?>

<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Kalkulačka">
    <title>Kalkulačka</title>

    <style type="text/css" >
      body {
        background-color: silver;
        margin: 60px 10% 50px 10%;
        font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        font-size: 16px;
        font-weight: bold;
        line-height: 2em;
      }
       input.input1 {
        height: 36px;
        padding: 0px 10px;
        font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        font-size: 16px;
        width: 350px;
        border: 1px solid grey;
        border-radius: 4px;
      }
       input.input2 {
        height: 25px;
        width: 60px;
        vertical-align: middle;
      }
       input.input3 {
        height: 36px;
        padding: 0px 10px;
        font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        font-size: 16px;
        border: 1px solid grey;
        border-radius: 4px;
      }
      .shift1 {
        margin-left: 100px;
      }
      .lineh {
        line-height: 220%;        
      }     
    </style>

  </head>

  <body>
      <form method="POST">
        <p>
          <label for="numbera" >Zadej 1.číslo &nbsp;</label>
          <input type="number" name="number-a" class="input1" id="numbera" maxlength="36">
        </p>
        <p>
          <label for="numbera">Zadej 2.číslo &nbsp;</label>
          <input type="number" name="number-b" class="input1" id="numberb" maxlength="36">
          <label for="countid" class="shift1"> Výsledek &nbsp;</label>
          <input type="text" name="count" class="input1" id="countid" maxlength="36" value="<?php echo $result; ?>">          
        </p>
        <br/>
        <p class="shift1 lineh">
          <input type="radio" name="selectsign" class="input2" value="1"> Sčítání <br/>
          <input type="radio" name="selectsign" class="input2" value="2"> Odčítání <br/>
          <input type="radio" name="selectsign" class="input2" value="3"> Násobení <br/>
          <input type="radio" name="selectsign" class="input2" value="4"> Dělení <br/>
        </p>
        
        
        <br /> 
        <p class="shift1">
          <input type="submit" name="submit" class="input3" value="Odeslat">
          <input type="submit" name="deleteForm" class="input3" value="Vynulovat">
        </p>     
      </form>
      
      <p>Výsledek: <?php echo $result; ?></p>
      
              
  </body>
  
</html>

