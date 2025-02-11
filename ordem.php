<?php
$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 40];
$num_seq = implode (", ", $numeros);

echo "Números: " . $num_seq;

echo "<br>";

sort($numeros);

$num_order = implode (", ", $numeros);

echo "Números: " . $num_order;

echo "<br>";

rsort($numeros);

$num_order_dec = implode (", ", $numeros);

echo "Números: " . $num_order_dec;

?>