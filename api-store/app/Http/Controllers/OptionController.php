<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        return Option::with('products')->get();
    }

    public function store(Request $request)
    {
        return Option::create($request->all());
    }

    public function show($id)
    {
        return Option::with('products')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $option = Option::findOrFail($id);
        $option->update($request->all());

        return $option;
    }

    public function destroy($id)
    {
        Option::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Opción eliminada correctamente'
        ]);
    }
}