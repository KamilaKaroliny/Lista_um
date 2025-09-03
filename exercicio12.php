<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto">Verificar quantas vogais uma frase tem: </label> <br> <br>
        <input type="text" name="texto" id="texto" required> <br> <br>
        <button type="submit" name="contar_vogais">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['contar_vogais'])){
                $texto = $_POST['texto'];
                $vogais = ['a','e','i','o','u','A','E','I','O','U'];
                $qtd_vogais = 0;

                for($i = 0; $i < strlen($texto); $i++){
                    $caractere = $texto[$i];
                    $ehVogal = false;
                    for($j = 0; $j < count($vogais); $j++){
                        if($vogais[$j] == $caractere){
                            $ehVogal = true;
                            break;
                        }
                    }
                    if($ehVogal){
                        $qtd_vogais++;
                    }

                }
             
                echo "A frase $texto tem $qtd_vogais vogais.";
            }
        }

    ?>
</body>
</html>