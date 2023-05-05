<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Editar clientes</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">Nombre</label>
            <input type="text" name="first_name" id="first_name" value="{{ $customer->first_name }}">
        </div>
        <div>
            <label for="last_name">Apellido</label>
            <input type="text" name="last_name" id="last_name" value="{{ $customer->last_name }}">
        </div>
        <div>
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone" value="{{ $customer->phone }}">
        </div>
        <div>
            <label for="address">Direccion</label>
            <input type="text" name="address" id="address" value="{{ $customer->address }}">
        </div>
        <button type="submit">Guardar clientes</button>
    </form>
</body>
</html>
