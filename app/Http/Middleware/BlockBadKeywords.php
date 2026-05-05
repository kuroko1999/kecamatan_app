<?php

namespace App\Http\Middleware;

use Closure;

class BlockBadKeywords
{
    protected $badKeywords = [
        'judi', 'slot', 'poker', 'casino', 'togel', 'bola', 'taruhan',
        'betting', 'gacor', 'maxwin', 'scatter', 'jp', 'jackpot',
        'roulette', 'blackjack', 'baccarat', 'sicbo', 'dadu',
        'judi online', 'situs judi', 'agen judi', 'bandar judi',
        'slot online', 'slot gacor', 'pragmatic', 'pgsoft', 'habanero',
        'sbobet', 'maxbet', 'ibcbet', 'cmd368', 'uai88', 'm8bet'
    ];
    
    public function handle($request, Closure $next)
    {
        // Cek input GET & POST
        $input = $request->all();
        
        foreach ($input as $key => $value) {
            if (is_string($value)) {
                $valueLower = strtolower($value);
                foreach ($this->badKeywords as $keyword) {
                    if (strpos($valueLower, $keyword) !== false) {
                        // Log percobaan
                        \Log::warning('Bad keyword blocked', [
                            'ip' => $request->ip(),
                            'keyword' => $keyword,
                            'url' => $request->fullUrl()
                        ]);
                        
                        if ($request->expectsJson()) {
                            return response()->json([
                                'error' => 'Konten mengandung kata terlarang',
                                'code' => 'FORBIDDEN_CONTENT'
                            ], 403);
                        }
                        
                        return back()->with('error', 'Konten tidak diperbolehkan')->withInput();
                    }
                }
            }
        }
        
        return $next($request);
    }
}