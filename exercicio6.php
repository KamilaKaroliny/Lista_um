<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir todos os divisores de um número</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Verificar os divisores de um número:</label> <br> <br>
        <input type="number" id="numero" name="numero" required> <br> <br>
        <button type="submit" name="verificar_divisores">Verificar</button>
    </form>

    <?php
        function numeroDivisores($n)
        {
            $divisores = 0;

            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    echo "Os divisores são: $i <br>";
                }
            };
            return $i;
        };

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar_divisores'])) {

                $numero = $_POST['numero'];
                $divisoresDNum = numeroDivisores($numero);
            };
        }
    ?>

</body>

</html>