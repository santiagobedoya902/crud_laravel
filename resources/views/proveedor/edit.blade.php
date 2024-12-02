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
        <h2>Editar Proveedor</h2>
    
        <form action="{{ route('proveedor.update', $proveedor->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $proveedor->nombre) }}" required>
            </div>
    
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $proveedor->direccion) }}" required>
            </div>
    
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $proveedor->telefono) }}" required>
            </div>
    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $proveedor->email) }}" required>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto" value="{{ old('email', $proveedor->contacto) }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('email', $proveedor->descripcion) }}" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Actualizar Proveedor</button>
        </form>
    </div>
</body>
</html>