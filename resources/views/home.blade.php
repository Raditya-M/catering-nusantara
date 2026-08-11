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

    <div class="absolute inset-y-0 left-0
                w-[52%]
                bg-gradient-to-r
                from-black
                via-black/80
                to-transparent">
    </div>

</div>

    <div class="relative z-10 min-h-screen">

{{-- <header class="fixed top-0 left-0 right-0 z-50">

    <div class="bg-black/20 backdrop-blur-[2px]">

        <div class="max-w-[1600px] mx-auto px-8 lg:px-14">

            <nav class="h-[90px]
                        flex items-center justify-between
                        border-b border-amber-700/40">

                <a href="{{ route('home') }}"
                   class="flex-shrink-0">

                    <img
                        src="{{ asset('images/nusantaralogo.png') }}"
                        alt="Caterindo Nusantara"
                        class="w-[120px] lg:w-[130px] h-auto object-contain"
                    >

                </a>


                <div class="hidden md:flex items-center gap-7 lg:gap-10">

                    <a href="#menu"
                       class="text-white/80 hover:text-white
                              text-base lg:text-lg
                              font-semibold
                              transition duration-300">
                        Menu
                    </a>

                    <a href="#tentang"
                       class="text-white/80 hover:text-white
                              text-base lg:text-lg
                              font-semibold
                              transition duration-300">
                        Tentang
                    </a>

                    <a href="#harga"
                       class="text-white/80 hover:text-white
                              text-base lg:text-lg
                              font-semibold
                              transition duration-300">
                        Harga
                    </a>

                    <a href="#testimoni"
                       class="text-white/80 hover:text-white
                              text-base lg:text-lg
                              font-semibold
                              transition duration-300">
                        Testimoni
                    </a>

                    <a href="#kontak"
                       class="text-white/80 hover:text-white
                              text-base lg:text-lg
                              font-semibold
                              transition duration-300">
                        Kontak
                    </a>


                    <a href="#pesan"
                       class="flex items-center gap-3
                              bg-amber-600
                              hover:bg-amber-500
                              text-white
                              text-base
                              px-6
                              py-3
                              rounded-full
                              transition duration-300">

                        <i class="fa-solid fa-utensils"></i>

                        <span>
                            Pesan Sekarang
                        </span>

                    </a>

                </div>

                <button
                    type="button"
                    class="md:hidden text-white text-2xl">

                    <i class="fa-solid fa-bars"></i>

                </button>

            </nav>

        </div>

    </div>

</header> --}}

        <div class="max-w-[1600px] mx-auto px-8 lg:px-14">

            <div class="min-h-[calc(100vh-135px)]
                        flex items-center">

                <div class="w-full lg:w-[700px]
                        pt-24
                        pb-12
                        lg:pb-20">

                    <h1 class="text-white
                               text-5xl
                               sm:text-6xl
                               lg:text-7xl
                               font-extrabold
                               leading-[1.05]
                               tracking-tight">

                        Catering

                        <br>

                        Nusantara

                    </h1>


                    <p class="mt-3
                              text-2xl
                              lg:text-3xl
                              font-medium
                              text-amber-500">

                        Cita Rasa Tradisi,
                        Sentuhan Istimewa

                    </p>

                    <p class="mt-5
                              max-w-[390px]
                              text-sm
                              lg:text-base
                              leading-relaxed
                              text-white/55">

                        Hidangan lezat, higienis, dan penuh
                        cinta
                        <br>
                        untuk setiap momen berharga Anda.

                    </p>


                    <div class="mt-7">

                        <a href="#pesan"
                           class="inline-flex
                                  items-center
                                  gap-3
                                  bg-amber-600
                                  hover:bg-amber-500
                                  text-white
                                  px-6
                                  py-3
                                  text-base
                                  font-medium
                                  transition duration-300">

                            <i class="fa-solid fa-utensils"></i>

                            Pesan Sekarang

                        </a>

                    </div>

                    <div class="mt-8
                                flex
                                items-stretch
                                w-full
                                max-w-[570px]">


                        <div class="w-1/4
                                    text-center
                                    px-3
                                    border-r
                                    border-amber-800/50">

                            <div class="text-amber-500
                                        text-3xl
                                        mb-2">

                                <i class="fa-solid fa-leaf"></i>

                            </div>

                            <p class="text-white/55
                                      text-xs
                                      lg:text-sm
                                      leading-relaxed">

                                Bahan Segar
                                <br>
                                Berkualitas

                            </p>

                        </div>


                        <div class="w-1/4
                                    text-center
                                    px-3
                                    border-r
                                    border-amber-800/50">

                            <div class="text-amber-500
                                        text-3xl
                                        mb-2">

                                <i class="fa-solid fa-shield-halved"></i>

                            </div>

                            <p class="text-white/55
                                      text-xs
                                      lg:text-sm
                                      leading-relaxed">

                                Higienis
                                <br>
                                &amp; Aman

                            </p>

                        </div>


                        <div class="w-1/4
                                    text-center
                                    px-3
                                    border-r
                                    border-amber-800/50">

                            <div class="text-amber-500
                                        text-3xl
                                        mb-2">

                                <i class="fa-solid fa-bell-concierge"></i>

                            </div>

                            <p class="text-white/55
                                      text-xs
                                      lg:text-sm
                                      leading-relaxed">

                                Pengiriman
                                <br>
                                Tepat Waktu

                            </p>

                        </div>

                        <div class="w-1/4
                                    text-center
                                    px-3">

                            <div class="text-amber-500
                                        text-3xl
                                        mb-2">

                                <i class="fa-regular fa-heart"></i>

                            </div>

                            <p class="text-white/55
                                      text-xs
                                      lg:text-sm
                                      leading-relaxed">

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

