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
      
        Schema::create('agric_districts', function (Blueprint $table) {
            $table->id('agri_id');
            $table->foreignId('admin_id')->unique();
            $table->foreignId('agent_id')->unique();
            $table->foreignId('uacc_id')->unique();
            $table->string('district_name',30);
            $table->string('description',30);
           
            
    
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agri_districts');
    }
};
