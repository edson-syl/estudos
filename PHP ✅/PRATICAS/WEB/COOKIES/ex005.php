<?php
    if(isset($_GET['apagar'])) {
        setcookie('teste', '', time() - 3600);
        header("Location: ex005.php");
        exit;
    }

    if(isset($_COOKIE['teste'])) {
        setcookie('teste', 'ativo', time() + 3600);
        $teste = 'ativo';
        echo $teste;

    } else {
        $teste = $_COOKIE['teste'] ?? '';
        echo $teste;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX005 COOKIES</title>
</head>
<body>
    <a href="?apagar=1"><button>Apagar cookie</button></a>
</body>
</html>