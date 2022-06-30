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
            <div class="text-center" style="padding: 50px;">
                <h2>CRUD CARALHO</h2>
            </div>
            <div class=" text-center" style="padding-bottom:30px;">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered" style="margin: 30px ;">
        <tr>
            <th width="200px">id</th>
            <th width="200px">Nome</th>
            <th width="200px">Preço</th>
            <th width="200px">Quantidade</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($produtos as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->preço }}</td>
            <td>{{ $product->quantidade }}</td>
            <td style="margin-right:30px ;">
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