<?php

namespace App\Http\Controllers;

use App\Models\ProductOption;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    public function index()
    {
        return ProductOption::with(['product', 'option'])->get();
    }

    public function store(Request $request)
    {
        return ProductOption::create($request->all());
    }

    public function show($id)
    {
        return ProductOption::with(['product', 'option'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $productOption = ProductOption::findOrFail($id);
        $productOption->update($request->all());

        return $productOption;
    }

    public function destroy($id)
    {
        ProductOption::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Registro eliminado correctamente'
        ]);
    }
}