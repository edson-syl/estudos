<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 FORMULARIO</title>
</head>
<body>

    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
        <input placeholder="Nome" name="nome">
        <button type="submit">Enviar</button>
    </form>

    <?php
    $texto = $_POST['nome'] ?? '';
    
        if ($texto != '') {
            echo 'Voce digitou ' . $texto;
        }
    ?>
</body>
</html>