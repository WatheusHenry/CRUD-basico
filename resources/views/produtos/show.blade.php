<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Produto</title>
</head>

<body>
    <div style="margin-inline:300px ; margin-top:50px;">
        <form action="{{ route('produtos.index') }}">
            <button class="btn-close" aria-label="Close"></button>
        </form>
        <form action="{{ route('produtos.index',['id'=>$produto->id]) }}" method="GET">
            <div class="container mt-5 px-5">
                <div class="container  ">
                    <h1>Visualização de Produto</h1>
                    <label class=" align-self-center form-label" for="">Nome do Produto</label> <br>
                    <input type="text" name="nome" class="form-control" value="{{$produto->nome}}" disabled="disabled"> <br>
                    <label for="" class="form-label">Preço</label> <br>
                    <input type="text" name="preco" class="form-control" value="{{$produto->preço}}" disabled="disabled"> <br>
                    <label for="" class="form-label">Quantidade</label> <br>
                    <input type="text" name="quantidade" class="form-control" value="{{$produto->quantidade}}" disabled="disabled"> <br>
                </div>
            </div>
        </form>
        <form action="{{ route('produtos.edit',['id'=>$produto->id])}}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark ">Editar Produto</button>
            </div>
        </form>
    </div>
</body>

</html>