@extends('admin.layouts.admin')

@section('page-title', 'Tambah Berita')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-3xl mx-auto">
    <div class="p-6 border-b border-gray-200"><h2 class="font-bold text-lg">Tambah Berita Baru</h2></div>
    <form method="POST" action="{{ route('admin.berita.store') }}" enctype="multipart/form-data" class="p-6 space-y-5">
        @csrf
        <div><label class="block font-semibold mb-2">Judul Berita</label><input type="text" name="judul" required class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Isi Berita</label><textarea name="isi" rows="10" required class="w-full p-3 border border-gray-300 rounded-lg"></textarea></div>
        <div><label class="block font-semibold mb-2">Gambar (Opsional)</label><input type="file" name="gambar" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Penulis</label><input type="text" name="penulis" value="Admin" class="w-full p-3 border border-gray-300 rounded-lg"></div>
        <div><label class="block font-semibold mb-2">Status</label><select name="aktif" class="w-full p-3 border border-gray-300 rounded-lg"><option value="1">Aktif</option><option value="0">Nonaktif</option></select></div>
        <div class="flex justify-end space-x-3"><a href="{{ route('admin.berita') }}" class="px-6 py-2 border rounded-lg">Batal</a><button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Simpan</button></div>
    </form>
</div>
@endsection