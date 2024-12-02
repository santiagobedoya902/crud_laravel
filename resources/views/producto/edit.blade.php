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
    <h1>Editar Producto</h1>    
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>

        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion">{{ $producto->descripcion }}</textarea>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $producto->stock }}" required>

        <label for="id_categoria">Categoría:</label>
        <select name="id_categoria" id="id_categoria" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" @if ($producto->id_categoria == $categoria->id) selected @endif>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>

        <label for="id_proveedor">Proveedor:</label>
        <select name="id_proveedor" id="id_proveedor" required>
            @foreach ($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}" @if ($producto->id_proveedor == $proveedor->id) selected @endif>
                    {{ $proveedor->nombre }}
                </option>
            @endforeach
        </select>

        <button type="submit">Actualizar Producto</button>
    </form>
    </div>
</body>
</html>