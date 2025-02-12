<?php

$boletim = [
    "Joao" => [
        "Matemática" => ["b1" => 7, "b2" => 7, "b3" => 2, "b4" => 8],
        "Português" => ["b1" => 5, "b2" => 2, "b3" => 5, "b4" => 7],
        "História" => ["b1" => 8, "b2" => 8, "b3" => 4, "b4" => 5],
        "Geografia" => ["b1" => 2, "b2" => 5, "b3" => 8, "b4" => 4],
        "Ciências" => ["b1" => 9, "b2" => 5, "b3" => 7, "b4" => 6]
    ],
    "Maria" => [
        "Matemática" => ["b1" => 6, "b2" => 7, "b3" => 8, "b4" => 4],
        "Português" => ["b1" => 7, "b2" => 8, "b3" => 9, "b4" => 2],
        "História" => ["b1" => 8, "b2" => 9, "b3" => 10, "b4" => 3],
        "Geografia" => ["b1" => 9, "b2" => 10, "b3" => 8, "b4" => 7],
        "Ciências" => ["b1" => 10, "b2" => 9, "b3" => 8, "b4" => 9]
    ],
    "José" => [
        "Matemática" => ["b1" => 5, "b2" => 6, "b3" => 7, "b4" => 4],
        "Português" => ["b1" => 6, "b2" => 7, "b3" => 8, "b4" => 5],
        "História" => ["b1" => 7, "b2" => 8, "b3" => 9, "b4" => 6],
        "Geografia" => ["b1" => 8, "b2" => 9, "b3" => 10, "b4" => 1],
        "Ciências" => ["b1" => 9, "b2" => 10, "b3" => 9, "b4" => 7]
    ],
    "Ana" => [
        "Matemática" => ["b1" => 4, "b2" => 5, "b3" => 6, "b4" => 5],
        "Português" => ["b1" => 5, "b2" => 6, "b3" => 7, "b4" => 8],
        "História" => ["b1" => 6, "b2" => 7, "b3" => 8, "b4" => 9],
        "Geografia" => ["b1" => 7, "b2" => 8, "b3" => 9, "b4" => 4],
        "Ciências" => ["b1" => 8, "b2" => 9, "b3" => 10, "b4" => 7]
    ],
    "Pedro" => [
        "Matemática" => ["b1" => 3, "b2" => 4, "b3" => 5, "b4" => 6],
        "Português" => ["b1" => 4, "b2" => 5, "b3" => 6, "b4" => 7],
        "História" => ["b1" => 5, "b2" => 6, "b3" => 7, "b4" => 5],
        "Geografia" => ["b1" => 6, "b2" => 7, "b3" => 8, "b4" => 6],
        "Ciências" => ["b1" => 7, "b2" => 8, "b3" => 9, "b4" => 7]
    ]
];


foreach ($boletim as $aluno => $disciplinas) {
    echo "Boletim de " . $aluno . "<br>";
    foreach ($disciplinas as $disciplina => $bimestres) {
        echo "Disciplina: " . $disciplina . "<br>";
        $media = ($bimestres["b1"] + $bimestres["b2"] + $bimestres["b3"] +$bimestres["b4"]) / 4;
        echo "Média: " . number_format($media,2,",",".") . "<br>";
        if ($media >= 7) {
            echo "Aprovado<br>";
        } else {
            echo "Reprovado<br>";
        }
        echo "------------------------------------------<br>";
    }
}




?>