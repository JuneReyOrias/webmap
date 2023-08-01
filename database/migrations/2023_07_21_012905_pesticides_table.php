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
        Schema::create('pesticides', function (Blueprint $table) {
            $table->id('pesticides_id');
            $table->string('pesticides_name',30)->nullable();
            $table->string('type_ofpesticides',30)->nullable();
            $table->double('no_of_l_kg',8,6);
            $table->double('unitprice_ofpesticides',8,6);
            $table->double('total_cost_pesticides',8,6);
           
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor');
    }
};
