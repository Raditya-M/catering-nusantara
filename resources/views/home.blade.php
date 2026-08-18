@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="relative min-h-screen overflow-hidden">
    <div class="absolute inset-0">
        <img
            src="{{ asset('images/bg.png') }}"
            alt="Catering Nusantara"
            class="absolute inset-0 w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-y-0 left-0 w-[52%] bg-gradient-to-r from-black via-black/80 to-transparent"></div>
    </div>

    <div class="relative z-10 min-h-screen">
        <div class="max-w-[1600px] mx-auto px-8 lg:px-14">
            <div class="min-h-[calc(100vh-135px)] flex items-center">
                <div class="w-full lg:w-[700px] pt-24 pb-12 lg:pb-20">
                    <h1 class="text-white text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-[1.05] tracking-tight">
                        Catering
                        <br>
                        Nusantara
                    </h1>

                    <p class="mt-3 text-2xl lg:text-3xl font-medium text-amber-500">
                        Cita Rasa Tradisi, Sentuhan Istimewa
                    </p>

                    <p class="mt-5 max-w-[390px] text-sm lg:text-base leading-relaxed text-white/55">
                        Hidangan lezat, higienis, dan penuh cinta
                        <br>
                        untuk setiap momen berharga Anda.
                    </p>

                    <div class="mt-7">
                        <a href="{{ route('menu') }}" class="inline-flex items-center gap-3 bg-amber-600 hover:bg-amber-500 text-white px-6 py-3 text-base font-medium transition duration-300">
                            <i class="fa-solid fa-utensils"></i>
                            Pesan Sekarang
                        </a>
                    </div>

                    <div class="mt-8 flex items-stretch w-full max-w-[570px]">
                        <div class="w-1/4 text-center px-3 border-r border-amber-800/50">
                            <div class="text-amber-500 text-3xl mb-2">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <p class="text-white/55 text-xs lg:text-sm leading-relaxed">
                                Bahan Segar
                                <br>
                                Berkualitas
                            </p>
                        </div>

                        <div class="w-1/4 text-center px-3 border-r border-amber-800/50">
                            <div class="text-amber-500 text-3xl mb-2">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <p class="text-white/55 text-xs lg:text-sm leading-relaxed">
                                Higienis
                                <br>
                                &amp; Aman
                            </p>
                        </div>

                        <div class="w-1/4 text-center px-3 border-r border-amber-800/50">
                            <div class="text-amber-500 text-3xl mb-2">
                                <i class="fa-solid fa-bell-concierge"></i>
                            </div>
                            <p class="text-white/55 text-xs lg:text-sm leading-relaxed">
                                Pengiriman
                                <br>
                                Tepat Waktu
                            </p>
                        </div>

                        <div class="w-1/4 text-center px-3">
                            <div class="text-amber-500 text-3xl mb-2">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <p class="text-white/55 text-xs lg:text-sm leading-relaxed">
                                Cita Rasa
                                <br>
                                Nusantara
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Pilihan -->
<section class="bg-white py-20 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider rounded-md">
                <i class="fa-solid fa-utensils"></i>
                Menu Pilihan
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-stone-900 leading-tight tracking-tight">
                Menu Favorit
                <span class="text-amber-600">Pelanggan Kami</span>
            </h2>

            <p class="mt-4 text-stone-500 text-base leading-relaxed">
                Beberapa hidangan andalan yang paling banyak dipesan untuk berbagai acara.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($menus as $menu)
                <div class="group bg-stone-50 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">

                    <div class="p-3">
                        <div class="rounded-xl overflow-hidden aspect-square">
                            <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                                 alt="{{ $menu->nama }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                    </div>

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
                <p class="col-span-4 text-center text-stone-400 py-10">Belum ada menu pilihan tersedia.</p>
            @endforelse
        </div>

        <div class="text-center mt-14">
            <a href="{{ route('menu') }}"
               class="inline-flex items-center gap-3 bg-amber-600 hover:bg-amber-500 text-white font-semibold px-7 py-3.5 transition duration-300">
                Lihat Semua Menu
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<section class="min-h-screen bg-stone-50 py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative h-[520px] lg:h-[600px]">
                <div class="absolute left-0 top-0 w-[42%] h-[58%] overflow-hidden rounded-2xl">
                    <img
                        src="{{ asset('images/ayam.jpg') }}"
                        alt="Hidangan Catering Nusantara"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500"
                    >
                </div>

                <div class="absolute left-[39%] top-[12%] w-[42%] h-[63%] overflow-hidden rounded-2xl">
                    <img
                        src="{{ asset('images/orang.jpg') }}"
                        alt="Tim Catering Nusantara"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500"
                    >
                </div>
            </div>

            <div class="max-w-xl">
                <div class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider rounded-md">
                    <i class="fa-solid fa-utensils"></i>
                    Tentang Kami
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-stone-900 leading-tight">
                    Cita Rasa
                    <span class="text-amber-600">
                        Nusantara
                    </span>
                    <br>
                    untuk Setiap Momen
                </h1>

                <p class="mt-6 text-stone-500 text-base lg:text-lg leading-relaxed">
                    Catering Nusantara hadir untuk menyajikan hidangan khas Indonesia dengan cita rasa autentik, bahan berkualitas, dan pelayanan terbaik.
                </p>

                <p class="mt-4 text-stone-500 text-base lg:text-lg leading-relaxed">
                    Kami percaya bahwa makanan bukan hanya tentang rasa, tetapi juga tentang menghadirkan kebahagiaan dan membuat setiap momen menjadi lebih istimewa.
                </p>

                <div class="grid grid-cols-2 gap-x-8 gap-y-6 mt-8 pt-7 border-t border-stone-200">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-full bg-amber-100 text-amber-600">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-stone-800">Bahan Berkualitas</h3>
                            <p class="text-sm text-stone-500 mt-1">Segar & pilihan</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-full bg-amber-100 text-amber-600">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-stone-800">Higienis</h3>
                            <p class="text-sm text-stone-500 mt-1">Aman & terpercaya</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-full bg-amber-100 text-amber-600">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-stone-800">Tepat Waktu</h3>
                            <p class="text-sm text-stone-500 mt-1">Pengiriman terpercaya</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-full bg-amber-100 text-amber-600">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-stone-800">Cinta Nusantara</h3>
                            <p class="text-sm text-stone-500 mt-1">Rasa khas Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="mt-9">
                    <a href="{{ route('menu') }}" class="inline-flex items-center gap-3 bg-amber-600 hover:bg-amber-500 text-white font-semibold px-7 py-3.5 transition duration-300">
                        Kenali Menu Kami
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Pilihan -->
<section class="bg-stone-900 py-20 lg:py-24">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider rounded-md">
                <i class="fa-solid fa-comment-dots"></i>
                Testimoni
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Kata Pelanggan Kami
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @forelse ($testimonisHome as $testimoni)
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <div class="text-amber-500 mb-3">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa-{{ $i <= $testimoni->rating ? 'solid' : 'regular' }} fa-star text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-white/70 text-sm leading-relaxed mb-5">
                        "{{ $testimoni->pesan }}"
                    </p>
                    <p class="font-semibold text-white text-sm">{{ $testimoni->nama }}</p>
                </div>
            @empty
                <p class="col-span-3 text-center text-white/40 py-6">Belum ada testimoni pilihan.</p>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('testimoni') }}" class="text-amber-400 hover:text-amber-300 text-sm font-semibold">
                Lihat Semua Testimoni &rarr;
            </a>
        </div>

    </div>
</section>

@endsection