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
        
        Schema::create('seed', function (Blueprint $table) {
            $table->id('seed_id');
            $table->string('seed_name',30)->nullable();
            $table->string('seed_type',30)->nullable();
            $table->string('unit',30);
            $table->double('quantity',8,6);
            $table->double('unit_price',8.6);
            $table->double('total_seed_cost',8,6);
          
        
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seed');
    }
};
