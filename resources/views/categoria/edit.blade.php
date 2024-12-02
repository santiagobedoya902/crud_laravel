<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="{{ asset('css/categoriaCreate.css') }}">
</head>
<body>
    <a href="{{ route('categoria.index') }}">Volver a la lista de categorías</a>
    <div class="container">
        <h2>Editar Categoría</h2>
    
        <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="nombre">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) }}" required>
            </div>
    
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion', $categoria->descripcion) }}</textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
        </form>
    </div>
</body>
</html>
