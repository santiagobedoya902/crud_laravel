<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/categoriaIndex.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('productos.index') }}">Productos</a></li>
            <li><a href="{{ route('categoria.index') }}">Categorías</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Lista de Proveedores</h2>

        <a href="{{ route('proveedor.create') }}" class="btn btn-primary">Crear Proveedor</a>
    
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
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Contacto</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                        <td>{{ $proveedor->id}}</td>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>{{ $proveedor->email }}</td>
                        <td>{{ $proveedor->contacto }}</td>
                        <td>{{ $proveedor->descripcion}}</td>
                        <td>
                            <a href="{{ route('proveedor.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('proveedor.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este proveedor?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
    </div>
    
</body>
</html>