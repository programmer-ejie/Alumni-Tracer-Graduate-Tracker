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
          Schema::table('page_views', function (Blueprint $table) {
            $table->unsignedBigInteger('alumni_id')->nullable()->after('ip_address');
            // If you want a foreign key:
            // $table->foreign('alumni_id')->references('id')->on('alumni_infos')->onDelete('set null');
        });
    }
    /**}
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page_views', function (Blueprint $table) {
        $table->dropColumn('alumni_id');
    });
    }
};
