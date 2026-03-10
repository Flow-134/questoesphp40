<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Média Ponderada</title>
</head>
<body>
    <h2>Calcular Nota Final</h2>
    <form method="post" action="">
        <label for="lab">Nota do Trabalho de Laboratório:</label>
        <input type="number" name="lab" min="0" max="10" step="0.1" required><br><br>

        <label for="sem">Nota da Avaliação Semestral:</label>
        <input type="number" name="sem" min="0" max="10" step="0.1" required><br><br>

        <label for="exam">Nota do Exame Final:</label>
        <input type="number" name="exam" min="0" max="10" step="0.1" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lab = (float)$_POST["lab"];
        $sem = (float)$_POST["sem"];
        $exam = (float)$_POST["exam"];

        // Pesos
        $pesoLab = 2;
        $pesoSem = 3;
        $pesoExam = 5;

        // Cálculo da média ponderada
        $media = (($lab * $pesoLab) + ($sem * $pesoSem) + ($exam * $pesoExam)) / ($pesoLab + $pesoSem + $pesoExam);

        echo "<h3>Nota Final: " . number_format($media, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>