<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PpidController;

// ==================== LANDING PAGE ====================
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/berita/{slug}', [LandingController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/semua-berita', [LandingController::class, 'semuaBerita'])->name('semua-berita');

// PPID
Route::get('/ppid', [LandingController::class, 'ppidIndex'])->name('ppid.index');
Route::get('/ppid/permohonan', function() { return view('landing.ppid-permohonan'); })->name('ppid.permohonan');
Route::get('/ppid/keberatan', function() { return view('landing.ppid-keberatan'); })->name('ppid.keberatan');

// Kontak
Route::post('/kontak', function() { return back()->with('success', 'Pesan berhasil dikirim!'); })->name('kontak.kirim');

// ==================== ADMIN PANEL ====================
Route::prefix('admin')->group(function () {
    // Login (tanpa middleware)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');
    Route::get('/captcha', [AuthController::class, 'captcha'])->name('admin.captcha');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    // Middleware (hanya untuk halaman yang butuh login)
    Route::middleware(['admin.auth'])->group(function () {
        // Dashboard
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Profil
        Route::get('/profil', [AdminController::class, 'profilIndex'])->name('admin.profil');
        Route::post('/profil', [AdminController::class, 'profilUpdate'])->name('admin.profil.update');
        
        // Struktur Organisasi
        Route::get('/struktur', [StrukturController::class, 'index'])->name('admin.struktur');
        Route::post('/struktur', [StrukturController::class, 'store'])->name('admin.struktur.store');
        Route::put('/struktur/{id}', [StrukturController::class, 'update'])->name('admin.struktur.update');
        Route::delete('/struktur/{id}', [StrukturController::class, 'destroy'])->name('admin.struktur.destroy');
        
        // Layanan
        Route::get('/layanan', [AdminController::class, 'layananIndex'])->name('admin.layanan');
        Route::get('/layanan/create', [AdminController::class, 'layananCreate'])->name('admin.layanan.create');
        Route::post('/layanan', [AdminController::class, 'layananStore'])->name('admin.layanan.store');
        Route::get('/layanan/{id}/edit', [AdminController::class, 'layananEdit'])->name('admin.layanan.edit');
        Route::put('/layanan/{id}', [AdminController::class, 'layananUpdate'])->name('admin.layanan.update');
        Route::delete('/layanan/{id}', [AdminController::class, 'layananDestroy'])->name('admin.layanan.destroy');
        
        // Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');
        Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
        Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
        Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
        Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
        Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
        
        // Kegiatan
        Route::get('/kegiatan', [AdminController::class, 'kegiatanIndex'])->name('admin.kegiatan');
        Route::get('/kegiatan/create', [AdminController::class, 'kegiatanCreate'])->name('admin.kegiatan.create');
        Route::post('/kegiatan', [AdminController::class, 'kegiatanStore'])->name('admin.kegiatan.store');
        Route::get('/kegiatan/{id}/edit', [AdminController::class, 'kegiatanEdit'])->name('admin.kegiatan.edit');
        Route::put('/kegiatan/{id}', [AdminController::class, 'kegiatanUpdate'])->name('admin.kegiatan.update');
        Route::delete('/kegiatan/{id}', [AdminController::class, 'kegiatanDestroy'])->name('admin.kegiatan.destroy');
        
        // Pengumuman
        Route::get('/pengumuman', [AdminController::class, 'pengumumanIndex'])->name('admin.pengumuman');
        Route::get('/pengumuman/create', [AdminController::class, 'pengumumanCreate'])->name('admin.pengumuman.create');
        Route::post('/pengumuman', [AdminController::class, 'pengumumanStore'])->name('admin.pengumuman.store');
        Route::get('/pengumuman/{id}/edit', [AdminController::class, 'pengumumanEdit'])->name('admin.pengumuman.edit');
        Route::put('/pengumuman/{id}', [AdminController::class, 'pengumumanUpdate'])->name('admin.pengumuman.update');
        Route::delete('/pengumuman/{id}', [AdminController::class, 'pengumumanDestroy'])->name('admin.pengumuman.destroy');
        
        // Galeri
        Route::get('/galeri', [AdminController::class, 'galeriIndex'])->name('admin.galeri');
        Route::post('/galeri', [AdminController::class, 'galeriStore'])->name('admin.galeri.store');
        Route::delete('/galeri/{id}', [AdminController::class, 'galeriDestroy'])->name('admin.galeri.destroy');
        
        // PPID Setting
        Route::get('/ppid-setting', [AdminController::class, 'ppidSetting'])->name('admin.ppid.setting');
        Route::post('/ppid-setting', [AdminController::class, 'ppidSettingUpdate'])->name('admin.ppid.setting.update');
        
        // Pengaturan Website
        Route::get('/setting', [AdminController::class, 'settingIndex'])->name('admin.setting');
        Route::post('/setting', [AdminController::class, 'settingUpdate'])->name('admin.setting.update');
        
        // Statistik Update
        Route::post('/statistik', [AdminController::class, 'statistikUpdate'])->name('admin.statistik.update');
        
        // Hero Image
        Route::get('/hero', [AdminController::class, 'heroImage'])->name('admin.hero');
        Route::post('/hero', [AdminController::class, 'heroImageUpdate'])->name('admin.hero.update');
        
        // Warna
        Route::get('/warna', [AdminController::class, 'warnaIndex'])->name('admin.warna');
        Route::post('/warna', [AdminController::class, 'warnaUpdate'])->name('admin.warna.update');
        
        // Visitors
        Route::get('/visitors', [AdminController::class, 'visitors'])->name('admin.visitors');
        
        // ==================== MANAJEMEN ADMIN ====================
        Route::get('/admins', [AdminController::class, 'adminIndex'])->name('admin.admins');
        Route::get('/admins/create', [AdminController::class, 'adminCreate'])->name('admin.admins.create');
        Route::post('/admins', [AdminController::class, 'adminStore'])->name('admin.admins.store');
        Route::get('/admins/{id}/edit', [AdminController::class, 'adminEdit'])->name('admin.admins.edit');
        Route::put('/admins/{id}', [AdminController::class, 'adminUpdate'])->name('admin.admins.update');
        Route::delete('/admins/{id}', [AdminController::class, 'adminDestroy'])->name('admin.admins.destroy');
    });
});