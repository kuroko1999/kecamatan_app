<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['email', 'password', 'nama'];
    
    protected $hidden = ['password'];
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    
    public function verifyPassword($password)
    {
        return Hash::check($password, $this->password);
    }
    // ==================== SETTING WEBSITE ====================
public function settingIndex()
{
    $site_name = Setting::get('site_name', 'Kecamatan Buahbatu');
    $site_tagline = Setting::get('site_tagline', 'Kota Bandung');
    $hero_image = Setting::get('hero_image', null);
    
    return view('admin.pengaturan.setting', compact('site_name', 'site_tagline', 'hero_image'));
}

public function settingUpdate(Request $request)
{
    $request->validate([
        'site_name' => 'required|string|max:100',
        'site_tagline' => 'nullable|string|max:100',
        'hero_image' => 'nullable|image|max:2048',
    ]);
    
    // Update nama kecamatan
    Setting::set('site_name', $request->site_name);
    Setting::set('site_tagline', $request->site_tagline ?? '');
    
    // Update hero image
    if ($request->hasFile('hero_image')) {
        $oldImage = Setting::get('hero_image');
        if ($oldImage && Storage::disk('public')->exists($oldImage)) {
            Storage::disk('public')->delete($oldImage);
        }
        
        $path = $request->file('hero_image')->store('hero', 'public');
        Setting::set('hero_image', $path);
    }
    
    return redirect()->back()->with('success', 'Pengaturan website berhasil diperbarui');
}
}