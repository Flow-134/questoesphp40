<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre 100 e 200</title>
</head>
<body>
    <h2>Digite um valor</h2>
    <form method = "post">
    <label for="numero1">Numero1</label>
    <input type="number" name="numero1" id="numero1" required><br></br>
    <input type="submit" value="Verificar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero1 = $_POST["numero1"];
    echo "<h2> Resultado </h2>";

    if($numero1 > 100 && $numero1 < 200 ){
        echo "" .$numero1. " Está entre 100 e 200 " ;
    } elseif ($numero1 < 100) {
        echo "" .$numero1. " É menor que 100!!" ;
    } elseif ($numero1 == 100){
        echo "" .$numero1. " Você digitou o número 100!! ";
    } elseif ($numero1 > 200){
        echo "" .$numero1. " É  maior que 200!!";
    } else {
        echo "" .$numero1. "Você digitou o numero 200 !!!";
    }
    
    }





    ?>


</body>
</html>