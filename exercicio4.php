<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calcular o fatorial de um número. </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="fatorial">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['fatorial'])){
                $numero = $_POST['numero'];
                $x = $numero;
                for($i = $x; $i > 0; $i--){
                    $x = $x * $i;
                }

                $x = $x / $numero;
                echo "$x";

            }
        }

            ?>
    
</body>
</html>