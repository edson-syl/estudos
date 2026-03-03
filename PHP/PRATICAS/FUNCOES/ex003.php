<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 FUNCOES</title>
</head>
<body>
    <?php
        function saudacao($nome = "Visitante") {
            echo 'Ola ' . $nome . "! Tudo bem?";

        }
        saudacao();
    ?>
</body>
</html>