<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }
    
    public function create()
    {
        return view('admin.berita.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|unique:berita',
            'isi' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'penulis' => 'nullable',
            'aktif' => 'boolean',
        ]);
        
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }
        
        Berita::create($data);
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }
    
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required|unique:berita,judul,' . $id,
            'isi' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'penulis' => 'nullable',
            'aktif' => 'boolean',
        ]);
        
        if ($request->hasFile('gambar')) {
            if ($berita->gambar) Storage::disk('public')->delete($berita->gambar);
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }
        
        $berita->update($data);
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->gambar) Storage::disk('public')->delete($berita->gambar);
        $berita->delete();
        return back()->with('success', 'Berita berhasil dihapus');
    }
}