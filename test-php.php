<html>
<head>

</head>
<body>

<?php

//phpinfo();

/*
dfasdfa
sdfasdf
sdfa
 */

//echo "Hello world!<br />";

$a = false;
$b = 10;

$months = [
	1 => 'leden',
	2 => 'únor',
	3 => 'bøezen',
];

//var_dump($months);


// var_dump($a); die; // exit;

//print "<p>Jsem print.</p>";
//echo "<p>Promìnná a je $a.</p>";

echo '<p>Promìnná a je ' . $a . '.</p>'; 



if ($a === 0) {
	echo "OK";
} else {
	echo "Chyba!";
}


$a = 10;

for ($i = 0; $i <= 10; $i++) {
	echo "<p>$i</p>";	
}


/*
 * @param text
 * funkce vrati pozdrav
 * @return text
 */
function hello($name) {
	//var_dump($name);
	return "<p>Jsem funkce! $name.</p>";
}

echo hello('Pavel');
echo hello('Hanka');

?>



</body>
</html>

