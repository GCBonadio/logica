<?php

$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$nota4 = 5;
$aluno = "João";
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


if ($media >= 7) {
    echo $aluno . ", sua média foi de " . $media . ", você foi aprovado!";
} elseif ($media >= 5 && $media < 7) {
    echo $aluno . ", sua média foi de " . $media . ", você está de recuperação";
} else {
    echo $aluno . ", sua média foi de " . $media . ", você foi reprovado";
}


?>