<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Idade</title>
</head>
<body>
    <h2>Digite a idade de 75 pessoas</h2>
    <form method="post">
        <?php
        // Gerar 75 campos de entrada
        for ($i = 1; $i <= 75; $i++) {
            echo "Pessoa $i - Idade: <input type='number' name='idade[]' min='0' required><br><br>";
        }
        ?>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idades = $_POST["idade"];

        echo "<h3>Resultado:</h3>";
        foreach ($idades as $index => $idade) {
            if ($idade >= 18) {
                echo "Pessoa " . ($index + 1) . ": <strong>Maior de idade</strong> (Idade: $idade)<br>";
            } else {
                echo "Pessoa " . ($index + 1) . ": <strong>Menor de idade</strong> (Idade: $idade)<br>";
            }
        }
    }
    ?>
</body>
</html>