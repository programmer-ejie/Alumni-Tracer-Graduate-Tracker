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
            $table->string('github')->nullable()->after('profile_pic');
            $table->string('twitter')->nullable()->after('github');
            $table->string('instagram')->nullable()->after('twitter');
            $table->string('facebook')->nullable()->after('instagram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('alumni_info', function (Blueprint $table) {
            $table->dropColumn(['github', 'twitter', 'instagram', 'facebook']);
        });
    }
};
