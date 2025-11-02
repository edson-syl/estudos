<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 FUNCOES</title>
</head>
<body>
    <?php
        $x = 9;
        function adicionar10($num) {
            $valor = $num + 10;
            echo 'Valor original: ' . $num . " mais 10 eh " . $valor;

        }

        adicionar10($x);
    ?>

</body>
</html>