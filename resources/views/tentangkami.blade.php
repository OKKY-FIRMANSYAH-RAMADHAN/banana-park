<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Banana Park</title>
    @vite(['resources/css/app.css'])
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white text-gray-800">
    <x-header />

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Tentang Kami</h1>

        {{-- Gambar --}}

        <img src="{{ asset('assets/images/tentang-kami.png') }}" alt="Tentang Banana Park" class="w-full rounded-xl shadow-md object-cover p-5">


        {{-- Isi Konten --}}
        <div class="text-sm md:text-base leading-relaxed space-y-4">
            <p>
                Banana Park Warugunung adalah taman edukasi lingkungan yang terletak di Kelurahan Warugunung, Kecamatan Karangpilang, Surabaya. Dibangun sejak tahun 2020 oleh warga RW 01, Banana Park hadir sebagai ruang terbuka hijau yang ramah anak, komunitas, dan lingkungan.
            </p>
            <p>
                Diprakarsai oleh Rudianto (Ketua RW 01), taman ini berkembang dari lahan kosong menjadi tempat wisata edukatif, berkat dukungan Dinas Pendidikan Kota Surabaya dan CSR PT Suparma Tbk. Dengan luas sekitar 0.5 hektar, Banana Park menjadi contoh nyata kolaborasi masyarakat dalam menciptakan ruang belajar, bermain, dan berkarya di tengah kota.
            </p>
        </div>
    </main>

    <x-footer />
</body>
</html>
