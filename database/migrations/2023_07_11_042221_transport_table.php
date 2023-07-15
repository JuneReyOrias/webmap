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
    { Schema::create('transport', function (Blueprint $table) {
        $table->id('tranport_id');
        $table->string('total_transfort_cost');
        $table->string('total_fuel_cost');

    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('transport');
}
};
