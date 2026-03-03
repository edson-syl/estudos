<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 FORMULARIO</title>
</head>
<body>
    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
        <input placeholder="Nome" name="nome" required>
        <input placeholder="E-mail" name="email" required>
        <input placeholder="Idade" name="idade" required>
        <button type="submit">Enviar</button>
    </form>

    <?php 
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $idade = $_POST['idade'] ?? '';

    if ($nome != '' || $email != '' | $idade != '') {
        echo '<br>Nome: ' . $nome;
        echo '<br>E-mail: ' . $email;
        echo '<br>Idade: ' . $idade;
    }
    ?>
</body>
</html>