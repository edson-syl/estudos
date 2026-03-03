<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 FUNCOES</title>
</head>
<body>
    <?php
        function retornarQuadrado($num) {
            $quadrado = $num * $num;
            echo "O quadrado de " . $num . " eh " . $quadrado;

        }

        retornarQuadrado(9);
    ?>
    
</body>
</html>