<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Conta de Luz</title>
</head>
<body>
    <h2>Calculadora de Consumo de Energia</h2>
    <form method="post">
        <label>Consumo em KW/h:</label><br>
        <input type="number" step="0.01" name="consumo" required autofocus><br><br>

        <label>Tipo de Cliente:</label><br>
        <select name="tipo" required>
            <option value="1">1 - Residência (R$ 0,60)</option>
            <option value="2">2 - Comércio (R$ 0,48)</option>
            <option value="3">3 - Indústria (R$ 1,29)</option>
        </select><br><br>

        <button type="submit">Calcular Conta</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $consumo = (float)$_POST['consumo'];
        $tipo = $_POST['tipo'];
        $valorKwh = 0;

        switch ($tipo) {
            case '1': $valorKwh = 0.60; $descricao = "Residência"; break;
            case '2': $valorKwh = 0.48; $descricao = "Comércio"; break;
            case '3': $valorKwh = 1.29; $descricao = "Indústria"; break;
            default: echo "<p>Tipo inválido!</p>"; exit;
        }

        $valorTotal = $consumo * $valorKwh;

        echo "<hr>";
        echo "<h3>Detalhamento da Conta</h3>";
        echo "<p>Tipo de Cliente: <strong>$descricao</strong></p>";
        echo "<p>Consumo Informado: <strong>$consumo KW/h</strong></p>";
        echo "<h2>Valor Total a Pagar: R$ " . number_format($valorTotal, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
