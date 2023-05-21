<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('Departamento', function (Blueprint $table) {
    //         //
    //     });
    // }

    public function up()
{
    Schema::dropIfExists('Departamentos');
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Departamento', function (Blueprint $table) {
            //
        });
    }
};
