<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Operações Aritméticas</title>
</head>
<body>
    <h2>Digite dois números reais e um operador</h2>
    <form method="post" action="">
        <label for="A">Valor A:</label>
        <input type="number" step="any" name="A" required><br><br>

        <label for="B">Valor B:</label>
        <input type="number" step="any" name="B" required><br><br>

        <label for="C">Operador (+, -, *, /):</label>
        <input type="text" name="C" maxlength="1" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $A = (float)$_POST["A"];
        $B = (float)$_POST["B"];
        $C = $_POST["C"];

        $resultado = null;
        $erro = false;

        switch ($C) {
            case '+':
                $resultado = $A + $B;
                break;
            case '-':
                $resultado = $A - $B;
                break;
            case '*':
                $resultado = $A * $B;
                break;
            case '/':
                if ($B == 0) {
                    $erro = true;
                    echo "<p style='color:red;'>Erro: divisão por zero não permitida.</p>";
                } else {
                    $resultado = $A / $B;
                }
                break;
            default:
                $erro = true;
                echo "<p style='color:red;'>Operador não definido.</p>";
        }

        if (!$erro) {
            echo "<h3>Resultado: $A $C $B = $resultado</h3>";
        }
    }
    ?>
</body>
</html>