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
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // ==================== DASHBOARD ====================
    public function dashboard()
    {
        $totalLayanan = Layanan::count();
        $totalKegiatan = Kegiatan::count();
        $totalPengumuman = Pengumuman::count();
        $totalGaleri = Galeri::count();
        $totalBerita = Berita::count();
        $totalStruktur = StrukturOrganisasi::count();
        
        // Visitor Stats
        $totalVisitors = Visitor::count();
        $todayVisitors = Visitor::getTodayVisitors();
        $uniqueVisitors = Visitor::getUniqueVisitors();
        
        $deviceStats = [
            'Desktop' => Visitor::where('device', 'Desktop')->count(),
            'Mobile' => Visitor::where('device', 'Mobile')->count(),
            'Tablet' => Visitor::where('device', 'Tablet')->count(),
        ];
        
        $browserStats = [
            'Chrome' => Visitor::where('browser', 'Chrome')->count(),
            'Firefox' => Visitor::where('browser', 'Firefox')->count(),
            'Safari' => Visitor::where('browser', 'Safari')->count(),
            'Edge' => Visitor::where('browser', 'Edge')->count(),
            'Opera' => Visitor::where('browser', 'Opera')->count(),
            'Lainnya' => Visitor::whereNotIn('browser', ['Chrome', 'Firefox', 'Safari', 'Edge', 'Opera'])->count(),
        ];
        
        $recentVisitors = Visitor::latest()->take(10)->get();
        
        return view('admin.dashboard', compact(
            'totalLayanan', 'totalKegiatan', 'totalPengumuman', 
            'totalGaleri', 'totalBerita', 'totalStruktur',
            'totalVisitors', 'todayVisitors', 'uniqueVisitors',
            'deviceStats', 'browserStats', 'recentVisitors'
        ));
    }
    
    // ==================== PROFIL ====================
    public function profilIndex()
    {
        $profil = Profil::first();
        return view('admin.profil.index', compact('profil'));
    }
    
    public function profilUpdate(Request $request)
    {
        $data = $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'nama_camat' => 'required',
            'nip_camat' => 'required',
            'sambutan' => 'required',
        ]);
        
        $profil = Profil::first();
        if ($profil) {
            $profil->update($data);
        } else {
            Profil::create($data);
        }
        
        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
    
    // ==================== LAYANAN ====================
    public function layananIndex()
    {
        $layanan = Layanan::orderBy('urutan')->get();
        return view('admin.layanan.index', compact('layanan'));
    }
    
    public function layananCreate()
    {
        return view('admin.layanan.create');
    }
    
    public function layananStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'icon' => 'required',
            'deskripsi' => 'required',
            'link' => 'nullable',
            'urutan' => 'integer',
            'aktif' => 'boolean',
        ]);
        
        Layanan::create($data);
        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil ditambahkan');
    }
    
    public function layananEdit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('admin.layanan.edit', compact('layanan'));
    }
    
    public function layananUpdate(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);
        $data = $request->validate([
            'nama' => 'required',
            'icon' => 'required',
            'deskripsi' => 'required',
            'link' => 'nullable',
            'urutan' => 'integer',
            'aktif' => 'boolean',
        ]);
        
        $layanan->update($data);
        return redirect()->route('admin.layanan')->with('success', 'Layanan berhasil diperbarui');
    }
    
    public function layananDestroy($id)
    {
        Layanan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Layanan berhasil dihapus');
    }
    
    // ==================== KEGIATAN ====================
    public function kegiatanIndex()
    {
        $kegiatan = Kegiatan::latest()->get();
        return view('admin.kegiatan.index', compact('kegiatan'));
    }
    
    public function kegiatanCreate()
    {
        return view('admin.kegiatan.create');
    }
    
    public function kegiatanStore(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
            'aktif' => 'boolean',
        ]);
        
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('kegiatan', 'public');
        }
        
        Kegiatan::create($data);
        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil ditambahkan');
    }
    
    public function kegiatanEdit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }
    
    public function kegiatanUpdate(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|max:2048',
            'aktif' => 'boolean',
        ]);
        
        if ($request->hasFile('gambar')) {
            if ($kegiatan->gambar) {
                Storage::disk('public')->delete($kegiatan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('kegiatan', 'public');
        }
        
        $kegiatan->update($data);
        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil diperbarui');
    }
    
    public function kegiatanDestroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        if ($kegiatan->gambar) {
            Storage::disk('public')->delete($kegiatan->gambar);
        }
        $kegiatan->delete();
        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus');
    }
    
    // ==================== PENGUMUMAN ====================
    public function pengumumanIndex()
    {
        $pengumuman = Pengumuman::latest()->get();
        return view('admin.pengumuman.index', compact('pengumuman'));
    }
    
    public function pengumumanCreate()
    {
        return view('admin.pengumuman.create');
    }
    
    public function pengumumanStore(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'penting' => 'boolean',
            'aktif' => 'boolean',
        ]);
        
        Pengumuman::create($data);
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil ditambahkan');
    }
    
    public function pengumumanEdit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }
    
    public function pengumumanUpdate(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required|date',
            'penting' => 'boolean',
            'aktif' => 'boolean',
        ]);
        
        $pengumuman->update($data);
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil diperbarui');
    }
    
    public function pengumumanDestroy($id)
    {
        Pengumuman::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Pengumuman berhasil dihapus');
    }
    
    // ==================== GALERI ====================
    public function galeriIndex()
    {
        $galeri = Galeri::orderBy('urutan')->get();
        return view('admin.galeri.index', compact('galeri'));
    }
    
    public function galeriStore(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'nullable',
            'urutan' => 'integer',
        ]);
        
        $data['gambar'] = $request->file('gambar')->store('galeri', 'public');
        Galeri::create($data);
        
        return redirect()->back()->with('success', 'Gambar berhasil ditambahkan');
    }
    
    public function galeriDestroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        Storage::disk('public')->delete($galeri->gambar);
        $galeri->delete();
        return redirect()->back()->with('success', 'Gambar berhasil dihapus');
    }
    
    // ==================== PPID SETTING ====================
    public function ppidSetting()
    {
        $ppid_api_url = Setting::get('ppid_api_url', '');
        $ppid_email = Setting::get('ppid_email', 'ppid@buahbatu.go.id');
        $ppid_phone = Setting::get('ppid_phone', '(022) 1234567');
        
        return view('admin.ppid.setting', compact('ppid_api_url', 'ppid_email', 'ppid_phone'));
    }
    
    public function ppidSettingUpdate(Request $request)
    {
        Setting::set('ppid_api_url', $request->ppid_api_url);
        Setting::set('ppid_email', $request->ppid_email);
        Setting::set('ppid_phone', $request->ppid_phone);
        
        return redirect()->back()->with('success', 'Pengaturan PPID berhasil diperbarui');
    }
    
    // ==================== PENGATURAN WEBSITE ====================
    public function settingIndex()
    {
        $site_name = Setting::get('site_name', 'Kabupaten Mukomuko');
        $site_tagline = Setting::get('site_tagline', 'Provinsi Bengkulu');
        $hero_image = Setting::get('hero_image', null);
        
        // Statistik
        $stat_penduduk = Setting::get('stat_penduduk', '200000');
        $stat_kecamatan = Setting::get('stat_kecamatan', '15');
        $stat_layanan = Setting::get('stat_layanan', '50');
        $stat_kepuasan = Setting::get('stat_kepuasan', '95');
        
        return view('admin.pengaturan.setting', compact(
            'site_name', 'site_tagline', 'hero_image',
            'stat_penduduk', 'stat_kecamatan', 'stat_layanan', 'stat_kepuasan'
        ));
    }
    
    public function settingUpdate(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:100',
            'site_tagline' => 'nullable|string|max:100',
            'hero_image' => 'nullable|image|max:2048',
        ]);
        
        Setting::set('site_name', $request->site_name);
        Setting::set('site_tagline', $request->site_tagline ?? '');
        
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
    
    // ==================== STATISTIK UPDATE ====================
    public function statistikUpdate(Request $request)
    {
        $request->validate([
            'stat_penduduk' => 'required|integer',
            'stat_kecamatan' => 'required|integer',
            'stat_layanan' => 'required|integer',
            'stat_kepuasan' => 'required|integer|min:0|max:100',
        ]);
        
        Setting::set('stat_penduduk', $request->stat_penduduk);
        Setting::set('stat_kecamatan', $request->stat_kecamatan);
        Setting::set('stat_layanan', $request->stat_layanan);
        Setting::set('stat_kepuasan', $request->stat_kepuasan);
        
        return redirect()->back()->with('success', 'Statistik berhasil diperbarui');
    }
    
    // ==================== HERo ====================
    public function heroImage()
    {
        $hero_image = Setting::get('hero_image', null);
        return view('admin.pengaturan.hero', compact('hero_image'));
    }
    
    public function heroImageUpdate(Request $request)
    {
        $request->validate([
            'hero_image' => 'required|image|max:2048'
        ]);
        
        $oldImage = Setting::get('hero_image');
        if ($oldImage && Storage::disk('public')->exists($oldImage)) {
            Storage::disk('public')->delete($oldImage);
        }
        
        $path = $request->file('hero_image')->store('hero', 'public');
        Setting::set('hero_image', $path);
        
        return redirect()->back()->with('success', 'Hero image berhasil diperbarui');
    }
    
