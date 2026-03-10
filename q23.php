<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Número</title>
</head>
<body>
    <h2>Digite um número</h2>
    <form method="post">
        <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero > 80) {
            echo "<p>O número $numero é maior que 80.</p>";
        } elseif ($numero < 25) {
            echo "<p>O número $numero é menor que 25.</p>";
        } elseif ($numero == 40) {
            echo "<p>O número é exatamente 40.</p>";
        } else {
            echo "<p>O número $numero não atende a nenhuma das condições.</p>";
        }
    }
    ?>
</body>
</html>