<?php
session_start();


if (!isset($_SESSION['total_aumento_folha'])) {
    $_SESSION['total_aumento_folha'] = 0;
    $_SESSION['contagem_funcionarios'] = 0;
}

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $salarioAtual = (float)$_POST['salario'];
    $salarioMinimo = (float)$_POST['salario_minimo'];

    // Definição das faixas
    if ($salarioAtual < ($salarioMinimo * 3)) {
        $percentual = 0.50;
    } elseif ($salarioAtual >= ($salarioMinimo * 3) && $salarioAtual <= ($salarioMinimo * 10)) {
        $percentual = 0.20;
    } elseif ($salarioAtual > ($salarioMinimo * 10) && $salarioAtual <= ($salarioMinimo * 20)) {
        $percentual = 0.15;
    } else {
        $percentual = 0.10;
    }

    $valorReajuste = $salarioAtual * $percentual;
    $novoSalario = $salarioAtual + $valorReajuste;

    // Acumula os valores na sessão
    $_SESSION['total_aumento_folha'] += $valorReajuste;
    $_SESSION['contagem_funcionarios']++;

    $resultado = "
        <div style='border: 1px solid #ccc; padding: 10px; margin-top: 10px;'>
            <p><strong>Funcionário:</strong> $nome</p>
            <p><strong>Valor do Reajuste:</strong> R$ " . number_format($valorReajuste, 2, ',', '.') . " (" . ($percentual * 100) . "%)</p>
            <p><strong>Novo Salário:</strong> R$ " . number_format($novoSalario, 2, ',', '.') . "</p>
        </div>";
}

// Resetar dados
if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reajuste Salarial - Empresa</title>
</head>
<body>
    <h2>Cadastro de Reajuste (Funcionário <?php echo $_SESSION['contagem_funcionarios'] + 1; ?> / 584)</h2>
    
    <form method="post">
        <label>Nome do Funcionário:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Salário Atual (R$):</label><br>
        <input type="number" step="0.01" name="salario" required><br><br>

        <label>Valor do Salário Mínimo Atual (R$):</label><br>
        <input type="number" step="0.01" name="salario_minimo" value="1412.00" required><br><br>

        <button type="submit">Calcular Reajuste</button>
        <a href="?reset=1">Zerar Tudo</a>
    </form>

    <?php echo $resultado; ?>

    <hr>
    <h3>Resumo da Folha de Pagamento:</h3>
    <p>Aumento total na folha: <strong>R$ <?php echo number_format($_SESSION['total_aumento_folha'], 2, ',', '.'); ?></strong></p>
    <p>Funcionários processados: <strong><?php echo $_SESSION['contagem_funcionarios']; ?></strong></p>
</body>
</html>
