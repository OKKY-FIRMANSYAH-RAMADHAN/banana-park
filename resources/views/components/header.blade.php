@php
    use Illuminate\Support\Facades\Route;

    $menus = [
        ['label' => 'Beranda', 'route' => 'welcome', 'slug' => 'beranda'],
        ['label' => 'Tentang Kami', 'route' => 'tentang', 'slug' => 'tentang-kami'],
        ['label' => 'Fasilitas', 'route' => 'fasilitas', 'slug' => 'fasilitas'],
        ['label' => 'Program', 'route' => 'program', 'slug' => 'program'],
        ['label' => 'Komunitas', 'route' => 'komunitas', 'slug' => 'komunitas'],
        ['label' => 'Kegiatan', 'route' => 'kegiatan', 'slug' => 'kegiatan'],
        ['label' => 'Dampak', 'route' => 'dampak', 'slug' => 'dampak'],
        ['label' => 'Dukung Kami', 'route' => 'dukungan', 'slug' => 'dukung-kami'],
    ];

    $currentRoute = Route::currentRouteName();
@endphp

<header x-data="{ open: false }" class="bg-yellow-300 shadow-sm sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between px-4 sm:px-6 md:px-8 py-2 sm:py-3 md:py-2">
        {{-- Logo --}}
        <div class="flex items-center gap-2 font-bold text-base sm:text-lg md:text-base lg:text-lg">
            <img src="{{ asset('assets/images/logo-banana.png') }}" alt="Banana Icon" class="w-10 sm:w-6 md:w-7 lg:w-10 xl:w-12" />
            <span class="text-gray-800 text-base md:text-sm lg:text-xl">Banana Park</span>
        </div>

        {{-- Hamburger Button (Mobile) --}}
        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none relative z-50 p-2 -m-1 touch-manipulation">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Desktop Menu --}}
        <nav class="hidden md:flex gap-1 md:gap-1 lg:gap-2 xl:gap-4 text-xs md:text-xs lg:text-xs xl:text-sm font-medium text-gray-700">
            @foreach ($menus as $menu)
                <a
                    href="{{ route($menu['route']) }}"
                    class="px-1 md:px-2 lg:px-2 xl:px-3 py-1 md:py-1 rounded-full whitespace-nowrap text-center
                        {{ $currentRoute === $menu['route'] ? 'bg-white text-black font-bold' : 'hover:bg-yellow-400 transition' }} "
                >
                    {{ $menu['label'] }}
                </a>
            @endforeach
        </nav>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" class="md:hidden px-4 sm:px-5 pb-3 space-y-1 sm:space-y-2" x-transition>
        @foreach ($menus as $menu)
            <a
                href="{{ route($menu['route']) }}"
                class="block px-3 py-2 rounded-lg text-sm font-medium text-gray-700
                    {{ $currentRoute === $menu['route'] ? 'bg-white text-black font-bold' : 'hover:bg-yellow-400 transition' }}"
            >
                {{ $menu['label'] }}
            </a>
        @endforeach
    </div>
</header>


