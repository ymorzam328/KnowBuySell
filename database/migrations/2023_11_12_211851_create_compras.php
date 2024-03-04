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
            // $table->timestamps();
            $table->integer('cantidad');
            $table->double('precio', 8, 2);
            $table->integer('user_id');
            $table->timestamps();
            //para más de 250 caracteres utilizamos text()php 
            $table->text('descripcionproducto');
            $table->string('categoria');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
