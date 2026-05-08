<?php $__env->startSection('title', $site_name ?? 'Kabupaten Mukomuko'); ?>

<?php $__env->startSection('content'); ?>
<?php
    $site_name = \App\Models\Setting::get('site_name', 'Kabupaten Mukomuko');
    $site_tagline = \App\Models\Setting::get('site_tagline', 'Provinsi Bengkulu');
    $heroImage = \App\Models\Setting::get('hero_image');
?>

<!-- HOME PAGE -->
<div id="page-home" class="page-section active">
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <?php if($heroImage && file_exists(public_path('storage/'.$heroImage))): ?>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo e(asset('storage/'.$heroImage)); ?>');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/80"></div>
        </div>
        <?php else: ?>
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-20 -right-20 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/80 to-slate-900"></div>
        </div>
        <?php endif; ?>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="animate-fadeUp">
                <span class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sm mb-6">
                    <i class="fas fa-landmark mr-2 text-blue-400"></i> Portal Resmi <?php echo e($site_name); ?>

                </span>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    <span class="gradient-text"><?php echo e($site_name); ?></span>
                </h1>
                <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                    <?php echo e($site_tagline); ?>

                </p>
                <div class="flex gap-4 justify-center flex-wrap">
                    <button onclick="showPage('profil-tentang')" class="btn-primary">Profil Kecamatan <i class="fas fa-arrow-right ml-2"></i></button>
                    <button onclick="showPage('layanan')" class="btn-outline">Layanan Publik <i class="fas fa-info-circle ml-2"></i></button>
                </div>
            </div>
            
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <i class="fas fa-chevron-down text-gray-400 text-xl"></i>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="stat-card rounded-2xl p-6 text-center scroll-reveal">
                    <i class="fas fa-users text-3xl text-blue-400 mb-3"></i>
                    <div class="stat-number text-4xl font-bold"><?php echo e($penduduk_display ?? '200K+'); ?></div>
                    <div class="text-gray-400 mt-1">Penduduk</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center scroll-reveal">
                    <i class="fas fa-building text-3xl text-blue-400 mb-3"></i>
                    <div class="stat-number text-4xl font-bold"><?php echo e($kecamatan_display ?? '15'); ?></div>
                    <div class="text-gray-400 mt-1">Desa</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center scroll-reveal">
                    <i class="fas fa-file-alt text-3xl text-blue-400 mb-3"></i>
                    <div class="stat-number text-4xl font-bold"><?php echo e($layanan_display ?? '50+'); ?></div>
                    <div class="text-gray-400 mt-1">Layanan</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center scroll-reveal">
                    <i class="fas fa-smile text-3xl text-blue-400 mb-3"></i>
                    <div class="stat-number text-4xl font-bold"><?php echo e($kepuasan_display ?? '95%'); ?></div>
                    <div class="text-gray-400 mt-1">Kepuasan</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 scroll-reveal">
                <span class="text-blue-400 text-sm uppercase tracking-wider">Sambutan</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 gradient-text">Kata Sambutan</h2>
                <p class="text-gray-400 mt-3">Pesan dari camat <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($profil && isset($profil->nama_camat)): ?>
            <div class="max-w-5xl mx-auto glass-card rounded-3xl p-8 scroll-reveal">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="text-center">
                        <div class="w-32 h-32 gradient-primary rounded-full flex items-center justify-center mx-auto shadow-xl animate-float">
                            <i class="fas fa-user-tie text-5xl text-white"></i>
                        </div>
                        <h3 class="font-bold text-xl mt-4"><?php echo e($profil->nama_camat); ?></h3>
                        <p class="text-gray-400 text-sm">Camat <?php echo e($site_name); ?></p>
                        <?php if(isset($profil->nip_camat)): ?>
                        <div class="text-xs text-gray-500 mt-1">NIP. <?php echo e($profil->nip_camat); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="flex-1">
                        <i class="fas fa-quote-left text-3xl text-blue-500/30 mb-4"></i>
                        <p class="text-gray-300 leading-relaxed"><?php echo e($profil->sambutan ?? 'Belum ada sambutan. Silakan isi di admin panel.'); ?></p>
                        <?php if(isset($profil->sambutan)): ?>
                        <div class="mt-5 p-4 bg-blue-500/10 rounded-xl border-l-4" style="border-left-color: var(--primary);">
                            <p class="italic text-blue-300">"<?php echo e($profil->moto ?? 'Bersama Masyarakat, Kita Wujudkan ' . $site_name . ' yang Maju, Mandiri, dan Berdaya Saing'); ?>"</p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-3xl p-8 text-center">
                <p class="text-gray-400">Belum ada data sambutan. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 scroll-reveal">
                <span class="text-blue-400 text-sm uppercase tracking-wider">Layanan</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 gradient-text">Layanan Unggulan</h2>
                <p class="text-gray-400 mt-3">Berbagai layanan untuk masyarakat</p>
            </div>
            
            <?php if($layanan && $layanan->count() > 0): ?>
            <div class="grid md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass-card rounded-2xl p-6 text-center scroll-reveal service-card">
                    <div class="w-16 h-16 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-4"><i class="<?php echo e($item->icon); ?> text-2xl text-white"></i></div>
                    <h3 class="font-bold text-xl mb-2"><?php echo e($item->nama); ?></h3>
                    <p class="text-gray-400"><?php echo e($item->deskripsi); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data layanan. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-20 bg-white/5">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 scroll-reveal">
                <span class="text-blue-400 text-sm uppercase tracking-wider">Informasi</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 gradient-text">Berita Terbaru</h2>
            </div>
            
            <?php if($berita && $berita->count() > 0): ?>
            <div class="grid md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass-card rounded-2xl overflow-hidden scroll-reveal">
                    <div class="w-full h-48 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
                        <?php if($item->gambar && file_exists(public_path('storage/'.$item->gambar))): ?>
                        <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" class="w-full h-full object-cover">
                        <?php else: ?>
                        <i class="fas fa-newspaper text-4xl text-gray-600"></i>
                        <?php endif; ?>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-2">
                            <span><i class="fas fa-calendar-alt mr-1"></i> <?php echo e($item->created_at->format('d M Y')); ?></span>
                            <span><i class="fas fa-user mr-1"></i> <?php echo e($item->penulis); ?></span>
                        </div>
                        <h3 class="font-bold text-lg mb-2"><?php echo e($item->judul); ?></h3>
                        <p class="text-gray-400 text-sm mb-4"><?php echo e(Str::limit(strip_tags($item->isi), 100)); ?></p>
                        <a href="#" onclick="showPage('berita-detail', '<?php echo e($item->slug); ?>')" class="text-blue-400 hover:text-blue-300">Baca Selengkapnya →</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada berita. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Struktur Organisasi Preview -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 scroll-reveal">
                <span class="text-blue-400 text-sm uppercase tracking-wider">Organisasi</span>
                <h2 class="text-4xl md:text-5xl font-bold mt-2 gradient-text">Struktur Organisasi</h2>
                <p class="text-gray-400 mt-3">Jajaran pimpinan <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($struktur && $struktur->count() > 0): ?>
            <div class="flex flex-wrap justify-center gap-6 scroll-reveal">
                <?php $__currentLoopData = $struktur->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass-card rounded-2xl p-5 text-center w-48 hover:scale-105 transition">
                    <?php if($item->gambar && file_exists(public_path('storage/'.$item->gambar))): ?>
                    <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" class="w-24 h-24 rounded-full object-cover mx-auto mb-3 border-2 border-blue-500">
                    <?php else: ?>
                    <div class="w-24 h-24 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-user text-3xl text-gray-500"></i></div>
                    <?php endif; ?>
                    <h3 class="font-semibold text-sm"><?php echo e($item->jabatan); ?></h3>
                    <p class="text-gray-400 text-xs mt-1"><?php echo e($item->nama); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data struktur organisasi. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
            
            <div class="text-center mt-8">
                <button onclick="showPage('profil-struktur')" class="btn-outline">Lihat Struktur Lengkap →</button>
            </div>
        </div>
    </section>
