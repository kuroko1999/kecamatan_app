<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['key', 'value'];
    
    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }
    
    public static function set($key, $value)
    {
        self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
  
public static function getHeroImage()
{
    $image = self::get('hero_image');
    if ($image && file_exists(public_path('storage/' . $image))) {
        return asset('storage/' . $image);
    }
    return null;
}
}