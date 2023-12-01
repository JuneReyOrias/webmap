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
        Schema::create('assign', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->unique();
            $table->foreignId('agent_id')->unique();
            $table->foreignId('uacc_id_id')->unique();
            $table->timestamps();
    
          
    
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent');
    }
};
