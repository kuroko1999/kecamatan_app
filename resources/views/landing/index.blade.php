@extends('layouts.app')

@section('title', 'Beranda - Kecamatan Buahbatu')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden gradient-primary">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-yellow-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-pink-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-5 relative z-10 text-center text-white py-12">
        <div class="animate-fadeUp">
            <span class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-medium mb-5">
                <i class="fas fa-landmark mr-1.5 text-xs"></i> Portal Resmi Kecamatan Buahbatu
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight">
                Kecamatan <span class="text-yellow-300">Buahbatu</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl mb-6 text-white/90 max-w-2xl mx-auto px-4">
                Melayani dengan Hati, Menuju Bandung Juara
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center px-4">
                <a href="#sambutan" class="group bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-flex items-center justify-center gap-2 shadow-lg active:scale-95 text-sm sm:text-base">
                    <span>Sambutan Camat</span>
                    <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#layanan" class="group bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-flex items-center justify-center gap-2 border border-white/30 active:scale-95 text-sm sm:text-base">
                    <span>Layanan Publik</span>
                    <i class="fas fa-info-circle text-xs"></i>
                </a>
            </div>
        </div>
        
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
            <a href="#sambutan" class="text-white/70 hover:text-white transition w-8 h-8 flex items-center justify-center">
                <i class="fas fa-chevron-down text-lg"></i>
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-12 bg-white relative -mt-8 z-20 px-4">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
            <div class="stat-card rounded-xl sm:rounded-2xl p-3 sm:p-5 text-center text-white shadow-lg">
                <i class="fas fa-users text-xl sm:text-3xl mb-1.5 sm:mb-2"></i>
                <div class="text-lg sm:text-2xl font-bold">120K+</div>
                <div class="text-[10px] sm:text-xs opacity-90">Penduduk</div>
            </div>
            <div class="stat-card rounded-xl sm:rounded-2xl p-3 sm:p-5 text-center text-white shadow-lg">
                <i class="fas fa-building text-xl sm:text-3xl mb-1.5 sm:mb-2"></i>
                <div class="text-lg sm:text-2xl font-bold">4</div>
                <div class="text-[10px] sm:text-xs opacity-90">Kelurahan</div>
            </div>
            <div class="stat-card rounded-xl sm:rounded-2xl p-3 sm:p-5 text-center text-white shadow-lg">
                <i class="fas fa-file-alt text-xl sm:text-3xl mb-1.5 sm:mb-2"></i>
                <div class="text-lg sm:text-2xl font-bold">25+</div>
                <div class="text-[10px] sm:text-xs opacity-90">Layanan</div>
            </div>
            <div class="stat-card rounded-xl sm:rounded-2xl p-3 sm:p-5 text-center text-white shadow-lg">
                <i class="fas fa-smile text-xl sm:text-3xl mb-1.5 sm:mb-2"></i>
                <div class="text-lg sm:text-2xl font-bold">98%</div>
                <div class="text-[10px] sm:text-xs opacity-90">Kepuasan</div>
            </div>
        </div>
    </div>
</section>

