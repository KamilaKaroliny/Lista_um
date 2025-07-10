<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular o fatorial de um número</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="numero_fatorial">Calcular o fatorial de um número:</label> <br> <br>
        <input type="number" id="numero_fatorial" name="numero_fatorial" required> <br> <br>
        <button type="submit" name="verificar_fatorial">Verificar</button>
   </form>

    <?php
        function fatorial($n){
            $fatorial = 1;

            for($i = 1; $i <= $n; $i++){
                $fatorial *= $i;
                echo "$fatorial *= $i";
                echo "<br>";
            }; 
            return($fatorial);
        };

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['verificar_fatorial'])){
                
                $numero = $_POST['numero_fatorial'];
                $resultado = fatorial($numero);

                echo "O fatorial é = $resultado<br>";
            };
        };
    ?>

</body>
</html>