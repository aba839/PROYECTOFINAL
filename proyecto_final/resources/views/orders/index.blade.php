<!DOCTYPE html>
<html>
<head>
    <title>Lista de órdenes</title>
</head>
<body>
    <h1>Lista de órdenes</h1>
    @if (count($orders) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Productos</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->first_name }}</td>
                        <td>
                            <ul>
                                @foreach ($order->products as $product)
                                    <li>{{ $product->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $order->total }}</td>
                        <td>
                            <a href="{{ route('orders.show', $order->id) }}">Ver</a>
                            <a href="{{ route('orders.edit', $order->id) }}">Editar</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay órdenes registradas</p>
    @endif
</body>
</html>
