<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'customer_number' => $request->customer_number,
            'address' => $request->address,
        ]);
        return to_route('customers.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customers = Customer::findOrFail($id); 
        return view('customers.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::findOrFail($id);
        return view('customers.edit', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255', 
            'customer_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $customers = Customer::findOrFail($id); 
        $customers->update([
            'name' => $request->name,
            'customer_number' => $request->customer_number,
            'address' => $request->address,
        ]);
        return to_route('customers.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customers = Customer::findOrFail($id); 
        $customers->delete();
        return to_route('customers.index'); 
    }
}