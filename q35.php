<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Nadadores</title>
</head>
<body>
    <h2>Categorias de Natação</h2>
    <form method="post">
        <label>Idade do Nadador:</label><br>
        <input type="number" name="idade" required autofocus>
        <button type="submit">Classificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = (int)$_POST['idade'];
        $categoria = "";

        if ($idade >= 5 && $idade <= 7) {
            $categoria = "Infantil A";
        } elseif ($idade >= 8 && $idade <= 10) {
            $categoria = "Infantil B";
        } elseif ($idade >= 11 && $idade <= 13) {
            $categoria = "Juvenil A";
        } elseif ($idade >= 14 && $idade <= 17) {
            $categoria = "Juvenil B";
        } elseif ($idade >= 18 && $idade <= 25) {
            $categoria = "Sênior";
        } else {
            $categoria = "Idade fora da faixa etária";
        }

        echo "<hr>";
        echo "<h3>Resultado: $categoria</h3>";
    }
    ?>
</body>
</html>
