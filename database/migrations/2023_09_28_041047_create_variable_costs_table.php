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
        Schema::create('variable_costs', function (Blueprint $table) {
            $table->id('variable_id');
            $table->foreignId('farmerno_id')->unique()->nullable();
            $table->foreignId('seed_id')->unique()->nullable();
            $table->foreignId('labor_id')->unique()->nullable();
            $table->foreignId('fertilizer_id')->unique()->nullable();
            $table->foreignId('pesticides_id')->unique()->nullable();
            $table->foreignId('tranport_id')->unique()->nullable();
            $table->double('total_machinery_fuel_cost',15,4);
            $table->double('total_variable_cost',15,4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variable_costs');
    }
};
