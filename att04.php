<?php
$numeros = [5, 2, 8, 5, 3, 2, 9, 7, 8, 1, 4, 6, 3, 10, 11];

$contagem = array_count_values($numeros);

echo "Números repitidos:<br>";

foreach ($contagem as $numero => $quantidade) {
    if ($quantidade > 1) {
        echo "$numero aparece $quantidade vezes.<br>";
    }
}

echo "<br>Números que aparecem somente uma vez:<br>";

foreach ($contagem as $numero => $quantidade) {
    if ($quantidade === 1) {
        echo "$numero<br>";
    }
}
?>