@extends('admin.layouts.admin')

@section('page-title', 'Hero Image')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-2xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="font-bold text-lg">Pengaturan Hero Image</h2>
        <p class="text-gray-500 text-sm">Gambar background di halaman utama</p>
    </div>
    
    <div class="p-6">
        @if($heroImage && file_exists(public_path('storage/'.$heroImage)))
        <div class="mb-6">
            <label class="block font-semibold mb-2">Preview Saat Ini</label>
            <img src="{{ asset('storage/'.$heroImage) }}" class="w-full h-48 object-cover rounded-lg">
        </div>
        @endif
        
        <form method="POST" action="{{ route('admin.hero.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold mb-2">Upload Gambar Baru</label>
                <input type="file" name="hero_image" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg">
                <p class="text-gray-400 text-sm mt-1">Rekomendasi ukuran: 1920x1080 pixel</p>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection