<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('componentes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('carga_horaria');
            $table->foreignId('curso_id')->constrained(); 
            $table->timestamps(); 
            $table->softDeletes(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('componentes');
    }
};
