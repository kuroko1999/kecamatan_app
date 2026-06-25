@extends('admin.layouts.admin')

@section('page-title', 'Edit Admin')

@section('content')
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm max-w-2xl mx-auto">
    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
        <h2 class="font-bold text-lg">Edit Admin</h2>
        <p class="text-gray-500 text-sm">Ubah data administrator</p>
    </div>
    
    <form method="POST" action="{{ route('admin.admins.update', $admin->id) }}" class="p-6 space-y-5">
        @csrf @method('PUT')
        
        <div>
            <label class="block font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama', $admin->nama) }}" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email', $admin->email) }}" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Password (Kosongkan jika tidak diubah)</label>
            <input type="password" name="password" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
            <p class="text-gray-400 text-sm mt-1">Minimal 4 karakter, isi hanya jika ingin mengganti password</p>
        </div>
        
        <div>
            <label class="block font-semibold mb-2">Role</label>
            <select name="role" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800">
                <option value="admin" {{ $admin->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="superadmin" {{ $admin->role == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
            </select>
        </div>
        
        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.admins') }}" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection