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
            $table->string('no_of_lorkg');
            $table->string('unitprice_pesticde');
            $table->string('total_pesticde_cost');
        
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesticides');
    }
};
