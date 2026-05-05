<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'slug', 'isi', 'gambar', 'penulis', 'views', 'aktif'];
    
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul) . '-' . uniqid();
        });
    }
    
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->isi), 150);
    }
}