<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('Id_Producto');
            $table->string('Nombre_Producto');
            $table->string('Descripcion');
            $table->float('Precio_Producto');
            $table->foreignId('Id_Categoria');
            $table->string('Imagen_Producto');    
            $table->foreign('Id_Categoria')->references('Id_Categoria')->on('categorias_productos');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_productos');
    }
};
