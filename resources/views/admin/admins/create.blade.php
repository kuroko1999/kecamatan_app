@extends('admin.layouts.admin')

@section('page-title', 'Tambah Admin')

@section('content')
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm max-w-2xl mx-auto">
    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
        <h2 class="font-bold text-lg">Tambah Admin Baru</h2>
        <p class="text-gray-500 text-sm">Buat akun administrator baru</p>
    </div>
    
    <form method="POST" action="{{ route('admin.admins.store') }}" class="p-6 space-y-5">
        @csrf
        
        <div>
            <label class="block font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama') }}" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Password</label>
            <input type="password" name="password" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
            <p class="text-gray-400 text-sm mt-1">Minimal 4 karakter</p>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Role</label>
            <select name="role" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                <option value="admin">Admin</option>
                <option value="superadmin">Super Admin</option>
            </select>
        </div>
        
        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.admins') }}" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection