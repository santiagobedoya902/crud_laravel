<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30)->nullable();
            $table->string('direccion', 50)->nullable();;
            $table->string('telefono', 30)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('contacto', 30)->nullable();;
            $table->string('descripcion', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proveedores'); 
    }
};
