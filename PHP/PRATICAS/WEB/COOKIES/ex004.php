<?php 
    setcookie('usuario', 'admin');
    setcookie('senha', 1234);

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    if($_COOKIE['usuario'] == $usuario && $_COOKIE['senha'] == $senha) {    
        setcookie("ligado", true, time() + 300);
        echo 'Bem-vindo, admin!';
    }
    elseif ($usuario != '' && $senha != '') {
        setcookie("ligado", false);
        echo 'Usuário ou senha inválidos.<br>';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX004 COOKIES</title>
</head>
<body>
    <form method="post" action="<?echo $_SERVER['PHP_SELF'];?>">
        <input name="usuario" placeholder="Login">
        <input name="senha" placeholder="Senha"><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>