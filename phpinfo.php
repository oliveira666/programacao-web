<!doctype html>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "Numero inteiro <br>";
            echo 1;
            echo '<br>';
            echo "Numero decimal <br>";
            echo 2.3;
            echo '<br>';
            echo "<br> Strings <br>";
            echo "Essa é uma string";
            echo '<br> <br>';
            var_dump( 1);
            echo '<br>';
            echo '<br>';
            var_dump(value: 2.1);
            echo '<br> <br>';
            var_dump(value: "texto");
            echo '<br> <br>';
            echo "OPERAÇÕES ARÍITMÉTICAS <br>";
            echo '<br>';
            echo "<br> Primeiro calculo <br>";
            echo 1 + 3;
            echo '<br>';
            echo "<br> Segundo calculo <br>";
            echo 2 * 3.5;
            echo '<br>';
            echo "<br> Terceiro calculo <br>";
            echo 25 / 3;
            echo '<br> <br>';
            echo "Usando round: " . round(num: 1234567.89123, precision:2);
            echo '<br> <br>';
            echo "number_format sem separadores: " . number_format(num: 1234567.89123, decimals: 2);
            echo '<br> <br>';
            echo "number_format com separadores: " . number_format(num: 1234567.89123, decimals: 2, decimal_separator: ",", thousands_separator: ".");
            echo '<br> <br>';
            echo "PRECEDÊNCIA <br>"
            echo "() => ** => / * % => + - <br>";
            echo '<br> <br>'
            
            echo "STRING <br>";
            echo "Eu sou uma string <br>";
            echo '<br>';

        ?>
    </body>
</html>