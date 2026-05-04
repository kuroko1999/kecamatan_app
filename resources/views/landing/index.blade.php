@extends('layouts.app')

@section('title', 'Beranda - Kecamatan Buahbatu')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden gradient-bg">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-yellow-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center text-white">
        <div class="animate-fadeInUp">
            <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-6">
                <i class="fas fa-landmark mr-2"></i> Portal Resmi Kecamatan Buahbatu - Kota Bandung
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Kecamatan 
                <span class="text-yellow-300">Buahbatu</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-white/90 max-w-2xl mx-auto">
                Melayani dengan Hati, Menuju Bandung Juara
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#sambutan" class="group bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-4 px-8 rounded-full transition-all duration-300 inline-flex items-center gap-2 shadow-lg hover:shadow-xl">
                    <span>Sambutan Camat</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#layanan" class="group bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white font-bold py-4 px-8 rounded-full transition-all duration-300 inline-flex items-center gap-2 border border-white/30">
                    <span>Layanan Publik</span>
                    <i class="fas fa-info-circle group-hover:rotate-12 transition-transform"></i>
                </a>
            </div>
        </div>
        
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
            <a href="#sambutan" class="text-white/80 hover:text-white">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white relative -mt-20 z-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="stat-card rounded-2xl p-6 text-center text-white shadow-xl">
                <i class="fas fa-users text-4xl mb-3"></i>
                <div class="text-3xl font-bold mb-1">120.000+</div>
                <div class="text-sm opacity-90">Jumlah Penduduk</div>
            </div>
            <div class="stat-card rounded-2xl p-6 text-center text-white shadow-xl">
                <i class="fas fa-building text-4xl mb-3"></i>
                <div class="text-3xl font-bold mb-1">4</div>
                <div class="text-sm opacity-90">Kelurahan</div>
            </div>
            <div class="stat-card rounded-2xl p-6 text-center text-white shadow-xl">
                <i class="fas fa-file-alt text-4xl mb-3"></i>
                <div class="text-3xl font-bold mb-1">25+</div>
                <div class="text-sm opacity-90">Layanan Publik</div>
            </div>
            <div class="stat-card rounded-2xl p-6 text-center text-white shadow-xl">
                <i class="fas fa-smile text-4xl mb-3"></i>
                <div class="text-3xl font-bold mb-1">98%</div>
                <div class="text-sm opacity-90">Kepuasan Masyarakat</div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SAMBUTAN CAMAT ==================== -->
<section id="sambutan" class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Sambutan</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Kata Sambutan</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Camat Buahbatu menyampaikan pesan dan harapan untuk masyarakat</p>
        </div>
        
        <div class="flex flex-col md:flex-row gap-10 items-start">
            <div class="md:w-1/3">
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition-transform duration-500">
                    <div class="gradient-bg p-6 text-center">
                        <div class="w-32 h-32 mx-auto bg-white rounded-full flex items-center justify-center border-4 border-yellow-400 shadow-xl">
                            <i class="fas fa-user-tie text-6xl text-blue-900"></i>
                        </div>
                        <h3 class="font-bold text-2xl mt-4 text-white">EDI JUHENDI, S.IP., MM</h3>
                        <p class="text-white/90">Camat Buahbatu</p>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-gray-600"><i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Mulai Menjabat</span>
                            <span class="font-semibold text-gray-800">2021</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600"><i class="fas fa-graduation-cap mr-2 text-blue-600"></i> Pendidikan</span>
                            <span class="font-semibold text-gray-800">S2 Magister Manajemen</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="md:w-2/3">
                <div class="bg-white rounded-2xl shadow-xl p-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-100 to-transparent rounded-bl-full"></div>
                    <div class="relative z-10">
                        <i class="fas fa-quote-left text-4xl text-blue-200 mb-4"></i>
                        <div class="sambutan-text text-gray-700 space-y-4">
                            <p>Segala Puji Syukur kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, yang dengan rahmat-Nya telah mengantarkan Institusi ini menjadi sebuah Institusi yang semakin eksis sesuai dengan visi dan misi Pemerintah Kota Bandung. Dalam menghadapi tantangan zaman, terutama menghadapi penyelenggaraan pemerintahan dalam rangka pelayanan publik sangat memerlukan Good Governance yang siap menjamin transparansi, efisiensi dan efektivitas penyelenggaraan pemerintahan melalui Teknologi Informasi dan Komunikasi (TIK).</p>
                            <p>Sebagai informasi kepada masyarakat sehubungan dengan telah aktifnya content subdomain kecamatan Buahbatu, kami berharap kedepan agar masyarakat memahami tentang keberadaan Kantor Kecamatan Buahbatu Kota Bandung yang telah membuat beberapa kebijakan, kegiatan, program serta rencana strategis yang disusun sesuai dengan kebutuhan untuk masyarakat di bidang teknologi informasi untuk pelayanan dalam rangka pengembangan dan penerapan e-Government sebagai bagian dari kebijakan dan strategi nasional pemerintah guna mewujudkan kepemerintahan yang baik (good governance).</p>
                            <p>Oleh karena itu, kritik dan saran yang positif dan membangun sangatlah kami harapkan, agar kita dapat mencapai apa yang telah direncanakan dan kita cita-citakan bersama-sama, guna membangun daerah yang kita cintai ini agar lebih baik dan berkembang sebagaimana harapan kita bersama.</p>
                        </div>
                        <div class="mt-6 p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl border-l-4 border-blue-500">
                            <p class="italic text-blue-800 font-medium">"Bersama Masyarakat, Kita Wujudkan Buahbatu yang Maju, Religius, dan Berdaya Saing"</p>
                            <p class="text-sm text-blue-600 mt-2">- EDI JUHENDI, S.IP., MM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TENTANG KECAMATAN ==================== -->
