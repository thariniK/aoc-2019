<?php

$file = fopen("input.txt","r");

$fuel_sum = 0;

while(!feof($file))  {
	$input = str_replace(PHP_EOL, '', fgets($file));
	$fuel_sum += calculateFuelRequirement(intval($input));
}
fclose($file);

echo $fuel_sum.PHP_EOL;
?>

<?php

function calculateFuelRequirement($mass) {
	return floor($mass/3) - 2;
}

?>