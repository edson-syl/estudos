<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 ARQUIVOS</title>
</head>
<body>
    <?php
        $file = fopen('dados.txt', 'w+') or die ("Arquivo nao encontrado!");
        fwrite($file, "Neymar\n");
        fwrite($file, "Messi\n");
        fwrite($file, "Cristiano Ronaldo\n");
        rewind($file);
        while(!feof($file)) {
            $line = fgets($file);
            echo $line . '<br>';
        }

        fclose($file);
    ?>
</body>
</html>