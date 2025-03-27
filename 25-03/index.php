<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    
    <h1>Olá</h1>
    
    <?php
    // echo e usado como print, para mandar a mensagen para a tela
    echo "Olá mundo"   
    ?>

<?php
       $nome = "Roberson";
       $idade = 26;
       ?>

<h2>
    <?php
            echo 'Meu nome é: ' .$nome;
            ?>
    </h2>
    
    <h3>
        <?php
            echo 'Minha idade é: ' .$idade;
            ?>
    </h3>
    
    <hr />
    <strong>
        <?php
            $hora = new DateTime();
            echo $hora->format('H:i:s');
            ?>
    
    </strong>
    <br><br>

    <button><a href="nomes.php">Nomes</a></button><br><br>

    <button><a href="calc.php">Calculadora</a></button>

</body>
</html>