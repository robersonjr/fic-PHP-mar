<?php
    $nome1 = "José";
    $nome2 = "Natalia";
    $nome3 = "Giovanni";

    $idade1 = "56";
    $idade2 = "24";
    $idade3 = "37";

    $profissao1 =  "Mestre de obra";
    $profissao2 =  "Designer";
    $profissao3 =  "Professor";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Nomes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de produto</h1>
        <div class="container">
        <table border= "1">
            <tr>
                <th>Nomes</th>
                <th>Idade</th>
                <th>Profissão</th>
            </tr>
            </tr>
            <tr>
                <td><?php echo $nome1 ?></td>
                <td><?php echo $idade1 ?></td>
                <td><?php echo $profissao1 ?></td>
            </tr>
            <tr>
                <td><?php echo $nome2  ?></td>
                <td><?php echo $idade2  ?></td>
                <td><?php echo $profissao2  ?></td>
            </tr>
            <tr>
                <td><?php echo $nome3  ?></td>
                <td><?php echo $idade3  ?></td>
                <td><?php echo $profissao3  ?></td>
            </tr>


    </table>
    <br><br>
    <a href="produtos.php" class="link-button">PRODUTOS</a>

</body>
</html>