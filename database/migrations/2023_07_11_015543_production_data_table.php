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
        Schema::create('production_data', function (Blueprint $table) {
        $table->id('prduction_id');
        $table->foreignId('rice_farmer_no')->unique();
        $table->string('seed_type_used');
        $table->string('seeds_used');
        $table->string('seed_source');
        $table->string('no_of_fertilizer_used');
        $table->string('no_of_pesticides_used');
        $table->string('no_of_insecticides_used');
        $table->string('area_planted');
        $table->string('date_planted');
        $table->string('date_harvested');
        $table->string('yield_tons');
        $table->string('unitprice_palaykg');
        $table->string('unitprice_ricekg');
        $table->string('type_ofproduct');
        $table->string('sold_to');
        $table->string('palay_milled');
        $table->string('gross_income_palay');
        $table->string('gross_income_rice');

        $table->timestamps();
    
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('production_data');
}
};
