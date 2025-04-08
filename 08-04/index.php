<?php
    //Dados em PHP puro (lógica)
    $frutas = ["Maçã", "Banana", "Laranja", "Morango"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Lista de frutas</h1>

    <div class ="container">
        <h2>1. Array Indexado Simples</h2>

        <ul>
            <?php foreach ($frutas as $fruta): ?>
            <li><?= $fruta ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
</body>
</html>