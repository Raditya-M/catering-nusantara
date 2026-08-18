@extends('layouts.app')

@section('title', 'Menu')

@section('content')

<!-- Hero Menu -->
<section class="relative min-h-[45vh] overflow-hidden">
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/bg.png') }}"
            alt="Menu Catering Nusantara"
            class="absolute inset-0 w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <div class="relative z-10 min-h-[45vh] flex items-center">
        <div class="max-w-[1600px] mx-auto px-8 lg:px-14 w-full">
            <div class="pt-24 pb-16 text-center max-w-2xl mx-auto">
                <div class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider rounded-md">
                    <i class="fa-solid fa-utensils"></i>
                    Menu Kami
                </div>

                <h1 class="text-white text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.05] tracking-tight">
                    Semua Pilihan
                    <span class="text-amber-500">Menu Catering</span>
                </h1>

                <p class="mt-5 text-sm lg:text-base leading-relaxed text-white/60">
                    Pilih menu favoritmu untuk acara kamu, dijamin fresh dan lezat.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Daftar Menu -->
<section class="bg-stone-50 py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 pt-10">
            @forelse ($menus as $menu)
                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">

                    <!-- Foto -->
                    <div class="p-3">
                        <div class="rounded-xl overflow-hidden aspect-square">
                            <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                                 alt="{{ $menu->nama }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="px-5 pb-5">
                        <p class="text-xs text-stone-400 mb-1">
                            Paket {{ ucfirst($menu->paket) }}
                        </p>

                        <h3 class="font-bold text-lg leading-snug text-stone-900 min-h-[3.5rem]">
                            {{ $menu->nama }}
                        </h3>

                        <div class="flex items-center justify-between mt-4">
                            <a href="{{ route('menu.show', $menu) }}"
                               class="inline-flex items-center gap-2 border border-amber-500 text-amber-600
                                      hover:bg-amber-50 text-sm font-semibold px-4 py-2 rounded-full transition">
                                <i class="fa-solid fa-eye text-xs"></i>
                                Lihat Menu
                            </a>

                            <span class="font-bold text-lg text-stone-900">
                                Rp {{ number_format($menu->harga, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="col-span-4 text-center text-stone-400 py-10">Belum ada menu tersedia.</p>
            @endforelse
        </div>

        @if ($menus->hasPages())
            <div class="mt-14 flex justify-center">
                {{ $menus->links() }}
            </div>
        @endif

    </div>
</section>

@endsection