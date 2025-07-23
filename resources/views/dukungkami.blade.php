<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukung Kami - Banana Park</title>
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
        <h1 class="text-2xl md:text-3xl font-bold">Dukung Kami</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/dukung-kami.png') }}" alt="Dukung Kami Banana Park" class="w-full rounded-xl shadow-md object-cover p-5" />

        {{-- Deskripsi --}}
        <p class="text-sm md:text-base leading-relaxed">
            Kami percaya bahwa perubahan besar dimulai dari langkah kecil bersama. Dukung Banana Park agar terus tumbuh sebagai taman edukasi dan inspirasi!
        </p>

        {{-- Donasi & Relawan --}}
        <div class="space-y-6 text-sm md:text-base">
            <div>
                <p class="font-semibold">💰 Donasi & Sponsorship</p>
                <p class="mt-2">Kami membuka peluang kerja sama untuk mendukung:</p>
                <ul class="list-disc list-inside mt-1">
                    <li>Perluasan fasilitas</li>
                    <li>Program pelatihan lingkungan</li>
                    <li>Pemberdayaan UMKM lokal</li>
                </ul>
            </div>

            <div>
                <p class="font-semibold">🤝 Relawan & Komunitas</p>
                <p class="mt-2">Bergabunglah sebagai relawan taman, edukator lingkungan, atau fasilitator pelatihan lokal.</p>
            </div>

            <div>
                <p class="font-semibold">📞 Kontak Dukungan</p>
                <p class="mt-2">
                    Pak Budi Santoso (Ketua RW 01)<br>
                    📱 0821-1234-5678<br>
                    📧 bananapark.sby@gmail.com
                </p>
            </div>
        </div>

        {{-- Form Saran --}}
        <div class="pt-8">
            <h2 class="text-xl md:text-2xl font-semibold mb-4">Saran dan Masukan</h2>

            <form class="space-y-4 max-w-xl">
                <input type="text" placeholder="Nama Anda" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <input type="email" placeholder="Email Anda" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <textarea rows="4" placeholder="Pesan" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-full">
                    Kirim
                </button>
            </form>
        </div>
    </main>

    <x-footer />
</body>

</html>
