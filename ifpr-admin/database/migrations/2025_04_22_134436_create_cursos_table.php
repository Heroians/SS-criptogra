<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome'); 
            $table->string('abreviatura'); 
            $table->integer('tempo');
            $table->foreignId('nivel_id')->constrained();
            $table->foreignId('eixo_id')->constrained();
            $table->timestamps(); 
            $table->softDeletes(); 
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
