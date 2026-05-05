<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PpidController extends Controller
{
    public function index()
    {
        // Contoh mengambil data dari API eksternal
        // Ganti URL dengan API PPID yang tersedia
        try {
            $response = Http::timeout(5)->get('https://api.example.com/ppid/informasi');
            $data = $response->json();
        } catch (\Exception $e) {
            $data = [];
        }
        
        return view('landing.ppid', compact('data'));
    }
    
    public function detail($id)
    {
        try {
            $response = Http::timeout(5)->get('https://api.example.com/ppid/informasi/' . $id);
            $data = $response->json();
        } catch (\Exception $e) {
            $data = [];
        }
        
        return view('landing.ppid-detail', compact('data'));
    }
}