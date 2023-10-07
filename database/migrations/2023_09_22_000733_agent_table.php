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
        
            Schema::create('agent', function (Blueprint $table) {
                $table->id('agent_id');
                $table->string('first_name',50);
                $table->string('last_name',50);
                $table->double('id_number',8,6);
                $table->string('districts',50);
                $table->string('role',30);
                $table->string('password');
                $table->foreignId('user_id')->unique();
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
