<?php

$produtos = [
    [
        "nome" => "Notebook",
        "categoria" => "Eletrônicos",
        "preco" => 3500.00,
        "estoque" => 3
    ],
    [
        "nome" => "Celular",
        "categoria" => "Eletrônicos",
        "preco" => 1800.00,
        "estoque" => 8
    ],
    [
        "nome" => "Teclado",
        "categoria" => "Periféricos",
        "preco" => 150.00,
        "estoque" => 4
    ],
    [
        "nome" => "Monitor",
        "categoria" => "Eletrônicos",
        "preco" => 1200.00,
        "estoque" => 6
    ],
    [
        "nome" => "Mouse",
        "categoria" => "Periféricos",
        "preco" => 80.00,
        "estoque" => 10
    ]
];

$valorTotalEstoque = 0;
$maiorValor = 0;
$produtoMaiorValor = "";

// Percorre os produtos
foreach ($produtos as $produto) {

    // Verifica estoque abaixo de 5
    if ($produto["estoque"] < 5) {
        echo "Estoque baixo: " . $produto["nome"] .
             " - Quantidade: " . $produto["estoque"] . "<br>";
    }

    // Calcula o valor armazenado de cada produto
    $valorProduto = $produto["preco"] * $produto["estoque"];

    // Soma ao valor total do estoque
    $valorTotalEstoque += $valorProduto;

    // Verifica qual produto possui maior valor armazenado
    if ($valorProduto > $maiorValor) {
        $maiorValor = $valorProduto;
        $produtoMaiorValor = $produto["nome"];
    }
}

echo "<h2>Resultado</h2>";

echo "Valor total do estoque: R$ " .
     number_format($valorTotalEstoque, 2, ',', '.') . "<br>";

echo "Produto com maior valor armazenado: " .
     $produtoMaiorValor . "<br>";

echo "Valor armazenado nesse produto: R$ " .
     number_format($maiorValor, 2, ',', '.');

?>