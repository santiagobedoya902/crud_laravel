<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/categoriaCreate.css') }}">
    <title>Crear Categoría</title>
</head>
<body>
<a href="{{ route('categoria.index') }}">Volver a la lista de categorías</a>

    <div class="container">
        <h2>Crear Nueva Categoría</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('categoria.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crear Categoría</button>
        </form>
    </div>
</body>
</html>
