<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mês por Extenso</title>
</head>
<body>
    <h2>Digite o número do mês (1 a 12)</h2>
    <form method="post">
        <input type="number" name="mes" min="1" max="12" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = $_POST['mes'];

        switch ($mes) {
            case 1:
                echo "<p>Janeiro</p>";
                break;
            case 2:
                echo "<p>Fevereiro</p>";
                break;
            case 3:
                echo "<p>Março</p>";
                break;
            case 4:
                echo "<p>Abril</p>";
                break;
            case 5:
                echo "<p>Maio</p>";
                break;
            case 6:
                echo "<p>Junho</p>";
                break;
            case 7:
                echo "<p>Julho</p>";
                break;
            case 8:
                echo "<p>Agosto</p>";
                break;
            case 9:
                echo "<p>Setembro</p>";
                break;
            case 10:
                echo "<p>Outubro</p>";
                break;
            case 11:
                echo "<p>Novembro</p>";
                break;
            case 12:
                echo "<p>Dezembro</p>";
                break;
            default:
                echo "<p>Mês inválido</p>";
        }
    }
    ?>
</body>
</html>