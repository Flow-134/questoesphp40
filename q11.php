<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Valor de Venda</title>
</head>
<body>
    <h2>Calcular Valor de Venda</h2>
    <form method="post">
        <label for="custo">Preço de custo (R$):</label>
        <input type="number" step="0.01" name="custo" id="custo" required><br><br>

        <label for="percentual">Percentual de acréscimo (%):</label>
        <input type="number" step="0.01" name="percentual" id="percentual" required><br><br>

        <input type="submit" value="Calcular Valor de Venda">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custo = $_POST["custo"];
        $percentual = $_POST["percentual"];

        // Conversão do percentual para decimal
        $taxa = $percentual / 100;

        // Cálculo do valor de venda
        $valor_venda = $custo * (1 + $taxa);

        // Exibir resultado
        echo "<h3>Resultado</h3>";
        echo "Preço de custo: R$ " . number_format($custo, 2, ',', '.') . "<br>";
        echo "Percentual de acréscimo: " . number_format($percentual, 2, ',', '.') . "%<br>";
        echo "Valor de venda: R$ " . number_format($valor_venda, 2, ',', '.');
    }
    ?>
</body>
</html>