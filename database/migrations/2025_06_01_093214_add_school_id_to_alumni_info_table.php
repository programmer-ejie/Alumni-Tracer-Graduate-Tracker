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
       Schema::table('alumni_info', function (Blueprint $table) {
        $table->unsignedBigInteger('school_id')->nullable()->after('id');
        // If you want to enforce foreign key:
        // $table->foreign('school_id')->references('id')->on('schools')->onDelete('set null');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::table('alumni_info', function (Blueprint $table) {
            $table->dropColumn('school_id');
        });
    }
};
