<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 ARQUIVOS</title>
</head>
<body>
    <?php
        $file = fopen("visitas.txt", 'r+');
        $line = fgets($file);
        if ($line == null) {
            $newline = 1;
        }
        else {
            $newline = intval($line) + 1;
        }

        rewind($file);
        fwrite($file, $newline);
        echo $newline;

        fclose($file);
    ?>
</body>
</html>