<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelamento - Loja Mamão com Açúcar</title>
</head>
<body>
    <h2>Parcelamento em 5 vezes sem juros</h2>
    <form method="post">
        <label for="valor">Valor da compra (R$):</label>
        <input type="number" step="0.01" name="valor" id="valor" required><br><br>

        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];

        // Número de parcelas fixo
        $parcelas = 5;

        // Cálculo do valor de cada prestação
        $valor_parcela = $valor / $parcelas;

        // Exibir resultado
        echo "<h3>Resultado</h3>";
        echo "Valor total da compra: R$ " . number_format($valor, 2, ',', '.') . "<br>";
        echo "Número de parcelas: $parcelas <br>";
        echo "Valor de cada parcela: R$ " . number_format($valor_parcela, 2, ',', '.');
    }
    ?>
</body>
</html>