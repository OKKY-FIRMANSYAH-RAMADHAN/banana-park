<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Program extends Model
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
        
        static::deleting(function ($program) {
            // Hapus gambar saat program dihapus
            if ($program->gambar && !str_starts_with($program->gambar, 'http') && !str_contains($program->gambar, '/assets/')) {
                Storage::disk('public')->delete($program->gambar);
            }
        });
    }
}
