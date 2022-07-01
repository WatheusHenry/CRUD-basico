<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div class="row">
        <div class="col-lg-12 margin-tb ">
            <form action="/">
                <button class="btn" style="margin-inline:50px ;margin-top:30px"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg></button>
            </form>
            <div class="text-center" style="padding: 20px;">
                <h2>CRUD CARALHO</h2>
            </div>
            <div class=" text-center">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Cadastrar um novo produto</a>
            </div>
        </div>
    </div>
    <table class="table table-dark list-group mb-5" style="margin-top: 20px;margin-inline:270px;">
        <caption>Lista de Produtos</caption>
        <tr class="">
            <th width="100px">id-item</th>
            <th width="200px">Nome do Produto</th>
            <th width="150px">Preço</th>
            <th width="150px">Quantidade</th>
            <th width="230px">Action</th>
        </tr>
        @foreach ($produtos as $product)
        <tr class="table-light ">
            <td>{{ $product->id }}</td>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->preço }}</td>
            <td>{{ $product->quantidade }}</td>
            <td style="margin-right:10px ;">
                <form action="{{ route('produtos.destroy',['id'=>$product->id]) }}" method="POST">

                    <a class="btn btn-dark" href="{{ route('produtos.show',['id'=> $product->id]) }}">Ver</a>
                    <a class="btn btn-dark" href="{{ route('produtos.edit',['id'=> $product->id]) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                   
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
</body>

</html>