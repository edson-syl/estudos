<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 FORMULARIO</title>
</head>
<body>
    <form method="post" action="<?echo $_SERVER['PHP_SELF']?>">
        <p>Quais esportes voce gosta? </p>
        <input type="checkbox" name="esportes[]" value="Futebol">Futebol
        <input type="checkbox" name="esportes[]" value="Volei">Volei
        <input type="checkbox" name="esportes[]" value="Basquete">Basquete<br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $esportes = $_POST['esportes'] ?? [];

            if(!empty($esportes)) {
                echo 'Voce gosta de ' . implode(", ", $esportes);
            }
            else {
                echo 'Voce nao selecionou nenhuma!';
            }
        }
    ?>
</body>
</html>