<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>
    <h1>{{ $customer->first_name }} {{ $customer->last_name }}</h1>
    <p>Telefono: {{ $customer->phone }}</p>
    <p>Direccion: {{ $customer->address }}</p>
    <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
