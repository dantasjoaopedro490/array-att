<?php
$produtos = [
    "Notebook" => 3500.00,
    "Celular" => 1800.00,
    "Teclado" => 250.00,
    "Mouse" => 120.00,
    "Monitor" => 900.00,
    "Impressora" => 750.00,
    "Fone de Ouvido" => 300.00,
    "Tablet" => 1500.00,
    "Webcam" => 550.00,
    "Pendrive" =>80.00
];

$total = 0;
$mais_caro = "";
$mais_barato = "";
$maior_preco = 0;
$menor_preco = PHP_FLOAT_MAX;

echo "=== PRODUTOS ===\n";

foreach ($produtos as $produto => $preco) {
    echo $produto . " - R$ " . number_format($preco, 2, ',', '.') . "\n";

    $total += $preco;

    if ($preco > $maior_preco) {
        $maior_preco = $preco;
        $mais_caro = $produto;
    }

    if ($preco < $menor_preco) {
        $menor_preco = $preco;
        $mais_barato = $produto;
    }
}

echo "\n=== DESCONTOS ===\n";

$total_com_desconto = 0;

foreach ($produtos as $produto => $preco) {
    if ($preco > 500) {
        $desconto = $preco * 0.10;
        $preco_final = $preco - $desconto;

        echo $produto . ": R$ " . number_format($preco, 2, ',', '.') .
             " -> R$ " . number_format($preco_final, 2, ',', '.') . "\n";

        $total_com_desconto += $preco_final;
    } else {
        $total_com_desconto += $preco;
    }
}

echo "\n=== RESULTADOS ===\n";

echo "Produto mais caro: " . $mais_caro . " - R$ " . number_format($maior_preco, 2, ',', '.') . "\n";

echo "Produto mais barato: " . $mais_barato . " - R$ " . number_format($menor_preco, 2, ',', '.') . "\n";

echo "Valor total sem desconto: R$ " . number_format($total, 2, ',', '.') . "\n";

echo "Valor total com desconto: R$ " . number_format($total_com_desconto, 2, ',', '.') . "\n";
?>