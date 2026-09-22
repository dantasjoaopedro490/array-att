<?php
$nomes = [
    "Ana",
    "Bruno",
    "Carlos",
    "Daniela",
    "Eduardo",
    "Fernanda",
    "Gabriel",
    "Helena"
];

$indice = array_search("Carlos", $nomes);

if ($indice !== false){
    unset($nomes[$indice]);
}

$nomes = array_values($nomes);

$indice = array_search("Bruno", $nomes);

if ($indice !== false) {
    $nomes[$indice] = "Beatriz";
}

array_unshift($nomes, "Alice");

$nomes[] = "Igor";

echo "Quantidade de nomes: " . count($nomes) . "\n\n";

echo "=== NOMES ===\n";

foreach ($nomes as $nome) {
    echo $nome . "\n";
}
?>