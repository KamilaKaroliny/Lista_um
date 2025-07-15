<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber dois números e exibir a soma de todos os números entre eles</title>
</head>

<body>

    <form method="POST" action="">
        <label for="informacao">Obs: insira o número do menor ao maior!</label> <br>
        <label for="num1">Número 1:</label> <br>
        <input type="number" id="num1" name="num1" required> <br>
        <label for="num2">Número 2:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        <button type="submit" name="verificar_soma">Verificar</button>
    </form>

    <?php
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar_soma'])) {
            $a = (int)$_POST['num1'];
            $b = (int)$_POST['num2'];

            $soma = 0;

            for ($i = $a; $i <= $b; $i++) {
                $soma += $i;
            }
            echo "A soma entre o número $a e o número $b é: $soma";
        }
    ?>

</body>

</html>