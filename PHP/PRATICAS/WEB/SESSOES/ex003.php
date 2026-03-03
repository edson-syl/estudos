<?php
    session_start();

    $produtos = $_POST['produtos'] ?? '';
    if($produtos) {
        $_SESSION['produtos'] = $produtos;
        echo "Produtos no carrinho " . implode(', ', $produtos);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 SESSAO</title>
</head>
<body>
    <form method="post" action="<?echo $_SERVER['PHP_SELF']?>">
        <input type="checkbox" name="produtos[]" value="Iphone 15">Iphone 15
        <input type="checkbox" name="produtos[]" value="Samsung A23">Samsung A23
        <input type="checkbox" name="produtos[]" value="Tagima Tw55">Tagima Tw55
        <button type="submit">Adicionar ao Carrinho</button>
    </form> 
</body>
</html>