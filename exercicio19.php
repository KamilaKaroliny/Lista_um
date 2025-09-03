<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <form action="" method="POST">
        <label for="senha">Digite uma senha: </label> <br>
        <input type="password" name="senha" id="senha" required> <br> <br>

        <button type="submit" name="ver_senha">Enviar</button>
    </form>

    <?php

        function temLetra($texto){
            $temLetra = false;
            $letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',  'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
            for ($i = 0; $i < strlen($texto); $i++) {
                for($j = 0; $j < count($letras); $j++){
                    if($letras[$j] == $texto[$i]){
                        $temLetra = true;
                        break;
                    }
                }
                
            }
            return $temLetra;
        }

        function temNumero($texto){
            $temNumero = false;
            $numeros = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
            for ($i = 0; $i < strlen($texto); $i++) {
                for($j = 0; $j < count($numeros); $j++){
                    if($numeros[$j] == $texto[$i]){
                        $temNumero = true;
                        break;
                    }
                }
                
            }
            return $temNumero;
        }
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['ver_senha'])){
                $senha = $_POST['senha'];

                $forte = false;
                
                if(strlen($senha) >= 8 && temLetra($senha) && temNumero($senha)){
                    $forte = true;
                }

                echo 'A senha é '.($forte? 'forte':'fraca');

            }
        }
    
    ?>
</body>
</html>