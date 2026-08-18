@extends('layouts.app')

@section('title', 'Menu Andalan')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-10 mt-15">

    <div class="flex items-center justify-between mb-2">
        <h1 class="text-2xl font-bold text-stone-900">Pilih Menu Andalan</h1>
        <a href="{{ route('admin.menus.index') }}" class="text-sm text-stone-500 hover:underline">
            &larr; Kembali ke Kelola Menu
        </a>
    </div>
    <p class="text-sm text-stone-500 mb-6">
        Pilih maksimal <span class="font-semibold text-orange-500">4 menu</span> yang bakal tampil di halaman utama (home).
    </p>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif
    @error('featured')
        <div class="bg-red-100 text-red-700 text-sm px-4 py-3 rounded-lg mb-6">
            {{ $message }}
        </div>
    @enderror

    <form action="{{ route('admin.menus.featured.update') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            @forelse ($menus as $menu)
                <label class="flex items-center gap-4 border rounded-2xl px-4 py-3 cursor-pointer
                               has-[:checked]:border-orange-400 has-[:checked]:bg-orange-50 transition">
                    <input type="checkbox" name="featured[]" value="{{ $menu->id }}"
                           class="featured-checkbox w-4 h-4 rounded border-stone-300 text-orange-400 focus:ring-orange-400"
                           {{ $menu->aktif ? 'checked' : '' }}>

                    <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                         class="w-12 h-12 rounded-full object-cover">

                    <div>
                        <p class="font-medium text-stone-800 text-sm">{{ $menu->nama }}</p>
                        <p class="text-xs text-stone-400">${{ number_format($menu->harga, 2) }}</p>
                    </div>
                </label>
            @empty
                <p class="col-span-2 text-center text-stone-400 py-6">Belum ada menu. Tambah dulu di Kelola Menu.</p>
            @endforelse
        </div>

        <p class="text-xs text-stone-500 mb-4">
            <span id="counter">0</span>/4 menu dipilih
        </p>

        <button type="submit"
                class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-6 py-2.5 rounded-full text-sm">
            Simpan Pilihan
        </button>
    </form>
</section>

<script>
    const checkboxes = document.querySelectorAll('.featured-checkbox');
    const counter = document.getElementById('counter');

    function updateCounter() {
        const checked = document.querySelectorAll('.featured-checkbox:checked').length;
        counter.textContent = checked;

        checkboxes.forEach(cb => {
            if (!cb.checked) {
                cb.disabled = checked >= 4;
            }
        });
    }

    checkboxes.forEach(cb => cb.addEventListener('change', updateCounter));
    updateCounter();
</script>
@endsection