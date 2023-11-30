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
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_producto'); // FK de Producto
        $table->unsignedBigInteger('id_cliente'); // FK de Cliente
        $table->integer('cantidad_vendida');
        $table->decimal('precio_unitario', 10, 2); // Utilizando decimal para precisión en valores monetarios
        $table->decimal('total_venta', 10, 2); // Utilizando decimal para precisión en valores monetarios
        $table->date('fecha_venta');
        $table->timestamps();
    
        // Definición de las llaves foráneas
        $table->foreign('id_producto')->references('id')->on('productos');
        $table->foreign('id_cliente')->references('id')->on('clientes');
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
