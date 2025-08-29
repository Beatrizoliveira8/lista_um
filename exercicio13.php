<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Converter graus Celsius para Fahrenheit. </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite a temperatura em graus celsius:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="Fahrenheit">Converter</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['Fahrenheit'])){
                $numero = $_POST['numero'];
                $Converter = ($numero * 9/5) + 32;

                echo "Temperatura convertida: $Converter";

            }
        }

            ?>
    
</body>
</html>