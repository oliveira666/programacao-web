<?php
echo "Condicionais - IF ELSE<br>";


if (true) {
    echo "Verdadeiro<br>";
} 


if (false) { 
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if (false) {
    echo "Passo A <br>";
} elseif (false) {
    echo "Passo B <br>";
} elseif (false) {
    echo "Passo C <br>";
} elseif (false) {
    echo "Passo D <br>";
} elseif (false) {
    echo "Passo E <br>";
} else {
    echo "Último Passo<br>";
}

$idade = 15;
if ($idade < 18) {
    echo "Menor de idade<br>";
} elseif ($idade <= 65) {
    echo "Adulto<br>";
} else {
    echo "Idoso<br>";
}

$produto_em_estoque = false;

if (!$produto_em_estoque) {
    echo "Produto Indisponível<br>";
} else {
    echo "Produto Disponível<br>";
}
echo "<br>";
// Equação de Segundo Grau:
$a = 2;
$b = 2;
$c = 2;

$delta = ($b ** 2) - (4 * $a * $c);

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);

if ($delta < 0) {
    echo "Não existem raízes reais.<br>" .
         "Delta Negativo: $delta <br>";
} elseif ($delta == 0) {
    echo "Existe apenas uma raiz real dupla: $x1 <br>" .
         "Delta Zero: $delta <br>";
} else {
    echo "Existem duas raizes reais:<br>" .
    " x1 = $x1<br>" . 
    " x2 = $x2 <br>" .
    "Delta: $delta <br>";
}



 


?>