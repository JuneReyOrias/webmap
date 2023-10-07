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
        Schema::create('farm_profiles', function (Blueprint $table) {
            $table->id('farmno_id');
            $table->foreignId('farmer_no')->nullable();
            $table->string('tenurial_status',50);
            $table->string('rice_farm_address',50);
            $table->double('no_of_years_as_farmers',8,2);
            $table->double('gps_longitude',15,8);
            $table->double('gps_latitude',15,8);
            $table->double('total_physical_area_has',15,4);
            $table->double('rice_area_cultivated_has',15,4);
            $table->string('land_title_no',50);
            $table->string('lot_no',50);
            $table->string('area_prone_to',50);
            $table->string('ecosystem',50);
            $table->string('type_rice_variety',50);
            $table->string('prefered_variety',50);
            $table->string('plant_schedule_wetseason',50);
            $table->string('plant_schedule_dryseason',50);
            $table->string('no_of_cropping_yr',50);
            $table->double('yield_kg_ha',15,4);
            $table->string('rsba_register',50);
            $table->string('pcic_insured',50);
            $table->string('source_of_capital',50);
            $table->string('remarks_recommendation',100);
            $table->string('oca_district_office',50);
            $table->string('name_technicians',50);
            $table->string('date_interview',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_profiles');
    }
};
