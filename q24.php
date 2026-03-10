<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Números</title>
</head>
<body>
    <h2>Digite a quantidade de números</h2>
    <form method="post">
        <label>Quantidade (N):</label>
        <input type="number" name="quantidade" min="1" required>
        <input type="submit" name="gerar" value="Gerar Campos">
    </form>

    <?php
    // Se o usuário definiu a quantidade de números
    if (isset($_POST['gerar'])) {
        $quantidade = $_POST['quantidade'];

        echo "<h3>Digite os $quantidade números:</h3>";
        echo "<form method='post'>";
        for ($i = 1; $i <= $quantidade; $i++) {
            echo "Número $i: <input type='number' name='numeros[]' required><br>";
        }
        echo "<input type='hidden' name='quantidade' value='$quantidade'>";
        echo "<input type='submit' name='verificar' value='Verificar'>";
        echo "</form>";
    }

    // Se o usuário enviou os números
    if (isset($_POST['verificar'])) {
        $numeros = $_POST['numeros'];
        $quantidade = $_POST['quantidade'];

        echo "<h2>Resultados</h2>";
        for ($i = 0; $i < $quantidade; $i++) {
            $num = $numeros[$i];
            if ($num > 0) {
                $resultado = "Positivo";
            } elseif ($num < 0) {
                $resultado = "Negativo";
            } else {
                $resultado = "Zero";
            }
            echo "Número " . ($i+1) . ": $num → <strong>$resultado</strong><br>";
        }
    }
    ?>
</body>
</html>