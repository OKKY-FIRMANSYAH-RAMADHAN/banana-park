@extends('layout')

@section('title', 'Beranda')

@section('content')
    <section class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-12">

        {{-- Hero Section --}}
        <div class="relative h-[400px] md:h-[480px] lg:h-[560px] bg-cover bg-center rounded-xl overflow-hidden" style="background-image: url('{{ asset('assets/images/banner.png') }}');">
            <div class="relative h-full flex flex-col justify-end items-center text-center p-6 md:p-8 lg:p-12 pb-12 md:pb-16 lg:pb-24 text-white">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold drop-shadow-lg">Selamat Datang di Banana Park</h1>
                <p class="mt-3 md:mt-4 text-base md:text-lg lg:text-xl max-w-2xl drop-shadow-lg">Taman edukasi lingkungan berbasis komunitas di Warugunung, Surabaya</p>
            </div>
        </div>

        {{-- Profil Umum --}}
        <div class="space-y-4">
            <h2 class="text-[22px] font-bold">Profil Umum</h2>
            <div class="border-t border-gray-200">
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4 md:gap-y-0 py-4 md:py-6 border-b border-gray-200">
                    <div class="space-y-1">
                        <p class="text-stone-500 text-sm md:text-base">Nama Tempat</p>
                        <p class="text-base font-medium">Banana Park</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-stone-500 text-sm md:text-base">Lokasi</p>
                        <p class="text-base">Jl. Surya No. 449, Kelurahan Warugunung, Kecamatan Karangpilang, Surabaya</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4 md:gap-y-0 py-4 md:py-6">
                    <div class="space-y-1">
                        <p class="text-stone-500 text-sm md:text-base">Luas Area</p>
                        <p class="text-base font-medium">±0,5 hektar</p>
                    </div>
                    <div class="space-y-1">
                        <p class="text-stone-500 text-sm md:text-base">Dibuka Sejak</p>
                        <p class="text-base font-medium">Oktober 2020</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sejarah Singkat --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Sejarah Singkat</h2>
            <p class="text-[16px] leading-relaxed ">
                Banana Park bermula dari lahan kosong yang dipenuhi pohon pisang yang kurang termanfaatkan. Pada tahun 2020, warga RW 01 Warugunung bersama Rudianto, komunitas lokal, dan dukungan Dinas Pendidikan Kota Surabaya mulai mengembangkan area ini menjadi taman edukasi lingkungan. Kini, Banana Park menjadi destinasi ekowisata yang ramah anak dan warga.
            </p>
        </div>

        {{-- Fasilitas Utama --}}
        <div class="space-y-4">
            <h2 class="text-[22px] font-bold">Fasilitas Utama</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6 text-sm text-center">
                @foreach ($fasilitas as $item)
                    <div class="flex flex-col items-center">
                        <div class="rounded-md overflow-hidden w-full h-full relative group cursor-pointer">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition-opacity duration-300 z-10"></div>
                            @if (Str::startsWith($item->gambar, 'http'))
                                <img src="{{ $item->gambar }}" class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110" alt="{{ $item->judul }}" />
                            @elseif ($item->gambar && !Str::contains($item->gambar, '/'))
                                <img src="{{ asset('assets/images/fasilitas/' . $item->gambar) }}" class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110" alt="{{ $item->judul }}" />
                            @else
                                <img src="{{ Storage::disk('public')->url($item->gambar) }}" class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110" alt="{{ $item->judul }}" />
                            @endif
                        </div>
                        <p class="mt-2 font-medium text-sm">{{ $item->judul }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Program Edukasi & Lingkungan --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Program Edukasi & Lingkungan</h2>
            <p class="text-[16px] leading-relaxed">
                Banana Park berfungsi sebagai taman edukatif yang memberikan pengalaman belajar langsung kepada masyarakat dan pelajar. Didukung oleh PT Suparma Tbk (Tissue See-U), Dinas Pendidikan, dan komunitas lokal dalam kegiatan hidroponik, daur ulang, dan pemanfaatan limbah.
            </p>
        </div>

        {{-- Pengelolaan & Komunitas --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Pengelolaan & Komunitas</h2>
            <p class="text-[16px] leading-relaxed">
                Dikelola secara gotong royong oleh warga RW 01 Warugunung, karang taruna, SDN Warugunung 2, dan relawan pemuda. Fokus pada penataan taman, penyiraman, dan event edukatif rutin.
            </p>
        </div>

        {{-- Acara & Aktivitas Unggulan --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Acara & Aktivitas Unggulan</h2>
            <p class="text-[16px] leading-relaxed">
                Pasar Lawas, Kelas Lapangan, dan Pameran Daur Ulang adalah agenda utama yang mempertemukan UMKM, pelajar, dan komunitas.
            </p>
        </div>

        {{-- Dampak & Kontribusi --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Dampak & Kontribusi</h2>
            <p class="text-[16px] leading-relaxed">
                Meningkatkan kualitas hidup warga, menjadikan taman sebagai ruang belajar hijau, dan ikon edukasi lingkungan di Surabaya Selatan.
            </p>
        </div>

        {{-- Visi Misi --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Visi & Misi</h2>
            <p class="text-[16px] leading-relaxed">
                <strong>Visi:</strong> Menjadi taman edukatif dan ekowisata terbaik di Surabaya Selatan.
            </p>
            <p class="text-[16px] leading-relaxed">
                <strong>Misi:</strong> Menyediakan ruang hijau, mendukung UMKM, dan menumbuhkan kesadaran lingkungan sejak dini.
            </p>
        </div>

        {{-- Kontak & Lokasi --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Kontak & Lokasi</h2>
            <p class="text-[16px] leading-relaxed">
                Alamat: Banana Park, Gang Surya No. 449, Warugunung, Karangpilang, Surabaya. <br>
                Kontak: Pak Rudianto – 0821-1234-5678 (Ketua RW 01) <br>
                Instagram: @bananapark_surabaya
            </p>
            <iframe
                src="https://maps.google.com/maps?width=600&height=400&hl=en&q=TAMAN%20EDUKASI%20BANANA%20PARK&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        {{-- Dukungan & Sponsor --}}
        <div class="space-y-2">
            <h2 class="text-[22px] font-bold">Dukungan & Sponsor</h2>
            <p class="text-[16px] leading-relaxed"> 
                PT Suparma Tbk, Dinas Pendidikan Surabaya, DKP Surabaya, Karang Taruna, dan komunitas warga RW 01.
            </p>
        </div>

    </section>
@endsection
