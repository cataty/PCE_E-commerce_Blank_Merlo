<?php

/*$table->id();
            $table->string('titulo');
            $table->text('contenido');
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade'); //relacion con la tabla users
            $table->string('imagen');
            $table->timestamps();*/

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
        Schema::create('categorias-pr', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias-pr');
    }
};
