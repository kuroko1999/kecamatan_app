@extends('admin.layouts.admin')

@section('page-title', 'Pengaturan PPID')

@section('content')
<div class="bg-white rounded-xl shadow-sm max-w-2xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="font-bold text-lg">Pengaturan PPID</h2>
        <p class="text-gray-500 text-sm">Konfigurasi API dan kontak PPID</p>
    </div>
    
    <form method="POST" action="{{ route('admin.ppid.setting.update') }}" class="p-6 space-y-5">
        @csrf
        
        <div>
            <label class="block font-semibold mb-2">API URL PPID</label>
            <input type="url" name="ppid_api_url" value="{{ $ppid_api_url }}" placeholder="https://api.example.com/ppid" class="w-full p-3 border border-gray-300 rounded-lg">
            <p class="text-gray-400 text-sm mt-1">Masukkan endpoint API PPID. Biarkan kosong jika tidak menggunakan API.</p>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Email PPID</label>
            <input type="email" name="ppid_email" value="{{ $ppid_email }}" class="w-full p-3 border border-gray-300 rounded-lg">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Telepon PPID</label>
            <input type="text" name="ppid_phone" value="{{ $ppid_phone }}" class="w-full p-3 border border-gray-300 rounded-lg">
        </div>
        
        <div class="bg-blue-50 p-4 rounded-lg">
            <p class="text-sm text-blue-800">
                <i class="fas fa-info-circle mr-2"></i>
                API PPID digunakan untuk mengambil data informasi publik dari server eksternal.
            </p>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Pengaturan</button>
        </div>
    </form>
</div>
@endsection