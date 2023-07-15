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
        Schema::create('fertilizer', function (Blueprint $table) {
            $table->id('fertilizer_id');
            $table->string('no_ofsacks');
            $table->string('unitprice_prsacks');
            $table->string('totalcost_fertilzers');
           
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizer');
    }
};
