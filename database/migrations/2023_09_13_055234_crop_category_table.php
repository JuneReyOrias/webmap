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
        Schema::create('crop_category', static function (Blueprint $table) {
        $table->id('crop_cat_id');
        $table->foreignId('categorize_id')->unique();
        $table->foreignId('agri_id')->unique();
        $table->string('crop_name',50);
        $table->string('crop_descript',100);
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('crop_category');
}
};
