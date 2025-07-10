<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificar se o número é par ou ímpar</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="numero_parImpar">Verifica se é o número é par ou impar:</label> <br> <br>
        <input type="number" id="numero_parImpar" name="numero_parImpar" required> <br> <br>
        <button type="submit" name="verificar_parImparo">Verificar</button>
   </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['verificar_parImparo'])){
                $numero = $_POST['numero_parImpar'];

                $ehPar = false;
                if($numero % 2 == 0){
                    $ehPar = true;
                }else{
                }
                echo "O número $numero é ". ($ehPar ? ' par':' impar');
            };

        };
    ?>

</body>
</html>