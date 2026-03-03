<?php 
    setcookie("usuario", 'Edson', time() + 3600);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 COOKIES</title>
</head>
<body>
    <?php
        if( isset($_COOKIE["usuario"]) &&$_COOKIE["usuario"] == "Edson") {
            echo 'Bem vindo, ' . $_COOKIE["usuario"];
        }
        else {
            echo 'Bem vindo, visitante!';
        }
    ?>
</body>
</html>