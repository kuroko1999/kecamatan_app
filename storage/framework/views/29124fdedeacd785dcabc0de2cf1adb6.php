

<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-blue-100 text-sm">Total Layanan</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(\App\Models\Layanan::count()); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-server text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-blue-100 text-sm">
            <i class="fas fa-check-circle mr-1"></i> Aktif: <?php echo e(\App\Models\Layanan::where('aktif', true)->count()); ?>

        </div>
    </div>
    
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-green-100 text-sm">Total Kegiatan</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(\App\Models\Kegiatan::count()); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-green-100 text-sm">
            <i class="fas fa-check-circle mr-1"></i> Aktif: <?php echo e(\App\Models\Kegiatan::where('aktif', true)->count()); ?>

        </div>
    </div>
    
    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-yellow-100 text-sm">Total Pengumuman</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(\App\Models\Pengumuman::count()); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-bullhorn text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-yellow-100 text-sm">
            <i class="fas fa-exclamation-triangle mr-1"></i> Penting: <?php echo e(\App\Models\Pengumuman::where('penting', true)->count()); ?>

        </div>
    </div>
    
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-purple-100 text-sm">Total Berita</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(\App\Models\Berita::count()); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-newspaper text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-purple-100 text-sm">
            <i class="fas fa-eye mr-1"></i> Total Views: <?php echo e(number_format(\App\Models\Berita::sum('views'))); ?>

        </div>
    </div>
</div>

<!-- Visitor Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-indigo-100 text-sm">Total Pengunjung</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(number_format($totalVisitors ?? \App\Models\Visitor::count())); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-users text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-indigo-100 text-sm">
            <i class="fas fa-globe mr-1"></i> Semua waktu
        </div>
    </div>
    
    <div class="bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-teal-100 text-sm">Pengunjung Hari Ini</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(number_format($todayVisitors ?? \App\Models\Visitor::getTodayVisitors())); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-calendar-day text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-teal-100 text-sm">
            <i class="fas fa-clock mr-1"></i> <?php echo e(now()->format('d M Y')); ?>

        </div>
    </div>
    
    <div class="bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-rose-100 text-sm">Pengunjung Unik</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(number_format($uniqueVisitors ?? \App\Models\Visitor::getUniqueVisitors())); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-fingerprint text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-rose-100 text-sm">
            <i class="fas fa-ip-address mr-1"></i> Berdasarkan IP
        </div>
    </div>
    
    <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-amber-100 text-sm">Rata-rata Harian</p>
                <p class="text-4xl font-bold mt-2"><?php echo e(number_format(ceil(($totalVisitors ?? \App\Models\Visitor::count()) / 30))); ?></p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-chart-line text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-amber-100 text-sm">
            <i class="fas fa-percent mr-1"></i> 30 hari terakhir
        </div>
    </div>
</div>

