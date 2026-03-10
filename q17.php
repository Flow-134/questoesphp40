<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Intervalo</title>
</head>
<body>
    <h2>Digite 80 números</h2>
    <form method="post">
        <?php
        // Gerar 80 campos de entrada
        for ($i = 1; $i <= 80; $i++) {
            echo "Número $i: <input type='number' name='num[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST["num"];
        $contador = 0;

        foreach ($numeros as $n) {
            if ($n >= 10 && $n <= 150) {
                $contador++;
            }
        }

        echo "<h3>Resultado:</h3>";
        echo "Quantidade de números no intervalo [10, 150]: <strong>$contador</strong>";
    }
    ?>
</body>
</html>