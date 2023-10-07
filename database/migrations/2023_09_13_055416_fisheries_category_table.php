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
       
        Schema::create('livestock_category', static function (Blueprint $table) {
            $table->id('livstock_cat_id');
            $table->foreignId('categorize_id')->unique();
            $table->foreignId('agri_id')->unique();
            $table->string('livstock_name',50);
            $table->string('livstock_type',50);
            $table->string('livstock_descript',100);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('livestock_category');
    }
};
