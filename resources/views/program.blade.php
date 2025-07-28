@extends('layout')
@section('title', 'Program')
@section('content')
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
@endsection
