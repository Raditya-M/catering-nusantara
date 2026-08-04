<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-stone-50 text-stone-800">

    <!-- Navbar -->
    <header class="bg-white">
        <div class="max-w-300 mx-auto px-6 h-20 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-lg font-bold text-stone-800">
                catering<span class="text-amber-500">nusantara</span>
            </a>

            <div class="flex items-center gap-8">
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-500">
                <a href="{{ route('home') }}" class="text-stone-900">Home</a>
                <a href="#menu" class="hover:text-stone-900">Menu</a>
                <a href="#delivery" class="hover:text-stone-900">Pengiriman</a>
                <a href="#about" class="hover:text-stone-900">Tentang</a>
                <a href="#reviews" class="hover:text-stone-900">Ulasan</a>
                <a href="#contact" class="hover:text-stone-900">Kontak</a>
            </nav>

            <div class="flex items-center gap-5 text-stone-500">
                <button class="hover:text-amber-500"><i class="fa-regular fa-heart text-lg"></i></button>
                <button class="hover:text-amber-500"><i class="fa-regular fa-user text-lg"></i></button>
                <button class="hover:text-amber-500"><i class="fa-solid fa-bag-shopping text-lg"></i></button>
            </div>
            </div>

        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-stone-100 border-t border-stone-200 mt-10">
        <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 sm:grid-cols-3 gap-8 text-sm">
            <div>
                <h4 class="font-semibold mb-3">Pengiriman</h4>
                <p class="text-stone-500">Cabang Jakarta Selatan<br>Senin - Minggu: 06.00 - 18.00</p>
                <p class="text-stone-500 mt-3">Cabang Jakarta Timur<br>Senin - Sabtu: 06.00 - 18.00</p>
            </div>
            <div>
                <h4 class="font-semibold mb-3">Hubungi Kami</h4>
                <p class="text-stone-500"><i class="fa-brands fa-whatsapp mr-1"></i> 0812-0000-000 (Sales)</p>
                <p class="text-stone-500"><i class="fa-brands fa-whatsapp mr-1"></i> 0812-0000-001 (CS)</p>
            </div>
            <div>
                <h4 class="font-semibold mb-3">Informasi</h4>
                <ul class="text-stone-500 space-y-1">
                    <li><a href="#" class="hover:text-emerald-700">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-emerald-700">FAQ</a></li>
                    <li><a href="#" class="hover:text-emerald-700">Syarat dan Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-xs text-stone-400 py-4 border-t border-stone-200">
            &copy; {{ date('Y') }} Catering Nusantara. All Right Reserved.
        </div>
    </footer>
</body>
</html>