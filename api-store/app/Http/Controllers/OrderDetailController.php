<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        return OrderDetail::with(['order', 'product'])->get();
    }

    public function store(Request $request)
    {
        return OrderDetail::create($request->all());
    }

    public function show($id)
    {
        return OrderDetail::with(['order', 'product'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detail = OrderDetail::findOrFail($id);
        $detail->update($request->all());

        return $detail;
    }

    public function destroy($id)
    {
        OrderDetail::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Detalle eliminado correctamente'
        ]);
    }
}