</div>

<!-- PROFIL - TENTANG -->
<div id="page-profil-tentang" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Tentang <?php echo e($site_name); ?></h1>
                <p class="text-gray-400 mt-3">Sejarah, Visi Misi</p>
            </div>
            
            <?php if($profil): ?>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="glass-card rounded-2xl p-6 scroll-reveal">
                    <i class="fas fa-history text-3xl text-blue-400 mb-4"></i>
                    <h2 class="text-xl font-bold mb-3">Sejarah Singkat</h2>
                    <p class="text-gray-300 leading-relaxed"><?php echo e($profil->sejarah ?? 'Belum ada data. Silakan isi di admin panel.'); ?></p>
                </div>
                <div class="glass-card rounded-2xl p-6 scroll-reveal">
                    <i class="fas fa-bullseye text-3xl text-blue-400 mb-4"></i>
                    <h2 class="text-xl font-bold mb-3">Visi & Misi</h2>
                    <?php echo $profil->visi ? '<p class="font-semibold text-blue-300">Visi:</p><p class="text-gray-300 mb-4">' . $profil->visi . '</p>' : '<p class="text-gray-400 mb-4">Visi belum diisi</p>'; ?>

                    <?php echo $profil->misi ? '<p class="font-semibold text-blue-300">Misi:</p><div class="text-gray-300">' . $profil->misi . '</div>' : '<p class="text-gray-400">Misi belum diisi</p>'; ?>

                </div>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data profil. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- PROFIL - STRUKTUR -->
