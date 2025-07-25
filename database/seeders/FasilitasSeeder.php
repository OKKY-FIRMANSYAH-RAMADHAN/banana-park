<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fasilitas = [
            [
                'judul' => 'Tugu Pisang',
                'deskripsi' => 'Pintu masuk yang menjadi ikon khas Banana Park dengan desain unik berbentuk pisang.',
                'gambar' => 'gapura.png',
                'aktif' => true,
            ],
            [
                'judul' => 'Gazebo warga',
                'deskripsi' => 'Tempat berkumpul dan beristirahat yang nyaman untuk warga dan pengunjung.',
                'gambar' => 'gazebo.png',
                'aktif' => true,
            ],
            [
                'judul' => 'Playground anak-anak',
                'deskripsi' => 'Area bermain yang aman dan menyenangkan untuk anak-anak dengan berbagai permainan.',
                'gambar' => 'playground.png',
                'aktif' => true,
            ],
            [
                'judul' => 'Kolam ikan',
                'deskripsi' => 'Kolam ikan yang menjadi daya tarik sekaligus sarana edukasi tentang budidaya ikan.',
                'gambar' => 'kolam-ikan.png',
                'aktif' => true,
            ],
            [
                'judul' => 'Kebun pisang & taman sayur',
                'deskripsi' => 'Area perkebunan pisang dan sayuran organik untuk pembelajaran pertanian berkelanjutan.',
                'gambar' => 'kebun-pisang.png',
                'aktif' => true,
            ],
            [
                'judul' => 'Taman Hidroponik',
                'deskripsi' => 'Sistem tanam modern tanpa tanah untuk edukasi teknologi pertanian masa depan.',
                'gambar' => 'hidroponik.png',
                'aktif' => true,
            ],
            [
                'judul' => 'Pasar Tempo Doloe',
                'deskripsi' => 'Replika pasar tradisional untuk mengenalkan budaya dan sejarah perdagangan lokal.',
                'gambar' => 'pasar-tempo-doloe.png',
                'aktif' => true,
            ],
        ];

        foreach ($fasilitas as $item) {
            Fasilitas::create($item);
        }
    }
}
