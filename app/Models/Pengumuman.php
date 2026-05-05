<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['judul', 'isi', 'kategori', 'tanggal', 'penting', 'aktif'];
    
    protected $casts = [
        'tanggal' => 'date',
        'penting' => 'boolean',
    ];
}