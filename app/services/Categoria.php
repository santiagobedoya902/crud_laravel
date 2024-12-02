<?php 

namespace App\Services;

use App\Models\Categoria;

class CategoriaService
{
    public function obtenerCategorias()
    {
        return Categoria::all();
    }
}
