@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- Hero -->
<section class="max-w-6xl mx-auto px-6 pt-12 pb-8">
    <div class="relative h-[480px] overflow-hidden">

        <!-- Blob oranye -->
        <div class="absolute right-0 top-0 w-[65%] h-full bg-orange-400
                    rounded-[60%_40%_30%_70%/60%_30%_70%_40%]">
        </div>

        <!-- Badge rating -->
        <div class="absolute left-4 top-10 bg-stone-900 text-white rounded-2xl px-5 py-3 shadow-lg z-10">
            <div class="flex items-center gap-1 text-amber-400 text-xs">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <span class="text-white ml-1">4.5</span>
            </div>
            <p class="text-[11px] text-stone-300 mt-1">5rb+ Pelanggan Puas</p>
        </div>

        <!-- Teks kiri -->
        <div class="absolute left-4 top-44 max-w-sm z-10">
            <p class="text-orange-500 font-semibold text-sm -rotate-2 mb-2">
                Praktis, Higienis, Selalu Lezat!
            </p>

            <h1 class="text-4xl sm:text-5xl font-extrabold text-stone-900 leading-tight -rotate-1">
                Catering Enak untuk Acara Kamu!
            </h1>

            <div class="flex items-center gap-4 mt-8">
                <a href="#menu"
                   class="inline-block bg-orange-400 hover:bg-orange-500 text-white font-semibold px-7 py-3 rounded-full transition">
                    Pesan Sekarang
                </a>

                <button class="flex items-center gap-2 text-orange-500 font-medium text-sm">
                    <span class="w-9 h-9 rounded-full border border-orange-400 flex items-center justify-center">
                        <i class="fa-solid fa-play text-xs"></i>
                    </span>
                    Lihat Menu
                </button>
            </div>
        </div>

        <!-- Badge diskon -->
        <div class="absolute right-[38%] top-16 z-20">
            <div class="relative w-16 h-16 flex items-center justify-center text-center">
                <i class="fa-solid fa-star text-white text-6xl absolute"></i>
                <span class="relative text-stone-900 text-[11px] font-bold leading-tight">
                    Promo<br>Spesial
                </span>
            </div>
        </div>

        <!-- Spot foto: ganti dengan foto produk kamu -->
        <div class="absolute right-6 bottom-0 w-[45%] h-[85%] flex items-end justify-center z-10">
            <img src="{{ asset('images/piring.png') }}"
                 alt="Menu andalan"
                 class="w-full drop-shadow-2xl translate-y-5 object-contain">
        </div>

    </div>
</section>

@endsection