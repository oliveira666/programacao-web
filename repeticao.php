<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <div class="titulo">Laço For</div>

    <?php
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
    echo "<br><br>";

    $array = ['Segunda', 'Terca', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . "<br>";
    }
    ?>

    <br><br>
    <div class="titulo">Foreach</div>
    <br>
    <?php
    $array = ['Segunda', 'Terca', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

    foreach ($array as $valor) {
        echo $valor . "<br>";
    }



    ?>

    <div class="titulo">While</div>
    <br>
    <?php
    const VALOR_LIMITE = 10;

    while ($i < VALOR_LIMITE) {
        echo $array[$i] . "<br>";
        $i++;
    }

    echo "<br>";

    do {
        echo $array[$i] . "<br>";
        $i++;
    } while ($i < VALOR_LIMITE);
    
    class Pessoa {
        private $nome;
        private $idade;
        
        public function getNome() {
            return $this->nome;
        }
        public function SetNome() {
            $this->nome = $nome;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade() {
            $this->idade = $idade;
        }
        public function apresentar() {
            return "Olá, meu nome é " .$this->getNome . " e tenho " .$this->getIdade . "anos.";
        }
    }
    echo "<br>";
        $pessoa = new Pessoa();
        $pessoa->setNome = "João";
        $pessoa->setIdade = 20;
        echo $pessoa->apresentar();
    
    ?>
    
    
</body>
</html>