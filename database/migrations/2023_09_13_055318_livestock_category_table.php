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
       
        Schema::create('fisheries_category', static function (Blueprint $table) {
            $table->id('fish_cat_id');
            $table->foreignId('categorize_id')->unique();
            $table->foreignId('agri_id')->unique();
            $table->string('fish_name',50);
            $table->string('fish_type',50);
            $table->string('fish_descript',100);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('fish_category');
    }
};
