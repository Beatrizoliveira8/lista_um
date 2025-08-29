<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 - Verificar se um ano é bissexto.. </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite o ano:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="bissexto">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['bissexto'])){
                $numero = $_POST['numero'];

                if($numero %4 == 0){
                    echo "O ano $numero é bissexto.";
                    }else{
                    echo "O ano $numero não é bissexto.";
                }
            }
        }

            ?>
    
</body>
</html>