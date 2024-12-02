<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = proveedor::all();
        return view('proveedor.index', compact('proveedores')); 
    }

    public function create()
    {
        return view('proveedor.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:proveedores,email',
            'contacto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
        ]);

        proveedor::create($request->all());

        return redirect()->route('proveedor.index')->with('success', 'Proveedor creado exitosamente.');
    }

    public function edit(proveedor $proveedor)
    {
        return view('proveedor.edit', compact('proveedor')); 
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|unique:proveedores,email,' . $proveedor->id,
            'contacto' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
        ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado exitosamente.');
    }

    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('success', 'Proveedor eliminado exitosamente.');
    }
}
