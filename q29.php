<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Identificador de Mês</title>
</head>
<body>
    <form method="post">
        <label>Digite o número do mês (1 a 12):</label><br>
        <input type="number" name="mes" required autofocus>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mes = $_POST['mes'];

        switch ($mes) {
            case 1:  $nomeMes = "Janeiro";   break;
            case 2:  $nomeMes = "Fevereiro"; break;
            case 3:  $nomeMes = "Março";     break;
            case 4:  $nomeMes = "Abril";     break;
            case 5:  $nomeMes = "Maio";      break;
            case 6:  $nomeMes = "Junho";     break;
            case 7:  $nomeMes = "Julho";     break;
            case 8:  $nomeMes = "Agosto";    break;
            case 9:  $nomeMes = "Setembro";  break;
            case 10: $nomeMes = "Outubro";   break;
            case 11: $nomeMes = "Novembro";  break;
            case 12: $nomeMes = "Dezembro";  break;
            default: $nomeMes = "Mês inválido"; break;
        }

        echo "<h3>Resultado: $nomeMes</h3>";
    }
    ?>
</body>
</html>
