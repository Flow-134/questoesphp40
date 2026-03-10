<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Peso Ideal</title>
</head>
<body>
    <h2>Calcular Peso Ideal</h2>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="sexo">Sexo:</label>
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>

        <label for="altura">Altura (em metros):</label>
        <input type="number" step="0.01" name="altura" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" min="1" required><br><br>

        <input type="submit" value="Calcular Peso Ideal">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $altura = (float)$_POST["altura"];
        $idade = (int)$_POST["idade"];
        $pesoIdeal = 0;

        if ($sexo == "M") {
            if ($altura > 1.70) {
                if ($idade <= 20) {
                    $pesoIdeal = (72.7 * $altura) - 58;
                } elseif ($idade >= 21 && $idade <= 39) {
                    $pesoIdeal = (72.7 * $altura) - 53;
                } else { // idade >= 40
                    $pesoIdeal = (72.7 * $altura) - 45;
                }
            } else { // altura <= 1.70
                if ($idade < 40) {
                    $pesoIdeal = (72.7 * $altura) - 50;
                } else {
                    $pesoIdeal = (72.7 * $altura) - 58;
                }
            }
        } elseif ($sexo == "F") {
            if ($altura > 1.50) {
                $pesoIdeal = (62.1 * $altura) - 44.7;
            } else { // altura <= 1.50
                if ($idade >= 35) {
                    $pesoIdeal = (62.1 * $altura) - 45;
                } else {
                    $pesoIdeal = (62.1 * $altura) - 49;
                }
            }
        }

        echo "<h3>Nome: $nome</h3>";
        echo "<h3>Peso Ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg</h3>";
    }
    ?>
</body>
</html>