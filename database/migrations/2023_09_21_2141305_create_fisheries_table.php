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
        Schema::create('fisheries', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('categorizes_id')->nullable();
            $table->foreignId('fisheries_categorys_id')->nullable();
            $table->string('species_name',50);
            $table->string('common_name',50)->nullable();
            $table->string('habitat',50)->nullable();
            $table->string('fish_description',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fisheries');
    }
};
