@extends('admin.layouts.admin')

@section('page-title', 'Edit Pengumuman')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-2xl">
    <div class="p-6 border-b border-gray-200"><h2 class="font-bold text-lg">Edit Pengumuman</h2></div>
    <form method="POST" action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" class="p-6 space-y-5">
        @csrf @method('PUT')
        <div><label class="block font-semibold mb-2">Judul</label><input type="text" name="judul" value="{{ old('judul', $pengumuman->judul) }}" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Isi Pengumuman</label><textarea name="isi" rows="5" required class="w-full p-3 border border-gray-300 rounded-lg">{{ old('isi', $pengumuman->isi) }}</textarea></div>
        <div><label class="block font-semibold mb-2">Kategori</label><input type="text" name="kategori" value="{{ old('kategori', $pengumuman->kategori) }}" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Tanggal</label><input type="date" name="tanggal" value="{{ old('tanggal', $pengumuman->tanggal->format('Y-m-d')) }}" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Penting?</label><select name="penting" class="w-full p-3 border border-gray-300 rounded-lg"><option value="0" {{ !$pengumuman->penting ? 'selected' : '' }}>Tidak</option><option value="1" {{ $pengumuman->penting ? 'selected' : '' }}>Ya, penting</option></select></div>
        <div><label class="block font-semibold mb-2">Status</label><select name="aktif" class="w-full p-3 border border-gray-300 rounded-lg"><option value="1" {{ $pengumuman->aktif ? 'selected' : '' }}>Aktif</option><option value="0" {{ !$pengumuman->aktif ? 'selected' : '' }}>Nonaktif</option></select></div>
        <div class="flex justify-end space-x-3"><a href="{{ route('admin.pengumuman') }}" class="px-6 py-2 border rounded-lg">Batal</a><button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Simpan Perubahan</button></div>
    </form>
</div>
@endsection