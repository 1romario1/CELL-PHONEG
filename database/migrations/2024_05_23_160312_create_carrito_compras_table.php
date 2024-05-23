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
        Schema::create('carrito_compras', function (Blueprint $table) {
            $table->id('Id_Carrito');
            $table->integer('Numero_Documento');
            $table->foreignId('Id_Producto');
            $table->integer('Cantidad');
            $table->timestamps('Fecha_Creacion'); 
            $table->timestamps('Fecha_Actualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_carrito_compras');
    }
};
