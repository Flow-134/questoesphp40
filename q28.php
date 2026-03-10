<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Reajuste de Funcionários</title>
</head>
<body>
    <h2>Cadastro de Funcionários</h2>
    <form method="post">
        <label>Nome do Funcionário:</label>
        <input type="text" name="nome" required><br><br>

        <label>Salário Atual (R$):</label>
        <input type="number" step="0.01" name="salario" required><br><br>

        <label>Salário Mínimo (R$):</label>
        <input type="number" step="0.01" name="salarioMinimo" required><br><br>

        <input type="submit" value="Calcular Reajuste">
    </form>

    <?php
    session_start();

    // Inicializa variáveis de sessão
    if (!isset($_SESSION['totalAumento'])) {
        $_SESSION['totalAumento'] = 0;
        $_SESSION['funcionarios'] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $salarioMinimo = $_POST['salarioMinimo'];

        // Determina percentual de reajuste
        if ($salario < 3 * $salarioMinimo) {
            $percentual = 0.50;
        } elseif ($salario >= 3 * $salarioMinimo && $salario <= 10 * $salarioMinimo) {
            $percentual = 0.20;
        } elseif ($salario > 10 * $salarioMinimo && $salario <= 20 * $salarioMinimo) {
            $percentual = 0.15;
        } else {
            $percentual = 0.10;
        }

        $reajuste = $salario * $percentual;
        $novoSalario = $salario + $reajuste;

        // Atualiza totais
        $_SESSION['totalAumento'] += $reajuste;
        $_SESSION['funcionarios'][] = [
            'nome' => $nome,
            'salario' => $salario,
            'reajuste' => $reajuste,
            'novoSalario' =>$novoSalario
        ];

        echo "<h3>Resultado para $nome</h3>";
        echo "<p>Salário atual: R$" . number_format($salario, 2, ',', '.') . "</p>";
        echo "<p>Reajuste: R$" . number_format($reajuste, 2, ',', '.') . "</p>";
        echo "<p>Novo salário: R$" . number_format($novoSalario, 2, ',', '.') . "</p>";

        echo "<hr><h3>Resumo da Folha de Pagamento</h3>";
        foreach ($_SESSION['funcionarios'] as $f) {
            echo "Funcionário: " . $f['nome'] .
                 " | Reajuste: R$" . number_format($f['reajuste'], 2, ',', '.') .
                 " | Novo Salário: R$" . number_format($f['novoSalario'], 2, ',', '.') . "<br>";
        }

        echo "<p><strong>Total de aumento da folha: R$" . number_format($_SESSION['totalAumento'], 2, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>