@extends('admin.layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-blue-100 text-sm">Total Layanan</p>
                <p class="text-4xl font-bold mt-2">{{ \App\Models\Layanan::count() }}</p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-server text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-blue-100 text-sm">
            <i class="fas fa-check-circle mr-1"></i> Aktif: {{ \App\Models\Layanan::where('aktif', true)->count() }}
        </div>
    </div>
    
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-green-100 text-sm">Total Kegiatan</p>
                <p class="text-4xl font-bold mt-2">{{ \App\Models\Kegiatan::count() }}</p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-green-100 text-sm">
            <i class="fas fa-check-circle mr-1"></i> Aktif: {{ \App\Models\Kegiatan::where('aktif', true)->count() }}
        </div>
    </div>
    
    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-yellow-100 text-sm">Total Pengumuman</p>
                <p class="text-4xl font-bold mt-2">{{ \App\Models\Pengumuman::count() }}</p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-bullhorn text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-yellow-100 text-sm">
            <i class="fas fa-exclamation-triangle mr-1"></i> Penting: {{ \App\Models\Pengumuman::where('penting', true)->count() }}
        </div>
    </div>
    
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-purple-100 text-sm">Total Berita</p>
                <p class="text-4xl font-bold mt-2">{{ \App\Models\Berita::count() }}</p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-newspaper text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-purple-100 text-sm">
            <i class="fas fa-eye mr-1"></i> Total Views: {{ number_format(\App\Models\Berita::sum('views')) }}
        </div>
    </div>
</div>

<!-- Visitor Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-indigo-100 text-sm">Total Pengunjung</p>
                <p class="text-4xl font-bold mt-2">{{ number_format($totalVisitors ?? \App\Models\Visitor::count()) }}</p>
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
                <p class="text-4xl font-bold mt-2">{{ number_format($todayVisitors ?? \App\Models\Visitor::getTodayVisitors()) }}</p>
            </div>
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                <i class="fas fa-calendar-day text-2xl"></i>
            </div>
        </div>
        <div class="mt-4 text-teal-100 text-sm">
            <i class="fas fa-clock mr-1"></i> {{ now()->format('d M Y') }}
        </div>
    </div>
    
    <div class="bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-rose-100 text-sm">Pengunjung Unik</p>
                <p class="text-4xl font-bold mt-2">{{ number_format($uniqueVisitors ?? \App\Models\Visitor::getUniqueVisitors()) }}</p>
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
                <p class="text-4xl font-bold mt-2">{{ number_format(ceil(($totalVisitors ?? \App\Models\Visitor::count()) / 30)) }}</p>
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
            <a href="{{ route('admin.visitors') }}" class="text-blue-600 text-sm hover:underline">Detail →</a>
        </div>
        @php
            $deviceDesktop = ($deviceStats['Desktop'] ?? 0);
            $deviceMobile = ($deviceStats['Mobile'] ?? 0);
            $deviceTablet = ($deviceStats['Tablet'] ?? 0);
            $totalDevices = $deviceDesktop + $deviceMobile + $deviceTablet;
        @endphp
        <div class="space-y-4">
            <div>
                <div class="flex justify-between mb-1"><span>🖥️ Desktop</span><span>{{ number_format($deviceDesktop) }} ({{ $totalDevices > 0 ? round(($deviceDesktop / $totalDevices) * 100) : 0 }}%)</span></div>
                <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-blue-600 h-2 rounded-full" style="width: {{ $totalDevices > 0 ? ($deviceDesktop / $totalDevices) * 100 : 0 }}%"></div></div>
            </div>
            <div>
                <div class="flex justify-between mb-1"><span>📱 Mobile</span><span>{{ number_format($deviceMobile) }} ({{ $totalDevices > 0 ? round(($deviceMobile / $totalDevices) * 100) : 0 }}%)</span></div>
                <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-green-600 h-2 rounded-full" style="width: {{ $totalDevices > 0 ? ($deviceMobile / $totalDevices) * 100 : 0 }}%"></div></div>
            </div>
            <div>
                <div class="flex justify-between mb-1"><span>📟 Tablet</span><span>{{ number_format($deviceTablet) }} ({{ $totalDevices > 0 ? round(($deviceTablet / $totalDevices) * 100) : 0 }}%)</span></div>
                <div class="w-full bg-gray-200 rounded-full h-2"><div class="bg-purple-600 h-2 rounded-full" style="width: {{ $totalDevices > 0 ? ($deviceTablet / $totalDevices) * 100 : 0 }}%"></div></div>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg">Statistik Browser</h3>
            <a href="{{ route('admin.visitors') }}" class="text-blue-600 text-sm hover:underline">Detail →</a>
        </div>
        <div class="grid grid-cols-2 gap-3">
            @foreach($browserStats as $browser => $count)
            <div class="flex justify-between items-center p-2 bg-gray-50 rounded-lg">
                <span class="text-sm">
                    @if($browser == 'Chrome') 🌐 @elseif($browser == 'Firefox') 🦊 @elseif($browser == 'Safari') 🧭 @elseif($browser == 'Edge') 💠 @elseif($browser == 'Opera') 🎭 @else 📄 @endif
                    {{ $browser }}
                </span>
                <span class="font-semibold">{{ number_format($count) }}</span>
            </div>
            @endforeach
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
            <a href="{{ route('admin.struktur') }}" class="text-blue-600 text-sm hover:underline">Kelola →</a>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse(\App\Models\StrukturOrganisasi::where('aktif', true)->orderBy('urutan')->take(5)->get() as $struktur)
            <div class="p-4 flex items-center gap-3 hover:bg-gray-50">
                @if($struktur->gambar)
                <img src="{{ asset('storage/'.$struktur->gambar) }}" class="w-10 h-10 rounded-full object-cover">
                @else
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center"><i class="fas fa-user text-gray-500"></i></div>
                @endif
                <div class="flex-1">
                    <p class="font-semibold text-sm">{{ $struktur->jabatan }}</p>
                    <p class="text-gray-500 text-xs">{{ $struktur->nama }}</p>
                </div>
                <span class="text-xs text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
            </div>
            @empty
            <div class="p-8 text-center text-gray-400">Belum ada data struktur</div>
            @endforelse
        </div>
    </div>
    
    <!-- Berita Terbaru -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center">
            <div>
                <h3 class="font-bold text-lg">Berita Terbaru</h3>
                <p class="text-gray-500 text-sm">Update informasi terbaru</p>
            </div>
            <a href="{{ route('admin.berita') }}" class="text-blue-600 text-sm hover:underline">Kelola →</a>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse(\App\Models\Berita::latest()->take(5)->get() as $berita)
            <div class="p-4 flex items-center gap-3 hover:bg-gray-50">
                @if($berita->gambar)
                <img src="{{ asset('storage/'.$berita->gambar) }}" class="w-12 h-12 rounded-lg object-cover">
                @else
                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center"><i class="fas fa-image text-gray-400"></i></div>
                @endif
                <div class="flex-1">
                    <p class="font-semibold text-sm">{{ \Illuminate\Support\Str::limit($berita->judul, 40) }}</p>
                    <div class="flex gap-3 text-xs text-gray-400 mt-1">
                        <span><i class="fas fa-user mr-1"></i> {{ $berita->penulis }}</span>
                        <span><i class="fas fa-eye mr-1"></i> {{ number_format($berita->views) }}</span>
                        <span><i class="fas fa-calendar mr-1"></i> {{ $berita->created_at->format('d/m/Y') }}</span>
                    </div>
                </div>
                <span class="text-xs {{ $berita->aktif ? 'text-green-600 bg-green-100' : 'text-red-600 bg-red-100' }} px-2 py-0.5 rounded-full">
                    {{ $berita->aktif ? 'Aktif' : 'Nonaktif' }}
                </span>
            </div>
            @empty
            <div class="p-8 text-center text-gray-400">Belum ada berita</div>
            @endforelse
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
        <a href="{{ route('admin.visitors') }}" class="text-blue-600 text-sm hover:underline">Lihat Semua →</a>
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
                @forelse($recentVisitors ?? \App\Models\Visitor::latest()->take(10)->get() as $visitor)
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3 text-sm">{{ $visitor->ip_address ?? '-' }}</td>
                    <td class="p-3 text-sm">
                        <span class="px-2 py-1 rounded-full text-xs {{ $visitor->device == 'Mobile' ? 'bg-green-100 text-green-600' : ($visitor->device == 'Tablet' ? 'bg-purple-100 text-purple-600' : 'bg-blue-100 text-blue-600') }}">
                            {{ $visitor->device ?? '-' }}
                        </span>
                    </td>
                    <td class="p-3 text-sm">{{ $visitor->browser ?? '-' }}</td>
                    <td class="p-3 text-sm">{{ $visitor->os ?? '-' }}</td>
                    <td class="p-3 text-sm max-w-xs truncate">{{ $visitor->page_url ?? '-' }}</td>
                    <td class="p-3 text-sm">{{ $visitor->created_at ? $visitor->created_at->diffForHumans() : '-' }}</td>
                </tr>
                @empty
                <tr><td colspan="6" class="p-8 text-center text-gray-400">Belum ada data pengunjung</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Menu Cepat -->
    <div class="bg-white rounded-2xl shadow-sm p-5">
        <h3 class="font-bold text-lg mb-4 flex items-center gap-2"><i class="fas fa-bolt text-yellow-500"></i> Menu Cepat</h3>
        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('admin.profil') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-building text-blue-500 text-xl mb-1 block"></i>
                <span class="text-sm">Profil</span>
            </a>
            <a href="{{ route('admin.layanan') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-server text-green-500 text-xl mb-1 block"></i>
                <span class="text-sm">Layanan</span>
            </a>
            <a href="{{ route('admin.kegiatan') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-calendar-alt text-yellow-500 text-xl mb-1 block"></i>
                <span class="text-sm">Kegiatan</span>
            </a>
            <a href="{{ route('admin.pengumuman') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-bullhorn text-purple-500 text-xl mb-1 block"></i>
                <span class="text-sm">Pengumuman</span>
            </a>
            <a href="{{ route('admin.struktur') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-sitemap text-indigo-500 text-xl mb-1 block"></i>
                <span class="text-sm">Struktur</span>
            </a>
            <a href="{{ route('admin.berita') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-newspaper text-pink-500 text-xl mb-1 block"></i>
                <span class="text-sm">Berita</span>
            </a>
            <a href="{{ route('admin.galeri') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-images text-orange-500 text-xl mb-1 block"></i>
                <span class="text-sm">Galeri</span>
            </a>
            <a href="{{ route('admin.setting') }}" class="p-3 bg-gray-50 rounded-xl text-center hover:bg-blue-50 transition group">
                <i class="fas fa-cog text-gray-500 text-xl mb-1 block"></i>
                <span class="text-sm">Pengaturan</span>
            </a>
        </div>
    </div>
    
    <!-- Pengaturan Cepat -->
    <div class="bg-white rounded-2xl shadow-sm p-5">
        <h3 class="font-bold text-lg mb-4 flex items-center gap-2"><i class="fas fa-sliders-h text-gray-500"></i> Pengaturan</h3>
        <div class="space-y-3">
            <a href="{{ route('admin.warna') }}" class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-blue-50 transition">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-lg"></div>
                    <span>Warna Website</span>
                </div>
                <i class="fas fa-chevron-right text-gray-400"></i>
            </a>
            <a href="{{ route('admin.visitors') }}" class="flex items-center justify-between p-3 bg-gray-50 rounded-xl hover:bg-blue-50 transition">
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
                <span class="text-xs {{ \Illuminate\Support\Facades\Storage::disk('public')->exists('hero') ? 'text-green-600 bg-green-100' : 'text-red-600 bg-red-100' }} px-2 py-0.5 rounded-full">
                    {{ \Illuminate\Support\Facades\Storage::disk('public')->exists('hero') ? 'Link OK' : 'Belum link' }}
                </span>
            </div>
        </div>
    </div>
    
    <!-- Info Sistem -->
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-5 text-white">
        <h3 class="font-bold text-lg mb-4 flex items-center gap-2"><i class="fas fa-info-circle"></i> Info Sistem</h3>
        <div class="space-y-2 text-sm">
            <div class="flex justify-between"><span class="text-gray-400">Laravel Version</span><span>{{ app()->version() }}</span></div>
            <div class="flex justify-between"><span class="text-gray-400">PHP Version</span><span>{{ phpversion() }}</span></div>
            <div class="flex justify-between"><span class="text-gray-400">Database</span><span>SQLite</span></div>
            <div class="flex justify-between"><span class="text-gray-400">Last Update</span><span>{{ now()->format('d/m/Y H:i') }}</span></div>
        </div>
        <div class="mt-4 pt-4 border-t border-gray-700">
            <a href="{{ url('/') }}" target="_blank" class="flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 py-2 rounded-lg transition">
                <i class="fas fa-external-link-alt"></i> Lihat Website
            </a>
        </div>
    </div>
</div>
@endsection