<?php
session_start();

// Inicializa os totais se não existirem
if (!isset($_SESSION['total_desconto'])) {
    $_SESSION['total_desconto'] = 0;
    $_SESSION['total_pago'] = 0;
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorVeiculo = (float)$_POST['valor'];
    $combustivel = $_POST['combustivel'];

    if ($valorVeiculo > 0) {
        // Define o percentual de desconto
        switch ($combustivel) {
            case 'alcool':   $percentual = 0.25; break;
            case 'gasolina': $percentual = 0.21; break;
            case 'diesel':   $percentual = 0.14; break;
            default:         $percentual = 0;    break;
        }

        $valorDesconto = $valorVeiculo * $percentual;
        $valorFinal = $valorVeiculo - $valorDesconto;

        // Acumula nos totais da sessão
        $_SESSION['total_desconto'] += $valorDesconto;
        $_SESSION['total_pago'] += $valorFinal;

        $mensagem = "Desconto de R$ " . number_format($valorDesconto, 2, ',', '.') . 
                    " | Valor a pagar: R$ " . number_format($valorFinal, 2, ',', '.');
    } else {
        $mensagem = "<strong>Entrada encerrada (Valor Zero).</strong>";
    }
}

// Botão para resetar os totais
if (isset($_GET['limpar'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Concessionária CARANGO</title>
</head>
<body>
    <h2>Vendas CARANGO</h2>
    <form method="post">
        <label>Valor do Veículo (0 para encerrar):</label><br>
        <input type="number" step="0.01" name="valor" required autofocus><br><br>

        <label>Combustível:</label><br>
        <select name="combustivel">
            <option value="alcool">Álcool (25%)</option>
            <option value="gasolina">Gasolina (21%)</option>
            <option value="diesel">Diesel (14%)</option>
        </select><br><br>

        <button type="submit">Calcular</button>
        <a href="?limpar=1">Reiniciar Totais</a>
    </form>

    <hr>
    <p><?php echo $mensagem; ?></p>
    
    <h3>Resumo Geral (Acumulado):</h3>
    <p>Total de Descontos Concedidos: <strong>R$ <?php echo number_format($_SESSION['total_desconto'], 2, ',', '.'); ?></strong></p>
    <p>Total Pago pelos Clientes: <strong>R$ <?php echo number_format($_SESSION['total_pago'], 2, ',', '.'); ?></strong></p>
</body>
</html>
