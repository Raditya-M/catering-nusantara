@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<!-- HERO SECTION -->
<section class="min-h-screen bg-stone-50 py-20 lg:py-28 flex items-center">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <!-- IMAGE GRID -->
            <div class="relative h-[480px] sm:h-[520px] lg:h-[600px]">
                <div class="absolute left-0 top-0 w-[55%] h-[65%] overflow-hidden rounded-2xl shadow-lg">
                    <img
                        src="{{ asset('images/ayam.jpg') }}"
                        alt="Hidangan Catering Nusantara"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500"
                    >
                </div>

                <div class="absolute right-0 bottom-0 w-[55%] h-[65%] overflow-hidden rounded-2xl shadow-xl border-4 border-stone-50">
                    <img
                        src="{{ asset('images/orang.jpg') }}"
                        alt="Tim Catering Nusantara"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500"
                    >
                </div>

                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-amber-500 text-white p-5 rounded-2xl shadow-xl text-center z-10 hidden sm:block">
                    <span class="block text-3xl font-extrabold">10+</span>
                    <span class="text-xs uppercase font-medium tracking-wider">Tahun Pengalaman</span>
                </div>
            </div>

            <!-- TEXT CONTENT -->
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
                    <a href="{{ route('menu') }}" class="inline-flex items-center gap-3 bg-amber-600 hover:bg-amber-500 text-white font-semibold px-7 py-3.5 rounded-full transition duration-300 shadow-md">
                        Kenali Menu Kami
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="bg-amber-600 py-16 text-white px-6 lg:px-10">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
            <span class="block text-4xl sm:text-5xl font-extrabold mb-2">15.000+</span>
            <span class="text-amber-100 text-sm sm:text-base">Porsi Terlayani</span>
        </div>
        <div>
            <span class="block text-4xl sm:text-5xl font-extrabold mb-2">500+</span>
            <span class="text-amber-100 text-sm sm:text-base">Acara Sukses</span>
        </div>
        <div>
            <span class="block text-4xl sm:text-5xl font-extrabold mb-2">50+</span>
            <span class="text-amber-100 text-sm sm:text-base">Variasi Menu</span>
        </div>
        <div>
            <span class="block text-4xl sm:text-5xl font-extrabold mb-2">99%</span>
            <span class="text-amber-100 text-sm sm:text-base">Kepuasan Pelanggan</span>
        </div>
    </div>
</section>

<!-- OUR STORY SECTION -->
<section class="py-20 lg:py-28 bg-white px-6 lg:px-10">
    <div class="max-w-5xl mx-auto text-center">
        <span class="text-amber-600 font-bold text-sm uppercase tracking-wider">Perjalanan Kami</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2 mb-6">
            Mewariskan Kelezatan Tradisional dalam Setiap Sajian
        </h2>
        <p class="text-stone-600 leading-relaxed text-base lg:text-lg mb-6">
            Berawal dari dapur kecil keluarga dengan resep turun-temurun, Catering Nusantara tumbuh menjadi penyedia layanan catering terpercaya. Kami berdedikasi untuk melestarikan keanekaragaman kuliner Indonesia dengan sentuhan modern yang higienis dan profesional.
        </p>
        <p class="text-stone-600 leading-relaxed text-base lg:text-lg">
            Baik untuk acara pernikahan, rapat korporat, ulang tahun, hingga konsumsi harian kantor, kami memastikan setiap porsi diproses dengan standar kebersihan tinggi dan rempah-rempah pilihan terbaik.
        </p>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="py-20 lg:py-28 bg-stone-50 px-6 lg:px-10">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-amber-600 font-bold text-sm uppercase tracking-wider">Langkah Mudah</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">
                Cara Pemesanan di Catering Nusantara
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl border border-stone-200 text-center relative">
                <div class="w-12 h-12 mx-auto bg-amber-500 text-white rounded-full flex items-center justify-center font-bold text-lg mb-5">
                    1
                </div>
                <h3 class="font-bold text-stone-800 text-lg mb-2">Pilih Menu</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                    Eksplorasi berbagai paket menu kuliner Nusantara sesuai selera kamu.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-stone-200 text-center relative">
                <div class="w-12 h-12 mx-auto bg-amber-500 text-white rounded-full flex items-center justify-center font-bold text-lg mb-5">
                    2
                </div>
                <h3 class="font-bold text-stone-800 text-lg mb-2">Konsultasi</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                    Diskusikan porsi, jadwal pengiriman, dan penyesuaian khusus dengan tim kami.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-stone-200 text-center relative">
                <div class="w-12 h-12 mx-auto bg-amber-500 text-white rounded-full flex items-center justify-center font-bold text-lg mb-5">
                    3
                </div>
                <h3 class="font-bold text-stone-800 text-lg mb-2">Proses Masak</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                    Bahan disiapkan & dimasak harian agar tetap segar dan lezat.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-stone-200 text-center relative">
                <div class="w-12 h-12 mx-auto bg-amber-500 text-white rounded-full flex items-center justify-center font-bold text-lg mb-5">
                    4
                </div>
                <h3 class="font-bold text-stone-800 text-lg mb-2">Pengiriman</h3>
                <p class="text-stone-500 text-sm leading-relaxed">
                    Pesanan diantar tepat waktu ke lokasi kamu dalam kondisi hangat.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-16 bg-white px-6 lg:px-10 text-center">
    <div class="max-w-4xl mx-auto bg-stone-900 text-white p-10 lg:p-16 rounded-3xl relative overflow-hidden">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
            Siap Menghidangkan Makanan Terbaik untuk Acara Anda?
        </h2>
        <p class="text-stone-400 max-w-2xl mx-auto text-sm sm:text-base mb-8">
            Hubungi tim kami sekarang untuk penawaran khusus dan konsultasi menu yang sesuai dengan kebutuhan acara kamu.
        </p>
        <a href="{{ route('kontak') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full transition duration-300">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

@endsection