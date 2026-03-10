<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <h2>Cadastro de Funcionário</h2>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Idade:</label>
        <input type="number" name="idade" min="16" required><br><br>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br><br>

        <label>Salário Fixo (R$):</label>
        <input type="number" step="0.01" name="salario" required><br><br>

        <input type="submit" value="Calcular Salário Líquido">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $salario = $_POST['salario'];

        // Como não há descontos especificados, salário líquido = salário fixo
        $salarioLiquido = $salario;

        echo "<h3>Resultado</h3>";
        echo "<p>Funcionário: <strong>$nome</strong></p>";
        echo "<p>Idade: $idade anos</p>";
        echo "<p>Sexo: $sexo</p>";
        echo "<p>Salário Líquido: R$" . number_format($salarioLiquido, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>