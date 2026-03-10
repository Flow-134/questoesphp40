<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calcular Salário do Professor</title>
</head>
<body>
    <h2>Calcular Salário</h2>
    <form method="post" action="">
        <label for="nivel">Nível do Professor:</label>
        <select name="nivel" required>
            <option value="1">Nível 1 - R$12,00/hora</option>
            <option value="2">Nível 2 - R$17,00/hora</option>
            <option value="3">Nível 3 - R$25,00/hora</option>
        </select><br><br>

        <label for="horas">Quantidade de horas/aula:</label>
        <input type="number" name="horas" min="1" required><br><br>

        <input type="submit" value="Calcular Salário">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nivel = (int)$_POST["nivel"];
        $horas = (int)$_POST["horas"];

        // Definir valor da hora conforme nível
        switch ($nivel) {
            case 1:
                $valorHora = 12.00;
                break;
            case 2:
                $valorHora = 17.00;
                break;
            case 3:
                $valorHora = 25.00;
                break;
            default:
                $valorHora = 0;
        }

        // Calcular salário
        $salario = $valorHora * $horas;

        echo "<h3>Salário do Professor: R$ " . number_format($salario, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>