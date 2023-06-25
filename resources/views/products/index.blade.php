<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form index</h1>

    <div>
        <table border="1">

            <tr>
                <th>id</th>
                <th>Name</th>
                <th>qut</th>
                <th>Price</th>
                <th>Dis</th>
                <th>upade</th>
            </tr>

            @foreach ($products as $product)
                <tr>
                <th>{{ $product->id }}</th>
                <th>{{ $product->name }}</th>
                <th>{{$product->qty}}</th>
                <th>{{$product->price}}</th>
                <th>{{$product->discription}}</th>
                <th><a href="{{route('PRODUCT.EDIT', ['product' => $product])}}">edit</a></th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>