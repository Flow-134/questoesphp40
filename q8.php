<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dólar para Real</title>
</head>
<body>
    <h2>Conversão de Dólar (US$) para Real (R$)</h2>
    <form method="post">
        <label for="cotacao">Cotação do Dólar (R$):</label>
        <input type="number" step="0.01" name="cotacao" id="cotacao" required><br><br>

        <label for="dolares">Quantidade em Dólares (US$):</label>
        <input type="number" step="0.01" name="dolares" id="dolares" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cotacao = $_POST["cotacao"];
        $dolares = $_POST["dolares"];

        // Conversão
        $reais = $cotacao * $dolares;

        // Exibir resultado
        echo "<h3>Resultado da Conversão</h3>";
        echo "US$ " . number_format($dolares, 2, ',', '.') . 
             " = R$ " . number_format($reais, 2, ',', '.');
    }
    ?>
</body>
</html>