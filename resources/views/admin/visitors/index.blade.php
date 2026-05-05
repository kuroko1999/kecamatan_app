@extends('admin.layouts.admin')

@section('page-title', 'Statistik Pengunjung')

@section('content')
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <div class="p-5 border-b border-gray-200">
        <h3 class="font-bold text-lg">Semua Pengunjung</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50"><tr><th class="p-3 text-left">No</th><th class="p-3 text-left">IP</th><th class="p-3 text-left">Device</th><th class="p-3 text-left">Browser</th><th class="p-3 text-left">OS</th><th class="p-3 text-left">Halaman</th><th class="p-3 text-left">Waktu</th></tr></thead>
            <tbody>
                @forelse($visitors as $index => $visitor)
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3">{{ $index + 1 }}</td>
                    <td class="p-3 text-sm">{{ $visitor->ip_address }}</td>
                    <td class="p-3 text-sm"><span class="px-2 py-1 rounded-full text-xs {{ $visitor->device == 'Mobile' ? 'bg-green-100 text-green-600' : ($visitor->device == 'Tablet' ? 'bg-purple-100 text-purple-600' : 'bg-blue-100 text-blue-600') }}">{{ $visitor->device }}</span></td>
                    <td class="p-3 text-sm">{{ $visitor->browser }}</td>
                    <td class="p-3 text-sm">{{ $visitor->os }}</td>
                    <td class="p-3 text-sm max-w-xs truncate">{{ $visitor->page_url }}</td>
                    <td class="p-3 text-sm">{{ $visitor->created_at->format('d M Y H:i') }}</td>
                </tr>
                @empty
                <tr><td colspan="7" class="p-8 text-center text-gray-400">Belum ada data pengunjung</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t">{{ $visitors->links() }}</div>
</div>
@endsection