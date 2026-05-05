@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<section class="py-20">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="glass-card rounded-2xl p-8">
            @if($berita->gambar)
            <img src="{{ asset('storage/'.$berita->gambar) }}" class="w-full h-64 object-cover rounded-xl mb-6">
            @endif
            
            <div class="flex items-center gap-4 text-sm text-gray-400 mb-4">
                <span><i class="fas fa-calendar-alt mr-1"></i> {{ $berita->created_at->format('d M Y') }}</span>
                <span><i class="fas fa-user mr-1"></i> {{ $berita->penulis }}</span>
                <span><i class="fas fa-eye mr-1"></i> {{ number_format($berita->views) }} kali dibaca</span>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $berita->judul }}</h1>
            
            <div class="prose prose-invert max-w-none">
                {!! nl2br(e($berita->isi)) !!}
            </div>
            
            <div class="mt-8 pt-6 border-t border-white/10">
                <a href="{{ url('/') }}" onclick="showPage('berita')" class="text-blue-400 hover:text-blue-300">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</section>
@endsection