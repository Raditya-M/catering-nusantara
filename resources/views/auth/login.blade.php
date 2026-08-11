<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Catering Nusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-stone-50 text-stone-800">

    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

        <!-- Kiri: Form -->
        <div class="flex flex-col justify-center px-8 sm:px-16 lg:px-20 py-12">

            <a href="{{ route('home') }}" class="text-lg font-bold text-stone-800 mb-12">
                catering<span class="text-amber-500">nusantara</span>
            </a>

            <div class="max-w-sm w-full mx-auto lg:mx-0">
                <p class="text-orange-500 font-semibold text-sm mb-2">Selamat Datang Kembali!</p>
                <h1 class="text-3xl font-extrabold text-stone-900 mb-8">Masuk ke Akunmu</h1>

                @if (session('status'))
                    <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-xl mb-6">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-stone-700 mb-1.5">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               placeholder="nama@email.com"
                               class="w-full border border-stone-300 rounded-xl px-4 py-3 text-sm
                                      focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-sm font-medium text-stone-700">Kata Sandi</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs text-orange-500 hover:underline">
                                    Lupa kata sandi?
                                </a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" required
                               placeholder="••••••••"
                               class="w-full border border-stone-300 rounded-xl px-4 py-3 text-sm
                                      focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <label class="flex items-center gap-2 text-sm text-stone-600">
                        <input type="checkbox" name="remember"
                               class="rounded border-stone-300 text-orange-400 focus:ring-orange-400">
                        Ingat saya
                    </label> --}}

                    <button type="submit"
                            class="w-full bg-orange-400 hover:bg-orange-500 text-white font-semibold py-3 rounded-full transition">
                        Masuk
                    </button>
                </form>

                @if (Route::has('register'))
                    <p class="text-sm text-stone-500 mt-8 text-center">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-orange-500 font-semibold hover:underline">
                            Daftar sekarang
                        </a>
                    </p>
                @endif
            </div>
        </div>

        <!-- Kanan: Blob oranye -->
        <div class="hidden lg:flex relative items-center justify-center overflow-hidden">
            <svg class="absolute inset-0 w-full h-full text-orange-400"
                 viewBox="0 0 1000 1000" preserveAspectRatio="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="
                    M1000,0 L300,0
                    C220,60 180,150 220,230
                    C260,310 180,360 200,450
                    C220,540 140,580 170,670
                    C200,750 150,800 200,880
                    C240,940 300,970 370,1000
                    L1000,1000
                    Z"/>
            </svg>

            <!-- Konten Panel Kanan -->
            <div class="relative z-10 flex flex-col items-center justify-center max-w-md px-10 text-center space-y-6">
                <!-- Gambar Piring -->
                <div class="w-64 lg:w-72 h-auto flex items-center justify-center">
                    <img src="{{ asset('images/piring.png') }}"
                         alt="Menu andalan"
                         class="w-full h-auto drop-shadow-2xl object-contain hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Teks -->
                <div>
                    <h2 class="text-2xl font-extrabold text-white leading-snug">
                        Pesan Catering Favoritmu Kapan Saja
                    </h2>
                    <p class="text-orange-50 text-sm mt-3">
                        Masuk untuk lihat riwayat pesanan, simpan menu favorit, dan pesan lebih cepat.
                    </p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>