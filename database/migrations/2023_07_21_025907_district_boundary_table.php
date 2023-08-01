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
        Schema::create('district_boundary', static function (Blueprint $table) {
            $table->id('polygon_id');
            $table->foreignId('agri_id')->unique();
            $table->point('location')->nullable();
            $table->polygon('area')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('district_boundary');
    }
};
