<?php

$frutas = ["Maçã", "Banana", "Laranja", "Abacaxi", "Uva"];//array

foreach ($frutas as $fruta) {//foreach é um laço de repetição
    echo $fruta . "<br>";
}

echo "------------------------------------------<br>";

$frutas[] = "Morango"; //adiciona um elemento no final do array
foreach ($frutas as $fruta) {//foreach é um laço de repetição
    echo $fruta . "<br>"; 
}

echo "------------------------------------------<br>";

array_shift($frutas); //remove o primeiro elemento do array
unset($frutas[1]); //remove o segundo elemento do array de acordo com o índice

foreach ($frutas as $fruta) { 
    echo $fruta . "<br>"; 
}



?>