<!-- Sambutan Camat -->
<section id="sambutan" class="py-12 md:py-16 bg-gray-50 px-4">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-8 md:mb-10">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Sambutan</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Kata Sambutan</h2>
            <p class="text-gray-500 text-sm mt-2 max-w-md mx-auto">Camat Buahbatu menyampaikan pesan untuk masyarakat</p>
        </div>
        
        <div class="flex flex-col lg:flex-row gap-6 md:gap-8 items-start">
            <div class="lg:w-1/3 w-full">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="gradient-primary p-5 text-center">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 mx-auto bg-white rounded-full flex items-center justify-center border-4 border-yellow-400 shadow-lg">
                            <i class="fas fa-user-tie text-4xl sm:text-5xl text-blue-900"></i>
                        </div>
                        <h3 class="font-bold text-lg sm:text-xl mt-3 text-white">EDI JUHENDI, S.IP., MM</h3>
                        <p class="text-white/80 text-sm">Camat Buahbatu</p>
                    </div>
                    <div class="p-4 sm:p-5 text-sm">
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-500"><i class="fas fa-calendar-alt mr-2 text-blue-500"></i> Menjabat</span>
                            <span class="font-semibold">2021</span>
                        </div>
                        <div class="flex justify-between pt-2">
                            <span class="text-gray-500"><i class="fas fa-graduation-cap mr-2 text-blue-500"></i> Pendidikan</span>
                            <span class="font-semibold">S2 Manajemen</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-2/3 w-full">
                <div class="bg-white rounded-2xl shadow-xl p-5 sm:p-7 relative">
                    <i class="fas fa-quote-left text-3xl sm:text-4xl text-blue-200 absolute top-4 right-4"></i>
                    <div class="sambutan-text text-gray-600 text-sm sm:text-base space-y-3">
                        <p>Segala Puji Syukur kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, yang dengan rahmat-Nya telah mengantarkan Institusi ini menjadi semakin eksis sesuai dengan visi dan misi Pemerintah Kota Bandung.</p>
                        <p>Dalam menghadapi tantangan zaman, terutama penyelenggaraan pemerintahan dalam rangka pelayanan publik sangat memerlukan Good Governance yang siap menjamin transparansi, efisiensi dan efektivitas melalui Teknologi Informasi dan Komunikasi (TIK).</p>
                        <p>Sebagai informasi kepada masyarakat, kami berharap masyarakat memahami tentang keberadaan Kantor Kecamatan Buahbatu yang telah membuat berbagai kebijakan, kegiatan, program serta rencana strategis yang disusun sesuai kebutuhan.</p>
                        <p>Kritik dan saran yang positif sangatlah kami harapkan, guna mencapai apa yang direncanakan bersama, membangun daerah yang kita cintai agar lebih baik.</p>
                    </div>
                    <div class="mt-5 p-4 bg-blue-50 rounded-xl border-l-4 border-blue-500">
                        <p class="italic text-blue-800 text-sm sm:text-base font-medium">"Bersama Masyarakat, Kita Wujudkan Buahbatu yang Maju, Religius, dan Berdaya Saing"</p>
                        <p class="text-xs text-blue-600 mt-2">- EDI JUHENDI, S.IP., MM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Kecamatan -->
<section id="profil-tentang" class="py-12 md:py-16 bg-white px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Profil</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Tentang Kecamatan</h2>
        </div>
        
        <div class="bg-gray-50 rounded-2xl p-5 sm:p-7 shadow-md">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-blue-800 mb-3">Sejarah Singkat</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">Kecamatan Buahbatu merupakan salah satu kecamatan di Kota Bandung, Jawa Barat. Memiliki luas wilayah ± 7,5 km² dengan jumlah penduduk sekitar 120.000 jiwa. Nama Buahbatu berasal dari sejarah daerah ini yang dahulu merupakan perkebunan buah-buahan dengan kondisi tanah berbatu.</p>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-bold text-blue-800 mb-3">Visi & Misi</h3>
                    <p class="text-gray-700 font-semibold text-sm">Visi:</p>
                    <p class="text-gray-600 text-sm mb-3">"Terwujudnya Kecamatan Buahbatu yang Maju, Religius, dan Berdaya Saing"</p>
                    <p class="text-gray-700 font-semibold text-sm">Misi:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Meningkatkan kualitas pelayanan publik</li>
                        <li>Mengembangkan potensi SDM masyarakat</li>
                        <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-6">
                <h3 class="text-lg sm:text-xl font-bold text-blue-800 mb-3">Wilayah Administrasi</h3>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="bg-white p-3 rounded-xl text-center shadow-sm">
                        <i class="fas fa-map-marker-alt text-blue-500 text-lg mb-1"></i>
                        <p class="font-semibold text-sm">Sekejati</p>
                    </div>
                    <div class="bg-white p-3 rounded-xl text-center shadow-sm">
                        <i class="fas fa-map-marker-alt text-blue-500 text-lg mb-1"></i>
                        <p class="font-semibold text-sm">Margasari</p>
                    </div>
                    <div class="bg-white p-3 rounded-xl text-center shadow-sm">
                        <i class="fas fa-map-marker-alt text-blue-500 text-lg mb-1"></i>
                        <p class="font-semibold text-sm">Jati Sari</p>
                    </div>
                    <div class="bg-white p-3 rounded-xl text-center shadow-sm">
                        <i class="fas fa-map-marker-alt text-blue-500 text-lg mb-1"></i>
                        <p class="font-semibold text-sm">Cijawura</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Struktur Organisasi -->
