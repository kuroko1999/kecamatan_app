<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ \App\Models\Setting::get('site_name', 'Kabupaten Mukomuko') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
        }
        
        body { 
            font-family: 'Inter', sans-serif; 
        }
        
        /* Light Theme (Default) */
        html[data-theme="light"] {
            --bg-primary: #f3f4f6;
            --bg-secondary: #ffffff;
            --bg-sidebar: #111827;
            --text-primary: #111827;
            --text-secondary: #4b5563;
            --text-muted: #6b7280;
            --text-white: #111827;
            --border: #e5e7eb;
            --card-bg: #ffffff;
            --hover-bg: #f3f4f6;
            --sidebar-text: #9ca3af;
            --sidebar-text-hover: #ffffff;
            --sidebar-active: #3b82f6;
            --topbar-bg: #ffffff;
            --topbar-text: #111827;
            --table-header: #f9fafb;
        }
        
        /* Dark Theme */
        html[data-theme="dark"] {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-sidebar: #020617;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --text-white: #ffffff;
            --border: #334155;
            --card-bg: #1e293b;
            --hover-bg: #334155;
            --sidebar-text: #94a3b8;
            --sidebar-text-hover: #ffffff;
            --sidebar-active: #3b82f6;
            --topbar-bg: #1e293b;
            --topbar-text: #f1f5f9;
            --table-header: #334155;
        }
        
        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }
        
        /* Sidebar */
        .sidebar {
            background: var(--bg-sidebar);
            transition: all 0.3s;
        }
        
        .sidebar-item {
            transition: all 0.2s;
            color: var(--sidebar-text);
        }
        
        .sidebar-item:hover {
            background: rgba(59, 130, 246, 0.1);
            color: var(--sidebar-text-hover);
        }
        
        .sidebar-item.active {
            background: rgba(59, 130, 246, 0.2);
            color: white;
        }
        
        /* Top Bar */
        .top-bar {
            background: var(--topbar-bg);
            border-bottom: 1px solid var(--border);
        }
        
        .top-bar-title {
            color: var(--topbar-text);
        }
        
        .top-bar-text {
            color: var(--text-secondary);
        }
        
        /* Theme Toggle Switch */
        .theme-toggle {
            position: relative;
            width: 56px;
            height: 28px;
            border-radius: 28px;
            background: #334155;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .theme-toggle::before {
            content: '\f185';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #fbbf24;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 2px;
            left: 3px;
            transition: transform 0.3s;
            color: #fff;
            font-size: 12px;
        }
        
        html[data-theme="dark"] .theme-toggle::before {
            content: '\f186';
            transform: translateX(26px);
            background: #3b82f6;
            color: #fff;
        }
        
        /* Card */
        .card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 0.75rem;
            transition: all 0.3s;
        }
        
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .card-title {
            color: var(--text-primary);
        }
        
        .card-text {
            color: var(--text-secondary);
        }
        
        /* Form Input */
        .form-input {
            background: var(--bg-primary);
            border: 1px solid var(--border);
            color: var(--text-primary);
            border-radius: 0.5rem;
            padding: 0.5rem 0.75rem;
        }
        
        .form-input::placeholder {
            color: var(--text-muted);
        }
        
        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            ring: 2px solid #3b82f6;
        }
        
        label {
            color: var(--text-secondary);
        }
        
        /* Table */
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .data-table th {
            background: var(--table-header);
            color: var(--text-primary);
            padding: 0.75rem 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
            font-weight: 600;
        }
        
        .data-table td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--border);
            color: var(--text-primary);
        }
        
        .data-table tr:hover {
            background: var(--hover-bg);
        }
        
        /* Button */
        .btn-primary {
            background: #3b82f6;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s;
        }
        
        .btn-primary:hover {
            background: #2563eb;
            transform: translateY(-1px);
        }
        
        .btn-secondary {
            background: var(--hover-bg);
            color: var(--text-primary);
            border: 1px solid var(--border);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s;
        }
        
        .btn-secondary:hover {
            background: var(--border);
        }
        
        /* Alert */
        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #10b981;
        }
        
        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }
        
        html[data-theme="dark"] .alert-success {
            color: #34d399;
        }
        
        html[data-theme="dark"] .alert-error {
            color: #f87171;
        }
        
        /* Stats Card */
        .stats-card {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 1rem;
            padding: 1.5rem;
            color: white;
        }
        
        .stats-card-green {
            background: linear-gradient(135deg, #10b981, #059669);
        }
        
        .stats-card-yellow {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }
        
        .stats-card-purple {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }
        
        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--hover-bg);
        }
        
        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 3px;
        }
        
        /* Text Colors Utility */
        .text-primary { color: var(--text-primary); }
        .text-secondary { color: var(--text-secondary); }
        .text-muted { color: var(--text-muted); }
        .text-white-keep { color: #ffffff; }
        
        /* Border */
        .border-custom {
            border-color: var(--border);
        }
    </style>
</head>
<body>

@php
    $site_name = \App\Models\Setting::get('site_name', 'Kecamatan');
    $site_tagline = \App\Models\Setting::get('site_tagline', 'Kabupaten Mukomuko');
@endphp

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="sidebar w-64 fixed h-full overflow-y-auto" style="background: var(--bg-sidebar);">
        <div class="p-5 border-b" style="border-color: var(--border);">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                    <i class="fas fa-landmark text-white"></i>
                </div>
                <div>
                    <div class="font-bold text-white">Admin Panel</div>
                    <div class="text-xs" style="color: var(--sidebar-text);">{{ $site_name }}</div>
                </div>
            </div>
        </div>
        
        <nav class="p-4 space-y-1">
            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span>
            </a>
            
            <div class="pt-4 pb-2">
                <div class="text-xs uppercase tracking-wider px-4" style="color: var(--text-muted);">Konten Website</div>
            </div>
            
            <!-- Profil -->
            <a href="{{ route('admin.profil') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.profil*') ? 'active' : '' }}">
                <i class="fas fa-building w-5"></i><span>Profil {{ explode(' ', $site_name)[1] ?? $site_name }}</span>
            </a>
            
            <!-- Struktur Organisasi -->
            <a href="{{ route('admin.struktur') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.struktur*') ? 'active' : '' }}">
                <i class="fas fa-sitemap w-5"></i><span>Struktur Organisasi</span>
            </a>
            
            <!-- Layanan -->
            <a href="{{ route('admin.layanan') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.layanan*') ? 'active' : '' }}">
                <i class="fas fa-server w-5"></i><span>Layanan</span>
            </a>
            
            <!-- Berita -->
            <a href="{{ route('admin.berita') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.berita*') ? 'active' : '' }}">
                <i class="fas fa-newspaper w-5"></i><span>Berita</span>
            </a>
            
            <!-- Kegiatan -->
            <a href="{{ route('admin.kegiatan') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.kegiatan*') ? 'active' : '' }}">
                <i class="fas fa-calendar-alt w-5"></i><span>Kegiatan</span>
            </a>
            
            <!-- Pengumuman -->
            <a href="{{ route('admin.pengumuman') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.pengumuman*') ? 'active' : '' }}">
                <i class="fas fa-bullhorn w-5"></i><span>Pengumuman</span>
            </a>
            
            <!-- Galeri -->
            <a href="{{ route('admin.galeri') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}">
                <i class="fas fa-images w-5"></i><span>Galeri</span>
            </a>
            
            <div class="pt-4 pb-2">
                <div class="text-xs uppercase tracking-wider px-4" style="color: var(--text-muted);">PPID</div>
            </div>
            
            <!-- PPID Menu -->
            <a href="{{ route('admin.ppid.setting') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.ppid*') ? 'active' : '' }}">
                <i class="fas fa-info-circle w-5"></i><span>Pengaturan PPID</span>
            </a>
            
            <div class="pt-4 pb-2">
                <div class="text-xs uppercase tracking-wider px-4" style="color: var(--text-muted);">Pengaturan</div>
            </div>
            
            <!-- Pengaturan Website -->
            <a href="{{ route('admin.setting') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.setting*') ? 'active' : '' }}">
                <i class="fas fa-globe w-5"></i><span>Pengaturan Website</span>
            </a>
            
            <!-- Warna Website -->
            <a href="{{ route('admin.warna') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.warna*') ? 'active' : '' }}">
                <i class="fas fa-palette w-5"></i><span>Warna Website</span>
            </a>
            
            <!-- Statistik Pengunjung -->
            <a href="{{ route('admin.visitors') }}" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('admin.visitors*') ? 'active' : '' }}">
                <i class="fas fa-chart-line w-5"></i><span>Statistik Pengunjung</span>
            </a>
            
            <hr class="my-4" style="border-color: var(--border);">
            
            <!-- Lihat Website -->
            <a href="{{ url('/') }}" target="_blank" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition">
                <i class="fas fa-globe w-5"></i><span>Lihat Website</span>
            </a>
            
            <!-- Logout -->
            <form action="{{ route('admin.logout') }}" method="POST" id="logout-form" class="hidden">
                @csrf
            </form>
            <a href="#" onclick="document.getElementById('logout-form').submit(); return false;" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition" style="color: #f87171;">
                <i class="fas fa-sign-out-alt w-5"></i><span>Logout</span>
            </a>
        </nav>
    </aside>
    
    <!-- Main Content -->
    <main class="flex-1 ml-64">
        <!-- Top Bar -->
        <div class="top-bar sticky top-0 z-10 px-6 py-4 flex justify-between items-center" style="background: var(--topbar-bg); border-bottom: 1px solid var(--border);">
            <h1 class="text-xl font-semibold top-bar-title">@yield('page-title', 'Dashboard')</h1>
            <div class="flex items-center space-x-4">
                <!-- Theme Toggle -->
                <div class="theme-toggle" onclick="toggleTheme()"></div>
                
                <span class="text-sm top-bar-text">
                    <i class="fas fa-user-circle mr-1"></i> 
                    {{ session('admin_nama', 'Admin') }}
                </span>
                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="p-6">
            @if(session('success'))
            <div class="alert-success p-4 rounded-lg mb-4 flex justify-between items-center">
                <span><i class="fas fa-check-circle mr-2"></i> {{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="text-green-600 dark:text-green-400">&times;</button>
            </div>
            @endif
            
            @if(session('error'))
            <div class="alert-error p-4 rounded-lg mb-4 flex justify-between items-center">
                <span><i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}</span>
                <button onclick="this.parentElement.remove()" class="text-red-600 dark:text-red-400">&times;</button>
            </div>
            @endif
            
            @if($errors->any())
            <div class="alert-error p-4 rounded-lg mb-4">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            @yield('content')
        </div>
    </main>
</div>

<script>
    // ==================== THEME TOGGLE ====================
    function toggleTheme() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('admin_theme', newTheme);
    }
    
    // Load saved theme
    const savedTheme = localStorage.getItem('admin_theme');
    if (savedTheme) {
        document.documentElement.setAttribute('data-theme', savedTheme);
    } else {
        // Check system preference
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-theme', 'dark');
        }
    }
    
    // Listen for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('admin_theme')) {
            document.documentElement.setAttribute('data-theme', e.matches ? 'dark' : 'light');
        }
    });
    
    // ==================== DROPDOWN MENU ====================
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const menu = this.nextElementSibling;
            if (menu) {
                menu.classList.toggle('show');
                const icon = this.querySelector('.dropdown-icon');
                if (icon) {
                    icon.style.transform = menu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            }
        });
    });
</script>

</body>
</html>