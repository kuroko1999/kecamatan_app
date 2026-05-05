<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Layanan;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\Galeri;
use App\Models\Setting;
use App\Models\StrukturOrganisasi;
use App\Models\Berita;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function index()
    {
        // Track visitor
        Visitor::track();
        
        $profil = Profil::first();
        $layanan = Layanan::where('aktif', true)->orderBy('urutan')->get();
        $kegiatan = Kegiatan::where('aktif', true)->latest()->take(3)->get();
        $pengumuman = Pengumuman::where('aktif', true)->latest()->take(3)->get();
        $galeri = Galeri::orderBy('urutan')->take(8)->get();
        $struktur = StrukturOrganisasi::where('aktif', true)->orderBy('urutan')->get();
        $berita = Berita::where('aktif', true)->latest()->take(3)->get();
        
        // Statistik dari database (bisa diedit di admin)
        $stat_penduduk = Setting::get('stat_penduduk', '200000');
        $stat_kecamatan = Setting::get('stat_kecamatan', '15');
        $stat_layanan = Setting::get('stat_layanan', '50');
        $stat_kepuasan = Setting::get('stat_kepuasan', '95');
        
        // Format angka untuk tampilan
        $penduduk_display = $stat_penduduk >= 1000 ? number_format($stat_penduduk / 1000, 0) . 'K+' : $stat_penduduk;
        $kecamatan_display = $stat_kecamatan;
        $layanan_display = $stat_layanan . '+';
        $kepuasan_display = $stat_kepuasan . '%';
        
        // ==================== AMBIL SEMUA WARNA DARI DATABASE ====================
        $primaryColor = Setting::get('primary_color', '#1a3a6b');
        $secondaryColor = Setting::get('secondary_color', '#d4a017');
        $bgColor = Setting::get('bg_color', '#0f172a');
        $textColor = Setting::get('text_color', '#ffffff');
        $cardBgColor = Setting::get('card_bg_color', '#1e293b');
        
        // Konversi hex ke RGB untuk opacity efek
        $primaryRgb = $this->hexToRgb($primaryColor);
        $primaryColorDark = $this->darkenColor($primaryColor, 20);
        $secondaryColorDark = $this->darkenColor($secondaryColor, 20);
        
        return view('landing.index', compact(
            'profil', 'layanan', 'kegiatan', 'pengumuman', 'galeri', 
            'struktur', 'berita', 'penduduk_display', 'kecamatan_display', 
            'layanan_display', 'kepuasan_display', 
            'primaryColor', 'secondaryColor', 'bgColor', 'textColor', 'cardBgColor',
            'primaryRgb', 'primaryColorDark', 'secondaryColorDark'
        ));
    }
    
    // Helper function untuk konversi hex ke RGB
    private function hexToRgb($hex)
    {
        $hex = str_replace('#', '', $hex);
        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        return "$r, $g, $b";
    }
    
    // Helper function untuk darken color
    private function darkenColor($hex, $percent)
    {
        $hex = str_replace('#', '', $hex);
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        
        $r = max(0, round($r - ($r * $percent / 100)));
        $g = max(0, round($g - ($g * $percent / 100)));
        $b = max(0, round($b - ($b * $percent / 100)));
        
        return sprintf("#%02x%02x%02x", $r, $g, $b);
    }
    
    // PPID dari API
    public function ppidIndex()
    {
        $apiUrl = Setting::get('ppid_api_url', 'https://api.example.com/ppid');
        
        try {
            $response = Http::timeout(5)->get($apiUrl);
            $data = $response->json();
        } catch (\Exception $e) {
            $data = ['error' => true, 'message' => 'API PPID sedang tidak tersedia'];
        }
        
        return view('landing.ppid', compact('data'));
    }
    
    public function ppidDetail($id)
    {
        $apiUrl = Setting::get('ppid_api_url', 'https://api.example.com/ppid');
        
        try {
            $response = Http::timeout(5)->get($apiUrl . '/' . $id);
            $data = $response->json();
        } catch (\Exception $e) {
            $data = ['error' => true, 'message' => 'Data tidak ditemukan'];
        }
        
        return view('landing.ppid-detail', compact('data'));
    }
    
    public function beritaDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $berita->increment('views');
        return view('landing.berita-detail', compact('berita'));
    }
    
    public function semuaBerita()
    {
        $berita = Berita::where('aktif', true)->latest()->paginate(10);
        return view('landing.semua-berita', compact('berita'));
    }
}