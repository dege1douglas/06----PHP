<?php
$fibonacci = 1;
$counter = 0;
$regulator = 1;
echo(0);
for ($i = 0; $i < 10; $i++){
	echo("\n".$fibonacci."\n");
    $fibonacci = $counter + $regulator;
    $counter = $regulator;
    $regulator = $fibonacci;

}
?>
