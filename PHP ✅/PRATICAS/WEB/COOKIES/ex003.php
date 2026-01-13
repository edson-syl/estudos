<?php 
    if(isset($_POST["cor"])) {
        $background = $_POST['cor'];
        setcookie("background", $background);
    }
    else {
        $background = $_COOKIE['background'] ?? 'white';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 COOKIES</title>
</head>
<body style="background-color: <?= $background; ?>">
    <form method="post" action="<?echo $_SERVER['PHP_SELF']?>">
        <p>Qual cor de background do site?</p>
        <input type="radio" name="cor" value="red">Vermelho
        <input type="radio" name="cor" value="green">Verde
        <input type="radio" name="cor" value="yellow">Amarelo
        <button type="submit">Enviar</button>
    </form>
</body>
</html>