<section id="profil-struktur" class="py-12 md:py-16 bg-gray-50 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Profil</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Struktur Organisasi</h2>
        </div>
        
        <div class="text-center mb-6">
            <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white rounded-xl p-4 inline-block min-w-[200px] shadow-lg">
                <i class="fas fa-user-tie text-2xl mb-1"></i>
                <h3 class="font-bold text-base sm:text-lg">Camat Buahbatu</h3>
                <p class="text-xs text-blue-100">EDI JUHENDI, S.IP., MM</p>
            </div>
        </div>
        
        <div class="flex justify-center mb-5">
            <div class="w-px h-8 bg-gray-300"></div>
        </div>
        
        <div class="text-center mb-8">
            <div class="bg-white border-2 border-blue-500 rounded-xl p-3 inline-block min-w-[180px] shadow">
                <i class="fas fa-user text-xl text-blue-600 mb-1"></i>
                <h3 class="font-bold text-sm">Sekretaris Camat</h3>
                <p class="text-xs text-gray-500">Drs. H. AGUS SALIM, M.Si</p>
            </div>
        </div>
        
        <div class="flex justify-center mb-6">
            <div class="w-px h-8 bg-gray-300"></div>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-8">
            <div class="bg-white rounded-xl p-3 text-center shadow-md">
                <i class="fas fa-tasks text-xl text-blue-500 mb-1"></i>
                <h3 class="font-bold text-xs sm:text-sm">Kasi Pemerintahan</h3>
                <p class="text-[10px] text-gray-500">Dra. Hj. SITI N.</p>
            </div>
            <div class="bg-white rounded-xl p-3 text-center shadow-md">
                <i class="fas fa-chart-line text-xl text-green-500 mb-1"></i>
                <h3 class="font-bold text-xs sm:text-sm">Kasi Ekonomi</h3>
                <p class="text-[10px] text-gray-500">Ir. BAMBANG S.</p>
            </div>
            <div class="bg-white rounded-xl p-3 text-center shadow-md">
                <i class="fas fa-users text-xl text-purple-500 mb-1"></i>
                <h3 class="font-bold text-xs sm:text-sm">Kasi Kesra</h3>
                <p class="text-[10px] text-gray-500">Drs. H. ANDI K.</p>
            </div>
            <div class="bg-white rounded-xl p-3 text-center shadow-md">
                <i class="fas fa-shield-alt text-xl text-orange-500 mb-1"></i>
                <h3 class="font-bold text-xs sm:text-sm">Kasi Trantib</h3>
                <p class="text-[10px] text-gray-500">Drs. RUDI H.</p>
            </div>
        </div>
        
        <div class="mt-6">
            <h3 class="text-center font-bold text-base sm:text-lg text-blue-800 mb-4">Para Lurah</h3>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                <div class="bg-blue-50 rounded-lg p-2 text-center">
                    <p class="font-semibold text-xs sm:text-sm">Sekejati</p>
                    <p class="text-[10px]">Drs. AHMAD F.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-2 text-center">
                    <p class="font-semibold text-xs sm:text-sm">Margasari</p>
                    <p class="text-[10px]">Hj. YENI N.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-2 text-center">
                    <p class="font-semibold text-xs sm:text-sm">Jati Sari</p>
                    <p class="text-[10px]">Drs. RACHMAT H.</p>
                </div>
                <div class="bg-blue-50 rounded-lg p-2 text-center">
                    <p class="font-semibold text-xs sm:text-sm">Cijawura</p>
                    <p class="text-[10px]">H. ENDANG S.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Unggulan -->
<section id="layanan" class="py-12 md:py-16 gradient-primary px-4">
    <div class="container mx-auto">
        <div class="text-center mb-8">
            <span class="text-yellow-300 font-semibold text-xs uppercase tracking-wider bg-white/20 px-3 py-1 rounded-full">Layanan</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mt-3">Layanan <span class="text-yellow-300">Unggulan</span></h2>
            <p class="text-white/80 text-sm mt-2 max-w-md mx-auto">Berbagai layanan publik untuk masyarakat</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
            <div class="bg-white rounded-xl p-5 service-card cursor-pointer">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 shadow-md">
                    <i class="fas fa-id-card text-white text-xl"></i>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-2">Administrasi Kependudukan</h3>
                <p class="text-gray-500 text-xs sm:text-sm mb-3">Pengurusan KTP, KK, Akta Kelahiran, dan dokumen kependudukan.</p>
                <a href="#" class="text-blue-600 font-semibold text-xs inline-flex items-center gap-1">Selengkapnya <i class="fas fa-arrow-right text-[10px]"></i></a>
            </div>
            
            <div class="bg-white rounded-xl p-5 service-card cursor-pointer">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4 shadow-md">
                    <i class="fas fa-hand-holding-heart text-white text-xl"></i>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-2">Bantuan Sosial</h3>
                <p class="text-gray-500 text-xs sm:text-sm mb-3">Informasi dan penyaluran bantuan untuk warga kurang mampu.</p>
                <a href="#" class="text-blue-600 font-semibold text-xs inline-flex items-center gap-1">Selengkapnya <i class="fas fa-arrow-right text-[10px]"></i></a>
            </div>
            
            <div class="bg-white rounded-xl p-5 service-card cursor-pointer">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 shadow-md">
                    <i class="fas fa-chalkboard-user text-white text-xl"></i>
                </div>
                <h3 class="text-base sm:text-lg font-bold text-gray-800 mb-2">Pemberdayaan Masyarakat</h3>
                <p class="text-gray-500 text-xs sm:text-sm mb-3">Program pelatihan UMKM dan peningkatan kapasitas ekonomi.</p>
                <a href="#" class="text-blue-600 font-semibold text-xs inline-flex items-center gap-1">Selengkapnya <i class="fas fa-arrow-right text-[10px]"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- SOP Pelayanan -->
