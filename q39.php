<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Estudante</title>
</head>
<body>
    <h2>Sistema de Notas - Escola</h2>
    <form method="post">
        <input type="text" name="nome" placeholder="Nome do Estudante" required><br><br>
        <input type="text" name="matricula" placeholder="Número de Matrícula" required><br><br>
        <input type="number" step="0.1" name="n1" placeholder="Nota 1" min="0" max="10" required><br><br>
        <input type="number" step="0.1" name="n2" placeholder="Nota 2" min="0" max="10" required><br><br>
        <input type="number" step="0.1" name="n3" placeholder="Nota 3" min="0" max="10" required><br><br>
        <button type="submit">Calcular Resultado</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $n1 = (float)$_POST['n1'];
        $n2 = (float)$_POST['n2'];
        $n3 = (float)$_POST['n3'];

        $notaFinal = ($n1 + $n2 + $n3) / 3;

        if ($notaFinal >= 8 && $notaFinal <= 10) {
            $classificacao = "A";
        } elseif ($notaFinal >= 7 && $notaFinal < 8) {
            $classificacao = "B";
        } elseif ($notaFinal >= 6 && $notaFinal < 7) {
            $classificacao = "C";
        } elseif ($notaFinal >= 5 && $notaFinal < 6) {
            $classificacao = "D";
        } else {
            $classificacao = "R";
        }

        echo "<hr>";
        echo "<h3>Boletim do Estudante</h3>";
        echo "<p><strong>Nome:</strong> $nome | <strong>Matrícula:</strong> $matricula</p>";
        echo "<p><strong>Nota Final:</strong> " . number_format($notaFinal, 2, ',', '.') . "</p>";
        echo "<h2>Classificação: $classificacao</h2>";
    }
    ?>
</body>
</html>
