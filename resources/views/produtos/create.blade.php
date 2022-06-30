<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="">Nome do Produto</label> 
        <input type="text" name="nome"> <br>
        <label for="">Preço</label> 
        <input type="text" name="preco"> <br>
        <label for="">Quantidade</label> 
        <input type="text" name="quantidade"> <br>
        <button>Salvar</button>
    </form>
</body>
</html>