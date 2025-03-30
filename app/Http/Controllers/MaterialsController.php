<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materials;

class MaterialsController extends Controller
{
    public function index()
    {
        $materials = Materials::all();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        $materials = Materials::all();
        return view('materials.create', compact('materials'));
    }

    public function store(Request $request)
    {
        Materials::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'stock' => $request->stock,
            'evidence' => $request->evidence,
        ]);
    
        return redirect()->route('materials.index');
    }

    public function show(string $id)
    {
        $material = Materials::findOrFail($id);
        return view('materials.show', compact('material'));
    }

    public function edit(string $id)
    {
        $material = Materials::findOrFail($id);
        return view('materials.edit', compact('material'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'stock' => 'required|integer',
            'evidence' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $evidence = $request->file('evidence');
        $evidenceName = $evidence->getClientOriginalName();
        $evidence->move(public_path('images'), $evidenceName);
    
        Materials::findOrFail($id)->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'stock' => $request->stock,
            'evidence' => $evidenceName,
        ]);
    
        return redirect()->route('materials.index');
    }
    public function destroy(string $id)
    {
        $materials = Materials::findOrFail($id); 
        $materials->delete();
        return to_route('materials.index'); 
    }
}