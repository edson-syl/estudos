<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 CONDICOES</title>
</head>
<body>
    <?php 
        $nota = 90;
        switch(true) {
            case $nota >= 90:
                echo "Aprovado com distinção!";
                break;
            case $nota >= 60 && $nota <= 89:
                echo "Aprovado!";
                break;
            default:
            echo "Reprovado!";

        }

    ?>
</body>
</html>