<div id="page-profil-struktur" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Struktur Organisasi</h1>
                <p class="text-gray-400 mt-3">Bagan struktur organisasi <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($struktur && $struktur->count() > 0): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $struktur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass-card rounded-2xl p-5 text-center hover:scale-105 transition">
                    <?php if($item->gambar && file_exists(public_path('storage/'.$item->gambar))): ?>
                    <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" class="w-28 h-28 rounded-full object-cover mx-auto mb-3 border-3 border-blue-500">
                    <?php else: ?>
                    <div class="w-28 h-28 bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-3"><i class="fas fa-user text-4xl text-gray-500"></i></div>
                    <?php endif; ?>
                    <h3 class="font-bold text-lg"><?php echo e($item->jabatan); ?></h3>
                    <p class="text-gray-300"><?php echo e($item->nama); ?></p>
                    <?php if($item->nip): ?><p class="text-xs text-gray-500 mt-1">NIP: <?php echo e($item->nip); ?></p><?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data struktur organisasi. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- LAYANAN -->
<div id="page-layanan" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Layanan Publik</h1>
                <p class="text-gray-400 mt-3">Berbagai layanan untuk masyarakat <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($layanan && $layanan->count() > 0): ?>
            <div class="grid md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="glass-card rounded-2xl p-6 text-center scroll-reveal">
                    <div class="w-16 h-16 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-4"><i class="<?php echo e($item->icon); ?> text-2xl text-white"></i></div>
                    <h3 class="font-bold text-xl mb-2"><?php echo e($item->nama); ?></h3>
                    <p class="text-gray-400"><?php echo e($item->deskripsi); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data layanan. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- GALERI -->
<div id="page-galeri" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Galeri Kegiatan</h1>
                <p class="text-gray-400 mt-3">Dokumentasi kegiatan <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($galeri && $galeri->count() > 0): ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="aspect-square bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden hover:scale-105 transition cursor-pointer">
                    <?php if($item->gambar && file_exists(public_path('storage/'.$item->gambar))): ?>
                    <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>" alt="<?php echo e($item->judul); ?>" class="w-full h-full object-cover">
                    <?php else: ?>
                    <div class="w-full h-full flex items-center justify-center"><i class="fas fa-image text-4xl text-gray-600"></i></div>
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada gambar galeri. Silakan upload di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- INFORMASI - KEGIATAN -->
<div id="page-informasi-kegiatan" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Info Kegiatan</h1>
                <p class="text-gray-400 mt-3">Kegiatan terbaru di <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($kegiatan && $kegiatan->count() > 0): ?>
            <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="glass-card rounded-xl p-5 timeline-item mb-4">
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="sm:w-32 text-center"><div class="gradient-primary rounded-lg p-2"><span class="text-2xl font-bold text-white"><?php echo e($item->tanggal->format('d')); ?></span><p class="text-sm text-white/80"><?php echo e($item->tanggal->format('M Y')); ?></p></div></div>
                    <div><h3 class="font-bold text-xl mb-2"><?php echo e($item->judul); ?></h3><p class="text-gray-400"><?php echo e(Str::limit($item->deskripsi, 200)); ?></p></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data kegiatan. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- INFORMASI - PENGUMUMAN -->
