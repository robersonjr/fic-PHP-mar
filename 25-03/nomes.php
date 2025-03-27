<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <h1>Curso de PHP</h1>
    <h2>Lista de nomes</h2>
    
    <?php
        $nome1 = "Gerson";
        $nome2 = "Jiudevan";
        $nome3 = "Geremias";
        $idade1 = 26;
        $idade2 = 28;
        $idade3 = 23;
        ?>

<ul>
    <li><?php echo $nome1 . ' ' .$idade1 ?> Anos</li>
    <li><?php echo $nome2 . ' ' .$idade2 ?> Anos</li>
    <li><?php echo $nome3 . ' ' .$idade3 ?> Anos</li>
</ul>

<br><br>

<button><a href="index.php">HOME</a></button><br><br>

<button><a href="calc.php">Calculadora</a></button>

</body>
</html>