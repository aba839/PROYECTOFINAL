<!DOCTYPE html>
<html>
<head>
	<title>Edit Order</title>
</head>
<body>
	<h1>Edit Order</h1>
	<form action="{{ route('orders.update', $order->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div>
			<label for="content">Content:</label>
			<input type="text" name="content" id="content" value="{{ $order->content }}">
		</div>
		<div>
			<label for="delivery_date">Delivery Date:</label>
			<input type="date" name="delivery_date" id="delivery_date" value="{{ $order->delivery_date }}">
		</div>
		<div>
			<label for="customer_id">Customer:</label>
			<select name="customer_id" id="customer_id">
				@foreach($customers as $customer)
				<option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
				@endforeach
			</select>
		</div>
		<div>
			<label for="products">Products:</label>
			@foreach($products as $product)
			<div>
				<input type="checkbox" name="products[]" id="product_{{ $product->id }}" value="{{ $product->id }}" {{ $order->products->contains($product) ? 'checked' : '' }}>
				<label for="product_{{ $product->id }}">{{ $product->name }} - {{ $product->price }}€</label>
				<input type="number" name="quantities[]" id="quantity_{{ $product->id }}" min="1" value="{{ $order->products->contains($product) ? $order->products->find($product)->pivot->quantity : '' }}">
			</div>
			@endforeach
		</div>
		<div>
			<button type="submit">Update</button>
			<a href="{{ route('orders.show', $order->id) }}">Cancel</a>
		</div>
	</form>
</body>
</html>
