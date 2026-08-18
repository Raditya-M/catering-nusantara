@extends('layouts.app')

@section('title', $menu->nama)

@section('content')

<section class="bg-stone-50 py-14">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Breadcrumb -->
        <div class="flex items-center gap-2 text-sm text-stone-500 mb-8 mt-12">
            <a href="{{ route('home') }}" class="hover:text-amber-600 transition">Home</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <a href="{{ route('menu') }}" class="hover:text-amber-600 transition">Menu</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span class="text-stone-800 font-medium">{{ $menu->nama }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">

            <!-- Gambar -->
            <div class="rounded-2xl overflow-hidden bg-white shadow-sm">
                <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                     alt="{{ $menu->nama }}"
                     class="w-full h-[420px] object-cover">
            </div>

            <!-- Info -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <span class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-md">
                        <i class="fa-solid fa-utensils"></i>
                        Paket {{ ucfirst($menu->paket) }}
                    </span>

                    @if ($menu->aktif)
                        <span class="inline-flex items-center gap-1 bg-stone-900 text-white text-xs font-semibold px-3 py-1.5 rounded-md">
                            <i class="fa-solid fa-star text-amber-400 text-[10px]"></i>
                            Menu Andalan
                        </span>
                    @endif
                </div>

                <h1 class="text-3xl sm:text-4xl font-extrabold text-stone-900 leading-tight tracking-tight mb-4">
                    {{ $menu->nama }}
                </h1>

                <p class="text-amber-600 font-bold text-3xl mb-6">
                    Rp {{ number_format($menu->harga, 0, ',', '.') }}
                </p>

                <div class="text-stone-600 text-base leading-relaxed mb-8">
                    @if ($menu->deskripsi)
                        <p>{{ $menu->deskripsi }}</p>
                    @else
                        <p class="text-stone-400 italic">Belum ada deskripsi untuk menu ini.</p>
                    @endif
                </div>

                <!-- Info tambahan -->
                <div class="grid grid-cols-3 gap-4 mb-8 pt-6 border-t border-stone-200">
                    <div class="text-center">
                        <div class="text-amber-500 text-xl mb-1.5">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <p class="text-xs text-stone-500">Bahan Segar</p>
                    </div>
                    <div class="text-center">
                        <div class="text-amber-500 text-xl mb-1.5">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <p class="text-xs text-stone-500">Higienis</p>
                    </div>
                    <div class="text-center">
                        <div class="text-amber-500 text-xl mb-1.5">
                            <i class="fa-solid fa-bell-concierge"></i>
                        </div>
                        <p class="text-xs text-stone-500">Tepat Waktu</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <a href="#pesan"
                       class="inline-flex items-center gap-3 bg-amber-600 hover:bg-amber-500 text-white font-semibold px-7 py-3.5 transition duration-300">
                        <i class="fa-solid fa-utensils"></i>
                        Pesan Sekarang
                    </a>

                    <a href="{{ url()->previous() }}"
                       class="inline-flex items-center gap-2 text-stone-500 hover:text-amber-600 text-sm font-medium transition">
                        <i class="fa-solid fa-arrow-left text-xs"></i>
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection