<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            ['gambar' => 'edukasi1.png', 'judul' => 'Edukasi Lingkungan untuk Sekolah', 'deskripsi' => 'Praktik langsung pemilahan sampah, penanaman, dan pengolahan limbah.'],
            ['gambar' => 'edukasi2.png', 'judul' => 'Edukasi Lingkungan untuk Sekolah', 'deskripsi' => 'Kunjungan rutin dari SDN Warugunung 2 dan sekolah sekitar.'],
            ['gambar' => 'hidroponik.png', 'judul' => 'Hidroponik', 'deskripsi' => 'Penanaman selada, caisim, dan sayuran lain secara modern.'],
            ['gambar' => 'kebunorganik.png', 'judul' => 'Kebun Organik', 'deskripsi' => 'Diselenggarakan bersama CSR PT Suparma Tbk.'],
            ['gambar' => 'daurulang.png', 'judul' => 'Daur Ulang', 'deskripsi' => 'Pembuatan ratusan kincir angin dari botol plastik bekas oleh siswa.'],
            ['gambar' => 'kriya.png', 'judul' => 'Kriya Ramah Lingkungan', 'deskripsi' => 'Workshop kerajinan tangan dari limbah rumah tangga.'],
            ['gambar' => 'umkm.png', 'judul' => 'Pelatihan UMKM', 'deskripsi' => 'Memberdayakan ibu-ibu dan pemuda untuk berwirausaha lokal.'],
            ['gambar' => 'pasarlawas.png', 'judul' => 'Pasar Tempo Doloe', 'deskripsi' => 'Pasar yang menjual barang barang lama'],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
