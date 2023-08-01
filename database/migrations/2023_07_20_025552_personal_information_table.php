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
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->id('farmer_no');
            $table->foreignId('agri_id')->unique();
            $table->string('first_name',30);
            $table->string('middle_name',30);
            $table->string('last_name',35);
            $table->string('extension_name',15);
            $table->string('home_address',55);
            $table->string('sex',30);
            $table->string('religion',30);
            $table->date('date_of_birth');
            $table->string('place_of_birth',30);
            $table->integer('contact_no',);
            $table->string('civil_status',30);
            $table->string('name_legal_spouse',30);
            $table->integer('no_of_children',);
            $table->string('mothers_maiden_name',30);
            $table->string('highest_formal_education',30);
            $table->string('person_with_disability',30);
            $table->double('pwd_id_no',8,2);
            $table->string('government_issued_id',30);
            $table->double('gov_id_no',8,2);
            $table->string('member_ofany_farmers_ass_org_coop',20);
            $table->string('nameof_farmers_ass_org_coop',30);
            $table->string('name_contact_person',20);
            $table->integer('cp_tel_no');
            $table->string('photos',20);
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_informations');
    }
};
