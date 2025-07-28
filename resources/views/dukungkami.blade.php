@extends('layout')
@section('title', 'Dukung Kami')

@section('content')

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Dukung Kami</h1>

        {{-- Gambar --}}
        <img src="{{ asset('assets/images/dukung-kami.png') }}" alt="Dukung Kami Banana Park" class="w-full rounded-xl" />

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

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('saran.store') }}" method="POST" class="space-y-4 max-w-xl">
                @csrf
                <input type="text" name="nama" placeholder="Nama Anda" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 @error('nama') border-red-500 @enderror" value="{{ old('nama') }}" required>
                @error('nama')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <input type="email" name="email" placeholder="Email Anda" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <textarea name="pesan" rows="4" placeholder="Pesan" class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-400 @error('pesan') border-red-500 @enderror" required>{{ old('pesan') }}</textarea>
                @error('pesan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-full">
                    Kirim
                </button>
            </form>
        </div>
    </main>

@endsection
