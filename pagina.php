<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagina.css">
</head>
<body>
    <form action="" method="get">
        <label for="lblLogin">Login:</label>    
        <input type="text"  name="userLogin" id="userLogn">
        <br>
        <label for="lblPassword">Password:</label>
        <input type="password" name="userPassword" id="userPassword">
        <br>
        <input type="submit" name="cmdEnviaLogin" value="Enviar">
        <button type="reset">Limpar</button>

        
    </form>
    
    <?php
    //!-- Valida Login --!
    function checkLogin($login, $password) {
    $file = fopen("logins.txt", "r");
    while (($line = fgets($file)) !== false) {
        list($l, $p) = explode(":", $line);
        if (trim($l) === $login && trim($p) === $password) {
            fclose($file);
            return true;
        }
    }
    fclose($file);
    return false;
}
    
    $LOGIN = FALSE;
    
        if (isset($_GET['cmdEnviaLogin']))
        {
            $userLogin = $_GET['userLogin'];
            $userPassword = $_GET['userPassword'];
            if (checkLogin($userLogin,$userPassword))
            {
                header("Location: pagina2.php");
                exit;
            }
            else
                echo "Usuário ou senha errados! Verifique os dados inseridos.";
        }
    ?>
</body>
</html>