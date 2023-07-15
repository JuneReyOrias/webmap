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
        Schema::create('labor', function (Blueprint $table) {
            $table->id('labor_id');
            $table->string('no_of_person');
            $table->string('rate_person');
            $table->string('total_labor_cost');
           
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
