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
</body>
</html>