<section id="layanan-sop" class="py-12 md:py-16 bg-white px-4">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Layanan</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Standar Operasional Prosedur</h2>
        </div>
        
        <div class="space-y-3">
            <div class="bg-gray-50 rounded-xl p-4 hover:shadow-md transition">
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600 text-sm">1</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-base">Prosedur Pembuatan KTP</h3>
                        <p class="text-gray-500 text-xs mt-0.5">Pengurusan KTP baru atau perpanjangan</p>
                        <a href="#" class="text-blue-500 text-xs mt-1 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-4 hover:shadow-md transition">
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600 text-sm">2</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-base">Prosedur Pembuatan KK</h3>
                        <p class="text-gray-500 text-xs mt-0.5">Pembuatan Kartu Keluarga baru</p>
                        <a href="#" class="text-blue-500 text-xs mt-1 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-4 hover:shadow-md transition">
                <div class="flex items-start gap-3">
                    <div class="w-7 h-7 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600 text-sm">3</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm sm:text-base">Prosedur Pengurusan Izin Usaha</h3>
                        <p class="text-gray-500 text-xs mt-0.5">Pengurusan izin usaha mikro dan kecil</p>
                        <a href="#" class="text-blue-500 text-xs mt-1 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Standar Pelayanan -->
<section id="layanan-standar" class="py-12 md:py-16 bg-gray-50 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Layanan</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Standar Pelayanan</h2>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-xl shadow-md overflow-hidden">
                <thead class="gradient-primary text-white text-xs sm:text-sm">
                    <tr>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left">No</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left">Jenis Layanan</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left">Waktu</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left">Biaya</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-xs sm:text-sm">
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 sm:py-3 px-2 sm:px-4">1</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 font-semibold">Pembuatan KTP</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4">1-2 Hari</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 text-green-600">Gratis</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 sm:py-3 px-2 sm:px-4">2</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 font-semibold">Pembuatan KK</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4">1-2 Hari</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 text-green-600">Gratis</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 sm:py-3 px-2 sm:px-4">3</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 font-semibold">Akta Kelahiran</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4">3-5 Hari</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 text-green-600">Gratis</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 sm:py-3 px-2 sm:px-4">4</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4 font-semibold">Izin Usaha</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4">5-7 Hari</td>
                        <td class="py-2 sm:py-3 px-2 sm:px-4">Rp 0 - 500rb</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- PPID Section -->
