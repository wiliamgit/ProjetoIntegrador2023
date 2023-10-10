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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cd');
            $table->string('codigo_barras');
            $table->string('foto_cd');
            $table->string('descricao_cd');
            $table->string('quantidade');
            $table->enum('tipo',(['saida', 'entrada']));
            $table->date('data');

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
