<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius em Fahrenheit</title>
</head>
<body>
    <h2>Converter Celsius em Fahrenheit</h2>
    <form method="post">
        <label for="celsius">Temperatura em Celsius:</label>
        <input type="number" name="celsius" id="celsius" required><br><br>
        
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        
        // Fórmula de conversão
        $F_h = ($celsius * 1.8) + 32;
        
        // Efetuar conversão
        echo "<h3>Temperatura de Celsius em Fahrenheit</h3>";
        echo $celsius . "°Celsius = " . $F_h . "°Fahrenheit";
    }
    ?>
</body>
</html>