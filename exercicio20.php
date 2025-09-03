<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>

<body>
    <form action="" method="POST">

        <label for="texto_usuario">Usuário: </label> <br>
        <input type="text" name="texto_usuario" id="texto_usuario" required> <br> <br>

        <label for="senha">Senha: </label> <br>
        <input type="text" name="senha" id="senha" required> <br> <br>

        <button type="submit" name="validar_login">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['validar_login'])){
                $usuario = $_POST['texto_usuario'];
                $senha = $_POST['senha'];

                if($usuario == 'Admin' &&  $senha == 'root'){
                    echo 'Você fez login!';
                }else{
                    echo 'Usuário ou senha incorretos!';
                }
            }
        }
    
    ?>
</body>
</html>