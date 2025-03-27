<?php
    $soma = 10 + 2;
    $sub = 10 - 2;
    $mult = 10 * 2;
    $div = 10 / 2;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>

    
    <strong>
        <ul>
            <li>
                <?php
                echo 'A soma é: ' .$soma;
                ?>
        </li>
        
        <li>
            <?php
                echo 'A subtração é: ' .$sub;
                ?>
        </li>
        
        <li>
            <?php
                echo 'A multiplicação é: ' .$mult;
            ?>
        </li>
        
        <li>
            <?php
                echo 'A divisão é: ' .$div;
                ?>
        </li>
    </strong>
    
<br><br>

<button><a href="index.php">HOME</a></button><br><br>

<button><a href="nomes.php">Nomes</a></button>

</body>
</html>