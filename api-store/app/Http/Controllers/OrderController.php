<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::with(['customer', 'orderDetails'])->get();
    }

    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    public function show($id)
    {
        return Order::with(['customer', 'orderDetails'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());

        return $order;
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Orden eliminada correctamente'
        ]);
    }
}