<section class="min-h-screen bg-stone-50 py-20 lg:py-28">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <div class="grid grid-cols-1 lg:grid-cols-2
                    gap-12 lg:gap-20
                    items-center">

            <div class="relative
                        h-[520px]
                        lg:h-[600px]">


                <div class="absolute
                            left-0
                            top-0
                            w-[42%]
                            h-[58%]
                            overflow-hidden
                            rounded-2xl">

                    <img
                        src="{{ asset('images/ayam.jpg') }}"
                        alt="Hidangan Catering Nusantara"
                        class="w-full h-full object-cover
                               hover:scale-105
                               transition duration-500"
                    >

                </div>



                <!-- FOTO BESAR TENGAH -->

                <div class="absolute
                            left-[39%]
                            top-[12%]
                            w-[42%]
                            h-[63%]
                            overflow-hidden
                            rounded-2xl">

                    <!-- GANTI FOTO INI -->
                    <img
                        src="{{ asset('images/orang.jpg') }}"
                        alt="Tim Catering Nusantara"
                        class="w-full h-full object-cover
                               hover:scale-105
                               transition duration-500"
                    >

                </div>
            </div>


            <div class="max-w-xl">

                <div class="inline-flex
                            items-center
                            gap-2
                            mb-5
                            px-3
                            py-1.5
                            bg-amber-100
                            text-amber-700
                            text-xs
                            font-bold
                            uppercase
                            tracking-wider
                            rounded-md">

                    <i class="fa-solid fa-utensils"></i>

                    Tentang Kami

                </div>

                <h1 class="text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-extrabold
                           text-stone-900
                           leading-tight">

                    Cita Rasa
                    <span class="text-amber-600">
                        Nusantara
                    </span>
                    <br>

                    untuk Setiap Momen

                </h1>


                <p class="mt-6
                          text-stone-500
                          text-base
                          lg:text-lg
                          leading-relaxed">

                    Catering Nusantara hadir untuk menyajikan
                    hidangan khas Indonesia dengan cita rasa
                    autentik, bahan berkualitas, dan pelayanan
                    terbaik.

                </p>


                <p class="mt-4
                          text-stone-500
                          text-base
                          lg:text-lg
                          leading-relaxed">

                    Kami percaya bahwa makanan bukan hanya
                    tentang rasa, tetapi juga tentang menghadirkan
                    kebahagiaan dan membuat setiap momen menjadi
                    lebih istimewa.

                </p>


                <div class="grid grid-cols-2
                            gap-x-8
                            gap-y-6
                            mt-8
                            pt-7
                            border-t border-stone-200">


                    <div class="flex items-start gap-3">

                        <div class="w-10 h-10
                                    flex-shrink-0
                                    flex items-center justify-center
                                    rounded-full
                                    bg-amber-100
                                    text-amber-600">

                            <i class="fa-solid fa-leaf"></i>

                        </div>

                        <div>

                            <h3 class="font-bold
                                       text-stone-800">

                                Bahan Berkualitas

                            </h3>

                            <p class="text-sm
                                      text-stone-500
                                      mt-1">

                                Segar & pilihan

                            </p>

                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="w-10 h-10
                                    flex-shrink-0
                                    flex items-center justify-center
                                    rounded-full
                                    bg-amber-100
                                    text-amber-600">

                            <i class="fa-solid fa-shield-halved"></i>

                        </div>

                        <div>

                            <h3 class="font-bold
                                       text-stone-800">

                                Higienis

                            </h3>

                            <p class="text-sm
                                      text-stone-500
                                      mt-1">

                                Aman & terpercaya

                            </p>

                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="w-10 h-10
                                    flex-shrink-0
                                    flex items-center justify-center
                                    rounded-full
                                    bg-amber-100
                                    text-amber-600">

                            <i class="fa-solid fa-clock"></i>

                        </div>

                        <div>

                            <h3 class="font-bold
                                       text-stone-800">

                                Tepat Waktu

                            </h3>

                            <p class="text-sm
                                      text-stone-500
                                      mt-1">

                                Pengiriman terpercaya

                            </p>

                        </div>

                    </div>


                    <div class="flex items-start gap-3">

                        <div class="w-10 h-10
                                    flex-shrink-0
                                    flex items-center justify-center
                                    rounded-full
                                    bg-amber-100
                                    text-amber-600">

                            <i class="fa-solid fa-heart"></i>

                        </div>

                        <div>

                            <h3 class="font-bold
                                       text-stone-800">

                                Cinta Nusantara

                            </h3>

                            <p class="text-sm
                                      text-stone-500
                                      mt-1">

                                Rasa khas Indonesia

                            </p>

                        </div>

                    </div>

                </div>


                <div class="mt-9">

                    <a href="#menu"
                       class="inline-flex
                              items-center
                              gap-3
                              bg-amber-600
                              hover:bg-amber-500
                              text-white
                              font-semibold
                              px-7
                              py-3.5
                              transition
                              duration-300">

                        Kenali Menu Kami

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<footer class="bg-stone-100 border-t border-stone-200">

    <div class="max-w-6xl mx-auto px-6 py-10
                grid grid-cols-1 sm:grid-cols-3 gap-8
                text-sm">

        <div>

            <h4 class="font-semibold mb-3 text-stone-800">
                Pengiriman
            </h4>

            <p class="text-stone-500">
                Cabang Jakarta Selatan
                <br>
                Senin - Minggu: 06.00 - 18.00
            </p>

            <p class="text-stone-500 mt-3">
                Cabang Jakarta Timur
                <br>
                Senin - Sabtu: 06.00 - 18.00
            </p>

        </div>


        <div>

            <h4 class="font-semibold mb-3 text-stone-800">
                Hubungi Kami
            </h4>

            <p class="text-stone-500">
                <i class="fa-brands fa-whatsapp mr-1"></i>
                0812-0000-000 (Sales)
            </p>

            <p class="text-stone-500 mt-2">
                <i class="fa-brands fa-whatsapp mr-1"></i>
                0812-0000-001 (CS)
            </p>

        </div>

        <div>

            <h4 class="font-semibold mb-3 text-stone-800">
                Informasi
            </h4>

            <ul class="text-stone-500 space-y-1">

                <li>
                    <a href="#about"
                       class="hover:text-amber-600 transition">
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="#faq"
                       class="hover:text-amber-600 transition">
                        FAQ
                    </a>
                </li>

                <li>
                    <a href="#terms"
                       class="hover:text-amber-600 transition">
                        Syarat dan Ketentuan
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <div class="text-center
                text-xs
                text-stone-400
                py-4
                border-t border-stone-200">

        &copy; {{ date('Y') }}
        Catering Nusantara.
        All Right Reserved.

    </div>

</footer>

@endsection