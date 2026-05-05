@extends('admin.layouts.admin')

@section('page-title', 'Manajemen Pengumuman')

@section('content')
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div><h2 class="font-bold text-lg">Daftar Pengumuman</h2><p class="text-gray-500 text-sm">Kelola pengumuman yang tampil di website</p></div>
        <a href="{{ route('admin.pengumuman.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">+ Tambah Pengumuman</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b"><tr><th class="p-4 text-left">No</th><th class="p-4 text-left">Judul</th><th class="p-4 text-left">Kategori</th><th class="p-4 text-left">Tanggal</th><th class="p-4 text-left">Penting</th><th class="p-4 text-left">Aksi</th></tr></thead>
            <tbody>
                @forelse($pengumuman as $index => $item)
                <tr class="border-b hover:bg-gray-50"><td class="p-4">{{ $index+1 }}</td><td class="p-4 font-semibold">{{ $item->judul }}</td><td class="p-4">{{ $item->kategori }}</td><td class="p-4">{{ $item->tanggal->format('d M Y') }}</td><td class="p-4">@if($item->penting)<span class="text-red-500"><i class="fas fa-exclamation-triangle"></i></span>@else-@endif</td>
                    <td class="p-4 space-x-2"><a href="{{ route('admin.pengumuman.edit', $item->id) }}" class="text-blue-600">Edit</a><form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST" class="inline">@csrf @method('DELETE')<button type="submit" class="text-red-600" onclick="return confirm('Hapus?')">Hapus</button></form></td></tr>
                @empty
                <tr><td colspan="6" class="p-8 text-center text-gray-500">Belum ada data pengumuman</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection