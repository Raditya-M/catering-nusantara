@extends('layouts.app')

@section('title', 'Testimoni')

@section('content')

<section class="bg-stone-900 py-24">
    <div class="max-w-3xl mx-auto px-6 text-center mt-5">
        <div class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider rounded-md">
            <i class="fa-solid fa-comment-dots"></i>
            Testimoni
        </div>
        <h1 class="text-white text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight">
            Apa Kata Mereka?
        </h1>
        <p class="mt-4 text-white/60 text-base">
            Pengalaman nyata pelanggan yang sudah mesen di Catering Nusantara.
        </p>
    </div>
</section>

<section class="bg-stone-50 py-20">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
            @forelse ($testimonis as $testimoni)
                <div class="bg-white rounded-2xl p-6 shadow-sm">
                    <div class="text-amber-500 mb-3">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa-{{ $i <= $testimoni->rating ? 'solid' : 'regular' }} fa-star text-sm"></i>
                        @endfor
                    </div>
                    <p class="text-stone-600 text-sm leading-relaxed mb-5">
                        "{{ $testimoni->pesan }}"
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-sm">
                            {{ strtoupper(substr($testimoni->nama, 0, 1)) }}
                        </div>
                        <p class="font-semibold text-stone-800 text-sm">{{ $testimoni->nama }}</p>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-stone-400 py-10">Belum ada testimoni. Jadilah yang pertama!</p>
            @endforelse
        </div>

        @if ($testimonis->hasPages())
            <div class="flex justify-center mb-20">
                {{ $testimonis->links() }}
            </div>
        @endif

        <!-- Form tulis testimoni -->
        <div class="max-w-xl mx-auto bg-white rounded-2xl shadow-sm p-8">
            <h2 class="text-xl font-bold text-stone-900 mb-1">Punya Pengalaman Mesen di Sini?</h2>
            <p class="text-sm text-stone-500 mb-6">Ceritain pengalamanmu, testimoni kamu akan tampil setelah ditinjau.</p>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('testimoni.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-stone-700 mb-1">Nama Kamu</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                           class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">
                    @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-stone-700 mb-1">Rating</label>
                    <select name="rating" class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">
                        @for ($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }} Bintang</option>
                        @endfor
                    </select>
                    @error('rating') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-stone-700 mb-1">Ceritakan Pengalamanmu</label>
                    <textarea name="pesan" rows="4"
                              placeholder="Gimana pelayanan, rasa makanan, ketepatan waktu, dll?"
                              class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm">{{ old('pesan') }}</textarea>
                    @error('pesan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <button type="submit"
                        class="w-full bg-amber-600 hover:bg-amber-500 text-white font-semibold py-3 transition duration-300">
                    Kirim Testimoni
                </button>
            </form>
        </div>

    </div>
</section>

@endsection