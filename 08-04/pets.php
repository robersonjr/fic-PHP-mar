<?php
 $pets = [
    ["nome" => "Rex", "tipo" => "Cachorro", "idade" => 5, "preco" => 1200.00],
    ["nome" => "Mingau", "tipo" => "Gato", "idade" => 3, "preco" => 850.50],
    ["nome" => "Piu Piu", "tipo" => "Pássaro", "idade" => 2, "preco" => 150.00],
    ["nome" => "Nemo", "tipo" => "Peixe", "idade" => 1, "preco" => 45.90],
    ["nome" => "Thor", "tipo" => "Hamster", "idade" => 1.5, "preco" => 75.25]
 ];

 function formatarPreco($preco) {
    return 'R$ ' . number_format($preco, 2, ',', '.');
};
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class ="container">
        <h1>1. LISTA DE PETS</h1>
        <table>
            <?php foreach ($pets as $pet) : ?>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Idade</th>
                <th>Preço</th>
            </tr>
            <tr>
                <td><?=$pet['nome']?></td>
                <td><?=$pet['tipo']?></td>
                <td><?=$pet['idade']?></td>
                <td><?= formatarPreco($pet['preco'])?></td>
            </tr>
            <?php endforeach; ?>        
        </table>
        
    </div>
</body>
</html>