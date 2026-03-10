<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior ou menor</title>
</head>
<body>
    <h2>Digite dois valores</h2>
    <form method = "post">
    <label for="numero1">Numero1</label>
    <input type="number" name="numero1" id="numero1" required><br>

    <label for="numero1">Numero2</label>
    <input type="number" name="numero2" id="numero2" required><br></br>
    <input type="submit" value="Verificar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    echo "<h2> Resultado </h2>";

    if($numero1 > $numero2){
        echo "" .$numero1. " é maior do que " .$numero2;
    } else{
        echo "" .$numero2. " é maior do que " .$numero1;
    }
    
    }





    ?>


</body>
</html>