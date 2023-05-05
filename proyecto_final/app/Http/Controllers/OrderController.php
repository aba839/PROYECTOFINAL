<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($customerId)
    {
        $customer = Customer::find($customerId);
        $products = Product::all();
        return view('orders.create', compact('customer', 'products'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $customerId)
{
    $order = new Order;
    $order->customer_id = $request->customer_id;
    $order->delivery_date = $request->delivery_date;
    $order->save();

    foreach ($request->products as $productId => $quantity) {
        $product = Product::findOrFail($productId);
        $order->products()->attach($product, ['quantity' => $quantity]);
    }

    return redirect()->route('orders.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        $customers = Customer::all();
        return view('orders.edit', compact('order', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'delivery_date' => 'required|date',
            'customer_id' => 'required|exists:customers,id'
        ]);
    
        $order = Order::find($id);
        $order->update($validatedData);
    
        return redirect()->route('orders.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
    
        return redirect()->route('orders.index')
                         ->with('success', 'Order deleted successfully.');
    }
}
