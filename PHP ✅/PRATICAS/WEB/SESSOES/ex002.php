<?php
    session_start();

    $idioma = $_POST['idioma'] ?? '';
    if($idioma) {
        $_SESSION['Idioma'] = $idioma;  
    }
    echo $_SESSION['Idioma'];
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 SESSAO</title>
</head>
<body>
    <form method="post" action="<?echo $_SERVER['PHP_SELF']?>">
        <label>Seu idioma</label><br>
        <input type="radio" name="idioma" value="Portugues">Portugues
        <input type="radio" name="idioma" value="Ingles">Ingles
        <input type="radio" name="idioma" value="Espanhol">Espanhol
        <button type="submit">Escolher</button>
    </form>
</body>
</html>