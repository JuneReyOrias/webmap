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
         Schema::create('agri_districts', function (Blueprint $table) {
        $table->id('agri_districts_id');
        $table->string('district_name');
        $table->foreignId('agri_sector')->unique();
        

    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('agri_districts');
}
};
