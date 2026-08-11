<!DOCTYPE html>
<html lang="id" class="[scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/nusantaralogo.png') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('images/nusantaralogo.png') }}?v=2" type="image/x-icon">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-stone-800">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50">

    <div class="bg-black/20 backdrop-blur-[2px]">

        <div class="max-w-[1600px] mx-auto px-8 lg:px-14">

            <nav class="h-[90px] flex items-center justify-between border-b border-amber-700/40">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex-shrink-0">
                    <img
                        src="{{ asset('images/nusantaralogo.png') }}"
                        alt="Caterindo Nusantara"
                        class="w-[120px] lg:w-[130px] h-auto object-contain"
                    >
                </a>

                <div class="flex items-center gap-5 lg:gap-6">
                <!-- Nav tengah -->
                <div class="hidden md:flex items-center gap-5 lg:gap-7">

                    <a href="{{ route('home') }}"
                       class="text-sm lg:text-base font-semibold whitespace-nowrap transition duration-300
                              {{ request()->routeIs('home') ? 'text-white' : 'text-white/80 hover:text-white' }}">
                        Home
                    </a>

                    <a href="{{ route('menu') }}"
                       class="text-sm lg:text-base font-semibold whitespace-nowrap transition duration-300
                              {{ request()->routeIs('menu') ? 'text-white' : 'text-white/80 hover:text-white' }}">
                        Menu
                    </a>

                    <a href="#harga" class="nav-hash-link text-sm lg:text-base font-semibold text-white/80 hover:text-white whitespace-nowrap transition duration-300">
                        Harga
                    </a>

                    <a href="{{ route('tentang') }}"
                       class="text-sm lg:text-base font-semibold whitespace-nowrap transition duration-300
                              {{ request()->routeIs('tentang') ? 'text-white' : 'text-white/80 hover:text-white' }}">
                        Tentang
                    </a>

                    <a href="#testimoni" class="nav-hash-link text-sm lg:text-base font-semibold text-white/80 hover:text-white whitespace-nowrap transition duration-300">
                        Testimoni
                    </a>

                    <a href="#kontak" class="nav-hash-link text-sm lg:text-base font-semibold text-white/80 hover:text-white whitespace-nowrap transition duration-300">
                        Kontak
                    </a>

                </div>

                <!-- Kanan: ikon + tombol -->
                <div class="hidden md:flex items-center gap-5 lg:gap-6">

                    <div class="flex items-center gap-4 text-white/80">
                        @auth
                            @if (auth()->user()->role === 'admin')
                                <a href="{{ route('admin.menus.index') }}" class="group relative flex flex-col items-center hover:text-amber-400">
                                    <i class="fa-solid fa-sliders text-lg"></i>
                                    <div class="absolute top-full mt-2 hidden group-hover:flex flex-col items-center z-10">
                                        <div class="w-0 h-0 border-x-4 border-x-transparent border-b-4 border-b-stone-800"></div>
                                        <span class="whitespace-nowrap rounded bg-stone-800 px-2 py-1 text-xs text-white shadow-md">
                                            Kelola menu, ulasan, dan lainnya
                                        </span>
                                    </div>
                                </a>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="group relative flex flex-col items-center hover:text-amber-400">
                                    <i class="fa-solid fa-arrow-right-from-bracket text-lg"></i>
                                    <div class="absolute top-full mt-2 hidden group-hover:flex flex-col items-center z-10 pointer-events-none">
                                        <div class="w-0 h-0 border-x-4 border-x-transparent border-b-4 border-b-stone-800"></div>
                                        <span class="whitespace-nowrap rounded bg-stone-800 px-2 py-1 text-xs text-white shadow-md font-normal">
                                            Keluar dari akun
                                        </span>
                                    </div>
                                </button>
                            </form>
                        @endauth

                        <button class="group relative flex flex-col items-center hover:text-amber-400">
                            <i class="fa-solid fa-bag-shopping text-lg"></i>
                            <div class="absolute top-full mt-2 hidden group-hover:flex flex-col items-center z-10 pointer-events-none">
                                <div class="w-0 h-0 border-x-4 border-x-transparent border-b-4 border-b-stone-800"></div>
                                <span class="whitespace-nowrap rounded bg-stone-800 px-2 py-1 text-xs text-white shadow-md font-normal">
                                    Keranjang
                                </span>
                            </div>
                        </button>
                    </div>

                    <a href="https://wa.me/628120000000?text=Halo%20Catering%20Nusantara,%20saya%20ingin%20konsultasi%20mengenai%20paket%20menu%20untuk%20acara%20keluarga/kantor."
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center gap-2 bg-amber-600 hover:bg-amber-500 text-white text-sm lg:text-base
                              px-5 lg:px-6 py-2.5 lg:py-3 rounded-full whitespace-nowrap transition duration-300">
                        <i class="fa-solid fa-utensils"></i>
                        <span>Pesan Sekarang</span>
                    </a>

                </div>
                </div>

                <!-- Hamburger mobile -->
                <button type="button" class="md:hidden text-white text-2xl">
                    <i class="fa-solid fa-bars"></i>
                </button>

            </nav>

        </div>

    </div>

</header>

    @yield('content')

    <!-- Footer -->
    {{-- <footer class="bg-stone-100 border-t border-stone-200 mt-10">
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
    </footer> --}}

    <!-- Script khusus untuk menangani status aktif pada link anchor (#) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hashLinks = document.querySelectorAll('.nav-hash-link');
            
            hashLinks.forEach(link => {
                link.addEventListener('click', function() {
                    hashLinks.forEach(l => l.classList.remove('text-stone-900', 'font-semibold', 'border-b-2', 'border-stone-900'));
                    this.classList.add('text-stone-900', 'font-semibold', 'border-b-2', 'border-stone-900');
                });
            });
        });
    </script>
</body>
</html>