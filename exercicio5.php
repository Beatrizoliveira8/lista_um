<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificar se dois números formam um número amigo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="amigos">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['amigos'])){
                $numero = $_POST['numero'];
                
                if ($numero % )
            }
        }
    ?>

    
</body>
</html>