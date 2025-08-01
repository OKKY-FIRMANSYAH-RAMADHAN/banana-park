@extends('layout')
@section('title', 'Dampak')

@section('content')

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Dampak Sosial & Lingkungan</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/dampak.png') }}" alt="Dampak Sosial dan Lingkungan Banana Park"
            class="w-full rounded-xl" />

        {{-- Deskripsi --}}
        <p class="text-sm md:text-base leading-relaxed">
            Banana Park membawa perubahan nyata bagi warga Warugunung, tidak hanya sebagai ruang wisata,
            tetapi juga sebagai pemantik gerakan sosial, edukasi, dan ekonomi yang berkelanjutan.
        </p>

        {{-- List Dampak --}}
        <div class="space-y-4 text-sm md:text-base">
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-green-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-3-3v6m0-13a9 9 0 100 18 9 9 0 000-18z" />
                </svg>
                <p><strong>Meningkatkan Kesadaran Lingkungan:</strong> Warga aktif memilah sampah dan menanam pohon.</p>
            </div>
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-yellow-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zm0 2c-2.21 0-4 1.79-4 4v4h8v-4c0-2.21-1.79-4-4-4z" />
                </svg>
                <p><strong>Memperkuat Komunitas Lokal:</strong> Kolaborasi antar warga lintas usia dalam pembangunan taman.</p>
            </div>
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-blue-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h8m-4-4v8m-6 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p><strong>Peningkatan Minat Sekolah:</strong> SDN Warugunung 2 menjadi lebih diminati karena nilai edukatif taman.</p>
            </div>
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-pink-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h3m0 0a4 4 0 014-4h6a4 4 0 014 4m-1 4h3M4 14h16M6 18h12" />
                </svg>
                <p><strong>Mendukung UMKM Warga:</strong> Warga dapat menjual produk dan makanan saat event Banana Park.</p>
            </div>
        </div>

        {{-- Penutup --}}
        <p class="text-sm md:text-base leading-relaxed pt-4">
            Banana Park bukan sekadar taman, melainkan wajah baru gotong royong, keberdayaan, dan harapan masa depan.
        </p>
    </main>

@endsection
