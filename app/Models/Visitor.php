<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Visitor extends Model
{
    protected $table = 'visitors';
    protected $fillable = ['ip_address', 'user_agent', 'device', 'browser', 'os', 'page_url', 'referrer'];
    
    public static function track()
    {
        $userAgent = Request::userAgent();
        $device = self::getDevice($userAgent);
        $browser = self::getBrowser($userAgent);
        $os = self::getOS($userAgent);
        
        self::create([
            'ip_address' => Request::ip(),
            'user_agent' => $userAgent,
            'device' => $device,
            'browser' => $browser,
            'os' => $os,
            'page_url' => Request::url(),
            'referrer' => Request::header('referer'),
        ]);
    }
    
    public static function getDevice($userAgent)
    {
        if (preg_match('/(phone|mobile|android|iphone|ipad|ipod)/i', $userAgent)) {
            return 'Mobile';
        }
        if (preg_match('/(tablet|ipad)/i', $userAgent)) {
            return 'Tablet';
        }
        return 'Desktop';
    }
    
    public static function getBrowser($userAgent)
    {
        if (preg_match('/(Chrome|CriOS)/i', $userAgent)) return 'Chrome';
        if (preg_match('/(Firefox|FxiOS)/i', $userAgent)) return 'Firefox';
        if (preg_match('/(Safari)/i', $userAgent)) return 'Safari';
        if (preg_match('/(Edge|Edg)/i', $userAgent)) return 'Edge';
        if (preg_match('/(Opera|OPR)/i', $userAgent)) return 'Opera';
        if (preg_match('/(MSIE|Trident)/i', $userAgent)) return 'Internet Explorer';
        return 'Unknown';
    }
    
    public static function getOS($userAgent)
    {
        if (preg_match('/Windows/i', $userAgent)) return 'Windows';
        if (preg_match('/Mac/i', $userAgent)) return 'macOS';
        if (preg_match('/Linux/i', $userAgent)) return 'Linux';
        if (preg_match('/Android/i', $userAgent)) return 'Android';
        if (preg_match('/iOS|iPhone|iPad/i', $userAgent)) return 'iOS';
        return 'Unknown';
    }
    
    public static function getTotalVisitors()
    {
        return self::count();
    }
    
    public static function getTodayVisitors()
    {
        return self::whereDate('created_at', today())->count();
    }
    
    public static function getUniqueVisitors()
    {
        return self::distinct('ip_address')->count('ip_address');
    }
}