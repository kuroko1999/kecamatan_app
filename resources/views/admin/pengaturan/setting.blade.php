@extends('admin.layouts.admin')

@section('page-title', 'Pengaturan Website')

@section('content')
<div class="grid md:grid-cols-2 gap-6">
    <!-- Form Pengaturan Umum -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h2 class="font-bold text-lg">Pengaturan Umum</h2>
            <p class="text-gray-500 text-sm">Edit nama instansi dan tagline</p>
        </div>
        
        <form method="POST" action="{{ route('admin.setting.update') }}" enctype="multipart/form-data" class="p-6 space-y-5">
            @csrf
            
            <div>
                <label class="block font-semibold mb-2">Nama Instansi</label>
                <input type="text" name="site_name" value="{{ $site_name }}" required class="w-full p-3 border border-gray-300 rounded-lg">
                <p class="text-gray-400 text-sm mt-1">Contoh: Kabupaten Mukomuko</p>
            </div>
            
            <div>
                <label class="block font-semibold mb-2">Tagline</label>
                <input type="text" name="site_tagline" value="{{ $site_tagline }}" class="w-full p-3 border border-gray-300 rounded-lg">
                <p class="text-gray-400 text-sm mt-1">Contoh: Provinsi Bengkulu</p>
            </div>
            
            <div>
                <label class="block font-semibold mb-2">Hero Background Image</label>
                <input type="file" name="hero_image" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg">
                <p class="text-gray-400 text-sm mt-1">Rekomendasi ukuran: 1920x1080 pixel</p>
            </div>
            
            @if($hero_image && file_exists(public_path('storage/'.$hero_image)))
            <div class="mt-2">
                <img src="{{ asset('storage/'.$hero_image) }}" class="w-full h-40 object-cover rounded-lg">
            </div>
            @endif
            
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    
    <!-- Form Pengaturan Statistik -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h2 class="font-bold text-lg">Pengaturan Statistik</h2>
            <p class="text-gray-500 text-sm">Edit angka statistik yang tampil di website</p>
        </div>
        
        <form method="POST" action="{{ route('admin.statistik.update') }}" class="p-6 space-y-5">
            @csrf
            
            <div>
                <label class="block font-semibold mb-2">Jumlah Penduduk</label>
                <div class="flex gap-2">
                    <input type="number" name="stat_penduduk" value="{{ $stat_penduduk }}" required class="flex-1 p-3 border border-gray-300 rounded-lg">
                    <span class="p-3 bg-gray-100 rounded-lg">Jiwa</span>
                </div>
                <p class="text-gray-400 text-sm mt-1">Contoh: 200000 (otomatis ditampilkan sebagai 200K+)</p>
            </div>
            
            <div>
                <label class="block font-semibold mb-2">Jumlah Desa</label>
                <div class="flex gap-2">
                    <input type="number" name="stat_kecamatan" value="{{ $stat_kecamatan }}" required class="flex-1 p-3 border border-gray-300 rounded-lg">
                    <span class="p-3 bg-gray-100 rounded-lg">Desa</span>
                </div>
            </div>
            
            <div>
                <label class="block font-semibold mb-2">Jumlah Layanan</label>
                <div class="flex gap-2">
                    <input type="number" name="stat_layanan" value="{{ $stat_layanan }}" required class="flex-1 p-3 border border-gray-300 rounded-lg">
                    <span class="p-3 bg-gray-100 rounded-lg">Layanan</span>
                </div>
            </div>
            
            <div>
                <label class="block font-semibold mb-2">Tingkat Kepuasan</label>
                <div class="flex gap-2">
                    <input type="number" name="stat_kepuasan" value="{{ $stat_kepuasan }}" required class="flex-1 p-3 border border-gray-300 rounded-lg" step="1" min="0" max="100">
                    <span class="p-3 bg-gray-100 rounded-lg">%</span>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Statistik</button>
            </div>
        </form>
    </div>
</div>
@endsection