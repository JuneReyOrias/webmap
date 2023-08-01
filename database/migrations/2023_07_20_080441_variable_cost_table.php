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
        Schema::create('variable_cost', function (Blueprint $table) {
            $table->id('variable_id');
            $table->foreignId('farmerno_id')->unique();
            $table->foreignId('seed_id')->unique();
            $table->foreignId('labor_id')->unique();
            $table->foreignId('fertilizer_id')->unique();
            $table->foreignId('pesticides_id')->unique();
            $table->foreignId('tranport_id')->unique();
            $table->double('total_machinery_fuel_cost',8,6);
            $table->double('total_varaiable_cost',8,6);
            $table->timestamps();
        
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variable_cost');
    }
};
