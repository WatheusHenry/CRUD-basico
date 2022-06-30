<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>

<body>
    <label for="">Nome do Produto</label>
    <input type="text" name="nome" value="{{$produto->nome}}"> <br>
    <label for="">Preço</label>
    <input type="text" name="preco" value="{{$produto->preço}}"> <br>
    <label for="">Quantidade</label>
    <input type="text" name="quantidade" value="{{$produto->quantidade}}"> <br>
</body>

</html>