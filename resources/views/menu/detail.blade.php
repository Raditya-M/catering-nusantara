@extends('layouts.app')

@section('title', $menu->nama)

@section('content')
<section class="max-w-5xl mx-auto px-6 py-14">

    <a href="{{ url()->previous() }}" class="text-sm text-stone-500 hover:text-orange-500 mb-6 inline-block">
        &larr; Kembali
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        <!-- Gambar -->
        <div class="rounded-3xl overflow-hidden bg-orange-100">
            <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                 alt="{{ $menu->nama }}"
                 class="w-full h-96 object-cover">
        </div>

        <!-- Info -->
        <div>
            @if ($menu->aktif)
                <span class="bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full">
                    Menu Andalan
                </span>
            @endif

            <h1 class="text-3xl font-extrabold text-stone-900 mt-4 mb-3">
                {{ $menu->nama }}
            </h1>

            <p class="text-orange-500 font-bold text-2xl mb-6">
                ${{ number_format($menu->harga, 2) }}
            </p>

            <div class="prose prose-sm text-stone-600 max-w-none">
                @if ($menu->deskripsi)
                    <p>{{ $menu->deskripsi }}</p>
                @else
                    <p class="text-stone-400 italic">Belum ada deskripsi untuk menu ini.</p>
                @endif
            </div>

            <div class="flex items-center gap-4 mt-8">
                <a href="#"
                   class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-7 py-3 rounded-full transition">
                    Pesan Sekarang
                </a>
            </div>
        </div>

    </div>
</section>
@endsection