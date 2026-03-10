<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas</title>
</head>
<body>
    <h2>Cadastro de Notas do Aluno</h2>
    <form method="post">
        <label for="nome">Nome do Aluno</label>
        <input type="text" name="nome" required><br><br>
        
        <label for="nota1">Nota 1</label>
        <input type="number" name="nota1" step="0.1" min="0" max="10" required><br><br>
        
        <label for="nota2">Nota 2</label>
        <input type="number" name="nota2" step="0.1" min="0" max="10" required><br><br>
        
        <label for="nota3">Nota 3</label>
        <input type="number" name="nota3" step="0.1" min="0" max="10" required><br><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        if ($media >= 7) {
            $situacao = "Aprovado";
        } elseif ($media <= 5) {
            $situacao = "Reprovado";
        } else {
            $situacao = "Recuperação";
        }

        echo "<h3>Resultado:</h3>";
        echo "Aluno: <strong>" .$nome. "</strong><br>";
        echo "Média: <strong>" . number_format($media, 2, ',', '.') . "</strong><br>";
        echo "Situação: <strong>$situacao</strong>";
    }
    ?>
</body>
</html>