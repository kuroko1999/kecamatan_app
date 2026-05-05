@extends('admin.layouts.admin')

@section('page-title', 'Edit Berita')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-3xl mx-auto">
    <div class="p-6 border-b border-gray-200"><h2 class="font-bold text-lg">Edit Berita</h2></div>
    <form method="POST" action="{{ route('admin.berita.update', $berita->id) }}" enctype="multipart/form-data" class="p-6 space-y-5">
        @csrf @method('PUT')
        <div><label class="block font-semibold mb-2">Judul Berita</label><input type="text" name="judul" value="{{ $berita->judul }}" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Isi Berita</label><textarea name="isi" rows="10" required class="w-full p-3 border border-gray-300 rounded-lg">{{ $berita->isi }}</textarea></div>
        <div><label class="block font-semibold mb-2">Gambar</label><input type="file" name="gambar" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg">@if($berita->gambar)<p class="text-gray-400 text-sm mt-1">Gambar saat ini: {{ $berita->gambar }}</p>@endif</div>
        <div><label class="block font-semibold mb-2">Penulis</label><input type="text" name="penulis" value="{{ $berita->penulis }}" class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Status</label><select name="aktif" class="w-full p-3 border border-gray-300 rounded-lg"><option value="1" {{ $berita->aktif ? 'selected' : '' }}>Aktif</option><option value="0" {{ !$berita->aktif ? 'selected' : '' }}>Nonaktif</option></select></div>
        <div class="flex justify-end space-x-3"><a href="{{ route('admin.berita') }}" class="px-6 py-2 border rounded-lg">Batal</a><button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Simpan Perubahan</button></div>
    </form>
</div>
@endsection