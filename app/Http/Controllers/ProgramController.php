<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Menampilkan halaman program
     */
    public function index()
    {
        $programs = Program::where('aktif', true)
            ->orderBy('judul')
            ->get();
            
        return view('program', compact('programs'));
    }
}
