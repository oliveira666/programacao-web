<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getpost</title>
</head>
<body>
    <div class="titulo">$GET_$_POST</div>

    <form action="#" method="get">
        <input type="text" name="nome" id="nome">
        <input type="text" name="sobrenome" id="sobrenome">
        <select name="estado">
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
        </select>
        <button>Enviar</button>
    </form>

    <form action="#" method="post">
        <input type="text" name="nome" id="nome">
        <input type="text" name="sobrenome" id="sobrenome">
        <select name="estado">
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
        </select>
        <button>Enviar</button>
    </form>

    <?php


    if (isset($_GET['nome'])) {
        print_r($_GET);
        echo "<br>";
        echo "<br>" . count($_GET);
        echo "<br>" . $_GET['nome'];
        echo "<br>";
        echo "<br>";
    }
    if (isset($_POST['nome'])) {
        print_r($_POST);
        echo "<br>";
        echo "<br>" . count($_POST);
        echo "<br>" . $_POST['nome'];
        echo "<br>";
        echo "<br>";
    }

    ?>

</body>
</html>