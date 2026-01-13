<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 ARRAY</title>
</head>
<body>
    <?php
     $cores = [];
     $cores[1] = 'Azul';
     $cores[2] = "Verde";
     $cores["Favorita"] = "Vermelho";
     print_r($cores);
     $cores[2] = "Amarelo";
     print_r($cores);

    ?>
</body>
</html>