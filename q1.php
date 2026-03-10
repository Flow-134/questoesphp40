<!-- Lista de questoes -->
<!-- Questao 1 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Valores</title>
</head>
<body>
    <h2>Digite dois números</h2>
    <form action="" method = "post">
        <label for="numero1">Numero1</label>
        <input type="number" id = "numero1" name = "numero1">
        <br>
        <label for="numero2">Numero2</label>
        <input type="number" id = "numero2" name = "numero2"><br></br>
        <input type="submit" value = "soma">
    </form>
    <?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    echo "<h2>Resultado</h2><br>" .$numero1 + $numero2 ;
?>
    
</body>
</html> 