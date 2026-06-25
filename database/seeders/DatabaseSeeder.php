<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('Starting seeder...');
   
        try {
            DB::table('settings')->truncate();
            DB::table('profil')->truncate();
            DB::table('layanan')->truncate();
            DB::table('kegiatan')->truncate();
            DB::table('pengumuman')->truncate();
            DB::table('galeri')->truncate();
            DB::table('admins')->truncate();
            DB::table('struktur_organisasi')->truncate();
            DB::table('visitors')->truncate();
            DB::table('berita')->truncate();
        } catch (\Exception $e) {
            DB::table('settings')->delete();
            DB::table('profil')->delete();
            DB::table('layanan')->delete();
            DB::table('kegiatan')->delete();
            DB::table('pengumuman')->delete();
            DB::table('galeri')->delete();
            DB::table('admins')->delete();
            DB::table('struktur_organisasi')->delete();
            DB::table('visitors')->delete();
            DB::table('berita')->delete();
        }
        
        $this->command->info('Tables cleared...');
        
    
        Admin::where('email', 'admin@mukomukokab.go.id')->delete();
        

        Admin::create([
            'email' => 'admin@mukomukokab.go.id',
            'password' => bcrypt('password'),
            'nama' => 'Administrator',
        ]);
        

        $admin = Admin::where('email', 'admin@mukomukokab.go.id')->first();
        if ($admin && Hash::check('password', $admin->password)) {
            $this->command->info('✅ Admin created and verified successfully!');
        } else {
            $this->command->error('❌ Admin creation failed!');
     
            Admin::truncate();
            DB::table('admins')->insert([
                'email' => 'admin@mukomukokab.go.id',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'nama' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $this->command->info('✅ Admin created with fallback hash!');
        }
        
        $this->command->info('');
        $this->command->info('============================================');
        $this->command->info('🔐 LOGIN ADMIN:');
        $this->command->info('   Email: admin@mukomukokab.go.id');
        $this->command->info('   Password: password');
        $this->command->info('============================================');
        $this->command->info('');
        $this->command->info('✅ Database seeding completed successfully!');
        $this->command->info('   Semua tabel lain dikosongkan.');
    }
}