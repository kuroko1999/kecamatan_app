<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|in:' . session('captcha_result'),
        ], [
            'captcha.in' => 'Captcha salah, silakan coba lagi',
        ]);
        
        // Cari admin berdasarkan email
        $admin = Admin::where('email', $request->email)->first();
        
        if ($admin && Hash::check($request->password, $admin->password)) {
            session([
                'admin_logged_in' => true,
                'admin_email' => $admin->email,
                'admin_nama' => $admin->nama
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, ' . ($admin->nama ?? $admin->email));
        }
        
        return back()->with('error', 'Email atau password salah');
    }
    
    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login')->with('success', 'Anda telah logout');
    }
    
    public function captcha()
    {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $result = $num1 + $num2;
        
        session(['captcha_result' => $result]);
        
        return response()->json([
            'question' => $num1 . ' + ' . $num2 . ' = ?',
        ]);
    }
}