<section id="profil-tentang" class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Profil</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Tentang Kecamatan</h2>
        </div>
        
        <div class="bg-gray-50 rounded-2xl p-8 shadow-lg">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-blue-800 mb-4">Sejarah Singkat</h3>
                    <p class="text-gray-700 leading-relaxed">Kecamatan Buahbatu merupakan salah satu kecamatan di Kota Bandung, Jawa Barat. Kecamatan ini memiliki luas wilayah ± 7,5 km² dengan jumlah penduduk sekitar 120.000 jiwa. Nama Buahbatu berasal dari sejarah daerah ini yang dahulu merupakan perkebunan buah-buahan dengan kondisi tanah yang berbatu.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-blue-800 mb-4">Visi & Misi</h3>
                    <p class="text-gray-700 font-semibold">Visi:</p>
                    <p class="text-gray-700 mb-3">"Terwujudnya Kecamatan Buahbatu yang Maju, Religius, dan Berdaya Saing"</p>
                    <p class="text-gray-700 font-semibold">Misi:</p>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Meningkatkan kualitas pelayanan publik</li>
                        <li>Mengembangkan potensi SDM masyarakat</li>
                        <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                        <li>Membangun infrastruktur yang mendukung ekonomi</li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8">
                <h3 class="text-2xl font-bold text-blue-800 mb-4">Wilayah Administrasi</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-white p-4 rounded-xl text-center shadow">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Sekejati</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl text-center shadow">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Margasari</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl text-center shadow">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Jati Sari</p>
                    </div>
                    <div class="bg-white p-4 rounded-xl text-center shadow">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Cijawura</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== STRUKTUR ORGANISASI ==================== -->
