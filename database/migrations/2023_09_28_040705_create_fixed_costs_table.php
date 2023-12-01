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
        Schema::create('fixed_costs', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('personal_informations_id')->nullable();
            $table->foreignId('farm_profiles_id')->nullable();
            $table->string('particular',30)->nullable();
            $table->double('no_of_ha',15,4);
            $table->double('cost_per_ha',15,4);
            $table->double('total_amount',15,4);
            $table->timestamps();
        
            // $table->Id();
         
            // $table->string('particular',30)->nullable();
            // $table->double('no_of_ha',15,4);
            // $table->double('cost_per_ha',15,4);
            // $table->double('total_amount',15,4);
            // $table->foreignId('personal_informations_id')->nullable()->constrained('personal_informations');
            // $table->foreignId('farm_profiles_id')->nullable()->constrained('farm_profiles');
            // $table->timestamps();   $table->Id();
         
            // $table->string('particular',30)->nullable();
            // $table->double('no_of_ha',15,4);
            // $table->double('cost_per_ha',15,4);
            // $table->double('total_amount',15,4);
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
        Schema::dropIfExists('fixed_costs');
    }
};
