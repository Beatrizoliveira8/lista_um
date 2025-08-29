<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Receber um número e exibir a sequência de Fibonacci até esse número.</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required><br><br>
        <button type="submit"
        name="verificar">Exibir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['verificar'])){
                $numero = $_POST['numero'];
                $fibonacci = array(0,1);
                
                while(end($fibonacci) <= $numero) {
                    array_push($fibonacci, $fibonacci[sizeof($fibonacci) - 2] + $fibonacci[sizeof($fibonacci) - 1]);
                }

                if(end($fibonacci) > $numero) array_pop($fibonacci);
                array_shift($fibonacci);

                echo "Saída: " . implode(", ", $fibonacci);
            }
        }
    ?>

    
</body>
</html>