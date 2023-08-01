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
      
        Schema::create('transport_delivery', function (Blueprint $table) {
            $table->id('tranport_id');
            $table->string('name_of_vehicle',30)->nullable();
            $table->string('type_of_vehicle',30)->nullable();
            $table->double('total_transfort_cost',8,6);
        
    
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
