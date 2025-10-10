<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "#" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="">
        </div>
        <div>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" value="">
        </div>
        <br>
        <button type="submit" name="nomesobrenome">Executar</button>
        <br>
</form>
        <?php
            if (isset($_POST['nomesobrenome'])) {
                echo $_POST['nome'] . "<br>";
                echo $_POST['sobrenome'] . "<br>";
            }
            ?>
    <form action = "#" method="post">
        <div>
            <label for="numero1">Numero 1:</label>
            <input type="text" name="numero1" value="">
        </div>
        <div>
            <label for="numero2">Numero 2:</label>
            <input type="text" name="numero2" value="">
        </div>
        <br>
        <button type="submit" name="numeros">Executar</button>
        <br>
        </form>
        <?php
            if (isset($_POST['numeros'])) {
                echo $_POST['numero1'] . "<br>";
                echo $_POST['numero2']. "<br>";
            }

            ?>

        <form action = "#" method="post">
        <div>
            <label for="t1">Nota maior Igual a 6: </label>
            <select name="t1" id = "t1">
                <option value = "S" selected>SIM</option>
                <option value = "N">NÃO</option>
            </select>
        </div>
        
        <div>
            <label for="t2">Frequencia maior 75%: </label>
            <select name="t2" id = "t2">
                <option value = "S" selected>SIM</option>
                <option value = "N">NÃO</option>
            </select>
        </div>
        <br>
        <button type="submit" name="media">Executar</button>
        
    </form>
            <?php
            if (isset($_POST['media'])) {
                echo $_POST ['t1'] . "<br>";
                echo $_POST ['t2'] . "<br>";
                }
            ?>
    <form action = "#" method="post">
        <div>
            <label> Selecione suas cores favoritas: </label><br>
            <input type="checkbox" name="cores1" value="vermelho">Vermelho<br>
            <input type="checkbox" name="cores2" value="verde">Verde<br>
            <input type="checkbox" name="cores3" value="azul">Azul<br>
            </div>
            <br>
            <button type="submit" name="cores">Executar</button>
    </form>
            <?php
            if (isset($_POST['cores'])) {
                if (isset($_POST['cores1'])) echo $_POST['cores1'] . "<br>";
                if (isset($_POST['cores2'])) echo $_POST['cores2'] . "<br>";
                if (isset($_POST['cores3'])) echo $_POST['cores3'] . "<br>";
            }
            ?>

    <form action = "#" method ="post">
        <div>
            <label> Selecione seu gênero: </label><br>
            <input type="radio" name="genero" value="masculino">Masculino<br>
            <input type="radio" name="genero" value="feminino">Feminino<br>
        </div>
        <br>
        <button type="submit" name="enviargenero">Executar</button>
    </form>
            <?php
            if (isset($_POST['enviargenero'])) {
                echo $_POST['genero'] . "<br>";
            }
            ?>
    </form>
    <br><br><br>

    <form action = "#" method="post">
        <div>
            <label for="t1">Nota maior Igual a 6: </label>
            <select name="t1" id = "t1">
                <option value = "S" selected>SIM</option>
                <option value = "N">NÃO</option>
            </select>
        </div>
        
        <div>
            <label for="t2">Frequencia maior 75%: </label>
            <select name="t2" id = "t2">
                <option value = "SIM" selected>SIM</option>
                <option value = "NAO">NÃO</option>
            </select>
        </div>
        <br>
        <button type="submit" name="media">Executar</button>
        
    </form>
            <?php
            if (isset($_POST['media'])) {
                echo "Nota maior ou igual a 6: " . $_POST ['t1'] . "<br>";
                echo "Frequencia maior que 75%: " . $_POST ['t2'] . "<br>";
                if ($_POST ['t1'] == "S" && $_POST ['t2'] == "S") {
                    echo "O aluno passou de semestre";
                } else {
                    echo "O aluno está reprovado.";
                }
            }
            ?>
</body>
</html>