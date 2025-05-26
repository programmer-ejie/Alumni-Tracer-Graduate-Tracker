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
         Schema::create('alumni_surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumni_id');
            for ($i = 1; $i <= 40; $i++) {
                $table->text('q' . $i)->nullable();
            }
            $table->timestamps();

            $table->foreign('alumni_id')->references('id')->on('alumni_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('alumni_surveys');
    }
};
