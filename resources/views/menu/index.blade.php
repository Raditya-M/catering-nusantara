@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-14">

    <div class="text-center max-w-xl mx-auto mb-12">
        <p class="text-orange-500 font-semibold text-sm mb-2">Menu Kami</p>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-stone-900">
            Semua Pilihan Menu Catering
        </h1>
        <p class="text-stone-500 text-sm mt-3">
            Pilih menu favoritmu buat acara kamu, dijamin fresh dan lezat.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pt-10">
        @forelse ($menus as $menu)
            <a href="{{ route('menu.show', $menu) }}"
               class="relative rounded-3xl pt-14 pb-6 px-5 text-center shadow-sm bg-white text-stone-800 block hover:shadow-md transition">

                <div class="absolute -top-10 left-1/2 -translate-x-1/2 w-24 h-24 rounded-full overflow-hidden
                            ring-4 ring-white shadow-md">
                    <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                         alt="{{ $menu->nama }}"
                         class="w-full h-full object-cover">
                </div>

                <h3 class="font-bold text-lg leading-snug mt-2">
                    {{ $menu->nama }}
                </h3>

                <div class="flex items-center justify-between mt-4">
                    <span class="font-bold text-lg">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                </div>
            </a>
        @empty
            <p class="col-span-4 text-center text-stone-400 py-10">Belum ada menu tersedia.</p>
        @endforelse
    </div>

    @if ($menus->hasPages())
        <div class="mt-12">
            {{ $menus->links() }}
        </div>
    @endif

</section>
@endsection