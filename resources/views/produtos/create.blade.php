<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro de Produto</title>
</head>

<body>

    <div style="margin-inline:300px ; margin-top:60px;">
        <form action="{{ route('produtos.index') }}">
            <button class="btn-close" aria-label="Close"></button>
        </form>
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="container mt-5 px-5">
                <div class="container  ">
                    <h1>Cadastro de Produto</h1>
                    <label class=" align-self-center form-label" for="">Nome do Produto</label> <br>
                    <input type="text" name="nome" class="form-control" required> <br>
                    <label for="" class="form-label">Preço</label> <br>
                    <input type="text" name="preco" class="form-control" required> <br>
                    <label for="" class="form-label">Quantidade</label> <br>
                    <input type="text" name="quantidade" class="form-control" required> <br>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary ">Salvar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>