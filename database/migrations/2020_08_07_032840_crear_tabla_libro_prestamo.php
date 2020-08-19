<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->increments('LibroPrestamo');
            $table->unsignedInteger('IdUsuario');
            $table->foreign('IdUsuario','fk_LibroPrestamo_Usuario')->references('IdUsuario')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('IdLibro');
            $table->foreign('IdLibro','fk_LibroPrestamo_Libro')->references('IdLibro')->on('libros')->onDelete('restrict')->onUpdate('restrict');
            $table->date('FechaPrestamo');
            $table->string('PrestadoA', 100);
            $table->boolean('Estado');
            $table->date('FechaDevolucion')->nullable();
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
        Schema::dropIfExists('libro_prestamo');
    }
}
