<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = StrukturOrganisasi::orderBy('urutan')->get();
        return view('admin.struktur.index', compact('struktur'));
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'jabatan' => 'required',
            'nama' => 'required',
            'nip' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'urutan' => 'integer',
            'aktif' => 'boolean',
        ]);
        
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('struktur', 'public');
        }
        
        StrukturOrganisasi::create($data);
        return back()->with('success', 'Data berhasil ditambahkan');
    }
    
    public function update(Request $request, $id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        $data = $request->validate([
            'jabatan' => 'required',
            'nama' => 'required',
            'nip' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
            'urutan' => 'integer',
            'aktif' => 'boolean',
        ]);
        
        if ($request->hasFile('gambar')) {
            if ($struktur->gambar) Storage::disk('public')->delete($struktur->gambar);
            $data['gambar'] = $request->file('gambar')->store('struktur', 'public');
        }
        
        $struktur->update($data);
        return back()->with('success', 'Data berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        if ($struktur->gambar) Storage::disk('public')->delete($struktur->gambar);
        $struktur->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}