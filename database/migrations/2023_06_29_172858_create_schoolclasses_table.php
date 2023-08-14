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
        Schema::create('schoolclasses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->timestamps();
            $table->string('name');
            $table->integer('base');
            $table->string('Major');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schoolclasses');
    }
};
