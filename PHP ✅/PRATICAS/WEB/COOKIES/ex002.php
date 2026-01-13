<?php
    if(isset($_COOKIE["visitas"])) {
        $visitas = $_COOKIE['visitas'] += 1;
    }
    else {
        $visitas = 1;
    }

    setcookie("usuario", "Edson", time() + 3600);
    setcookie("visitas", $visitas, time() + 3600);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 COOKIES</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["usuario"])) {
            echo 'O usuario ' . $_COOKIE["usuario"] . ", ja visitou o site " . $visitas . ' vezes.';
        }
    ?>
</body>
</html>