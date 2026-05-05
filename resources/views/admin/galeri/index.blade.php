@extends('admin.layouts.admin')

@section('page-title', 'Manajemen Galeri')

@section('content')
<div class="grid md:grid-cols-2 gap-6">
    <!-- Form Upload -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200"><h2 class="font-bold text-lg">Tambah Gambar Baru</h2></div>
        <form method="POST" action="{{ route('admin.galeri.store') }}" enctype="multipart/form-data" class="p-6 space-y-5">
            @csrf
            <div><label class="block font-semibold mb-2">Judul</label><input type="text" name="judul" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
            <div><label class="block font-semibold mb-2">Gambar</label><input type="file" name="gambar" accept="image/*" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
            <div><label class="block font-semibold mb-2">Kategori (opsional)</label><input type="text" name="kategori" class="w-full p-3 border border-gray-300 rounded-lg"></div>
            <div><label class="block font-semibold mb-2">Urutan</label><input type="number" name="urutan" value="0" class="w-full p-3 border border-gray-300 rounded-lg"></div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg w-full">Upload Gambar</button>
        </form>
    </div>
    
    <!-- List Gambar -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200"><h2 class="font-bold text-lg">Daftar Galeri</h2></div>
        <div class="p-6">
            <div class="grid grid-cols-3 gap-4">
                @forelse($galeri as $item)
                <div class="relative group">
                    <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                        @if($item->gambar && file_exists(public_path('storage/'.$item->gambar)))
                        <img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                        @else
                        <div class="w-full h-full flex items-center justify-center"><i class="fas fa-image text-3xl text-gray-400"></i></div>
                        @endif
                    </div>
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center rounded-lg">
                        <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-lg text-sm" onclick="return confirm('Hapus gambar ini?')">Hapus</button>
                        </form>
                    </div>
                    <p class="text-xs text-gray-500 mt-1 truncate">{{ $item->judul }}</p>
                </div>
                @empty
                <div class="col-span-3 text-center text-gray-500 py-8">Belum ada gambar</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection