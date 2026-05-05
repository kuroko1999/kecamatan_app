<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Cek apakah kolom hero_image sudah ada
        if (!Schema::hasColumn('settings', 'hero_image')) {
            Schema::table('settings', function (Blueprint $table) {
                $table->string('hero_image')->nullable()->after('value');
            });
        }
        
        // Cek apakah kolom site_name sudah ada
        if (!Schema::hasColumn('settings', 'site_name')) {
            Schema::table('settings', function (Blueprint $table) {
                $table->string('site_name')->default('Kecamatan Buahbatu')->after('key');
            });
        }
        
        // Cek apakah kolom site_tagline sudah ada
        if (!Schema::hasColumn('settings', 'site_tagline')) {
            Schema::table('settings', function (Blueprint $table) {
                $table->string('site_tagline')->default('Kota Bandung')->after('site_name');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('settings', 'hero_image')) {
            Schema::table('settings', function (Blueprint $table) {
                $table->dropColumn('hero_image');
            });
        }
        
        if (Schema::hasColumn('settings', 'site_name')) {
            Schema::table('settings', function (Blueprint $table) {
                $table->dropColumn('site_name');
            });
        }
        
        if (Schema::hasColumn('settings', 'site_tagline')) {
            Schema::table('settings', function (Blueprint $table) {
                $table->dropColumn('site_tagline');
            });
        }
    }
};