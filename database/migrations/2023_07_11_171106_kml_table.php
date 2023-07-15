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
        Schema::create('kml', function (Blueprint $table) {
            $table->id('kml_id');
            $table->foreignId('rice_farmer_no')->unique();
            $table->string('name');
            $table->string('address');            
            $table->foreignId('agri_districts')->unique();
            $table->float('lat');
            $table->float('lang');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorize');
    }
};
