<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num_celsius">Digite um número em graus Celsius para receber ele em Fahrenheit: </label> <br> <br>
        <input type="number" name="num_celsius" id="num_celsius" required> <br> <br>
        <button type="submit" name="calcular_fahrenheit">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['calcular_fahrenheit'])){
                $celsius = $_POST['num_celsius'];
                
                $fahrenheit = ($celsius * (9/5)) + 32;

                echo "$celsius ºC é igual a $fahrenheit ºF";
            }
        }
    
    ?>
</body>
</html>