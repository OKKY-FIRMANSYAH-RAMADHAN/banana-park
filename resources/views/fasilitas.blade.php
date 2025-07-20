<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas - Banana Park</title>
    @vite(['resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white text-gray-800">
    <x-header />

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Fasilitas</h1>

        {{-- Subjudul --}}
        <p class="text-sm md:text-base leading-relaxed">
            Banana Park menyediakan berbagai fasilitas yang mendukung kegiatan edukasi lingkungan dan rekreasi keluarga:
        </p>

        {{-- List Fasilitas --}}
        <div class="text-sm md:text-base leading-relaxed space-y-6">
            @php
                $fasilitas = [
                    ['img' => 'gapura.png', 'judul' => 'Gapura berbentuk pisang', 'deskripsi' => 'Pintu masuk yang menjadi ikon khas Banana Park dengan desain unik berbentuk pisang.'],
                    ['img' => 'gazebo.png', 'judul' => 'Gazebo warga', 'deskripsi' => 'Tempat berkumpul dan beristirahat yang nyaman untuk warga dan pengunjung.'],
                    ['img' => 'playground.png', 'judul' => 'Playground anak-anak', 'deskripsi' => 'Area bermain yang aman dan menyenangkan untuk anak-anak dengan berbagai permainan.'],
                    ['img' => 'kolam-ikan.png', 'judul' => 'Kolam ikan', 'deskripsi' => 'Kolam ikan yang menjadi daya tarik sekaligus sarana edukasi tentang budidaya ikan.'],
                    ['img' => 'kebun-pisang.png', 'judul' => 'Kebun pisang & taman sayur', 'deskripsi' => 'Area perkebunan pisang dan sayuran organik untuk pembelajaran pertanian berkelanjutan.'],
                    ['img' => 'hidroponik.png', 'judul' => 'Taman Hidroponik', 'deskripsi' => 'Sistem tanam modern tanpa tanah untuk edukasi teknologi pertanian masa depan.'],
                    ['img' => 'pasar-tempo-doloe.png', 'judul' => 'Pasar Tempo Doloe', 'deskripsi' => 'Replika pasar tradisional untuk mengenalkan budaya dan sejarah perdagangan lokal.'],
                ];
            @endphp

            @foreach ($fasilitas as $item)
                <div class="flex items-start gap-3 md:gap-4">
                    <img src="{{ asset('assets/images/fasilitas/' . $item['img']) }}" alt="{{ $item['judul'] }}" class="w-12 h-12 md:w-[52px] md:h-[52px] object-cover rounded-xl flex-shrink-0" />
                    <div>
                        <h3 class="font-semibold">{{ $item['judul'] }}</h3>
                        <p class="text-gray-600">{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-footer />
</body>
</html>
