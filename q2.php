<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
</head>
<body>
    <h2>Digite dois valores</h2>
    <form action="" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" step="0.01" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" step="0.01" id="numero2" name="numero2" required>
        <br><br>
        <input type="submit" value="Soma" name="soma">
        <input type="submit" value="Subtração" name="sub">
        <input type="submit" value="Multiplicação" name="mult">
        <input type="submit" value="Divisão" name="div">
    </form>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if (isset($_POST['soma'])) {
            echo "<br>Resultado da soma: " . ($numero1 + $numero2);
        } else if (isset($_POST['sub'])) {
            echo "<br>Resultado da subtração: " . ($numero1 - $numero2);
        } else if (isset($_POST['mult'])) {
            echo "<br>Resultado da multiplicação: " . ($numero1 * $numero2);
        } else if (isset($_POST['div'])) {
            if ($numero2 != 0) {
                echo "<br>Resultado da divisão: " . ($numero1 / $numero2);
            } else {
                echo "<br>Não é possível dividir por zero.";
            }
        }
    }
    ?>
</body>
</html>