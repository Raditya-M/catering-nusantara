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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <style>
        /* Swup v4 pakai class "is-animating", bukan "is-changing" */
        html.is-animating .transition-main {
            opacity: 0;
        }

        .transition-main {
            opacity: 1;
            transition: opacity 0.35s ease;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-stone-800">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50">

    <div class="bg-black/20 backdrop-blur-[2px] p-2">

        <div class="max-w-[1600px] mx-auto px-8 lg:px-14">

            <nav class="h-[90px] flex items-center justify-between border-amber-700/40">

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
                <div id="nav-container" class="hidden md:flex items-center gap-5 lg:gap-7 relative">

                    <a href="{{ route('home') }}" data-nav-link
                       class="nav-link text-sm lg:text-base font-semibold whitespace-nowrap transition-colors duration-300 pb-1 text-white/80 hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('menu') }}" data-nav-link
                       class="nav-link text-sm lg:text-base font-semibold whitespace-nowrap transition-colors duration-300 pb-1 text-white/80 hover:text-white">
                        Menu
                    </a>

                    <a href="{{ route('tentang') }}" data-nav-link
                       class="nav-link text-sm lg:text-base font-semibold whitespace-nowrap transition-colors duration-300 pb-1 text-white/80 hover:text-white">
                        Tentang
                    </a>

                    <a href="{{ route('testimoni') }}" data-nav-link
                       class="nav-link text-sm lg:text-base font-semibold whitespace-nowrap transition-colors duration-300 pb-1 text-white/80 hover:text-white">
                        Testimoni
                    </a>

                    <a href="{{ route('kontak') }}" data-nav-link
                       class="nav-link text-sm lg:text-base font-semibold whitespace-nowrap transition-colors duration-300 pb-1 text-white/80 hover:text-white">
                        Kontak
                    </a>

                    <span id="nav-underline"
                          class="absolute bottom-0 h-[2px] bg-amber-500 rounded-full transition-all duration-300 ease-out"
                          style="left:0; width:0;"></span>

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

    <main id="swup" class="transition-main">
        @yield('content')
    </main>

    <!-- Footer -->
<footer class="bg-stone-100 border-t border-stone-200 mt-10">
    <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-sm">
        
        <!-- Kolom 1: Pengiriman -->
        <div>
            <h4 class="font-semibold mb-3">Pengiriman</h4>
            <p class="text-stone-500">Cabang Jakarta Selatan<br>Senin - Minggu: 06.00 - 18.00</p>
            <p class="text-stone-500 mt-3">Cabang Jakarta Timur<br>Senin - Sabtu: 06.00 - 18.00</p>
        </div>

        <!-- Kolom 2: Hubungi Kami -->
        <div>
            <h4 class="font-semibold mb-3">Hubungi Kami</h4>
            <p class="text-stone-500"><i class="fa-brands fa-whatsapp mr-1"></i> 0812-0000-000 (Sales)</p>
            <p class="text-stone-500"><i class="fa-brands fa-whatsapp mr-1"></i> 0812-0000-001 (CS)</p>
        </div>

        <!-- Kolom 3: Informasi -->
        <div>
            <h4 class="font-semibold mb-3">Informasi</h4>
            <ul class="text-stone-500 space-y-1">
                <li><a href="{{ route('tentang') }}" class="hover:text-amber-600 transition">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-amber-600 transition">FAQ</a></li>
                <li><a href="#" class="hover:text-amber-600 transition">Syarat dan Ketentuan</a></li>
            </ul>
        </div>

        <!-- Kolom 4: Peta Lokasi -->
        <div>
            <h4 class="font-semibold mb-3">Lokasi Kami</h4>
            <div class="w-full h-36 rounded-lg overflow-hidden border border-stone-300 shadow-sm">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31704.616192198915!2d106.73990837910158!3d-6.637356799999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf8b01d708d3%3A0xc9a6312d5ab47a1!2sPecel%20Ayam%2099!5e0!3m2!1sid!2sid!4v1787035706694!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <a 
                href="https://maps.app.goo.gl/6XWvgdmwHBtaVLys8" 
                target="_blank" 
                class="inline-block text-xs text-amber-600 hover:text-amber-700 font-medium mt-2"
            >
                Buka di Google Maps <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
            </a>
        </div>

    </div>

    <!-- Copyright -->
    <div class="text-center text-xs text-stone-400 py-4 border-t border-stone-200">
        &copy; {{ date('Y') }} Catering Nusantara. All Rights Reserved.
    </div>
</footer>

    <script src="https://unpkg.com/swup@4/dist/Swup.umd.js"></script>

    <!-- initNavbarScripts di scope global, dipanggil ulang tiap ganti halaman -->
    <script>
        function initNavbarScripts() {
            const container = document.getElementById('nav-container');
            const underline  = document.getElementById('nav-underline');
            const navLinks   = document.querySelectorAll('.nav-link');

            // Tentuin link aktif berdasarkan URL saat ini (bukan class dari Blade,
            // karena header nggak ikut di-render ulang sama Swup)
            let activeLink = null;
            navLinks.forEach(link => {
                const isActive = link.pathname === window.location.pathname;
                link.classList.toggle('text-white', isActive);
                link.classList.toggle('active-link', isActive);
                link.classList.toggle('text-white/80', !isActive);
                if (isActive) activeLink = link;
            });

            function moveUnderline(target) {
                if (!target || !container || !underline) return;
                const containerRect = container.getBoundingClientRect();
                const linkRect = target.getBoundingClientRect();
                underline.style.left  = (linkRect.left - containerRect.left) + 'px';
                underline.style.width = linkRect.width + 'px';
            }

            if (activeLink) {
                underline.style.transition = 'none';
                moveUnderline(activeLink);
                requestAnimationFrame(() => { underline.style.transition = ''; });
            } else {
                underline.style.width = '0px';
            }

            navLinks.forEach(link => {
                link.addEventListener('mouseenter', () => moveUnderline(link));
            });

            if (container) {
                container.onmouseleave = () => {
                    if (activeLink) moveUnderline(activeLink);
                };
            }

            window.onresize = () => {
                if (activeLink) moveUnderline(activeLink);
            };
        }

        document.addEventListener('DOMContentLoaded', () => {
            initNavbarScripts();

            const swup = new Swup({
                containers: ['#swup'],
            });

            swup.hooks.on('page:view', () => {
                initNavbarScripts();
            });

            // --- Status aktif untuk anchor link (#section) ---
            document.addEventListener('click', (e) => {
                const link = e.target.closest('.nav-hash-link');
                if (!link) return;
                document.querySelectorAll('.nav-hash-link').forEach(l =>
                    l.classList.remove('text-stone-900', 'font-semibold', 'border-b-2', 'border-stone-900')
                );
                link.classList.add('text-stone-900', 'font-semibold', 'border-b-2', 'border-stone-900');
            });
        });
    </script>
</body>
</html>