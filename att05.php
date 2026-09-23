<?php

$alunos = [
    [
        "nome" => "João",
        "idade" => 20,
        "curso" => "Análise e Desenvolvimento de Sistemas",
        "nota" => 8.5
    ],
    [
        "nome" => "Maria",
        "idade" => 21,
        "curso" => "Administração",
        "nota" => 6.0
    ],
    [
        "nome" => "Pedro",
        "idade" => 19,
        "curso" => "Engenharia",
        "nota" => 4.5
    ],
    [
        "nome" => "Ana",
        "idade" => 22,
        "curso" => "Direito",
        "nota" => 9.0
    ],
    [
        "nome" => "Carlos",
        "idade" => 20,
        "curso" => "Computação",
        "nota" => 5.5
    ]
];

$somaNotas = 0;
$maiorNota = 0;
$alunoMaiorNota = "";
$aprovados = 0;
$reprovados = 0;

echo "<h2>ALUNOS APROVADOS:</h2>";
foreach ($alunos as $aluno) {
    $somaNotas += $aluno["nota"];

    if ($aluno["nota"] >= 6) {
        $aprovados++;
        echo "Nome: " . $aluno["nome"] . "<br>";
        echo "Idade: " . $aluno["idade"] . "<br>";
        echo "Curso: " . $aluno["curso"] . "<br>";
        echo "Nota: " . $aluno["nota"] . "<br><br>";
    } else {
        $reprovados++;
    }

    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $alunoMaiorNota = $aluno["nome"];
    }
}

$mediaNotas = $somaNotas / count($alunos);

echo "<h2>REPROVADOS</h2>";

echo "Aluno com maior nota: $alunoMaiorNota<br>";
echo "Maior nota: $maiorNota<br>";
echo "Média das notas: " . number_format($mediaNotas, 2, ',', '.') . "<br>";
echo "Quantidade de aprovados: $aprovados<br>";
echo "Quantidade de reprovados: $reprovados<br>";

?>