<header class="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-md shadow-sm z-50 transition-all duration-300 border-b border-gray-100">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 active:opacity-70 transition-opacity">
                <div class="bg-gradient-to-br from-blue-800 to-blue-600 rounded-xl w-9 h-9 flex items-center justify-center shadow-md">
                    <i class="fas fa-landmark text-white text-base"></i>
                </div>
                <div>
                    <h1 class="font-bold text-base text-gray-800">Kecamatan Buahbatu</h1>
                    <p class="text-[10px] text-gray-500 -mt-0.5">Kota Bandung</p>
                </div>
            </a>
            
            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="lg:hidden w-10 h-10 flex items-center justify-center rounded-xl active:bg-gray-100 transition-colors">
                <i id="menu-icon" class="fas fa-bars text-gray-600 text-xl"></i>
            </button>
            
            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-5">
                <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Portal Utama</a>
                <a href="{{ route('home') }}" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Beranda</a>
                <a href="#kegiatan" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Info Kegiatan</a>
                
                <div class="relative group">
                    <button class="text-sm font-medium text-gray-600 hover:text-blue-600 transition flex items-center gap-1">Profil <i class="fas fa-chevron-down text-xs"></i></button>
                    <div class="absolute left-0 w-52 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-100">
                        <a href="#profil-tentang" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Tentang Kecamatan</a>
                        <a href="#profil-struktur" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Struktur Organisasi</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <button class="text-sm font-medium text-gray-600 hover:text-blue-600 transition flex items-center gap-1">PPID <i class="fas fa-chevron-down text-xs"></i></button>
                    <div class="absolute left-0 w-72 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-100 max-h-96 overflow-y-auto">
                        <a href="#ppid-utama" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">PPID Utama Kota Bandung</a>
                        <a href="#ppid-tentang" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Tentang PPID</a>
                        <a href="#ppid-informasi" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Daftar Informasi Publik</a>
                        <a href="#ppid-ikm" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Indeks Kepuasan Masyarakat</a>
                        <a href="#ppid-digital" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Informasi Digital Layanan</a>
                        <a href="#ppid-permohonan" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Permohonan Informasi Online</a>
                        <a href="#ppid-keberatan" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Pengajuan Keberatan Online</a>
                    </div>
                </div>
                
                <a href="#galeri" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Galeri</a>
                
                <div class="relative group">
                    <button class="text-sm font-medium text-gray-600 hover:text-blue-600 transition flex items-center gap-1">Layanan <i class="fas fa-chevron-down text-xs"></i></button>
                    <div class="absolute left-0 w-64 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-100">
                        <a href="#layanan-sop" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Standar Operasional Prosedur</a>
                        <a href="#layanan-standar" class="block px-4 py-2.5 text-sm hover:bg-gray-50 hover:text-blue-600 transition">Standar Pelayanan</a>
                    </div>
                </div>
                
                <a href="#pengumuman" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition">Pengumuman</a>
            </nav>
        </div>
        
        <!-- Mobile Navigation Drawer -->
        <div id="mobile-drawer" class="fixed inset-0 bg-black/50 z-40 hidden transition-all duration-300 lg:hidden" style="backdrop-filter: blur(4px);">
            <div class="absolute right-0 top-0 bottom-0 w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 overflow-y-auto">
                <div class="p-4 border-b border-gray-100 flex justify-between items-center sticky top-0 bg-white z-10">
                    <div class="flex items-center space-x-2">
                        <div class="bg-blue-600 rounded-xl w-8 h-8 flex items-center justify-center">
                            <i class="fas fa-landmark text-white text-sm"></i>
                        </div>
                        <span class="font-bold text-gray-800">Menu</span>
                    </div>
                    <button id="close-drawer" class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 active:bg-gray-200">
                        <i class="fas fa-times text-gray-600"></i>
                    </button>
                </div>
                
                <div class="p-4 space-y-1">
                    <a href="#" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100">Portal Utama</a>
                    <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100">Beranda</a>
                    <a href="#kegiatan" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100">Info Kegiatan</a>
                    
                    <div class="mt-2 mb-1 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Profil</div>
                    <a href="#profil-tentang" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Tentang Kecamatan</a>
                    <a href="#profil-struktur" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Struktur Organisasi</a>
                    
                    <div class="mt-2 mb-1 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">PPID</div>
                    <a href="#ppid-utama" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">PPID Utama Kota Bandung</a>
                    <a href="#ppid-tentang" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Tentang PPID</a>
                    <a href="#ppid-informasi" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Daftar Informasi Publik</a>
                    <a href="#ppid-ikm" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Indeks Kepuasan Masyarakat</a>
                    <a href="#ppid-digital" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Informasi Digital Layanan</a>
                    <a href="#ppid-permohonan" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Permohonan Informasi Online</a>
                    <a href="#ppid-keberatan" class="flex items-center gap-3 pl-8 pr-3 py-2.5 rounded-xl hover:bg-gray-50 transition text-sm">Pengajuan Keberatan Online</a>
                    
                    <div class="mt-2 mb-1 px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Lainnya</div>
                    <a href="#galeri" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100">Galeri</a>
                    <a href="#layanan-sop" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100 text-sm">Standar Operasional Prosedur</a>
                    <a href="#layanan-standar" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100 text-sm">Standar Pelayanan</a>
                    <a href="#pengumuman" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-gray-50 transition active:bg-gray-100">Pengumuman</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    (function() {
        const menuBtn = document.getElementById('menu-btn');
        const drawer = document.getElementById('mobile-drawer');
        const closeBtn = document.getElementById('close-drawer');
        const menuIcon = document.getElementById('menu-icon');
        
        function openDrawer() {
            drawer.classList.remove('hidden');
            setTimeout(() => {
                drawer.querySelector('.absolute').classList.remove('translate-x-full');
            }, 10);
            document.body.style.overflow = 'hidden';
        }
        
        function closeDrawer() {
            drawer.querySelector('.absolute').classList.add('translate-x-full');
            setTimeout(() => {
                drawer.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }
        
        if (menuBtn) menuBtn.addEventListener('click', openDrawer);
        if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
        
        drawer?.addEventListener('click', function(e) {
            if (e.target === drawer) closeDrawer();
        });
        
        document.querySelectorAll('#mobile-drawer a').forEach(link => {
            link.addEventListener('click', closeDrawer);
        });
    })();
</script>