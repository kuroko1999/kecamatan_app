<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="gradient-bg text-white text-sm py-2 px-4 rounded-b-lg hidden lg:block">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-6">
                    <span><i class="fas fa-envelope mr-2"></i> kecamatan.buahbatu@bandung.go.id</span>
                    <span><i class="fas fa-phone-alt mr-2"></i> (022) 1234567</span>
                    <span><i class="fas fa-clock mr-2"></i> Senin - Jumat: 08:00 - 16:00 WIB</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        
        <div class="flex flex-wrap justify-between items-center py-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="bg-gradient-to-br from-blue-800 to-blue-600 rounded-full w-12 h-12 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                    <i class="fas fa-landmark text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="font-bold text-xl text-blue-900">Kecamatan Buahbatu</h1>
                    <p class="text-xs text-gray-500 -mt-1">Kota Bandung</p>
                </div>
            </a>
            
            <button id="menu-btn" class="block lg:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            
            <nav class="hidden lg:flex space-x-6 text-gray-700 font-medium">
                <a href="#" class="nav-link">Portal Utama</a>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-yellow-500' : '' }}">Beranda</a>
                <a href="#kegiatan" class="nav-link">Info Kegiatan</a>
                
                <div class="relative group">
                    <a href="#" class="nav-link inline-flex items-center">
                        Profil <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="absolute left-0 w-56 bg-white shadow-xl rounded-lg mt-1 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="#profil-tentang" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Tentang Kecamatan</a>
                        <a href="#profil-struktur" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Struktur Organisasi</a>
                    </div>
                </div>
                
                <div class="relative group">
                    <a href="#" class="nav-link inline-flex items-center">
                        PPID <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="absolute left-0 w-80 bg-white shadow-xl rounded-lg mt-1 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="#ppid-utama" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">PPID Utama Kota Bandung</a>
                        <a href="#ppid-tentang" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Tentang PPID</a>
                        <a href="#ppid-informasi" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Daftar Informasi Publik</a>
                        <a href="#ppid-ikm" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Indeks Kepuasan Masyarakat</a>
                        <a href="#ppid-digital" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Informasi Digital Layanan Kota Bandung</a>
                        <a href="#ppid-permohonan" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Permohonan Informasi Online</a>
                        <a href="#ppid-keberatan" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Pengajuan Keberatan Online</a>
                    </div>
                </div>
                
                <a href="#galeri" class="nav-link">Galeri</a>
                
                <div class="relative group">
                    <a href="#" class="nav-link inline-flex items-center">
                        Layanan <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="absolute left-0 w-72 bg-white shadow-xl rounded-lg mt-1 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="#layanan-sop" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Standar Operasional Prosedur Pelayanan</a>
                        <a href="#layanan-standar" class="block px-4 py-2 hover:bg-blue-50 hover:text-blue-600 transition">Standar Pelayanan</a>
                    </div>
                </div>
                
                <a href="#pengumuman" class="nav-link">Pengumuman</a>
            </nav>
        </div>
        
        <div id="mobile-menu" class="hidden lg:hidden pb-4 border-t border-gray-100">
            <div class="flex flex-col space-y-2 pt-3 max-h-96 overflow-y-auto">
                <a href="#" class="px-3 py-2 hover:bg-gray-50 rounded-lg">Portal Utama</a>
                <a href="{{ route('home') }}" class="px-3 py-2 hover:bg-gray-50 rounded-lg">Beranda</a>
                <a href="#kegiatan" class="px-3 py-2 hover:bg-gray-50 rounded-lg">Info Kegiatan</a>
                
                <div class="px-3 py-1 font-semibold text-gray-400 text-sm">PROFIL</div>
                <a href="#profil-tentang" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Tentang Kecamatan</a>
                <a href="#profil-struktur" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Struktur Organisasi</a>
                
                <div class="px-3 py-1 font-semibold text-gray-400 text-sm mt-2">PPID</div>
                <a href="#ppid-utama" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- PPID Utama Kota Bandung</a>
                <a href="#ppid-tentang" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Tentang PPID</a>
                <a href="#ppid-informasi" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Daftar Informasi Publik</a>
                <a href="#ppid-ikm" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Indeks Kepuasan Masyarakat</a>
                <a href="#ppid-digital" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Informasi Digital Layanan</a>
                <a href="#ppid-permohonan" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Permohonan Informasi Online</a>
                <a href="#ppid-keberatan" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Pengajuan Keberatan Online</a>
                
                <a href="#galeri" class="px-3 py-2 hover:bg-gray-50 rounded-lg">Galeri</a>
                
                <div class="px-3 py-1 font-semibold text-gray-400 text-sm mt-2">LAYANAN</div>
                <a href="#layanan-sop" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Standar Operasional Prosedur Pelayanan</a>
                <a href="#layanan-standar" class="pl-6 py-1 hover:bg-gray-50 rounded-lg text-sm">- Standar Pelayanan</a>
                
                <a href="#pengumuman" class="px-3 py-2 hover:bg-gray-50 rounded-lg">Pengumuman</a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>