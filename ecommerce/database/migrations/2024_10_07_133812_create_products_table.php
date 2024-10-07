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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID del producto
            $table->string('name'); // Nombre del producto
            $table->text('description'); // Descripción del producto
            $table->decimal('price', 8, 2); // Precio del producto
            $table->string('image')->nullable(); // Ruta de la imagen del producto
            $table->boolean('availability')->default(true); // Disponibilidad del producto
            $table->timestamps(); // Created at y Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
