<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Nadador</title>
</head>
<body>
    <h2>Classificação de Nadador</h2>
    <form method="post" action="">
        <label for="idade">Digite a idade:</label>
        <input type="number" name="idade" min="1" required><br><br>

        <input type="submit" value="Classificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = (int)$_POST["idade"];

        if ($idade >= 5 && $idade <= 7) {
            echo "<h3>Categoria: Infantil A</h3>";
        } elseif ($idade >= 8 && $idade <= 10) {
            echo "<h3>Categoria: Infantil B</h3>";
        } elseif ($idade >= 11 && $idade <= 13) {
            echo "<h3>Categoria: Juvenil A</h3>";
        } elseif ($idade >= 14 && $idade <= 17) {
            echo "<h3>Categoria: Juvenil B</h3>";
        } elseif ($idade >= 18 && $idade <= 25) {
            echo "<h3>Categoria: Sênior</h3>";
        } else {
            echo "<p style='color:red;'>Idade fora da faixa etária.</p>";
        }
    }
    ?>
</body>
</html>