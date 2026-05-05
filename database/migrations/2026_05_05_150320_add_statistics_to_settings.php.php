<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Tambahkan data statistik ke tabel settings
        $settings = [
            ['key' => 'stat_penduduk', 'value' => '200000'],
            ['key' => 'stat_kecamatan', 'value' => '15'],
            ['key' => 'stat_layanan', 'value' => '50'],
            ['key' => 'stat_kepuasan', 'value' => '95'],
        ];
        
        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }

    public function down()
    {
        \App\Models\Setting::whereIn('key', ['stat_penduduk', 'stat_kecamatan', 'stat_layanan', 'stat_kepuasan'])->delete();
    }
};