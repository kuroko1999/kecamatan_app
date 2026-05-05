@extends('layouts.app')

@section('title', 'PPID - Informasi Publik')

@section('content')
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 scroll-reveal">
            <h1 class="text-4xl md:text-5xl font-bold gradient-text">PPID Kecamatan Buahbatu</h1>
            <p class="text-gray-400 mt-3">Pejabat Pengelola Informasi dan Dokumentasi</p>
        </div>
        
        @if(isset($data['error']))
        <div class="glass-card rounded-2xl p-8 text-center">
            <i class="fas fa-database text-4xl text-yellow-400 mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Belum Ada Data dari API</h3>
            <p class="text-gray-400">Endpoint API PPID belum tersedia atau sedang dalam pengembangan.</p>
            <div class="mt-4 p-4 bg-blue-500/10 rounded-lg text-left">
                <p class="text-sm text-gray-300 mb-2">Informasi yang tersedia saat ini:</p>
                <ul class="text-sm text-gray-400 space-y-1 list-disc list-inside">
                    <li>PPID Utama Kota Bandung: <a href="https://www.bandung.go.id/ppid" class="text-blue-400" target="_blank">https://www.bandung.go.id/ppid</a></li>
                    <li>Email PPID: ppid@bandung.go.id</li>
                    <li>WhatsApp Center: 0811-2233-4455</li>
                </ul>
            </div>
        </div>
        @else
        <div class="grid md:grid-cols-2 gap-6">
            @forelse($data as $item)
            <div class="glass-card rounded-2xl p-6">
                <h3 class="font-bold text-xl mb-2">{{ $item['judul'] ?? 'Informasi Publik' }}</h3>
                <p class="text-gray-400">{{ $item['deskripsi'] ?? '' }}</p>
                @if(isset($item['link']))
                <a href="#" onclick="showPage('ppid-detail', '{{ $item['id'] ?? '' }}')" class="text-blue-400 mt-3 inline-block">Selengkapnya →</a>
                @endif
            </div>
            @empty
            <div class="glass-card rounded-2xl p-8 text-center col-span-2">
                <p class="text-gray-400">Belum ada data dari API PPID.</p>
            </div>
            @endforelse
        </div>
        @endif
    </div>
</section>
@endsection