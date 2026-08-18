@extends('layouts.app')

@section('title', 'Edit Menu')

@section('content')
<section class="max-w-xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-stone-900 mb-6">Edit Menu</h1>

    <form action="{{ route('admin.menus.update', $menu) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-stone-700 mb-1">Nama Menu</label>
            <input type="text" name="nama" value="{{ old('nama', $menu->nama) }}"
                   class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">
            @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-stone-700 mb-1">Paket</label>
            <select name="paket" class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">
                <option value="silver" {{ old('paket', $menu->paket ?? '') == 'silver' ? 'selected' : '' }}>Silver</option>
                <option value="gold" {{ old('paket', $menu->paket ?? '') == 'gold' ? 'selected' : '' }}>Gold</option>
                <option value="premium" {{ old('paket', $menu->paket ?? '') == 'premium' ? 'selected' : '' }}>Premium</option>
            </select>
            @error('paket') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-stone-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4"
                      placeholder="Ceritain sedikit tentang menu ini, bahan-bahannya, cocok buat acara apa, dsb."
                      class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
            @error('deskripsi') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-stone-700 mb-1">Harga</label>
            <input type="number" step="0.01" name="harga" value="{{ old('harga', $menu->harga) }}"
                   class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">
            @error('harga') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-stone-700 mb-1">Gambar</label>
            @if ($menu->gambar)
                <img src="{{ asset('storage/'.$menu->gambar) }}" class="w-16 h-16 rounded-full object-cover mb-2">
            @endif
            <input type="file" name="gambar" accept="image/*"
                   class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">
            @error('gambar') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit"
                    class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-6 py-2.5 rounded-full text-sm">
                Update
            </button>
            <a href="{{ route('admin.menus.index') }}"
               class="text-stone-500 hover:text-stone-700 px-6 py-2.5 text-sm">Batal</a>
        </div>
    </form>
</section>
@endsection