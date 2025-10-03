<?php   
    // Declaracao de variaveis
    echo "Declaração de variaveis <br>";
    $nome = "João";
    $idade = 20;
    $altura = 1.75;
    $casado = true;

    echo "<br>";

    // Exibindo variaveis
    echo "Exibindo variaveis <br>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Altura: " . $altura . "<br>";
    

    //Condicional utilizando a variavel booleana
    if ($casado) {
        echo "Casado: Sim <br>";
    } else {
        echo "Casado: Não <br>";
    }


    //vardump para exibir detalhes da variavel
    echo "Tipos de dados de variaveis <br>";
    echo "<br>";
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($altura);
    echo "<br>";
    var_dump($casado);
    echo "<br>";
    echo "<br>";

    // Operacoes com variaveis
    $idade_ano_que_vem = $idade + 1;
    echo "Idade no proximo ano: " . $idade_ano_que_vem . " anos <br>";
    echo "<br>";
    // Soma
    echo "Soma: ";
    $a = 3;
    $b = 16;
    $somaDosNumeros = $a + $b;
    echo $a . " + " . $b . " = " . $somaDosNumeros . "<br>";
    // Concatenenado strings
    $mensagem = "Ola, meu nome é " . $nome . " e tenho " . $idade . " anos.";
    echo $mensagem;
    echo "<br>";
    echo "<br>";
    echo "Verifica se a variavel esta setada";
    echo "<br>";
    echo isset($somaDosNumeros); // vertifica se a variavel esta setada

    echo "Numero 10<br>";
    echo $numero = 10; // atribui o valor 10 a variavel e exibe o valor
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero -= 3; // subtrai 3 do valor da variavel
    echo '<br>' . $numero; // exibe o valor da variavel
    $numero += 1.5;
    echo '<br>' . $numero; // exibe o valor da variavel 

    echo "<br>";
    $numero = 10;
    echo "<br> numero--: " . $numero--;

    echo '<br>' . $numero;

    $numero = 10;
    echo "<br> --numero: " . --$numero;
    echo '<br>' . $numero;
    echo "<br>";

    echo "<br> numero++: " . $numero++;
    echo '<br>' . $numero;
    echo "<br>";
    $numero = 10;
    echo "<br> ++numero: " . ++$numero;
    echo '<br>' . $numero;
    echo "<br>"; echo"<br>";
    echo "numero 20 <br>";
    $numero = 20;

    echo '<br>' . $numero;
    $numero -= 5;
    echo '<br>' . $numero;
    $numero += 5;
    echo '<br>' . $numero;
    $numero *= 10;
    echo '<br>' . $numero;
    $numero /= 20;
    echo '<br>' . $numero;
    $numero **= 2;
    echo '<br>' . $numero;
    $numero .= 4;
    echo '<br>' . $numero;

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;
    $texto = $texto . ' qualquer';
    echo '<br>' . $texto;
    $texto .= ' de verdade!';
    echo '<br>' . $texto;

    echo "Constantes";
    echo "<br>";
    define('TAXA_DE_JUROS', value: 5.9);
    echo TAXA_DE_JUROS;

    const NOVA_TAXA = 2.5;
    echo "<br>" . NOVA_TAXA;

    $valorVariavel = 2.8;
    define('NOVISSIMA_TAXA', $valorVariavel);
    echo "<br>" . NOVISSIMA_TAXA;

    const NOVISSIMA_TAXA2 = 2.8 + 1.2;
    echo "<br>" . NOVISSIMA_TAXA2;
