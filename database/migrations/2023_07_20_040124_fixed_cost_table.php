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
    { Schema::create('fixed_cost', function (Blueprint $table) {
        $table->Id('fixed_id');
        $table->foreignId('farmno_id')->unique();
        $table->string('particular',30);
        $table->double('no_of_has',8,6);
        $table->double('cost_per_ha',8,6);
        $table->double('total_amount',8,6);
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('fixed_cost');
}
};
