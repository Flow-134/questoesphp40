<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Troca de Valores</title>
</head>
<body>
    <h2>Trocar valores de A e B</h2>
    <form method="post">
        <label for="a">Valor de A:</label>
        <input type="text" name="a" id="a" required><br><br>

        <label for="b">Valor de B:</label>
        <input type="text" name="b" id="b" required><br><br>

        <input type="submit" value="Trocar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
         
        echo "<h3>Valores Antes da Troca:</h3>";
        echo "A = " . $a . "<br>";
        echo "B = " . $b;

        // Efetuar a troca
        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "<h3>Valores trocados:</h3>";
        echo "A = " . $a . "<br>";
        echo "B = " . $b;
    }
    ?>
</body>
</html>