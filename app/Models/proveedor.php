<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores'; 
    protected $fillable = ['nombre','direccion','telefono','email','contacto','descripcion'];

    public function productos()
    {
        return $this->hasMany(producto::class);
    }
}
