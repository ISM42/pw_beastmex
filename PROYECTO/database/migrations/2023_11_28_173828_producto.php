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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('num_serie');
            $table->string('marca');
            $table->integer('cantidad'); // Se cambió a integer para representar la cantidad
            $table->decimal('costo_compra', 10, 2); // Utilizando decimal para precisión en valores monetarios
            $table->date('fecha_ingreso');
            $table->string('foto'); // Se puede manejar como una ruta o en el sistema de archivos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
