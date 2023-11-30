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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto'); // FK de Producto
            $table->unsignedBigInteger('id_proveedor'); // FK de Proveedor
            $table->integer('cantidad');
            $table->date('fecha_compra');
            $table->timestamps();
        
            // Definición de las llaves foráneas
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
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
