<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 ARRAY</title>
</head>
<body>
    <?php
    $carros = ['Civic', 'Gol', 'Fusca', 'Ferrari'];
    $lucas = "Lucas ficou com o ". $carros[0];
    $geraldo = "Geraldo ficou com os carros: " . $carros[1] . $carros[2] . $carros[3];
    echo $lucas;
    echo $geraldo;
    ?>
</body>
</html>