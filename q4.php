<!-- Lista de questoes -->
<!-- Questao 4 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário do Vendedor</title>
</head>
<body>
    <h2>Calcular Salário do Vendedor</h2>
    <form action="" method="post">
        <label for="nome">Nome do Vendedor:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="salario">Salário Fixo:</label>
        <input type="number" id="salario" name="salario" step="0.01" required>
        <br><br>

        <label for="vendas">Total de Vendas (em dinheiro):</label>
        <input type="number" id="vendas" name="vendas" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $vendas = $_POST['vendas'];

        // comissão de 15%
        $comissao = $vendas * 0.15;
        $salarioFinal = $salario + $comissao;

        echo "<h3>Resultado:</h3>";
        echo "Nome do vendedor: " . htmlspecialchars($nome) . "<br>";
        echo "Salário fixo: R$ " . number_format($salario, 2, ',', '.') . "<br>";
        echo "Salário final (com comissão): R$ " . number_format($salarioFinal, 2, ',', '.');
    }
    ?>
</body>
</html>