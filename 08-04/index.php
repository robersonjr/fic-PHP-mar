<?php
    //Dados em PHP puro (lógica)
    $frutas = ["Maçã", "Banana", "Laranja", "Morango"];

    $alunos = [
        ["nome" => "Jão" , "idade" => 20, "nota" => 8.5],
        ["nome" => "Gabs" , "idade" => 21, "nota" => 6.5],
        ["nome" => "Juliana" , "idade" => 33, "nota" => 7.5],
        ["nome" => "Clotilde" , "idade" => 25, "nota" => 4.5],
    ];

    $cursos = [
        "TI" => [
            ["nome" => "Programador Web", "duracao" => 6],
            ["nome" => "Banco de dados ", "duracao" => 4],
        ],
        "Administracao" => [
            ["nome" => "Gestão de Projetos", "duracao" => 31],
            ["nome" => "Marketing Digital", "duracao" => 4],
        ]
    ];

    $produtos = [
        ["nome" => "Notebook", "preco" => 3500, "estoque" => 10],
        ["nome" => "Tablet", "preco" => 899.50, "estoque" => 8],
        ["nome" => "Fone JBL", "preco" => 150.99, "estoque" => 100],
    ];

    // Funções auxiliares
    function formatarPreco($preco) {
        return 'R$ ' . number_format($preco, 2, ',', '.');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class ="container">
        <h1>Lista de frutas</h1>
        
        <h2>1. Array Indexado Simples</h2>

        <ul>
            <?php foreach ($frutas as $fruta): ?>
            <li><?= $fruta ?></li>
            <?php endforeach; ?>
        </ul>

        <hr>
        <h3>2. Array Associativo em tabela</h3>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            <?php foreach($alunos as $aluno): ?>
            <tr>
                <td><?=$aluno['nome']?></td>
                <td><?=$aluno['idade']?></td>
                <td><?=$aluno['nota']?></td>
                <td><?=$aluno['nota'] >= 5 ? "Aprovado" : "Reprovado" ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <hr>
        <h4>3. Array Multidimensional Complexo</h4>
        <?php foreach($cursos as $area => $cursosArea) :  ?>
            <h5>Área : <?php echo $area ?></h5>
            <table>
                <tr>
                    <th>Cursos</th>
                    <th>Duração (meses) </th>
                </tr>
                <?php foreach($cursosArea as $curso) : ?>
                    <tr>
                        <td><?php echo $curso['nome'] ?></td>
                        <td><?php echo $curso['duracao']?></td>
                    </tr>

                <?php endforeach; ?>
            </table>
        <?php endforeach  ?>
        <hr>
        <h5>4. Produtos com Função</h5>
        <table>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Disponivel</th>
            </tr>
            <?php foreach($produtos as $produto) : ?>
                <tr>
                    <td><?=$produto['nome']?></td>
                    <td><?= formatarPreco($produto['preco'])?></td>
                    <td><?=$produto['estoque']?></td>
                    <!-- <td><?=$produto['estoque'] >= 8 ? "Disponivel" : "Indisponivel" ?></td> -->
                    <td>no</td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    
</body>
</html>