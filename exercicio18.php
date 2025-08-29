<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 - Receber 3 números e informar qual é o maior.</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite o primeiro número:</label>
        <input type="number" name="num1" required><br><br>

        <label for="numero">Digite o segundo número:</label>
        <input type="number" name="num2" required><br><br>
        <button type="submit"
        
        <label for="numero">Digite o terceiro número:</label>
        <input type="number" name="num3" required><br><br>
        <button type="submit"
        name="verificar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['verificar'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                if ($num1 > $num2 && $num1>$num3){
                    echo "O número $num1 é o maior";
                } elseif ($num1 < $num2 && $num2>$num3){
                    echo "O número $num2 é o maior";
                } else {
                    echo "O múmero $num3 é o maior.";
                }
            }
        }
    ?>

    
</body>
</html>