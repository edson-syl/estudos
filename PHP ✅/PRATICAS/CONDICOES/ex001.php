<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 CONDICOES</title>
</head>
<body>
    <?php 
        $idade = 66;

        if($idade < 18)
            echo 'Voce eh menor de idade!';
        elseif ($idade >= 18 & $idade <= 65)
            echo "Voce eh adulto!";
        else
            echo "Voce eh idoso!"

    ?>
</body>
</html>