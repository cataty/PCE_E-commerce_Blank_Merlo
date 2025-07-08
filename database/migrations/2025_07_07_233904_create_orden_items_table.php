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
        Schema::create('orden_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orden_id') ->constrained('ordenes')  ->onDelete('cascade');
            $table->timestamps();

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id') ->references('producto_id') ->on('productos') ->onDelete('cascade');
            $table->integer('cantidad')->unsigned();
            $table->integer('precio_unitario')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_items');
    }
};
