<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->increments('UsuarioRol');
            $table->unsignedInteger('IdRol');
            $table->foreign('IdRol','fk_UsuarioRol_Rol')->references('IdRol')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario','fk_UsuarioRol_Usuario')->references('IdUsuario')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('Estado');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
