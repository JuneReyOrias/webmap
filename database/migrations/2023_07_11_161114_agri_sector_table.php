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
        Schema::create('agri_sector', function (Blueprint $table) {
            $table->id('agri_sector_id');
            $table->foreignId('agri_districts_id')->unique();
            $table->string('subsector_name');
            
    
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agri_sector');
    }
};
