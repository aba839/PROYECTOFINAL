<!DOCTYPE html>
<html>
<head>
    <title>Creacion de productos</title>
  </head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01">
        </div>
        <button type="submit">Create Product</button>
    </form>
</body>

