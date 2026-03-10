<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h2>Digite o nome e sexo de 56 pessoas</h2>
    <form method="post">
        <?php
        // Gerar 56 campos de entrada
        for ($i = 1; $i <= 56; $i++) {
            echo "Pessoa $i - Nome: <input type='text' name='nome[]' required> ";
            echo "Sexo: 
                <select name='sexo[]' required>
                    <option value='M'>Masculino</option>
                    <option value='F'>Feminino</option>
                </select><br><br>";
        }
        ?>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomes = $_POST["nome"];
        $sexos = $_POST["sexo"];

        $totalHomens = 0;
        $totalMulheres = 0;

        echo "<h3>Resultado:</h3>";
        foreach ($nomes as $index => $nome) {
            $sexo = $sexos[$index];
            if ($sexo == "M") {
                echo "Nome: <strong>$nome</strong> - Homem<br>";
                $totalHomens++;
            } else {
                echo "Nome: <strong>$nome</strong> - Mulher<br>";
                $totalMulheres++;
            }
        }

        echo "<br><strong>Total de Homens:</strong> $totalHomens<br>";
        echo "<strong>Total de Mulheres:</strong> $totalMulheres<br>";
    }
    ?>
</body>
</html>