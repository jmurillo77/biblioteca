<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->unsignedInteger('IdRol');
            $table->foreign('IdRol','fk_Permiso_Rol')->references('IdRol')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdPermiso');
            $table->foreign('IdPermiso','fk_Rol_Permiso')->references('IdPermiso')->on('permisos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_rol');
    }
}
