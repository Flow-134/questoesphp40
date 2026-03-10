<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Número por Extenso</title>
</head>
<body>
    <h2>Digite um número de 1 a 5</h2>
    <form method="post">
        <input type="number" name="numero" min="1" max="100" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        switch ($numero) {
            case 1:
                echo "<p>Um</p>";
                break;
            case 2:
                echo "<p>Dois</p>";
                break;
            case 3:
                echo "<p>Três</p>";
                break;
            case 4:
                echo "<p>Quatro</p>";
                break;
            case 5:
                echo "<p>Cinco</p>";
                break;
            default:
                echo "<p>Número inválido</p>";
        }
    }
    ?>
</body>
</html>