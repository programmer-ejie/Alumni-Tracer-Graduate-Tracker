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
     Schema::create('alumni_info', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('fullname')->nullable();
            $table->string('school_graduated')->nullable();
            $table->string('batch')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_info');
    }
};
