<?php
    include("./conexao/conexao.php");

    $consulta = "SELECT * FROM listas";

    // die vai matar a conexão do programa se não der certo 

    /* (->) esse operador é conhecido informalmente como seta,
        serve para acessar propriedades ou métodos de um objeto
    */

    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web</title>
</head>
<body>
    <div class="container"></div>
        <h1>Sistema Web</h1>

        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
            </tr>

            <?php while($dado = $con->fetch_array()) { ?>

            <tr>
                <td><?php echo $dado["id"]?></td>
                <td><?php echo $dado["nome"]?></td>
                <td><?php echo $dado["email"]?></td>
                <td><?php echo $dado["cidade"]?></td>
            </tr>
            <?php } ?>

        </table>




    </div>
</body>
</html>