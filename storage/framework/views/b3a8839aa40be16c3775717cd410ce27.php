<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?php echo e(\App\Models\Setting::get('site_name', 'Kabupaten Mukomuko')); ?></title>
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
        
        /* Dark Theme - Background GELAP, Tulisan PUTIH */
        html[data-theme="dark"] {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-sidebar: #020617;
            --text-primary: #ffffff;
            --text-secondary: #e2e8f0;
            --text-muted: #cbd5e1;
            --border: #334155;
            --card-bg: #1e293b;
            --hover-bg: #334155;
            --sidebar-text: #94a3b8;
            --sidebar-text-hover: #ffffff;
            --sidebar-active: #3b82f6;
            --topbar-bg: #1e293b;
            --topbar-text: #ffffff;
            --table-header: #334155;
        }
        
        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }
        
        /* Sidebar */
        .sidebar {
            background: var(--bg-sidebar);
        }
        
        .sidebar-item {
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
        
        /* Theme Toggle */
        .theme-toggle {
            position: relative;
            width: 56px;
            height: 28px;
            border-radius: 28px;
            background: #334155;
            cursor: pointer;
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
        }
        
        .card-title {
            color: var(--text-primary);
        }
        
        .card-text {
            color: var(--text-secondary);
        }
        
        /* Table */
        .data-table th {
            background: var(--table-header);
            color: var(--text-primary);
            border-bottom: 1px solid var(--border);
        }
        
        .data-table td {
            color: var(--text-primary);
            border-bottom: 1px solid var(--border);
        }
        
        .data-table tr:hover {
            background: var(--hover-bg);
        }
        
        /* Form Input */
        .form-input {
            background: var(--bg-primary);
            border: 1px solid var(--border);
            color: var(--text-primary);
        }
        
        .form-input::placeholder {
            color: var(--text-muted);
        }
        
        label {
            color: var(--text-secondary);
        }
        
        /* Button */
        .btn-primary {
            background: #3b82f6;
            color: white;
        }
        
        .btn-primary:hover {
            background: #2563eb;
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
        
        /* Text Colors */
        .text-primary-custom { color: var(--text-primary); }
        .text-secondary-custom { color: var(--text-secondary); }
        
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
    </style>
</head>
<body>

<?php
    $site_name = \App\Models\Setting::get('site_name', 'Kabupaten Mukomuko');
    $site_tagline = \App\Models\Setting::get('site_tagline', 'Provinsi Bengkulu');
?>

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
                    <div class="text-xs" style="color: var(--sidebar-text);"><?php echo e($site_name); ?></div>
                </div>
            </div>
        </div>
        
        <nav class="p-4 space-y-1">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                <i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span>
            </a>
            
            <div class="pt-4 pb-2">
                <div class="text-xs uppercase tracking-wider px-4" style="color: var(--text-muted);">Konten Website</div>
            </div>
            
            <a href="<?php echo e(route('admin.profil')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.profil*') ? 'active' : ''); ?>">
                <i class="fas fa-building w-5"></i><span>Profil Kabupaten</span>
            </a>
            
            <a href="<?php echo e(route('admin.struktur')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.struktur*') ? 'active' : ''); ?>">
                <i class="fas fa-sitemap w-5"></i><span>Struktur Organisasi</span>
            </a>
            
            <a href="<?php echo e(route('admin.layanan')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.layanan*') ? 'active' : ''); ?>">
                <i class="fas fa-server w-5"></i><span>Layanan</span>
            </a>
            
            <a href="<?php echo e(route('admin.berita')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.berita*') ? 'active' : ''); ?>">
                <i class="fas fa-newspaper w-5"></i><span>Berita</span>
            </a>
            
            <a href="<?php echo e(route('admin.kegiatan')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.kegiatan*') ? 'active' : ''); ?>">
                <i class="fas fa-calendar-alt w-5"></i><span>Kegiatan</span>
            </a>
            
            <a href="<?php echo e(route('admin.pengumuman')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.pengumuman*') ? 'active' : ''); ?>">
                <i class="fas fa-bullhorn w-5"></i><span>Pengumuman</span>
            </a>
            
            <a href="<?php echo e(route('admin.galeri')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.galeri*') ? 'active' : ''); ?>">
                <i class="fas fa-images w-5"></i><span>Galeri</span>
            </a>
            
            <div class="pt-4 pb-2">
                <div class="text-xs uppercase tracking-wider px-4" style="color: var(--text-muted);">PPID</div>
            </div>
            
            <a href="<?php echo e(route('admin.ppid.setting')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.ppid*') ? 'active' : ''); ?>">
                <i class="fas fa-info-circle w-5"></i><span>Pengaturan PPID</span>
            </a>
            
            <div class="pt-4 pb-2">
                <div class="text-xs uppercase tracking-wider px-4" style="color: var(--text-muted);">Pengaturan</div>
            </div>
            
            <a href="<?php echo e(route('admin.setting')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.setting*') ? 'active' : ''); ?>">
                <i class="fas fa-globe w-5"></i><span>Pengaturan Website</span>
            </a>
            
            <a href="<?php echo e(route('admin.warna')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.warna*') ? 'active' : ''); ?>">
                <i class="fas fa-palette w-5"></i><span>Warna Website</span>
            </a>
            
            <a href="<?php echo e(route('admin.visitors')); ?>" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition <?php echo e(request()->routeIs('admin.visitors*') ? 'active' : ''); ?>">
                <i class="fas fa-chart-line w-5"></i><span>Statistik Pengunjung</span>
            </a>
            
            <hr class="my-4" style="border-color: var(--border);">
            
            <a href="<?php echo e(url('/')); ?>" target="_blank" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition">
                <i class="fas fa-globe w-5"></i><span>Lihat Website</span>
            </a>
            
            <form action="<?php echo e(route('admin.logout')); ?>" method="POST" id="logout-form" class="hidden">
                <?php echo csrf_field(); ?>
            </form>
            <a href="#" onclick="document.getElementById('logout-form').submit(); return false;" class="sidebar-item flex items-center space-x-3 px-4 py-3 rounded-lg transition" style="color: #f87171;">
                <i class="fas fa-sign-out-alt w-5"></i><span>Logout</span>
            </a>
        </nav>
    </aside>
    
    <!-- Main Content -->
    <main class="flex-1 ml-64">
        <!-- Top Bar -->
        <div class="top-bar sticky top-0 z-10 px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold top-bar-title"><?php echo $__env->yieldContent('page-title', 'Dashboard'); ?></h1>
            <div class="flex items-center space-x-4">
                <div class="theme-toggle" onclick="toggleTheme()"></div>
                <span class="text-sm top-bar-text">
                    <i class="fas fa-user-circle mr-1"></i> 
                    <?php echo e(session('admin_nama', 'Admin')); ?>

                </span>
                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="p-6">
            <?php if(session('success')): ?>
            <div class="alert-success p-4 rounded-lg mb-4 flex justify-between items-center">
                <span><i class="fas fa-check-circle mr-2"></i> <?php echo e(session('success')); ?></span>
                <button onclick="this.parentElement.remove()" class="text-green-600 dark:text-green-400">&times;</button>
            </div>
            <?php endif; ?>
            
            <?php if(session('error')): ?>
            <div class="alert-error p-4 rounded-lg mb-4 flex justify-between items-center">
                <span><i class="fas fa-exclamation-circle mr-2"></i> <?php echo e(session('error')); ?></span>
                <button onclick="this.parentElement.remove()" class="text-red-600 dark:text-red-400">&times;</button>
            </div>
            <?php endif; ?>
            
            <?php if($errors->any()): ?>
            <div class="alert-error p-4 rounded-lg mb-4">
                <ul class="list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
</div>

<script>
    function toggleTheme() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('admin_theme', newTheme);
    }
    
    const savedTheme = localStorage.getItem('admin_theme');
    if (savedTheme) {
        document.documentElement.setAttribute('data-theme', savedTheme);
    }
</script>

</body>
</html><?php /**PATH C:\Users\media\OneDrive\Gambar\kecamatan_app\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>