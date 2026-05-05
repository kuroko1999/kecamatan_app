<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

return new class extends Migration
{
    public function up()
    {
        // Tambahkan setting warna background jika belum ada
        $colors = [
            ['key' => 'bg_color', 'value' => '#0f172a'],
            ['key' => 'text_color', 'value' => '#ffffff'],
            ['key' => 'card_bg_color', 'value' => '#1e293b'],
        ];
        
        foreach ($colors as $color) {
            if (!Setting::where('key', $color['key'])->exists()) {
                Setting::create($color);
            }
        }
    }

    public function down()
    {
        Setting::where('key', 'bg_color')->delete();
        Setting::where('key', 'text_color')->delete();
        Setting::where('key', 'card_bg_color')->delete();
    }
};