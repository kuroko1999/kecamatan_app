<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $table = 'struktur_organisasi';
    protected $fillable = ['jabatan', 'nama', 'nip', 'gambar', 'urutan', 'aktif'];
}