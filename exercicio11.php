<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Verificar se uma palavra é um palíndromo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite uma palavra:</label>
        <input type="text" name="palavra" required><br><br>
        <button type="submit"
        name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['verificar'])){
                $palavra = $_POST['palavra'];
                $palavra_invertida = strrev($palavra);

                if ($palavra === $palavra_invertida) {
                    echo "É palíndromo.";
                }
                
            }
        }
    ?>

    
</body>
</html>