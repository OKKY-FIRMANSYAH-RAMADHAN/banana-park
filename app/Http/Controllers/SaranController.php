<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    /**
     * Menampilkan halaman dukung kami
     */
    public function index()
    {
        return view('dukungkami');
    }

    /**
     * Menyimpan saran baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Saran::create($validated);

        return redirect()->back()->with('success', 'Terima kasih! Saran Anda telah kami terima.');
    }
}
