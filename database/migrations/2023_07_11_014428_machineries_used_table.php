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
        Schema::create('machineries_used', function (Blueprint $table) {
            $table->id('machine_id');
            $table->foreignId('rice_farmer_no')->unique();
            $table->string('plowing_cost',);
            $table->string('harrowing_cost');
            $table->string('harvesting_cost');
            $table->string('post_harvest _cost');
            $table->string('total_cost');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machineries_used');
    }
};
