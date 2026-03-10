<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Comparação de Números</title>
</head>
<body>
    <h2>Digite dois números</h2>
    <form method="post">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>

        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 == $num2) {
            echo "<p>Os números são iguais: $num1 e $num2.</p>";
        } else {
            if ($num1 > $num2) {
                echo "<p>Os números são diferentes. O maior é $num1.</p>";
            } else {
                echo "<p>Os números são diferentes. O maior é $num2.</p>";
            }
        }
    }
    ?>
</body>
</html>