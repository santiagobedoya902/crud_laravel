<?php 

namespace App\services;
use App\Models\producto;

class productoService{
    public function getProducto(){
        return producto::all();
    }
}

?>