<section id="profil-struktur" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Profil</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Struktur Organisasi</h2>
            <p class="text-gray-600 mt-4">Bagan struktur organisasi Kecamatan Buahbatu</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <!-- Camat -->
            <div class="text-center mb-8">
                <div class="bg-gradient-to-r from-blue-700 to-blue-600 text-white rounded-xl p-5 inline-block min-w-[250px] shadow-lg">
                    <i class="fas fa-user-tie text-3xl mb-2"></i>
                    <h3 class="font-bold text-xl">Camat Buahbatu</h3>
                    <p class="text-sm">EDI JUHENDI, S.IP., MM</p>
                </div>
            </div>
            
            <!-- Garis penghubung -->
            <div class="flex justify-center mb-6">
                <div class="w-px h-10 bg-gray-400"></div>
            </div>
            
            <!-- Sekcam -->
            <div class="text-center mb-8">
                <div class="bg-white border-2 border-blue-600 rounded-xl p-4 inline-block min-w-[220px] shadow">
                    <i class="fas fa-user text-2xl mb-1 text-blue-600"></i>
                    <h3 class="font-bold text-lg">Sekretaris Camat</h3>
                    <p class="text-sm text-gray-600">Drs. H. AGUS SALIM, M.Si</p>
                </div>
            </div>
            
            <div class="flex justify-center mb-6">
                <div class="w-px h-10 bg-gray-400"></div>
            </div>
            
            <!-- 4 Kasi -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition">
                    <i class="fas fa-tasks text-3xl text-blue-600 mb-2"></i>
                    <h3 class="font-bold">Kasi Pemerintahan</h3>
                    <p class="text-sm text-gray-600">Dra. Hj. SITI NURBAYA</p>
                </div>
                <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition">
                    <i class="fas fa-chart-line text-3xl text-green-600 mb-2"></i>
                    <h3 class="font-bold">Kasi Ekonomi</h3>
                    <p class="text-sm text-gray-600">Ir. BAMBANG SUSANTO</p>
                </div>
                <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition">
                    <i class="fas fa-users text-3xl text-purple-600 mb-2"></i>
                    <h3 class="font-bold">Kasi Kesra</h3>
                    <p class="text-sm text-gray-600">Drs. H. ANDI KURNIAWAN</p>
                </div>
                <div class="bg-white rounded-xl p-4 text-center shadow-md hover:shadow-lg transition">
                    <i class="fas fa-tools text-3xl text-orange-600 mb-2"></i>
                    <h3 class="font-bold">Kasi Trantib</h3>
                    <p class="text-sm text-gray-600">Drs. RUDI HARTONO</p>
                </div>
            </div>
            
            <!-- 4 Lurah -->
            <div class="mt-10">
                <h3 class="text-center font-bold text-xl text-blue-800 mb-6">Para Lurah Se-Kecamatan Buahbatu</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="bg-blue-50 rounded-lg p-3 text-center">
                        <p class="font-semibold">Kelurahan Sekejati</p>
                        <p class="text-sm">Drs. AHMAD FAUZI</p>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-3 text-center">
                        <p class="font-semibold">Kelurahan Margasari</p>
                        <p class="text-sm">Hj. YENI NURAENI, S.Sos</p>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-3 text-center">
                        <p class="font-semibold">Kelurahan Jati Sari</p>
                        <p class="text-sm">Drs. RACHMAT HIDAYAT</p>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-3 text-center">
                        <p class="font-semibold">Kelurahan Cijawura</p>
                        <p class="text-sm">H. ENDANG SUKANDAR, S.IP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== LAYANAN ==================== -->
<section id="layanan" class="py-20 gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <span class="text-yellow-300 font-semibold text-sm uppercase tracking-wider">Layanan Publik</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mt-2">Layanan <span class="text-yellow-300">Unggulan</span></h2>
            <p class="text-white/80 mt-4 max-w-2xl mx-auto">Berbagai layanan publik untuk memudahkan masyarakat</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 service-card cursor-pointer">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-id-card text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Administrasi Kependudukan</h3>
                <p class="text-gray-600 mb-4">Pengurusan KTP, KK, Akta Kelahiran, Kematian, dan dokumen kependudukan lainnya.</p>
                <a href="#" class="text-blue-600 font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="bg-white rounded-2xl p-8 service-card cursor-pointer">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-file-signature text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Perizinan</h3>
                <p class="text-gray-600 mb-4">Pengurusan izin usaha, IMB, dan berbagai rekomendasi perizinan lainnya.</p>
                <a href="#" class="text-blue-600 font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="bg-white rounded-2xl p-8 service-card cursor-pointer">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-chalkboard-user text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Pemberdayaan Masyarakat</h3>
                <p class="text-gray-600 mb-4">Program pelatihan UMKM, keterampilan kerja, dan peningkatan ekonomi masyarakat.</p>
                <a href="#" class="text-blue-600 font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SOP PELAYANAN ==================== -->
<section id="layanan-sop" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Layanan</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Standar Operasional Prosedur</h2>
            <p class="text-gray-600 mt-4">SOP Pelayanan Kecamatan Buahbatu</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-4">
            <div class="bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600">1</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">Prosedur Pembuatan KTP</h3>
                        <p class="text-gray-600 text-sm mt-1">Pengurusan KTP baru atau perpanjangan</p>
                        <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600">2</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">Prosedur Pembuatan KK</h3>
                        <p class="text-gray-600 text-sm mt-1">Pembuatan Kartu Keluarga baru atau perubahan data</p>
                        <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600">3</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">Prosedur Pengurusan Izin Usaha</h3>
                        <p class="text-gray-600 text-sm mt-1">Pengurusan izin usaha mikro dan kecil</p>
                        <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-blue-600">4</span>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">Prosedur Bantuan Sosial</h3>
                        <p class="text-gray-600 text-sm mt-1">Pendaftaran dan verifikasi penerima bantuan sosial</p>
                        <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Download SOP →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== STANDAR PELAYANAN ==================== -->
