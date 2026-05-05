@extends('admin.layouts.admin')

@section('page-title', 'Edit Kegiatan')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-2xl">
    <div class="p-6 border-b border-gray-200"><h2 class="font-bold text-lg">Edit Kegiatan</h2></div>
    <form method="POST" action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" enctype="multipart/form-data" class="p-6 space-y-5">
        @csrf @method('PUT')
        <div><label class="block font-semibold mb-2">Judul Kegiatan</label><input type="text" name="judul" value="{{ old('judul', $kegiatan->judul) }}" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Deskripsi</label><textarea name="deskripsi" rows="4" required class="w-full p-3 border border-gray-300 rounded-lg">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea></div>
        <div><label class="block font-semibold mb-2">Tanggal</label><input type="date" name="tanggal" value="{{ old('tanggal', $kegiatan->tanggal->format('Y-m-d')) }}" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Gambar</label><input type="file" name="gambar" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg">@if($kegiatan->gambar)<p class="text-gray-400 text-sm mt-1">Gambar saat ini: {{ $kegiatan->gambar }}</p>@endif</div>
        <div><label class="block font-semibold mb-2">Status</label><select name="aktif" class="w-full p-3 border border-gray-300 rounded-lg"><option value="1" {{ $kegiatan->aktif ? 'selected' : '' }}>Aktif</option><option value="0" {{ !$kegiatan->aktif ? 'selected' : '' }}>Nonaktif</option></select></div>
        <div class="flex justify-end space-x-3"><a href="{{ route('admin.kegiatan') }}" class="px-6 py-2 border rounded-lg">Batal</a><button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Simpan Perubahan</button></div>
    </form>
</div>
@endsection