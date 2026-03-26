<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Peso Ideal</title>
</head>
<body>
    <h2>Calculadora de Peso Ideal</h2>
    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Sexo:</label><br>
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        <label>Altura (ex: 1.75):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>

        <button type="submit">Calcular Peso Ideal</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = (int)$_POST['idade'];
        $altura = (float)$_POST['altura'];
        $pesoIdeal = 0;

        
        if ($sexo == 'M') {
            if ($idade >= 65) {
                // Idosos têm IMC ideal maior (referência 24.5)
                $pesoIdeal = 24.5 * ($altura * $altura);
            } else {
                $pesoIdeal = 22 * ($altura * $altura);
            }
        } else {
            if ($idade >= 65) {
                $pesoIdeal = 25 * ($altura * $altura);
            } else {
                $pesoIdeal = 21 * ($altura * $altura);
            }
        }

        echo "<hr>";
        echo "<h3>Resultado para: $nome</h3>";
        echo "<p>Idade: $idade anos | Sexo: " . ($sexo == 'M' ? 'Masculino' : 'Feminino') . "</p>";
        echo "<h2>Seu peso ideal estimado é: " . number_format($pesoIdeal, 2, ',', '.') . " kg</h2>";
        echo "<p><small>*Este cálculo é uma estimativa baseada em médias de IMC.</small></p>";
    }
    ?>
</body>
</html>
