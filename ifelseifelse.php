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



?>