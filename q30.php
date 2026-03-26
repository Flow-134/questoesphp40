<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário Líquido</title>
</head>
<body>
    <h2>Cadastro de Funcionário</h2>
    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        <label>Sexo:</label><br>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br><br>

        <label>Salário Fixo (R$):</label><br>
        <input type="number" step="0.01" name="salario_fixo" required><br><br>

        <button type="submit">Calcular Salário Líquido</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $salarioFixo = (float)$_POST['salario_fixo'];

        // Exemplo de desconto simplificado (ex: 11% de INSS)
        $percentualDesconto = 0.11;
        $valorDesconto = $salarioFixo * $percentualDesconto;
        $salarioLiquido = $salarioFixo - $valorDesconto;

        echo "<hr>";
        echo "<h3>Resultado do Processamento</h3>";
        echo "<p><strong>Funcionário:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade anos | <strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Salário Bruto:</strong> R$ " . number_format($salarioFixo, 2, ',', '.') . "</p>";
        echo "<p><strong>Descontos (11%):</strong> R$ " . number_format($valorDesconto, 2, ',', '.') . "</p>";
        echo "<h2>Salário Líquido: R$ " . number_format($salarioLiquido, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
