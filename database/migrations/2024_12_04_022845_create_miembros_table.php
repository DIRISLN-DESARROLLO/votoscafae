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
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lista_id')->constrained()->onDelete('cascade');
            $table->string('nombre');
            $table->string('dni');
            $table->string('condicion');
            $table->string('cargo')->nullable();
            $table->tinyInteger('posicion');
            $table->enum('tipo',['TITULAR', 'SUPLENTE']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
