<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-5">
        <form action="result-question.php" method="get">
            <div class="form-control">
                <label for="num" class="text-danger d-block mb-3">Digite um número:</label>
                <input type="number" class="form-control" id="num" name="number" placeholder="Digite o número" />
            </div>
            <div class="d-block mt-3">
                <input type="submit" class="btn btn-warning" value="Testar" />
            </div>
        </form>

    </div>
    
</body>
</html>