<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Materials;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $customers = Customer::all();
        $materials = Materials::all();
        return view('orders.index', compact('orders', 'customers', 'materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $materials = Materials::all();
        return view('orders.create', compact('customers', 'materials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create([
            'customer_id' => $request->customer_id,
            'material_id' => $request->material_id,
            'date' => $request->date,
            'status' => $request->status,
        ]);
        return to_route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = Order::findOrFail($id);
        return view('orders.show', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orders = Order::findOrFail($id);
        $customers = Customer::all();
        $materials = Materials::all();
        return view('orders.edit', compact('orders', 'customers', 'materials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'customer_id' => 'required',
            'material_id' => 'required',
            'date' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());
        return to_route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return to_route('orders.index');
    }
}
