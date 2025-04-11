<?php
 $pets = [
    ["nome" => "Rex", "tipo" => "Cachorro", "idade" => 0.5, "preco" => 1200.00],
    ["nome" => "Mingau", "tipo" => "Gato", "idade" => 3, "preco" => 850.50],
    ["nome" => "Thomas", "tipo" => "Passaro", "idade" => 2, "preco" => 150.00],
    ["nome" => "Nemo", "tipo" => "Peixe", "idade" => 1, "preco" => 45.90],
    ["nome" => "Hantaro", "tipo" => "Hamster", "idade" => 1.5, "preco" => 75.25]
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
    <link rel="stylesheet" href="pets.css">
</head>
<body>
    <div class ="container">
        <h1>1. LISTA DE PETS</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Idade</th>
                <th>Preço</th>
            </tr>
            <?php foreach ($pets as $pet) : ?>
            <tr>
                <td><?=$pet['nome']?></td>
                <td><?=$pet['tipo']?></td>
                <td><?=$pet['idade']?></td>
                <td><?= formatarPreco($pet['preco'])?></td>
            </tr>
            <?php endforeach; ?>        
        </table>

        <div class="paiBox">
        <a href="index.php" class="boxGeral">
            <div>
                <img src="hot.jpg" alt="">
                <p>Rex.</p>
                <p>Rottweiler.</p>
                <p>0.5 meses de idade.</p>
            </div>
        </a>
        <a href="index.php" class="boxGeral">
            <div>
                <img src="esf.jpg" alt="">
                <p>Mingau.</p>
                <p>Sphynx.</p>
                <p>3 anos de idade.</p>
            </div>
        </a>
        <a href="index.php" class="boxGeral">
            <div>
                <img src="can.jpg" alt="">
                <p>Thomas.</p>
                <p>Canário.</p>
                <p>2 anos de idade.</p>
            </div>
        </a>
        <a href="index.php" class="boxGeral">
            <div>
                <img src="peixe.jpg" alt="">
                <p>Nemo</p>
                <p>Oscar</p>
                <p>1 ano de idade.</p>
            </div>
        </a>
        <a href="index.php" class="boxGeral">
            <div>
                <img src="ham.jpg" alt="">
                <p>Hantaro.</p>
                <p>Hamister.</p>
                <p>1.5 anos de idade</p>
            </div>
        </a>
        </div>


        
        <div>
            <a href="index.php">HOME</a>
        </div>
        
    </div>
</body>
</html>