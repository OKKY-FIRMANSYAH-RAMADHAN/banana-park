<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Menampilkan halaman beranda
     */
    public function index()
    {
        $fasilitas = Fasilitas::where('aktif', true)
            ->orderBy('judul')
            ->get();
            
        return view('welcome', compact('fasilitas'));
    }
}