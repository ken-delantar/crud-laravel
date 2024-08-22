<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>

    <div>
        @if ($errors->any())
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
            @endforeach
            </ul>
        @endif
    </div>

    <form action="{{route('product.store')}}" method="post">
    @csrf
    @method('post')
        <input type="text" name="name" placeholder="name">
        <input type="text" name="qty" placeholder="qty">
        <input type="text" name="price" placeholder="price">
        <button type="submit">Create</button>
    </form>
</body>
</html>