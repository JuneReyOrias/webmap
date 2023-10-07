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
    { Schema::create('agric_districts', function (Blueprint $table) {
        $table->id('agri_id');
        $table->foreignId('assign_id')->unique();
        $table->string('district',50);
        $table->string('description',100);
        $table->timestamps();
        

    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('agric_districts');
}
};
