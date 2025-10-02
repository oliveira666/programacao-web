<!DOCTYPE>
<html>
    <head>
        <body>
            <?php
          
                /*phpinfo();*/

                echo "Numero inteiros <br>";
                echo 1;
                echo "<br>";
                echo "<br> Numero decimais <br>";
                echo 2.3;
                echo "<br>";
                echo "<br> String <br>";
                echo "Isso é uma string";
                echo "<br>";
                echo "<br>";
                var_dump(value: 1);
                echo "<br>";
                echo "<br>";
                var_dump(value: 2.1);
                echo "<br>";
                echo "<br>";
                var_dump(value: "Isso é uma string");
                echo "<br>";
                echo "<br>";
                echo "Operações Aritimeticas";
                echo "<br>";
                echo "<br> Primeiro Calculo <br>";
                echo 1 + 3;
                echo "<br>";
                echo "<br> Segundo Calculo <br>";
                echo 2 * 3.5;
                echo "<br>";
                echo "<br> Terceiro Calculo <br>";
                echo 25 / 3;
                echo "<br>";
                echo "<br>";
                echo "Usando round: " . round(1234567.89123, 2);
                echo "<br>";
                echo "<br>";
                echo "numner_format sem sepadores: " . number_format(1234567.89123, 2);
                echo "<br>";
    

                echo "Modulo ou reresto da divisão: <br>";
                echo 7 % 4;
                echo "<br> <br>";
                echo "Numero Impar <br>";
                echo 7 % 2;
                echo "<br> ";
                echo "Numero Par <br>";
                echo 8 % 2;
                echo "<br>";
                echo "<br>";

                echo "Ver se é par ou impar <br>";
                if (8%2 == 0) {
                    echo "É par <br>";
                } else {
                    echo "É impar";
                }
                echo "<br> <br>";    

                echo "String <br>";
                echo "Eu sou uma string <br>";
                echo "<br>";
                echo "Concatenação <br>";
                echo "Eu" . "sou" . "uma" . "string <br>";
                echo "Eu " . "sou " . "uma " . "string";
                echo "<br>";
                echo "<br>";
                echo "ASPAS";
                echo " 'Simpes' " . ' "Duplas" ';
                echo "<br>";
                echo '\'Simpes Simples\' ' . " \"Duplas Duplas\" ";
                echo "<br> <br>";
                $nome = "Gabriel";
                echo "Ola \t $nome";
                echo "<br> <br>";
                echo "<pre> Ola \t $nome </pre>";
                echo "<br> <br>"; 

                echo "BOOLEANOS <br>";
                echo true;
                echo "<br>";
                echo false;
                echo "<br>";
                var_dump(value: true);
                echo "<br>";
                var_dump(value: false);
                echo "<br>";
                echo 'xxxx';
                echo is_bool(value: false);
                echo "<br>";
                echo 'rrrr';
                echo is_bool(value: "True");
                echo "<br>";




            ?>
        </body>
    </head>
</html>    