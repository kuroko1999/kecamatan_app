@extends('admin.layouts.admin')

@section('page-title', 'Manajemen Admin')

@section('content')
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
        <div>
            <h2 class="font-bold text-lg">Daftar Admin</h2>
            <p class="text-gray-500 text-sm">Kelola akun administrator</p>
        </div>
        <a href="{{ route('admin.admins.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            + Tambah Admin
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="p-4 text-left">No</th>
                    <th class="p-4 text-left">Nama</th>
                    <th class="p-4 text-left">Email</th>
                    <th class="p-4 text-left">Role</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($admins as $index => $admin)
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <td class="p-4">{{ $index + 1 }}</td>
                    <td class="p-4 font-semibold">{{ $admin->nama }}</td>
                    <td class="p-4">{{ $admin->email }}</td>
                    <td class="p-4">
                        <span class="px-2 py-1 rounded-full text-xs {{ $admin->role == 'superadmin' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800' }}">
                            {{ $admin->role ?? 'admin' }}
                        </span>
                    </td>
                    <td class="p-4 space-x-2">
                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                        @if($admin->email !== session('admin_email'))
                        <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Hapus admin ini?')">Hapus</button>
                        </form>
                        @else
                        <span class="text-gray-400 text-sm">(Akun sendiri)</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="p-8 text-center text-gray-400">Belum ada admin</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection