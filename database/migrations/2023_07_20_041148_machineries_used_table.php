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
    {Schema::create('machineries_used', function (Blueprint $table) {
        $table->id('machine_id');
        $table->foreignId('farmno_id')->unique();
        $table->string('plowing_machineries_used',30)->nullable();
        $table->string('plo_ownership_status',30)->nullable();
        $table->double('no_of_plowing',8,6)->nullable();
        $table->double('plowing_cost',10,6);
        $table->string('harrowing_machineries_used',30)->nullable();
        $table->string('harro_ownership_status',30)->nullable();
        $table->double('no_of_harrowing',8,6)->nullable();
        $table->double('harrowing_cost',8,6);
        $table->string('harvesting_machineries_used',30)->nullable();
        $table->string('harvest_ownership_status',30)->nullable();
        $table->double('harvesting_cost',8,6);
        $table->string('postharvest_machineries_used',30)->nullable();
        $table->string('postharv_ownership_status',30)->nullable();
        $table->double('post_harvest _cost',8,6);
        $table->double('total_cost_for_machineries',8,6);
        $table->timestamps();
    
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('machineries_used');
}
};
