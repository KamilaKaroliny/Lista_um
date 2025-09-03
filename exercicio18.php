<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Digite o número 1: </label> <br>
        <input type="number" name="num1" id="num1" required> <br> <br>

        <label for="num2">Digite o número 2: </label> <br>
        <input type="number" name="num2" id="num2" required> <br> <br>

        <label for="num3">Digite o número 3: </label> <br>
        <input type="number" name="num3" id="numo3" required> <br> <br>

        <button type="submit" name="verificar_maior">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_maior'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                
                if($num1 > $num2 && $num1 > $num3){
                    echo "O número $num1 é o maior"; 
                }else if($num2 > $num1 && $num2 > $num3){
                    echo "O número $num2 é o maior"; 
                }else{
                    echo "O número $num3 é o maior"; 
                }

            }
        }
    
    ?>
</body>
</html>