<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="{{ $primaryColor ?? '#1a3a6b' }}">
    <title>@yield('title', 'Kabupaten Mukomuko') - Website Resmi</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* ==================== CSS VARIABLES DARI DATABASE ==================== */
        :root {
            --primary: {{ $primaryColor ?? '#1a3a6b' }};
            --primary-dark: {{ $primaryColorDark ?? '#0f2a4f' }};
            --secondary: {{ $secondaryColor ?? '#d4a017' }};
            --secondary-dark: {{ $secondaryColorDark ?? '#b8860b' }};
            --primary-rgb: {{ $primaryRgb ?? '26, 58, 107' }};
            --bg-body: {{ $bgColor ?? '#0f172a' }};
            --text-body: {{ $textColor ?? '#ffffff' }};
            --card-bg: {{ $cardBgColor ?? '#1e293b' }};
            --border-color: {{ $borderColor ?? 'rgba(255,255,255,0.08)' }};
        }
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: var(--bg-body); 
            color: var(--text-body);
            overflow-x: hidden; 
        }
        
        /* Animations */
        @keyframes fadeUp { from { opacity: 0; transform: translateY(50px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes float { 0%,100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
        @keyframes bounce { 0%,100% { transform: translateY(0); } 50% { transform: translateY(10px); } }
        
        .animate-fadeUp { animation: fadeUp 0.8s cubic-bezier(0.2,0.9,0.4,1.1) forwards; }
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-bounce { animation: bounce 2s ease-in-out infinite; }
        
        .gradient-text {
            background: linear-gradient(135deg, var(--primary), #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-primary {
            background: linear-gradient(135deg, var(--primary), #06b6d4);
        }
        
        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            transition: all 0.4s ease;
        }
        .glass-card:hover { 
            transform: translateY(-8px); 
            background: rgba(var(--primary-rgb), 0.1);
            border-color: rgba(var(--primary-rgb), 0.3); 
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #06b6d4);
            color: white;
            padding: 12px 32px;
            border-radius: 40px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 25px -5px rgba(var(--primary-rgb), 0.5); }
        
        .btn-outline {
            background: transparent;
            color: var(--text-body);
            padding: 10px 28px;
            border-radius: 40px;
            border: 1px solid rgba(var(--primary-rgb), 0.3);
            transition: all 0.3s;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-outline:hover { background: rgba(var(--primary-rgb), 0.1); border-color: var(--primary); }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(var(--primary-rgb), 0.1), rgba(6,182,212,0.05));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(var(--primary-rgb), 0.2);
            transition: all 0.4s;
        }
        .stat-card:hover { transform: translateY(-5px); border-color: rgba(var(--primary-rgb), 0.5); }
        
        /* Navbar - Menggunakan warna background dinamis */
        .navbar { 
            transition: all 0.3s; 
            background: rgba(var(--primary-rgb), 0.1);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(var(--primary-rgb), 0.2);
        }
        .navbar.scrolled { background: rgba(var(--primary-rgb), 0.9); }
        
        /* Navbar text */
        .navbar .text-gray-300 { color: var(--text-body); opacity: 0.8; }
        .navbar .text-gray-300:hover { color: var(--secondary); opacity: 1; }
        
        /* Dropdown */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            min-width: 240px;
            padding: 12px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s;
            z-index: 100;
        }
        .dropdown:hover .dropdown-menu { opacity: 1; visibility: visible; transform: translateY(0); }
        .dropdown-item { 
            color: var(--text-body); 
            transition: all 0.2s;
        }
        .dropdown-item:hover { background: rgba(var(--primary-rgb), 0.2); padding-left: 28px; color: var(--secondary); }
        
        /* Mobile Drawer */
        .mobile-drawer {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            width: 320px;
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.4s;
            overflow-y: auto;
        }
        .mobile-drawer.open { transform: translateX(0); }
        .drawer-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(4px);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        .drawer-overlay.open { opacity: 1; visibility: visible; }
        
        /* Page Sections */
        .page-section { display: none; }
        .page-section.active { display: block; }
        
        @media (max-width: 1024px) { .desktop-menu { display: none; } .mobile-menu-btn { display: flex; } }
        @media (min-width: 1025px) { .desktop-menu { display: flex; } .mobile-menu-btn { display: none; } }
        
        .timeline-item { 
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            transition: all 0.3s;
        }
        .timeline-item:hover { transform: translateX(10px); background: rgba(var(--primary-rgb), 0.1); border-color: rgba(var(--primary-rgb), 0.3); }
        
        .back-to-top {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary), #06b6d4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 100;
        }
        .back-to-top.visible { opacity: 1; visibility: visible; }
        
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s;
        }
        .scroll-reveal.revealed { opacity: 1; transform: translateY(0); }
        
        /* Footer */
        footer {
            background: var(--card-bg);
            border-top: 1px solid var(--border-color);
        }
        
        /* Form Input untuk kontak */
        .form-input {
            background: rgba(var(--primary-rgb), 0.05);
            border: 1px solid var(--border-color);
            color: var(--text-body);
        }
        .form-input:focus {
            border-color: var(--primary);
            outline: none;
        }
        .form-input::placeholder {
            color: var(--text-body);
            opacity: 0.5;
        }
    </style>
    
    @stack('styles')
</head>
<body>

    @include('components.navbar')
    
    <main class="pt-20">
        @yield('content')
    </main>
    
    @include('components.footer')
    
    <div id="backToTop" class="back-to-top"><i class="fas fa-arrow-up"></i></div>
    
    <script>
        // ==================== SCROLL REVEAL ====================
        const revealElements = document.querySelectorAll('.scroll-reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('revealed'); });
        }, { threshold: 0.1 });
        revealElements.forEach(el => observer.observe(el));
        
        // ==================== BACK TO TOP ====================
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) backToTop.classList.add('visible');
            else backToTop.classList.remove('visible');
        });
        backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        
        // ==================== NAVBAR SCROLL EFFECT ====================
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar?.classList.add('scrolled');
            } else {
                navbar?.classList.remove('scrolled');
            }
        });
        
        // ==================== FUNCTION SHOW PAGE ====================
        window.showPage = function(pageId, param = null) {
            document.querySelectorAll('.page-section').forEach(s => s.classList.remove('active'));
            const target = document.getElementById('page-' + pageId);
            if (target) target.classList.add('active');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>
    
    @stack('scripts')
</body>
</html>