<section id="ppid-utama" class="py-12 md:py-16 bg-white px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Informasi Publik</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">PPID Kecamatan</h2>
        </div>
        
        <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-5 mb-6">
            <h3 class="text-base sm:text-lg font-bold text-blue-800 mb-2">PPID Utama Kota Bandung</h3>
            <p class="text-gray-600 text-xs sm:text-sm mb-3">Mengelola informasi dan dokumentasi di tingkat Kota Bandung.</p>
            <div class="flex gap-2">
                <a href="#" class="bg-blue-600 text-white px-3 py-1.5 rounded-lg text-xs">Kunjungi</a>
                <a href="#" class="border border-blue-600 text-blue-600 px-3 py-1.5 rounded-lg text-xs">Info</a>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4 mb-6">
            <div class="bg-gray-50 rounded-xl p-4">
                <h3 class="font-bold text-blue-800 text-sm mb-2">Tentang PPID</h3>
                <p class="text-gray-500 text-xs">PPID bertanggung jawab di bidang penyimpanan dan pelayanan informasi publik sesuai UU No. 14 Tahun 2008.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-4">
                <h3 class="font-bold text-blue-800 text-sm mb-2">Daftar Informasi Publik</h3>
                <div class="grid grid-cols-2 gap-1 text-xs text-gray-600">
                    <span>✓ Profil Kecamatan</span>
                    <span>✓ Struktur Organisasi</span>
                    <span>✓ Program Kerja</span>
                    <span>✓ Laporan Keuangan</span>
                </div>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4">
            <div class="bg-gray-50 rounded-xl p-4">
                <h3 class="font-bold text-blue-800 text-sm mb-2">Indeks Kepuasan Masyarakat</h3>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600">87.5</div>
                    <p class="text-gray-500 text-xs">IKM 2025</p>
                    <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 87.5%"></div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-4">
                <h3 class="font-bold text-blue-800 text-sm mb-2">Informasi Digital Layanan</h3>
                <div class="space-y-1">
                    <a href="#" class="flex items-center gap-2 text-blue-600 text-xs">📱 Aplikasi SAPAWARI</a>
                    <a href="#" class="flex items-center gap-2 text-blue-600 text-xs">💬 WhatsApp Center</a>
                </div>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-4 mt-4">
            <div class="bg-gray-50 rounded-xl p-4">
                <h3 class="font-bold text-blue-800 text-sm mb-3">Permohonan Informasi Online</h3>
                <form class="space-y-2">
                    <input type="text" placeholder="Nama" class="w-full p-2 border rounded-lg text-sm">
                    <input type="email" placeholder="Email" class="w-full p-2 border rounded-lg text-sm">
                    <input type="text" placeholder="Informasi yang diminta" class="w-full p-2 border rounded-lg text-sm">
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg text-sm">Ajukan</button>
                </form>
            </div>
            <div class="bg-gray-50 rounded-xl p-4">
                <h3 class="font-bold text-blue-800 text-sm mb-3">Pengajuan Keberatan Online</h3>
                <form class="space-y-2">
                    <input type="text" placeholder="Nama" class="w-full p-2 border rounded-lg text-sm">
                    <input type="text" placeholder="No. Registrasi" class="w-full p-2 border rounded-lg text-sm">
                    <textarea rows="2" placeholder="Alasan keberatan" class="w-full p-2 border rounded-lg text-sm"></textarea>
                    <button class="w-full bg-red-600 text-white py-2 rounded-lg text-sm">Ajukan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Galeri -->
<section id="galeri" class="py-12 md:py-16 bg-gray-50 px-4">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Dokumentasi</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Galeri Kegiatan</h2>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
            <div class="bg-gray-300 rounded-xl aspect-square flex items-center justify-center shadow-md">
                <i class="fas fa-image text-3xl text-gray-500"></i>
            </div>
            <div class="bg-gray-300 rounded-xl aspect-square flex items-center justify-center shadow-md">
                <i class="fas fa-image text-3xl text-gray-500"></i>
            </div>
            <div class="bg-gray-300 rounded-xl aspect-square flex items-center justify-center shadow-md">
                <i class="fas fa-image text-3xl text-gray-500"></i>
            </div>
            <div class="bg-gray-300 rounded-xl aspect-square flex items-center justify-center shadow-md">
                <i class="fas fa-image text-3xl text-gray-500"></i>
            </div>
        </div>
        
        <div class="text-center mt-6">
            <a href="#" class="text-blue-600 font-semibold text-sm inline-flex items-center gap-1">Lihat Galeri Lengkap <i class="fas fa-arrow-right text-xs"></i></a>
        </div>
    </div>
</section>

<!-- Info Kegiatan -->
<section id="kegiatan" class="py-12 md:py-16 bg-white px-4">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Informasi</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Info Kegiatan</h2>
        </div>
        
        <div class="space-y-4">
            <div class="flex flex-col sm:flex-row gap-3 bg-gray-50 rounded-xl p-4">
                <div class="sm:w-24 bg-blue-600 rounded-lg p-2 text-center text-white">
                    <span class="text-xl font-bold">15</span>
                    <p class="text-xs">Mei 2026</p>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 text-sm sm:text-base">Sosialisasi Program Bantuan Sosial</h3>
                    <p class="text-gray-500 text-xs mt-1">Bertempat di Aula Kecamatan Buahbatu</p>
                    <a href="#" class="text-blue-500 text-xs mt-1 inline-block">Selengkapnya →</a>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 bg-gray-50 rounded-xl p-4">
                <div class="sm:w-24 bg-green-600 rounded-lg p-2 text-center text-white">
                    <span class="text-xl font-bold">10</span>
                    <p class="text-xs">Mei 2026</p>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 text-sm sm:text-base">Pelatihan Digital Marketing UMKM</h3>
                    <p class="text-gray-500 text-xs mt-1">Bekerja sama dengan Disperindag Kota Bandung</p>
                    <a href="#" class="text-blue-500 text-xs mt-1 inline-block">Selengkapnya →</a>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 bg-gray-50 rounded-xl p-4">
                <div class="sm:w-24 bg-purple-600 rounded-lg p-2 text-center text-white">
                    <span class="text-xl font-bold">5</span>
                    <p class="text-xs">Mei 2026</p>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-800 text-sm sm:text-base">Bakti Sosial Kesehatan Gratis</h3>
                    <p class="text-gray-500 text-xs mt-1">Cek kesehatan dan konsultasi dokter gratis</p>
                    <a href="#" class="text-blue-500 text-xs mt-1 inline-block">Selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pengumuman -->
