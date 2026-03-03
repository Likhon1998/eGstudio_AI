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
        Schema::table('cgi_generations', function (Blueprint $table) {
            // Adding the new columns after the existing URL columns to keep the database organized
            $table->string('branded_image_url')->nullable()->after('image_url');
            $table->string('branded_video_url')->nullable()->after('video_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cgi_generations', function (Blueprint $table) {
            // This allows you to safely rollback this specific change if needed
            $table->dropColumn(['branded_image_url', 'branded_video_url']);
        });
    }
};