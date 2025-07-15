<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificar se o número é perfeito (soma dos divisores = número)</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Verificar se o numero é perfeito:</label> <br> <br>
        <input type="number" id="numero" name="numero" required> <br> <br>
        <button type="submit" name="verificar_perfeitos">Verificar</button>
    </form>

    <?php
        function somaDivisores($n) {
            $perfeitoA = 0;

            for ($i = 1; $i < $n; $i++) {
                if ($n % $i == 0) {
                    $perfeitoA += $i;
                }
            }
            return $perfeitoA;
        }

       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_perfeitos'])) {
            $a = (int)$_POST['numero'];

            if ($a <= 0) {
                echo "Por favor, insira apenas números inteiros positivos.";
            } else {
                $perfeitoA = somaDivisores($a);

                if ($perfeitoA == $a) {
                    echo "$a é um número perfeito";
                } else {
                    echo "$a não é um número perfeito";
                }
            }
        }
    ?>

</body>

</html>