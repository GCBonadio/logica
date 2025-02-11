<?php
$taxas = [
    ["nome" => "Dólar (USD)", "cod" => "US$", "valor" => 5.30],
    ["nome" => "Euro (EUR)", "cod" => "EU$", "valor" => 6.20],
    ["nome" => "Libra (GBP)", "cod" => "GB$", "valor" => 7.50],
    ["nome" => "Peso (ARS)", "cod" => "AR$", "valor" => 0.056],
    ["nome" => "Bitcoin (BTC)", "cod" => "BTC$", "valor" => 200000]
];

$real = 100


foreach ($taxas as $taxa) {
    echo "Moeda: " . $taxa["nome"] . "<br>";
    echo "Valor: " . $taxa["valor"] . "<br>";
    echo "Valor em reais: " . $real * $taxa["valor"] . "<br>";
    echo "------------------------------------------<br>";
}



?>