<!-- Device & Browser Stats -->
<div class="grid md:grid-cols-2 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg">Statistik Perangkat</h3>
            <a href="<?php echo e(route('admin.visitors')); ?>" class="text-blue-600 text-sm hover:underline">Detail →</a>
        </div>
        <?php
            $deviceDesktop = ($deviceStats['Desktop'] ?? 0);
            $deviceMobile = ($deviceStats['Mobile'] ?? 0);
            $deviceTablet = ($deviceStats['Tablet'] ?? 0);
            $totalDevices = $deviceDesktop + $deviceMobile + $deviceTablet;
        ?>
        <div class="space-y-4">
            <div>
                <div class="flex justify-between mb-1"><span>🖥️ Desktop</span><span><?php echo e(number_format($deviceDesktop)); ?> (<?php echo e($totalDevices > 0 ? round(($deviceDesktop / $totalDevices) * 100) : 0); ?>%)</span></div>
                <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: <?php echo e($totalDevices > 0 ? ($deviceDesktop / $totalDevices) * 100 : 0); ?>%"></div></div>
            </div>
            <div>
                <div class="flex justify-between mb-1"><span>📱 Mobile</span><span><?php echo e(number_format($deviceMobile)); ?> (<?php echo e($totalDevices > 0 ? round(($deviceMobile / $totalDevices) * 100) : 0); ?>%)</span></div>
                <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-green-600 h-2 rounded-full" style="width: <?php echo e($totalDevices > 0 ? ($deviceMobile / $totalDevices) * 100 : 0); ?>%"></div></div>
            </div>
            <div>
                <div class="flex justify-between mb-1"><span>📟 Tablet</span><span><?php echo e(number_format($deviceTablet)); ?> (<?php echo e($totalDevices > 0 ? round(($deviceTablet / $totalDevices) * 100) : 0); ?>%)</span></div>
                <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-purple-600 h-2 rounded-full" style="width: <?php echo e($totalDevices > 0 ? ($deviceTablet / $totalDevices) * 100 : 0); ?>%"></div></div>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg">Statistik Browser</h3>
            <a href="<?php echo e(route('admin.visitors')); ?>" class="text-blue-600 text-sm hover:underline">Detail →</a>
        </div>
        <div class="grid grid-cols-2 gap-3">
            <?php $__currentLoopData = $browserStats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $browser => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex justify-between items-center p-2 bg-gray-50 rounded-lg">
                <span class="text-sm">
                    <?php if($browser == 'Chrome'): ?> 🌐 <?php elseif($browser == 'Firefox'): ?> 🦊 <?php elseif($browser == 'Safari'): ?> 🧭 <?php elseif($browser == 'Edge'): ?> 💠 <?php elseif($browser == 'Opera'): ?> 🎭 <?php else: ?> 📄 <?php endif; ?>
                    <?php echo e($browser); ?>

                </span>
                <span class="font-semibold"><?php echo e(number_format($count)); ?></span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
    <!-- Struktur Organisasi Summary -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center">
            <div>
                <h3 class="font-bold text-lg">Struktur Organisasi</h3>
                <p class="text-gray-500 text-sm">Data jabatan dan pejabat</p>
            </div>
            <a href="<?php echo e(route('admin.struktur')); ?>" class="text-blue-600 text-sm hover:underline">Kelola →</a>
        </div>
        <div class="divide-y divide-gray-100">
            <?php $__empty_1 = true; $__currentLoopData = \App\Models\StrukturOrganisasi::where('aktif', true)->orderBy('urutan')->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $struktur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="p-4 flex items-center gap-3 hover:bg-gray-50">
                <?php if($struktur->gambar): ?>
                <img src="<?php echo e(asset('storage/'.$struktur->gambar)); ?>" class="w-10 h-10 rounded-full object-cover">
                <?php else: ?>
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center"><i class="fas fa-user text-gray-500"></i></div>
                <?php endif; ?>
                <div class="flex-1">
                    <p class="font-semibold text-sm"><?php echo e($struktur->jabatan); ?></p>
                    <p class="text-gray-500 text-xs"><?php echo e($struktur->nama); ?></p>
                </div>
                <span class="text-xs text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="p-8 text-center text-gray-400">Belum ada data struktur</div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Berita Terbaru -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center">
            <div>
                <h3 class="font-bold text-lg">Berita Terbaru</h3>
                <p class="text-gray-500 text-sm">Update informasi terbaru</p>
            </div>
            <a href="<?php echo e(route('admin.berita')); ?>" class="text-blue-600 text-sm hover:underline">Kelola →</a>
        </div>
        <div class="divide-y divide-gray-100">
            <?php $__empty_1 = true; $__currentLoopData = \App\Models\Berita::latest()->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="p-4 flex items-center gap-3 hover:bg-gray-50">
                <?php if($berita->gambar): ?>
                <img src="<?php echo e(asset('storage/'.$berita->gambar)); ?>" class="w-12 h-12 rounded-lg object-cover">
                <?php else: ?>
                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center"><i class="fas fa-image text-gray-400"></i></div>
                <?php endif; ?>
                <div class="flex-1">
                    <p class="font-semibold text-sm"><?php echo e(\Illuminate\Support\Str::limit($berita->judul, 40)); ?></p>
                    <div class="flex gap-3 text-xs text-gray-400 mt-1">
                        <span><i class="fas fa-user mr-1"></i> <?php echo e($berita->penulis); ?></span>
                        <span><i class="fas fa-eye mr-1"></i> <?php echo e(number_format($berita->views)); ?></span>
                        <span><i class="fas fa-calendar mr-1"></i> <?php echo e($berita->created_at->format('d/m/Y')); ?></span>
                    </div>
                </div>
                <span class="text-xs <?php echo e($berita->aktif ? 'text-green-600 bg-green-100' : 'text-red-600 bg-red-100'); ?> px-2 py-0.5 rounded-full">
                    <?php echo e($berita->aktif ? 'Aktif' : 'Nonaktif'); ?>

                </span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="p-8 text-center text-gray-400">Belum ada berita</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Pengunjung Terbaru -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-8">
    <div class="p-5 border-b border-gray-100 flex justify-between items-center">
        <div>
            <h3 class="font-bold text-lg">Pengunjung Terbaru</h3>
            <p class="text-gray-500 text-sm">Aktivitas pengunjung website</p>
        </div>
        <a href="<?php echo e(route('admin.visitors')); ?>" class="text-blue-600 text-sm hover:underline">Lihat Semua →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-3 text-left text-xs">IP Address</th>
                    <th class="p-3 text-left text-xs">Device</th>
                    <th class="p-3 text-left text-xs">Browser</th>
                    <th class="p-3 text-left text-xs">OS</th>
                    <th class="p-3 text-left text-xs">Halaman</th>
                    <th class="p-3 text-left text-xs">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $recentVisitors ?? \App\Models\Visitor::latest()->take(10)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3 text-sm"><?php echo e($visitor->ip_address ?? '-'); ?></td>
                    <td class="p-3 text-sm">
                        <span class="px-2 py-1 rounded-full text-xs <?php echo e($visitor->device == 'Mobile' ? 'bg-green-100 text-green-600' : ($visitor->device == 'Tablet' ? 'bg-purple-100 text-purple-600' : 'bg-blue-100 text-blue-600')); ?>">
                            <?php echo e($visitor->device ?? '-'); ?>

                        </span>
                    </td>
                    <td class="p-3 text-sm"><?php echo e($visitor->browser ?? '-'); ?></td>
                    <td class="p-3 text-sm"><?php echo e($visitor->os ?? '-'); ?></td>
                    <td class="p-3 text-sm max-w-xs truncate"><?php echo e($visitor->page_url ?? '-'); ?></td>
                    <td class="p-3 text-sm"><?php echo e($visitor->created_at ? $visitor->created_at->diffForHumans() : '-'); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="6" class="p-8 text-center text-gray-400">Belum ada data pengunjung</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Menu Cepat -->
    <div class="bg-white rounded-2xl shadow-sm p-5">
        <h3 class="font-bold text-lg mb-4 flex items-center gap-2"><i class="fas fa-bolt text-yellow-500"></i> Menu Cepat</h3>
        <div class="grid grid-cols-2 gap-3">
            <a href="<?php echo e(route('admin.profil')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-building text-blue-500 text-xl mb-1 block"></i>
                <span class="text-sm">Profil</span>
            </a>
            <a href="<?php echo e(route('admin.layanan')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-server text-green-500 text-xl mb-1 block"></i>
                <span class="text-sm">Layanan</span>
            </a>
            <a href="<?php echo e(route('admin.kegiatan')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-calendar-alt text-yellow-500 text-xl mb-1 block"></i>
                <span class="text-sm">Kegiatan</span>
            </a>
            <a href="<?php echo e(route('admin.pengumuman')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-bullhorn text-purple-500 text-xl mb-1 block"></i>
                <span class="text-sm">Pengumuman</span>
            </a>
            <a href="<?php echo e(route('admin.struktur')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-sitemap text-indigo-500 text-xl mb-1 block"></i>
                <span class="text-sm">Struktur</span>
            </a>
            <a href="<?php echo e(route('admin.berita')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-newspaper text-pink-500 text-xl mb-1 block"></i>
                <span class="text-sm">Berita</span>
            </a>
            <a href="<?php echo e(route('admin.galeri')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-images text-orange-500 text-xl mb-1 block"></i>
                <span class="text-sm">Galeri</span>
            </a>
            <a href="<?php echo e(route('admin.setting')); ?>" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-cog text-gray-500 text-xl mb-1 block"></i>
                <span class="text-sm">Pengaturan</span>
            </a>
        </div>
    </div>
    
    <!-- Pengaturan Cepat -->
    <div class="bg-white rounded-2xl shadow-sm p-5">
        <h3 class="font-bold text-lg mb-4 flex items-center gap-2"><i class="fas fa-sliders-h text-gray-500"></i> Pengaturan</h3>
        <div class="space-y-3">
            <a href="<?php echo e(route('admin.warna')); ?>" class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-lg"></div>
                    <span>Warna Website</span>
                </div>
                <i class="fas fa-chevron-right text-gray-400"></i>
            </a>
            <a href="<?php echo e(route('admin.visitors')); ?>" class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <i class="fas fa-chart-line text-gray-500 w-8"></i>
                    <span>Statistik Lengkap</span>
                </div>
                <i class="fas fa-chevron-right text-gray-400"></i>
            </a>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                <div class="flex items-center gap-3">
                    <i class="fas fa-database text-gray-500 w-8"></i>
                    <span>Database SQLite</span>
                </div>
                <span class="text-xs text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Terhubung</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                <div class="flex items-center gap-3">
                    <i class="fas fa-images text-gray-500 w-8"></i>
                    <span>Storage</span>
                </div>
                <span class="text-xs <?php echo e(\Illuminate\Support\Facades\Storage::disk('public')->exists('hero') ? 'text-green-600 bg-green-100' : 'text-red-600 bg-red-100'); ?> px-2 py-0.5 rounded-full">
                    <?php echo e(\Illuminate\Support\Facades\Storage::disk('public')->exists('hero') ? 'Link OK' : 'Belum link'); ?>

                </span>
            </div>
        </div>
    </div>
    
    <!-- Info Sistem -->
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-5 text-white">
        <h3 class="font-bold text-lg mb-4 flex items-center gap-2"><i class="fas fa-info-circle"></i> Info Sistem</h3>
        <div class="space-y-2 text-sm">
            <div class="flex justify-between"><span class="text-gray-400">Laravel Version</span><span><?php echo e(app()->version()); ?></span></div>
            <div class="flex justify-between"><span class="text-gray-400">PHP Version</span><span><?php echo e(phpversion()); ?></span></div>
            <div class="flex justify-between"><span class="text-gray-400">Database</span><span>SQLite</span></div>
            <div class="flex justify-between"><span class="text-gray-400">Last Update</span><span><?php echo e(now()->format('d/m/Y H:i')); ?></span></div>
        </div>
        <div class="mt-4 pt-4 border-t border-gray-700">
            <a href="<?php echo e(url('/')); ?>" target="_blank" class="flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 py-2 rounded-lg transition">
                <i class="fas fa-external-link-alt"></i> Lihat Website
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Documents\kecamatan-app\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>