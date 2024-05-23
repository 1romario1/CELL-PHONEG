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
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id('Id_Favorito');
            $table->foreignId('Numero_Documento');
            $table->foreignId('Id_Producto');
            $table->timestamps('Fecha');
            $table->foreign('Numero_Documento')->references('Numero_Documento')->on('users');
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
        Schema::dropIfExists('favoritos');
    }
};
