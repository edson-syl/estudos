<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 INCLUDE</title>
</head>
<body>
    <?php require 'menu.php'?>
    <?php
        
        $paginas = 2;
        switch($paginas) {
            case 1:
                include('conteudo01.php');
                break;
            case 2:
                include('conteudo02.php');
                break;
        }
    ?>
    
    <div style="position: absolute; bottom: 0;"><?require 'rodape.php'?></div>
</body>
</html>