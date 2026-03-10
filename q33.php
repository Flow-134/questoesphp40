<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Triângulo</title>
</head>
<body>
    <h2>Digite três valores inteiros</h2>
    <form method="post" action="">
        <label for="A">Lado A:</label>
        <input type="number" name="A" required><br><br>

        <label for="B">Lado B:</label>
        <input type="number" name="B" required><br><br>

        <label for="C">Lado C:</label>
        <input type="number" name="C" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $A = (int)$_POST["A"];
        $B = (int)$_POST["B"];
        $C = (int)$_POST["C"];

        // Verifica se os lados podem formar um triângulo
        if (($A < $B + $C) && ($B < $A + $C) && ($C < $A + $B)) {
            // Verifica o tipo de triângulo
            if ($A == $B && $B == $C) {
                echo "<h3>Triângulo Equilátero</h3>";
            } elseif ($A == $B || $A == $C || $B == $C) {
                echo "<h3>Triângulo Isósceles</h3>";
            } else {
                echo "<h3>Triângulo Escaleno</h3>";
            }
        } else {
            echo "<p style='color:red;'>Os valores informados não podem formar um triângulo.</p>";
        }
    }
    ?>
</body>
</html>