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
        Schema::create('categorize', static function (Blueprint $table) {
            $table->id('categorize_id');
            $table->foreignId('agri_id')->unique();
            $table->string('cat_name',30);
          
            $table->string('cat_descript',100);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('livestock_category');
    }
};
