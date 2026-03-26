<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número por Extenso</title>
</head>
<body>
    <form method="post">
        <label>Digite um número (1 a 5):</label>
        <input type="number" name="numero" required>
        <button type="submit">Exibir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['numero'];

        switch ($num) {
            case 1: echo "<p>Um</p>"; break;
            case 2: echo "<p>Dois</p>"; break;
            case 3: echo "<p>Três</p>"; break;
            case 4: echo "<p>Quatro</p>"; break;
            case 5: echo "<p>Cinco</p>"; break;
            default: echo "<p style='color:red;'>Número inválido.</p>"; break;
        }
    }
    ?>
</body>
</html>
