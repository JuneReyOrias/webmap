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
        $table->foreignId('id')->unique();
        $table->foreignId('agri_districts')->unique();

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
