<!-- Lista de questoes -->
<!-- Questao 3 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de Combústivel</title>
</head>
<body>
    <form action="" method = "get">
        <label for="Consumo">Consumo</label>
        <input type="number" id = "Consumo" name = "Consumo">
        <br>
        <label for="Distancia">Distancia</label>
        <input type="number" id = "Distancia" name = "Distancia">
        <input type="submit" value = "divisão" name = "div">
    </form>
    <?php
if(isset($_GET['Consumo']) && isset($_GET['Distancia'])){
    $Consumo = $_GET['Consumo'];
    $Distancia = $_GET['Distancia'];
}
    
    if(isset($_GET['div'])){
        echo "<br>" .($Consumo / $Distancia);
    }
    ?>
</body>
</htmlDistancia