<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 01 - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container">
        <article class="row">
            <?php
                // criando variável
                $olaMundo = "Hello World !";
            ?>
            <!-- Exibir o conteúdo da variável --> 
            <h1><?php echo $olaMundo; ?></h1>

            <!--  Criando array para exibir em uma lista -->
            <?php 
                $itensLista = ["Home", "Sobre Nós", "Contato", "Fale Conosco"];
            ?>
            <ul class="d-flex flex-column justify-content-between">
                <li><?php echo $itensLista[0]; ?></li>
                <li><?php echo $itensLista[1]; ?></li>
                <li><?php echo $itensLista[2]; ?></li>
                <li><?php echo $itensLista[3]; ?></li>
            </ul>

            <!-- Concatenando Variáveis / Valores -->
            <h2>Oparações Matemáticas</h2>

            <?php
                $numero1 = 10;
                $numero2 = 2;

                $soma = $numero1 + $numero2;
                $subtracao = $numero1 - $numero2;
                $multiplicacao = $numero1 * $numero2;
                $divisao = $numero1 / $numero2;
                $resto = $numero1 % $numero2;
            ?>
            <p><?php echo "O resultado da soma entre $numero1 e $numero2 é $soma"; ?></p>
            <p><?php echo "O resultado da subtração entre $numero1 e $numero2 é $subtracao"; ?></p>
            <p><?php echo "O resultado da multiplicação entre  $numero1 e $numero2 é $multiplicacao"; ?></p>
            <p><?php echo "O resultado da divisão entre $numero1 e $numero2 é $divisao"; ?></p>
            <p><?php echo "O resto da divisão entre $numero1 e $numero2 é $resto"; ?></p>
        </article>
    </section>
</body>
</html>