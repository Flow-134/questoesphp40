<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custo ao Consumidor - Carro Novo</title>
</head>
<body>
    <h2>Calcular Custo ao Consumidor de um Carro Novo</h2>
    <form method="post">
        <label for="custo_fabrica">Custo de fábrica (R$):</label>
        <input type="number" step="0.01" name="custo_fabrica" id="custo_fabrica" required><br><br>

        <input type="submit" value="Calcular Custo ao Consumidor">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custo_fabrica = $_POST["custo_fabrica"];

        // Percentuais fixos
        $impostos = 0.45;       // 45%
        $distribuidor = 0.28;   // 28%

        // Primeiro aplica os impostos sobre o custo de fábrica
        $custo_com_impostos = $custo_fabrica * (1 + $impostos);

        // Depois aplica a porcentagem do distribuidor sobre o resultado
        $custo_consumidor = $custo_com_impostos * (1 + $distribuidor);

        // Exibir resultado
        echo "<h3>Resultado</h3>";
        echo "Custo de fábrica: R$ " . number_format($custo_fabrica, 2, ',', '.') . "<br>";
        echo "Custo ao consumidor: R$ " . number_format($custo_consumidor, 2, ',', '.');
    }
    ?>
</body>
</html>