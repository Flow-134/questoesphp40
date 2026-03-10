<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lucro ou Prejuízo</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <form method="post">
        <?php
        // Gerar 40 campos de entrada
        for ($i = 1; $i <= 40; $i++) {
            echo "<h3>Produto $i</h3>";
            echo "Preço de Custo: <input type='number' step='0.01' name='custo[]' required><br>";
            echo "Preço de Venda: <input type='number' step='0.01' name='venda[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custos = $_POST['custo'];
        $vendas = $_POST['venda'];

        $totalCusto = 0;
        $totalVenda = 0;

        echo "<h2>Resultados</h2>";

        for ($i = 0; $i < 40; $i++) {
            $custo = $custos[$i];
            $venda = $vendas[$i];

            $totalCusto += $custo;
            $totalVenda += $venda;

            echo "Produto " . ($i+1) . ": ";
            if ($venda > $custo) {
                echo "Lucro<br>";
            } elseif ($venda < $custo) {
                echo "Prejuízo<br>";
            } else {
                echo "Empate<br>";
            }
        }

        $mediaCusto = $totalCusto / 40;
        $mediaVenda = $totalVenda / 40;

        echo "<h3>Médias</h3>";
        echo "Média do Preço de Custo: R$ " . number_format($mediaCusto, 2, ',', '.') . "<br>";
        echo "Média do Preço de Venda: R$ " . number_format($mediaVenda, 2, ',', '.') . "<br>";
    }
    ?>
</body>
</html>