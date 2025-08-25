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
        name="perfeitos">Exibir</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['perfeitos'])){
                $numero = $_POST['numero'];

                $divisores = array();
                for ($i = 1; $i <$numero; $i++){
                    if ($numero % $i == 0){
                        $divisores[] = $i;
                    }
                }
                $perfeitos = array_sum(array: $divisores) == $numero;
                    echo ("O número é perfeito?" . ($perfeitos ? "Sim" : "Não"));

            }
        }

            ?>
    
</body>
</html>