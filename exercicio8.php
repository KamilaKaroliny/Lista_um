<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar quantos números pares existem entre 1 e o número informado</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Verificar quantos número existem entre 1 e o número informado:</label> <br> <br>
        <input type="number" id="numero" name="numero" required> <br> <br>
        <button type="submit" name="verificar_informados">Verificar</button>
    </form>

    <?php
    
       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_informados'])) {
            $a = (int)$_POST['numero'];

            $quantia = 0;

            for ($i = 1; $i <= $a; $i++) {
                if ($i % 2 == 0) {
                    $quantia += 1;
                }
            }
            echo "existem $quantia números pares entre esse número";
        }
    ?>

</body>

</html>