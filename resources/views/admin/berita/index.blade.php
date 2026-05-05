@extends('admin.layouts.admin')

@section('page-title', 'Manajemen Berita')

@section('content')
<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <div><h2 class="font-bold text-lg">Daftar Berita</h2><p class="text-gray-500 text-sm">Kelola berita yang tampil di website</p></div>
        <a href="{{ route('admin.berita.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">+ Tambah Berita</a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b">
                <tr><th class="p-4 text-left">No</th><th class="p-4 text-left">Gambar</th><th class="p-4 text-left">Judul</th><th class="p-4 text-left">Penulis</th><th class="p-4 text-left">Views</th><th class="p-4 text-left">Status</th><th class="p-4 text-left">Aksi</th></tr>
            </thead>
            <tbody>
                @forelse($berita as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4">{{ $index+1 }}</td>
                    <td class="p-4">
                        @if($item->gambar)<img src="{{ asset('storage/'.$item->gambar) }}" class="w-12 h-12 rounded object-cover">@else<i class="fas fa-image text-gray-400 text-2xl"></i>@endif
                    </td>
                    <td class="p-4 font-semibold">{{ \Illuminate\Support\Str::limit($item->judul, 40) }}</td>
                    <td class="p-4">{{ $item->penulis }}</td>
                    <td class="p-4">{{ number_format($item->views) }}</td>
                    <td class="p-4"><span class="px-2 py-1 rounded-full text-xs {{ $item->aktif ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">{{ $item->aktif ? 'Aktif' : 'Nonaktif' }}</span></td>
                    <td class="p-4 space-x-2"><a href="{{ route('admin.berita.edit', $item->id) }}" class="text-blue-600">Edit</a><form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" class="inline">@csrf @method('DELETE')<button type="submit" class="text-red-600" onclick="return confirm('Hapus?')">Hapus</button></form></td>
                </tr>
                @empty
                <tr><td colspan="7" class="p-8 text-center text-gray-500">Belum ada berita</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection