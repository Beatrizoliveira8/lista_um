<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Contar quantos números pares existem entre 1 e o número informado.</title>
</head>
<body>
    <form method="POST" action="">
        <label form="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="pares">Verificar</button>

    </form>
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['pares'])){
                $numero = $_POST['numero'];

                 if($numero %2 == 0){
                    echo "O número é par.<br>";
                } else {
                    echo "O número não é par.<br>";
                }

                $quantidade = floor(num:$numero/2);
                echo "Existem ". $quantidade. " números pares entre 1 e ".$numero.".";
            }
        }
    ?>
</body>
</html>