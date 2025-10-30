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

    ?>
</body>
</html>