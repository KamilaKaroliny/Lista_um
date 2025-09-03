<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto_palindromo">Escreva uma palavra para verificar se ela é um palíndromo: (arara): </label> <br> <br>
        <input type="text" name="texto_palindromo" id="texto_palindromo" required> <br> <br>
        <button type="submit" name="verificar_palindromo">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_palindromo'])){
                $palavra = $_POST['texto_palindromo'];
                $palavra_invertida = strrev($palavra);

                echo "A palavra $palavra ".(($palavra_invertida == $palavra)? ' é um palíndromo':'não é um palíndromo');
                
            }
        }

    ?>
</body>
</html>