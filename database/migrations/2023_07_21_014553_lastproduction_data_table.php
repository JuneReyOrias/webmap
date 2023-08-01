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
        
        Schema::create('lastproduction_data', function (Blueprint $table) {
            $table->id('production_id');
            $table->foreignId('farmno_id')->unique();
            $table->string('seed_type_used',30);
            $table->double('seeds_used_in_kg',8,6);
            $table->string('seed_source',30);
            $table->double('no_of_fertilizer_used',8,6);
            $table->double('no_of_pesticides_used',8,6);
            $table->double('no_of_insecticides_used',8,6);
            $table->string('area_planted',30);
            $table->date('date_planted');
            $table->date('date_harvested');
            $table->double('yield_tons_per_kg',8,6);
            $table->double('unitprice_palay_kg',8,6);
            $table->double('unitprice_rice_kg',8,6);
            $table->string('type_ofproduct')->nullable();
            $table->string('sold_to',30);
            $table->string('palay_milled',30);
            $table->double('gross_income_palay',8,6);
            $table->double('gross_income_rice',8,6);
    
            $table->timestamps();
        
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lastproduction_data');
    }
};
