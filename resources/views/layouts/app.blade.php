<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Kecamatan Buahbatu') - Website Resmi</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(10px); }
        }
        .animate-fadeInUp { animation: fadeInUp 0.8s ease-out forwards; }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-bounce-slow { animation: bounce 2s ease-in-out infinite; }
        .nav-link { transition: all 0.3s ease; }
        .nav-link:hover { color: #fbbf24; transform: translateY(-2px); }
        .gradient-bg { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #06b6d4 100%); }
        .gradient-text { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .glass-card { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .service-card { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        .service-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); }
        .stat-card { background: linear-gradient(135deg, rgba(30, 58, 138, 0.95) 0%, rgba(59, 130, 246, 0.95) 100%); backdrop-filter: blur(10px); transition: all 0.3s ease; }
        .stat-card:hover { transform: translateY(-5px) scale(1.02); }
        .sambutan-text { text-align: justify; line-height: 1.75; }
        html { scroll-behavior: smooth; }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50 font-sans antialiased">

    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')
    
    @stack('scripts')
</body>
</html>