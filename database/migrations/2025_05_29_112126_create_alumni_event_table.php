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
       Schema::create('alumni_event', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('alumni_id');
        $table->unsignedBigInteger('event_id');
        $table->timestamp('attended_at')->nullable();
        $table->timestamps();

        $table->unique(['alumni_id', 'event_id']);
        $table->foreign('alumni_id')->references('id')->on('alumni_info')->onDelete('cascade');
        $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_event');
    }
};
