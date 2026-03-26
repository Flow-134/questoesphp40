<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>
    <h2>Operações Aritméticas</h2>
    <form method="post">
        <input type="number" step="0.01" name="a" placeholder="Valor A" required>
        
        <select name="c" required>
            <option value="">Selecione o Operador</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="?">Outro (Teste Erro)</option>
        </select>

        <input type="number" step="0.01" name="b" placeholder="Valor B" required>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = $_POST['c'];
        $resultado = null;
        $erro = "";

        switch ($c) {
            case '+':
                $resultado = $a + $b;
                break;
            case '-':
                $resultado = $a - $b;
                break;
            case '*':
                $resultado = $a * $b;
                break;
            case '/':
                if ($b == 0) {
                    $erro = "Erro: Divisão por zero não permitida.";
                } else {
                    $resultado = $a / $b;
                }
                break;
            default:
                $erro = "Operador não definido.";
                break;
        }

        echo "<hr>";
        if ($erro != "") {
            echo "<p style='color:red;'>$erro</p>";
        } else {
            echo "<h3>Resultado: $a $c $b = $resultado</h3>";
        }
    }
    ?>
</body>
</html>
