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
        Schema::create('factura', function (Blueprint $table) {
            $table->id('Id_Factura');
            $table->foreignId('Numero_Documento');
            $table->integer('Numero_Telefono_Cliente');
            $table->string('Correo_Electronico');
            $table->string('Direccion');
            $table->foreignId('Id_Metodo_Pago');
            $table->foreignId('Id_Producto');
            $table->string('Detalles_Producto');
            $table->string('Estado');
            $table->float('Total');
            $table->timestamps();
            $table->foreign('Numero_Documento')->references('Numero_Documento')->on('users');
            $table->foreign('Numero_Telefono_CLiente')->references('Numero_Telefono')->on('users');
            $table->foreign('Correo_Electronico')->references('Correo_Electronico')->on('users');
            $table->foreign('Id_Metodo_Pago')->references('Id_Metodo_pago')->on('metodo_pago');
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
        Schema::dropIfExists('factura');
    }
};
