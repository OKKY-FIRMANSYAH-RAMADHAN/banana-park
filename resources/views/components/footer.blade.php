<footer class="bg-[#edc743] text-black text-sm mt-16">
    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-10 grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        {{-- Kolom 1: Tautan --}}
        <div>
            <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">Tautan</h3>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-2 gap-y-2">
                <a href="{{ route('tentang') }}" class="text-xs sm:text-sm hover:underline">Tentang Kami</a>
                <a href="{{ route('fasilitas') }}" class="text-xs sm:text-sm hover:underline">Fasilitas</a>
                <a href="{{ route('program') }}" class="text-xs sm:text-sm hover:underline">Program</a>
                <a href="{{ route('komunitas') }}" class="text-xs sm:text-sm hover:underline">Komunitas</a>
                <a href="{{ route('kegiatan') }}" class="text-xs sm:text-sm hover:underline">Kegiatan</a>
                <a href="{{ route('dampak') }}" class="text-xs sm:text-sm hover:underline">Dampak</a>
                <a href="{{ route('dukungan') }}" class="text-xs sm:text-sm hover:underline">Dukung Kami</a>
            </div>
        </div>

        {{-- Kolom 2: Kontak --}}
        <div>
            <h3 class="text-base sm:text-lg font-semibold mb-2 sm:mb-3">Kontak</h3>
            <div class="space-y-2">
                <div class="flex items-start gap-2">
                    <span class="text-sm"><i class="fa-solid fa-map-location-dot"></i></span>
                    <p class="text-xs sm:text-sm leading-relaxed">Jl. Mastrip IX, Warugunung, Kec. Karangpilang, Surabaya</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm"><i class="fa-brands fa-instagram"></i></span>
                    <p class="text-xs sm:text-sm">banana_park_Surabaya</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm"><i class="fa-solid fa-phone"></i></span>
                    <p class="text-xs sm:text-sm">0857 - 3097 - 3326</p>
                </div>
            </div>
        </div>

        {{-- Kolom 3: Banana Park Surabaya --}}
        <div class="flex flex-col md:items-center md:text-center">
            <h3 class="text-sm sm:text-base lg:text-lg font-semibold leading-tight mb-3">Banana Park Surabaya</h3>
            <img src="{{ asset('assets/images/logo-banana.png') }}" alt="Banana Park Logo" class="w-24 sm:w-28 lg:w-32">
        </div>
    </div>

    {{-- Copyright --}}
    <div class="text-center text-xs text-black py-3 sm:py-4 border-t border-black/10">
        © {{ date('Y') }} Banana Park. Semua hak cipta dilindungi.
    </div>
</footer>
