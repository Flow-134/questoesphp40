<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Classificação do Estudante</title>
</head>
<body>
    <h2>Calcular Nota Final e Classificação</h2>
    <form method="post" action="">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Matrícula:</label>
        <input type="text" name="matricula" required><br><br>

        <label>Nota do Laboratório:</label>
        <input type="number" name="lab" min="0" max="10" step="0.1" required><br><br>

        <label>Nota da Avaliação Semestral:</label>
        <input type="number" name="sem" min="0" max="10" step="0.1" required><br><br>

        <label>Nota do Exame Final:</label>
        <input type="number" name="exam" min="0" max="10" step="0.1" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $lab = (float)$_POST["lab"];
        $sem = (float)$_POST["sem"];
        $exam = (float)$_POST["exam"];

        // Pesos
        $media = (($lab*2) + ($sem*3) + ($exam*5)) / 10;

        // Classificação
        if ($media >= 8) {
            $classificacao = "A";
        } elseif ($media >= 7) {
            $classificacao = "B";
        } elseif ($media >= 6) {
            $classificacao = "C";
        } elseif ($media >= 5) {
            $classificacao = "D";
        } else {
            $classificacao = "R";
        }

        echo "<h3>Nome: $nome</h3>";
        echo "<h3>Matrícula: $matricula</h3>";
        echo "<h3>Nota Final: " . number_format($media, 2, ',', '.') . "</h3>";
        echo "<h3>Classificação: $classificacao</h3>";
    }
    ?>
</body>
</html>