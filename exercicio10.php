<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber um número e exibir a sequência de Fibonacci até esse número.</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Verificar a sequência de Fibonacci até o número informado:</label> <br>
        <input type="number" id="numero" name="numero" required> <br><br>
        <button type="submit" name="verificar_Fibonacci">Verificar</button>
    </form>

    <?php
        function FibonacciSeries($n){
            if ($n == 0){
                return 0;
            }elseif ($n == 01){
                return 1;
            }else {
                return (FibonacciSeries($n - 1) + FibonacciSeries($n - 2));
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_Fibonacci'])) {
            $n = (int)$_POST['numero'];

            for ($i = 0; $i < $n; $i++){
                echo FibonacciSeries($i).',';
            }
        }
    ?> 

</body>

</html>