<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Excluir Produto</title>
</head>
<body>
    <form action="{{ route('excluir_produto',['id'=>$produto->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que quer deletar esse produto?</label> <br>
        <input type="text" name="nome" value="{{$produto->nome}}"> <br>
        <button class="btn btn-danger">sim</button>
    </form>
</body>
</html>