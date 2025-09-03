<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <form action="" method="POST">
        <label for="ano">Digite um ano para verificar se ele é bissexto: </label> <br> <br>
        <input type="number" name="ano" id="ano" required> <br> <br>
        <button type="submit" name="ver_bissexto">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['ver_bissexto'])){
                $ano = $_POST['ano'];
                
                $ano_bissexto = ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0));

                echo "O ano $ano ".($ano_bissexto? 'é bissexto':'não é bissexto');

            }
        }
    
    ?>
</body>
</html>