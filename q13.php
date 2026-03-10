<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="valor">Valor:</label>
        <input type="number" step="0.01" name="valor" id="valor" required>
        <input type="submit" value="Repassar valor">
    </form>

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $valor = $_POST["valor"];

    //     if ($valor > 10) {
    //         echo "Assim como o Minecraft, também temos limites!!!";
    //     } else {
    //         echo "Valor aceito: R$ " . number_format($valor, 2, ',', '.');
    //     }
    // }
    // ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número</title>
</head>
<body>
    <h2>Digite um número</h2>
    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero > 10) {
            echo "<h3>Assim como o minecraft, Tambem temos limites!!!</h3>";
        } else {
            echo "<h3>O número informado é menor ou igual a 10.</h3>";
        }
    }
    ?>
</body>
</html>
