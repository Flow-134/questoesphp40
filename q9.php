<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento da Poupança</title>
</head>
<body>
    <h2>Calcular Rendimento da Poupança</h2>
    <form method="post">
        <label for="deposito">Valor depositado (R$):</label>
        <input type="number" step="0.01" name="deposito" id="deposito" required><br><br>

        <input type="submit" value="Calcular Rendimento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $deposito = $_POST["deposito"];

        // Taxa fixa da poupança: 0,70% ao mês
        $taxa = 0.007;

        // Valor após 1 mês
        $rendimento = $deposito * (1 + $taxa);

        // Exibir resultado
        echo "<h3>Resultado</h3>";
        echo "Depósito inicial: R$ " . number_format($deposito, 2, ',', '.') . "<br>";
        echo "Valor após 1 mês com rendimento: R$ " . number_format($rendimento, 2, ',', '.');
    }
    ?>
</body>
</html>