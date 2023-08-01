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
        Schema::create('farm_profile', function (Blueprint $table) {
            $table->id('farmno_id');
            $table->foreignId('farmer_no')->unique();
            $table->string('tenurial_status',30);
            $table->string('rice_farm_address',30);
            $table->double('no_of_years_asfarmers',10,8);
            $table->double('gps_longhitude',10,8);
            $table->double('gps_latitude',10,8);
            $table->double('total_physical_area_has',8,4);
            $table->double('rice_area_cultivated_has',8,4);
            $table->double('land_title_no',8,4);
            $table->double('lot_no',10,6);
            $table->string('area_prone_to',30);
            $table->string('ecosystem',30);
            $table->string('type_rice_variety',30);
            $table->string('prefered_variety',30);
            $table->string('plant_schedule_wetseason',30);
            $table->string('plant_schedule_dryseason',30);
            $table->double('no_ofcroping_yr',8,2);
            $table->double('yield_kg_ha',10,6);
            $table->string('RSBSA_registered',15);
            $table->string('PCIC_insured',20);
            $table->string('source_of_capital',30);
            $table->string('remarks_recommendation',30);
            $table->string('oca_district_office',30);
            $table->string('name_field_officers_technicians',30);
            $table->date('date_interview');
            $table->string('farm_photo',30);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_profile');
    }
};