<section id="layanan-standar" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Layanan</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Standar Pelayanan</h2>
            <p class="text-gray-600 mt-4">Standar pelayanan publik Kecamatan Buahbatu</p>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-xl shadow-lg overflow-hidden">
                <thead class="gradient-bg text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Jenis Layanan</th>
                        <th class="py-3 px-4 text-left">Waktu Pelayanan</th>
                        <th class="py-3 px-4 text-left">Biaya</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4 font-semibold">Pembuatan KTP</td>
                        <td class="py-3 px-4">1-2 Hari Kerja</td>
                        <td class="py-3 px-4 text-green-600">Gratis</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">2</td>
                        <td class="py-3 px-4 font-semibold">Pembuatan KK</td>
                        <td class="py-3 px-4">1-2 Hari Kerja</td>
                        <td class="py-3 px-4 text-green-600">Gratis</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">3</td>
                        <td class="py-3 px-4 font-semibold">Akta Kelahiran</td>
                        <td class="py-3 px-4">3-5 Hari Kerja</td>
                        <td class="py-3 px-4 text-green-600">Gratis</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">4</td>
                        <td class="py-3 px-4 font-semibold">Izin Usaha</td>
                        <td class="py-3 px-4">5-7 Hari Kerja</td>
                        <td class="py-3 px-4">Rp 0 - Rp 500.000</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">5</td>
                        <td class="py-3 px-4 font-semibold">IMB</td>
                        <td class="py-3 px-4">7-14 Hari Kerja</td>
                        <td class="py-3 px-4">Sesuai Perda</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="mt-6 p-4 bg-yellow-50 rounded-xl border-l-4 border-yellow-500">
            <p class="text-yellow-800 text-sm"><i class="fas fa-info-circle mr-2"></i> Semua layanan dilayani sesuai dengan Standar Pelayanan Minimal (SPM) yang berlaku.</p>
        </div>
    </div>
</section>

