<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cor = "azul";

    switch ($cor) {
        case "vermelho":
            echo "A cor é vermelha.";
            break;
        case "azul":
            echo "A cor é azul.";
            break;
        case "verde":
            echo "A cor é verde.";
            break;
        default:
            echo "Cor não reconhecida.";
            break;
    }
    $categoria = 'SUV';
    $preco = 0.0;
    $carro = '';

    switch (strtolower($categoria))
    {
        case 'luxo':
            $carro = 'Mercedes';
            $preco = 250000;
            break;
        case 'suv':
        case 'suv basico':
            $carro = 'Renegade';
            $preco = 80000;
            break;
        case 'sedan':
            $carro = 'Etios';
            $preco = 55000;
            break;
        default:
            $carro = 'Mobi';
            $preco = 33000;
            break;
    }
    $precoFormatado = number_format($preco,2,',','.');
    echo "<p>Carro: $carro<br> Preço: $precoFormatado</p>";

    ?>
    <form action="" method="post">
        <label for="lblDiaSemana">Digite um dia da semana:</label>
        <input type="text" name="diaSemana" id="diaSemana">
        <input type="submit" name="btnEnviar" value="Enviar">
    </form>
    <?php
        if (isset($_POST['btnEnviar']))
        {
            $diaSemana = $_POST['diaSemana'];

            switch ($diaSemana)
            {
                case 'Segunda-Feira':
                case 'Terça-Feira':
                case 'Quarta-Feira':
                case 'Quinta-Feira':
                case 'Sexta-Feira':
                    echo '<br>Dia Útil';
                    break;
                case 'Sábado':
                case 'Domingo':
                    echo '<br>Fim de Semana';
                    break;
                default:
                    echo '<br>Dia inválido';
                    break;
            }
        }
        ?>
    <form action="#" method="post">
        <br>
        <label for="lblCalculadora">Calculadora:</label><br>
        <label for="lblNum">Número 1</label><br>
        <input type="number" name="num1" id="num1"><br>
        <label for="lblNum">Operação</label><br>
        <input type="text" name="operador" id="operador"><br>
        <label for="lblNum">Número 2</label><br>
        <input type="number" name="num2" id="num2"><br>

        <input type="submit" name="btnCalcular" value="Enviar">
    </form>
    <?php
        if (isset($_POST['btnCalcular']))
        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operador = $_POST['operador'];

            switch ($operador)
            {
                case '+':
                    $res = $num1 + $num2;
                    break;
                case '-':
                    $res = $num1 - $num2;
                    break;
                case '*':
                    $res = $num1 * $num2;
                    break;
                case '/':
                    $res = $num1 / $num2;
                    break;
            }
            echo 'O valor de ' . $num1 .' ' . $operador . ' ' . $num2 . ' é: ' . $res;
        }
        ?>
    

</body>
</html>