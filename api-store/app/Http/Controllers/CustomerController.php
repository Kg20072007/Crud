<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::with('orders')->get();
    }

    public function store(Request $request)
    {
        return Customer::create($request->all());
    }

    public function show($id)
    {
        return Customer::with('orders')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return $customer;
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Cliente eliminado correctamente'
        ]);
    }
}