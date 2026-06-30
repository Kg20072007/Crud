<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return ProductCategory::with(['product', 'category'])->get();
    }

    public function store(Request $request)
    {
        return ProductCategory::create($request->all());
    }

    public function show($id)
    {
        return ProductCategory::with(['product', 'category'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->update($request->all());

        return $productCategory;
    }

    public function destroy($id)
    {
        ProductCategory::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Registro eliminado correctamente'
        ]);
    }
}