<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ordenar Valores</title>
</head>
<body>
    <h2>Digite três valores inteiros distintos</h2>
    <form method="post" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" required><br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" required><br><br>

        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" required><br><br>

        <input type="submit" value="Ordenar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lê os valores do formulário
        $valor1 = (int)$_POST["valor1"];
        $valor2 = (int)$_POST["valor2"];
        $valor3 = (int)$_POST["valor3"];

        // Coloca os valores em um array
        $valores = [$valor1, $valor2, $valor3];

        // Ordena o array em ordem crescente
        sort($valores);

        // Exibe os valores ordenados
        echo "<h3>Valores em ordem crescente:</h3>";
        foreach ($valores as $v) {
            echo $v . " ";
        }
    }
    ?>
</body>
</html>