<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas - Banana Park</title>
    @vite(['resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white text-gray-800">
    <x-header />

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Komunitas</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/komunitas.png') }}" alt="Komunitas Banana Park" class="w-full rounded-xl shadow-md object-cover" />


        {{-- Deskripsi --}}
        <p class="text-sm md:text-base leading-relaxed">
            Banana Park dikelola secara gotong royong oleh warga RW 01 Warugunung yang terdiri dari 7 RT.
            Keterlibatan komunitas sangat kuat dan mencakup:
        </p>

        {{-- List Komunitas --}}
        <div class="space-y-4 text-sm md:text-base">
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-yellow-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.75 3L8.25 5.25M14.25 3L15.75 5.25M3 8.25H21M4.5 10.5L6 20.25H18L19.5 10.5M9 14.25H15" />
                </svg>
                <p><strong>Karang Taruna Karangpilang:</strong> Mengelola event dan kegiatan pemuda.</p>
            </div>
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-green-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6l4 2M5 3l14 18" />
                </svg>
                <p><strong>Kelompok Tani & Relawan Lingkungan:</strong> Menangani perawatan tanaman dan kebun.</p>
            </div>
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-blue-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
                <p><strong>SDN Warugunung 2:</strong> Mitra utama dalam program edukasi.</p>
            </div>
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-gray-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M4 6h16M5 14h14M6 18h12" />
                </svg>
                <p><strong>Pengurus RW & RT:</strong> Koordinator kegiatan, pemeliharaan, dan komunikasi.</p>
            </div>
        </div>

        {{-- Penutup --}}
        <p class="text-sm md:text-base leading-relaxed pt-4">
            Semangat kolaboratif inilah yang menjadikan Banana Park hidup dan berkembang setiap harinya.
        </p>
    </main>

    <x-footer />
</body>

</html>
