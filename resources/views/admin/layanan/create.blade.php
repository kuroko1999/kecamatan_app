@extends('admin.layouts.admin')

@section('page-title', 'Tambah Layanan')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-2xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="font-bold text-lg">Tambah Layanan Baru</h2>
    </div>
    
    <form method="POST" action="{{ route('admin.layanan.store') }}" class="p-6 space-y-5">
        @csrf
        
        <div>
            <label class="block font-semibold mb-2">Nama Layanan</label>
            <input type="text" name="nama" value="{{ old('nama') }}" required class="w-full p-3 border border-gray-300 rounded-lg">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Icon (Font Awesome)</label>
            <input type="text" name="icon" value="{{ old('icon', 'fas fa-id-card') }}" required class="w-full p-3 border border-gray-300 rounded-lg">
            <p class="text-gray-400 text-sm mt-1">Contoh: fas fa-id-card, fas fa-hand-holding-heart, fas fa-chalkboard-user</p>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="3" required class="w-full p-3 border border-gray-300 rounded-lg">{{ old('deskripsi') }}</textarea>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Link (opsional)</label>
            <input type="text" name="link" value="{{ old('link') }}" class="w-full p-3 border border-gray-300 rounded-lg">
        </div>
        
        <div class="grid md:grid-cols-2 gap-5">
            <div>
                <label class="block font-semibold mb-2">Urutan</label>
                <input type="number" name="urutan" value="{{ old('urutan', 0) }}" class="w-full p-3 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block font-semibold mb-2">Status</label>
                <select name="aktif" class="w-full p-3 border border-gray-300 rounded-lg">
                    <option value="1">Aktif</option>
                    <option value="0">Nonaktif</option>
                </select>
            </div>
        </div>
        
        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.layanan') }}" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection