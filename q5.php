<!-- Lista de questoes -->
<!-- Questao 5 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
</head>
<body>
    <h2>Calcular Média do Aluno</h2>
    <form action="" method="post">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" required>
        <br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" required>
        <br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];   
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        // cálculo da média aritmética
        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "<h3> ------- Resultado ------- </h3>";
        echo "Nome do aluno: " . htmlspecialchars($nome) . "<br>";
        echo "Média: " . number_format($media, 2, ',', '.');
    }
    ?>
</body>
</html>