// ==================== WARNA WEBSITE ====================
public function warnaIndex()
{
    $primaryColor = Setting::get('primary_color', '#1a3a6b');
    $secondaryColor = Setting::get('secondary_color', '#d4a017');
    $bgColor = Setting::get('bg_color', '#0f172a');
    $textColor = Setting::get('text_color', '#ffffff');
    $cardBgColor = Setting::get('card_bg_color', '#1e293b');
    
    return view('admin.pengaturan.warna', compact(
        'primaryColor', 'secondaryColor', 'bgColor', 'textColor', 'cardBgColor'
    ));
}

public function warnaUpdate(Request $request)
{
    try {
        // Validasi input
        $validated = $request->validate([
            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'bg_color' => 'required|string',
            'text_color' => 'required|string',
            'card_bg_color' => 'required|string',
        ]);
        
        // Simpan ke database
        Setting::set('primary_color', $request->primary_color);
        Setting::set('secondary_color', $request->secondary_color);
        Setting::set('bg_color', $request->bg_color);
        Setting::set('text_color', $request->text_color);
        Setting::set('card_bg_color', $request->card_bg_color);
        
        return redirect()->back()->with('success', 'Warna website berhasil diperbarui!');
        
    } catch (\Exception $e) {
        \Log::error('Error saving color settings: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}
    // ==================== VISITORS ====================
    public function visitors()
    {
        $visitors = Visitor::latest()->paginate(20);
        $totalVisitors = Visitor::getTotalVisitors();
        $todayVisitors = Visitor::getTodayVisitors();
        $uniqueVisitors = Visitor::getUniqueVisitors();
        
        $deviceStats = [
            'Desktop' => Visitor::where('device', 'Desktop')->count(),
            'Mobile' => Visitor::where('device', 'Mobile')->count(),
            'Tablet' => Visitor::where('device', 'Tablet')->count(),
        ];
        
        $browserStats = [
            'Chrome' => Visitor::where('browser', 'Chrome')->count(),
            'Firefox' => Visitor::where('browser', 'Firefox')->count(),
            'Safari' => Visitor::where('browser', 'Safari')->count(),
            'Edge' => Visitor::where('browser', 'Edge')->count(),
            'Opera' => Visitor::where('browser', 'Opera')->count(),
            'Other' => Visitor::whereNotIn('browser', ['Chrome', 'Firefox', 'Safari', 'Edge', 'Opera'])->count(),
        ];
        
        return view('admin.visitors.index', compact('visitors', 'totalVisitors', 'todayVisitors', 'uniqueVisitors', 'deviceStats', 'browserStats'));
    }
}