<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Concessionária CARANGO</title>
</head>
<body>
    <h2>Cadastro de Veículos</h2>
    <form method="post">
        <label>Valor do veículo (R$):</label>
        <input type="number" step="0.01" name="valor" required><br><br>

        <label>Combustível:</label>
        <select name="combustivel" required>
            <option value="alcool">Álcool</option>
            <option value="gasolina">Gasolina</option>
            <option value="diesel">Diesel</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    session_start();

    // Inicializa variáveis de sessão
    if (!isset($_SESSION['totalDesconto'])) {
        $_SESSION['totalDesconto'] = 0;
        $_SESSION['totalPago'] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST['valor'];
        $combustivel = $_POST['combustivel'];

        if ($valor == 0) {
            echo "<h3>Encerrando entrada de dados...</h3>";
            echo "<p>Total de descontos concedidos: R$" . number_format($_SESSION['totalDesconto'], 2, ',', '.') . "</p>";
            echo "<p>Total pago pelos clientes: R$" . number_format($_SESSION['totalPago'], 2, ',', '.') . "</p>";

            // Limpa sessão para reiniciar
            session_destroy();
        } else {
            // Calcula desconto conforme combustível
            switch ($combustivel) {
                case "alcool":
                    $percentual = 0.25;
                    break;
                case "gasolina":
                    $percentual = 0.21;
                    break;
                case "diesel":
                    $percentual = 0.14;
                    break;
                default:
                    $percentual = 0;
            }

            $desconto = $valor * $percentual;
            $valorFinal = $valor - $desconto;

            // Atualiza totais
            $_SESSION['totalDesconto'] += $desconto;
            $_SESSION['totalPago'] += $valorFinal;

            echo "<h3>Resultado</h3>";
            echo "<p>Valor do veículo: R$" . number_format($valor, 2, ',', '.') . "</p>";
            echo "<p>Desconto aplicado: R$" . number_format($desconto, 2, ',', '.') . "</p>";
            echo "<p>Valor a ser pago: R$" . number_format($valorFinal, 2, ',', '.') . "</p>";
        }
    }
    ?>
</body>
</html>