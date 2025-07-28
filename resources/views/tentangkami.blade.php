@extends('layout')

@section('title', 'Tentang Kami')

@section('content')

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Tentang Kami</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/tentang-kami.png') }}" alt="Tentang Banana Park" class="w-full rounded-xl">

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
@endsection
