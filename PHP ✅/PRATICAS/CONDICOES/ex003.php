<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 CONDICOES</title>
</head>
<body>
    <?php 
        $dia = 7;

        switch($dia) {
            case 1:
                echo "Domingo!";
                break;
            case 2:
                echo 'Segunda!';
                break;
            case 3:
                echo "Terca!";
                break;
            case 4:
                echo "Quarta!";
                break;
            case 5:
                echo "Quinta!";
                break;
            case 6:
                echo "Sexta!";
                break;
            case 7:
                echo "Sabado!";
                break;
            default:
                echo "Dia invalido!";
        }
    ?>
</body>
</html>