<div id="page-informasi-pengumuman" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Pengumuman</h1>
                <p class="text-gray-400 mt-3">Informasi terbaru dari <?php echo e($site_name); ?></p>
            </div>
            
            <?php if($pengumuman && $pengumuman->count() > 0): ?>
            <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="glass-card rounded-xl p-5 border-l-4 mb-4" style="border-left-color: <?php echo e($item->penting ? '#eab308' : 'var(--primary)'); ?>">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div><span class="text-xs px-2 py-1 rounded-full <?php echo e($item->penting ? 'bg-red-500/20 text-red-400' : 'bg-blue-500/20 text-blue-400'); ?>"><?php echo e($item->kategori); ?></span><h3 class="font-bold text-lg mt-2"><?php echo e($item->judul); ?></h3><p class="text-gray-400 text-sm mt-1"><?php echo e(Str::limit($item->isi, 100)); ?></p></div>
                    <span class="text-sm text-gray-500"><?php echo e($item->tanggal->format('d M Y')); ?></span>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="glass-card rounded-2xl p-8 text-center">
                <p class="text-gray-400">Belum ada data pengumuman. Silakan isi di admin panel.</p>
            </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<!-- KONTAK -->
<div id="page-kontak" class="page-section">
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12 scroll-reveal">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text">Hubungi Kami</h1>
                <p class="text-gray-400 mt-3">Sampaikan saran, kritik, atau pertanyaan Anda</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="glass-card rounded-2xl p-6 scroll-reveal">
                    <div class="flex items-start gap-4 mb-6"><div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center"><i class="fas fa-map-marker-alt text-white text-xl"></i></div><div><h3 class="font-bold text-lg mb-1">Alamat Kantor</h3><p class="text-gray-400">Jl. Pemuda No. 1, Kelurahan Pasar Mukomuko, Kabupaten Mukomuko, Provinsi Bengkulu 38711</p></div></div>
                    <div class="flex items-start gap-4 mb-6"><div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center"><i class="fas fa-phone-alt text-white text-xl"></i></div><div><h3 class="font-bold text-lg mb-1">Telepon</h3><p class="text-gray-400">(0736) 1234567</p></div></div>
                    <div class="flex items-start gap-4"><div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center"><i class="fas fa-envelope text-white text-xl"></i></div><div><h3 class="font-bold text-lg mb-1">Email</h3><p class="text-gray-400">info@mukomukokab.go.id</p></div></div>
                </div>
                
                <div class="glass-card rounded-2xl p-6 scroll-reveal">
                    <h3 class="text-xl font-bold mb-6">Kirim Pesan</h3>
                    <form action="<?php echo e(route('kontak.kirim')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-4"><input type="text" name="nama" placeholder="Nama Lengkap" class="w-full p-3 bg-white/5 border border-white/10 rounded-xl focus:outline-none focus:border-blue-500 transition"></div>
                        <div class="mb-4"><input type="email" name="email" placeholder="Email" class="w-full p-3 bg-white/5 border border-white/10 rounded-xl focus:outline-none focus:border-blue-500 transition"></div>
                        <div class="mb-6"><textarea name="pesan" rows="5" placeholder="Pesan" class="w-full p-3 bg-white/5 border border-white/10 rounded-xl focus:outline-none focus:border-blue-500 transition"></textarea></div>
                        <button type="submit" class="btn-primary w-full justify-center">Kirim Pesan <i class="fas fa-paper-plane ml-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- BERITA DETAIL & SEMUA BERITA -->
<div id="page-berita-detail" class="page-section"><div id="berita-detail-content"></div></div>
<div id="page-semua-berita" class="page-section"><div id="semua-berita-content"></div></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
function showBeritaDetail(slug) {
    fetch('/berita/' + slug).then(r => r.text()).then(html => {
        document.getElementById('berita-detail-content').innerHTML = html;
        showPage('berita-detail');
    });
}

function showSemuaBerita() {
    fetch('/semua-berita').then(r => r.text()).then(html => {
        document.getElementById('semua-berita-content').innerHTML = html;
        showPage('semua-berita');
    });
}

function showPage(pageId, param = null) {
    document.querySelectorAll('.page-section').forEach(s => s.classList.remove('active'));
    
    if (pageId === 'berita-detail' && param) { showBeritaDetail(param); return; }
    if (pageId === 'semua-berita') { showSemuaBerita(); return; }
    
    const target = document.getElementById('page-' + pageId);
    if (target) target.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/landing/index.blade.php ENDPATH**/ ?>