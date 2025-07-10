<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a tabuada de um número informado</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="numero_informado">Verifica a tabuada de um número informado:</label> <br> <br>
        <input type="number" id="numero_informado" name="numero_informado" required> <br> <br>
        <button type="submit" name="verificar_informado">Verificar</button>
   </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['verificar_informado'])){
                $numero = $_POST['numero_informado'];

                function tabuada($numero){
                    for($i = 0; $i <= 10; $i++){
                        $tabuada = $numero * $i;
                        echo "$numero X $i = $tabuada <br>";
                    }; 
                };
            };

        };

        tabuada($numero);
    ?>

</body>
</html>