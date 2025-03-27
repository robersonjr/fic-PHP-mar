<?php
    // Definição das variaveis
    $nome = "Roberson"; //String
    $idade = 37; // Int
    $saldo = 1500.75; //Float (ponto flutuante)
    $temConta = true; //Booleano
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
    <link rel="stylesheet" href="tela.css">
</head>
<body>
    <h1>Tela</h1>

    <table border= "1">
        <tr>
            <th>Variável</th>
            <th>Valor</th>
            <th>Tipo</th>
        </tr>
        <tr>
            <td class="tdVariavel">Nome</td>
            <td><?php echo $nome ?></td>
            <td><?php echo getType(value: $nome) ?> </td>
        </tr>
        <tr>
            <td class="tdVariavel">Idade</td>
            <td><?php echo $idade ?></td>
            <td><?php echo getType(value: $idade)?></td>
        </tr>
        <tr>
            <td class="tdVariavel">Saldo</td>
            <td>R$<?php echo number_format($saldo, 2, ',', '.') ?></td>
            <td><?php echo getType(value: $saldo) ?></td>
        
        </tr>
        <tr>
            <td class="tdVariavel">Tem Conta</td>
            <td><?php echo $temConta ? "Sim" : "Não" ?></td>
            <td><?php echo getType(value: $temConta) ?></td>
        </tr>

    </table>
</body>
</html>