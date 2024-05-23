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
        Schema::create('inventario', function (Blueprint $table) {
            $table->id('Id_Inventario');
            $table->foreignId('Id_Producto');
            $table->string('Nombre_Producto');
            $table->integer('Cantidad_Stock');
            $table->timestamps('Fecha_Actualizacion');
            $table->foreign('Id_Producto')->references('Id_Producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_inventario');
    }
};
