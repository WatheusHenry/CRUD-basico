<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th width="200px">id</th>
            <th width="280px">Nome</th>
            <th width="280px">Preço</th>
            <th width="280px">Quantidade</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produtos as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->preço }}</td>
            <td>{{ $product->quantidade }}</td>
            <td>
                <form action="{{ route('produtos.destroy',['id'=>$product->id]) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('produtos.show',['id'=> $product->id]) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('produtos.edit',['id'=> $product->id]) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

</body>

</html>