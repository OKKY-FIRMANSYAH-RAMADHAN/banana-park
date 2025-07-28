@extends('layout')
@section('title', 'Kegiatan')

@section('content')

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Kegiatan</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/kegiatan.png') }}" alt="Kegiatan Banana Park" class="w-full rounded-xl" />


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

@endsection
