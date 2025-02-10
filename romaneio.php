<?php

$produtor = "Zé";
$peso_1 = 30;
$peso_2 = 29;
$peso_total = $peso_1 + $peso_2;
$peso_arroba = $peso_total / 15;
$valor_arroba = 331.58;
$valor_total = $peso_arroba * $valor_arroba;

echo "O produtor " . $produtor . ", receberá R$" . number_format($valor_total, 2, ",", ".") . " por " . $peso_total . "kg de gado.";