<section id="pengumuman" class="py-12 md:py-16 bg-gray-50 px-4">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Informasi</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Pengumuman</h2>
        </div>
        
        <div class="space-y-3">
            <div class="bg-white rounded-xl p-4 border-l-4 border-yellow-500 shadow-sm">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div>
                        <span class="text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded-full">Penting</span>
                        <h3 class="font-bold text-sm mt-2">Pendaftaran Bantuan Sosial 2026 Dibuka</h3>
                    </div>
                    <span class="text-xs text-gray-400">30 April 2026</span>
                </div>
            </div>
            <div class="bg-white rounded-xl p-4 border-l-4 border-green-500 shadow-sm">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div>
                        <span class="text-xs bg-green-100 text-green-600 px-2 py-0.5 rounded-full">Info</span>
                        <h3 class="font-bold text-sm mt-2">Jadwal Pelayanan Pasca Lebaran</h3>
                    </div>
                    <span class="text-xs text-gray-400">28 April 2026</span>
                </div>
            </div>
            <div class="bg-white rounded-xl p-4 border-l-4 border-blue-500 shadow-sm">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div>
                        <span class="text-xs bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full">Lowongan</span>
                        <h3 class="font-bold text-sm mt-2">Rekrutmen Tenaga Kontrak</h3>
                    </div>
                    <span class="text-xs text-gray-400">25 April 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-12 md:py-16 bg-white px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-8">
            <span class="text-blue-600 font-semibold text-xs uppercase tracking-wider bg-blue-50 px-3 py-1 rounded-full">Hubungi Kami</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mt-3">Kontak & Lokasi</h2>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-white"></i>
                    </div>
                    <h3 class="font-bold">Alamat Kantor</h3>
                </div>
                <p class="text-gray-600 text-sm">Jl. Buahbatu No. 123, Kelurahan Sekejati, Kecamatan Buahbatu, Kota Bandung 40286</p>
                
                <div class="mt-5 space-y-3 text-sm">
                    <div class="flex items-center gap-3"><i class="fas fa-phone-alt text-blue-500 w-5"></i> (022) 1234567</div>
                    <div class="flex items-center gap-3"><i class="fas fa-envelope text-blue-500 w-5"></i> kecamatan.buahbatu@bandung.go.id</div>
                    <div class="flex items-center gap-3"><i class="fas fa-clock text-blue-500 w-5"></i> Senin - Jumat: 08:00 - 16:00</div>
                </div>
            </div>
            
            <div class="bg-gray-50 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-green-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-paper-plane text-white"></i>
                    </div>
                    <h3 class="font-bold">Kirim Pesan</h3>
                </div>
                <form class="space-y-3">
                    <input type="text" placeholder="Nama" class="w-full p-2 border rounded-lg text-sm">
                    <input type="email" placeholder="Email" class="w-full p-2 border rounded-lg text-sm">
                    <textarea rows="3" placeholder="Pesan" class="w-full p-2 border rounded-lg text-sm"></textarea>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg text-sm">Kirim</button>
                </form>
            </div>
        </div>
        
        <div class="mt-6 bg-gray-200 rounded-xl h-48 flex items-center justify-center">
            <div class="text-center">
                <i class="fas fa-map-marked-alt text-3xl text-gray-400 mb-2"></i>
                <p class="text-gray-500 text-sm">Google Maps</p>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top -->
<a href="#" class="fixed bottom-5 right-5 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg active:scale-95 transition z-50">
    <i class="fas fa-arrow-up text-sm"></i>
</a>

@endsection