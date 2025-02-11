<?php
$alunos = [
    ["nome" => "João", "nota" => 7, "disciplina" => "Matemática"],
    ["nome" => "Maria", "nota" => 8, "disciplina" => "Português"],
    ["nome" => "José", "nota" => 6, "disciplina" => "História"],
    ["nome" => "Ana", "nota" => 9, "disciplina" => "Geografia"],
    ["nome" => "Pedro", "nota" => 5, "disciplina" => "Ciências"]
];

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Nota: " . $aluno["nota"] . "<br>";
    echo "Disciplina: " . $aluno["disciplina"] . "<br>";
    
    if ($aluno["nota"] >= 7) {
        echo "Aprovado<br>";
    } else {
        echo "Reprovado<br>";
    }
    
    echo "------------------------------------------<br>";
}




?>