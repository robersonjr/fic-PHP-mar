<?php
    #produto
    $produto1 = "Sabão";
    $produto2 = "Lamen";
    $produto3 = "Energético";

    #marca
    $marca1 = "Ypê";
    $marca2 = "Nissin";
    $marca3 = "Monster";

    #valor
    $valor1 =  17.99;
    $valor2 =  3.50;
    $valor3 =  8.90;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de produto</h1>
    <div class="container">
        <table border="1">
            <tr>
                <th>Produtos</th>
                <th>Marca</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td><?php echo $produto1 ?></td>
                <td><?php echo $marca1 ?></td>
                <td><strong>R$ </strong><?php echo $valor1 ?></td>
            </tr>
            <tr>
                <td><?php echo $produto2  ?></td>
                <td><?php echo $marca2  ?></td>
                <td><strong>R$ </strong><?php echo $valor2  ?></td>
            </tr>
            <tr>
                <td><?php echo $produto3  ?></td>
                <td><?php echo $marca3  ?></td>
                <td><strong>R$ </strong><?php echo $valor3  ?></td>
            </tr>


        </table>
        <br><br>

        <a href="lista-nomes.php">Lista de usuários</a>

    </div>
    
</body>
</html>