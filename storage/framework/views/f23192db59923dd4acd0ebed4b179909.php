<nav id="navbar" class="navbar fixed top-0 left-0 right-0 z-50 py-4 transition-all duration-300">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="#" onclick="showPage('home'); return false;" class="flex items-center space-x-3 group cursor-pointer">
                <div class="w-10 h-10 gradient-primary rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-landmark text-white text-lg"></i>
                </div>
                <div>
                    <?php
                        $site_name = \App\Models\Setting::get('site_name', 'Kabupaten Mukomuko');
                        $site_tagline = \App\Models\Setting::get('site_tagline', 'Provinsi Bengkulu');
                    ?>
                    <div class="font-bold text-lg text-white"><?php echo e($site_name); ?></div>
                    <div class="text-xs text-gray-400"><?php echo e($site_tagline); ?></div>
                </div>
            </a>
            
            <!-- Desktop Menu -->
            <div class="desktop-menu items-center space-x-6">
                <a href="#" onclick="showPage('home'); return false;" class="text-gray-300 hover:text-white transition duration-300">Beranda</a>
                
                <div class="relative dropdown">
                    <a href="#" class="text-gray-300 hover:text-white transition flex items-center gap-1">Profil <i class="fas fa-chevron-down text-xs"></i></a>
                    <div class="dropdown-menu">
                        <a href="#" onclick="showPage('profil-tentang'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Tentang Kabupaten</a>
                        <a href="#" onclick="showPage('profil-struktur'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Struktur Organisasi</a>
                    </div>
                </div>
                
                <a href="#" onclick="showPage('layanan'); return false;" class="text-gray-300 hover:text-white transition">Layanan</a>
                
                <div class="relative dropdown">
                    <a href="#" class="text-gray-300 hover:text-white transition flex items-center gap-1">PPID <i class="fas fa-chevron-down text-xs"></i></a>
                    <div class="dropdown-menu">
                        <a href="#" onclick="showPage('ppid'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Informasi Publik</a>
                        <a href="#" onclick="showPage('ppid-permohonan'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Permohonan Informasi</a>
                        <a href="#" onclick="showPage('ppid-keberatan'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Pengajuan Keberatan</a>
                    </div>
                </div>
                
                <a href="#" onclick="showPage('galeri'); return false;" class="text-gray-300 hover:text-white transition">Galeri</a>
                
                <div class="relative dropdown">
                    <a href="#" class="text-gray-300 hover:text-white transition flex items-center gap-1">Informasi <i class="fas fa-chevron-down text-xs"></i></a>
                    <div class="dropdown-menu">
                        <a href="#" onclick="showPage('informasi-kegiatan'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Info Kegiatan</a>
                        <a href="#" onclick="showPage('informasi-pengumuman'); return false;" class="dropdown-item block px-4 py-2 text-sm text-gray-300 hover:text-white">Pengumuman</a>
                    </div>
                </div>
                
                <a href="#" onclick="showPage('kontak'); return false;" class="text-gray-300 hover:text-white transition">Kontak</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="menuToggle" class="mobile-menu-btn w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 transition-all duration-300 items-center justify-center">
                <i class="fas fa-bars text-white text-xl"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Drawer -->
<div id="drawerOverlay" class="drawer-overlay"></div>
<div id="mobileDrawer" class="mobile-drawer">
    <div class="p-5 border-b border-white/10 flex justify-between items-center sticky top-0 bg-[#0f172a]/95 backdrop-blur-sm">
        <span class="font-bold text-lg">Menu</span>
        <button id="closeDrawer" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 transition"><i class="fas fa-times"></i></button>
    </div>
    <div class="p-4 space-y-2">
        <a href="#" onclick="showPage('home'); closeDrawerFunc(); return false;" class="block py-3 px-3 rounded-xl hover:bg-white/10 transition">Beranda</a>
        <div class="text-xs font-semibold text-gray-500 px-3 pt-2">PROFIL</div>
        <a href="#" onclick="showPage('profil-tentang'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Tentang Kabupaten</a>
        <a href="#" onclick="showPage('profil-struktur'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Struktur Organisasi</a>
        <a href="#" onclick="showPage('layanan'); closeDrawerFunc(); return false;" class="block py-3 px-3 rounded-xl hover:bg-white/10 transition">Layanan</a>
        <div class="text-xs font-semibold text-gray-500 px-3 pt-2">PPID</div>
        <a href="#" onclick="showPage('ppid'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Informasi Publik</a>
        <a href="#" onclick="showPage('ppid-permohonan'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Permohonan Informasi</a>
        <a href="#" onclick="showPage('ppid-keberatan'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Pengajuan Keberatan</a>
        <a href="#" onclick="showPage('galeri'); closeDrawerFunc(); return false;" class="block py-3 px-3 rounded-xl hover:bg-white/10 transition">Galeri</a>
        <div class="text-xs font-semibold text-gray-500 px-3 pt-2">INFORMASI</div>
        <a href="#" onclick="showPage('informasi-kegiatan'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Info Kegiatan</a>
        <a href="#" onclick="showPage('informasi-pengumuman'); closeDrawerFunc(); return false;" class="block py-2 px-6 text-sm hover:bg-white/10 rounded-lg transition">Pengumuman</a>
        <a href="#" onclick="showPage('kontak'); closeDrawerFunc(); return false;" class="block py-3 px-3 rounded-xl hover:bg-white/10 transition">Kontak</a>
        <div class="border-t border-white/10 my-3 pt-3">
            <a href="<?php echo e(url('/admin')); ?>" class="block py-3 px-3 rounded-xl bg-white/5 hover:bg-white/10 transition text-blue-400">Admin Panel</a>
        </div>
    </div>
</div>

<script>
    // ==================== MOBILE DRAWER ====================
    const menuToggle = document.getElementById('menuToggle');
    const drawer = document.getElementById('mobileDrawer');
    const overlay = document.getElementById('drawerOverlay');
    const closeBtn = document.getElementById('closeDrawer');
    
    function openDrawer() {
        drawer.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    
    function closeDrawerFunc() {
        drawer.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = '';
    }
    
    if (menuToggle) menuToggle.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawerFunc);
    if (overlay) overlay.addEventListener('click', closeDrawerFunc);
    
    // ==================== PAGE NAVIGATION FUNCTION ====================
    // Pastikan fungsi showPage tersedia secara global
    window.showPage = function(pageId, param = null) {
        console.log('Navigasi ke:', pageId);
        
        // Sembunyikan semua section
        document.querySelectorAll('.page-section').forEach(section => {
            section.classList.remove('active');
        });
        
        // Tampilkan section yang dipilih
        const targetId = 'page-' + pageId;
        const targetSection = document.getElementById(targetId);
        
        if (targetSection) {
            targetSection.classList.add('active');
            console.log('Section ditemukan:', targetId);
        } else {
            console.log('Section tidak ditemukan:', targetId);
        }
        
        // Scroll ke atas
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
    
    console.log('Navbar loaded. showPage function available:', typeof window.showPage);
</script><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/components/navbar.blade.php ENDPATH**/ ?>