<!-- ==================== PPID SECTION ==================== -->
<section id="ppid-utama" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Informasi Publik</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">PPID Kecamatan Buahbatu</h2>
            <p class="text-gray-600 mt-4">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
        
        <div class="max-w-5xl mx-auto">
            <!-- PPID Utama -->
            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-2xl p-6 mb-8">
                <h3 class="text-2xl font-bold text-blue-800 mb-3">PPID Utama Kota Bandung</h3>
                <p class="text-gray-700 mb-3">PPID Utama Kota Bandung bertugas mengelola informasi dan dokumentasi di tingkat Kota Bandung. Masyarakat dapat mengakses informasi publik melalui PPID Utama.</p>
                <div class="flex gap-3 mt-4">
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">Kunjungi Website</a>
                    <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-lg text-sm hover:bg-blue-50 transition">Informasi Lebih Lanjut</a>
                </div>
            </div>
            
            <!-- Tentang PPID -->
            <div id="ppid-tentang" class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Tentang PPID</h3>
                <p class="text-gray-700">PPID (Pejabat Pengelola Informasi dan Dokumentasi) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan pelayanan informasi publik di Kecamatan Buahbatu. PPID dibentuk berdasarkan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</p>
            </div>
            
            <!-- Daftar Informasi Publik -->
            <div id="ppid-informasi" class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-blue-800 mb-3">Daftar Informasi Publik</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Profil Kecamatan</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Struktur Organisasi</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Program Kerja</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Laporan Keuangan</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Peraturan & Kebijakan</span>
                    </div>
                    <div class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-500 mt-1"></i>
                        <span>Data Statistik</span>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6">
                <!-- IKM -->
                <div id="ppid-ikm" class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Indeks Kepuasan Masyarakat</h3>
                    <div class="text-center mb-3">
                        <div class="text-5xl font-bold text-green-600">87.5</div>
                        <p class="text-gray-600">Indeks Kepuasan Masyarakat 2025</p>
                        <div class="w-full bg-gray-200 rounded-full h-3 mt-2">
                            <div class="bg-green-500 h-3 rounded-full" style="width: 87.5%"></div>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm">Kategori: <span class="font-semibold text-green-600">Sangat Baik (A)</span></p>
                    <a href="#" class="text-blue-500 text-sm mt-3 inline-block">Lihat Detail →</a>
                </div>
                
                <!-- Informasi Digital -->
                <div id="ppid-digital" class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Informasi Digital Layanan</h3>
                    <p class="text-gray-700 mb-3">Akses informasi layanan digital Kota Bandung:</p>
                    <div class="flex flex-col gap-2">
                        <a href="#" class="flex items-center gap-2 text-blue-600 hover:text-blue-800">📱 Aplikasi SAPAWARI <i class="fas fa-external-link-alt text-xs"></i></a>
                        <a href="#" class="flex items-center gap-2 text-blue-600 hover:text-blue-800">💬 Layanan WhatsApp Center <i class="fas fa-external-link-alt text-xs"></i></a>
                        <a href="#" class="flex items-center gap-2 text-blue-600 hover:text-blue-800">🌐 Portal Layanan Online <i class="fas fa-external-link-alt text-xs"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 mt-6">
                <!-- Permohonan Online -->
                <div id="ppid-permohonan" class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Permohonan Informasi Online</h3>
                    <p class="text-gray-700 mb-4">Ajukan permohonan informasi publik secara online:</p>
                    <form action="#" method="POST" class="space-y-3">
                        <input type="text" placeholder="Nama Lengkap" class="w-full p-2 border rounded-lg">
                        <input type="email" placeholder="Email" class="w-full p-2 border rounded-lg">
                        <input type="text" placeholder="Informasi yang Diminta" class="w-full p-2 border rounded-lg">
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Ajukan Permohonan</button>
                    </form>
                </div>
                
                <!-- Pengajuan Keberatan -->
                <div id="ppid-keberatan" class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Pengajuan Keberatan Online</h3>
                    <p class="text-gray-700 mb-4">Ajukan keberatan jika permohonan informasi ditolak:</p>
                    <form action="#" method="POST" class="space-y-3">
                        <input type="text" placeholder="Nama Lengkap" class="w-full p-2 border rounded-lg">
                        <input type="text" placeholder="Nomor Registrasi Permohonan" class="w-full p-2 border rounded-lg">
                        <textarea rows="3" placeholder="Alasan Keberatan" class="w-full p-2 border rounded-lg"></textarea>
                        <button class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">Ajukan Keberatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== GALERI ==================== -->
<section id="galeri" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Dokumentasi</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Galeri Kegiatan</h2>
            <p class="text-gray-600 mt-4">Dokumentasi kegiatan Kecamatan Buahbatu</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                <div class="bg-gray-300 h-48 flex items-center justify-center">
                    <i class="fas fa-image text-4xl text-gray-500"></i>
                </div>
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <span class="text-white font-semibold">Kegiatan Sosial</span>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                <div class="bg-gray-300 h-48 flex items-center justify-center">
                    <i class="fas fa-image text-4xl text-gray-500"></i>
                </div>
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <span class="text-white font-semibold">Rapat Koordinasi</span>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                <div class="bg-gray-300 h-48 flex items-center justify-center">
                    <i class="fas fa-image text-4xl text-gray-500"></i>
                </div>
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <span class="text-white font-semibold">Pelayanan Masyarakat</span>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                <div class="bg-gray-300 h-48 flex items-center justify-center">
                    <i class="fas fa-image text-4xl text-gray-500"></i>
                </div>
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <span class="text-white font-semibold">Kunjungan Kerja</span>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:gap-3 transition">Lihat Galeri Lengkap <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- ==================== INFO KEGIATAN ==================== -->
<section id="kegiatan" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Informasi</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Info Kegiatan</h2>
            <p class="text-gray-600 mt-4">Kegiatan terbaru di Kecamatan Buahbatu</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="flex flex-col md:flex-row gap-4 bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="md:w-32 bg-blue-600 rounded-lg p-3 text-center text-white">
                    <span class="text-2xl font-bold">15</span>
                    <p class="text-sm">Mei 2026</p>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-xl text-gray-800">Sosialisasi Program Bantuan Sosial</h3>
                    <p class="text-gray-600 mt-1">Bertempat di Aula Kecamatan Buahbatu, acara ini dihadiri oleh para lurah dan kader PKK se-Kecamatan Buahbatu.</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Selengkapnya →</a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="md:w-32 bg-green-600 rounded-lg p-3 text-center text-white">
                    <span class="text-2xl font-bold">10</span>
                    <p class="text-sm">Mei 2026</p>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-xl text-gray-800">Pelatihan Digital Marketing UMKM</h3>
                    <p class="text-gray-600 mt-1">Pelatihan bagi pelaku UMKM dalam memasarkan produk secara digital bekerja sama dengan Disperindag Kota Bandung.</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Selengkapnya →</a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 bg-gray-50 rounded-xl p-5 hover:shadow-lg transition">
                <div class="md:w-32 bg-purple-600 rounded-lg p-3 text-center text-white">
                    <span class="text-2xl font-bold">5</span>
                    <p class="text-sm">Mei 2026</p>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-xl text-gray-800">Bakti Sosial Kesehatan Gratis</h3>
                    <p class="text-gray-600 mt-1">Layanan kesehatan gratis berupa cek darah, konsultasi dokter, dan pembagian obat-obatan untuk warga.</p>
                    <a href="#" class="text-blue-500 text-sm mt-2 inline-block">Selengkapnya →</a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="#" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Lebih Banyak Kegiatan <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- ==================== PENGUMUMAN ==================== -->
