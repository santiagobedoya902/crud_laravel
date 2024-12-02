<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\categoria;
use App\Models\proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = producto::with(['categoria', 'proveedor'])->get();

        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        $categorias = categoria::all();
        $proveedores = proveedor::all();

        return view('producto.create', compact('categorias', 'proveedores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:30|unique:productos',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string|min:0',
            'stock' => 'nullable|integer|min:0',
            'id_categoria' => 'required|exists:categorias,id',
            'id_proveedor' => 'required|exists:proveedores,id',
        ]);
    
        try {
            producto::create($validated);
            return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al crear el producto: ' . $e->getMessage());
        }
    }
    

    public function edit(producto $producto)
    {
        $categorias = categoria::all();
        $proveedores = proveedor::all();

        return view('producto.edit', compact('producto', 'categorias', 'proveedores'));
    }

    public function update(Request $request, producto $producto)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:30|unique:productos,nombre,' . $producto->id,
            'precio' => 'required|integer|min:1',
            'descripcion' => 'nullable|string|max:100',
            'stock' => 'nullable|integer|min:0',
            'id_categoria' => 'required|exists:categorias,id',
            'id_proveedor' => 'required|exists:proveedores,id',
        ]);

        $producto->update($validated);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
