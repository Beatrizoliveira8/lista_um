<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 -  Exibir todos os divisores de um número. </title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit"
        name="divisores">Exibir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['divisores'])){
                $numero = $_POST['numero'];

                $divisores = array();
                for ($i = 1; $i <=$numero; $i++){
                    if ($numero % $i == 0){
                        $divisores[] = $i;
                    }
                }
                $tamanho = count(value: $divisores);
                for ($i = 1; $i < $tamanho; $i++){
                    echo "".$divisores[$i] . "<br>";
                }

            }
        }

            ?>
    
</body>
</html>