<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo (ex: “arara”)</title>
</head>

<body>

    <form method="POST" action="">
        <label for="palavra">Verificar se uma palavra é um palíndromo:</label> <br>
        <input type="string" id="palavra" name="palavra" required> <br><br>
        <button type="submit" name="verificar_palíndromo">Verificar</button>
    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar_Fibonacci'])) {
            $p = (string)$_POST['palavra'];

            $invertida =  strrev($p);
            if ($p == $invertida){
                echo "A palavra $p é um palíndromo";
            }else {
                 echo "A palavra $p é não um palíndromo";
            }
        }
    ?> 

</body>

</html>