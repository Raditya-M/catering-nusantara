@extends('layouts.app')

@section('title', 'Kelola Menu')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-10">

    <div class="flex items-center justify-between mb-6 mt-15">
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

        <!-- Kelola Testimoni -->
    <div class="flex items-center justify-between mb-6 mt-14">
        <h1 class="text-2xl font-bold text-stone-900">Kelola Testimoni</h1>
    </div>

    <!-- Form tambah testimoni manual -->
    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <h2 class="text-sm font-semibold text-stone-700 mb-4">
            <i class="fa-solid fa-plus text-orange-400 mr-1"></i> Tambah Testimoni (untuk pelanggan yang belum menulis sendiri)
        </h2>

        <form action="{{ route('admin.testimoni.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @csrf
            <div>
                <label class="block text-xs font-medium text-stone-500 mb-1">Nama Pelanggan</label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                       class="w-full border border-stone-300 rounded-lg px-3 py-2 text-sm">
                @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-medium text-stone-500 mb-1">Rating (1-5)</label>
                <input type="number" name="rating" min="1" max="5" value="{{ old('rating', 5) }}"
                       class="w-full border border-stone-300 rounded-lg px-3 py-2 text-sm">
                @error('rating') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-medium text-stone-500 mb-1">Pesan / Pengalaman</label>
                <textarea name="pesan" rows="3"
                          class="w-full border border-stone-300 rounded-lg px-3 py-2 text-sm">{{ old('pesan') }}</textarea>
                @error('pesan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="sm:col-span-2">
                <button type="submit"
                        class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-5 py-2.5 rounded-full text-sm">
                    Simpan Testimoni
                </button>
            </div>
        </form>
    </div>

    <!-- Tabel testimoni -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full text-sm text-left">
            <thead class="bg-stone-50 text-stone-500 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Pesan</th>
                    <th class="px-6 py-3">Rating</th>
                    <th class="px-6 py-3">Tampil Publik</th>
                    <th class="px-6 py-3">Tampil Home</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
                @forelse ($testimonis as $testimoni)
                    <tr>
                        <td class="px-6 py-3 font-medium text-stone-800">{{ $testimoni->nama }}</td>
                        <td class="px-6 py-3 text-stone-500 max-w-xs truncate">{{ $testimoni->pesan }}</td>
                        <td class="px-6 py-3 text-amber-500">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa-{{ $i <= $testimoni->rating ? 'solid' : 'regular' }} fa-star text-xs"></i>
                            @endfor
                        </td>
                        <td class="px-6 py-3">
                            <form action="{{ route('admin.testimoni.approve', $testimoni) }}" method="POST">
                                @csrf
                                <button type="submit"
                                        class="text-xs font-semibold px-3 py-1 rounded-full transition
                                               {{ $testimoni->disetujui
                                                    ? 'bg-green-100 text-green-600 hover:bg-green-200'
                                                    : 'bg-stone-100 text-stone-500 hover:bg-stone-200' }}">
                                    {{ $testimoni->disetujui ? 'Disetujui' : 'Menunggu' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-3">
                            <form action="{{ route('admin.testimoni.home', $testimoni) }}" method="POST">
                                @csrf
                                <button type="submit"
                                        class="text-xs font-semibold px-3 py-1 rounded-full transition
                                               {{ $testimoni->tampil_home
                                                    ? 'bg-orange-100 text-orange-600 hover:bg-orange-200'
                                                    : 'bg-stone-100 text-stone-500 hover:bg-stone-200' }}">
                                    {{ $testimoni->tampil_home ? 'Tampil' : 'Tidak' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-3 text-right">
                            <form action="{{ route('admin.testimoni.destroy', $testimoni) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Yakin mau hapus testimoni ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-6 text-center text-stone-400">Belum ada testimoni.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</section>
@endsection