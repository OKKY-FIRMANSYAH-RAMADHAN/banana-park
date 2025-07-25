<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program - Banana Park</title>
    @vite(['resources/css/app.css'])
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @php
        use Illuminate\Support\Str;
    @endphp
</head>

<body class="bg-white text-gray-800">
    <x-header />

    <main class="px-5 md:px-12 lg:px-32 xl:px-64 py-8 space-y-4">
        {{-- Judul --}}
        <h1 class="text-2xl md:text-3xl font-bold">Program</h1>

        {{-- Subjudul --}}
        <p class="text-sm md:text-base leading-relaxed">
            Banana Park memiliki berbagai program yang difokuskan pada edukasi lingkungan dan pemberdayaan masyarakat:
        </p>

        {{-- List Program --}}
        <div class="text-sm md:text-base leading-relaxed space-y-6">
            @foreach ($programs as $item)
                <div class="flex items-start gap-3 md:gap-4">
                    @if (Str::startsWith($item->gambar, 'http'))
                        <img src="{{ $item->gambar }}" alt="{{ $item->judul }}" class="w-12 h-12 md:w-[52px] md:h-[52px] object-cover rounded-xl flex-shrink-0" />
                    @elseif ($item->gambar && !Str::contains($item->gambar, '/'))
                        <img src="{{ asset('assets/images/program/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-12 h-12 md:w-[52px] md:h-[52px] object-cover rounded-xl flex-shrink-0" />
                    @else
                        <img src="{{ Storage::disk('public')->url($item->gambar) }}" alt="{{ $item->judul }}" class="w-12 h-12 md:w-[52px] md:h-[52px] object-cover rounded-xl flex-shrink-0" />
                    @endif
                    <div>
                        <h3 class="font-semibold">{{ $item->judul }}</h3>
                        <p class="text-gray-600">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-footer />
</body>

</html>
