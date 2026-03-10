<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carango Velho - Descontos</title>
</head>
<body>
    <h2>Cadastro de Veículos</h2>
    <form method="post">
        <label for="nome">Nome do carro:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="ano">Ano do carro:</label>
        <input type="number" id="ano" name="ano" required><br><br>

        <label for="valor">Valor do carro (R$):</label>
        <input type="number" id="valor" name="valor" step="0.01" required><br><br>

        <label for="continuar">Deseja continuar cadastrando?</label>
        <select id="continuar" name="continuar" required>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    session_start();

    // Inicializar contadores na sessão
    if (!isset($_SESSION["carros"])) {
        $_SESSION["carros"] = [];
        $_SESSION["totalAte2000"] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $valor = $_POST["valor"];
        $continuar = $_POST["continuar"];

        // Calcular desconto
        if ($ano <= 2000) {
            $desconto = $valor * 0.12;
            $_SESSION["totalAte2000"]++;
        } else {
            $desconto = $valor * 0.07;
        }

        $valorFinal = $valor - $desconto;

        // Guardar informações do carro
        $_SESSION["carros"][] = [
            "nome" => $nome,
            "ano" => $ano,
            "valor" => $valor,
            "desconto" => $desconto,
            "valorFinal" => $valorFinal
        ];

        echo "<h3>Resultado:</h3>";
        echo "Carro: <strong>$nome</strong><br>";
        echo "Ano: <strong>$ano</strong><br>";
        echo "Valor original: R$ " . number_format($valor, 2, ',', '.') . "<br>";
        echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.') . "<br><br>";

        // Se o usuário escolher "N", mostrar resumo final
        if ($continuar == "N") {
            $totalCarros = count($_SESSION["carros"]);
            $totalAte2000 = $_SESSION["totalAte2000"];

            echo "<h3>Resumo Final:</h3>";
            echo "Total de carros cadastrados: <strong>$totalCarros</strong><br>";
            echo "Total de carros com ano até 2000: <strong>$totalAte2000</strong><br>";

            // Limpar sessão para reiniciar
            session_destroy();
        }
    }
    ?>
</body>
</html>