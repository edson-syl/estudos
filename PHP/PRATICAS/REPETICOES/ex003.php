<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 REPETICOES</title>
</head>
<body>
    <?php
        $num = 9;
        for($i = 1; $i <= 10; $i++) {
            $mult = $num * $i;
            print($num .  " X " . $i . " = " . $mult . "<br>");
        }
    ?>
</body>
</html>