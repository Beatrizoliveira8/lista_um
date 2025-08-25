<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 -  Informar se um número é positivo, negativo ou zero.</title>
</head>
<body>
     <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="estado_numero">Informar</button>
    </form>

    <?php
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['estado_numero'])){
                $numero = $_POST['numero'];
            
            if($numero > 0){
                    echo "O número $numero é <strong>positivo</strong>.";
                }elseif ($numero == 0){
                    echo "O número $numero é <strong>zero</strong>.";
                }else{
                    echo "O número $numero é <strong>negativo</strong>.";
                }
            }
        }

    ?>
    
</body>
</html>