<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo Salarial - Escola APRENDER</title>
</head>
<body>
    <h2>Cálculo de Salário de Professor</h2>
    <form method="post">
        <label>Nome do Professor:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Quantidade de Horas/Aula:</label><br>
        <input type="number" name="horas" min="1" required><br><br>

        <label>Nível do Professor:</label><br>
        <select name="nivel" required>
            <option value="1">Nível 1 (R$ 12,00)</option>
            <option value="2">Nível 2 (R$ 17,00)</option>
            <option value="3">Nível 3 (R$ 25,00)</option>
        </select><br><br>

        <button type="submit">Calcular Salário</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $horas = (int)$_POST['horas'];
        $nivel = (int)$_POST['nivel'];
        $valorHora = 0;

        // Define o valor da hora baseado no nível
        switch ($nivel) {
            case 1: $valorHora = 12.00; break;
            case 2: $valorHora = 17.00; break;
            case 3: $valorHora = 25.00; break;
            default: echo "<p>Nível inválido!</p>"; exit;
        }

        $salarioFinal = $horas * $valorHora;

        echo "<hr>";
        echo "<h3>Holerite: $nome</h3>";
        echo "<p>Nível selecionado: <b>$nivel</b></p>";
        echo "<p>Total de horas: <b>$horas h</b></p>";
        echo "<h2>Salário Total: R$ " . number_format($salarioFinal, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
