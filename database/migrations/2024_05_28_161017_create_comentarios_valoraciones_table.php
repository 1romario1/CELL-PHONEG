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
        Schema::create('comentarios_valoraciones', function (Blueprint $table) {
            $table->id('Id_Comentario');
            $table->foreignId('Numero_Documento');
            $table->foreignId('Id_Producto');
            $table->string('Comentario_Usuario');
            $table->integer('Valoracion');
            $table->timestamps();
            $table->foreign('Numero_Documento')->references('Numero_Documento')->on('users');
            $table->foreign('Id_Producto')->references('Id_Producto')->on('Productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_comentarios_valoraciones');
    }
};
