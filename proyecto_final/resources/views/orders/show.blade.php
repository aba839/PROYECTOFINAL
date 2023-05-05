<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
</head>
<body>
	<h1>Order Details</h1>
	<p><strong>Order ID:</strong> {{ $order->id }}</p>
	<p><strong>Customer Name:</strong> {{ $order->customer->name }}</p>
	<p><strong>Delivery Date:</strong> {{ $order->delivery_date }}</p>
	<h2>Order Items:</h2>
	<table>
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Price</th>
			</tr>
		</thead>
		<tbody>
			@foreach($order->orderProducts as $orderProduct)
				<tr>
					<td>{{ $orderProduct->product->name }}</td>
					<td>{{ $orderProduct->quantity }}</td>
					<td>{{ $orderProduct->product->price }}</td>
					<td>{{ $orderProduct->quantity * $orderProduct->product->price }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<p><strong>Total Price:</strong> {{ $order->total_price }}</p>
</body>
</html>