
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu de Categorias</title>
    <link rel="stylesheet" href="{{ asset('css/categoriaIndex.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('productos.index') }}">Productos</a></li>
            <li><a href="{{ route('proveedor.index') }}">Proveedores</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Lista de Categorías</h2>
    
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>{{ $categoria->descripcion }}</td>
                        <td>
                            <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
    
                            <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar esta categoría?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        <a href="{{ route('categoria.create') }}" class="btn btn-primary">Crear Nueva Categoría</a>
    </div>
</body>
</html>