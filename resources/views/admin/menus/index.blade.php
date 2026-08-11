@extends('layouts.app')

@section('title', 'Kelola Menu')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-10">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-stone-900">Kelola Menu</h1>
        <div class="flex gap-3">
            <a href="{{ route('admin.menus.featured') }}"
            class="border border-orange-400 text-orange-500 hover:bg-orange-50 font-semibold px-5 py-2.5 rounded-full text-sm">
                <i class="fa-solid fa-star mr-1"></i> Menu Andalan
            </a>
            <a href="{{ route('admin.menus.create') }}"
            class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-5 py-2.5 rounded-full text-sm">
                + Tambah Menu
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full text-sm text-left">
            <thead class="bg-stone-50 text-stone-500 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">Gambar</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Harga</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
                @forelse ($menus as $menu)
                    <tr>
                        <td class="px-6 py-3">
                            <img src="{{ $menu->gambar ? asset('storage/'.$menu->gambar) : asset('images/placeholder.jpg') }}"
                                 class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="px-6 py-3 font-medium text-stone-800">{{ $menu->nama }}</td>
                        <td class="px-6 py-3">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-3">
                            @if ($menu->aktif)
                                <span class="bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full">
                                    <i class="fa-solid fa-check mr-1"></i> Tampil di Home
                                </span>
                            @else
                                <span class="bg-stone-100 text-stone-500 text-xs font-semibold px-3 py-1 rounded-full">Tidak Tampil</span>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-right space-x-3">
                            <a href="{{ route('admin.menus.edit', $menu) }}" class="text-orange-500 hover:underline">Edit</a>
                            <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Yakin mau hapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-6 text-center text-stone-400">Belum ada menu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection