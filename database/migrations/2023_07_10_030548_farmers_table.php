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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id('rice_farmer_no');
            $table->string('first_name');
            $table->text('middle_name',);
            $table->string('last_name');
            $table->string('extension_name');
            $table->string('home_address');
            $table->string('sex');
            $table->string('religion');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('contact_no');
            $table->string('civil_status');
            $table->string('name_legal_spouse');
            $table->string('no_of_children');
            $table->string('mother_maiden_name');
            $table->string('highest_formal_educ');
            $table->string('pwd');
            $table->string('pwd_id_no');
            $table->string('gov_issued_id');
            $table->string('gov_id_no');
            $table->string('memberofany_farmers_ass_org_coop');
            $table->string('nameof_farmers_ass_org_coop');
            $table->string('name_contact_person');
            $table->string('cp_tel_no');
            $table->string('photos');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
