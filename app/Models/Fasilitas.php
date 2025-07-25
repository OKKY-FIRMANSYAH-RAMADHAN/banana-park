<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Fasilitas extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];
    
    protected static function boot()
    {
        parent::boot();
        
        static::deleting(function ($fasilitas) {
            // Hapus gambar saat fasilitas dihapus
            if ($fasilitas->gambar && !str_starts_with($fasilitas->gambar, 'http') && !str_contains($fasilitas->gambar, '/assets/')) {
                Storage::disk('public')->delete($fasilitas->gambar);
            }
        });
    }
}
