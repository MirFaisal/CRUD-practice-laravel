<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post" action="{{route('PRODUCT.STORE')}}">
            @csrf
            @method('post')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div class="mb-3">
            <label>qty</label>
            <input type="text" name='qty' >
        </div>
        <div class="mb-3">
            <label>price</label>
            <input type="text" name="price" >
        </div>
        <div class="mb-3">
            <label>discription</label>
            <input type="text" name="discription" >
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>