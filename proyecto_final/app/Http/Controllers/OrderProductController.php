<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\OrderProduct;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $order = Order::find($request->input('order_id'));
    
        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }
    
        $product = Product::find($request->input('product_id'));
    
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    
        $orderProduct = new OrderProduct;
        $orderProduct->order_id = $order->id;
        $orderProduct->product_id = $product->id;
        $orderProduct->quantity = $request->input('quantity');
        $orderProduct->save();
    
        return response()->json(['success' => true], 201);
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
    
        $orderProduct = OrderProduct::findOrFail($id);
        $orderProduct->update(['quantity' => $validatedData['quantity']]);
    
        return response()->json([
            'message' => 'Relation between order and product updated successfully.',
            'data' => [
                'order_id' => $orderProduct->order_id,
                'product_id' => $orderProduct->product_id,
                'quantity' => $validatedData['quantity'],
            ],
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
