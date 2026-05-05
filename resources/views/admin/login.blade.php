<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Kecamatan Buahbatu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-900 to-slate-900 min-h-screen flex items-center justify-center font-['Inter']">
    <div class="w-full max-w-md p-8">
        <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 border border-white/20">
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-landmark text-white text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Admin Panel</h2>
                <p class="text-gray-300 text-sm mt-1">Kecamatan Buahbatu</p>
            </div>
            
            @if(session('error'))
            <div class="bg-red-500/20 border border-red-500 text-red-200 p-3 rounded-lg mb-4 text-sm">
                <i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}
            </div>
            @endif
            
            @if(session('success'))
            <div class="bg-green-500/20 border border-green-500 text-green-200 p-3 rounded-lg mb-4 text-sm">
                <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            </div>
            @endif
            
            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
                @csrf
                
                <div>
                    <label class="block text-white text-sm font-medium mb-2">Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="email" name="email" value="{{ old('email') }}" required 
                            class="w-full pl-10 pr-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition"
                            placeholder="admin@example.com">
                    </div>
                </div>
                
                <div>
                    <label class="block text-white text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <i class="fas fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="password" name="password" required 
                            class="w-full pl-10 pr-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition"
                            placeholder="******">
                    </div>
                </div>
                
                <div>
                    <label class="block text-white text-sm font-medium mb-2">Captcha</label>
                    <div class="flex gap-3">
                        <div class="flex-1 relative">
                            <i class="fas fa-calculator absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                            <input type="text" name="captcha" required 
                                class="w-full pl-10 pr-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition"
                                placeholder="Hasil penjumlahan">
                        </div>
                        <div class="bg-white/10 rounded-xl px-4 py-3 flex items-center gap-2">
                            <span id="captcha-num1" class="text-white font-mono text-lg">?</span>
                            <span class="text-white">+</span>
                            <span id="captcha-num2" class="text-white font-mono text-lg">?</span>
                            <span class="text-white">=</span>
                            <span class="text-white">?</span>
                            <button type="button" onclick="refreshCaptcha()" class="text-blue-400 hover:text-blue-300 ml-1">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-semibold py-3 rounded-xl hover:from-blue-600 hover:to-cyan-600 transition mt-6">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </button>
            </form>
            
            <div class="text-center mt-6 text-gray-400 text-xs">
                <p><strong class="text-blue-300">mukomukokab</strong></p>
            </div>
        </div>
    </div>
    
    <script>
        function refreshCaptcha() {
            fetch('{{ route("admin.captcha") }}')
                .then(res => res.json())
                .then(data => {
                    const parts = data.question.split(' + ');
                    document.getElementById('captcha-num1').textContent = parts[0];
                    document.getElementById('captcha-num2').textContent = parts[1].replace(' = ?', '');
                });
        }
        refreshCaptcha();
    </script>
</body>
</html>