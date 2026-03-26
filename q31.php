<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ordem Crescente</title>
</head>
<body>
    <h2>Ordenar 3 Números</h2>
    <form method="post">
        <input type="number" name="n1" placeholder="Número 1" required>
        <input type="number" name="n2" placeholder="Número 2" required>
        <input type="number" name="n3" placeholder="Número 3" required>
        <button type="submit">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $n3 = (int)$_POST['n3'];

        // Colocamos os números em um array
        $numeros = [$n1, $n2, $n3];

        // A função sort() do PHP organiza os valores do menor para o maior
        sort($numeros);

        echo "<h3>Valores em ordem crescente:</h3>";
        echo "<p>" . $numeros[0] . " - " . $numeros[1] . " - " . $numeros[2] . "</p>";
    }
    ?>
</body>
</html>