<section id="pengumuman" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Informasi</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Pengumuman</h2>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-md p-5 mb-4 border-l-4 border-yellow-500">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">Penting</span>
                        <h3 class="font-bold text-lg mt-2">Pendaftaran Bantuan Sosial 2026 Dibuka</h3>
                        <p class="text-gray-600 mt-1">Pendaftaran bantuan sosial untuk warga kurang mampu dibuka hingga 31 Mei 2026.</p>
                    </div>
                    <span class="text-sm text-gray-400">30 April 2026</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-5 mb-4 border-l-4 border-green-500">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded-full">Info</span>
                        <h3 class="font-bold text-lg mt-2">Jadwal Pelayanan Pasca Lebaran</h3>
                        <p class="text-gray-600 mt-1">Pelayanan akan kembali normal pada tanggal 5 Mei 2026.</p>
                    </div>
                    <span class="text-sm text-gray-400">28 April 2026</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-5 mb-4 border-l-4 border-blue-500">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded-full">Lowongan</span>
                        <h3 class="font-bold text-lg mt-2">Rekrutmen Tenaga Kontrak</h3>
                        <p class="text-gray-600 mt-1">Dibuka rekrutmen tenaga kontrak untuk posisi administrasi.</p>
                    </div>
                    <span class="text-sm text-gray-400">25 April 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== KONTAK ==================== -->
<section id="kontak" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Hubungi Kami</span>
            <h2 class="text-4xl md:text-5xl font-bold gradient-text mt-2">Kontak & Lokasi</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-gray-50 rounded-2xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-xl">Alamat Kantor</h3>
                </div>
                <p class="text-gray-700">Jl. Buahbatu No. 123, Kelurahan Sekejati, Kecamatan Buahbatu, Kota Bandung, Jawa Barat 40286</p>
                
                <div class="mt-6 space-y-3">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-phone-alt text-blue-600 w-5"></i>
                        <span>(022) 1234567</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-blue-600 w-5"></i>
                        <span>kecamatan.buahbatu@bandung.go.id</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-clock text-blue-600 w-5"></i>
                        <span>Senin - Jumat: 08:00 - 16:00 WIB</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 rounded-2xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-paper-plane text-white text-xl"></i>
                    </div>
                    <h3 class="font-bold text-xl">Kirim Pesan</h3>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <input type="text" placeholder="Nama" class="w-full p-3 border rounded-lg mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="email" placeholder="Email" class="w-full p-3 border rounded-lg mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <textarea rows="3" placeholder="Pesan" class="w-full p-3 border rounded-lg mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Kirim Pesan</button>
                </form>
            </div>
        </div>
        
        <div class="mt-8 max-w-5xl mx-auto">
            <div class="bg-gray-200 rounded-xl h-64 flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map-marked-alt text-4xl text-gray-400 mb-2"></i>
                    <p class="text-gray-500">Google Maps akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<a href="#" class="fixed bottom-8 right-8 bg-blue-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-700 transition hover:scale-110 z-50">
    <i class="fas fa-arrow-up"></i>
</a>

@endsection