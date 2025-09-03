<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Digite seu nome: </label> <br> <br>
        <input type="text" name="nome" id="nome" required> <br> <br>

        <label for="idade">Digite sua idade: </label> <br> <br>
        <input type="number" name="idade" id="idade" required> <br> <br>
        
        <button type="submit" name="verificar_votar">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_votar'])){
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];

                echo "$nome, você ".(($idade >= 16)? 'pode votar':'não pode votar');

            }
        }
    
    ?>
</body>
</html>