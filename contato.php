<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="meu_estilo.css">
    
    </head>

    <body>

        <div class="container text-center">
            <h1>Contato</h1>
        </div>

        <div class="container">
                
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                Nome: <input class="form-control" type="text" name="nome"><br><br>
                E-mail: <input class="form-control" type="text" name="email"><br><br>
                Mensagem: <textarea class="form-control" name="mensagem" rows="5" cols="40"></textarea><br><br>
                
                <input class="btn btn-success" type="submit">
                <input class="btn btn-danger" type="reset">

            </form>

            <?php
                // Processar os dados do formulário quando o formulário for enviado

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Coletar valores do formulário
                    $nome = htmlspecialchars($_POST['nome']);
                    $email = htmlspecialchars($_POST['email']);
                    $mensagem = htmlspecialchars($_POST['mensagem']);

                    // Exibir os dados coletados
                    echo "<h2>Dados Recebidos:</h2>";
                    echo "Nome: " . $nome . "<br>";
                    echo "E-mail: " . $email . "<br>";
                    echo "Mensagem: " . $mensagem . "<br>";

                    
                }

            ?>
                

        </div>

    </body>

</html>