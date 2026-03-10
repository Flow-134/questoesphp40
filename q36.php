<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conta de Luz</title>
</head>
<body>
    <h2>Calcular Conta de Luz</h2>
    <form method="post" action="">
        <label for="tipo">Tipo de Cliente:</label>
        <select name="tipo" required>
            <option value="1">Residência - R$0,60 por KW/h</option>
            <option value="2">Comércio - R$0,48 por KW/h</option>
            <option value="3">Indústria - R$1,29 por KW/h</option>
        </select><br><br>

        <label for="consumo">Consumo (KW/h):</label>
        <input type="number" name="consumo" min="1" required><br><br>

        <input type="submit" value="Calcular Conta">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo = (int)$_POST["tipo"];
        $consumo = (int)$_POST["consumo"];

        // Definir valor do KW/h conforme tipo de cliente
        switch ($tipo) {
            case 1:
                $valorKW = 0.60;
                $cliente = "Residência";
                break;
            case 2:
                $valorKW = 0.48;
                $cliente = "Comércio";
                break;
            case 3:
                $valorKW = 1.29;
                $cliente = "Indústria";
                break;
            default:
                $valorKW = 0;
                $cliente = "Desconhecido";
        }

        // Calcular valor da conta
        $conta = $valorKW * $consumo;

        echo "<h3>Tipo de Cliente: $cliente</h3>";
        echo "<h3>Consumo: $consumo KW/h</h3>";
        echo "<h3>Valor da Conta: R$ " . number_format($conta, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>