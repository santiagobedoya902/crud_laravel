<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/categoriaCreate.css') }}">
</head>
<body>
    <a href="{{ route('productos.index') }}">Volver a la lista de Productos</a>
    <div class="container">
        <h1>Crear Producto</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" required>
            </div>
        
            <div>
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" required></textarea>
            </div>
        
            <div>
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" required>
            </div>
        
            <div>
                <label for="id_categoria">Categoría</label>
                <select name="id_categoria" id="id_categoria" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
        
            <div>
                <label for="id_proveedor">Proveedor</label>
                <select name="id_proveedor" id="id_proveedor" required>
                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
        
            <button type="submit">Crear Producto</button>
        </form>
    </div>
</body>
</html>