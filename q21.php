<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Serviço Militar</title>
</head>
<body>
    <h2>Cadastro de Pessoas</h2>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" min="0" required><br><br>

        <label for="saude">Saúde:</label>
        <select id="saude" name="saude" required>
            <option value="Boa">Boa</option>
            <option value="Ruim">Ruim</option>
        </select><br><br>

        <label for="continuar">Deseja continuar cadastrando?</label>
        <select id="continuar" name="continuar" required>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    session_start();

    // Inicializar contadores na sessão
    if (!isset($_SESSION["pessoas"])) {
        $_SESSION["pessoas"] = [];
        $_SESSION["aptos"] = 0;
        $_SESSION["naoAptos"] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $idade = $_POST["idade"];
        $saude = $_POST["saude"];
        $continuar = $_POST["continuar"];

        // Verificar se está apto
        if ($sexo == "M" && $idade >= 18 && $saude == "Boa") {
            $situacao = "Apto";
            $_SESSION["aptos"]++;
        } else {
            $situacao = "Não apto";
            $_SESSION["naoAptos"]++;
        }

        // Guardar informações
        $_SESSION["pessoas"][] = [
            "nome" => $nome,
            "sexo" => $sexo,
            "idade" => $idade,
            "saude" => $saude,
            "situacao" => $situacao
        ];

        echo "<h3>Resultado:</h3>";
        echo "Nome: <strong>$nome</strong><br>";
        echo "Sexo: <strong>$sexo</strong><br>";
        echo "Idade: <strong>$idade</strong><br>";
        echo "Saúde: <strong>$saude</strong><br>";
        echo "Situação: <strong>$situacao</strong><br><br>";

        // Se o usuário escolher "N", mostrar resumo final
        if ($continuar == "N") {
            $total = count($_SESSION["pessoas"]);
            $aptos = $_SESSION["aptos"];
            $naoAptos = $_SESSION["naoAptos"];

            echo "<h3>Resumo Final:</h3>";
            echo "Total de pessoas cadastradas: <strong>" .$total ."</strong><br>";
            echo "Total aptos: <strong>".$aptos."</strong><br>";
            echo "Total não aptos: <strong>".$naoAptos."</strong><br>";

            // Limpar sessão para reiniciar
            session_destroy();
        }
    }
    ?>
</body>
</html>