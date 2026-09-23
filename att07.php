<?php

$turma1 = [
    "João",
    "Maria",
    "Pedro",
    "Ana",
    "Carlos",
    "Lucas"
];

$turma2 = [
    "Maria",
    "Pedro",
    "Fernanda",
    "Carlos",
    "Juliana",
    "Rafael"
];

// Alunos presentes nas duas turmas
$nasDuas = array_intersect($turma1, $turma2);

// Alunos somente da primeira turma
$somentePrimeira = array_diff($turma1, $turma2);

// Alunos somente da segunda turma
$somenteSegunda = array_diff($turma2, $turma1);


// Exibição dos resultados

echo "<h2>Alunos presentes nas duas turmas:</h2>";

foreach ($nasDuas as $aluno) {
    echo $aluno . "<br>";
}


echo "<h2>Alunos somente da primeira turma:</h2>";

foreach ($somentePrimeira as $aluno) {
    echo $aluno . "<br>";
}


echo "<h2>Alunos somente da segunda turma:</h2>";

foreach ($somenteSegunda as $aluno) {
    echo $aluno . "<br>";
}

?>
