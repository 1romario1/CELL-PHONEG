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
        Schema::create('users', function (Blueprint $table) {
            $table->id('Numero_Documento');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Correo_Electronico')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Contraseña');
            $table->integer('Numero_Telefono')->unique();
            $table->string('Direccion')->nullable();
            $table->foreignID('Id_Rol');
            $table->foreign('Id_Rol')->references('Id_Rol')->on('rol');
            $table->string('Estado',length:20);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
