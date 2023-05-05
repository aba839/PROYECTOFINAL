<!DOCTYPE html>
<html>
<head>
    <title>Creación de orden</title>
</head>
<body>

    <form action="{{ route('orders.store', $customer->id) }}" method="POST">
        @csrf
        <div>
            <label for="delivery_date">Fecha de entrega:</label>
            <input type="date" id="delivery_date" name="delivery_date">
        </div>
        <div>
            <label for="products">Productos:</label>
            <select name="products[]" id="products" multiple>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Crear orden</button>
        </div>
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
    </form>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>
