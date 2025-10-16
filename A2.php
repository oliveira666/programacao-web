<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="A2.css">
</head>
<body>
    <h1>Título : ALUNO APROVADO OU NÃO ???</h1>
    <h3>Aluno: Ihago Oliveira Ramos - RGM: 04562802</h3>
    <h3>Aluno: Gabriel Marques Belo - RGM: 44139748</h3>
    <h2>Cálculo Média</h2>
    <form action = "#" method="POST">
        <div>
            <label for="nota01">Nota 01:</label>
            <input type="number" name="nota01" value="">
        </div>
        <br>
         <div>
            <label for="nota02">Nota 02:</label>
            <input type="text" name="nota02" value="">
        </div>
        <br>
         <div>
            <label for="nota03">Nota 03:</label>
            <input type="text" name="nota03" value="">
        </div>
        <br>
        <div>
            <label for="t2">Frequencia maior 75%: </label>
            <select name="t2" id = "t2">
                <option value = "S" selected>SIM</option>
                <option value = "N">NÃO</option>
            </select>
        </div>
        <br><br>
        <button type="submit" name="calculaMedia">Executar</button>
        <br><br>
        </form>
        <?php
    if(isset($_POST['calculaMedia'])){
        $nota01 = $_POST['nota01'];
        echo "Nota 01: " . $nota01 . "<br><br>" ;
        $nota02 = $_POST['nota02'];
        echo "Nota 02: " . $nota02 . "<br><br>";
        $nota03 = $_POST['nota03'];
        echo "Nota 03: " . $nota03 . "<br><br>";
        $media = ($nota01 + $nota02 + $nota03) / 3;
        $media = number_format($media, 2, ".", $media);
        echo "Média: " . $media . "<br><br>";
        $aprovado = "<label id=apr>O aluno APROVADO.</label>";
        $reprovado = "<label id=repr>O aluno REPROVADO.</label>";
        
        if (isset($_POST['t2'])) {
            echo "Frequência maior ou igual a 75%: " . $_POST['t2'] . "<br><br>";
        }
        if ($media >= 6 && $_POST['t2'] == "S") {
            echo $aprovado . "<br>";
        } else {
            echo $reprovado .  "<br>";
        }
        
        }
    ?>