<!DOCTYPE html>
<html>
<head>
    <title>Mostrar productos</title>
  </head>
<body>


    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>Id: {{ $product->id }}</p>
        <p>Cantidad: {{ $product->quantity }}</p>
        <p>Precio: {{ $product->price }}</p>
    </div>

</body>
