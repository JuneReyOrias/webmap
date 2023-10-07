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
        Schema::create('fertilizers', function (Blueprint $table) {
            $table->id('fertilizer_id');
            $table->string('name_of_fertilizer',30)->nullable();
            $table->string('type_of_fertilizer',30)->nullable();
            $table->double('no_ofsacks',15,4);
            $table->double('unitprice_per_sacks',15,4);
            $table->double('total_cost_fertilizers',15,4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizers');
    }
};
