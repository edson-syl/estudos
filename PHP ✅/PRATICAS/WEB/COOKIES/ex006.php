<?php
    $cor = $_POST['cor'] ?? '';
    if($cor) {
        setcookie('Bg', $cor);
        $background = $cor;
    } elseif(isset($_COOKIE['Bg'])) {
        $background = $_COOKIE['Bg'];
    } else {
        $background = 'white';
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX006 COOKIES</title>
</head>
<body style="background-color: <?echo $background;?>;">
    <h1 style="color: red;">TESTE SITE</h1>
    <form method="post" action="<?echo $_SERVER['PHP_SELF'];?>">
        <button name="cor" value="white" type="submit">Tema claro</button>
        <button name="cor" value="black" type="submit">Tema escuro</button>
    </form>
    
</body>
</html>