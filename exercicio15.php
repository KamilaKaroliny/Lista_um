<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <form action="" method="POST">
        <label for="peso">Digite seu peso: </label> <br> <br>
        <input type="number" step=".01" name="peso" id="peso" required>  <br> <br>

        <label for="altura">Digite sua altura (1.70): </label> <br> <br>
        <input type="number" step=".01" name="altura" id="altura" required> <br> <br>
        
        <button type="submit" name="cal_imc">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['cal_imc'])){
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                $imc = $peso / (pow($altura, 2));

                echo "<p> Seu IMC é $imc </p>";

                $situacao = '';

                if($imc < 18.5){
                    $situacao = 'abaixo do peso';
                }else if($imc < 25){
                    $situacao = 'normal';
                }else if($imc < 30){
                    $situacao = 'sobrepeso';
                }else if($imc < 40){
                    $situacao = 'obesidade';
                }else{
                    $situacao = 'obesidade severa';
                }

                echo "<p> Sua situação é $situacao </p>";
                

            }
        }
    
    ?>
</body>
</html>