<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Menampilkan halaman fasilitas
     */
    public function index()
    {
        $fasilitas = Fasilitas::where('aktif', true)
            ->orderBy('judul')
            ->get();
            
        return view('fasilitas', compact('fasilitas'));
    }
}
