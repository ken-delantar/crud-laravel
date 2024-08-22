<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label for="qty">Qty:</label>
        <input type="number" name="qty" id="qty" value="{{ old('qty', $product->qty) }}">
        @error('qty')
            <div>{{ $message }}</div>
        @enderror

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="{{ old('price', $product->price) }}">
        @error('price')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>
