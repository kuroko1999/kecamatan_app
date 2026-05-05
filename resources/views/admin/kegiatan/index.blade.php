@extends('admin.layouts.admin')

@section('page-title', 'Manajemen Kegiatan')

@section('content')
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div>
            <h2 class="font-bold text-lg">Daftar Kegiatan</h2>
            <p class="text-gray-500 text-sm">Kelola kegiatan yang tampil di website</p>
        </div>
        <a href="{{ route('admin.kegiatan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">+ Tambah Kegiatan</a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b">
                <tr><th class="text-left p-4">No</th><th class="text-left p-4">Judul</th><th class="text-left p-4">Tanggal</th><th class="text-left p-4">Status</th><th class="text-left p-4">Aksi</th></tr>
            </thead>
            <tbody>
                @forelse($kegiatan as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4">{{ $index + 1 }}</td>
                    <td class="p-4 font-semibold">{{ $item->judul }}</td>
                    <td class="p-4">{{ $item->tanggal->format('d M Y') }}</td>
                    <td class="p-4"><span class="px-2 py-1 rounded-full text-xs {{ $item->aktif ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">{{ $item->aktif ? 'Aktif' : 'Nonaktif' }}</span></td>
                    <td class="p-4 space-x-2">
                        <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST" class="inline">@csrf @method('DELETE')<button type="submit" class="text-red-600" onclick="return confirm('Hapus?')">Hapus</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="p-8 text-center text-gray-500">Belum ada data kegiatan</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection