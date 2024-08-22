<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <td>Id</td>       
                    <td>Name</td>
                    <td>Qty</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>
    <a href="{{ route('product.edit', $product->id) }}">
        <button>Edit</button>
    </a>
    <!-- Add the Delete button functionality as needed -->
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>