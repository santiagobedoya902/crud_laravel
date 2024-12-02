<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model  
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio','descripcion', 'stock', 'id_categoria', 'id_proveedor']; 
    
    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'id_categoria');
    }

    public function proveedor()
    {
        return $this->belongsTo(proveedor::class, 'id_proveedor');
    }
}
