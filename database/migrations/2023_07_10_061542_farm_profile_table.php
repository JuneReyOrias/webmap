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
            $table->id('farm_no_id');
            $table->foreignId('rice_farmer_no')->unique();
            $table->string('tenurial_status',);
            $table->string('rice_farm_address');
            $table->string('no_of_yrs');
            $table->string('gps_longhitude');
            $table->string('gps_latitude');
            $table->string('total_physic_has');
            $table->string('rice_areacultivate_has');
            $table->string('land_title_no');
            $table->string('lot_no');
            $table->string('area_prone');
            $table->string('ecosystem');
            $table->string('type_rice_variety');
            $table->string('prefered_variety');
            $table->string('plantsched_wetseason');
            $table->string('plantsched_dryseason');
            $table->string('no_ofcroping_per_yr');
            $table->string('yield');
            $table->string('RSBSA_reg');
            $table->string('PCIC_insured');
            $table->string('gov_assisted');
            $table->string('sourc_cpital');
            $table->string('remarks');
            $table->string('oca_distr_office');
            $table->string('name_field_officers');
            $table->string('date_interview');
            $table->foreignId('sector_id');
            $table->string('farm_img');
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
