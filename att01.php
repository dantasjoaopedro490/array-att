<?php
$notas = [];
$aprovados = 0;
$reprovados = 0;

for($i = 0; $i < 10; $i ++){
    $notas[$i] = (float) readline("Digite a nota do aluno ". ($i + 1). ": ");

    if($notas[$i] >= 6) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}

$maior = max($notas);
$menor = min($notas);

echo "\nNotas do aluno: \n";

foreach ($notas as $nota){
    echo $nota . "\n";
}

echo "\nMaior nota: " . $maior ."\n";
echo "Menor nota: " . $menor ."\n";

echo "Alunos aprovados: " . $aprovados . "\n";
echo "Alunos reprovados: " . $reprovados . "\n";

sort($notas);

echo "\nNotas em ordem crescente:\n";

foreach ($notas as $nota){
    echo $nota . "\n";
}
?>