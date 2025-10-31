<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $numeros = [10,20,30,40];
    print_r($numeros);
    echo "<br><br>";
    echo "O numero acessado foi <br> \$numeros[0] " . $numeros[0];
    echo "<br><br>";

    $aluno = [
        "nome" => "Ana",
        "idade" => 20,
        "curso" => "Sistemas de Informação"
    ];
    print_r($aluno);
    echo "<br><br>";
    echo "O valor acessado foi \$aluno[\"nome\"]: " . $aluno["nome"];
    
    ?>
    <?php

    $dados1 = ["nome" => "Jose", "idade" => 28];
    $dados2 = ["naturalidade" => "Fortaleza"];

    echo "<br> <br>";
    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    echo "<br> <br>";
    $dados2["endereço"] = "Rua A";
    $dadosCompletos = $dados1 + $dados2;

    echo count($dadosCompletos);

    $indice = array_rand($dadosCompletos);

    echo "<br>";
    
    echo "$indice = $dadosCompletos[$indice]";

    echo "<br><br>";
    $par = [];
    $impar = [];
    for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $par[$i] = $i;
    echo "Par: " . ($par[$i]) . "<br>";
    }
    else {
        $impar[$i] = $i;
        echo "Ímpar: " . ($impar[$i]) . "<br>";
    }
    
}
    echo "Pares: " . implode(", ", $par) . "<br>";
    echo "Ímpares: " . implode(", ", $impar);

    echo "<br> <br>";
    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    echo "Soma simples: \$decimais = \$pares + \$impares: ";
    $decimais = $pares + $impares;
    print_r($decimais);

    echo "Soma simples: \$decimais = \$pares + \$impares: ";
    $decimais = $impares + $pares;
    print_r($decimais);

    echo "<br> <br>";
    echo "Merge dos arrays: 1";
    $decimais = array_merge($pares, $impares);
    print_r($decimais);
    echo "<br> <br>";
    
    echo "Merge dos arrays: 2";
    $decimais = array_merge($impares, $pares);

    echo "Orenação do array: ";
    sort($decimais);
    print_r($decimais);



    ?>
</body>
</html>