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
        Schema::create('fixed_cost', function (Blueprint $table) {
            $table->Id('land_rental');
            $table->foreignId('rice_farmer_no')->unique();
            $table->string('no_of_has',);
            $table->string('cost_per_ha');
            $table->string('total_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixed_cost');
    }
};
