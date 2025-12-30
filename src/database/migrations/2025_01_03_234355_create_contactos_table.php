<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('nombre');
            $table->string('puesto');
            $table->string('departamento');
            $table->string('telefono');
            $table->integer('extension');
            $table->string('email')->unique();
            $table->date('fecha_alta');
            $table->date('fecha_baja');
            $table->integer('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacto');
    }
};
