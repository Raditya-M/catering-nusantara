@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<!-- HERO CONTACT -->
<section class="bg-white py-16 lg:py-24 text-center px-6 mt-5">
    <div class="max-w-4xl mx-auto">
        <span class="inline-block text-amber-500 font-semibold text-sm lg:text-base mb-3">
            Butuh Bantuan? Kami Siap Membantu!
        </span>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-stone-900 tracking-tight leading-tight mb-4">
            Hubungi <span class="text-amber-500">Kami</span>
        </h1>

        <p class="max-w-2xl mx-auto text-stone-500 text-sm lg:text-base leading-relaxed">
            Punya pertanyaan tentang menu, pemesanan, atau ingin memberikan masukan? Tim Catering Nusantara siap membantu kebutuhan kamu.
        </p>
    </div>
</section>

<!-- CONTACT CARDS -->
<section class="py-12 lg:py-20 px-6 lg:px-14 bg-stone-50">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        
        <!-- SALES -->
        <div class="bg-white p-8 lg:p-9 rounded-2xl border border-stone-200 shadow-sm hover:-translate-y-2 hover:shadow-md transition duration-300 text-center flex flex-col justify-between">
            <div>
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-2xl">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <h3 class="text-xl font-bold text-stone-900 mb-2">Sales WhatsApp</h3>
                <p class="text-stone-500 text-sm leading-relaxed mb-5 min-h-[48px]">
                    Hubungi tim sales untuk kebutuhan pemesanan catering dan konsultasi acara.
                </p>
            </div>
            <div>
                <span class="block text-sm font-semibold text-stone-800 mb-4">
                    +62 878-7030-6031
                </span>
                <a 
                    href="https://wa.me/6287870306031?text=Halo%20Catering%20Nusantara,%20saya%20ingin%20bertanya%20tentang%20pemesanan."
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-sm px-6 py-3 rounded-full transition duration-300 w-full"
                >
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    Chat WhatsApp
                </a>
            </div>
        </div>

        <!-- CS -->
        <div class="bg-white p-8 lg:p-9 rounded-2xl border border-stone-200 shadow-sm hover:-translate-y-2 hover:shadow-md transition duration-300 text-center flex flex-col justify-between">
            <div>
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-2xl">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3 class="text-xl font-bold text-stone-900 mb-2">CS WhatsApp</h3>
                <p class="text-stone-500 text-sm leading-relaxed mb-5 min-h-[48px]">
                    Ada kendala atau pertanyaan mengenai pesanan? Customer Service siap membantu.
                </p>
            </div>
            <div>
                <span class="block text-sm font-semibold text-stone-800 mb-4">
                    +62 878-7030-6031
                </span>
                <a 
                    href="https://wa.me/6287870306031?text=Halo%20Catering%20Nusantara,%20saya%20ingin%20menghubungi%20Customer%20Service."
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-sm px-6 py-3 rounded-full transition duration-300 w-full"
                >
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    Chat WhatsApp
                </a>
            </div>
        </div>

        <!-- SARAN -->
        <div class="bg-white p-8 lg:p-9 rounded-2xl border border-stone-200 shadow-sm hover:-translate-y-2 hover:shadow-md transition duration-300 text-center flex flex-col justify-between">
            <div>
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center text-2xl">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-bold text-stone-900 mb-2">Saran & Keluhan</h3>
                <p class="text-stone-500 text-sm leading-relaxed mb-5 min-h-[48px]">
                    Sampaikan kritik, saran, atau pengalaman kamu agar pelayanan kami semakin baik.
                </p>
            </div>
            <div>
                <span class="block text-sm font-semibold text-stone-800 mb-4">
                    Kami siap mendengar kamu
                </span>
                <a 
                    href="#feedback"
                    class="inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold text-sm px-6 py-3 rounded-full transition duration-300 w-full"
                >
                    <i class="fa-regular fa-envelope"></i>
                    Beri Masukan
                </a>
            </div>
        </div>

    </div>
</section>

<!-- FEEDBACK FORM -->
<section class="py-16 lg:py-24 px-6 lg:px-14 bg-white" id="feedback">
    <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <div class="lg:col-span-5">
            <span class="text-amber-500 font-semibold text-sm">
                Saran & Keluhan
            </span>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-stone-900 leading-tight mt-2 mb-4">
                Ceritakan Pengalamanmu
            </h2>
            <p class="text-stone-500 text-sm leading-relaxed">
                Masukan dari kamu sangat berarti untuk Catering Nusantara. Kami akan terus berusaha memberikan makanan dan pelayanan terbaik untuk setiap pelanggan.
            </p>

            <div class="mt-6 space-y-3">
                <div class="flex items-center gap-3 text-stone-700 text-sm">
                    <span class="text-amber-500 font-bold">✓</span>
                    Pelayanan yang lebih baik
                </div>
                <div class="flex items-center gap-3 text-stone-700 text-sm">
                    <span class="text-amber-500 font-bold">✓</span>
                    Kualitas makanan terjaga
                </div>
                <div class="flex items-center gap-3 text-stone-700 text-sm">
                    <span class="text-amber-500 font-bold">✓</span>
                    Pengalaman pelanggan lebih nyaman
                </div>
            </div>
        </div>

        <div class="lg:col-span-7">
            <form action="#" method="POST" class="bg-stone-50 p-8 lg:p-10 rounded-2xl border border-stone-200">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block text-xs font-semibold text-stone-800 uppercase tracking-wider mb-2">
                        Nama
                    </label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        placeholder="Masukkan nama kamu"
                        class="w-full bg-white border border-stone-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-amber-500 transition duration-300"
                        required
                    >
                </div>

                <div class="mb-5">
                    <label for="email" class="block text-xs font-semibold text-stone-800 uppercase tracking-wider mb-2">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Masukkan email kamu"
                        class="w-full bg-white border border-stone-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-amber-500 transition duration-300"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="pesan" class="block text-xs font-semibold text-stone-800 uppercase tracking-wider mb-2">
                        Saran / Keluhan
                    </label>
                    <textarea 
                        id="pesan" 
                        name="pesan" 
                        rows="4"
                        placeholder="Tuliskan saran atau keluhan kamu..."
                        class="w-full bg-white border border-stone-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-amber-500 transition duration-300 resize-y"
                        required
                    ></textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-amber-500 hover:bg-amber-600 text-white font-semibold text-sm py-3.5 rounded-full transition duration-300"
                >
                    Kirim Masukan
                </button>
            </form>
        </div>

    </div>
</section>

@endsection