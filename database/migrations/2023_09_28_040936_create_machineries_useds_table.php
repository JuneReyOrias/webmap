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
        Schema::create('machineries_useds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_informations_id')->nullable();
            $table->foreignId('farm_profiles_id')->nullable();
            $table->string('plowing_machineries_used',30)->nullable();
            $table->string('plo_ownership_status',30)->nullable();
            $table->double('no_of_plowing',15,6)->nullable();
            $table->double('plowing_cost',15,6);
            $table->string('harrowing_machineries_used',30)->nullable();
            $table->string('harro_ownership_status',30)->nullable();
            $table->double('no_of_harrowing',15,6)->nullable();
            $table->double('harrowing_cost',15,6);
            $table->string('harvesting_machineries_used',30)->nullable();
            $table->string('harvest_ownership_status',30)->nullable();
            $table->double('harvesting_cost',15,6);
            $table->string('postharvest_machineries_used',30)->nullable();
            $table->string('postharv_ownership_status',30)->nullable();
            $table->double('post_harvest_cost',15,6);
            $table->double('total_cost_for_machineries',15,6);
            $table->timestamps();
           
            // $table->id();
            // $table->string('plowing_machineries_used',30)->nullable();
            // $table->string('plo_ownership_status',30)->nullable();
            // $table->double('no_of_plowing',15,6)->nullable();
            // $table->double('plowing_cost',15,6);
            // $table->string('harrowing_machineries_used',30)->nullable();
            // $table->string('harro_ownership_status',30)->nullable();
            // $table->double('no_of_harrowing',15,6)->nullable();
            // $table->double('harrowing_cost',15,6);
            // $table->string('harvesting_machineries_used',30)->nullable();
            // $table->string('harvest_ownership_status',30)->nullable();
            // $table->double('harvesting_cost',15,6);
            // $table->string('postharvest_machineries_used',30)->nullable();
            // $table->string('postharv_ownership_status',30)->nullable();
            // $table->double('post_harvest_cost',15,6);
            // $table->double('total_cost_for_machineries',15,6);
            // $table->foreignId('personal_informations_id')->nullable()->constrained('personal_informations');
            // $table->foreignId('farm_profiles_id')->nullable()->constrained('farm_profiles');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machineries_useds');
    }
};
