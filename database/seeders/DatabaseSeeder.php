<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Profil;
use App\Models\Layanan;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\Galeri;
use App\Models\Admin;
use App\Models\StrukturOrganisasi;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('Starting seeder...');
        
        // Kosongkan tabel (gunakan DB::table untuk SQLite)
        try {
            DB::table('settings')->truncate();
            DB::table('profil')->truncate();
            DB::table('layanan')->truncate();
            DB::table('kegiatan')->truncate();
            DB::table('pengumuman')->truncate();
            DB::table('galeri')->truncate();
            DB::table('admins')->truncate();
            DB::table('struktur_organisasi')->truncate();
        } catch (\Exception $e) {
            // Jika truncate error (foreign key constraint), pakai delete
            DB::table('settings')->delete();
            DB::table('profil')->delete();
            DB::table('layanan')->delete();
            DB::table('kegiatan')->delete();
            DB::table('pengumuman')->delete();
            DB::table('galeri')->delete();
            DB::table('admins')->delete();
            DB::table('struktur_organisasi')->delete();
        }
        
        $this->command->info('Tables cleared...');
        
        // ==================== SETTING WEBSITE ====================
        Setting::create(['key' => 'primary_color', 'value' => '#1a3a6b']);
        Setting::create(['key' => 'secondary_color', 'value' => '#d4a017']);
        Setting::create(['key' => 'hero_image', 'value' => null]);
        Setting::create(['key' => 'site_name', 'value' => 'Kabupaten Mukomuko']);
        Setting::create(['key' => 'site_tagline', 'value' => 'Provinsi Bengkulu']);
        
        // Setting PPID
        Setting::create(['key' => 'ppid_api_url', 'value' => '']);
        Setting::create(['key' => 'ppid_email', 'value' => 'ppid@mukomukokab.go.id']);
        Setting::create(['key' => 'ppid_phone', 'value' => '(0736) 1234567']);
        
        $this->command->info('Settings created...');
        
        // ==================== ADMIN ====================
        if (!Admin::where('email', 'admin@mukomukokab.go.id')->exists()) {
            Admin::create([
                'email' => 'admin@mukomukokab.go.id',
                'password' => 'password',
                'nama' => 'Administrator',
            ]);
            $this->command->info('Admin created: admin@mukomukokab.go.id / password');
        } else {
            $this->command->info('Admin already exists');
        }
        
        // ==================== PROFIL ====================
        Profil::create([
            'sejarah' => 'Kabupaten Mukomuko adalah salah satu Kecamatan di Kabupaten Mukomuko. kecamatan ini memiliki luas wilayah ± 4.036 km² dengan jumlah penduduk sekitar 200.000 jiwa. Kabupaten Mukomuko dikenal sebagai daerah penghasil kelapa sawit, karet, dan hasil laut.',
            'visi' => '"Terwujudnya kecamatan Mukomuko yang Maju, Mandiri, Religius, dan Berdaya Saing"',
            'misi' => '- Meningkatkan kualitas pelayanan publik
- Mengembangkan potensi SDA dan SDM masyarakat
- Mewujudkan tata kelola pemerintahan yang baik
- Membangun infrastruktur yang merata',
            'nama_camat' => 'Camat',
            'nip_camat' => '19750101 200212 1 001',
            'sambutan' => 'Segala Puji Syukur kita panjatkan kehadirat Allah SWT, yang dengan rahmat-Nya telah mengantarkan Kecamatan Mukomuko menjadi semakin maju. Kami berharap masyarakat dapat memahami berbagai kebijakan dan program yang telah disusun untuk pelayanan publik yang lebih baik. Melalui website resmi ini, kami ingin memberikan kemudahan akses informasi dan layanan kepada seluruh masyarakat Kabupaten Mukomuko.'
        ]);
        
        $this->command->info('Profil created...');
        
        // ==================== LAYANAN ====================
        $layanan = [
            ['nama' => 'Administrasi Kependudukan', 'icon' => 'fas fa-id-card', 'deskripsi' => 'Pengurusan KTP, KK, Akta Kelahiran, dan dokumen kependudukan lainnya.', 'urutan' => 1, 'aktif' => true],
            ['nama' => 'Bantuan Sosial', 'icon' => 'fas fa-hand-holding-heart', 'deskripsi' => 'Informasi dan penyaluran bantuan untuk warga kurang mampu.', 'urutan' => 2, 'aktif' => true],
            ['nama' => 'Pemberdayaan Masyarakat', 'icon' => 'fas fa-chalkboard-user', 'deskripsi' => 'Program pelatihan UMKM dan peningkatan kapasitas ekonomi.', 'urutan' => 3, 'aktif' => true],
            ['nama' => 'Perizinan', 'icon' => 'fas fa-file-signature', 'deskripsi' => 'Pengurusan izin usaha, IMB, dan rekomendasi perizinan.', 'urutan' => 4, 'aktif' => true],
            ['nama' => 'Pelayanan Hukum', 'icon' => 'fas fa-balance-scale', 'deskripsi' => 'Konsultasi hukum dan bantuan hukum untuk masyarakat.', 'urutan' => 5, 'aktif' => true],
            ['nama' => 'Data & Informasi', 'icon' => 'fas fa-chart-line', 'deskripsi' => 'Akses data statistik dan informasi pembangunan daerah.', 'urutan' => 6, 'aktif' => true],
        ];
        
        foreach ($layanan as $item) {
            Layanan::create($item);
        }
        
        $this->command->info('Layanan created (' . count($layanan) . ' records)...');
        
        // ==================== KEGIATAN ====================
        $kegiatan = [
            ['judul' => 'Sosialisasi Program Bantuan Sosial', 'deskripsi' => 'Acara sosialisasi program bantuan sosial yang dihadiri oleh para camat dan kader PKK se-Kabupaten Mukomuko.', 'tanggal' => '2026-05-15', 'aktif' => true],
            ['judul' => 'Pelatihan Digital Marketing UMKM', 'deskripsi' => 'Pelatihan bagi pelaku UMKM dalam memasarkan produk secara digital. Bekerja sama dengan Disperindag Provinsi Bengkulu.', 'tanggal' => '2026-05-10', 'aktif' => true],
            ['judul' => 'Bakti Sosial Kesehatan Gratis', 'deskripsi' => 'Layanan kesehatan gratis berupa cek darah, konsultasi dokter, dan pembagian obat-obatan untuk masyarakat Kabupaten Mukomuko.', 'tanggal' => '2026-05-05', 'aktif' => true],
        ];
        
        foreach ($kegiatan as $item) {
            Kegiatan::create($item);
        }
        
        $this->command->info('Kegiatan created (' . count($kegiatan) . ' records)...');
        
        // ==================== PENGUMUMAN ====================
        $pengumuman = [
            ['judul' => 'Pendaftaran Bantuan Sosial 2026 Dibuka', 'isi' => 'Pendaftaran bantuan sosial untuk warga kurang mampu dibuka hingga 31 Mei 2026. Segera daftar di kantor desa/kelurahan masing-masing dengan membawa KTP dan KK.', 'kategori' => 'Penting', 'tanggal' => '2026-04-30', 'penting' => true, 'aktif' => true],
            ['judul' => 'Jadwal Pelayanan Pasca Lebaran', 'isi' => 'Pelayanan akan kembali normal pada tanggal 5 Mei 2026. Jam pelayanan 08.00 - 16.00 WIB.', 'kategori' => 'Info', 'tanggal' => '2026-04-28', 'penting' => false, 'aktif' => true],
            ['judul' => 'Rekrutmen Tenaga Kontrak', 'isi' => 'Dibuka rekrutmen tenaga kontrak untuk posisi administrasi. Pendaftaran dibuka hingga 15 Mei 2026.', 'kategori' => 'Lowongan', 'tanggal' => '2026-04-25', 'penting' => false, 'aktif' => true],
        ];
        
        foreach ($pengumuman as $item) {
            Pengumuman::create($item);
        }
        
        $this->command->info('Pengumuman created (' . count($pengumuman) . ' records)...');
        
        
        foreach ($struktur as $item) {
            StrukturOrganisasi::create($item);
        }
        
        $this->command->info('Struktur Organisasi created (' . count($struktur) . ' records)...');
        
        // ==================== GALERI (Contoh) ====================
        // (Kosongkan dulu, nanti diisi via admin)
        
        $this->command->info('✅ Database seeding completed successfully!');
        $this->command->info('');
        $this->command->info('============================================');
        $this->command->info('🔐 LOGIN ADMIN:');
        $this->command->info('   Email: admin@mukomukokab.go.id');
        $this->command->info('   Password: password');
        $this->command->info('============================================');
        $this->command->info('');
        $this->command->info('🌐 WEBSITE:');
        $this->command->info('   Nama: Kabupaten Mukomuko');
        $this->command->info('   Tagline: Provinsi Bengkulu');
        $this->command->info('============================================');
    }
}