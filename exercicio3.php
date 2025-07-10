<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se um número é positivo, negativo ou zero</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="numero_informado">Verifica o número é positivo, negativo ou zero:</label> <br> <br>
        <input type="number" id="numero_informado" name="numero_informado" required> <br> <br>
        <button type="submit" name="verificar_informado">Verificar</button>
   </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['verificar_informado'])){
                $numero = $_POST['numero_informado'];

                if($numero == 0){
                    echo "O número é 0";
                }elseif ($numero >= 1){
                    echo "O número $numero é positivo";
                }else{
                    echo "O número $numero é negativo";
                }
            };

        };
    ?>

</body>
</html>