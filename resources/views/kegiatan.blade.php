<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan - Banana Park</title>
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
        <h1 class="text-2xl md:text-3xl font-bold">Kegiatan</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/kegiatan.png') }}" alt="Kegiatan Banana Park" class="w-full rounded-xl shadow-md object-cover" />


        {{-- Deskripsi --}}
        <p class="text-sm md:text-base leading-relaxed">
            Banana Park secara rutin menyelenggarakan kegiatan untuk masyarakat dan pelajar, antara lain:
        </p>

        {{-- List Kegiatan --}}
        <div class="space-y-4 text-sm md:text-base">
            <div class="flex items-start gap-3">
                <span class="text-xl">🍌</span>
                <p><strong>Pasar Lawas (Sabtu Malam Minggu):</strong> Pasar rakyat bernuansa jadul, menampilkan produk lokal, makanan tradisional, dan hiburan warga.</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-xl">🌿</span>
                <p><strong>Kelas Lapangan:</strong> Belajar langsung di alam terbuka: dari menanam sayur hingga membuat pupuk organik.</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-xl">🎨</span>
                <p><strong>Pameran Hasil Karya Daur Ulang:</strong> Menampilkan hasil kreasi warga dan pelajar dari bahan bekas.</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-xl">🎉</span>
                <p><strong>Festival Taman:</strong> Digelar tahunan, memamerkan kebun, hasil pertanian, dan pentas seni lokal.</p>
            </div>
        </div>

        {{-- Penutup --}}
        <p class="text-sm md:text-base leading-relaxed pt-4">
            Setiap kegiatan dirancang untuk memperkuat nilai edukatif, kolaboratif, dan keberlanjutan lingkungan di Banana Park.
        </p>
    </main>

    <x-footer />
</body>

</html>
